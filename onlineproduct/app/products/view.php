<?php 

	$id = $_GET['id'];
	$_products = mysql_query("SELECT * FROM products WHERE id = '$id'") or die(mysql_error());
	
	$_product = mysql_fetch_array($_products);
	?>
	<div class = "product" style="float: left;">
		<div class="image"><img src="media/product/<?php echo $_product['image']; ?>" alt="product_image" width="150" height="150"/></div>
		<p><?php echo $_product['name']; ?></p>
		<p><?php echo $_product['desc']; ?></p>
		<p><?php echo $_product['price']; ?></p>
		<p><?php echo $_product['model']; ?></p>
		<?php if(isset($_SESSION['id'])){?><div class="addtocart" id="<?php echo $_product['id']; ?>"><span>Add to Cart</span></div><?php } ?>
	</div>

<input type="hidden" value="<?php echo $_product['price']; ?>" id="price">


	
	<script type="text/javascript">
		$(document).ready( function() {
			$('.addtocart').click( function() {
				var id = $(this).attr('id')
				/* save cart w/o loading*/
			 	$.ajax({
				type: "POST",
				data: ({id: id}),
				url:"app/products/left_cart.php",
				success: function(response) {
				$(".right").html(response);
				}
				}) 
			});
		})
	</script>