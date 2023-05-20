<?php include('../../config/config.php'); ?>

<?php
	
	session_start();
	
	$email = $_POST['emailadd'];
	$pass = md5($_POST['pass']);
	
	$login = mysql_query("SELECT * FROM users WHERE email = '$email' AND password = '$pass'") or die(mysql_error());
	
	$_login = mysql_fetch_array($login);
	
		echo  $_login['user_id'];
		
		if($_login['email'] == $email )
		{
		
			$_SESSION['id'] = $_login['user_id'];
		 	header("location: ../../index.php"); 
		}else{
		header("location: ../../err_log.php");
		echo "username or password error";
		
		}
			
?>
