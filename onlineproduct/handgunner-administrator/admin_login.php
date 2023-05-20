<?php include('../../config/config.php'); ?>
<?php
 
			if (isset($_POST['btnlog'])) 
			{ 			
				$user_name = $_POST['user'];			
				$user_pass = $_POST['pass'];	
				
					
					// sending query		
				$result = mysql_query("SELECT `admin_login`.`user_name`, `admin_login`.`user_pass` FROM admin_login
					WHERE ((`admin_login`.`user_name` = '$user_name') AND (`admin_login`.`user_pass` = '$user_pass'))");
				
					
						if (!$result) 
						{
						die("Query to show fields from table failed");
						}
						echo $numberOfRows;
						$numberOfRows = MYSQL_NUMROWS($result);				
						If ($numberOfRows == 0) 
							{
							echo " <font color= 'red'>Invalid username and password!</font>";
						
							} 
				 	else if ($numberOfRows > 0) 
							{
							session_register('is');
							$_SESSION['is']['btnlog']    = TRUE;
							$_SESSION['is']['user_name'] = $_POST['user'];
							$session = "1";	
					
							header("location:admin_login.php");				 	
					}
				}
		?>
<html>
<div class="wrapper">
<?php include("html/head.php");?>
<div class="content">
      <div id="tit">Administrator's Log In</div>     <div id="rightcontent"><br />
	  <b> Please log in first before you can manage this site...</b>
		<form id="login" name="login" method="post" action="">
          Username <span>
          <input name="user" class="user_name" id="txt" maxlength="80" type="text"/>
          </span> Password <span>
          <input name="pass" class="user_pass" id="txt" maxlength="80" type="password"/>
          </span>
          <input name="btnlog" type="submit" id="btnlog" value="submit"/>
        </form>
      </div>
     
  </div>
</div>
</body>
</html>
