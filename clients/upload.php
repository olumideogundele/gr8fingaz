 
<?php
// Upload directory
session_start();


include("ocr-export.php");
	
if(isset($_SESSION['sms']))
{
	unset($_SESSION['sms']);
	
}
else
{
	$_SESSION['sms'] = 0;
	
}




$rand1 = $_SESSION['rand'];

if(isset($_SESSION['rand']))
{
	$rand1 = $_SESSION['rand'];
	
}
else
{
$rand1 =  date("YmdGis")."/".rand(28736, 8735673);	
$_SESSION['rand'] = $rand1;	
}
 $signature = mysqli_real_escape_string($conn,$_POST['signature']);
$_SESSION['mighty'] = $rand1;
	$_SESSION['signature'] = $signature;
	function formatBytes($size, $precision = 2)
{
    $base = log($size, 1024);
    $suffixes = array('', 'KB', 'MB', 'GB', 'TB');   

    return round(pow(1024, $base - floor($base)), $precision) .' '. $suffixes[floor($base)];
}
include ("config/DB_config.php"); 
include ("includes/SendingSMS.php"); 
include("includes/class_file.php");
 include("includes/view-application-details.php");
 $myName = new Name();

$target_dir = "uploads/";
 if(isset($_SESSION['email']))
 {
$emailing  = $_SESSION['email'];
 }

 
// Upload file

$name = mysqli_real_escape_string($conn,$_POST['name']);
$naming = mysqli_real_escape_string($conn,$_POST['name']);
$ministry = mysqli_real_escape_string($conn, $_POST['registry']);

 
$from = mysqli_real_escape_string($conn,$_POST['from']);
$signature = mysqli_real_escape_string($conn,$_POST['signature']);



 $_SESSION['registry']=$ministry ;
 $_SESSION['name']=$name ;
 $_SESSION['from']=$from ;
 $target_dir = "uploads/";
$approval_value = $myName->showName($conn, "SELECT  `approval` FROM `approval` WHERE `status` = 1"); 
 $target_file2 =   mysqli_real_escape_string($conn,basename($_FILES["file"]["name"]));
 $target_file = mysqli_real_escape_string($conn,$target_dir.basename($_FILES["file"]["name"]));

	
		


$status_value = 1;


if($approval_value == "Yes")
{
	$status_value = 0;
	
}







$msg = "";
if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
 
  $size3 =  $_FILES["file"]["size"];
	include ("config/DB_config.php"); 

	
	
	$rading = rand(28736, 8735673);
	
	
	$rand =  date("YmdGis")."/".rand(28736, 8735673);
	
	 	 $size4 = formatBytes($size3);
 $query = "INSERT INTO `userfiles`(`filepath`, `filename`,`registry`, `name`,`file_type`, `created_date`, `creeated_by`, `status`,`filesize`,`filecode`,`submitted_by`, `group_code`, `signature`) VALUES('uploads','".$target_file2."','".$ministry."','".$name."', 'digital', '$datetime','$emailing', '$status_value', '$size4', '$rand', '$from', '$rand1', '$signature')";
 $process = mysqli_query($conn, $query) or die("Error Occured: ".mysqli_error($conn));	 
	
	
	
	
	$_SESSION['group_code'] = $rand1;

	
	  $last_id = $conn->insert_id;
	
	
	$msg = "Successfully uploaded";
	
	convertOCR($target_file2, "rtf",$rading);
	convertOCR($target_file2, "txt",$rading);
 
	$query = "INSERT INTO `ocr`(`filepath`, `filename`,`name`,`code`,`filecode`, `created_date`, `created_by`) VALUES
	('rtf-files','".$target_file2."', '".$name."', '$rading', '$rand','$datetime','$emailing')";
 $process = mysqli_query($conn, $query) or die("Error Occured: ".mysqli_error($conn));	 
	 
	
}else{ 
  $msg = "Error while uploading";
}

 if($_SESSION['sms'] == 0 )
 {
	 

include ("config/DB_config.php"); 
 $approval_value = $myName->showName($conn, "SELECT  `approval` FROM `approval` WHERE `status` = 1"); 
if($approval_value == "Yes")
{
	include ("config/DB_config.php"); 
	 $query =  "SELECT  `id`, `name`, `phone`, `email` FROM `stake_holder` WHERE `status` = 1 AND `position` = 1";	
 
 
 $extract_distance = mysqli_query($conn, $query) or die(mysqli_error($conn));
		$count = mysqli_num_rows($extract_distance);
    if ($count > 0)
		  {
 	 while ($row_distance=mysqli_fetch_row($extract_distance))
    {
 		 $id =$row_distance[0];
		 $name=$row_distance[1];
		 $phone =$row_distance[2];
		$email =$row_distance[3];
		
		$link = 'https://'.$_SERVER['HTTP_HOST'].'/docpro/approval.php?code='.$rand1;
		 include ("config/DB_config.php"); 
	  $department = $myName->showName($conn, "SELECT  `name`  FROM `mda`  WHERE `id` = '$ministry'"); 
 $message12 = "New File(s) Uploaded. 
Name:".$naming."
Department Name:".$department."
Date:".$datetime."
File Code:".$rand1."
Click:".$link;  
 

 
  $senderID = "-PNN DocPro-";
  
 
   $Sending = new SendingSMS();
		 //$Sending->smsAPI($phone,$senderID,$message12);
		
		
		
			$_SESSION['sms'] = 1;	
		
		$comment = "Approved by ".$name;
		 $fileName = $target_file2;
 
$file_ext = pathinfo($fileName, PATHINFO_EXTENSION);
//echo ($file_ext); 
		 
		 $images = "";
		 
		 
		 if($file_ext == "jpg" or $file_ext == "png" or $file_ext == "gif")
		 {
			 
			$images = '<div class="cta" style="padding: 5px; margin: 0 auto;">
     <img src="https://'.$_SERVER['HTTP_HOST'].'/docpro/'.$target_file  .'" width = "100%" height = "100%"> 
    </div>' ;
			 
		 }
		 
		 
		 
		  $message = ' 
	 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
<div class="email-background" style="background: #eee;padding: 10px;">
   
  <div class="email-container" style="max-width: 500px;background: white;margin: 0 auto;overflow: hidden;border-radius: 5px;text-align: center;font-family: sans-serif;"> <img src="http://'.$_SERVER['HTTP_HOST'].'/docpro/'.$inst_logo.'"  alt="'.$inst_logo.'" width="50px" height="50px" style="max-width: 30%;">
	   
    <h3 style="5px;font-size: 2.0em;">Hi '.$name.',   </h3>
    <span style="padding: 20px;font-size: 2.0em;">'.$naming.' Uploaded and needs approval. </span><br>

    <span> 
	
 
	<form method="post" action = "http://'.$_SERVER['HTTP_HOST'].'/docpro/approval.php">
	<input name = "status" value = "1" type = "hidden">
	<input name = "code" value = "'.$rand1.'" type = "hidden">
	<input name = "comment" value = "'.$comment.'" type = "hidden">
	<input name = "aid" value = "'.$last_id.'" type = "hidden">
	<input name = "emailing" value = "'.$emailing.'" type = "hidden">
	<button class="button" style = " background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 5px 5px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;" type = "submit" name = "validate">Approve Now</button>
  </form>
  
  
  <form method="post" action = "http://'.$_SERVER['HTTP_HOST'].'/docpro/approval.php">
	<input name = "status" value = "3" type = "hidden">
	<input name = "code" value = "'.$rand1.'" type = "hidden">
	<input name = "comment" value = "'.$comment.'" type = "hidden">
	<input name = "aid" value = "'.$last_id.'" type = "hidden">
	<input name = "emailing" value = "'.$emailing.'" type = "hidden">
	<button class="button" style = " background-color: #f44336; /* Red */
  border: none;
  color: white;
  padding: 5px 5px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;" type = "submit" name = "validate">Disapprove Now</button>
  </form>
  
   
   
   
   '.$images.'
   
   
    <p style="padding: 10px;font-weight: 300;font-size: 1.2em;">Please login to the portal. </p>
    <div class="cta" style="padding: 5px;background: #26466D;margin: 0 auto;">
      <p style="padding: 20px;font-weight: 300;font-size: 1.2em;"><a href="https://'.$_SERVER['HTTP_HOST'].'/docpro/approval.php?code='.$rand1.'" style="text-decoration: none;color: white;">Visit Portal Now for More Details</a></p>
    </div>


  </div>
  <div class="footer-links" style="max-width: 500px;font-family: sans-serif;margin: 0 auto;overflow: hidden;border-radius: 5px;text-align: center;padding: 20px;">
    <a href="/xx" style="color: #26466D;">about</a> | <a href="/xx" style="color: #26466D;">unsubsribe</a> | <a href="/xx" style="color: #26466D;">t&amp;c s</a>
  </div>
</div>
';
		 
 
 


$to      = $email;              
 $subject  = "Doc Approval Notification";   
$newEmail    ="info@riagemsynergyltd.com.ng";                         

 

							  
	
	 					$headers = "From: " .($newEmail) . "\r\n";
                        $headers .= "Reply-To: ".($newEmail) . "\r\n";
                        $headers .= "Return-Path: ".($newEmail) . "\r\n";;
                        $headers .= "MIME-Version: 1.0\r\n";
                        $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
                        $headers .= "X-Priority: 3\r\n";
                        $headers .= "X-Mailer: PHP". phpversion() ."\r\n";
					  
			
 		    
				
		 
							  
							  
	}
		  }
 
 
  	}						 $emailSend = mail($email,$subject,$message,$headers); 	 
							 $Sending->smsAPI($Phone,$senderID,$message12);
	
	
	
	
} 


 
 
?>

 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>