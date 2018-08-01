<?php
session_start();
$_SESSION["brokerId"] = "";

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

	$sql = "SELECT * from broker where email = '".$_POST['email']."' and password = '".$_POST['password']."';";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		
		    while($row = $result->fetch_assoc()) {
				$_SESSION["brokerId"] = $row['id'];
			}
		echo "1";
	} else {
		echo "0";
	}

	$conn->close();

?>