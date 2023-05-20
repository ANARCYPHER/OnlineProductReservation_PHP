<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
   
   
    //connecting to our database
    $con = mysql_connect("localhost","root","");
    //condition if we are connected
    if(!$con){
        die("Not Connected ".mysql_error());
    }
    //bd, connection
    mysql_select_db("cj_handgunner",$con);
   
   
 
?>
</body>
</html>
