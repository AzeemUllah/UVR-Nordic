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
?>

<html>
<head>
<link type="text/css" rel="stylesheet" href="./../assets/js/jquery.qtip.css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tippy.js/0.3.0/tippy.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  
<title>Page Title</title>

<style>
.qtip-default {
    border: 1px solid #69675e;
    background-color: #191918;
    color: #fff;
}

svg{
	height: 100%;
	width: 100%;
	margin-left: 5%;
}

path:focus{
	outline: none;
}

.tooltip{
			width: 600px;
			margin: 120px auto;
		}
		path{
			width: 90px;
			height: 30px;
			border: 2px solid #ccc;
			border-radius: 6px;
		}
		path:hover{
			cursor: pointer;
			background:#2c8;
		}
		.tippy-popper{
			    opacity: 0.85;
		}
		
		
		

h1{
  font-size: 30px;
  color: #fff;
  text-transform: uppercase;
  font-weight: 300;
  text-align: center;
  margin-bottom: 15px;
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


/* demo styles */

@import url(https://fonts.googleapis.com/css?family=Roboto:400,500,300,700);
body{
  background: #41c7e0;
  background: #41c7e0;
  font-family: 'Roboto', sans-serif;
}
section{
  margin: 50px;
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

.status-blob.status-blob-3 {
    background: rgb(255, 193, 7);
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










//for arrows

.chevron {
  margin-right: 20px;
}
.chevron--down {
  position: relative;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-shrink: 0;
  width: 25px;
      height: 25px;
  border: 2px #fff solid;
  -moz-border-radius: 100%;
  -webkit-border-radius: 100%;
  border-radius: 100%;
      margin-top: -50%;
}
.chevron--down:before {
  content: '';
  position: relative;
  display: inline-block;
  border-style: solid;
  border-width: 4px 4px 0 0;
  border-color: #fff;
  width: 16px;
  height: 16px;
  -moz-transform-origin: 50% 50%;
  -ms-transform-origin: 50% 50%;
  -webkit-transform-origin: 50% 50%;
  transform-origin: 50% 50%;
  left: 0;
  top: -3.3136px;
  -moz-transform: rotate(135deg);
  -ms-transform: rotate(135deg);
  -webkit-transform: rotate(135deg);
  transform: rotate(135deg);
}
.chevron--up {
  position: relative;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-shrink: 0;
width: 25px;
    height: 25px;
  border: 2px #fff solid;
  -moz-border-radius: 100%;
  -webkit-border-radius: 100%;
  border-radius: 100%;
}
.chevron--up:before {
  content: '';
  position: relative;
  display: inline-block;
  border-style: solid;
  border-width: 4px 4px 0 0;
  border-color: #fff;
  width: 16px;
  height: 16px;
  -moz-transform-origin: 50% 50%;
  -ms-transform-origin: 50% 50%;
  -webkit-transform-origin: 50% 50%;
  transform-origin: 50% 50%;
  left: 0;
  top: 3.3136px;
  -moz-transform: rotate(-45deg);
  -ms-transform: rotate(-45deg);
  -webkit-transform: rotate(-45deg);
  transform: rotate(-45deg);
}
.chevron--right {
  position: relative;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-shrink: 0;
width: 25px;
    height: 25px;
  border: 2px #fff solid;
  -moz-border-radius: 100%;
  -webkit-border-radius: 100%;
  border-radius: 100%;
}
.chevron--right:before {
  content: '';
  position: relative;
  display: inline-block;
  border-style: solid;
  border-width: 4px 4px 0 0;
  border-color: #fff;
  width: 16px;
  height: 16px;
  -moz-transform-origin: 50% 50%;
  -ms-transform-origin: 50% 50%;
  -webkit-transform-origin: 50% 50%;
  transform-origin: 50% 50%;
  left: -3.3136px;
  top: 0;
  -moz-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  -webkit-transform: rotate(45deg);
  transform: rotate(45deg);
}
.chevron--left {
  position: relative;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-shrink: 0;
  width: 25px;
      height: 25px;
  border: 2px #fff solid;
  -moz-border-radius: 100%;
  -webkit-border-radius: 100%;
  border-radius: 100%;
}
.chevron--left:before {
  content: '';
  position: relative;
  display: inline-block;
  border-style: solid;
  border-width: 4px 4px 0 0;
  border-color: #fff;
  width: 16px;
  height: 16px;
  -moz-transform-origin: 50% 50%;
  -ms-transform-origin: 50% 50%;
  -webkit-transform-origin: 50% 50%;
  transform-origin: 50% 50%;
  left: 3.3136px;
  top: 0;
  -moz-transform: rotate(-135deg);
  -ms-transform: rotate(-135deg);
  -webkit-transform: rotate(-135deg);
  transform: rotate(-135deg);
}

.container {
  display: inline-flex;
  padding: 20px;
}

#arrows{
    position: absolute;
    right: 0;
    width: auto;
    margin-top: 0%;
    margin-right: 1%;

        z-index: 99999;
}

.dropdownSvg svg{
    width: 35%;
    height: 5%;
}

.dropdownSvgSpan{
    position: absolute;
}

.modal-body-svg-div svg{
    width: 100%;
    height: auto;
    padding: 0;
    margin: 0;
}

.modal-body-svg-div svg image{
    width: 100%;
    height: auto;
    padding: 0;
    margin: 0;
}


.modal-body-svg-div{
          margin-right: 4%;
          margin-left: 4%;
       margin-top: 1%;
       margin-bottom: 1%;
       padding: 0%;
}

.fa-check{
    position: absolute;
    font-size: 2em;
    color: #50efac;
}

.modal-body-svg-selected{
    border-top: 3px solid #50EFAC;
}


.fa-user{
    font-size: 2em;
    position: absolute;
    top: 9%;
    left: 11%;
    color: white;
}

.fa-file-image-o{
    font-size: 1.7em;
    position: absolute;
    top: 9.2%;
    left: 16%;
    color: white;
}



.tippy-tooltip {
    text-align: left;
    background: white;
    color: black;
}

.tippy-tooltip [x-arrow]{
    border-color: transparent transparent white white !important;
    background: white;
}



</style>


</head>
<body>



 <!-- <div id=arrows >
                      <div class="container" style="display: inline-block !important; width: auto;">

                         <div >
                            <div class="col-md-4" style="width: auto !important; padding: 0;">
                                <i data-toggle="modal" data-target="#setDirectionLeft" id="leftArrow" class="chevron chevron--left" style="margin-top: 65%;     cursor: pointer;"></i>
                            </div>
                            <div class="col-md-4" style="width: auto !important; padding: 0;">
                                <i data-toggle="modal" data-target="#setDirectionUp" id="upArrow"  class="chevron chevron--up" style="    cursor: pointer;"></i>
                            <br>
                                <i data-toggle="modal" data-target="#setDirectionDown" id="downArrow"  class="chevron chevron--down" style="    cursor: pointer;"></i>
                            </div>
                            <div class="col-md-4" style="width: auto !important; padding: 0;">
                                <i data-toggle="modal" data-target="#setDirectionRight" id="rightArrow"  class="chevron chevron--right" style="margin-top: 65%;     cursor: pointer;"></i>
                            </div>
                         </div>
                    </div>
                </div>
-->

<div class="row" style="margin-right: 0;">
	<div class="col-md-7">





	<?php
		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
		} 

        $brokerId = 0;
        $left = 0;
        $right = 0;
        $up = 0;
        $down = 0;

		$sql = "SELECT * FROM images where id = " . $_GET['imageId'];
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
			// output data of each row
			while($row = $result->fetch_assoc()) {

                $brokerId = $row['broker_id'];
                $left = $row['image_left'];
                $right = $row['image_right'];
                $up = $row['image_up'];
                $down = $row['image_down'];

				echo $row['image_content'];
			}
		} 
		//$conn->close();

	?>
	</div>
	<div class="col-md-5">




<i class="fa fa-user" data-toggle="modal" data-target="#editBroker" style="cursor: pointer;" aria-hidden="true"></i>
<i class="fa fa-file-image-o"  data-toggle="modal" data-target="#editImageName" style="cursor: pointer;" aria-hidden="true"></i>
 <div id="editBroker" class="modal fade" role="dialog">
      <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Associate a Broker to this image</h4>
          </div>
          <div class="modal-body">
              <div class="row" style="text-align:center;">
              Select Broker:
              <select id="brokerSelect">
              <option  value="0">NO BROKER</option>
              <?php
                             $sql = "SELECT * FROM broker";
                             		$result = $conn->query($sql);
                             		if ($result->num_rows > 0) {
                             			while($row = $result->fetch_assoc()) {
                             			     echo '<option  value="'.$row['id'].'">'.$row['email'].'</option>';
                                    	}
                                  }
              ?>
              </select>
              </div>
          </div>
          <div class="modal-footer" style="text-align: center;">
            <button type="button" onclick="saveBroker();" class="btn btn-info" data-dismiss="modal">Save</button>
          </div>
        </div>
      </div>
    </div>




<div id="editImageName" class="modal fade" role="dialog">
      <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Set Image Name or ID</h4>
          </div>
          <div class="modal-body">
              <div class="row" style="text-align:center;">
              Enter Name:

              <?php
                             $sql = "SELECT * FROM images where id=" . $_GET['imageId'];
                             		$result = $conn->query($sql);
                             		if ($result->num_rows > 0) {
                             			while($row = $result->fetch_assoc()) {
                             			     echo '<input id=imageName type=text value="'.$row['alias_name'].'"></input>';
                                    	}
                                  }
              ?>

              </div>
          </div>
          <div class="modal-footer" style="text-align: center;">
            <button type="button" onclick="saveImageName();" class="btn btn-info" data-dismiss="modal">Save</button>
          </div>
        </div>
      </div>
    </div>




















		<section>


<h1 style="font-size: 24px;">List of all the objects</h1>





  <div class="tbl-header">
    <table cellpadding="0" cellspacing="0" border="0">
      <thead>
        <tr>
		  <th style="text-align: center;">Status</th>
          <th style="text-align: center;">Name</th>


          <th style="text-align: center;">Floor</th>
          <th style="text-align: center;">Size</th>
          <th style="text-align: center;">Rooms</th>
          <th style="text-align: center;">Fee</th>


          <th style="text-align: center;">Price</th>
        </tr>
      </thead>
    </table>
  </div>
  <div class="tbl-content" id="tableBody">
    <table cellpadding="0" cellspacing="0" border="0">
      <tbody >
        <?php 
			
			$sql = "SELECT * FROM path where imageId = " . $_GET['imageId'];
			$result = $conn->query($sql);
			if ($result->num_rows > 0) {
				// output data of each row
				while($row = $result->fetch_assoc()) {
					//style='background: linear-gradient(to right, #bf8383, #d01515);'
					echo "<tr id='row_".$row['pathId']."' > ";
						if($row['status'] == 'For Sale'){
							echo "
							<td style='text-align: center;'>
							<span class='status-blob status-blob-1'></span>
							</td>";
						}
						else if($row['status'] == 'Reserved'){
                            echo "
                            							<td style='text-align: center;'>
                            							<span class='status-blob status-blob-3'></span>
                            							</td>";
						}
						else{
							echo "
							<td style='text-align: center;'>
							<span class='status-blob status-blob-2'></span>
							</td>";
						}
					  echo "
					    <td style='text-align: center;'>".$row['name']."</td>

					  <td style='text-align: center;'>".$row['floor']."</td>
					  <td style='text-align: center;'>".$row['size']."</td>
					  <td style='text-align: center;'>".$row['rooms']."</td>
					  <td style='text-align: center;'>".$row['fee']."</td>



					  <td style='text-align: center;'>".$row['price']."</td>
					</tr>";
				}
			}
		
		?>
		
		
      
	  
	  </tbody>
    </table>
  </div>
  
    <?php 

			$sql = "SELECT * FROM path where imageId = " . $_GET['imageId'];
			$result = $conn->query($sql);
			if ($result->num_rows > 0) {
				while($row = $result->fetch_assoc()) {
					echo '
						<button style="display: none;" id="modal_button_'.$row['pathId'].'" type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#modal_'.$row['pathId'].'" >Open Modal</button>
					
							<div id="modal_'.$row['pathId'].'" class="modal fade" role="dialog">
							  <div class="modal-dialog">
								<div class="modal-content">
								  <div class="modal-header">
									<button type="button" class="close" data-dismiss="modal">&times;</button>
									<h4 class="modal-title">Edit Object Details</h4>
								  </div>
								  <div class="modal-body" style="text-align: center;">



								        <div class=row >
								            <div class=col-md-5 style="text-align: right;">Name: </div>
								            <div class=col-md-7 style="text-align: left;"><input style="margin-bottom: 1em;" type="text" value="'.$row['name'].'" id="name_'.$row['pathId'].'" name="fname"></div>
								        </div>

<div class=row>
								        <div class=col-md-5 style="text-align: right;"> Floor: </div>
								            <div class=col-md-7 style="text-align: left;"><input style="margin-bottom: 1em;" type="text" value="'.$row['floor'].'" id="floor_'.$row['pathId'].'" name="floor"></div>
								        </div>

                                         <div class=row>
								            <div class=col-md-5 style="text-align: right;">Size:  </div>
								            <div class=col-md-7 style="text-align: left;"><input style="margin-bottom: 1em;" type="text" value="'.$row['size'].'" id="size_'.$row['pathId'].'" name="size"></div>
								        </div>

								         <div class=row>
                                        								            <div style="text-align: right;" class=col-md-5>Room: </div>
                                        								            <div class=col-md-7 style="text-align: left;"> <input style="margin-bottom: 1em;" type="text" value="'.$row['rooms'].'" id="rooms_'.$row['pathId'].'" name="rooms"></div>
                                        								        </div>


                                    <div class=row>
                                                                            								            <div class=col-md-5 style="text-align: right;">Fee: </div>
                                                                            								            <div class=col-md-7 style="text-align: left;">
                                                                            								            <input style="margin-bottom: 1em;" type="text" value="'.$row['fee'].'" id="fee_'.$row['pathId'].'" name="fee"></div>
                                                                            								        </div>

                                             <div class=row>
                                            								            <div style="text-align: right;" class=col-md-5>Price:  </div>
                                            								            <div class=col-md-7 style="text-align: left;">
                                            								            <input type="text" style="margin-bottom: 1em;" value="'.$row['price'].'" id="price_'.$row['pathId'].'"id=price name="fname"></div>
                                            								        </div>

         <div class=row>
								            <div class=col-md-5 style="text-align: right;">URL when click:  </div>
								            <div class=col-md-7 style="text-align: left;"> <input type="text" style="margin-bottom: 1em;" value="'.$row['image_redirect_to'].'" id="image_redirect_to_'.$row['pathId'].'"	 name="image_redirect_to"></div>
								        </div>



									<input style="display:none;" type="text" id=id name="fname"><br>

                                    										 Status: <select  id="status_'.$row['pathId'].'">
                                    												 ';


                                    if($row['status'] == 'For Sale') echo ' <option selected value="For Sale" >For Sale</option>';
                                    else echo ' <option value="For Sale" >For Sale</option>';
									if($row['status'] == 'Sold') echo '<option selected value="Sold">Sold</option>';
                                    else echo '<option value="Sold">Sold</option>';
                                    if($row['status'] == 'Reserved') echo ' <option selected value="Reserved">Reserved</option>';
                                    else echo ' <option value="Reserved">Reserved</option>';





                                    												 echo '
                                    												</select>
                                    												<input type="text" style="display: none;" value="'.$row['imageId'].'"  id="imageId_'.$row['pathId'].'" name="fname">
								  </div>
								  <div class="modal-footer" style="text-align: center;">
									<button onClick="saveHouseData(\''.$row["pathId"].'\');"  id=save type="button" class="btn btn-default" data-dismiss="modal">Save</button>
								  </div>
								</div>

							  </div>
							</div>';
					
				}
			}

		?>
  <button style="display: none;" id="modal_button" type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#modal">Open Modal</button>
					
							<div id="modal" class="modal fade" role="dialog">
							  <div class="modal-dialog">
								<div class="modal-content">
								  <div class="modal-header">
									<button type="button" class="close" data-dismiss="modal">&times;</button>
									<h4 class="modal-title">Edit Object Details</h4>
								  </div>
								  <div class="modal-body">
									<div id="form" style="text-align: center;" >
											<input style="display:none;" type="text" id=id name="fname"><br>
										 Name: <input type="text"  id=name name="fname"><br>
										 <br>


										 Floor: <input type="text" id=floor name="floor"><br>
                                         <br>
                                         Size: <input type="text" id=size name="size"><br>
                                                                                  <br>
                                         Room: <input type="text" id=rooms name="rooms"><br>
                                                                                  <br>
                                         Fee: <input type="text" id=fee name="fee"><br>
                                                                                   <br>


										 Price: <input type="text" id=price name="fname"><br>
										 <br>
										 Status: <select id=status>
											</select>
												<input type="text" style="display: none;" id=imageId name="fname">
									</div>
								  </div>
								  <div class="modal-footer" style="text-align: center;">
									<button onClick="saveHouseData('.$row["pathId"].');"  id=save type="button" class="btn btn-default" data-dismiss="modal">Save</button>
								  </div>
								</div>

							  </div>
							</div>


  <div id="setDirectionRight" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Link image of this direction</h4>
        </div>
        <div class="modal-body">
            <div class="row">
            <?php
                           $sql = "SELECT * FROM images";
                           		$result = $conn->query($sql);
                           		if ($result->num_rows > 0) {
                           			while($row = $result->fetch_assoc()) {
                           			      echo "<div class='col-md-3 modal-body-svg-div' id=image_".$row['id']." onclick=\"selectImage( ".$row['id'].", 'right')\">";
                           			      if($right == $row['id']){
                                            echo "<i style='display:block;' id=right_image_selected_".$row['id']." class='fa fa-check'></i>";
                           			      }
                           			      else{
                           			        echo "<i style='display:none;' id=right_image_selected_".$row['id']." class='fa fa-check'></i>";
                                          }
                                          echo $row["image_content"];
                                          echo "</div>";
                                  	}
                                }
            ?>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>



    <div id="setDirectionLeft" class="modal fade" role="dialog">
      <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Link image of this direction</h4>
          </div>
          <div class="modal-body">
              <div class="row">
              <?php
                             $sql = "SELECT * FROM images";
                             		$result = $conn->query($sql);
                             		if ($result->num_rows > 0) {
                             			while($row = $result->fetch_assoc()) {
                             			      echo "<div class='col-md-3 modal-body-svg-div' id=image_".$row['id']." onclick=\"selectImage( ".$row['id'].",'left')\">";

                             			            if($left == $row['id']){
                                                                                                echo "<i style='display:block;' id=left_image_selected_".$row['id']." class='fa fa-check'></i>";
                                                                               			      }
                                                                               			      else{
                                                                               			        echo "<i style='display:none;' id=left_image_selected_".$row['id']." class='fa fa-check'></i>";
                                                                                              }
                                            echo $row["image_content"];
                                            echo "</div>";
                                    	}
                                  }
              ?>
              </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>


  <div id="setDirectionUp" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Link image of this direction</h4>
        </div>
        <div class="modal-body">
            <div class="row">
            <?php
                           $sql = "SELECT * FROM images";
                           		$result = $conn->query($sql);
                           		if ($result->num_rows > 0) {
                           			while($row = $result->fetch_assoc()) {
                           			      echo "<div class='col-md-3 modal-body-svg-div' id=image_".$row['id']." onclick=\"selectImage( ".$row['id'].",'up')\">";

if($up == $row['id']){
                                                                                                echo "<i style='display:block;' id=up_image_selected_".$row['id']." class='fa fa-check'></i>";
                                                                               			      }
                                                                               			      else{
                                                                               			        echo "<i style='display:none;' id=up_image_selected_".$row['id']." class='fa fa-check'></i>";
                                                                                              }


                                          echo $row["image_content"];
                                          echo "</div>";
                                  	}
                                }
            ?>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>



    <div id="setDirectionDown" class="modal fade" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Link image of this direction</h4>
          </div>
          <div class="modal-body">
              <div class="row">
              <?php
                             $sql = "SELECT * FROM images";
                             		$result = $conn->query($sql);
                             		if ($result->num_rows > 0) {
                             			while($row = $result->fetch_assoc()) {
                             			      echo "<div class='col-md-3 modal-body-svg-div' id=image_".$row['id']." onclick=\"selectImage(".$row['id'].",'down')\">";
                                                if($down == $row['id']){
                                                                                                echo "<i style='display:block;' id=down_image_selected_".$row['id']." class='fa fa-check'></i>";
                                                                               			      }
                                                                               			      else{
                                                                               			        echo "<i style='display:none;' id=down_image_selected_".$row['id']." class='fa fa-check'></i>";
                                                                                              }
                                            echo $row["image_content"];
                                            echo "</div>";
                                    	}
                                  }
              ?>
              </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>


<input type="text" value=<?php echo $right; ?> name="a" id="selectedImageRight" style="display: none;"></input>
<input type="text" value=<?php echo $left; ?> name="b" id="selectedImageLeft" style="display: none;"></input>
<input type="text" value=<?php echo $up; ?> name="c" id="selectedImageTop" style="display: none;"></input>
<input type="text" value=<?php echo $down; ?> name="d" id="selectedImageBottom" style="display: none;"></input>




</section>


<!-- follow me template -->
	</div>
</div>


<div id="form" style="margin-left: 40px; display: none;" >
	<h1> ADMIN SECTION </h1>
<br>		
		<input style="display:none;" type="text" id=id name="fname"><br>
	 Name: <input type="text" id=name name="fname"><br>
	 <br>
	 Price: <input type="text" id=price name="fname"><br>
	 <br>
	 Status: <select id=status>
			  <option value="For Sale" >For Sale</option>
			  <option value="Sold">Sold</option>
			</select>
			<button id=save type="button">Save</button>
</div>

	
	
</body>

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/tippy.js/0.3.0/tippy.js"></script>
 <script src="./../assets/js/selectpicker.js"></script>
<script>

$(document).ready(function(){
$('#brokerSelect').val(<?php echo $brokerId; ?>).trigger('change');
<?php 

	$sql = "SELECT * FROM path where imageId = " . $_GET['imageId'];
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
		echo "
        				$('#".$row["pathId"]."').attr('title', \"<b>Name</b>  \" + '".$row["name"]."'

        				 + \"<br><b>Floor</b> \" + '".$row["floor"]."'
        				 + \"<br><b>Size</b> \" + '".$row["size"]."'
        				 + \"<br><b>Rooms</b> \" + '".$row["rooms"]."'
        				 + \"<br><b>Fee</b> \" + '".$row["fee"]."'

        				 + \"<br><b>Price</b> \" + '".$row["price"]."'  + \"<br><b>Status</b>: \" +  '".$row["status"]."' );

			
				
				
				$('#".$row["pathId"]."' ).mouseenter(function() {
					if('".$row["status"]."' == 'For Sale'){
						$('#".$row["pathId"]."').css('fill','rgb(66, 145, 73)');
						$('#row_".$row["pathId"]."').css('background','linear-gradient(to right, rgb(131, 212, 121), rgb(51, 154, 25))');
					}
					else if('".$row["status"]."' == 'Reserved'){
                    	$('#".$row["pathId"]."').css('fill','#FFC107');
                    	$('#row_".$row["pathId"]."').css('background','linear-gradient(to right, rgba(255, 235, 59, 0.65), #ffeb3b)');
                    }
					else{
						$('#".$row["pathId"]."').css('fill','#e43535');
						$('#row_".$row["pathId"]."').css('background','linear-gradient(to right, #bf8383, #d01515)');
					}
					$('#".$row["pathId"]."').css('opacity','0.5');
					$('#".$row["pathId"]."').css('fill-opacity','1');
				
						var \$container = $('#tableBody'),
							\$scrollTo = $('#row_".$row['pathId']."');
						
						\$container.animate({
							scrollTop: \$scrollTo.offset().top - \$container.offset().top + \$container.scrollTop()
						})
				
					
					
				});
				
				$( '#".$row["pathId"]."' ).mouseleave(function() {
						$('#".$row["pathId"]."').css('opacity','0');
						$('#".$row["pathId"]."').css('fill-opacity','0');
						$('#row_".$row["pathId"]."').css('background','inherit');
				});
			
				$( '#".$row["pathId"]."' ).click(function() {		
					$('#id').val('".$row["pathId"]."');
					$('#imageId').val('".$row["imageId"]."');
					$('#name').val('".$row["name"]."');
					$('#price').val('".$row["price"]."');
					$('#status').val('".$row["status"]."');
					
					$('#modal_button_".$row["pathId"]."').click();
				});
				
				
				$('#row_".$row["pathId"]."' ).mouseenter(function() {
					if('".$row["status"]."' == 'For Sale'){
						$('#".$row["pathId"]."').css('fill','rgb(66, 145, 73)');
						$('#row_".$row["pathId"]."').css('background','linear-gradient(to right, rgb(131, 212, 121), rgb(51, 154, 25))');
					}
					else if('".$row["status"]."' == 'Reserved'){
                        $('#".$row["pathId"]."').css('fill','#FFC107');
                        $('#row_".$row["pathId"]."').css('background','linear-gradient(to right,  rgba(255, 235, 59, 0.65), #ffeb3b)');
                    }
                    else{
						$('#".$row["pathId"]."').css('fill','#e43535');
						$('#row_".$row["pathId"]."').css('background','linear-gradient(to right, #bf8383, #d01515)');
					}
					$('#".$row["pathId"]."').css('opacity','0.5');
					$('#".$row["pathId"]."').css('fill-opacity','1');
				});
				
				$( '#row_".$row["pathId"]."' ).mouseleave(function() {
						$('#".$row["pathId"]."').css('opacity','0');
						$('#".$row["pathId"]."').css('fill-opacity','0');
						$('#row_".$row["pathId"]."').css('background','inherit');
				});
				
				$( '#row_".$row["pathId"]."' ).click(function() {		
					$('#id').val('".$row["pathId"]."');
					$('#imageId').val('".$row["imageId"]."');
					$('#name').val('".$row["name"]."');
					$('#price').val('".$row["price"]."');
					$('#status').val('".$row["status"]."');
					
					$('#modal_button_".$row["pathId"]."').click();
				});
				
			";
		}
	} 

?>
	new Tippy('path',{
					position:'bottom',
					animation:'scale',
					arrow:'true'
				});
});




$(window).on("load resize ", function() {
  var scrollWidth = $('.tbl-content').width() - $('.tbl-content table').width();
  $('.tbl-header').css({'padding-right':scrollWidth});
}).resize();

$(".modal-body-svg-div svg").attr("viewBox" , "0 0 100% auto");

function selectImage(imageId, direction){



    if($("#"+direction+"_image_selected_"+imageId).css("display") == "none"){
        $('.fa-check').css("display","none");
        $("#"+direction+"_image_selected_"+imageId).css("display", "block");
          if(direction == "down"){
                $("#selectedImageBottom").attr("value", imageId);
            }
            else if(direction == "up"){
                   $("#selectedImageTop").attr("value", imageId);
               }
            else if(direction == "left"){
                    $("#selectedImageLeft").attr("value", imageId);
                }
            else if(direction == "right"){
                    $("#selectedImageRight").attr("value", imageId);
                }


                 $.ajax({
                                url: "./../api/admin/saveImageDirection.php",
                                type: "POST",
                                data: {
                					right: $('#selectedImageRight').val(),
                					left: $('#selectedImageLeft').val(),
                					up: $('#selectedImageTop').val(),
                					down: $('#selectedImageBottom').val(),
                					id: <?php echo $_GET['imageId']; ?>
                                },
                                success: function (data) {
                                    if (data) {
                                        if(data == "1"){
                							console.log("done")
                						}
                						else{
                							console.log(data);
                						}
                                    }
                                },
                                error: function (xhr, status, error) {
                                    var err = eval("(" + xhr.responseText + ")");
                                    alert(err.Message);
                                }
                            });


    }
    else{
        $("#"+direction+"_image_selected_"+imageId).css("display", "none");
          if(direction == "down"){
                $("#selectedImageBottom").attr("value", 0);
            }
            else if(direction == "up"){
                   $("#selectedImageTop").attr("value", 0);
               }
            else if(direction == "left"){
                    $("#selectedImageLeft").attr("value", 0);
                }
            else if(direction == "right"){
                    $("#selectedImageRight").attr("value", 0);
                }


                 $.ajax({
                                                url: "./../api/admin/saveImageDirection.php",
                                                type: "POST",
                                                data: {
                                					right: $('#selectedImageRight').val(),
                                					left: $('#selectedImageLeft').val(),
                                					up: $('#selectedImageTop').val(),
                                					down: $('#selectedImageBottom').val(),
                                					id: <?php echo $_GET['imageId']; ?>
                                                },
                                                success: function (data) {
                                                    if (data) {
                                                        if(data == "1"){
                                							console.log("done")
                                						}
                                						else{
                                							console.log(data);
                                						}
                                                    }
                                                },
                                                error: function (xhr, status, error) {
                                                    var err = eval("(" + xhr.responseText + ")");
                                                    alert(err.Message);
                                                }
                                            });
    }

    console.log(direction);


    console.log(imageId);
}



	function saveBroker(){
		 $.ajax({
                url: "./../api/admin/saveBroker.php",
                type: "POST",
                data: {
					imageId: <?php echo $_GET['imageId']; ?>,
					brokerId: $('#brokerSelect').val()
                },
                success: function (data) {
                    if (data) {
                    console.log(data);
                        if(data == "1"){
							//window.location.reload();
						}
						else{
							console.log(data);
						}
                    }
                },
                error: function (xhr, status, error) {
                    var err = eval("(" + xhr.responseText + ")");
                    alert(err.Message);
                }
            });
	}



</script>
 <script>
 	function saveHouseData(id){
 		 $.ajax({
                 url: "./../api/admin/saveHouseData.php",
                 type: "POST",
                 data: {
 					pathId: id,
 					imageId: $('#imageId_'+id).val(),
                     name: $('#name_'+id).val(),

                     floor: $('#floor_'+id).val(),
                     size: $('#size_'+id).val(),
                     rooms: $('#rooms_'+id).val(),
                     fee: $('#fee_'+id).val(),

                     price: $('#price_'+id).val(),
                     status: $('#status_'+id).val(),
                     image_redirect_to: $('#image_redirect_to_'+id).val()
                 },
                 success: function (data) {
                     if (data) {
                         if(data == "1"){
 							window.location.reload();
 						}
 						else{
 							console.log(data);
 						}
                     }
                 },
                 error: function (xhr, status, error) {
                     var err = eval("(" + xhr.responseText + ")");
                     alert(err.Message);
                 }
             });
 	}




 function saveImageName(){
 		 $.ajax({
                 url: "./../api/admin/saveImageName.php",
                 type: "POST",
                 data: {
 					imageId: <?php echo $_GET['imageId']; ?>,
 					imageName: $('#imageName').val()
                 },
                 success: function (data) {
                     if (data) {
                     console.log(data);
                         if(data == "1"){
 							//window.location.reload();
 						}
 						else{
 							console.log(data);
 						}
                     }
                 },
                 error: function (xhr, status, error) {
                     var err = eval("(" + xhr.responseText + ")");
                     alert(err.Message);
                 }
             });
 	}








 </script>
  
</html>
