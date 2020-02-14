<?php
if(isset($_POST['submit'])){
	$catalog = $_POST['catalog'];
	$name = $_POST['name'];
	$description = $_POST['description'];
	$status = $_POST['status'];
	$make = $_POST['make'];
	$model = $_POST['model'];
	
	if(!empty($catalog) && !empty($name) && !empty($description) && !empty($status) && !empty($make) && !empty($model)){
		
			$dbconnection = mysqli_connect('localhost','root','','w1714889_dbs_cw');
			$query = "SELECT * FROM w1714889_device WHERE w1714889_deviceCatalog = '$catalog'";	 
			$result = mysqli_query($dbconnection,$query);	 
			if (mysqli_num_rows($result) == 0) {	 	

				$sqldevice = mysqli_query($dbconnection, "insert into w1714889_device(w1714889_deviceCatalog,w1714889_deviceCatalogName,w1714889_deviceDescrip,w1714889_availabilityStatus) values('$catalog','$name','$description','$status')");

				$sqlhearing = mysqli_query($dbconnection, "insert into w1714889_hearing_device(w1714889_deviceCatalog,w1714889_hdMake,w1714889_hdModel) values('$catalog','$make','$model')");
				
				if($sqldevice){
					if($sqlhearing){
						echo "Entered Data has been inserterd to the Databse";
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
		echo "All the fields should filled";
	}	
}
?>