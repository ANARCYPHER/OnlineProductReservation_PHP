<?php
error_reporting();
if (empty($_SESSION['is']['user_name'])) {
require('denied.php');
exit;
}
$user_name =  $_SESSION['is']['user_name'];
if (!$user_name) { 
require('denied.php');
exit;
}
?>