<?php 
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "realstate";
?>

<html>
<head>
<link type="text/css" rel="stylesheet" href="./assets/js/jquery.qtip.css" />
<link type="text/css" rel="stylesheet" href="./assets/styles/animate.css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tippy.js/0.3.0/tippy.css">

  
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

}

svg image{

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
  color: #black;
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
  color: #black;
  text-transform: uppercase;
}
td{
  padding: 15px;
  text-align: left;
  vertical-align:middle;
  font-weight: 300;
  font-size: 12px;
  color: #black;
  border-bottom: solid 1px rgba(255,255,255,0.1);
}


/* demo styles */

@import url(https://fonts.googleapis.com/css?family=Roboto:400,500,300,700);
body{
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
  color: #black;
}
.made-with-love i {
  font-style: normal;
  color: #F50057;
  font-size: 14px;
  position: relative;
  top: 2px;
}
.made-with-love a {
  color: #black;
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

#sidebar{
    position: absolute;
    top: 0;
    margin: 0;
    height: 100vh;
    width: 35%;
    padding: 0;
        background: whitesmoke;
        opacity: 0.9;
        display: none;

}

#topBar{
        width: 100%;
        background-color: rgba(0,0,0,0.6);
        top: 0;
        position: absolute;
        height: 6%;

        text-align: center;
        padding-top: 0.2%;

}



.cmn-toggle {
  position: absolute;
  margin-left: -9999px;
  visibility: hidden;
}

.cmn-toggle + label {
  display: block;
  position: relative;
  cursor: pointer;
  outline: none;
  user-select: none;
}

input.cmn-toggle-round-flat + label {
  /* width = 2*height or 2*border-radius */
  padding: 2px;
    width: 100px;
    height: 35px;
  border: 3px solid #dddddd;
  border-radius: 60px;
  transition: border-color 0.4s;
}

input.cmn-toggle-round-flat + label:before,
input.cmn-toggle-round-flat + label:after {
  display: block;
  position: absolute;
  content: "";
}

input.cmn-toggle-round-flat + label:after {
  /* width = 2*border-radius */
  top: 4px;
  left: 4px;
  bottom: 4px;
  width: 40px;
  background-color: #dddddd;
  border-radius: 52px;
  transition: margin 0.4s, background 0.4s;
}

input.cmn-toggle-round-flat:checked + label {
  border-color: #8ce196;
}

input.cmn-toggle-round-flat:checked + label:after {
  /* margin-left = border-radius from 'input.cmn-toggle-round-flat + label' */
     margin-left: 40px;
  background-color: #8ce196;
}

.switch{
    position: absolute;
    bottom: 1%;
    right: 3%;
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
  width: 50px;
  height: 50px;
  border: 2px #000 solid;
  -moz-border-radius: 100%;
  -webkit-border-radius: 100%;
  border-radius: 100%;
}
.chevron--down:before {
  content: '';
  position: relative;
  display: inline-block;
  border-style: solid;
  border-width: 4px 4px 0 0;
  border-color: #000;
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
  width: 50px;
  height: 50px;
  border: 2px #000 solid;
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
  border-color: #000;
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
  width: 50px;
  height: 50px;
  border: 2px #000 solid;
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
  border-color: #000;
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
  width: 50px;
  height: 50px;
  border: 2px #000 solid;
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
  border-color: #000;
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
    width: 17%;
    margin-top: 1%;
    margin-right: 1%;
        opacity: 0.5;
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


.modal-dialog{
    width: 40%;
        margin-top: 30vh;
        opacity: 0.85;
}










</style>


</head>
<body>

<?php

		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
		}

        $left = 0;
        $right = 0;
        $up = 0;
        $down = 0;
		$sql = 'select * from images where id= ' . $_GET['imageId'];
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
        	while($row = $result->fetch_assoc()) {
                $right = $row['image_right'];
                $left = $row['image_left'];
                $up = $row['image_up'];
                $down = $row['image_down'];

        	}
        }


    ?>

<!--
<div id=arrows >
    <div class="container" style="display: inline-block !important; width: auto;">
     <div >
        <div class="col-md-4" style="width: auto !important; padding: 0;">
            <a
                <?php
                    if($left != 0)
                        echo 'href="./image-detail.php?imageId=' . $left  . '"';

                ?>
            ><i id="leftArrow" class="chevron chevron--left" <?php if($left != 0) echo 'style="margin-top: 65%; cursor: pointer;"'; else echo 'style="margin-top: 65%; opacity: 0.4; "';?> ></i> </a>
        </div>
        <div class="col-md-4" style="width: auto !important; padding: 0;">
           <a <?php if($up != 0) echo 'href="./image-detail.php?imageId=' . $up  . '"';?>> <i  id="upArrow"  class="chevron chevron--up" <?php if($up == 0) echo 'style=" opacity: 0.4; "';?> ></i></a>
        <br>
           <a <?php if($down != 0)  echo 'href="./image-detail.php?imageId=' . $down  . '"';?>> <i  id="downArrow"  class="chevron chevron--down" <?php if($down == 0) echo 'style=" opacity: 0.4; "';?> ></i></a>
        </div>
        <div class="col-md-4" style="width: auto !important; padding: 0;">
           <a <?php if($right != 0) echo 'href="./image-detail.php?imageId=' . $right  . '"'; ?>> <i id="rightArrow"  class="chevron chevron--right" <?php if($right != 0) echo 'style="margin-top: 65%; cursor: pointer;"'; else echo 'style="margin-top: 65%; opacity: 0.4; "';?> ></i></a>
        </div>
     </div>
    </div>
</div>
-->


<div id=topBar>
    <span id="toggleSidebar" style="    color: white; cursor: pointer; margin-top: 0.7%;display: inline-block;">Apartments list</span>
    <span data-toggle="modal" data-target="#myModal" style="    color: white; cursor: pointer; margin-top: 0.7%;margin-left: 7%;display: inline-block;">Filter</span>
</div>
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-body">
        <div style = "    text-align: center;
                          font-size: 1.3em;" class=row>
            <span> Status </span>
        </div>
        <div class=row style="    margin-top: 3%;">
            <div class="col-md-4"> <input type="radio" name="status" value="For Sale"> For Sale<br>
                                  </div>
            <div class="col-md-4">  <input type="radio" name="status" value="Reserved"> Reserved<br>
                                                                      </div>
            <div class="col-md-4"><input type="radio" name="status" value="Sold"> Sold</div>
        </div>

          <div style = "    text-align: center;     margin-top: 5%;
                                  font-size: 1.3em;" class=row>
                    <span> Room </span>
                </div>
                <div class=row style="    margin-top: 3%;">
                    <div class="col-md-4"> <input type="radio" name="rooms" value="3"> 3 rooms<br>
                                          </div>
                    <div class="col-md-4">  <input type="radio" name="rooms" value="4"> 4 rooms<br>
                                                                              </div>
                    <div class="col-md-4"><input type="radio" name="rooms" value="5"> 5 rooms</div>
                </div>

        <div class=row style="margin-top: 7%;">
            <div class="col-md-6" style="    text-align: right;"> <button type="button" onclick="filter()" >Show status</button> </div>
            <div class="col-md-6" > <button type="button" onclick="reset()">Reset</button> </div>
        </div>

      </div>
    </div>

  </div>
</div>



   <?php



        $countForSale = 0;
        $countReserved = 0;
        $countSold = 0;
		$sql = 'select * from ( SELECT count(status) as forSale FROM path where imageId = '.$_GET['imageId'].' and status="For Sale" ) as table1, ( SELECT count(status) as reserved FROM path where imageId = '.$_GET['imageId'].' and status="Reserved" ) as table2, ( SELECT count(status) as sold FROM path where imageId = '.$_GET['imageId'].' and status="Sold" ) as table3';
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
        	while($row = $result->fetch_assoc()) {
                $countForSale = $row['forSale'];
                $countReserved = $row['reserved'];
                $countSold = $row['sold'];
        	}
        }


    ?>


<div id=sidebar  class="animated">

    <div class="row" style="margin-top: 7%; margin-bottom: 7%; text-align: center;">
        <div class="col-md-4" style="line-height: 2em;">
            <div class="row">
                <div class="col-md-12" style="font-weight: 700;">
                    For Sale
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                   <?php echo $countForSale ?>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <span class='status-blob status-blob-1'></span>
                </div>
            </div>
        </div>
        <div class="col-md-4" style="line-height: 2em;">
            <div class="row">
               <div class="col-md-12" style="font-weight: 700;">
                    Reserved
               </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <?php echo $countReserved ?>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <span class='status-blob status-blob-3'></span>
                </div>
            </div>
        </div>
        <div class="col-md-4" style="line-height: 2em;">
             <div class="row">
                <div class="col-md-12" style="font-weight: 700;">
                    Sold
                </div>
             </div>
            <div class="row">
                <div class="col-md-12">
                    <?php echo $countSold ?>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <span class='status-blob status-blob-2'></span>
                </div>
            </div>
        </div>
    </div>






  <div class="tbl-header">
    <table style="border: 1px solid wheat;" cellpadding="0" cellspacing="0" border="0">
      <thead>
        <tr>

                    <th   style="text-align: center; width:30%; font-weight: 700;">Name</th>


                    <th style="text-align: center; font-weight: 700;">Floor</th>
                    <th style="text-align: center; font-weight: 700;">Size</th>
                    <th style="text-align: center; font-weight: 700;">Rooms</th>
                    <th style="text-align: center; font-weight: 700;">Fee</th>


                    <th style="text-align: center; font-weight: 700;">Price</th>
        </tr>
      </thead>
    </table>
  </div>
  <div class="tbl-content" id="tableBody">
    <table style="border: 1px solid wheat;" cellpadding="0" cellspacing="0" border="0">
      <tbody >
        <?php

			$sql = "SELECT * FROM path where imageId = " . $_GET['imageId'];
			$result = $conn->query($sql);
			if ($result->num_rows > 0) {
				while($row = $result->fetch_assoc()) {
					echo "<tr  id='row_".$row['pathId']."' > ";
                    						if($row['status'] == 'For Sale'){
                    							echo "
                    							<td style='width:30%;' style='text-align: center;'>
                    							<span class='status-blob status-blob-1'></span> ".$row['name']."
                    							</td>";
                    						}
                    						else if($row['status'] == 'Reserved'){
                                                echo "
                                                							<td style='width:30%;' style='text-align: center;'>
                                                							<span class='status-blob status-blob-3'></span> ".$row['name']."
                                                							</td>";
                    						}
                    						else{
                    							echo "
                    							<td style='width:30%;' style='text-align: center;'>
                    							<span class='status-blob status-blob-2'></span>".$row['name']."
                    							</td>";
                    						}
                    					  echo "

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


</div>




<div class="row" style="margin-right: 0;">

	<?php

		$sql = "SELECT * FROM images where id = " . $_GET['imageId'];
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
			// output data of each row
			while($row = $result->fetch_assoc()) {
				echo $row['image_content'];
			}
		} 
		//$conn->close();

	?>
</div>



</div>


<div class="switch" style="text-align: center;">
<span style="    opacity: 0.7;
                 font-size: 1.2em;">Status</span>
  <input id="cmn-toggle-4" class="cmn-toggle cmn-toggle-round-flat" type="checkbox">

  <label for="cmn-toggle-4"></label>
</div>

	
	
</body>

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/tippy.js/0.3.0/tippy.js"></script>
<script>
function switchOn(){
    <?php
        $sql = "SELECT * FROM path where imageId = " . $_GET['imageId'];
    	$result = $conn->query($sql);
    	if ($result->num_rows > 0) {
    		while($row = $result->fetch_assoc()) {
    		    	if($row["status"] == 'For Sale'){
                            echo "$('#".$row["pathId"]."').css('opacity','1');";
                            echo "$('#".$row["pathId"]."').css('fill','rgb(66, 145, 73,0.6)');";
                        }
                        else if($row["status"] == 'Reserved'){
                            echo "$('#".$row["pathId"]."').css('opacity','1');";
                            echo "$('#".$row["pathId"]."').css('fill','rgb(255, 193, 7,0.6)');";
                        }
                        else{
                            echo "$('#".$row["pathId"]."').css('opacity','1');";
                            echo "$('#".$row["pathId"]."').css('fill','rgb(228,53,53,0.6)');";
                        }
    		}
    	}
    ?>
}

function switchOff(){
    <?php
        $sql = "SELECT * FROM path where imageId = " . $_GET['imageId'];
    	$result = $conn->query($sql);
    	if ($result->num_rows > 0) {
    		while($row = $result->fetch_assoc()) {
    		    	if($row["status"] == 'For Sale' ){
                            echo "$('#".$row["pathId"]."').css('opacity','0');";
                            echo "$('#".$row["pathId"]."').css('fill','rgb(66, 145, 73,0.6)');";
                        }
                        else if($row["status"] == 'Reserved'){
                            echo "$('#".$row["pathId"]."').css('opacity','0');";
                            echo "$('#".$row["pathId"]."').css('fill','rgb(255, 193, 7,0.6)');";
                        }
                        else if($row["status"] == 'Sold' ){
                            echo "$('#".$row["pathId"]."').css('opacity','0');";
                            echo "$('#".$row["pathId"]."').css('fill','rgb(228,53,53,0.6)');";
                        }


                    if(isset($_GET['rooms']) && isset($_GET['status'])){
    		    	    if($row["status"] == 'For Sale' && "'". $row["status"] ."'" == "'". $_GET['status'] ."'" && "'". $row['rooms'] ."'" == "'".$_GET['rooms'] ."'"){
                            echo "$('#".$row["pathId"]."').css('opacity','1');";
                            echo "$('#".$row["pathId"]."').css('fill','rgb(66, 145, 73,0.6)');";
                        }
                        else if($row["status"] == 'Reserved' && "'". $row["status"] ."'" == "'". $_GET['status'] ."'" && "'". $row['rooms'] ."'"== "'".$_GET['rooms'] ."'"){
                            echo "$('#".$row["pathId"]."').css('opacity','1');";
                            echo "$('#".$row["pathId"]."').css('fill','rgb(255, 193, 7,0.6)');";
                        }
                        else if($row["status"] == 'Sold' && "'". $row["status"] ."'" == "'". $_GET['status'] ."'" && "'". $row['rooms'] ."'" == "'".$_GET['rooms'] ."'"){
                            echo "$('#".$row["pathId"]."').css('opacity','1');";
                            echo "$('#".$row["pathId"]."').css('fill','rgb(228,53,53,0.6)');";
                        }
                    }
                    else if(isset($_GET['rooms']) && !isset($_GET['status'])){
    		    	    if( $row["status"] == 'For Sale' && "'". $row['rooms'] ."'" == "'".$_GET['rooms'] ."'"){
                            echo "$('#".$row["pathId"]."').css('opacity','1');";
                            echo "$('#".$row["pathId"]."').css('fill','rgb(66, 145, 73,0.6)');";
                        }
                        else if($row["status"] == 'Reserved' && "'". $row['rooms'] ."'"== "'".$_GET['rooms'] ."'"){
                            echo "$('#".$row["pathId"]."').css('opacity','1');";
                            echo "$('#".$row["pathId"]."').css('fill','rgb(255, 193, 7,0.6)');";
                        }
                        else if($row["status"] == 'Sold' && "'". $row['rooms'] ."'" == "'".$_GET['rooms'] ."'"){
                            echo "$('#".$row["pathId"]."').css('opacity','1');";
                            echo "$('#".$row["pathId"]."').css('fill','rgb(228,53,53,0.6)');";
                        }
                    }
                    else if(isset($_GET['status']) && !isset($_GET['rooms'])){
    		    	                          if($row["status"] == 'For Sale' && "'". $row["status"] ."'" == "'". $_GET['status'] ."'"){
                                                  echo "$('#".$row["pathId"]."').css('opacity','1');";
                                                  echo "$('#".$row["pathId"]."').css('fill','rgb(66, 145, 73,0.6)');";
                                              }
                                              else if($row["status"] == 'Reserved' && "'". $row["status"] ."'" == "'". $_GET['status'] ."'" ){
                                                  echo "$('#".$row["pathId"]."').css('opacity','1');";
                                                  echo "$('#".$row["pathId"]."').css('fill','rgb(255, 193, 7,0.6)');";
                                              }
                                              else if($row["status"] == 'Sold' && "'". $row["status"] ."'" == "'". $_GET['status'] ."'" ){
                                                  echo "$('#".$row["pathId"]."').css('opacity','1');";
                                                  echo "$('#".$row["pathId"]."').css('fill','rgb(228,53,53,0.6)');";
                                              }
                    }

    		}
    	}
    ?>
}


$(document).ready(function(){

<?php 




	$sql = "SELECT * FROM path where imageId = " . $_GET['imageId'];
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {



            echo "$('#".$row["pathId"]."' ).click(function() {
                if((".strlen($row["image_redirect_to"]).") > 0){
                    window.open('".$row["image_redirect_to"]."', '_blank');
                }
            });";

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
                                            $('#row_".$row["pathId"]."').css('background','linear-gradient(to right,  rgba(255, 235, 59, 0.65), #ffeb3b)');
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




				$( '#".$row["pathId"]."' ).mouseleave(function mosLev() {
                                if(!($('#cmn-toggle-4').is(':checked'))){
                                				            $('#".$row["pathId"]."').css('opacity','0');
                                				        }
				    $('#row_".$row["pathId"]."').css('background','inherit');
				});



				$( '#".$row["pathId"]."' ).click(function() {		
					$('#id').val('".$row["pathId"]."');
					$('#imageId').val('".$row["imageId"]."');
					$('#name').val('".$row["name"]."');
					$('#price').val('".$row["price"]."');
					$('#status').val('".$row["status"]."');
					
					$('#modal_button').click();
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

				          if(!( ". strlen(isset($_GET['status'])) ." == 1   && ". strlen(isset($_GET['rooms'])) ." == 1 ) ){

				                 if(!($('#cmn-toggle-4').is(':checked'))){
                                                        				            $('#".$row["pathId"]."').css('opacity','0');
                                                                                    //$('#".$row["pathId"]."').css('fill-opacity','0');
                                                        				        }


				           }




						$('#row_".$row["pathId"]."').css('background','inherit');
				});
				
				$( '#row_".$row["pathId"]."' ).click(function() {		
					$('#id').val('".$row["pathId"]."');
					$('#imageId').val('".$row["imageId"]."');
					$('#name').val('".$row["name"]."');
					$('#price').val('".$row["price"]."');
					$('#status').val('".$row["status"]."');
					$('#modal_button').click();
				});
				
			";
		}
	} 


if(isset($_GET['status']) && isset($_GET['rooms']) ){

    $sql = "SELECT * FROM path where imageId = " . $_GET['imageId'] . " and status = '" .$_GET['status'] ."' and rooms='" . $_GET['rooms'] . "'";


	$result = $conn->query($sql);

    	if ($result->num_rows > 0) {

    		while($row = $result->fetch_assoc()) {
                echo "if('".$row["status"]."' == 'For Sale'){
                						$('#".$row["pathId"]."').css('fill','rgb(66, 145, 73)');
                						$('#row_".$row["pathId"]."').css('background','linear-gradient(to right, rgb(131, 212, 121), rgb(51, 154, 25))');
                					$('#".$row["pathId"]."').css('opacity','0.5');
                                    					$('#".$row["pathId"]."').css('fill-opacity','1');
                                    					$( '#".$row["pathId"]."' ).mouseleave(function mosLev() {
                                                                                                                                          $('#".$row["pathId"]."').css('fill','rgb(66, 145, 73)');
                                                                                                                                                          						$('#row_".$row["pathId"]."').css('background','linear-gradient(to right, rgb(131, 212, 121), rgb(51, 154, 25))');
                                                                                                                                                          					$('#".$row["pathId"]."').css('opacity','0.5');
                                                                                                                                                                              					$('#".$row["pathId"]."').css('fill-opacity','1');
                                                                                                                    				});
                					}
                					else if('".$row["status"]."' == 'Reserved'){
                                                            $('#".$row["pathId"]."').css('fill','#FFC107');
                                                            $('#row_".$row["pathId"]."').css('background','linear-gradient(to right,  rgba(255, 235, 59, 0.65), #ffeb3b)');

                                                        $('#".$row["pathId"]."').css('opacity','0.5');
                                                        					$('#".$row["pathId"]."').css('fill-opacity','1');
                                                        					$( '#".$row["pathId"]."' ).mouseleave(function mosLev() {
                                                                                                                                                                                                                                            $('#".$row["pathId"]."').css('fill','#FFC107');
                                                                                                                                                                                                                                                                                                       $('#row_".$row["pathId"]."').css('background','linear-gradient(to right,  rgba(255, 235, 59, 0.65), #ffeb3b)');

                                                                                                                                                                                                                                                                                                   $('#".$row["pathId"]."').css('opacity','0.5');
                                                                                                                                                                                                                                                                                                   					$('#".$row["pathId"]."').css('fill-opacity','1');
                                                                                                                                                                                                                    				});
                                                        					}


                					else{

                						$('#".$row["pathId"]."').css('fill','#e43535');
                						$('#row_".$row["pathId"]."').css('background','linear-gradient(to right, #bf8383, #d01515)');
                						$('#".$row["pathId"]."').css('opacity','0.5');
                                        					$('#".$row["pathId"]."').css('fill-opacity','1');
                                        					$( '#".$row["pathId"]."' ).mouseleave(function mosLev() {
                                                                                   	$('#".$row["pathId"]."').css('fill','#e43535');
                                                                                                   						$('#row_".$row["pathId"]."').css('background','linear-gradient(to right, #bf8383, #d01515)');
                                                                                                   						$('#".$row["pathId"]."').css('opacity','0.5');
                                                                                                                           					$('#".$row["pathId"]."').css('fill-opacity','1');
                                                            				});

                					}

                					";
    		}





}


	}else if(isset($_GET['status'])){
        $sql = "SELECT * FROM path where imageId = " . $_GET['imageId'] . " and status = '" .$_GET['status'] ."'";
        	$result = $conn->query($sql);

            	if ($result->num_rows > 0) {

            		while($row = $result->fetch_assoc()) {
                        echo "if('".$row["status"]."' == 'For Sale'){
                        						$('#".$row["pathId"]."').css('fill','rgb(66, 145, 73)');
                        						$('#row_".$row["pathId"]."').css('background','linear-gradient(to right, rgb(131, 212, 121), rgb(51, 154, 25))');
                        					$('#".$row["pathId"]."').css('opacity','0.5');
                                            					$('#".$row["pathId"]."').css('fill-opacity','1');
                                            					$( '#".$row["pathId"]."' ).mouseleave(function mosLev() {
                                                                                                                                                   	$('#".$row["pathId"]."').css('fill','rgb(66, 145, 73)');
                                                                                                                                                                           						$('#row_".$row["pathId"]."').css('background','linear-gradient(to right, rgb(131, 212, 121), rgb(51, 154, 25))');
                                                                                                                                                                           					$('#".$row["pathId"]."').css('opacity','0.5');
                                                                                                                                                                                               					$('#".$row["pathId"]."').css('fill-opacity','1');
                                                                                                                            				});
                        					}
                        					else if('".$row["status"]."' == 'Reserved'){
                                                                    $('#".$row["pathId"]."').css('fill','#FFC107');
                                                                    $('#row_".$row["pathId"]."').css('background','linear-gradient(to right,  rgba(255, 235, 59, 0.65), #ffeb3b)');

                                                                $('#".$row["pathId"]."').css('opacity','0.5');
                                                                					$('#".$row["pathId"]."').css('fill-opacity','1');
                                                                					$( '#".$row["pathId"]."' ).mouseleave(function mosLev() {
                                                                                                                                                                         $('#".$row["pathId"]."').css('fill','#FFC107');
                                                                                                                                                                                                                                           $('#row_".$row["pathId"]."').css('background','linear-gradient(to right,  rgba(255, 235, 59, 0.65), #ffeb3b)');

                                                                                                                                                                                                                                       $('#".$row["pathId"]."').css('opacity','0.5');
                                                                                                                                                                                                                                       					$('#".$row["pathId"]."').css('fill-opacity','1');
                                                                                                                                                				});
                                                                					}

                        					else{

                        						$('#".$row["pathId"]."').css('fill','#e43535');
                        						$('#row_".$row["pathId"]."').css('background','linear-gradient(to right, #bf8383, #d01515)');
                        						$('#".$row["pathId"]."').css('opacity','0.5');
                                                					$('#".$row["pathId"]."').css('fill-opacity','1');
                                                					$( '#".$row["pathId"]."' ).mouseleave(function mosLev() {
                                                                                                                                                       $('#".$row["pathId"]."').css('fill','#e43535');
                                                                                                                                                                               						$('#row_".$row["pathId"]."').css('background','linear-gradient(to right, #bf8383, #d01515)');
                                                                                                                                                                               						$('#".$row["pathId"]."').css('opacity','0.5');
                                                                                                                                                                                                       					$('#".$row["pathId"]."').css('fill-opacity','1');
                                                                                                                                				});
                        					}

                        					";
            		}





        }
	}else if(isset($_GET['rooms'])){
             $sql = "SELECT * FROM path where imageId = " . $_GET['imageId'] . " and rooms = '" .$_GET['rooms'] ."'";
             	$result = $conn->query($sql);

                 	if ($result->num_rows > 0) {

                 		while($row = $result->fetch_assoc()) {
                             echo "if('".$row["status"]."' == 'For Sale'){
                             						$('#".$row["pathId"]."').css('fill','rgb(66, 145, 73)');
                             						$('#row_".$row["pathId"]."').css('background','linear-gradient(to right, rgb(131, 212, 121), rgb(51, 154, 25))');
                             					$('#".$row["pathId"]."').css('opacity','0.5');
                                                 					$('#".$row["pathId"]."').css('fill-opacity','1');
                                                 					$( '#".$row["pathId"]."' ).mouseleave(function mosLev() {
                                                                                                                                                                                                                                 	$('#".$row["pathId"]."').css('fill','rgb(66, 145, 73)');
                                                                                                                                                                                                                                                              						$('#row_".$row["pathId"]."').css('background','linear-gradient(to right, rgb(131, 212, 121), rgb(51, 154, 25))');
                                                                                                                                                                                                                                                              					$('#".$row["pathId"]."').css('opacity','0.5');
                                                                                                                                                                                                                                                                                  					$('#".$row["pathId"]."').css('fill-opacity','1');
                                                                                                                                                                                                            				});

}
                             					else if('".$row["status"]."' == 'Reserved'){
                                                                         $('#".$row["pathId"]."').css('fill','#FFC107');
                                                                         $('#row_".$row["pathId"]."').css('background','linear-gradient(to right,  rgba(255, 235, 59, 0.65), #ffeb3b)');

                                                                     $('#".$row["pathId"]."').css('opacity','0.5');
                                                                     					$('#".$row["pathId"]."').css('fill-opacity','1');

$( '#".$row["pathId"]."' ).mouseleave(function mosLev() {
                                                                                                                                                              $('#".$row["pathId"]."').css('fill','#FFC107');
                                                                                                                                                                                                                                    $('#row_".$row["pathId"]."').css('background','linear-gradient(to right,  rgba(255, 235, 59, 0.65), #ffeb3b)');

                                                                                                                                                                                                                                $('#".$row["pathId"]."').css('opacity','0.5');
                                                                                                                                                                                                                                					$('#".$row["pathId"]."').css('fill-opacity','1');

                                                                                                                                        				});




                                                                     					}

                             					else{

                             						$('#".$row["pathId"]."').css('fill','#e43535');
                             						$('#row_".$row["pathId"]."').css('background','linear-gradient(to right, #bf8383, #d01515)');
                             						$('#".$row["pathId"]."').css('opacity','0.5');
                                                     					$('#".$row["pathId"]."').css('fill-opacity','1');


                                                     					$( '#".$row["pathId"]."' ).mouseleave(function mosLev() {
                                                                                                                                                                                                                                      $('#".$row["pathId"]."').css('fill','#e43535');
                                                                                                                                                                                                                                                                   						$('#row_".$row["pathId"]."').css('background','linear-gradient(to right, #bf8383, #d01515)');
                                                                                                                                                                                                                                                                   						$('#".$row["pathId"]."').css('opacity','0.5');
                                                                                                                                                                                                                                                                                           					$('#".$row["pathId"]."').css('fill-opacity','1');

                                                                                                                                                                                                                				});

                             					}

                             					";
                 		}





             }
     	}






?>
	new Tippy('path',{
					position:'bottom',
					animation:'scale',
					arrow:'true'
				});
});


	function saveHouseData(){
		 $.ajax({
                url: "api/saveHouseData.php",
                type: "POST",
                data: {
					pathId: $('#id').val(),
					imageId: $('#imageId').val(),			
                    name: $('#name').val(),
                    price: $('#price').val(),
                    status: $('#status').val()
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

$(window).on("load resize ", function() {
  var scrollWidth = $('.tbl-content').width() - $('.tbl-content table').width();
  $('.tbl-header').css({'padding-right':scrollWidth});
}).resize();

</script>


 <script>
    $( document ).ready(function() {

        <?php if(isset($_GET['status'])){ ?>
            $(<?php echo "'input[name=status][value=\"" . $_GET['status'] . "\"]'"; ?>).attr('checked', true);
        <?php } ?>


        <?php if(isset($_GET['rooms'])){ ?>
             $( <?php echo "'input[name=rooms][value=" . $_GET['rooms'] . "]'"; ?>).attr('checked', true);
        <?php } ?>




        $( "#toggleSidebar" ).click(function() {
          console.log( $( "#sidebar" ).css( "display" ) );
          if($( "#sidebar" ).css( "display" ) == "none"){
            $("#sidebar").css("display","block");
            $("#sidebar").removeClass("slideOutLeft");
            $("#sidebar").addClass("slideInLeft");
          }
          else{
            $("#sidebar").removeClass("slideInLeft");
            $("#sidebar").addClass("slideOutLeft");

              setTimeout(function(){  $("#sidebar").css("display","none"); }, 1000);

          }
        });
    });

    $("#cmn-toggle-4").change(function() {
        if(this.checked) {
            switchOn();
        }
        else{
            switchOff();
        }
    });

    function filter(){
        var url = <?php echo '"./image-detail.php?imageId=' . $_GET['imageId'] .'"';?>;
        if(!(undefined == $('input[name=status]:checked').val())){
            url += "&status="+$('input[name=status]:checked').val()
        }
        if(!(undefined == $('input[name=rooms]:checked').val())){
                    url += "&rooms="+$('input[name=rooms]:checked').val()
                }
        window.location = url;

    }

    function reset(){
        window.location = <?php echo '"./image-detail.php?imageId=' . $_GET['imageId'] .'"';?>;
    }

 </script>
  
</html>
