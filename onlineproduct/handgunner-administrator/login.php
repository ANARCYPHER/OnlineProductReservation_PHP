<html>
<?php include('../config/config.php'); ?>

<body bgcolor="#666633">
<div class="content">
<div> <h2><strong style="margin-left: 371px; margin-top: 0px; border-top-width: 0px; padding-top: 0px; border-bottom-width: 15px; padding-bottom: 0px; margin-bottom: 2px;">Administrator's Log-in</strong></h2>
		<form id="login" name="login" method="post" action="adminlogin.php" style="margin-left: 363px; margin-top: 43px;">
          <b>Username :</b><span>
          <input name ="emailadd" type = "text" class = "email_add" maxlength="80" type="text" style="width: 179px; height: 28px; border-top-width: 3px;"/></span>
		  <br/>
		  <br/></span> 
		  <b>Password :</b><span>
          <input type = "password" class= "password" name= "pass" maxlength="80" type="password" style="width: 179px; height: 28px; border-top-width: 3px;"/></span>
		  <br/>
		  <br/>
          <input type="submit" id="login" name = "login " value="Login"style="margin-left: 112px; height: 26px;">
        </form>
      </div>
     
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
<div>

</div> 
</html>