<?php	 
 
		 include("config/DB_config.php");
	if(isset($_GET["columnValue"]))
{
	$id = $_GET["id"];
	$TableName = $_GET["table"];
	$column = $_GET["column"];
	$columnValue = $_GET["columnValue"];
	
	$registeredBy = "";
$datetime=date("Y-m-d H:i:s");
if(isset($_SESSION['email']))
{
	$registeredBy = $_SESSION['email'];
}

 $new_amount = 0;
  $myName = new Name();
$amount = 0;


if(!isset($_GET['walletno']))
{
$update = 	mysqli_query($conn,"UPDATE `".$TableName."` SET `".$column."` = '$columnValue'   WHERE id = '$id'") or die("ERROR OCCURED: ".mysqli_error($conn));



	if($TableName == "customer" and $column == 'inspected_status' and $columnValue ==2 )
				{
				
 $id_product = $myName->showName($conn, "SELECT `id` FROM `stock` WHERE `assigned` = 1 AND `status` = 1 ORDER BY `id` DESC LIMIT 1"); 
 
 $emailing2 = $myName->showName($conn, "SELECT `email` FROM `customer` WHERE id = '$id'"); 
 
 
$update = 	mysqli_query($conn,"UPDATE `".$TableName."` SET `meter` = '$id_product' WHERE id = '$id'") or die("ERROR OCCURED: ".mysqli_error($conn));
			
			
$update = 	mysqli_query($conn,"UPDATE `stock` SET `attached` = '0', assignedto = '$emailing2'   WHERE id = '$id_product'") or die("ERROR OCCURED: ".mysqli_error($conn));
			
				}









}
else
{
	  $tinwallet = $myName->showName($conn, "SELECT `amount` FROM `e_wallet_balance`"); 
	  $request_amount =  $_GET['amount'];	
	  
	if(($tinwallet < $request_amount) or ($request_amount > $tinwallet ))
   {
	 
	  
	   echo'<a href="#" class="btn btn-danger btn-lg">Fets Wallet amount too low. Please fund your wallet.</a>';	
	      
   }
   else
   {
	   
	  
	$update = 	mysqli_query($conn,"UPDATE `".$TableName."` SET `".$column."` = '$columnValue'   WHERE id = '$id'") or die("ERROR OCCURED: ".mysqli_error($conn));
	}
}
 
	
			if($TableName == "electric_commission_sharing")
				{
				$update = 	mysqli_query($conn,"UPDATE `electric_commission_sharing_2` SET `".$column."` = '$columnValue'   WHERE id = '$id'") or die("ERROR OCCURED: ".mysqli_error($conn));
			
					
				}
				
				if($TableName == "e_wallet_request")
				{
					if($columnValue == 1)
						{
					
$walletno = $_GET['walletno'];			 		 
$phone = $myName->showName($conn, "SELECT `username` FROM `users` WHERE `walletno` = '$walletno'"); 
$bizname = $myName->showName($conn, "SELECT `businessname` FROM `users` WHERE `walletno` = '$walletno'");
$bal = $myName->showName($conn, "SELECT sum(`amount`) FROM `e_wallet` WHERE `walletno` = '$walletno' AND `status` = 1");	

$request_amount =  $_GET['amount'];	
   

$message = "Dear ".$bizname.".Your wallet prefund of N".$request_amount." has been granted. You Bal is N".$bal.". Thank You.";
$Sending = new SendingSMS(); 

									
							} 
					 
				}
			
			
			
			
			
			if($update)
			{
 if($column == "isSpecials")
 {
	 
  echo '<meta http-equiv="Refresh" content="0; url=updateCustomer.php?unique='.$id.'"> ';
			}
			
				if(isset($_GET['walletno']))
				{
				
				$amount = $_GET['amount'];
				$wallet_no = $_GET['walletno'];
				$tcode = $_GET['tcode'];
				
		 	 
 $usertype = $_SESSION['usertype'];
 $value = '';
 $status = 0;
 if($usertype == 0 or $usertype == "0")
 {
	  $status = 0;
	   $Phone = "08099166662";
	   
	  
 
  $message = "ATTENTION. 
Wallet with Transacction Code:".$tcode." for wallet ID: ".$wallet_no.". Amount".number_format($amount, 2).".Please review and activate.";

  
  	 $Sending = new SendingSMS(); 
  							 
							 $Sending->smsAPI($Phone,"PAYALL",$message);
							 
							 							 
							  $Phone = "08075587227";
  			 
							 $Sending->smsAPI($Phone,"PAYALL",$message);
							 
							 
							 

 }
 else if ($usertype == 1)
 {
$updating = 	mysqli_query($conn,"UPDATE `".$TableName."` SET `".$column."` = '$columnValue'   WHERE id = '$id'") or die("ERROR OCCURED: ".mysqli_error($conn));	

	$status = 1;
	  
 
   $tinwallet = $myName->showName($conn, "SELECT `amount` FROM `e_wallet_balance`"); 
   
   
   if(($tinwallet < $amount) or ($amount > $tinwallet ))
   {
	   
	     echo'<a href="#" class="btn btn-danger btn-lg">Fets Wallet amount too low. Please fund your wallet.</a>';	
   }
   else
   {
 
 
 
			 $extract_user = mysqli_query($conn, "SELECT  `id`,  `amount`  FROM `e_wallet` WHERE `walletno` = '$wallet_no'") or die(mysqli_error($conn));
		$count = mysqli_num_rows($extract_user);
		 if ($count > 0) {
 //$customer = mysqli_fetch_assoc($extract_user);
  while ($customer=mysqli_fetch_row($extract_user))
    {
 
$id = $customer[0];
$old_amount = $customer[1];
 

 $sql ="INSERT INTO `e_wallet_trend`
(`amount`, `walletno`, `registeredby`, `status`, `updated_at`, `tcode`
) VALUES
('$amount', '$wallet_no', '$registeredBy', '1' , '$datetime', '$tcode')";


$new_amount = $old_amount + $amount;

   
	  $DELsql = 	mysqli_query($conn,"UPDATE `e_wallet` SET `amount` = '$new_amount', `walletno` = '$wallet_no', `registeredby` = '$registeredBy', `status` = $status, `updated_at` = '$datetime', `tcode` = '$tcode' WHERE `id` = '$id'") or die("ERROR OCCURED: ".mysqli_error($conn));

if ($conn->query($sql) === TRUE) {
 
 
// $walletno = $_GET['walletno'];			 		 
$phone = $myName->showName($conn, "SELECT `username` FROM `users` WHERE `walletno` = '$wallet_no'"); 
$bizname = $myName->showName($conn, "SELECT `businessname` FROM `users` WHERE `walletno` = '$wallet_no'");
$bal = $myName->showName($conn, "SELECT sum(`amount`) FROM `e_wallet` WHERE `walletno` = '$wallet_no' AND `status` = 1");	

$request_amount =  $_GET['amount'];	
   
//SELECT * FROM `e_wallet` WHERE 1`amount`, `walletno`
$message = "Dear ".$bizname.".Your wallet prefund of N".$request_amount." has been granted. You Bal is N".$bal.". Thank You.";
$Sending = new SendingSMS(); 
$Sending->smsAPI($phone,"PAYALL",$message);
 
 
	
	  $tinwallet = $myName->showName($conn, "SELECT `amount` FROM `e_wallet_balance`"); 
	  
	  $amount_new = $tinwallet -  $amount;
	  
	  $DELsql = 	mysqli_query($conn,"UPDATE `e_wallet_balance` SET `amount` = '$amount_new' WHERE 1") or die("ERROR OCCURED: ".mysqli_error($conn));
	 
	 
	 
	 
	 
	 ////start here
	 
	 
	 
	
 $query = "SELECT `id`, `wallet_num`, `amount`, `status`, `first_prefund`, `due_date`, `created_date`,   `paid_date`, `installment`,`mode`,`isSlit` FROM  `starter_kit_gbese`    WHERE `wallet_num`  = '$wallet_no' AND `status` = 0";  
 

 $extract_user = mysqli_query($conn, $query) or die(mysqli_error("Error Here: ".$conn));
		$count = mysqli_num_rows($extract_user);
		 if ($count > 0) {
 //$customer = mysqli_fetch_assoc($extract_user);
  while ($customer=mysqli_fetch_row($extract_user))
    {
		
	 
 
$id = $customer[0];
$wallet_num = $customer[1];
$amountGbese = $customer[2];
$status = $customer[3];
$first_prefund = $customer[4];
$due_date = $customer[5];
$created_date = $customer[6];
$paid_date = $customer[7];
$installment = $customer[8];
$mode = $customer[9];
$isSlit = $customer[10];

$broken_value = $amountGbese / $installment;
if($installment == 1)
{
	   
	   $newValue1 = $new_amount - $amountGbese;
	   
	  // if($NEWPayallAmount >= $amountGbese)
	   //{
	  
$update = mysqli_query($conn,"UPDATE  `starter_kit_gbese` SET `status` = 1,`paid_date` = '$datetime' , `first_prefund` = 0 WHERE `id` = '$id' ") or die("ERROR OCCURED: ".mysqli_error($conn));
		   
		   
		   $update= mysqli_query($conn,"UPDATE  `e_wallet` SET `amount` = '$newValue1'  WHERE  `walletno` = '$wallet_no'") or die("ERROR OCCURED: ".mysqli_error($conn));
		   
		//e_wallet   
	  // }
	 
	   
	   //$update=  	mysqli_query($conn,"INSERT INTO `e_wallet`( `amount`, `walletno`, `registeredby`, `status`, `created_date`, `updated_at`, `tcode`, `remark`) VALUES('$amount','$wallet_num','$registeredby',  '1',  '$datetime','$datetime','$txnref', '$responsecode')") or die("ERROR OCCURED: ".mysqli_error($conn));
	
}
else
{
	
if($isSlit == 1 and $isSlit != 0)
{
 

	if($mode == "weekly")
	{
	$dating =  date('Y-m-d');
	$todayDays2 = "";
	for($var  = 1; $var<=$installment; $var++)
	{
		
 
		
$sql ="INSERT INTO `starter_kit_gbese`(`wallet_num`, `amount`, `status`, `first_prefund`, `due_date`, `created_date`, `registeredby`, `installment`,  `mode`, `isSlit`) VALUES('$wallet_no', '$broken_value', '0', '1','$dating','$datetime', '$registeredBy', '$installment','$mode', 0)";

			 
			  $extract_user = mysqli_query($conn,  $sql) or die(mysqli_error($conn)); 
		 	
 $pDate = strtotime($dating.' + 1 week');
$dating =  date('Y-m-d',$pDate);
		  
   
			  
	}
	
	
 
	
	$newValue = $new_amount - $broken_value;
	
	$today = date('Y-m-d');
	
$update =  	mysqli_query($conn,"UPDATE  `starter_kit_gbese` SET `status` = 1,`paid_date` = '$datetime' WHERE `due_date` = '$today' and `wallet_num` =  '$wallet_no'") or die("ERROR OCCURED: ".mysqli_error($conn));
		   
		   
		   $update=  	mysqli_query($conn,"UPDATE  `e_wallet` SET `amount` = '$newValue'  WHERE  `walletno` = '$wallet_no'") or die("ERROR OCCURED: ".mysqli_error($conn));
	
	
	
}
else if($mode == "monthly")
{
	$dating =  date('Y-m-d');
	$todayDays2 = "";
	for($var  = 1; $var  <= $installment; $var++)
	{
	 	
		 
$sql ="INSERT INTO `starter_kit_gbese`(`wallet_num`, `amount`, `status`, `first_prefund`, `due_date`, `created_date`, `registeredby`, `installment`,  `mode`, `isSlit`) VALUES('$wallet_no', '$broken_value', '0', '1','$dating','$datetime', '$registeredBy', '$installment','$mode', 0)";
 		 
$extract_user = mysqli_query($conn,$sql) or die(mysqli_error($conn)); 
  $pDate = strtotime($dating.' + 1 month');
$dating =  date('Y-m-d',$pDate);
 
   
			  
	}
 
	$newValue = $new_amount - $broken_value;
	
	$today = date('Y-m-d');
	
$update =  	mysqli_query($conn,"UPDATE  `starter_kit_gbese` SET `status` = 1,`paid_date` = '$datetime' WHERE `due_date` = '$today' and    `wallet_num` =  '$wallet_no'") or die("ERROR OCCURED: ".mysqli_error($conn));
		   
		   
$update=  	mysqli_query($conn,"UPDATE  `e_wallet` SET `amount` = '$newValue'  WHERE  `walletno` = '$wallet_no'") or die("ERROR OCCURED: ".mysqli_error($conn));
	
	
}

 
$extract_user = mysqli_query($conn,"Delete from `starter_kit_gbese` WHERE `id` = '$id'") or die(mysqli_error($conn)); 
 
		
		
		
	}
	else
	{
		
	 
		 	$today = date('Y-m-d');
			
		 
		 	$amounting = $myName->showName($conn, "SELECT `amount` FROM `starter_kit_gbese` WHERE `status` = 0 AND `wallet_num`  = '$wallet_no'  AND `due_date` = '$today' "); 
	 $newValue = $new_amount - $amounting;
 
 
 if($amounting != "" or $amounting != null)
 {
	 
	 $update =  	mysqli_query($conn,"UPDATE  `starter_kit_gbese` SET `status` = 1,`paid_date` = '$datetime' WHERE `due_date` = '$today' and `wallet_num` =  '$wallet_no'") or die("ERROR OCCURED: ".mysqli_error($conn));
	  $update=  	mysqli_query($conn,"UPDATE  `e_wallet` SET `amount` = '$newValue'  WHERE  `walletno` = '$wallet_no'") or die("ERROR OCCURED: ".mysqli_error($conn));
 }
	
			   
		   
		   
		  
		
	}
	
	
	
 
	
	
	
	
	
	
	
	
	
}



	}
	
		 }
	
	
	
	
	
	////end here
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	  
	  
	
}
 





	}
	
		 }
		 else
		 {
			 
	 	 $new_amount = $amount;
 $sql = 	 "INSERT INTO `e_wallet_trend`
(`amount`, `walletno`, `registeredby`, `status`, `updated_at`,`tcode`
) VALUES
('$amount', '$wallet_no', '$registeredBy', '$status' , '$datetime', '$tcode')";

 
 $sql1 = 	mysqli_query($conn,"INSERT INTO `e_wallet`
(`amount`, `walletno`, `registeredby`, `status`, `updated_at`, `tcode`
) VALUES
('$amount', '$wallet_no', '$registeredBy', '$status' , '$datetime', '$tcode')") or die("ERROR OCCURED: ".mysqli_error($conn));


if ($conn->query($sql) === TRUE) {
 
 
	 
	  $tinwallet = $myName->showName($conn, "SELECT `amount` FROM `e_wallet_balance`"); 
	  
	  $amount_new = $tinwallet -  $amount;
	  $DELsql = 	mysqli_query($conn,"UPDATE `e_wallet_balance` SET `amount` = '$amount_new' WHERE 1") or die("ERROR OCCURED: ".mysqli_error($conn));
 
	   
	   
	    $Phone = $myName->showName($conn, "SELECT `phone1` FROM `users` WHERE `walletno` = '$wallet_no'"); 
	  // $Phone = "08099166662";
	  
	    $lname = $myName->showName($conn, "SELECT `lname` FROM `users` WHERE `walletno` = '$wallet_no'");
	   
	  
 // $message = "Pay All Login:-\nUsername:".$phone."Password:".$password;
  $message = "Hi ".$lname.". Your for wallet ID: ".$wallet_no." has been credited with ".number_format($amount, 2).". Thank You.";

  
  	 $Sending = new SendingSMS(); 
  							 
							 $Sending->smsAPI($Phone,"PAYALL",$message);
							 
							 
							 /// here
							 
							 
							
	
 $query = "SELECT `id`, `wallet_num`, `amount`, `status`, `first_prefund`, `due_date`, `created_date`,   `paid_date`, `installment`,`mode`,`isSlit` FROM  `starter_kit_gbese`    WHERE `wallet_num`  = '$wallet_no' AND `status` = 0";  
 

 $extract_user = mysqli_query($conn, $query) or die(mysqli_error("Error Here: ".$conn));
		$count = mysqli_num_rows($extract_user);
		 if ($count > 0) {
 //$customer = mysqli_fetch_assoc($extract_user);
  while ($customer=mysqli_fetch_row($extract_user))
    {
		
	 
 
$id = $customer[0];
$wallet_num = $customer[1];
$amountGbese = $customer[2];
$status = $customer[3];
$first_prefund = $customer[4];
$due_date = $customer[5];
$created_date = $customer[6];
$paid_date = $customer[7];
$installment = $customer[8];
$mode = $customer[9];
$isSlit = $customer[10];

$broken_value = $amountGbese / $installment;
if($installment == 1)
{
	
	   
	   $newValue1 = $new_amount - $amountGbese;
	   
	  // if($NEWPayallAmount >= $amountGbese)
	   //{
	  
$update = mysqli_query($conn,"UPDATE  `starter_kit_gbese` SET `status` = 1,`paid_date` = '$datetime' , `first_prefund` = 0 WHERE `id` = '$id' ") or die("ERROR OCCURED: ".mysqli_error($conn));
		   
		   
		   $update=  	mysqli_query($conn,"UPDATE  `e_wallet` SET `amount` = '$newValue1'  WHERE  `walletno` = '$wallet_num'") or die("ERROR OCCURED: ".mysqli_error($conn));
		   
		//e_wallet   
	  // }
	 
	   
	   //$update=  	mysqli_query($conn,"INSERT INTO `e_wallet`( `amount`, `walletno`, `registeredby`, `status`, `created_date`, `updated_at`, `tcode`, `remark`) VALUES('$amount','$wallet_num','$registeredby',  '1',  '$datetime','$datetime','$txnref', '$responsecode')") or die("ERROR OCCURED: ".mysqli_error($conn));
	
}
else
{
	
if($isSlit == 1 and $isSlit != 0)
{
 

	if($mode == "weekly")
	{
	$dating =  date('Y-m-d');
	$todayDays2 = "";
	for($var  = 1; $var<=$installment; $var++)
	{
		
 
		
$sql ="INSERT INTO `starter_kit_gbese`(`wallet_num`, `amount`, `status`, `first_prefund`, `due_date`, `created_date`, `registeredby`, `installment`,  `mode`, `isSlit`) VALUES('$wallet_no', '$broken_value', '0', '1','$dating','$datetime', '$registeredBy', '$installment','$mode', 0)";

			 
			  $extract_user = mysqli_query($conn,  $sql) or die(mysqli_error($conn)); 
		 	
 $pDate = strtotime($dating.' + 1 week');
$dating =  date('Y-m-d',$pDate);
		  
   
			  
	}
	
	
 
	
	$newValue = $new_amount - $broken_value;
	
	$today = date('Y-m-d');
	
$update =  	mysqli_query($conn,"UPDATE  `starter_kit_gbese` SET `status` = 1,`paid_date` = '$datetime' WHERE `due_date` = '$today' and `wallet_num` =  '$wallet_no'") or die("ERROR OCCURED: ".mysqli_error($conn));
		   
		   
		   $update=  	mysqli_query($conn,"UPDATE  `e_wallet` SET `amount` = '$newValue'  WHERE  `walletno` = '$wallet_no'") or die("ERROR OCCURED: ".mysqli_error($conn));
	
	
	
}
else if($mode == "monthly")
{
	$dating =  date('Y-m-d');
	$todayDays2 = "";
	for($var  = 1; $var  <= $installment; $var++)
	{
	 	
		 
$sql ="INSERT INTO `starter_kit_gbese`(`wallet_num`, `amount`, `status`, `first_prefund`, `due_date`, `created_date`, `registeredby`, `installment`,  `mode`, `isSlit`) VALUES('$wallet_no', '$broken_value', '0', '1','$dating','$datetime', '$registeredBy', '$installment','$mode', 0)";
 		 
$extract_user = mysqli_query($conn,$sql) or die(mysqli_error($conn)); 
  $pDate = strtotime($dating.' + 1 month');
$dating =  date('Y-m-d',$pDate);
 
   
			  
	}
 
	$newValue = $new_amount - $broken_value;
	
	$today = date('Y-m-d');
	
$update =  	mysqli_query($conn,"UPDATE  `starter_kit_gbese` SET `status` = 1,`paid_date` = '$datetime' WHERE `due_date` = '$today' and    `wallet_num` =  '$wallet_no'") or die("ERROR OCCURED: ".mysqli_error($conn));
		   
		   
$update=  	mysqli_query($conn,"UPDATE  `e_wallet` SET `amount` = '$newValue'  WHERE  `walletno` = '$wallet_no'") or die("ERROR OCCURED: ".mysqli_error($conn));
	
	
}

 
$extract_user = mysqli_query($conn,"Delete from `starter_kit_gbese` WHERE `id` = '$id'") or die(mysqli_error($conn)); 
 
		
		
		
	}
	else
	{
		
	 
		 	$today = date('Y-m-d');
			
		 
		 	$amounting = $myName->showName($conn, "SELECT `amount` FROM `starter_kit_gbese` WHERE `status` = 0 AND `wallet_num`  = '$wallet_no'  AND `due_date` = '$today' "); 
	 $newValue = $new_amount - $amounting;
 
 
 if($amounting != "" or $amounting != null)
 {
	 
	 $update =  	mysqli_query($conn,"UPDATE  `starter_kit_gbese` SET `status` = 1,`paid_date` = '$datetime' WHERE `due_date` = '$today' and `wallet_num` =  '$wallet_no'") or die("ERROR OCCURED: ".mysqli_error($conn));
	  $update=  	mysqli_query($conn,"UPDATE  `e_wallet` SET `amount` = '$newValue'  WHERE  `walletno` = '$wallet_no'") or die("ERROR OCCURED: ".mysqli_error($conn));
 }
	
			   
		   
		   
		  
		
	}
	
	
	
 
	
	
	
	
	
	
	
	
	
}



	}
	
		 }
	
	
							 
							 
							 
							 
							 
							 
							 
							 
							 
							 
							 
 
}
			 
		 }
				 
	 

 }
 //up here
					
				}
			 
			 
			 echo'<a href="#" class="btn btn-success btn-lg">Information updated successfully. Thank You.</a>';	
		
					 echo '<meta http-equiv="Refresh" content="3; url='.$_SERVER['HTTP_REFERER'].'"> ';
		
 
			} 
			else
			{
//echo'<a href="#" class="btn btn-danger btn-lg">Information not updated successfully. Please try again later.</a>';	

	 //echo '<meta http-equiv="Refresh" content="3; url='.$_SERVER['HTTP_REFERER'].'"> ';
			}			 	
						
						
						
			  echo'<a href="#" class="btn btn-success btn-lg">Information updated successfully. Thank You.</a>';	
		
					 echo '<meta http-equiv="Refresh" content="3; url='.$_SERVER['HTTP_REFERER'].'"> ';
 
							 
			 
				} 
				else
			{
echo'<a href="#" class="btn btn-danger btn-lg">Information not updated successfully. Please try again later.</a>';	

	 echo '<meta http-equiv="Refresh" content="3; url='.$_SERVER['HTTP_REFERER'].'"> ';
			}	
						
						
						
						
						
						
						
						
}
						
						
	   
			 
?>
