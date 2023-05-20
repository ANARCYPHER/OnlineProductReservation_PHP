<?php include('config/config.php'); ?>
<?php
	$pass = md5($_POST['pass']);
	
	$v_pass = mysql_query("SELECT * FROM users WHERE password = '$pass'") or die(mysql_error());
	
	$pass = mysql_fetch_array($v_pass);
	
	if($pass > 0){
		echo "Password Match";
		?>
		<br/>
		<label>New Password : </label><input type="password" class="n_password"   style="height: 25px; margin-left: 21px;" />
		<br/>
		<button class="save" style="margin-left: 230px;"><span>Change</span></button>
		<?php
	}else{
		echo "Password Did not Match";
	}
 ?>
<script type="text/javascript">

$(document).ready( function() {
 
		$('.save').click( function() {
		
		var n_pass = $(".n_password").val();
		
		$.ajax({
		
		type: "POST",
		data: ({n_pass: n_pass}),
		url:"change_pass.php",
		success: function(response) {
		
		$(".result").slideDown().html(response); 

		
		}
		})
			
		})
 }) 

</script>