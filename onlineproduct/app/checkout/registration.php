<?php 	
		$id = $_SESSION['id'];
					
		$transaction = mysql_query("SELECT * FROM orders GROUP BY transaction_id ORDER BY transaction_id DESC LIMIT 1") or die(mysql_error());

		$t_id = mysql_fetch_array($transaction);

		$tran_id = $t_id['transaction_id'] + 1;

	
		$count = 0;
		$cart = mysql_query("SELECT * FROM cart WHERE id = '$id'") or die(mysql_error());
		WHILE($_cart = mysql_fetch_array($cart)){
		
		$count++;
		
		}
		if($count > 0){
		
		$uid = $_SESSION['id'];

		$_SESSION['username'] = "arlene_1319147505_per@yahoo.com";/*******person********/

		$username = "user";

		$paypal_url='https://www.sandbox.paypal.com/cgi-bin/webscr'; // Test Paypal API URL

		$paypal_id='cj_gun_1319147680_biz@yahoo.com';/******Business**********/ // Business email ID

  ?>

<div class="message"></div>
<div class="form2" style="margin-left: 231px;">
<div class="order">
<strong>Orders</strong>
<br/><br/>
<p>Php <?php total();?>.00</p>
<input type="hidden" class="total" value="<?php total();?>" />
</div>
<br/><br/>
<div class="resulta"></div>
<div class="paypal">
  
<form action='<?php echo $paypal_url; ?>' method='post' name='form<?php echo  $paypal_id; ?>'>
<input type='hidden' name='business' value='<?php echo $paypal_id; ?>' />
<input type='hidden' name='cmd' value='_xclick' />
<input type='hidden' name='item_name' value='<?php echo "downpayment";?>' />
<input type='hidden' name='item_number' value='<?php echo $tran_id;?>' />
<input type='hidden' name='amount' value='<?php echo  total();?>' />
<input type='hidden' name='no_shipping' value='1' />
<input type='hidden' name='currency_code' value='PHP' />
<input type='hidden' name='cancel_return' value='https://127.0.0.1/cj_handgunner/cancel.php' />
<input type='hidden' name='return' value='https://127.0.0.1/cj_handgunner/success.php' />
<input type="submit" Value="Buy" style="margin-top: 0px; width: 50px; height: 35px; padding-top: 0px; border-top-width: 0px;"/>
</form> 

</div>
<p><p><input type="checkbox" class="reserve"/></p><label>Reserve This</label></p>
<div class="proceed"><div class="reserve_me" >Click to Reserved</div></div>
</div>
<?php }else{?>

<div>Your Cart is now Empty</div>
<?php } ?>

<?php 
		$id = $_SESSION['id'];
				
		$transaction = mysql_query("SELECT * FROM orders GROUP BY transaction_id ORDER BY transaction_id DESC LIMIT 1") or die(mysql_error());

		$t_id = mysql_fetch_array($transaction);

		$tran_id = $t_id['transaction_id'] + 1;

		$tran_id = md5($tran_id);
		echo "<input type='hidden' id='tran' value='".$tran_id."'>";

		$user = mysql_query("select * from users WHERE user_id = '$id' ") or die(mysql_error());	
		$user_id = mysql_fetch_array($user);
		
		?>
 
		 
<script type="text/javascript">
$(document).ready( function() {
	$('.resulta').hide();
	jQuery('.reserve_me').hide()
	$('.send').attr('disabled', 'disabled');
	$("#dpayment").keyup( function(event){
		var dpay = $(this).val();
		var total = $('.total').val();
		
		total =  parseInt(total);
		dpay =  parseInt(dpay);
		
		if ( (total < dpay) ) {
		$('.resulta').fadeIn().html('error');
		$('.send').attr('disabled', 'disabled');
		}else if ( (dpay < 10000) ) {
		$('.resulta').fadeIn().html('error');
		$('.send').attr('disabled', 'disabled');
		}else{
		$('.resulta').fadeIn().html('success');
		$('.send').removeAttr('disabled');
		}
		
	});
	
	jQuery('.reserve').click( function() {
		jQuery('.reserve_me').toggle()
		jQuery('.paypal').toggle()
	})

	
	
	$(".proceed").click( function() {
		
			var dpayment = $("#dpayment").val();
			
			var paypal = $("#paypal").val();
			
			var tran = $("#tran").val();
			
		if( dpayment == "" ){
		
			$('#dpayment').css("border-color", "red");
		
			return false;
		
		}else if( paypal == "" ){
		
			$('#paypal').css("border-color", "red");
		
			return false;
		
		
		}else{
			
			$.ajax({
			
			type: "POST",
			
			url: "app/checkout/reserve_this.php",
			
			data: ({dpayment: dpayment, paypal: paypal, tran: tran}),
			
			success: function(response){ 
			$(".form2").fadeOut();
			
			$(".message").html("Congratulation! You Successfully Reserved an Item! You can go to the Shop to verify your order.");
			setTimeout('window.location.href="http://localhost/cj_handgunner/success_reserve.php"', 5000)
			}
			});
		
		}
		
	});
});
</script>
