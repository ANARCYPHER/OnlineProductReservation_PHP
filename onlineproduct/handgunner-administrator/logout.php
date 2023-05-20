<html>
<?php
	session_start();
	session_destroy();
	header("location:../index.php");

 //echo '<meta http-equiv="refresh" content="2;url=../index.php">';
 //echo'<span class="itext">Logging out. Please wait...</span>';

?>
 </html>
