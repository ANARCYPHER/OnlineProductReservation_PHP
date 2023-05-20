<?php include('../../config/config.php'); ?>
<?php
$id = $_POST['id'];
$qty = $_POST['qty'];
mysql_query("UPDATE cart SET qty = '$qty' WHERE prod_id = '$id'") or die(mysql_error());

$update = mysql_query("SELECT * FROM cart LEFT JOIN products on cart.prod_id = products.id WHERE products.id = '$id'") or die(mysql_error());
$_price= mysql_fetch_array($update);
	$_updated_price = $_price['qty'] * $_price['price'];
	echo "<input type='text'  id='des' class='sum' value='".$_updated_price."' />";
?>
