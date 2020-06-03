 <?php
 
 include("config/DB_config.php");
$emailing = "";
  $myName = new Name();
 if(isset($_POST['validate']))
 {
 
 if(isset($_SESSION['email']))
 {
$emailing  = $_SESSION['email'];
 }

 
 
$name= $_POST['name'];
$status  = $_POST['status'];
$subcategory  = $_POST['subcategory'];
	 
	 $category_id = $myName->showName($conn, "SELECT `category` FROM `subcategories` WHERE `id` = '$subcategory'");	 
 	   
 
  $extract_user = mysqli_query($conn, "SELECT * FROM `product` WHERE (`name` = '$name' AND `subcategory` = '$subcategory' AND `category` = '$category_id')") or die(mysqli_error($conn));
		$count = mysqli_num_rows($extract_user);
		 if ($count > 0) {
 
		 
  
echo "<div class='btn btn-danger btn-lg'> Information in the database already. Please check..</div>";
 
 
		 }else
		 {
 
 
$sql = 	 "INSERT INTO `product`(`category`, `subcategory`, `name`, `status`, `created_date`, `registeredby`) VALUES
('$category_id', '$subcategory','$name',  '$status',  '$datetime', '$emailing')";
 
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
else  if(isset($_POST['update']))
 {
	
	if(isset($_SESSION['email']))
 {
$emailing  = $_SESSION['email'];
 }

 
 
$name= $_POST['name'];
$iding= $_POST['iding'];
$status  = $_POST['status'];
$subcategory  = $_POST['subcategory'];
	 
	  $category_id = $myName->showName($conn, "SELECT `category` FROM `subcategories` WHERE `id` = '$subcategory'");	 
 
 
$sql = 	 "UPDATE `product` SET `category` = '$category_id', `subcategory` = '$subcategory', `name` = '$name', `status` = '$status', `created_date` = '$datetime', `registeredby` = '$emailing' WHERE `id` = '$iding'";
 
 $process = mysqli_query($conn, $sql) or die(mysqli_error($conn));
 
	if ($process) {
		 
 
  echo '<div class="btn btn-success btn-lg">Information Updated Successfully.</a></div><br />'; 	
  
 
   
} else {
  // echo "Error: " . $sql . "<br>" . $conn->error;
    $error="Not Inserted,Some Problem occured.";
echo'<a href="#"class="btn btn-danger btn-lg">Information Not Updated Successfully.  <br />Please try again later.</a><br />';  

}

 
		 
 
		
 
 
	
	
}

 
$conn->close();
	
 
?>

 