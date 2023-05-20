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
<th>price</th>
<th>quantity</th>
<th>Amount</th>
<th>Date</th>
</tr>
	
<?php $id = $_SESSION['id'];
		$orders = mysql_query("SELECT * FROM orders LEFT JOIN products ON products.id = orders.prod_id WHERE orders.user_id = '$id' and orders.status = '1'") or die(mysql_error());
			WHILE($order = mysql_fetch_array($orders)){
 ?>
<tr>
<td><?php echo $order['name']; ?></td>
<td><?php echo $order['price']; ?></td>
<td><?php echo $order['qty']; ?></td>
<td><?php echo $order['qty'] * $order['price']; ?></td>
<td><?php echo  $order['date']; ?></td>

</tr>

<?php } ?>
</table>

</div>
<?php include('app/design/footer.php'); ?>
</div>

</div>
</html>