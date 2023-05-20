<?php include('../../config/config.php'); ?>
<?php 

$id = $_POST['id'];
mysql_query("DELETE FROM cart WHERE prod_id = '$id'") or die(mysql_error());
?>