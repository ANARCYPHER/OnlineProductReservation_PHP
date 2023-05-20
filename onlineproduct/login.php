<html>
<?php include('config/config.php'); ?>
<?php include('app/design/head.php'); ?>
<div class="wrapper">
<div class="page">

<?php include('app/design/header.php'); ?>
<div class="content">
<div class="error_msg"></div>
<div class="msg"></div>
<h4 style="margin-left: 230px; margin-top: 20px;">Customer's Log-in</h4>
<form action="app/user/login.php" method = "POST" style="margin-top: 80px; margin-left: 80px; margin-bottom: 100px;">
<label>Email add : </label><input name ="emailadd" type = "text" class = "email_add" />
<label>Password :</label><input type = "password" class= "password" name= "pass" />
<input type="submit" id="login" name = "login " value="Login">
</form>
</div>
<?php include('app/design/footer.php'); ?>
</div>

<script type="text/javascript">
$(document).ready( function() {
$('.error_msg').hide()
	
	$('#login').click( function() {
	
		var emailadd = $('.email_add').val();
		var pass = $('.password').val();
			
			if( emailadd == ''){
				$('.error_msg').fadeIn().html('no username')
				return false
			}else if( pass == ''){
				$('.error_msg').fadeIn().html('no password')
				return false
			}else{
				$('.error_msg').hide();	
			
				/* window.location = 'app/user/login.php'; */
			/* 	$.ajax({
					type: "POST",
					data: ({emailadd: emailadd, pass: pass}),
					url:"app/user/login.php",
					success: function(response) {
					$('.msg').show().html(response);
					}
				})  */
			}
	})
})
</script>
</div>
<div>
<a href="handgunner-administrator/login.php"><span>Administator,s Log-in</span>
</div> 
</html>