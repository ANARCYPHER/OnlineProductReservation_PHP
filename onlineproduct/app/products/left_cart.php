<?php include('../../config/config.php'); ?>
<?php
session_start();

$prod = $_POST['id'];

$id = $_SESSION['id']; 

$icart = mysql_query("SELECT * FROM cart WHERE prod_id = '$prod' AND id = '$id'") or die(mysql_error());

		$carito = mysql_fetch_array($icart);
		
		
		$qty = $carito['qty'] + 1; 
		
		if( $carito['prod_id'] == $prod ){
			
		$prod = $_POST['id'];
		
		$id = $_SESSION['id']; 
		
		mysql_query("UPDATE cart SET qty = '$qty' WHERE prod_id = '$prod' AND id = '$id' ") or die(mysql_error());
			
		}else{
		
		$prod = $_POST['id'];
		
		$id = $_SESSION['id']; 
		
		mysql_query("INSERT INTO cart (id, prod_id, qty) VALUES ('$id', $prod, 1)") or die(mysql_error());

		}


$mycart = mysql_query("SELECT * FROM cart LEFT JOIN products ON products.id = cart.prod_id WHERE cart.id = '$id'") or die(mysql_error());
$count = 0;
$item ="";
$totalqty = 0;
WHILE($cart = mysql_fetch_array($mycart)){
	
	$count++;
		$item .= "<img width='50' src='media/product/".$cart['image']."' alt='product_img'>";
		$item .= $cart['name']." ".  $cart['price'] . " X " . $cart['qty'] ."<br />";
		$totalqty += $cart['qty'] * $cart['price'];
	
}

if($count == null){
	echo "0 items";
	
	}else{
	?>
	
	<?php echo $item; ?>
	
	Php <?php echo $totalqty ?>.00
	
	<a class="cart_link" href='checkout.php'>checkout</a>

	<?php } ?>