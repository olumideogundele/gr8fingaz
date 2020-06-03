 
<?php
include ("../restricted/config/DB_config.php"); 
/*include ("config/DB_config.php"); 
 $myName = new Name();*/
 if(isset($_SESSION['email']))
 {
 $emailing = $_SESSION['email'];
 }
 
$query = "";
 
 
  
	 
 $query =  "SELECT `id`, `category`, `subcategory`, `name`, `status`, `created_date`, `registeredby` FROM `product`  WHERE `category` = '$category_id' and `status` = 1" ;	
	 
	 
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
					  		 
						 	 
 	 
										 
 echo '<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<input type="text" class="form-control" name = "name[]" value= "'.$productname.'">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<input type="text" class="form-control" placeholder="Description" name="desc[]">
										</div>
									</div>
									<div class="col-md-2">
										<div class="form-group">
											<input type="text" class="form-control"  placeholder="Price" name = "price[]">
										</div>
									</div>
									<div class="col-md-2">
										<div class="form-group">
											<a class="delete" href="#"><i class="fa fa-fw fa-remove"></i></a>
										</div>
									</div>
								</div>';
 
	 
}
 
						  
				 	}
				 
			 
					
		   
	 
?>