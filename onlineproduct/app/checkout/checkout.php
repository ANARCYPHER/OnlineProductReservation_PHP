<div class="message" ></div>
<br/>
<br/>
<table border="1" >
<th>Image</th>
<th>Product Number</th>
<th>Model</th>
<th>Name</th>
<th>Price</th>
<th>Quantity</th>
<th>Subtotal</th>
<th colspan="2">Actions</th>
<tbody>
<?php
$price = 0;
$id = $_SESSION['id'];

$checkout = mysql_query("SELECT * FROM cart LEFT JOIN products ON products.id = cart.prod_id WHERE cart.id = '$id'") or die(mysql_error());
WHILE($_checkout = mysql_fetch_array($checkout)) {

$price += $_checkout['qty'] * $_checkout['price'];
?>
<tr class="order<?php echo $_checkout['id'] ?>">
<td><img src="media/product/<?php echo $_checkout['image']?>" alt="product_image" width="64" height="52" /></td>
<td><?php echo $_checkout['serial_no']?></td>
<td><?php echo $_checkout['model']?></td>
<td><?php echo $_checkout['name']?></td>
<td><?php echo $_checkout['price']?></td>
<td><input type="text" class="qty<?php echo $_checkout['id'] ?>" value="<?php echo $_checkout['qty']?>" id="qty" /></td>
<td><div  id="price" class="price<?php echo $_checkout['id'] ?> sum"><input id="des" type="readonly" class="sum" value="<?php echo $_checkout['qty'] * $_checkout['price']; ?>" /></div></td>
<td><div class="delete"><span class="delete" id="<?php echo $_checkout['id'] ?>">delete</span></div></td><td><span class="update"  id="<?php echo $_checkout['id'] ?>">update</span></td>
</tr>
<?php		
}
?>
</tbody>
</table>
<br/>

<div class="sum">
Total : <div id="sum"><?php /* echo "Php ".$price.".00";  */?></div></div>
<div class="button" ><a href="reservation.php">
  <input type="submit" name="Submit" value="Proceed to Reservation" />
</a>
  <form id="form1" name="form1" method="post" action="">
    <label></label>
  </form>
</div>
<script type="text/javascript">
$(document).ready( function() {


	


 $('#des').attr("disabled", true); 
	calculateSum();

	$(".delete").click( function() {
	
	if(confirm("Are you sure you want to delete order? "))
		{
			var id = $(this).attr('id');
		
				$.ajax({
				type: "POST",
				url: "app/checkout/delete.php",
				data: ({id: id}),
				success: function(response){
					
					
					$(".order" + id).hide('slow', function()
						
						{  $(this).remove();
						calculateSum();
					});
					
					
				}
				});
				
			
		}

		return false;

		});

	
	$(".update").click( function() {
		var id = $(this).attr('id')
		
	
			var id = $(this).attr('id');
			var qty = $('.qty' + id).val();
			
			
				 $.ajax({
				type: "POST",
				url: "app/checkout/update.php",
				data: ({id: id, qty: qty}),
				success: function(response){
				$(".message").fadeIn().html("Your Cart is Successfully Updated");	
				$(".price" + id).html(response);
					
				calculateSum();

				
				}
				}); 
		
	});
	function calculateSum() {
 
        var sum = 0;
     
        $(".sum").each(function() {
 
       
            if(!isNaN(this.value) && this.value.length!=0) {
                sum += parseFloat(this.value);
            }
 
        });
     
        $("#sum").html("Php "+sum.toFixed(2));
    }
})
</script>