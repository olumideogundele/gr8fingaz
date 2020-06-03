 
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
	
	$realValue = $_GET['value'];
 $query =  "SELECT `id`, `name`, `maturity`,   `investment`, `information`, `created_date`, `registeredby`, `status` FROM `investment_type` 	where `id` = '$realValue'";	
 $extract_distance = mysqli_query($conn, $query) or die(mysqli_error($conn));
		$count = mysqli_num_rows($extract_distance);
    if ($count > 0)
		  {
 	 while ($row_distance=mysqli_fetch_row($extract_distance))
    {
  						  	$e_id =$row_distance[0];
						   	$e_name =$row_distance[1];
					  		$e_maturity =$row_distance[2];
						   	$e_investment =$row_distance[3];
					  		$e_information =$row_distance[4];
					  		$e_created_date =$row_distance[5];
						    $e_registeredby =$row_distance[6];
						 	$e_status =$row_distance[7];
					   	  
		
		
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
 		
 
		
	 
}
 
						  
				 	
	}
			 
					}
		   
	 
?>