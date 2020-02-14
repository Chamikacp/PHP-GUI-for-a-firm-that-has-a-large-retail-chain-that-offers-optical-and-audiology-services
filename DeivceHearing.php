<!	DOCTYPE html>	 
<html> 
<head> 
    <title>Device</title> 
</head> 
<body> 
 
    <h1 align="center">Add a New Hearing Device</h1> 
    <hr>
	<div align="center">
    <form action="InsertHearing.php" method="post"> 
		<table>
			<tr>
				<td>Device Catalog :</td>
				<td><input type="text" name="catalog"> 
			</tr>
			<tr>
				<td>Device Catalog Name :</td>
				<td><input type="text" name="name">
			</tr>
			<tr>
				<td>Device Descrption :</td>
				<td><input type="text" name="description">
			</tr>
			<tr>
				<td>Availability Staus :</td>
				<td><input type="text" name="status">
			</tr>
			<tr>
				<td>Make :</td>
				<td><input type="text" name="make">
			</tr>
			<tr>
				<td>Model :</td>
				<td><input type="text" name="model">
			</tr>
			
			<hr>
			<tr>
			<td><input style="background-color:blue;" type="submit" name ="submit" value="Add Device"></td>
            <td><input style="background-color:red;" type="reset" name="reset" value="Reset"></td>
			</tr>
			<hr>	
			<br/><br/><br/>			
		</table>
    </form>  
	</div>
</body> 
</html> 
