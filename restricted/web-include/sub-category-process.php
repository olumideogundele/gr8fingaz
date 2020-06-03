 <?php
 
 include("config/DB_config.php");
$emailing = "";
 
 if(isset($_POST['validate']))
 {
 
 if(isset($_SESSION['email']))
 {
$emailing  = $_SESSION['email'];
 }

 
 
$name= $_POST['name'];
$status  = $_POST['status'];
$category  = $_POST['category'];
	 
	  
 
  $extract_user = mysqli_query($conn, "SELECT * FROM `subcategories` WHERE `name` = '$name' AND `category` = '$category'") or die(mysqli_error($conn));
		$count = mysqli_num_rows($extract_user);
		 if ($count > 0) {
 
		 
  
echo "<div class='btn btn-danger btn-lg'> Information in the database already. Please check..</div>";
 
 
		 }else
		 {
 
 
 	 
$sql = 	 "INSERT INTO `subcategories`(`name`, `category`,`status`, `created_date`, `registeredby`) VALUES
('$name',   '$category','$status',  '$datetime', '$emailing')";
 
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

 