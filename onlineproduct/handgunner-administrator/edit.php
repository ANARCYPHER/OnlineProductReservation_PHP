<?php
include('../config/config.php');
	
$user = $_GET['prod_id'];

$result= mysql_query ("SELECT * FROM products WHERE id = '$user'") or die(mysql_error());
$test= mysql_fetch_array($result);

if(!$result)
	{
	die("ERRUR: Data not found..");
	}

		$image = $test['image'];
		$description= $test['desc'];
		$name= $test['name'];
		$price = $test['price'];
		$model = $test['model'];
		$serial = $test['serial_no'];
		
		
if (isset($_POST['Submit']))
{

    $name = $_POST['name'];
	$price = $_POST['price'];
	$model = $_POST['model'];
	$serial = $_POST['serial'];
  
 	
mysql_query("UPDATE products SET name ='$name',price='$price',model='$model',serial_no='$serial'	WHERE id = '$user'") or die (mysql_error());	


/* header ("location:view_prod.php"); */

}

?>

<html>

<?php include('design/head.php'); ?>

<div class="wrapper">
<?php include('design/header.php'); ?>
<div class="holder">
<div class="content">
<form method="post" enctype="multipart/form-data">

  <p>
    <label>Product Name:
    <input type="text" name="name" value="<?php echo $name ?>"/>
    </label>
  </p>
  <p>
    <label>Product Price:
    <input type="text" name="price" value="<?php echo $price ?>"/>
    </label>
  </p>
  <p>
    <label>Product Moddel:
    <input type="text" name="model" value="<?php echo $model ?>"/>
    </label>
  </p>
  <p>
    <label>Serial No.:
    <input type="text" name="serial" value="<?php echo $serial ?>"/>
    </label>
  </p>
  <p>
    <label>
    <input type="submit" name="Submit" value="Add  product" />
    </label>
  </p>
</form>
</div>
</div>
<?php include('design/footer.php'); ?>
</div>

</div>
</div>
</div>
</html>