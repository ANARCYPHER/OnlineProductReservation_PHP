<?php
$id = $_SESSION['id']; 
	
	$user_cred = mysql_query("SELECT * FROM users WHERE user_id = '$id'") or die(mysql_error());
	
	$user = mysql_fetch_array($user_cred);
	$email = $user['email'];
	$name = $user['fname'];

	$transaction = mysql_query("SELECT * FROM orders GROUP BY transaction_id ORDER BY transaction_id DESC LIMIT 1") or die(mysql_error());

	$t_id = mysql_fetch_array($transaction);

	$tran_id = $t_id['transaction_id'] + 1;




$cart = mysql_query("SELECT * FROM cart WHERE id = '$id'") or die(mysql_error());

WHILE($_cart = mysql_fetch_array($cart)){
	
	$id = $_cart['id'];
	
	$prod = $_cart['prod_id'];
	
	$qty = $_cart['qty'];
		
	$tran = $tran_id ;
	
	$trans_query = md5($tran_id );
	
	mysql_query("INSERT INTO orders (prod_id, qty, user_id, date, transaction_id , trans_query) VALUES ('$prod', '$qty', '$id', NOW(), '$tran', '$trans_query')") or die(mysql_error());
}


	mysql_query("DELETE FROM cart WHERE id = '$id' ");
	$tran_id_md5 = md5($tran_id);
	header('location: http://72.18.195.90/admin_html/email.php?tran='.$tran_id_md5.'&email='.$email.'&name='.$name.'');
?>