 
<?php
 
include ("restricted/config/DB_config.php"); 

 $myName = new Name();
 if(isset($_SESSION['email']))
 {
 $emailing = $_SESSION['email'];
 }
 
$query = "";
 


 $query =  "SELECT  `id`, `name`, `status`, `created_date`, `registeredby`, `unique`  FROM `categories` WHERE `status` = 1";	
 $extract_distance = mysqli_query($conn, $query) or die(mysqli_error($conn));
		$count = mysqli_num_rows($extract_distance);
    if ($count > 0)
		  {
 	 while ($row_distance=mysqli_fetch_row($extract_distance))
    {
  						  	$id =$row_distance[0];
						   	$name =$row_distance[1];
					  		$status =$row_distance[2];
					  		$created_date =$row_distance[3];
						   	$registeredby =$row_distance[4];
						   	$unique =$row_distance[5];
		 echo "<option value = ".$unique.">".$name."</option>";
		 
 
	 
}
 
						  
				 	
				 
			 
					}
		   
	 
?>