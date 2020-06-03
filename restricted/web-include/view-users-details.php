s 
<?php
 include ("../restricted/config/DB_config.php"); 
  $myName = new Name();
 if(isset($_SESSION['email']))
 {
 $emailing = $_SESSION['email'];
 }

$query = "";
 
 $query =  "SELECT  `id`, `email`, `fname`, `lname`, `cname`, `country`, `created_date`, `address1`, `address2`, `city`, `states`, `lati`, `longi`, `usertype`,`account_number`, `category`, `phone` FROM `sp_registration`  WHERE `account_number` = '$emailing'";	
 
 
 $extract_distance = mysqli_query($conn, $query) or die(mysqli_error($conn));
		$count = mysqli_num_rows($extract_distance);
    if ($count > 0)
		  {
 	 while ($row_distance=mysqli_fetch_row($extract_distance))
    {
  						  $id =$row_distance[0];
						   $email =$row_distance[1];
					  $fname =$row_distance[2];
		
		 				$lname =$row_distance[3];
						   $cname =$row_distance[4];
					  $country =$row_distance[5];
					  $created_date =$row_distance[6];
					    $address1 =$row_distance[7];
		  $address2 =$row_distance[8];
		  $city =$row_distance[9];
		  $states =$row_distance[10];
		  $lati =$row_distance[11];
		  $longi =$row_distance[12];
		  $usertype =$row_distance[13];
		  $account_number =$row_distance[14];
		  $category =$row_distance[15];
		  $phone =$row_distance[16];
						 
			
		 if($usertype == 2)
		 {
			 
			 $category_name = $myName->showName($conn, "SELECT  `name` FROM `categories` WHERE `unique` = '$category'"); 
			 $category_id = $myName->showName($conn, "SELECT  `id` FROM `categories` WHERE `unique` = '$category'"); 
		 }
		 
 
 
 




 
											 
											     
									 
	 
}
 
						  
				 	
				 
			 
					}
		   
	 
?>