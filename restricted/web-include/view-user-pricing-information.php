 
<?php
//include ("config/DB_config.php"); 
 $myName = new Name();
 if(isset($_SESSION['email']))
 {
 $emailing = $_SESSION['email'];
 }

	 if(isset($_SESSION['usertype'] ))
	 {
		 
		$usertype = $_SESSION['usertype']; 
	 }



$query = "";
 
 $query =  "SELECT  `id`, `name`, `maturity`, `investment`, `information`, `created_date`, `registeredby`, `status` FROM `users_investment_type` WHERE `status` = 1";	
 
 
 $extract_distance = mysqli_query($conn, $query) or die(mysqli_error($conn));
		$count = mysqli_num_rows($extract_distance);
    if ($count > 0)
		  {
 	 while ($row_distance=mysqli_fetch_row($extract_distance))
    {
  						  $id =$row_distance[0];
						   $name =$row_distance[1];
					  $maturity =$row_distance[2];
					  
					    $investment =$row_distance[3];
						   $information =$row_distance[4];
					  $created_date =$row_distance[5];
		 
		 
		 $yearly_payment = $investment * 12;
					  
					  
  
echo '<li>
				 <ul class="pricing-wrapper">
						<li data-type="monthly" class="is-visible">
							<header class="pricing-header">
								<h2>'.$name.'</h2>

								<div class="price">
									<span class="currency">&#8358;</span>
									<span class="price-value">'. number_format($investment).'</span>
									<span class="price-duration">mo</span>
								</div>
							</header>
							<!-- /pricing-header -->
							<div class="pricing-body">
								<ul class="pricing-features">
									'.$information.'
								</ul>
							</div>
							<!-- /pricing-body -->
							<footer class="pricing-footer">
								<a class="select-plan" href="?mo='.$id.'">Select</a>
							</footer>
						</li>
						<li data-type="yearly" class="is-hidden">
							<header class="pricing-header">
								<h2>'.$name.'</h2>

								<div class="price">
									<span class="currency">&#8358;</span>
									<span class="price-value">'.$yearly_payment.'</span>
									<span class="price-duration">yr</span>
								</div>
							</header>
							<!-- /pricing-header -->
							<div class="pricing-body">
								<ul class="pricing-features">
									'.$information.'
								</ul>
							</div> 
							<!-- /pricing-body -->
							<footer class="pricing-footer">
								<a class="select-plan" href="?yr='.$id.'">Select</a>
							</footer>
						</li>
					 
					 
					 
					 
					</ul>
					<!-- /pricing-wrapper -->
				</li>';	 
}
 
						  
				 	
				 
			 
					}
		   
	 
?>