<?php
session_start();
if(!isset($_SESSION['admin'])){
header('location: login.php');
}
?>
<head><title>CJ HANDGUNNER</title>
<script type="text/javascript" src="js/jquery-1.6.js" ></script>
<script type="text/javascript" src="js/custom.js" ></script>
<link href="template/css/style.css" rel="stylesheet" type="text/css">
<link rel="shortcut icon" href="template/images/hhh.png" />
</head>
