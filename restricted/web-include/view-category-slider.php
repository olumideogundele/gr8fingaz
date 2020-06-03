 
<?php
 
include ("restricted/config/DB_config.php"); 

 $myName = new Name();
 if(isset($_SESSION['email']))
 {
 $emailing = $_SESSION['email'];
 }
 
$query = "";
 
 

 $query =  "SELECT  `id`, `name`, `status`, `created_date`, `registeredby`, `unique`, `icon` , `images`   FROM `categories` WHERE `status` = 1   ORDER BY RAND() ASC  LIMIT 6";	
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
						   	$images =$row_distance[7];
	 
		 
		 
		 $product_count = $myName->showName($conn, "SELECT count(`id`) FROM `product` WHERE `category` = '$id'"); 
		 
		 
		 echo '<div class="col-lg-4 col-sm-6">
					<a href="providers.php?code='.$unique.'" class="grid_item">
						<figure>
							<img src="restricted/'.$images.'" alt="'.$name.'">
							<div class="info">
								<small>'. $product_count.' Services</small>
								<h3>'.$name.'</h3>
							</div>
						</figure>
					</a>
				</div>';
		 
 
	 
}
 
						  
				 	
				 
			 
					}
		   
	 
?>