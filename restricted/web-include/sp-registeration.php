 <?php
 
 include("config/DB_config.php");
$emailing = "";
 
 if(isset($_POST['validate']))
 {
 
 if(isset($_SESSION['email']))
 {
$emailing  = $_SESSION['email'];
 }

 
 
$cname= $_POST['cname'];
$email  = $_POST['email'];
$fname  = $_POST['fname'];
$lname  = $_POST['lname'];
$phone  = $_POST['phone'];
$status  = $_POST['status'];
$country  = $_POST['country'];
$address1  = $_POST['address1'];
$address2  = $_POST['address2'];
$city  = $_POST['city'];
$states  = $_POST['states'];
 
	 
	  
 
  $extract_user = mysqli_query($conn, "SELECT * FROM `sp_registration` WHERE (`phone` = '$phone' or `email` = '$email')") or die(mysqli_error($conn));
		$count = mysqli_num_rows($extract_user);
		 if ($count > 0) {
 
		 
  
echo "<div class='btn btn-danger btn-lg'> Information in the database already. Please check..</div>";
 
 
		 }else
		 {

			 
			function get_coordinates($address)
{
    $address = urlencode($address);
    $url = "https://maps.google.com/maps/api/geocode/json?address=$address&sensor=false&region=Poland&key=AIzaSyAGrHdhUTvfj1Fyl9Dx7_e7RstThaE1uHo";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_PROXYPORT, 3128);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    $response = curl_exec($ch);
    curl_close($ch);
    $response_a = json_decode($response);
    $status = $response_a->status;

    if ( $status == 'ZERO_RESULTS' )
    {
        return FALSE;
    }
    else
    {
 $return = array('lat' => $response_a->results[0]->geometry->location->lat, 'long' => $long = $response_a->results[0]->geometry->location->lng);
        return $return;
    }
}
 
			 $fullAddress = $address1.", ".$address2.", ".$city.", ".$states.", ".$country;
			 
			 $coordinates1 = get_coordinates($fullAddress);
			 
			$lat = $coordinates1['lat'];
				$long =  $coordinates1['long'];
			   
 $password = rand(3455, 827365345);					
$uuid = uniqid('', true);

$salt = sha1(rand());
        $salt = substr($salt, 0, 10);
        $encrypted = base64_encode(sha1($password . $salt, true) . $salt);
        $hash = array("salt" => $salt, "encrypted" => $encrypted);
         
        $encrypted_password = $hash["encrypted"]; // encrypted password
        $salt = $hash["salt"]; // salt
 
	 
			 if($lat == "")
			 {
	echo "<div class='btn btn-danger btn-lg'> Provider's coordinate cannot be retrieved. </div>";			 
				 
			 }
			 
			 
 	 
$sql = 	 "INSERT INTO `sp_registration`(`account_number`,`email`, `fname`, `lname`, `phone`, `cname`, `country`, `created_date`, `registeredby`, `status`, `address1`, `address2`, `city`, `states`, `unique_id`, `encrypted_password`, `salt`, `irrelivant`, `password_update`, `updated_at`, `lati`, `longi`) VALUES
($account_number,'$email', '$fname', '$lname','$phone','$cname','$country','$datetime','$emailing','$status','$address1','$address2','$city','$states', '$uuid' ,'$encrypted_password','$salt', '$password','0', '$datetime', '$lat', '$long')";
 
 $process = mysqli_query($conn, $sql) or die(mysqli_error($conn));
 
	if ($process) {
		 
 
		
			if($phone !="")
		{
  
			
			 $_SESSION['menu_user'] = $account_number; 
			
			
  $message = "Welcome to ".$inst_name." ".$name."! Username:".$email.".Password:".$password.". Thank You.";

  
  	 $Sending = new SendingSMS(); 
  							 
						$Sending->smsAPI($Phone,"Welcome",$message);
							 
		 }
		
		
		
  echo '<div class="btn btn-success btn-lg">Information Submitted Successfully.</a></div><br />'; 	
  
 
   
} else {
  // echo "Error: " . $sql . "<br>" . $conn->error;
    $error="Not Inserted,Some Problem occured.";
echo'<a href="#"class="btn btn-danger btn-lg">Information Not Submitted Successfully.  <br />Please try again later.</a><br />';  

}

 
		 
 
		
 
 }
 		 
 }

 
$conn->close();
	
 
?>

 