
<html>

<?php include('design/head.php'); ?>

<div class="wrapper">
<?php include('design/header.php'); ?>
<div class="holder">
<div class="content">
<?php include('design/config.php'); ?>
<br/><br/>
<h3 style="margin-left: 210px;color:ffffff;">List of Registered Customers</h3>
</br>
<div class="wrapper_cust">
<?php
 $customer = mysql_query("SELECT * FROM users") or die(mysql_error());
 WHILE($_customer = mysql_fetch_array($customer)){
 ?>
 <li>
 <a href="view_orders.php?id=<?php echo $_customer['user_id']; ?>"><?php echo $_customer['fname']."  ".$_customer['lname']; ?></a>
 </li>
 <?php
 }
?>
</div>
</div>
</div>
<?php include('design/footer.php'); ?>
</div>

</div>
</div>
</div>
</html>




