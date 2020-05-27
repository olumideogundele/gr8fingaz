 
<?php
include ("config/DB_config.php"); 
 $myName = new Name();
 if(isset($_SESSION['email']))
 {
 $emailing = $_SESSION['email'];
 }
 
$query = "";
 
 if(isset($_GET['value']))
 {

	 $value = $_GET['value'];
	 
 $query =  "SELECT `id`, `category`, `subcategory`, `name`, `status`, `created_date`, `registeredby` FROM `product`  WHERE `id` = '$value'" ;	
 $extract_distance = mysqli_query($conn, $query) or die(mysqli_error($conn));
		$count = mysqli_num_rows($extract_distance);
    if ($count > 0)
		  {
 	 while ($row_distance=mysqli_fetch_row($extract_distance))
    {
  						  	$id =$row_distance[0];
  						  	$iding =$row_distance[0];
  						  	$category_value1 =$row_distance[1];
						   	$subcategory_value1 =$row_distance[2];
						   	$productname =$row_distance[3];
					  		$status =$row_distance[4];
					  		$created_date =$row_distance[5];
						   	$registeredby =$row_distance[6];
					  		 
						 	 
 $statusCSS = "";
$statusParam = "";
if($status == 1)
{
 $statusCSS = "badge badge-success m-b-5";
$statusParam = "Active";
}			
else  if($status == 0)
{
 $statusCSS = "badge badge-danger m-b-5";
$statusParam = "Not Active";
}
 
		 
										 
 $category_name1 = $myName->showName($conn, "SELECT  `name` FROM  `categories` WHERE  `id` = '$category_value1'");
 $subcategory_name1 = $myName->showName($conn, "SELECT  `name` FROM `subcategories` WHERE  `id` = '$subcategory_value1'");
 
	 
}
 
						  
				 	}
				 
			 
					}
		   
	 
?>