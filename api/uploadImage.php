<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "realstate";

function factorial($number){
    $factorial = 1;
    for ($i = 1; $i <= $number; $i++){
      $factorial = $factorial * $i;
    }
    return $factorial;
}

function base64_to_svg($base64_string, $output_file) {
    // open the output file for writing
    $ifp = fopen( $output_file, 'wb' ); 

    // split the string on commas
    // $data[ 0 ] == "data:image/png;base64"
    // $data[ 1 ] == <actual base64 string>
    $data = explode( ',', $base64_string );

    // we could add validation here with ensuring count( $data ) > 1
    fwrite( $ifp, base64_decode( $data[ 1 ] ) );

    // clean up the file resource
    fclose( $ifp ); 

    return $output_file; 
}

function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

$target_dir = "uploads/";
$fileName = generateRandomString(10). '.svg';
$target_file = $target_dir . $fileName;

$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Allow certain file formats
if($imageFileType != "svg" ) {
    echo "Sorry, only SVG images are allowed.";
    $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
	$file = base64_to_svg($_POST['file'], $target_file );
	if(strlen($file) > 0){
		
		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
		} 

		$fileContents = file_get_contents($target_file);
	
		//$fileContents = str_replace("<path ","<path id=\'".time(). generateRandomString(50) ."\' ",$fileContents);
		$fileContents = str_replace(array("\r", "\n"), '', $fileContents);
		
		$currentPosition = 0;
		$maxRun = substr_count($fileContents,"<path ");
		$maxRun = $maxRun * 100;
		$allId = array();
		
		for($i = 0; $i < $maxRun; $i++){
			$pos = strpos($fileContents, "<path ",$currentPosition);
			
			if($fileContents[$pos+strlen("<path ")].$fileContents[$pos+strlen("<path ")+1] == 'id' ){
				$currentPosition = $pos + 2;
				continue;
			}else{				
				if ($pos !== false) {
					$newId = time(). '' . $pos;
					array_push($allId, $newId );
					$fileContents = substr_replace($fileContents, "<path id=\'" . $newId ."\'", $pos, strlen("<path "));
				}
			}			
		}		
		
		$sql = "INSERT INTO `images` (`id`, `broker_id`, `path`, `image_content`) VALUES (NULL, '".$_SESSION['brokerId']."', '".$fileName."', '".$fileContents."');";

		if ($conn->query($sql) === TRUE) {
			$last_id = $conn->insert_id;
			//header("Location: ../dashboard-label-image.php?imageId=".$last_id);
			//die();
			//echo "New record created successfully";
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}

		
		foreach ($allId as $value) {
			$sql = "INSERT INTO `path` (`imageId`, `pathId`, `name`, `price`, `status`) VALUES ('".$last_id."', '".$value."', '".$value."', '0', 'For Sale');";
			if ($conn->query($sql) === TRUE) {
				//header("Location: ../dashboard-label-image.php?imageId=".$last_id);
				//die();
				//echo "New record created successfully";
			}
		}
		
		echo $last_id;
	}
	else{
		echo $file;
	}
	/*
    if (move_uploaded_file($_FILES["filepond"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["filepond"]["name"]). " has been uploaded.";
		
		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
		} 

		$fileContents = file_get_contents($target_file);
	
		//$fileContents = str_replace("<path ","<path id=\'".time(). generateRandomString(50) ."\' ",$fileContents);
		$fileContents = str_replace(array("\r", "\n"), '', $fileContents);
		
		$currentPosition = 0;
		$maxRun = substr_count($fileContents,"<path ");
		$maxRun = $maxRun * 100;
		$allId = array();
		
		for($i = 0; $i < $maxRun; $i++){
			$pos = strpos($fileContents, "<path ",$currentPosition);
			
			if($fileContents[$pos+strlen("<path ")].$fileContents[$pos+strlen("<path ")+1] == 'id' ){
				$currentPosition = $pos + 2;
				continue;
			}else{				
				if ($pos !== false) {
					$newId = time(). '' . $pos;
					array_push($allId, $newId );
					$fileContents = substr_replace($fileContents, "<path id=\'" . $newId ."\'", $pos, strlen("<path "));
				}
			}			
		}		
		
		$sql = "INSERT INTO `images` (`id`, `broker_id`, `path`, `image_content`) VALUES (NULL, '".$_SESSION['brokerId']."', '".$fileName."', '".$fileContents."');";

		if ($conn->query($sql) === TRUE) {
			$last_id = $conn->insert_id;
			//header("Location: ../dashboard-label-image.php?imageId=".$last_id);
			//die();
			echo "New record created successfully";
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}

		
		foreach ($allId as $value) {
			$sql = "INSERT INTO `path` (`imageId`, `pathId`, `name`, `price`, `status`) VALUES ('".$last_id."', '".$value."', '".$value."', '0', 'For Sale');";
			if ($conn->query($sql) === TRUE) {
				//header("Location: ../dashboard-label-image.php?imageId=".$last_id);
				//die();
				echo "New record created successfully";
			}
		}
		
		
		
		
		$conn->close();
		header("Location: ../dashboard-label-image.php?imageId=".$last_id);
		die();
		
    } else {
        echo "Sorry, there was an error uploading your file.";
    }*/
}
?>