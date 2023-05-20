<?php
/* CONFIGURATION */?>
<?PHP 
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'cj_handgunner');

	$connection = mysql_connect(DB_HOST,DB_USER,DB_PASS) or die(mysql_error());
	mysql_select_db(DB_NAME) or die(mysql_error());
	
function right() {
if (isset($_SESSION['id'])){
$id = $_SESSION['id'];

$mycart = mysql_query("SELECT * FROM cart LEFT JOIN products ON products.id = cart.prod_id WHERE cart.id = '$id'") or die(mysql_error());
$count = 0;
$item ="";
$total =0;
$totalqty =0;
WHILE($cart = mysql_fetch_array($mycart)){

	$count++;
	
	$item .= "<img width='50' src='media/product/".$cart['image']."' alt='product_img'>";
	
	$item .= $cart['name']." ".  $cart['price'] ." X ". $cart['qty']."<br />";
	
	$totalqty += $cart['qty'] * $cart['price'];
	
}

if($count == null){

	echo "0 items";
	
	}else{
	
	echo $item;
	
	echo "Php ". $totalqty.".00";
			
	echo "<a class='cart_link' href='checkout.php'>checkout</a>";
	
	}
	}else{
	echo "<div clas='cart'>This is Your Shopping Cart</div>";	
	}
}

function total() {
	$id = $_SESSION['id'];

	$mycart = mysql_query("SELECT * FROM cart LEFT JOIN products ON products.id = cart.prod_id WHERE cart.id = '$id'") or die(mysql_error());
	$count = 0;
	$item = "";
	$totalqty = 0;
	WHILE($_cart = mysql_fetch_array($mycart)){
	$totalqty += $_cart['qty'] * $_cart['price'];
		}
	
		echo $totalqty;
}
	
?>
