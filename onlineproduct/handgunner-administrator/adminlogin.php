<?php include('../config/config.php'); ?>

<?php
	
	session_start();
	
	$email = $_POST['emailadd'];
	$pass = $_POST['pass'];
	
	$login = mysql_query("SELECT * FROM admin_login WHERE user_name = '$email' AND user_pass = '$pass'") or die(mysql_error());
	
	$userlogin = mysql_fetch_array($login);
			
		if($userlogin['user_name'] == $email )
		{
		
			$_SESSION['admin'] = $userlogin['admin_id'];
		 	 header("location: index.php"); 
		}else{
		header("location: err_log.php"); 
		echo "username or password error";
		
		}
			
?>

