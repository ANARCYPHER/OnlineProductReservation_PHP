<html>
<?php include('config/config.php'); ?>
<?php include('app/design/head.php'); ?>
<div class="wrapper">
<div class="page">

<?php include('app/design/header.php'); ?>
<div class="content">
<?php 
	
	$id = $_SESSION['id'];
	$profile = mysql_query("SELECT * FROM users WHERE user_id = '$id'") or die(mysql_error());
	
	
			$cj = mysql_fetch_array($profile);
			$fname = $cj['fname'];
			$lname = $cj['lname'];
			$address = $cj['address'];
			$city = $cj['city'];
			$province = $cj['province'];
			$country = $cj['country'];
			$code = $cj['code'];
			$tel_no = $cj['tel_no'];
			$email= $cj['email'];
			$user = $cj['username'];
?>
		<div class="profile">
		<h3 style="margin-left: 190px; margin-top: 20px;color:#ffffff;">Change Password?</h3>

		<div id="reg" style="margin: 26px 67px 0px 221px;">
					<h4>Name : <?php echo $lname. ", " .$fname;  ?></h4>
			</label>
			<br/>
			<label><h4>Address : <?php echo $address;  ?>
			<h4>&nbsp;</h4>
			</label>
			<label><h4>City : <?php echo $city;  ?>
			<h4>&nbsp;</h4>
			</label>
			<label><h4>Province :<?php echo $province; ?>
			<h4>&nbsp;</h4>
			</label>
			<label><h4>Country : <?php echo $country;  ?>
			<h4>&nbsp;</h4>
			</label>
			<label><h4>Code : 
			<?php echo $code;  ?>
			<h4>&nbsp;</h4>
		  </label>
            <label>
            <h4>
            Tel_no :
            <?php echo $tel_no;  ?>
            <h4>&nbsp;</h4>
            </label>
			<label><h4>Email : 
			<?php echo $email;  ?>
			<h4>&nbsp;</h4>
		  </label>
            <label>
            <h4>
            UserName :
            <?php echo $user;  ?>
            <h4>&nbsp;</h4>
</label>
	 
		
		<label>Current Password :
</label>
		<input type="password" class="c_password"  style=" height: 25px;"/><div class="result"></div>
	  </div>	
	  </div>
	  
</div>
<?php include('app/design/footer.php'); ?>
</div>
<script type="text/javascript">

$(document).ready( function() {

	$(".n_password").attr("disabled", "disabled"); 
$(".c_password").keyup( function(event){

	var pass = $(".c_password").val();

	
	if( pass != 0){
		$.ajax({
		type: "POST",
		data: ({pass: pass}),
		url:"update.php",
		success: function(response) {
		
		$(".result").slideDown().html(response); 
		$(".n_password").removeAttr("disabled");  
		
		}
		})
		}else{
		$(".result").slideUp();
		$(".result").val("");
		
		$(".n_password").attr("disabled", "disabled"); 	
		}
 }) 
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
</div>
</html>