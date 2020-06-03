<?php
$conn = mysql_connect("localhost", "user", "passwd");
if (!$conn) {
  die("Could not connect: ". mysql_error());
}
if (!mysql_select_db("database", $conn)) {
  die("Could select db: ". mysql_error());
}

// YOUR DOMAIN API KEY
$api_key = "ABCDEFGHIJK";

$query = "select * from buildings where building_latitude is null and building_longitude is null order by building_id";
$result = mysql_query($query);

while ($row = mysql_fetch_array($result)) {

  // SET ADDRESS
  $address = urlencode($row["building_street"]." ".$row["building_street_nr"]." ".$row["building_city"]." Czech republic");

  // URL TO HTTP REQUEST
  $link = "http://maps.google.com/maps/geo?q=".$address."&key=".$api_key."&sensor=false&output=csv&oe=utf8";

  // WE GET FILE CONTENT
  $page = file_get_contents($link);

  // WE OBTAIN DATA FROM GIVEN CSV
  list($status, $accuracy, $latitude, $longitude) = explode(",", $page);

  // IF EVERYTHING OK AND ACCURANCY GREATER THEN 3 WE SAVE COORDINATES
  if (($status == 200) and ($accuracy>=4)) {
    $query_edit = "update buildings set building_latitude = '".$latitude."',
    building_longitude = '".$longitude."'
    where building_id = '".$row["building_id"]."'";
    $result_edit = mysql_query($query_edit);
    echo $row["building_id"]." - OK<br />";
  } else {
    echo $row["building_id"]." - ERROR<br />";
  }

  // TIMER BECAUSE GOOGLE DOESN'T LIKE TO BE QUERIED IN SHORT TIME
  sleep(3);
}

mysql_close($conn);
?>