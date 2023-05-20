<?php
session_start();
include('../../config/config.php');
$id = $_SESSION['id'];


	$transaction = mysql_query("SELECT * FROM orders GROUP BY transaction_id ORDER BY transaction_id DESC LIMIT 1") or die(mysql_error());

	$t_id = mysql_fetch_array($transaction);

	$tran_id = $t_id['transaction_id'] + 1;

$cart = mysql_query("SELECT * FROM cart WHERE id = '$id'") or die(mysql_error());

WHILE($_cart = mysql_fetch_array($cart)){
	
	$id = $_cart['id'];
	
	$prod = $_cart['prod_id'];
	
	$qty = $_cart['qty'];
		
	$tran = $tran_id;
	
	$trans_query = md5($tran_id );
	
	$stat = 1;
	
	mysql_query("INSERT INTO orders (prod_id, qty, user_id, date, transaction_id , trans_query, status) VALUES ('$prod', '$qty', '$id', NOW(), '$tran', '$trans_query', '$stat')") or die(mysql_error());
		
	}


	mysql_query("DELETE FROM cart WHERE id = '$id' ");

 ?>
 
