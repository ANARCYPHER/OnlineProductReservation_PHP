<?php include('config/config.php'); ?>
<?php
/*********
Change password
**********/
session_start();
$n_pass = md5($_POST['n_pass']); 
$id = $_SESSION['id'];
mysql_query("UPDATE users SET password = '$n_pass' WHERE user_id = '$id'") or die(mysql_error());
echo "success";
?>