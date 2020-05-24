 <?php
 
 include("config/DB_config.php");
$emailing = "";
 
 if(isset($_POST['validate']))
 {
 
 if(isset($_SESSION['email']))
 {
$emailing  = $_SESSION['email'];
 }

//$account_number  =  $_POST['account_number'];
$name  =  mysqli_real_escape_string($conn,$_POST['name']);
$phone  =  mysqli_real_escape_string($conn,$_POST['phone']);
$email  =  mysqli_real_escape_string($conn,$_POST['email']);
$address  =  mysqli_real_escape_string($conn,$_POST['address']);

$usertype =  mysqli_real_escape_string($conn,$_POST['usertype']);
	 	  $account_number = "ATV".rand(10, 99).rand(11, 89).rand(10, 99);		
			 
 
 
  $extract_user = mysqli_query($conn, "SELECT * FROM `user_unit` WHERE  (`name` = '$name' OR `account_number` = '$account_number'  OR `phone` = '$phone' OR `email` = '$email')") or die(mysqli_error($conn));
		$count = mysqli_num_rows($extract_user);
		 if ($count > 0) {
	 	 
	echo'<a href="#" class="btn btn-danger btn-lg">Information in the  database already.  <br />Please check and try again later.</a><br />';


	
 
		 }else
		 {
 
 /*   var x = Math.floor((Math.random() * 234567) + 123456);
  document.getElementById("since").value = "ATV"+x;*/
			 
		
			 
 	  
 $password = rand(3455, 827365345);					
$uuid = uniqid('', true);

$salt = sha1(rand());
        $salt = substr($salt, 0, 10);
        $encrypted = base64_encode(sha1($password . $salt, true) . $salt);
        $hash = array("salt" => $salt, "encrypted" => $encrypted);
         
        $encrypted_password = $hash["encrypted"]; // encrypted password
        $salt = $hash["salt"]; // salt
 
	 
	 
$sql = 	 "INSERT INTO `user_unit`(`usertype`,`name`, `account_number`, `phone`, `email`, `address`, `created_date`, `registeredby`, `status`, `unique_id`, `encrypted_password`, `salt`, `irrelivant`) VALUES
('$usertype','$name', '$account_number', '$phone', '$email', '$address', '$datetime', '$emailing',1, '$uuid' ,'$encrypted_password','$salt', '$password')";
 
 $process = mysqli_query($conn, $sql) or die(mysqli_error($conn));
 
	if ($process) { 
		 
		 
		 
		  	 $Phone = $phone;
  
  $message = "Welcome to ".$inst_name." ".$name."! Username:".$account_number.".Password:".$password.". Thank You.";

  
  	 $Sending = new SendingSMS(); 
  			$arr = explode(' ',trim($inst_name));
$sender = substr($arr[0], 0, 10);				 
						$Sending->smsAPI($Phone,$sender,$message);
							 
		 
 
  echo '<div class="btn btn-success btn-lg">Information Submitted Successfully. Please wait.</a></div><br />'; 	
  
  
   echo '<meta http-equiv="Refresh" content="2; url= rights-setup-menu.php?user='.$account_number.'"> ';
  
  
 
  
  
   
} else {
  // echo "Error: " . $sql . "<br>" . $conn->error;
    $error="Not Inserted,Some Problem occured.";
echo'<a href="#"class="btn btn-danger btn-lg">Information Not Submitted Successfully.  <br />Please try again later.</a><br />';  

}

 
		 
 
		
 
 }
 		 
 }

 
$conn->close();
	
 
?>

 