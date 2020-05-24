 <?php
 
 include("config/DB_config.php");
$emailing = "";
 
 if(isset($_POST['validate']))
 {
 
 if(isset($_SESSION['email']))
 {
$emailing  = $_SESSION['email'];
 }
 
	 
 
	 
$name  =  mysqli_real_escape_string($conn,$_POST['name']);
$maturity  =  mysqli_real_escape_string($conn,$_POST['maturity']);
 
$investment  =  mysqli_real_escape_string($conn,$_POST['investment']);
$information =  mysqli_real_escape_string($conn,$_POST['information']);
	 $status =  mysqli_real_escape_string($conn,$_POST['status']);
	 
	 
 
 
  $extract_user = mysqli_query($conn, "SELECT * FROM `investment_type` WHERE  (`name` = '$name')") or die(mysqli_error($conn));
		$count = mysqli_num_rows($extract_user);
		 if ($count > 0) {
	 	 
	echo'<a href="#" class="btn btn-danger btn-lg">Information in the  database already.  <br />Please check and try again later.</a><br />';


	
 
		 }else
		 {
 
		
			 
 	 
	 
	 
$sql = 	 "INSERT INTO `investment_type`(`name`, `maturity`,   `investment`, `information`, `created_date`, `registeredby`, `status` ) VALUES
('$name','$maturity', '$investment', '$information', '$datetime', '$emailing','$status')";
 
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
else if(isset($_POST['update']))
{
	
	 
$name  =  mysqli_real_escape_string($conn,$_POST['name']);
$maturity  =  mysqli_real_escape_string($conn,$_POST['maturity']);
 
$investment  =  mysqli_real_escape_string($conn,$_POST['investment']);
$information =  mysqli_real_escape_string($conn,$_POST['information']);
	 $status =  mysqli_real_escape_string($conn,$_POST['status']);
	 
	$e_id = mysqli_real_escape_string($conn,$_POST['e_id']);
	  
	
		 	 	
		 
  $extract_user = mysqli_query($conn, "SELECT * FROM `investment_type` WHERE  (`id` = '$e_id')") or die(mysqli_error($conn));
		$count = mysqli_num_rows($extract_user);
		 if ($count > 0) {
	 	 
		 
	 
$sql = 	 "UPDATE `investment_type` SET `name` = '$name', `maturity` = ' $maturity', `investment` = '$investment', `information` = '$information', `registeredby` = '$emailing', `status` = '$status'  WHERE `id` = '$e_id'";
 
			 
			 
 $process = mysqli_query($conn, $sql) or die(mysqli_error($conn));
 
	if ($process) {
		 
		 
		 
		  	  
 
  echo '<div class="btn btn-success btn-lg">Information Updated Successfully.</a></div><br />'; 	
		
 
		
	}
			 else
				 
			 {
				 
				 echo '<div class="btn btn-success btn-lg">Information Not Updated Successfully.</a></div><br />'; 	 
			 }
	

	
 
		 }else
		 {
 
		echo'<a href="#" class="btn btn-danger btn-lg">Investment Information not in the  database.  <br />Please check and try again later.</a><br />';

			 
 	 

	
	
	
}
}

 
$conn->close();
	
 
?>

 