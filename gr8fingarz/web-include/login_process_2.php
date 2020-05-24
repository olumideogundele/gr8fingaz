<?php 
  date_default_timezone_set('Africa/Lagos');
	
	require_once('config/DB_config.php');
	 $today=date("Y-m-d"); 

	 $todaydatefull=  date('Y-m-d G:i:s'); 
	 
	 
unset($_SESSION['email']);
unset($_SESSION['emailadd']);
unset($_SESSION['name']);
 
$errinput_arr = array();

//catching the error with boolean value
$errcatch_flag = false;
$username = "";

global $error, $success, $error2;
 
 

if(isset($_POST['login']))
{
$password =   mysqli_real_escape_string($conn, $_POST['password'] );
$username =   mysqli_real_escape_string($conn, $_POST['username']) ;
 
	
 
if(strlen($username) == 0 )
{
$errinput_arr[] = '<div class="btn btn-danger btn-lg">*Username is a reqiured field</div> - ';
$errcatch_flag = true;
}
else if(strlen($password) == 0 )
{
$errinput_arr[] = '<div class="btn btn-danger btn-lg"> *Password is a reqiured field</div>  ';
$errcatch_flag = true;
}
//I am checking for duplicate email address in the member_table so as to balance database redundancy

if($errcatch_flag)
{
$error =  $errinput_arr;
}
else
{

$statement = "select * from `user_unit` where (`account_number` = '$username' OR `email` = '$username' OR `phone` = '$username') AND `status` =  1";
	
$result = mysqli_query($conn,$statement) or die("ERROR OCCURED: ".mysqli_error($conn));

if($result)
{
if(mysqli_num_rows($result) == 1)
{
$customer = mysqli_fetch_assoc($result);

$emailing = $customer['account_number'];
$emailAdd  = $customer['email']; 
$phoneNumber  = $customer['phone']; 
$account_number = $customer['account_number'];

$lastname  = $customer['name'];
$firstname  = $customer['name']; 
$fullname = $lastname;
	 $encrypted_password = $customer['encrypted_password'];
	$_SESSION['identify'] = $customer['id'];
	$_SESSION['phone_number'] = $customer['phone'];
	$password_update = $customer['password_update'];
 $salt = $customer['salt'];
	 $usertype =  $customer['usertype'];
  $hash = base64_encode(sha1($password . $salt, true) . $salt);
 if ($encrypted_password == $hash and ($emailing == $username or $emailAdd == $username or $phoneNumber == $username) )
   {
	 
	   $_SESSION['lastname'] = $lastname;

$_SESSION['fullname'] = $fullname;

 
$_SESSION['name'] =$fullname;
$_SESSION['email'] = $customer['account_number'];
	
	
	$_SESSION['loginData'] = $username;
	
	
$_SESSION['emailadd'] = $customer['email'];

	
	$_SESSION['user_unit'] = $customer['id'];
	$_SESSION['service_unit'] = $customer['id'];
	
$_SESSION['usertype'] = $usertype;
 $_SESSION['account_number'] =$account_number;	

	     if($password_update == 1)
	   {
	   
	   
	   
	   

 //$_SESSION['usertype'] = $customer['usertype'];
	    $pipaddress = "";
	  $ipaddress= "";
	 if (getenv('HTTP_X_FORWARDED_FOR')) {
        $pipaddress = getenv('HTTP_X_FORWARDED_FOR');
        $ipaddress = getenv('REMOTE_ADDR');
//echo "Your Proxy IP address is : ".$pipaddress. "(via $ipaddress)" ;
    } else {
        $ipaddress = getenv('REMOTE_ADDR');
        //echo "Your IP address is : $ipaddress";
    }
	   
  $sql = 	mysqli_query($conn,"INSERT INTO `login_log`(`username`, `ip_address`, `login`, `platform`,`status`) VALUES('$username','$ipaddress','$todaydatefull', 'Web Admin','0')") or die("ERROR OCCURED 1: ".mysqli_error($conn)); 
	   
	   
 
	   
	   
	
	
	if(isset($_POST['remember']))
	{
	
	$year = time() + 31536000;
setcookie('remember_me', $_POST['username'], $year);

setcookie('password_me', $_POST['password'], $year);
		
	}
	else if(!isset($_POST['remember'])) {
	if(isset($_COOKIE['remember_me'])) {
		$past = time() - 100;
		setcookie('remember_me', gone, $past);
			setcookie('password_me', gone, $past);
	}
}


 
	 
	 echo '<meta http-equiv="Refresh" content="0; url=dashboard.php"> ';
		 
	   }
	   else
	   {
		   
		   echo '<meta http-equiv="Refresh" content="0; url=change-pwd.php"> ';
	   }
 
   }
  else
  {
		 
			
				$error2 = '<div class="btn btn-danger btn-lg">
                   Invalid login details.  Please try again.
                
            </div>'; 
			
			
			
		 

  }
}
else
{
 
$error2 = '<div class="btn btn-danger btn-lg">
                   Invalid login details.  Please try again.
                
            </div>'; 
}
}




}

}
 

?>

