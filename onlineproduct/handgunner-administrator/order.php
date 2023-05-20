<?php include('../config/config.php'); ?>
<?php
$id = $_GET['id']; 
$customer = mysql_query("SELECT * FROM users WHERE user_id = '$id'") or die(mysql_error()); 
$_cust = mysql_fetch_array($customer); ?>
<h2><?php echo $_cust['fname']." ".$_cust['lname']; ?></h2>
<br/>
<table border="1" align="center" >
<th>Name</th>
<th>price</th>
<th>Quantity</th>
<th>Subtotal</th>

<?php


$order = mysql_query("SELECT * FROM products LEFT JOIN orders ON products.id = orders.prod_id WHERE orders.user_id = '$id'") or die(mysql_error());

WHILE($_orders = mysql_fetch_array($order)){
?>
<tr>
<td><?php echo $_orders['name']; ?></td>
<td><?php echo $_orders['price']; ?></td>
<td><?php echo $_orders['qty']; ?></td>
<td><?php echo $_orders['qty'] * $_orders['price'] ; ?></td>

</tr> 
<?php  } ?>
</table>
