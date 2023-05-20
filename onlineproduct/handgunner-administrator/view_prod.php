<html>
<?php include('../config/config.php'); ?>
<?php include('design/head.php'); ?>

<div class="wrapper">
<?php include('design/header.php'); ?>
<div class="holder">
<div class="content">
<br/>
<div>
<h3 style="border-left-width: 36px; padding-left: 60px;color:#ffffff;">List of Products</h3>
</div>
<br/>
<?php
echo "<table border='1'>";
echo"<tr>";
	echo"<td width = '90'>"."<p class='yellow' align = 'center'>"."ID"."</p>"."</td>";
	echo"<td width = '100'>"."<p class='yellow' align = 'center'>"."Image"."</p>"."</td>";
	echo"<td width = '100'>"."<p class='yellow' align = 'center'>"."Description"."</p>"."</td>";
	echo"<td width = '100'>"."<p class='yellow' align = 'center'>"."Name"."</p>"."</td>";
	echo"<td width = '200'>"."<p class='yellow' align = 'center'>"." Price "."</p>"."</td>";
	echo"<td width = '100'>"."<p class='yellow' align = 'center'>"."Model"."</p>"."</td>";
	echo"<td width = '100'>"."<p class='yellow' align = 'center'>"."Serial"."</p>"."</td>";
	echo"<td colspan='2'>"."<p class='yellow' align = 'center'>"."Actions"."</p>"."</td>";

	echo "</tr>";

    $id = mysql_query("SELECT * FROM products");

    while($name_data=mysql_fetch_object($id))
	
    {
	$ID=$name_data->id;

	echo "<tr class='del".$ID."'>";
    echo "<td width = '90'>"."<p class='yellow' align = 'center'>". $name_data->id ."</p>"."</td>";
    echo "<td width = '100'>"."<p class='yellow' align = 'center'>".$name_data->image . "</p>"."</td>";
    echo "<td width = '100'>"."<p class='yellow' align = 'center'>".$name_data->desc .  "</p>"."</td>";
    echo "<td width = '100'>"."<p class='yellow' align = 'center'>".$name_data->name . "</p>"."</td>";
	echo "<td width = '200'>"."<p class='yellow' align = 'center'>".$name_data->price . "</p>"."</td>";
	echo "<td width = '200'>"."<p class='yellow' align = 'center'>".$name_data->model . "</p>"."</td>";
	echo "<td width = '200'>"."<p class='yellow' align = 'center'>".$name_data->serial_no . "</p>"."</td>";
	echo"<td ><a class='del' id='".$ID."' href='#'>"."DELETE"."</a>"."</td>";
/* 	echo"<td><a href='delete.php?prod_id=".$ID."'>"."DELETE"."</a>"."</td>"; */
	echo"<td><a href='edit.php?prod_id=".$ID."'>"."EDIT"."</a>"."</td>";
  
     echo "</tr>";  
    }   
	echo '</table>';
mysql_close($connection);
?>
</div>
</div>
<?php include('design/footer.php'); ?>
</div>

</div>
</div>
</div>
</html>
<script type="text/javascript">
	$(document).ready( function() {
		$(".del").click( function() { 
		var id = $(this).attr("id");
		if(confirm("Are you sure you want to delete this?"))
		{
	 	$.ajax({
		type: "POST",
		url: "delete.php",
		data: ({id: id}),
		cache: false,
		success: function(html){
		$(".del"+id).fadeOut('slow', function() {$(this).remove();});
		}
		});
		}
		
		return false;
	});
	
	})
</script>