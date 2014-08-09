<!-- <script src="jquery-1.3.2.min.js"></script>
<script>
$(document).ready(function()
{
	$('#addNew').click(function()
	{
		var data = $(".events").html();
		data += "<tr><td>Event name</td><td><input type=\"text\" name=\"event_name[]\" value=''/><input type=\"image\" value='x'/></td></tr>";
		$(".events").html(data);		 	
	});
});</script>
<form action="" method="post">
<table class="events">-->
<?php /*if(isset($_POST['event_name']) && count($_POST['event_name'])>1)
{	$ename = $_POST['event_name'];
	foreach($ename as $row)
	{
		echo "<tr><td>Event name</td><td><input type=\"text\" name=\"event_name[]\" value='".$row."'/></td></tr>";
	}
} else {?>
<tr>
	<td>
	Event name</td>
	<td><input type="text" name="event_name[]" value=""/> </td>
</tr>
<?php } ?>
</table>
<input  type="button" id="addNew" value="ADD NEW"/>
<input type="submit" name="submit_event" value="Save" onClick=""/>
<input type="reset" value="Reset"/>
</form> */

?>
<script src="jquery-1.3.2.min.js"></script>
<script>
$(document).ready(function()
{
	var d = new Date();
	alert(d);
});
</script>