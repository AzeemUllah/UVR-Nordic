<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "realstate";

	$conn = new mysqli($servername, $username, $password, $dbname);
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	$sql = "UPDATE `images` SET `alias_name` = '".$_POST['imageName']."' WHERE `images`.`id` = ".$_POST['imageId'].";";

	if ($conn->query($sql) === TRUE) {
		echo "1";
	} else {
		echo "Error updating record: " . $conn->error;
	}

	$conn->close();

?>