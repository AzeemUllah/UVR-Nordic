<?php
	session_start();
	if(isset($_SESSION["admin"])){
		if($_SESSION["admin"] == ""){
			header("Location: ./signin.php");
			die();
		}
		
	}
	else{
		header("Location: ./signin.php");
		die();
	}
		$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "realstate";
	$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
		} 
?>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title></title>

  <link rel="shortcut icon" sizes="196x196" href="assets/images/logo.png">
  
  <!-- style -->
  <link rel="stylesheet" href="./../assets/animate.css/animate.min.css" type="text/css" />
  <link rel="stylesheet" href="./../assets/glyphicons/glyphicons.css" type="text/css" />
  <link rel="stylesheet" href="./../assets/font-awesome/css/font-awesome.min.css" type="text/css" />
  <link rel="stylesheet" href="./../assets/material-design-icons/material-design-icons.css" type="text/css" />

  <link rel="stylesheet" href="./../assets/bootstrap/dist/css/bootstrap.min.css" type="text/css" />
  <!-- build:css assets/styles/app.min.css -->
  <link rel="stylesheet" href="./../assets/styles/app.css" type="text/css" />
  <!-- endbuild -->
  <link rel="stylesheet" href="./../assets/styles/font.css" type="text/css" />

	<link rel="stylesheet" href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.min.css">
	<link rel="stylesheet" href="https://unpkg.com/filepond/dist/filepond.min.css">

<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
  
  <style>

  
  .filepond--drop-label {
		color: #4c4e53;
	}

	.filepond--label-action {
		text-decoration-color: #babdc0;
	}

	.filepond--panel-root {
		border-radius: 2em;
		background-color: transparent;
		height: 1em;
	}

	.filepond--item-panel {
		background-color: #595e68;
	}

	.filepond--drip-blob {
		background-color: #7f8a9a;
	}

	.filepond--drop-label{
		margin-top: -4em;
		    color: white;
    font-size: 18px;
	}
	  .filepond--root{
	padding-top: 5em;
  }
	
	
	.row{
		margin: 0;
	}
  
	  @import url(https://fonts.googleapis.com/css?family=Roboto:400,500,300,700);
	body{
	  background: #41c7e0;
	  background: #41c7e0;
	  font-family: 'Roboto', sans-serif;
	}
	
	
	.container {
  position: absolute;
 
  left: 50%;
  margin-left: -65px;
  margin-top: -20px;
  width: 130px;
  height: 40px;
  text-align: center;
}

#button {
  outline: none;
  height: 40px;
  text-align: center;
  width: 130px;
  border-radius: 40px;
  background: #fff;
  border: 2px solid #1ECD97;
  color: #1ECD97;
  letter-spacing: 1px;
  text-shadow: 0;
  font-size: 12px;
  font-weight: bold;
  cursor: pointer;
  transition: all 0.25s ease;
}
#button:hover {
  color: white;
  background: #1ECD97;
}
#button:active {
  letter-spacing: 2px;
}
#button:after {
  content: "SUBMIT";
}

.onclic {
  width: 40px !important;
      margin-left: 30% !important;
    position: absolute;
  border-color: #bbbbbb !important;
  border-width: 3px !important;
  font-size: 0 !important;
  border-left-color: #1ECD97 !important;
  -webkit-animation: rotating 2s 0.25s linear infinite !important;
          animation: rotating 2s 0.25s linear infinite !important;
}

.onclic:after {
  content: "" !important;
}
.onclic:hover {
  color: #1ECD97 !important;
  background: white !important;
}

.validate {
  font-size: 13px !important;
      color: #1ECD97 !important;
    background: #ffffff !important;
}
.validate:after {
  font-family: 'FontAwesome' !important;
  content: "\f00c  Uploaded" !important;
}

@-webkit-keyframes rotating {
  from {
    -webkit-transform: rotate(0deg);
            transform: rotate(0deg);
  }
  to {
    -webkit-transform: rotate(360deg);
            transform: rotate(360deg);
  }
}

@keyframes rotating {
  from {
    -webkit-transform: rotate(0deg);
            transform: rotate(0deg);
  }
  to {
    -webkit-transform: rotate(360deg);
            transform: rotate(360deg);
  }
}


table{
  width:100%;
  table-layout: fixed;
}
.tbl-header{
  background-color: rgba(255,255,255,0.3);
 }
.tbl-content{
  height:69%;
  overflow-x:auto;
  margin-top: 0px;
  border: 1px solid rgba(255,255,255,0.3);
}
th{
  padding: 20px 15px;
  text-align: left;
  font-weight: 500;
  font-size: 12px;
  color: #fff;
  text-transform: uppercase;
}
td{
  padding: 15px;
  text-align: left;
  vertical-align:middle;
  font-weight: 300;
  font-size: 12px;
  color: #fff;
  border-bottom: solid 1px rgba(255,255,255,0.1);
}


/* follow me template */
.made-with-love {
  margin-top: 40px;
  padding: 10px;
  clear: left;
  text-align: center;
  font-size: 10px;
  font-family: arial;
  color: #fff;
}
.made-with-love i {
  font-style: normal;
  color: #F50057;
  font-size: 14px;
  position: relative;
  top: 2px;
}
.made-with-love a {
  color: #fff;
  text-decoration: none;
}
.made-with-love a:hover {
  text-decoration: underline;
}


/* for custom scrollbar for webkit browser*/

::-webkit-scrollbar {
    width: 6px;
} 
::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
} 
::-webkit-scrollbar-thumb {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
}


.status-blob.status-blob-1 {
    background: #3e940b;
}


.status-blob.status-blob-2 {
    background: #cf0006;
}

.status-blob {
    border-radius: 50%;
    display: inline-block;
    width: 14px;
    height: 14px;
    line-height: 1em;
    background: #333;
    vertical-align: text-top;
}
.bg-gradient1 span,
.bg-gradient1:before {
  background: #fa7e29;
  background: linear-gradient(180deg, #fa7e29 0%, #F6682F 80%, #F6682F 100%);
}

.bg-gradient2 span,
.bg-gradient2:before {
  background: #39C2C9;
  background: linear-gradient(180deg, #39C2C9 0%, #3FC8C9 80%, #3FC8C9 100%);
}

.pop-onhover.bg-gradient3 span,
.pop-onhover.bg-gradient3:before {
  background: #B9AEF0;
  background: linear-gradient(180deg, #B9AEF0 0%, #ADA1EB 80%, #ADA1EB 100%);
}

.bg-gradient4 span {
  background: #F6682F;
  background: linear-gradient(180deg, #F6682F 0%, #F6682F 80%, #F6682F 100%);
}

/* General */
.wrapper {
  margin: 4% auto;
  text-align: center;
}

h3 {
  color: #666a73;
  font-weight: 300;
  letter-spacing: 0.06em;
}

a {
  text-decoration: none;
}
a:hover, a:focus, a:active {
  text-decoration: none;
}

/* fancy Button */
.fancy-button {
  display: inline-block;
  margin: 20px;
  font-family: 'Heebo', Helvetica, Arial, sans-serif;
  font-weight: 500;
  font-size: 16px;
  letter-spacing: 0.07em;
  text-transform: uppercase;
  line-height: 24px;
  color: #ffffff;
  position: relative;
}
.fancy-button.bg-gradient1 {
  text-shadow: 0px 0px 1px #BF4C28;
}
.fancy-button.bg-gradient2 {
  text-shadow: 0px 0px 1px #227270;
}
.fancy-button.bg-gradient3 {
  text-shadow: 0 0 1px #546082;
}
.fancy-button:before {
  content: '';
  display: inline-block;
  height: 40px;
  position: absolute;
  bottom: -1px;
  left: 10px;
  right: 10px;
  z-index: -1;
  border-radius: 2em;
  -webkit-filter: blur(14px) brightness(0.9);
          filter: blur(14px) brightness(0.9);
  -webkit-transform-style: preserve-3d;
          transform-style: preserve-3d;
  transition: all 0.3s ease-out;
}
.fancy-button i {
  margin-top: -2px;
  font-size: 1.265em;
  vertical-align: middle;
}
.fancy-button span {
  display: inline-block;
  padding: 6px 14px;
  border-radius: 50em;
  position: relative;
  z-index: 2;
  will-change: transform, filter;
  -webkit-transform-style: preserve-3d;
          transform-style: preserve-3d;
  transition: all 0.3s ease-out;
}
.fancy-button:focus {
  color: #ffffff;
}
.fancy-button:hover {
  color: #ffffff;
}
.fancy-button:hover span {
  -webkit-filter: brightness(0.9) contrast(1.2);
          filter: brightness(0.9) contrast(1.2);
  -webkit-transform: scale(0.96);
          transform: scale(0.96);
}
.fancy-button:hover:before {
  bottom: 3px;
  -webkit-filter: blur(6px) brightness(0.8);
          filter: blur(6px) brightness(0.8);
}
.fancy-button:active span {
  -webkit-filter: brightness(0.75) contrast(1.7);
          filter: brightness(0.75) contrast(1.7);
}
.fancy-button.pop-onhover span {
  border-radius: 4px;
}
.fancy-button.pop-onhover:before {
  opacity: 0;
  bottom: 10px;
}
.fancy-button.pop-onhover:hover:before {
  bottom: -7px;
  opacity: 1;
  -webkit-filter: blur(16px);
          filter: blur(16px);
}
.fancy-button.pop-onhover:hover span {
  -webkit-transform: scale(1);
          transform: scale(1);
}
.fancy-button.pop-onhover:hover:active span {
  -webkit-filter: brightness(1) contrast(1);
          filter: brightness(1) contrast(1);
  -webkit-transform: scale(1);
          transform: scale(1);
  transition: all 0.2s ease-out;
}
.fancy-button.pop-onhover:hover:active:before {
  bottom: 0;
  -webkit-filter: blur(5px) brightness(0.85);
          filter: blur(5px) brightness(0.85);
  transition: all 0.2s ease-out;
}

.pop-onhover.bg-gradient3 span:hover {
  background: #B9AEF0;
  background: linear-gradient(120deg, #B9AEF0 0%, #ADA1EB 80%, #ADA1EB 100%);
}

.bg-gradient4:before {
  bottom: 2px;
  opacity: 0.6;
  transition: all 0.3s ease-out;
}

.bg-gradient4 {
  transition: all 1s ease;
}
.bg-gradient4 span {
  outline: 0px solid transparent;
}
.bg-gradient4:hover span {
  background: #FC3D7C;
  background: linear-gradient(-25deg, #FC3D7C 0%, #F76A34 80%, #F76A34 100%);
}
.bg-gradient4:focus span, .bg-gradient4:active span {
  background: #FC3D7C;
  background: linear-gradient(25deg, #FC3D7C 0%, #F76A34 80%, #F76A34 100%);
}
.bg-gradient4:focus span {
  box-shadow: 0 0 9px #00FFF8;
}
.bg-gradient4:active span {
  -webkit-filter: brightness(0.85) contrast(1.3);
          filter: brightness(0.85) contrast(1.3);
}

.bg-gradient4 span {
  text-transform: capitalize;
}


  </style>
  
  
</head>
<body>
  <div class="app" id="app">
  
  <div class=row>
	<h1 style="text-align: center; color: white;     padding-top: 2%;">Upload Image</h1>
  </div>
  
  <div class=row>
  
	<div class="col-md-4"> 
		<form action="./../api/admin/uploadImage.php" method="post" enctype="multipart/form-data">
			<input type="file" 
			   class="filepond"
			   name="filepond"
			   id="filepond"
			 />
			 	 <img id=imagePreview src=""/>
				<div class="container">
				  <button style="display: none;" class="" type="button" id="button"></button>
				</div>
				
			<!-- <input type="button" id=submit   value="Upload Image" name="submit"> -->
		</form>
	</div>
	
	
	<div class="col-md-7"> 
	  <h1 style="    text-align: center;
    color: white;
    font-size: 26px;
    margin-top: 3%;">List of all projects</h1>
		  <div class="tbl-header">
			<table cellpadding="0" cellspacing="0" border="0">
			  <thead>
				<tr>
				 
				  <th style="text-align: center;">ID</th>
				  <th style="text-align: center;">Image</th>
				  <th style="text-align: center;">Actions</th>
				</tr>
			  </thead>
			</table>
		  </div>
		  <div class="tbl-content" id="tableBody">
			<table cellpadding="0" cellspacing="0" border="0">
			  <tbody >
				<?php 
					
					$sql = "SELECT * FROM images ";
					$result = $conn->query($sql);
					if ($result->num_rows > 0) {
						while($row = $result->fetch_assoc()) {
							  echo "
								<tr>
							<td style='text-align: center;'>".$row['alias_name']."</td>
							  <td style='text-align: center; height: auto; width: 15%;'>".$row['image_content']."</td>
							  <td style='text-align: center;'><a onclick='gotoImage(\"".$row['id']."\");' class='fancy-button bg-gradient2'><span style='font-size: 73%;'><i class='fa fa-plus'></i> Edit</span></a></td>
							</tr>";
						}
					}
					else{
						echo "<span style='text-align: center; font-size: 150%; color: white; margin-left: 35%;'>No project uploaded yet!</span>";
					}
				
				?>
				
				
			  
			  
			  </tbody>
			</table>
		  </div>
	</div>
	</div>
  
  </div>
<!-- endbuild -->
</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/tippy.js/0.3.0/tippy.js"></script>
 
 
 <script src="https://unpkg.com/filepond-plugin-file-encode/dist/filepond-plugin-file-encode.min.js"></script>
 <script src="https://unpkg.com/filepond-plugin-file-validate-size/dist/filepond-plugin-file-validate-size.min.js"></script>
 <script src="https://unpkg.com/filepond-plugin-image-exif-orientation/dist/filepond-plugin-image-exif-orientation.min.js"></script>
 <!-- <script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.min.js"></script> -->
 <script src="https://unpkg.com/filepond-plugin-file-validate-type/dist/filepond-plugin-file-validate-type.min.js"></script>
 <script src="https://unpkg.com/filepond/dist/filepond.min.js"></script>
  
  <script>
  
	  function validate() {
		setTimeout(function() {
		  $( "#button" ).removeClass( "onclic" );
		  $( "#button" ).addClass( "validate", 450, callback );
		}, 2250 );
	  }
		function callback() {
		  setTimeout(function() {
			$( "#button" ).removeClass( "validate" );
		  }, 1250 );
		}
	
	$( document ).ready(function() {
		
		var file;
		
    	 FilePond.registerPlugin(
		
		// encodes the file as base64 data
	  FilePondPluginFileEncode,
	  
	   FilePondPluginFileValidateType,
		
		// validates the size of the file
		FilePondPluginFileValidateSize,
		
		// corrects mobile image orientation
		FilePondPluginImageExifOrientation,
		
		// previews dropped images
		 // FilePondPluginImagePreview
		);

		// Select the file input and use create() to turn it into a pond
		var pond = FilePond.create(
			document.getElementById('filepond'),
			{
				acceptedFileTypes: ['image/svg+xml']
				
			}
		);
		
		$( "#button" ).click(function() {
			
			$( "#button" ).addClass( "onclic");
			//var file = getBase64(pond.getFiles()[0].file);
			console.log(pond.getFiles());
			if((pond.getFiles()).length == 0){
				alert("No file selected!");
				$( "#button" ).removeClass( "onclic" );
			}
			else if(pond.getFiles()[0].fileExtension != 'svg'){
				alert("Invalid file format!");
				$( "#button" ).removeClass( "onclic" );
			}
			else{
				
					var reader = new FileReader();
					reader.readAsDataURL(pond.getFiles()[0].file);
					reader.onload = function () {
					   file = reader.result;
					};
					
					reader.onloadend = function (){
						 $.ajax({
							url: "../api/admin/uploadImage.php",
							type: "POST",
							data: {
								file: file
							},
							success: function (data) {
								console.log(data);
								if (data) {
									setTimeout(function(){
										$( "#button" ).removeClass( "onclic" );
										$( "#button" ).addClass( "validate");
										if(data > 0){
											$( "#button" ).attr("disabled","disabled");
											alert("Upload and Processing Completed!");
											setTimeout(function(){gotoImage(data); },1000);
										}
										else{
											console.log(data);
										}	
									}, 250);
									
								}
							},
							error: function (xhr, status, error) {
								var err = eval("(" + xhr.responseText + ")");
								alert(err.Message);
							}
						});
					}
			
		}
		});
		
		setInterval(function (){
			if((pond.getFiles()).length != 0){				
				if(pond.getFiles()[0].fileExtension == 'svg'){
					var reader = new FileReader();
					reader.readAsDataURL(pond.getFiles()[0].file);
					reader.onload = function () {
					   file = reader.result;
					};
					reader.onloadend = function (){
						$("#imagePreview").attr('src',file);
						$("#button").css("display","block");
						
					}
				}
				else{
					$("#imagePreview").attr('src','');
					$("#button").css("display","none");
					$( "#button" ).removeClass( "onclic" );
					$( "#button" ).removeClass( "validate" );
					$("#button").prop("disabled", false);
				}
			}
				else{
					$("#imagePreview").attr('src','');
					$("#button").css("display","none");
					$( "#button" ).removeClass( "onclic" );
					$( "#button" ).removeClass( "validate" );
					$("#button").prop("disabled", false);
					
				}
		},500);
		
		$(".filepond--action-remove-item").click(function(){
			console.log("clicked");
			$("#button").prop("disabled", false);
		});
		
		
	});
	
	function gotoImage(id){
		window.location = "./dashboard-label-image.php?imageId="+id;
	}
	
	
	/*$(function() {
	  $( "#button" ).click(function() {
		$( "#button" ).addClass( "onclic", 250, validate);
	  });

	  function validate() {
		setTimeout(function() {
		  $( "#button" ).removeClass( "onclic" );
		  $( "#button" ).addClass( "validate", 450, callback );
		}, 2250 );
	  }
		function callback() {
		  setTimeout(function() {
			$( "#button" ).removeClass( "validate" );
		  }, 1250 );
		}
	});
  */
  </script>



</html>

  
  
  
  
  
  
  
  