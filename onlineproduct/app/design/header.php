<div class="header_wrapper">

<div class="banner"></div>

<div class="header">

<div class="quick-access">

<div id="nav">
<ul>
<li><a href="index.php"><span>Home</span></a></li>
<li class="parent"><span>Products</span>

	
	<div class="d_down">
	<ul>
	<?php $cat = mysql_query("SELECT * FROM category") or die(mysql_error());
	WHILE($cats = mysql_fetch_array($cat)){
	?>
	<li><a href="category.php?id=<?php echo $cats['cat_id']; ?>"><?php echo $cats['cat_name']; ?></a></li>	
	<?php }
	?>
	</ul>
	</div>
</li>
<li><a href="contact.php"><span>Contact Us</span></a></li>
<li class="parent"><span>About Us</span>
	<div class="d_down">
	<ul>
	
		<li><a href="history.php"><span>History</span></a></li>
		<li><a href="mission.php"><span>Mission and Vision</span></a></li>
		
		</ul>
	</div>

</li>

<?php
session_start();
if(isset($_SESSION['id'])){
?>
<li class="parent"><a href="#"><span>Account</span></a>

<div class="d_down">
<ul>
		<li><a href="dashboard.php"><span>Profile</span></a></li>
		<li><a href="reserve.php"><span>Reservation</span></a></li>
		<li><a href="logout.php"><span>LogOut</span></a></li>
</ul>
</div>
</li>
<?php
}else{
 ?>
<li class="parent"><a href="login.php"><span>Login</span></a></li>
<?php } ?>
</ul>
</div>

<div class="search">

</div>




</div>
</div>
</div>