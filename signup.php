
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>Broker | Signup</title>
  <meta name="description" content="Admin, Dashboard, Bootstrap, Bootstrap 4, Angular, AngularJS" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimal-ui" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">


  
  <!-- style -->
  <link rel="stylesheet" href="assets/animate.css/animate.min.css" type="text/css" />
  <link rel="stylesheet" href="assets/glyphicons/glyphicons.css" type="text/css" />
  <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css" type="text/css" />
  <link rel="stylesheet" href="assets/material-design-icons/material-design-icons.css" type="text/css" />

  <link rel="stylesheet" href="assets/bootstrap/dist/css/bootstrap.min.css" type="text/css" />
  <!-- build:css assets/styles/app.min.css -->
  <link rel="stylesheet" href="assets/styles/app.css" type="text/css" />
  <!-- endbuild -->
  <link rel="stylesheet" href="assets/styles/font.css" type="text/css" />
</head>
<body style="    background-color: white;">
  <div class="app" id="app">

<!-- ############ LAYOUT START-->
  <div class="center-block w-xxl w-auto-xs p-y-md">
    <div class="navbar">
      <div class="pull-center">
        <div ui-include="'views/blocks/navbar.brand.html'"></div>
      </div>
    </div>

    <div class="p-a-md box-color r box-shadow-z1 text-color m-a"  style="    text-align: center; width:100%;" >
     <img style="width: 40%; height: auto;     margin-bottom: 1.5em;" src="./assets/images/uvr.png" >
    <div class="text-sm" style="font-size: 1.3rem;     margin-bottom: 0.3em;">
            Welcome to UVR Nordic
          </div>
            <div class="text-sm" style="font-size: 1.1rem;  margin-bottom: 1em;">
            Agent Section
          </div>
      <form name="form">
         <div class=" text-sm" style="    font-size: 0.8rem; margin-bottom: 1.6em;
                                                    color: gray;">
                    Please signup here to access your projects
                  </div>
        <div class="md-form-group">
          <input  id=email type="email" class="md-input" required>
          <label>Email</label>
        </div>
        <div class="md-form-group">
          <input id=password type="password" class="md-input" required>
          <label>Password</label>
        </div>
        <button type="button" onClick="signup();"  style="background-color: gray;" class="btn primary btn-block p-x-md">Sign up</button>
      </form>
    </div>

    <div class="p-v-lg text-center">
      <div>Already have an account? <a ui-sref="access.signin" href="signin.php" class="text-primary _600">Sign in</a></div>
    </div>
  </div>

<!-- ############ LAYOUT END-->

  </div>
<!-- build:js scripts/app.html.js -->
<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/tippy.js/0.3.0/tippy.js"></script>
  
  
  
  <script>
	function signup(){
		$.ajax({
                url: "api/signup.php",
                type: "POST",
                data: {
					email: $('#email').val(),
					password: $('#password').val()
                },
                success: function (data) {
                    if (data) {
                        if(data == "1"){
							alert('Signup sucessful!');
							window.location  = './signin.php';
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
<!-- endbuild -->
</body>
</html>
