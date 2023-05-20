<html>
		<?php include('../config/config.php'); ?>
	<div class="wrapper">
			<?php include("design/head.php");?>
				<?php include("design/header.php");?>
				<div class="holder">
			<div class="content">
			<div class="errmsg"></div>
				<h3 style="margin-left: 269px; margin-top: 15px; border-bottom-width: 0px; margin-bottom: 40px;color:#ffffff;">Register a New Customer</h3>
				<div class="form">
				<label>First Name:</label><input type="text" class="fname" style="margin-left: 38px;" /><br/><br/>
				<label>Last Name:</label><input type="text" class="lname"  style="margin-left: 38px;"/><br/><br/>
				<label>Address:</label><input type="text" class="address"  style="margin-left: 54px;"/><br/><br/>
				<label>City:</label><input type="text" class="city" style="margin-left: 80px;"/><br/><br/>
				<label>Province:</label><input type="text" class="province" style="margin-left: 53px;"><br/><br/>
				<label>Country:</label><input type="text" class="country" style="margin-left: 56px;"/><br/><br/>
				<label>Zip Code:</label><input type="text" class="zip" style="margin-left: 48px;"><br/><br/>
				<label>Tel.Number:</label><input type="text" class="tel" style="margin-left: 34px;"><br/><br/>
				<label>Email:</label><input type="text" class="email" style="margin-left: 74px;"><br/><br/>
				<label>Username:</label><input type="text" class="username" style="margin-left: 46px;"><br/><br/>
				<label>Password:</label><input type="text" class="pass" style="margin-left: 48px;"><br/><br/>
				<label>Verify Password:</label><input type="text" class="verpass" style="margin-left: 9px;"><br/><br/>
				<button class="reg" style="margin-left: 65px; width: 120px; height: 35px;"><span>Register</span></button>
				</div>
			</div>
		</div>
	</div>
</html>


<script type="text/javascript">
	$(document).ready( function() {
		$('.reg').click( function() {
			var fname = $('.fname').val()
			var lname = $('.lname').val()	
			var address = $('.address').val()	
			var email = $('.email').val()	
			var province = $('.province').val()	
			var country = $('.country').val()	
			var zip = $('.zip').val()	
			var tel_no = $('.tel').val()	
			var city = $('.city').val()	
			var username = $('.username').val()	
			var password = $('.pass').val()	
			var vpassword = $('.verpass').val()	
				
				if(fname == ""){
					$('.errmsg').html("fname req");
				}else if( lname == "" ){ 
					$('.errmsg').html("lname req");
				}else if( address == "" ){ 
					$('.errmsg').html("address req");
				}else if( email == "" ){ 
					$('.errmsg').html("email req");
				}else if( username == "" ){ 
					$('.errmsg').html("username req");
				}else if( password == "" ){ 
					$('.errmsg').html("password req");
				}else if( password != vpassword ){ 
					$('.errmsg').html("password did not match");			
				}else{
				 	$.ajax({
					type: "POST",
					data: ({	
							password: password, 
							fname: fname, 
							lname: lname, 
							email: email, 
							username: username, 
							address: address, 
							password: password,
							province: province,
							country: country,
							zip: zip,
							tel_no : tel_no,
							city : city
							}),
					url:"register_code.php",
					success: function(response) {
					$('.errmsg').fadeIn().html(response);
					$('input').val("");
					}
					})
				
				}
				
		})
	})
</script>