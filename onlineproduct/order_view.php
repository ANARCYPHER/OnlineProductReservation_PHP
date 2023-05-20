<html>
<?php include('config/config.php'); ?>
<?php include('app/design/head.php'); ?>
<div class="wrapper">
<div class="page">
<?php include('app/design/header.php'); ?>
<div class="content">
	
		<table>
		<tr>
		<th>Name</th>
		<th>qty</th>
		<th>Price</th>
		<th>Model</th>
		<th>Amount</th>
		</tr>
<?php
	$tran = $_GET['transaction_id'];
	$order = mysql_query("SELECT * FROM orders LEFT JOIN products ON orders.prod_id = products.id WHERE orders.trans_query = '$tran'") or die(mysql_error());
	WHILE($orders = mysql_fetch_array($order)){
	?>
	<tr>
		<td><?php echo $orders['name']; ?></td>
		<td><?php echo $orders['qty']; ?></td>
		<td><?php echo $orders['price'];; ?></td>
		<td><?php echo $orders['model']; ?></td>
		<?php $total = $orders['qty'] * $orders['price']; ?>
		<td><?php echo $total; ?></td>
	
	</tr>
	<?php	
	}

?>
</table>
</div>
<?php include('app/design/footer.php'); ?>
</div>

</div>
</html>