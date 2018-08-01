<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "realstate";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 

	$sql = "UPDATE `path` SET 
			`name` = '".$_POST['name']."', 

			`floor` = '".$_POST['floor']."',
			`size` = '".$_POST['size']."',
			`rooms` = '".$_POST['rooms']."',
			`fee` = '".$_POST['fee']."',

			`price` = '".$_POST['price']."',
			`status` = '".$_POST['status']."',
			`image_redirect_to` = '".$_POST['image_redirect_to']."'
			WHERE `path`.`imageId` = '".$_POST['imageId']."'
			AND `path`.`pathId` = '".$_POST['pathId']."';";

	if ($conn->query($sql) === TRUE) {
		echo "1";
	} else {
		echo "Error updating record: " . $conn->error;
	}

	$conn->close();

?>