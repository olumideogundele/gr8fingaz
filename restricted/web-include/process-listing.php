 <?php
 
 //include("config/DB_config.php");
$emailing = "";
 
 if(isset($_POST['validate']))
 {
 
 if(isset($_SESSION['email']))
 {
$emailing  = $_SESSION['email'];
 }

	 
	 $rand = rand(2345, 33443).rand(232,87362).rand(23,45453).rand(3443,2343434);
	 
	 
$title= $_POST['title'];  
$category = $_POST['category'];
$keywords = $_POST['keywords'];
$phone = $_POST['phone'];
$details = $_POST['details'];
$website = $_POST['website'];
$email = $_POST['email'];
$facebook = $_POST['facebook'];
$twitter = $_POST['twitter'];
$googleplus = $_POST['googleplus'];
$city = $_POST['city'];
$address= $_POST['address']; 
$state = $_POST['state'];
$zip = $_POST['zip'];
$category = $_POST['category'];
	  
 
  $extract_user = mysqli_query($conn, "SELECT * FROM `listing` WHERE `title` = '$title' AND `registeredby` = '$emailing'") or die(mysqli_error($conn));
		$count = mysqli_num_rows($extract_user);
		 if ($count > 0) {
 
		 
  
echo "<div class='btn btn-danger btn-lg'> Information in the database already. Please check..</div>";
 
 
		 }else
		 {
 
 
 	 
$sql = 	 "INSERT INTO `listing`(`listing_code`, `title`, `category`, `keywords`, `phone`, `description`, `website`, `email`, `facebook`, `twitter`, `googleplus`, `city`, `address`, `state`, `zip`, `created_date`, `registeredby`, `approvedby`, `status`) VALUES
('$rand',   '$title','$category',        '$keywords',   '$phone','$details',        '$website',   '$email','$facebook',        '$twitter',   '$googleplus','$city',        '$address',   '$state','$zip',        '$datetime', '$emailing', '', '0')";
 
 $process = mysqli_query($conn, $sql) or die(mysqli_error($conn));
 
	if ($process) {
		 
 
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

 