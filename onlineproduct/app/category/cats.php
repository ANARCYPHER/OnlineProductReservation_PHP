	
	<?php 
	
	$id = $_GET['id'];
	$title = mysql_query("SELECT * FROM category WHERE cat_id = '$id'") or die(mysql_error());
	$_title = mysql_fetch_array($title);
	
		?>
	<h1><?php echo $_title['cat_name']; ?></h1>
	<div class ="cats" style="float: left;">
	<ul>
	<?php

	$cat = mysql_query("SELECT * FROM products LEFT JOIN cat_prod ON cat_prod.prod = products.id WHERE cat_prod.cat = '$id' ") or die(mysql_error());
	WHILE($cats = mysql_fetch_array($cat)){
	?>
	<li>
		<a href="product.php?id=<?php echo $cats['id']; ?>"><img src="media/product/<?php echo $cats['image']; ?>" alt="product_image"/></a>
		<a href="product.php?id=<?php echo $cats['id']; ?>"><?php echo $cats['name']; ?></a>
		
		<?php if(isset($_SESSION['id'])){?><div class="showcart addtocart" id="<?php echo $cats['id']; ?>"><span>Add to Cart</span>
		<input type="hidden" value="<?php echo $cats['price']; ?>" id="price">
		</div>
		<?php }else{ ?>
		<div class="showcart"><span>Login to Select</span></div>
		<?php } ?>
		
	</li>	
	<?php }	?>
	</ul>
	
	</div>
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