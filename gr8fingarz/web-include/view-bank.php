 
<?php
include ("config/DB_config.php"); 
 $myName = new Name();
 if(isset($_SESSION['email']))
 {
 $emailing = $_SESSION['email'];
 }

	 if(isset($_SESSION['usertype'] ))
	 {
		 
		$usertype = $_SESSION['usertype']; 
	 }


//SELECT  `id`, `name`, `state`, `created_date`, `registeredby`, `status` FROM `banks` WHERE 1
$query = "";
 
 $query =  "SELECT  `id`, `name`, `code`, `created_date`, `registeredby`, `status` FROM `banks`";	
 
 
 $extract_distance = mysqli_query($conn, $query) or die(mysqli_error($conn));
		$count = mysqli_num_rows($extract_distance);
    if ($count > 0)
		  {
 	 while ($row_distance=mysqli_fetch_row($extract_distance))
    {
  						  $id =$row_distance[0];
						   $name =$row_distance[1];
					  $code =$row_distance[2];
					  
					    $created_date =$row_distance[3];
						   $registeredby =$row_distance[4];
					  $status =$row_distance[5];
					  
					  
  
					     

	$statusCSS = "";
$statusParam = "";
if($status == 1)
{
	
	$statusCSS = "badge badge-success m-b-5";
$statusParam = "Active";
}			
else  if($status == 0)
{
	//btn btn-primary btn-block
	$statusCSS = "badge badge-danger m-b-5";
$statusParam = "Not Active";
}

 $varCorrect  = "";

 if($usertype == 1)
 {
	 $varCorrect = ' <div class="btn-group">
												<button class="btn btn-primary btn-sm m-b-5 m-t-5 dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												Action
												</button>
												<div class="dropdown-menu">
											 
												 <a class="dropdown-item" onClick="return confirm(\'Are you sure you want to delete?\')" href="?table=banks&del='.$id.'">Delete</a> 
                      
											<div class="dropdown-divider"></div>  <a  class="dropdown-item"   onClick="return confirm(\'Are you sure you want to update?\')" href="?table=banks&id='.$id.'&columnValue=1&column=status">Activate</a> 	
											  
											  
											   <a class="dropdown-item"  onClick="return confirm(\'Are you sure you want to update?\')" href="?table=banks&id='.$id.'&columnValue=0&column=status"> Deactivate</a>  
												
													
													 
												</div>
											</div>
												 
												 
												' ;
		
	 
	 
	 
 }

 



 
  
						 
echo '<tr>
<td>'.$name.'</td>
 <td>'.$code.'</td> 
<td> <span class="'.$statusCSS.'">'.$statusParam.' </span> </td>
<td>'.$created_date.'</td>
<td>'.$registeredby.'</td>

 
  		   
												 <td>
									
												 '.$varCorrect .'
															   
													</td> 
											 
											     
											   
									 
                                            </tr>';	 
	 
}
 
						  
				 	
				 
			 
					}
		   
	 
?>