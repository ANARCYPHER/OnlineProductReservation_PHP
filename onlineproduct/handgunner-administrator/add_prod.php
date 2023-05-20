<html>
<?php include('../config/config.php'); ?>
<?php include('design/head.php'); ?>

<div class="wrapper">
<?php include('design/header.php'); ?>
<body>
<div class="holder">
<div class="content">
<div>
<h3 style="margin-left: 331px; margin-top: 14px; color:#000000;">Adding New Products</h3>
</div>
<div>
<?php
	if(isset($_GET['id'])){
		$id = "?cat=".$_GET['id'];
	}else{
		$id = "";
	}
?>


<form action="prod.php<?php echo $id ?>" method="post" enctype="multipart/form-data" style="padding-bottom: 0px; padding-top: 62px; padding-left: 201px;">
  <label>Product Image:
  <input type="file" name = "image" class="image" style="padding-left: 13px; border-left-width: 12px; width: 242px; height: 33px; margin-left: 34px; width: 180px;"/>
  </label>
  <p>
  </p>
  <p>
    <label>Product Name:
    <input type="text" name="name" style="margin-left: 37px; border-top-width: 2px; padding-bottom: 0px; border-bottom-width: 1px; margin-bottom: 5px; width: 180px;" />
    </label>
  </p>
  <p>
    <label>Product Price:
    <input type="text" name="price" style="margin-left: 42px; border-top-width: 2px; border-bottom-width: 1px; margin-bottom: 6px; width: 180px;"/>
    </label>
  </p> 
  <p>
    <label>Product description:
    <textarea name="description"></textarea>
    </label>
  </p>
  <p>
    <label>Product Model:
    <input type="text" name="model" style="margin-left: 35px; width: 180px; border-top-width: 2px; padding-top: 0px; margin-top: 10px; border-bottom-width: 0px;"/>
    </label>
  </p>
  <p>
    <label>Serial No.:
    <input type="text" name="serial" class="serial"  style="margin-left: 68px; width: 180px; margin-top: 7px;"s/>
    </label>
  </p>
  <p>
    <label>
	<input type="submit" name="save" value="save" style="margin-left: 203px; width: 71px; height: 34px; margin-top: 21px;">
    </label>
  </p>
  
</form>
</div>
</div>
</div>
<?php

/* include('../config/config.php');
   if(isset($_POST['save'])){
   
    $pimage = $_POST['image'];
    $pdescription = $_POST['description'];
    $pname = $_POST['name'];
	$pprice = $_POST['price'];
	$pmodel = $_POST['model'];
	$pserial = $_POST['serial'];
	$pserial = $_POST['serial'];
	
  
    mysql_query("INSERT INTO products('image','desc','name','price','model','serial_no')
    VALUES ('$pimage','$pdescription','$pname','$pprice','$pmodel','$pserial')");   
header ("location:view_prod.php");}
mysql_close($connection); */
?>


<script type="text/javascript">
	jQuery(document).ready( function() {
			jQuery('.save').click( function() {
				var serial = jQuery('.serial').val();
				var image = jQuery('.image').val();
		
			})
	})
</script>
</body>
</html>
