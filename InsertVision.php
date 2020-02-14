<?php
if(isset($_POST['submit'])){
	$catalog = $_POST['catalog'];
	$name = $_POST['name'];
	$description = $_POST['description'];
	$status = $_POST['status'];
	$frflag = $_POST['frflag'];
	$frbrand = $_POST['frbrand'];
	$frmodel = $_POST['frmodel'];
	$lflag = $_POST['lflag'];
	$lserial = $_POST['lserial'];
	$ltype = $_POST['ltype'];
	$ltint = $_POST['ltint'];
	$llevel = $_POST['llevel'];
	
	if(!empty($catalog) && !empty($name) && !empty($description) && !empty($status) || !empty($frflag) && !empty($frbrand) && !empty($frmodel) || !empty($lflag) && !empty($lserial) && !empty($ltype) && !empty($ltint) && !empty($llevel)){
	
		$dbconnection = mysqli_connect('localhost','root','','w1714889_dbs_cw');
		$query = "SELECT * FROM w1714889_device WHERE w1714889_deviceCatalog = '$catalog'";	 
		$result = mysqli_query($dbconnection,$query);	 
			if (mysqli_num_rows($result) == 0) {	 	

				$sqldevice = mysqli_query($dbconnection, "insert into w1714889_device(w1714889_deviceCatalog,w1714889_deviceCatalogName,w1714889_deviceDescrip,w1714889_availabilityStatus) values('$catalog','$name','$description','$status')");

				$sqlvision = mysqli_query($dbconnection, "insert into w1714889_visual_device(w1714889_deviceCatalog,w1714889_frFlag,w1714889_frBrand,w1714889_frModel,w1714889_lensFlag,w1714889_lensSerialNb,w1714889_lensVisisonType,w1714889_lensTint,w1714889_lensThinnessLevel) values('$catalog','$frflag','$frbrand','$frmodel','$lflag','$lserial','$ltype','$ltint','$llevel')");
			
				if($sqldevice){
					if($sqlvision){
						echo "Enterd Data has been inserterd to the Databse";
					}
				}
				else{
					echo "Data not inserterd";
				}
			}
			else{
				echo "Entered catalog is already availble";
			}
	}
	else{
		echo "All the fields should be filled";
	}
}
?>