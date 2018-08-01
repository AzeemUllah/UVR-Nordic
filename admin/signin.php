<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
  <title>UVR Nordic | Signin</title>
  <meta name="description" content="Admin, Dashboard, Bootstrap, Bootstrap 4, Angular, AngularJS" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimal-ui" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">


  
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
</head>
<body style="background-color: white;">
  <div class="app" id="app">

<!-- ############ LAYOUT START-->
  <div class="center-block w-xxl w-auto-xs p-y-md">
    <div class="navbar">
      <div class="pull-center">
        <div ui-include="'views/blocks/navbar.brand.html'"></div>
      </div>
    </div>
    <div class="p-a-md box-color r box-shadow-z1 text-color m-a" style="    text-align: center; width:100%;" >
    <img style="width: 40%; height: auto;     margin-bottom: 1.5em;" src="../assets/images/uvr.png" >
      <div class="text-sm" style="font-size: 1.3rem;     margin-bottom: 0.3em;">
        Welcome to UVR Nordic
      </div>
        <div class="text-sm" style="font-size: 1.1rem;  margin-bottom: 1em;">
        Admin Section
      </div>
      <form name="form">
          <div class=" text-sm" style="    font-size: 0.8rem;
                                              color: gray;">
              Please login here to create a project
            </div>
        <div class="md-form-group float-label">
          <input id=email type="email" class="md-input" ng-model="user.email" required>
          <label>Email</label>
        </div>
        <div class="md-form-group float-label">
          <input id=password type="password" class="md-input" ng-model="user.password" required>
          <label>Password</label>
        </div>

        <button type="button" onclick="signin();" style="background-color: gray;" class="btn primary btn-block p-x-md">Sign in</button>
      </form>
    </div>

    <div class="p-v-lg text-center">
     
      <div>Do not have an account? <a ui-sref="access.signup" href="signup.php" class="text-primary _600">Sign up</a></div>
    </div>
  </div>

<!-- ############ LAYOUT END-->

  </div>

<!-- endbuild -->
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/tippy.js/0.3.0/tippy.js"></script>
  
  
  
  <script>
	function signin(){
		$.ajax({
                url: "../api/admin/signin.php",
                type: "POST",
                data: {
					email: $('#email').val(),
					password: $('#password').val()
                },
                success: function (data) {
                    if (data) {
                        if(data == "1"){
							window.location  = './../admin/dashboard.php';
						}
						else{
							alert("Invalid Email or Password!");
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
