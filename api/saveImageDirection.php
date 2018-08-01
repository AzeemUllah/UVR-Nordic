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

	$sql = "UPDATE `images` SET `image_right` = '".$_POST['right']."', `image_left` = '".$_POST['left']."', `image_up` = '".$_POST['up']."', `image_down` = '".$_POST['down']."' WHERE `images`.`id` = ".$_POST['id'].";";

	if ($conn->query($sql) === TRUE) {
		echo "1";
	} else {
		echo "Error updating record: " . $conn->error;
	}

	$conn->close();

?>