<html>
<?php include('../config/config.php'); ?>
<?php include('design/head.php'); ?>

<div class="wrapper">
<?php include('design/header.php'); ?>
<div class="holder">
<div class="content">
<div class="left" style="padding-left: 54px;">
<br/>
<div><a href="add_category.php">ADD PRODUCTS</a></div>
<br/>
<div><a href="view_prod.php">VIEW PRODUCTS</a></div>
</div>
<br/>
<br/>
<div class="right" style="margin-left: 400px; border-bottom-width: 0px; padding-bottom: 43px; padding-left: 150px; width: 665px;">
<?php $query = mysql_query("SELECT * FROM category") or die(mysql_error());?>
<Ul>
<?php WHILE($cat = mysql_fetch_array($query)){?> 
	<li><a href="add_prod.php?id=<?php echo $cat['cat_id'];?>"><?php echo $cat['cat_name'];?></li>	
	
<?php } ?>
</ul>
</div>
<div class="category"; style=" padding-left:50;">
	<img src="img/Untitled-1.jpg" style="width: 206px; height: 189px;">&nbsp;&nbsp;&nbsp;&nbsp;
	<img src="img/shotgun.jpg" style="width: 191px;">&nbsp;&nbsp;&nbsp;&nbsp;
	<img src="img/AMMUNITIONS.jpg" style="width: 192px;>
	</div>
</div>
</div>
<?php include('design/footer.php'); ?>
</div>
</html>