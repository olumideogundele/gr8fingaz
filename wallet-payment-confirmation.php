<?php

include("header.php");
?>
	<!-- /header -->
	
	<div class="sub_header_in sticky_header">
		<div class="container">
			<h1>Pricing Tables</h1>
		</div>
		<!-- /container -->
	</div>
	<!-- /sub_header -->
	 
 <script src="https://api.ravepay.co/flwv3-pug/getpaidx/api/flwpbf-inline.js"></script>
	<main>
		<div class="container margin_60_35">
			<div class="pricing-container cd-has-margins">
			 
		 <?php
		
		$wallet = $_SESSION['account_number'];
		$value = "";
		 
		
    if(isset($_GET['txref'])) {
        $ref = $_GET['txref'];
		
		$wallet =  $_SESSION["wallet_no"];
 
		
		$query = "";
 
 $query =  "SELECT `code` FROM `tracker` WHERE `code` = '$ref'";	
 
 
 $extract_distance = mysqli_query($conn, $query) or die(mysqli_error($conn));
		$count = mysqli_num_rows($extract_distance);
    if ($count > 0)
		  {
		$value = '<div class="alert alert-danger mb-1">Transaction Already Treated Previously. <br>
Please contact customer service.</div>'; 		
	}
		else
		{
		
		
		
 
 
		 
        $amount = ""; //Correct Amount from Server
        $currency = ""; //Correct Currency from Server
  $flutterapisecret = $myName->showName($conn, "SELECT `flutterapisecret` FROM `application` WHERE  `status` = '1'"); 
        $query = array(
            "SECKEY" => trim($flutterapisecret),
            "txref" =>  trim($ref)
        );

        $data_string = json_encode($query);
                
        $ch = curl_init('https://api.ravepay.co/flwv3-pug/getpaidx/api/v2/verify');                                                                      
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);                                              
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));

        $response = curl_exec($ch);

        $header_size = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
        $header = substr($response, 0, $header_size);
        $body = substr($response, $header_size);
$err = curl_error($ch);

if($err){
  // there was an error contacting the rave API
  die('Curl returned error: ' . $err);
}

      

		//echo $response;
		
        $resp = json_decode($response, true);

      	$paymentStatus = $resp['data']['status'];
        $chargeResponsecode = $resp['data']['chargecode'];
        $chargeAmount = $resp['data']['amount'];
        $chargeCurrency = $resp['data']['currency'];
		 $message1 =  $resp['data']['vbvmessage'];
		 $vbvmessage =  $resp['data']['vbvmessage'];
		 $description =  $resp['data']['status'];
		
 
			 
			 $sql = 	mysqli_query($conn,"INSERT INTO `tracker`(`code`, `status`, `created_date`) VALUES('$ref','$chargeResponsecode','$datetime')") or die("ERROR OCCURED: ".mysqli_error($conn)); 

        if(($chargeResponsecode == "00" || $chargeResponsecode == "0")) 
		{
  
			  $sql = 	mysqli_query($conn,"INSERT INTO `wallet_breakdown`(`amount`, `registeredby`, `status`, `created_at`, `updated_at`, `wallet_no`, `reff`) VALUES('$new_Amount_1','$wallet','1','$datetime','$datetime','$wallet', '$ref' )") or die("ERROR OCCURED: ".mysqli_error($conn)); 
			
			//start here
			$extract_user = mysqli_query($conn, "SELECT `amount` FROM `wallet` WHERE `wallet_no` = '$wallet'") or die(mysqli_error($conn));
		$count = mysqli_num_rows($extract_user);
		 if ($count > 0) {
			 //$fee = $myName->showName($conn, "SELECT `fee` FROM `application` WHERE 1"); 
			 $fee = 0; 
			  $new_Amount_1 =  $chargeAmount - $fee;
			 
			 $old_amount = $myName->showName($conn, "SELECT  `amount`  FROM `wallet` WHERE `wallet_no` = '$wallet'"); 
			 
			 $new_Amount = $old_amount + $new_Amount_1;
			
			 
			 	
	 $extract_user = mysqli_query($conn, "UPDATE `wallet` SET `amount` = '$new_Amount' WHERE `wallet_no` = '$wallet'") or die(mysqli_error($conn));
		 
		 if ($extract_user) {
		 $value ='<a href="dashboard.php" class="btn btn-success btn-lg">Wallet Credited Successful. Thank you.</a><br />'; 
			 
			 
		
			 
			 
			 
								 
  $phone=$myName->showName($conn, "SELECT `phone` FROM `customer_unit` WHERE `wallet_no` = '$wallet'"); 
  $naming=$myName->showName($conn, "SELECT `name` FROM `customer_unit` WHERE `wallet_no` = '$wallet'"); 
				 		
		
			 	$query = "";
 
			 $bonusSomething = "";
			 
 $query =  "SELECT  `name`, `value_type`,`value_type_status`,`amount`, `id` FROM `wallet_promo` WHERE  `status` = 1  AND `value_type_status` = 'recurrent'";	
 
 
 $extract_distance = mysqli_query($conn, $query) or die(mysqli_error($conn));
		$count = mysqli_num_rows($extract_distance);
    if ($count > 0)
		  {
 	 while ($row_distance=mysqli_fetch_row($extract_distance))
    {
  						  //$id =$row_distance[0];
		 
		 
		 $old_amount = $myName->showName($conn, "SELECT  `amount`  FROM `wallet` WHERE `wallet_no` = '$wallet'");
		  $name =$row_distance[0];
		  $value_type =$row_distance[1];
		  $value_type_status =$row_distance[2];
		  $amount1 =$row_distance[3];
		  $iding =$row_distance[4];
		 $newValue = 0;
		 
		 if($value_type == 'percentage')
		 {
			 $amount1 = ($new_Amount_1/100) *  $amount1;
			 $newValue = $old_amount + $amount1; 
			 
		 }
		 else{
			 
			 $newValue = $old_amount + $amount1;
			 
		 }
	 
		 $bonusSomething = "Bonus: ". $amount1;
		 $ref_new = date("YmdGis")."bonus".$iding;
		   $sql23 = 	mysqli_query($conn,"INSERT INTO `wallet_breakdown`(`amount`, `registeredby`, `status`, `created_at`, `updated_at`, `wallet_no`, `reff`) VALUES('$amount1','$wallet','1','$datetime','$datetime','$wallet', '$ref_new' )") or die("ERROR OCCURED: ".mysqli_error($conn)); 
			 
			 	
	 $extract_user23 = mysqli_query($conn, "UPDATE `wallet` SET `amount` = '$newValue' WHERE `wallet_no` = '$wallet'") or die(mysqli_error($conn));
		 
		 
		 
		 if ($extract_user23) {
			   $value ='<a href="dashboard.php" class="btn btn-success btn-lg">Wallet Credited with &#8358; '.number_format($amount1,2).' Bonus Successful. Thank you.</a><br />'; 
		 }
		  
		 
		 
		 
		 
		 
	 }
	}
			 
			 
			 
	 
			 	  
  $message = "Hi, ".$naming.". 
 Your wallet funding was 
 successful.
 Current wallet amount is:
 ".number_format($new_Amount, 2)."
 ".$bonusSomething ;

  $senderID = "PAYALL";
  
 
   $Sending = new SendingSMS(); 
  							 
							 $Sending->smsAPI($phone,"PAYALL",$message);
			 
			 
		 }
		 else
		 {
					 $value = '<a href="#" class="btn btn-success btn-lg">Wallet Not Credited Successful. Please try again later.</a><br />'; 
		 }
			 
				
		 }
			else
			{
				
				
				
				
				
				
				
				
				
				
				
				
			  //$fee = $myName->showName($conn, "SELECT `fee` FROM `application` WHERE 1"); 
			  $fee = 0; 
				$new_Amount_1 =  $chargeAmount - $fee;
			
				
				
				
				
				
				
				
				
				 $sql = 	mysqli_query($conn,"INSERT INTO `wallet`(`amount`, `registeredby`, `status`, `created_at`, `updated_at`, `wallet_no`) VALUES('$new_Amount_1','$wallet','1','$datetime','$datetime','$wallet' )") or die("ERROR OCCURED: ".mysqli_error($conn)); 
				
				
			  $sql = 	mysqli_query($conn,"INSERT INTO `wallet_breakdown`(`amount`, `registeredby`, `status`, `created_at`, `updated_at`, `wallet_no`, `reff`) VALUES('$new_Amount_1','$wallet','1','$datetime','$datetime','$wallet', '$ref' )") or die("ERROR OCCURED: ".mysqli_error($conn)); 
			 
				
				
			 
				
				
				
				
				
				
				
				
				
		 
		 if ($sql) {
			   $value ='<a href="dashboard.php" class="btn btn-success btn-lg">Wallet Credited Successful. Thank you.</a><br />'; 
			 
		$query = "";
			 $bonusSomething = "";
 
 $query =  "SELECT  `name`, `value_type`,`value_type_status`,`amount`, `id` FROM `wallet_promo` WHERE  `status` = 1  AND `value_type_status` = 'first'";	
 
 
 $extract_distance = mysqli_query($conn, $query) or die(mysqli_error($conn));
		$count = mysqli_num_rows($extract_distance);
    if ($count > 0)
		  {
 	 while ($row_distance=mysqli_fetch_row($extract_distance))
    {
  						  //$id =$row_distance[0];
		 
		 
		 $old_amount = $myName->showName($conn, "SELECT  `amount`  FROM `wallet` WHERE `wallet_no` = '$wallet'");
		  $name =$row_distance[0];
		  $value_type =$row_distance[1];
		  $value_type_status =$row_distance[2];
		  $amount1 =$row_distance[3];
		  $iding =$row_distance[4];
		 $newValue = 0;
		 
		 if($value_type == 'percentage')
		 {
			 $amount1 = ($new_Amount_1/100) *  $amount1;
			 $newValue = $old_amount + $amount1; 
			 
		 }
		 else{
			 
			 $newValue = $old_amount + $amount1;
			 
		 }
	 
		  $bonusSomething = "Bonus: ". $amount1;
		 $ref_new = date("YmdGis")."bonus".$iding;
		   $sql23 = 	mysqli_query($conn,"INSERT INTO `wallet_breakdown`(`amount`, `registeredby`, `status`, `created_at`, `updated_at`, `wallet_no`, `reff`) VALUES('$amount1','$wallet','1','$datetime','$datetime','$wallet', '$ref_new' )") or die("ERROR OCCURED: ".mysqli_error($conn)); 
			 
			 	
	 $extract_user23 = mysqli_query($conn, "UPDATE `wallet` SET `amount` = '$newValue' WHERE `wallet_no` = '$wallet'") or die(mysqli_error($conn));
		 
		 
		 
		 if ($extract_user23) {
			   $value ='<a href="dashboard.php" class="btn btn-success btn-lg">Wallet Credited with &#8358; '.number_format($amount1,2).' Bonus Successful. Thank you.</a><br />'; 
		 }
		  
		 
		 
		 
		 
		 
	 }
	}
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
		 	 
			
								  $myName = new Name();
  $phone=$myName->showName($conn, "SELECT `phone` FROM `customer_unit` WHERE `wallet_no` = '$wallet'"); 
  $naming=$myName->showName($conn, "SELECT `name` FROM `customer_unit` WHERE `wallet_no` = '$wallet'"); 
				 		
							 
	 
			 	  
  $message = "Hi, ".$naming.". 
 Your wallet funding was 
 successful.
 Current wallet amount is:
 ".number_format($new_Amount_1, 2)."
 ".$bonusSomething ;

  $senderID = "PAYALL";
  
 
   $Sending = new SendingSMS(); 
  							 
							 $Sending->smsAPI($phone,"PAYALL",$message);
			 
			 
			 
			 
			 
			 
			 
			 
		 }
				else
				{
					  $value ='<a href="#" class="btn btn-success btn-lg">Wallet Not Credited Successful. Please try again later.</a><br />'; 
					
				}
				
				
				
			}
			
			 
				
			 
  
			
				 
			
			
        } else {
            
			
				 $value ='<a href="dashboard.php" class="alert alert-danger mb-1">Some little issues. '.$message1.'</a>'; 
        }
			
			
			}
    }
		else {
     
				 $value ='<a href="dashboard.php" class="alert alert-danger mb-1">No reference supplied. </a><br />'; 
    }
		
  //curl_close($ch);
			
			
			
			
			
			
			
			
			
			
			
?>
	
			<!-- /pricing-list -->
		</div>
		<!-- /pricing-container -->	
		</div>
		<!-- /container -->

		 
		
	</main>
	<!--/main-->
	
	<?php


include("footer.php");

?>