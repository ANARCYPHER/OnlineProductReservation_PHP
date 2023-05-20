<?php include('../config/config.php'); ?>
<script type="text/javascript">
 function redirectUser(){
 window.location = "add_prod.php?id=<?php echo $_GET['cat']; ?>";
 } </script>
<body onload="setTimeout('redirectUser()', 5000)" >
<?php 

 if (file_exists("upload/" . $_FILES["image"]["name"]))
      {
      /* echo $_FILES["image"]["name"] . " already exists. "; */
      }
    else
      {
      move_uploaded_file($_FILES["image"]["tmp_name"],
      "upload/" . $_FILES["image"]["name"]);
      echo "Stored in: " . "upload/" . $_FILES["image"]["name"];
      }
	
		
	
	$image = $_FILES['image']['name'];
	
	$price = $_POST['price'];
	$model = $_POST['model'];
	$name = $_POST['name'];
	$serial = $_POST['serial'];
	$description = $_POST['description'];
	
	mysql_query("INSERT INTO products (price, name, image, model, serial_no)
	VALUES('$price', '$name', '$image', '$model', '$serial')") or die(mysql_error());

	$id = mysql_query("SELECT * FROM products GROUP BY id ORDER BY id DESC LIMIT 1") or die(mysql_error());
	
	$p_id = mysql_fetch_array($id);
		
	$id = $p_id['id'] + 1;	
	$cat = $_GET['cat'];
	mysql_query("INSERT into cat_prod (prod, cat) VALUES('$id', '$cat')") or die(mysql_error());
	/* header('location: add_prod.php?id='.$cat); */
?>

<strong>please Wait While we are saving the product . . .</strong>
</body>
