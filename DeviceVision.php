<!	DOCTYPE html>	 
<html> 
<head> 
    <title>Device</title> 
</head> 
<body> 
 
    <h1 align="center">Add a New Visual Device</h1> 
	
	<h3 align="center">* IF ANY FLAG IS FALSE PLEASE ENTER "NULL" IN FLAG'S ATTRIBUTES *</h3>
    <hr>
	<div align="center">
    <form action="InsertVision.php" method="post"> 
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
				<td>Frame Flag (true = 1/ flase = 0) :</td>
				<td><input type="text" name="frflag">
			</tr>
			<tr>
				<td>Frame Brand :</td>
				<td><input type="text" name="frbrand">
			</tr>
			<tr>
				<td>Frame Model :</td>
				<td><input type="text" name="frmodel">
			</tr>
			<tr>
				<td>Lens Flag (true = 1/ flase = 0) :</td>
				<td><input type="text" name="lflag">
			</tr>
			<tr>
				<td>Lens Serial Number :</td>
				<td><input type="text" name="lserial">
			</tr>
			<tr>
				<td>Lens Vision Type :</td>
				<td><input type="text" name="ltype">
			</tr>
			<tr>
				<td>Lens Tint :</td>
				<td><input type="text" name="ltint">
			</tr>
			<tr>
				<td>Lens Thinness Level :</td>
				<td><input type="text" name="llevel">
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
