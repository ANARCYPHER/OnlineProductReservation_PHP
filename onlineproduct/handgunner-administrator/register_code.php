<?php include('../config/config.php'); ?>

<?php

			$fname = $_POST['fname'];
			$lname = $_POST['lname'];
			$address = $_POST['address'];
			$city = $_POST['city'];
			$email = $_POST['email'];
			$username = $_POST['username'];
			$password = md5($_POST['password']);
			$province = $_POST['province'];
			$country = $_POST['country'];
			$zip = $_POST['zip'];
			$tel_no = $_POST['tel_no'];
			
	mysql_query("INSERT into users (fname, lname, address, city, province, country, code, tel_no, email, username, password) 
				VALUES ('$fname','$lname','$address','$city','$province','$country','$zip','$tel_no','$email','$username','$password')") or die(mysq_error());
				
				
?>	

<h4>Congratulations! You Have Added New Customer!</h4>