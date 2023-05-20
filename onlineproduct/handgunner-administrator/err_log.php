<html>
<?php include('../config/config.php'); ?>
<?php include('../app/design/head.php'); ?>
<div class="wrapper">
<div class="page">

<?php include('../app/design/header.php'); ?>
<div class="content">
<div class="error_msg"></div>
<div class="msg">Username and Password Error</div>
<form action="adminlogin.php" method = "POST" >
<label>Email Add : </label><input name ="emailadd" type = "text" class = "email_add" />
<label>Password :</label><input type = "password" class= "password" name= "pass" />
<input type="submit" id="login" name = "login " value="Login">
</form>
</div>
<?php include('../app/design/footer.php'); ?>
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

			}
	})
})
</script>
</div>
</html>