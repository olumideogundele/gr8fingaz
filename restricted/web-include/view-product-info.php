 
<?php
include ("config/DB_config.php"); 
 $myName = new Name();
 if(isset($_SESSION['email']))
 {
 $emailing = $_SESSION['email'];
 }
 
$query = "";
 
 

 $query =  "SELECT `id`, `category`, `subcategory`, `name`, `status`, `created_date`, `registeredby` FROM `product` ORDER BY `id` DESC" ;	
 $extract_distance = mysqli_query($conn, $query) or die(mysqli_error($conn));
		$count = mysqli_num_rows($extract_distance);
    if ($count > 0)
		  {
 	 while ($row_distance=mysqli_fetch_row($extract_distance))
    {
  						  	$id =$row_distance[0];
  						  	$category =$row_distance[1];
						   	$subcategory =$row_distance[2];
						   	$name =$row_distance[3];
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
 
		 
										 
 $category = $myName->showName($conn, "SELECT  `name` FROM  `categories` WHERE  `id` = '$category'");
 $subcategory = $myName->showName($conn, "SELECT  `name` FROM `subcategories` WHERE  `id` = '$subcategory'");
		
echo '<tr>
<td><a href = "?value='.$id.'"> <strong>'.$category.'</strong> </a></td>
<td><a href = "?value='.$id.'"> <strong>'.$subcategory.'</strong> </a></td>
<td><a href = "?value='.$id.'"> <strong>'.$name.'</strong> </a></td>
 
<td>'.$created_date.'</td>
<td>'.$registeredby.'</td>



 <td> <span class="'.$statusCSS.'">'.$statusParam.' </span> </td>
 
  		   
												 <td>
												 
												 <div class="btn-group">
												<button class="btn btn-primary btn-sm m-b-5 m-t-5 dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												Action
												</button>
												<div class="dropdown-menu">
											 
												 <a class="dropdown-item" onClick="return confirm(\'Are you sure you want to delete?\')" href="?table=product&del='.$id.'">Delete</a> 
                      
											<div class="dropdown-divider"></div>  <a  class="dropdown-item"   onClick="return confirm(\'Are you sure you want to update?\')" href="?table=product&id='.$id.'&columnValue=1&column=status">Activate</a> 	
											  
											  
											   <a class="dropdown-item"  onClick="return confirm(\'Are you sure you want to update?\')" href="?table=product&id='.$id.'&columnValue=0&column=status"> Deactivate</a>  
												
													
													 
												</div>
											</div>
												 
												 
												 
												 
												 
												 
												 
												 
												 
												 
												 
												 
				   
													</td> 
											 
											     
											   
									 
                                            </tr>';	 
	 
}
 
						  
				 	
				 
			 
					}
		   
	 
?>