<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>RAMP - Registration</title>

    <!-- Material Design Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Material Design Bootstrap -->
    <link href="css/mdb.css" rel="stylesheet">
	
	

</head>

<body>

    <!--Header Section-->
    <header>

        <!--Navigation-->
        <nav class="navbar danger-color">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand waves-effect waves-light" href="#">RAMP - Recipe And Meal Planner</a>
                </div>

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
                    <ul class="nav navbar-nav">
                        <!--<li class="active"><a href="#" class="waves-effect waves-light">Pantry <span class="sr-only">(current)</span></a></li>
                        <li><a href="#" class="waves-effect waves-light">Shopping</a></li>-->
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" role="button" aria-expanded="false">Menu <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <!--<li><a href="#">My Account</a></li>-->
                                <li><a href="#">Help</a></li>
                                <li><a href="#">Contact Us</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Report A Problem</a></li>
                                <!--<li class="divider"></li>
                                <li><a href="#">Log Out</a></li>-->
                            </ul>
                        </li>
                    </ul>
                    <!--<form class="navbar-form navbar-right" role="search">
                        <div class="form-group waves-effect waves-light">
                            <!--<input type="text" class="form-control" placeholder="Search">
							<a href="#" class="btn btn-danger waves-effect waves-light ">Log In</a>
							<a href="#" class="btn btn-danger waves-effect waves-light ">Sign Up</a>
                        </div>
                    </form>-->
                </div>
            </div>
        </nav>
        <!--/.Navigation-->

    </header>
    <!--/.Header Section-->

    <!--Main Section-->
    <main>

        <!--Main Container-->
        <div class="container">

            <!--First Row-->
            <div class="row">

                <!--First Column-->
                <div class="col-md-6">
                    <!--<img src="Capture.JPG" class="img-responsive">-->
					<div class="row">
    <form class="col-md-12" method="post" action="RAMPprocess.php">
      <div class="row">
        <div class="input-field col-md-12">
          <input id="last_name" type="text" class="validate" name="name">
          <label for="last_name">Full Name</label>
        </div>
        <!--<div class="input-field col-md-6">
          <input id="last_name" type="text" class="validate">
          <label for="last_name">Last Name</label>
        </div>-->
      </div>
	  
      <div class="row">
        <div class="input-field col-md-12">
          <input id="txtNewPassword" type="password" class="validate" name="password">
          <label for="password">Password</label>
        </div>
      </div>
	  
      <div class="row">
        <div class="input-field col-md-12">
          <input id="txtConfirmPassword" type="password" class="validate" onChange="checkPasswordMatch();" >
          <label for="password">Confirm Password</label>
        </div>
	  </div>
		
		<div class="registrationFormAlert" id="divCheckPasswordMatch">
		</div>
      
      <div class="row">
        <div class="input-field col-md-12">
          <input id="txtNewEmail" type="email" class="validate" name="email">
          <label for="email">Email</label>
        </div>
      </div>
	  
	  <div class="row">
        <div class="input-field col-md-12">
          <input id="txtConfirmEmail" type="email" class="validate" onChange="checkEmailMatch();" >
          <label for="email">Confirm Email</label>
        </div>
      </div>
	  
	  <div class="registrationFormAlert" id="divCheckEmailMatch">
		</div>
	  
	  <div class="row">
        <div class="input-field col-md-12">
          <button type="submit" class="btn btn-danger btn-lg waves-effect waves-light" onClick="return Validate()" >Submit</button>
        </div>
      </div>
	  
    </form>
  </div>
  
  
                </div>
                <!--/.First Column-->

                <!--Second Column-->
             <div class="col-md-6">

                    <!--Heading-->
                    <h4>Lets get started!</h4>

                    <!--Description-->
                    <p>Small paragraph here on getting started with the website</p>

                    <!--Call to action button-->
                    <a href="http://mdbootstrap.com/material-design-for-bootstrap/" class="btn btn-danger waves-effect waves-light ">Take The Tour</a>

                </div>
			 

            </div>
            <!--/.First Row-->
            
            <hr>

            <!--Second Row-->
            <div class="row">

                <!--First Column-->
                <div class="col-md-4">

                    

                </div>
                <!--/.First Column-->

                <!--Second Column-->
                <div class="col-md-4">

                    

                </div>
                <!--/.Second Column-->

                <!--Third Column-->
                <div class="col-md-4">

                    

                </div>
                <!--/.Third Column-->

            </div>
            <!--/.Second Row-->

        </div>
        <!--/.Main Container-->

    </main>
    <!--/.Main Section-->

    <!--Footer Section-->
    <footer class="page-footer danger-color-dark center-on-small-only">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h5 class="white-text">Footer Content</h5>
                    <p class="grey-text text-lighten-4">Here you can use rows and columns here to organize your footer content.</p>
                </div>
                <div class="col-md-6">
                    <h5 class="white-text">Links</h5>
                    <ul>
                        <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                        <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                        <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                        <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright text-center rgba-black-light">
            <div class="container-fluid">
                © 2015 Copyright: <a href="http://www.MDBootstrap.com"> MDBootstrap.com </a>
            </div>
        </div>
    </footer>
    <!--Footer Section-->


    <!-- SCRIPTS -->

    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery.min.js"></script>

    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

    <!-- Material Design Bootstrap -->
    <script type="text/javascript" src="js/mdb.js"></script>

	<script>
		function checkPasswordMatch() 
		{
			var password = $("#txtNewPassword").val();
			var confirmPassword = $("#txtConfirmPassword").val();

			if (password != confirmPassword)
				$("#divCheckPasswordMatch").html("Passwords do not match!");
			else
				$("#divCheckPasswordMatch").html("Passwords match.");
		}

		$(document).ready(function checkPasswordMatch() 
		{
			$("#txtConfirmPassword").keyup(checkPasswordMatch);
		});
		
		function checkEmailMatch() 
		{
			var email = $("#txtNewEmail").val();
			var confirmEmail = $("#txtConfirmEmail").val();

			if (email != confirmEmail)
				$("#divCheckEmailMatch").html("Emails do not match!");
			else
				$("#divCheckEmailMatch").html("Emails match.");
		}
		
		$(document).ready(function checkEmailMatch() 
		{
			$("#txtConfirmEmail").keyup(checkEmailMatch);
		});
		
		function Validate()
		{
			var password = $("#txtNewPassword").val();
			var confirmPassword = $("#txtConfirmPassword").val();
			var email = $("#txtNewEmail").val();
			var confirmEmail = $("#txtConfirmEmail").val();
			
			if(password != confirmPassword || email != confirmEmail)
			{
				alert("Form not filled correctly!");
				return false;
			}
			else
				return true;
		}
		
		<!-- salt code to go below here -->
		
		
		
		<!-- salt code above here -->
		
	</script>
		
		
	
</body>

</html>