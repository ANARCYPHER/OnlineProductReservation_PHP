<?php
$id = $_SESSION['id'];
$account = mysql_query("SELECT * FROM users WHERE user_id = '$id'") or die(mysql_error());
$_account = mysql_fetch_array($account);
?>
<label>First Name: </label><span><?php echo $_account['fname']; ?></span>
