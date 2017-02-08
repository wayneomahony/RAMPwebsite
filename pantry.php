<?php
// Start the session
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Material Design for Bootstrap</title>

    <!-- Material Design Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Material Design Bootstrap -->
    <link href="css/mdb.css" rel="stylesheet">

    <!-- Template styles -->
    <link href="css/style.css" rel="stylesheet">
	
	<link href="https://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" />
	<link href="https://cdn.datatables.net/plug-ins/1.10.7/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet" />
	

</head>

<body>

	<!-- Modal -->
	<div class="modal fade" id="myModal-3" role="dialog">
		<div class="modal-dialog">

			<!-- Modal content-->
			<div class="modal-content">
				<!--Header-->
				<div class="modal-header text-center">
					<h4><i class="fa fa-user"></i> Register with:</h4>
					<a class="btn-floating btn-large fb-bg waves-effect waves-light"><i class="fa fa-facebook"> </i></a>
					<a class="btn-floating btn-large tw-bg waves-effect waves-light"><i class="fa fa-twitter"> </i></a>
					<a class="btn-floating btn-large gplus-bg waves-effect waves-light"><i class="fa fa-google-plus"> </i></a>
					<a class="btn-floating btn-large li-bg waves-effect waves-light"><i class="fa fa-linkedin"> </i></a>
					<a class="btn-floating btn-large git-bg waves-effect waves-light"><i class="fa fa-github"> </i></a>
				</div>
				<!--/.Header-->

				<!--Body-->
				<div class="modal-body">
					<div class="row">
						<div class="col-md-12">
							<!--Form-->
							<form>
								<h4 class="text-center">or:</h4>

								<div class="input-field">
									<i class="material-icons prefix">email</i>
									<input id="icon_email" type="tel" class="validate">
									<label for="icon_email">Your email</label>
								</div>

								<div class="input-field">
									<i class="material-icons prefix">lock</i>
									<input id="password" type="password" class="validate">
									<label for="password">Password</label>
								</div>

								<div class="input-field">
									<i class="material-icons prefix">lock</i>
									<input id="password-rep" type="password" class="validate">
									<label for="password-rep">Repeat password</label>
								</div>

								<div class="text-center">
									<button type="button" class="btn btn-primary btn-lg waves-effect waves-light">Sign up</button>
									<div class="subscription-checkbox">
										<form action="#">
											<input type="checkbox" id="test6" />
											<label for="test6">
												<p>Subscribe me to the Newsletter</p>
											</label>
										</form>
									</div>
								</div>

							</form>
							<!--/.Form-->
						</div>
					</div>
				</div>
				<!--/.Body-->

				<!--Footer-->
				<div class="modal-footer">
					<button type="submit" class="btn btn-default btn-default pull-left" data-dismiss="modal">X</button>
					<div class="options">
					<p>Already have an account? <a href="#">Login</a></p>
					</div>
				</div>
				<!--/.Footer-->
			</div>
		</div>
	</div>
	<!--/.Modal-->
	
	<!-- Modal -->
    <div class="modal fade" id="modalLogin" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h4><i class="fa fa-user"></i> Login</h4>
                </div>
                <div class="modal-body" style="padding:40px 50px;">
                    <div class="row">
                        <form class="col-md-12">
                            <div class="row">
                                <div class="input-field">
                                    <i class="material-icons prefix">email</i>
                                    <input id="icon_email" type="tel" class="validate">
                                    <label for="icon_email">Your email</label>
                                </div>

                                <div class="input-field">
                                    <i class="material-icons prefix">lock</i>
                                    <input id="password" type="password" class="validate">
                                    <label for="password">Password</label>
                                </div>
                                <div class="text-center">
                                    <button type="button" class="btn btn-primary waves-effect waves-light">Login</button>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!--Footer-->
                <div class="modal-footer">
                    <button type="submit" class="btn btn-default btn-default pull-left" data-dismiss="modal">X</button>
                    <div class="options">
                    <p>Not a member? <a href="#">Sign Up</a></p>
                    <p>Forgot <a href="#">Password?</a></p>
                    </div>
                </div>
                <!--/.Footer-->
            </div>
            <!-- /.Modal content-->
        </div>
    </div>
    <!-- Modal -->

   <!-- SideNav slide-out button -->
    <a href="#" data-activates="slide-out" class="navbar-brand button-collapse"><i class="material-icons">menu</i></a>
    <!--/. SideNav slide-out button -->

    <!-- Sidebar navigation -->
    <ul id="slide-out" class="side-nav admin-side-nav dark-side-nav">
        <!-- Logo -->
        <div class="logo-wrapper">
            <img src="http://0.gravatar.com/avatar/60efa32c26a19f3ed2e42798afb705ba?s=100&d=mm&r=g" class="img-responsive img-circle">
            <div class="rgba-stylish-strong">
                <p class="user white-text">Admin
                    <br> admin@gmail.com
                </p>
            </div>
        </div>
        <!--/. Logo -->

        <!-- Side navigation links -->
        <ul class="collapsible collapsible-accordion">
            <li><a href="index.html" class="waves-effect waves-light"><i class="fa fa-home"></i> Home</a></li>
            <li><a href="recipes.php" class="waves-effect waves-light"><i class="fa fa-cutlery"></i> Recipes</a></li>
            <li><a href="pantry.php" class="waves-effect waves-light"><i class="fa fa-table"></i> Pantry</a></li>
            <li><a href="#" class="waves-effect waves-light"><i class="fa fa-shopping-cart"></i> Shopping Lists</a></li>
        </ul>
        <!--/. Side navigation links -->

    </ul>
    <!--/. Sidebar navigation -->

    <!--Navbar-->
    <nav class="double-navbar navbar navbar-fixed-top unique-color z-depth-1" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header pull-left">
                <!-- SideNav slide-out button -->
                <a href="#" data-activates="slide-out" class="button-collapse"><i class="fa fa-bars"></i></a>
                <!--/. SideNav slide-out button -->

            </div>

            <!-- Navbar Icons -->
            <ul class="list-inline pull-right text-center">
                <li><a href="#" class="waves-effect waves-light" data-toggle="modal" data-target="#myModal-3"><i class="fa fa-user-plus"></i><br><span>Register</span></a></li>
                <li><a href="#" class="waves-effect waves-light" data-toggle="modal" data-target="#modalLogin"><i class="fa fa-sign-in"></i><br><span>Login</span></a></li>
                <li><a href="#" class="waves-effect waves-light" data-toggle="modal" data-target="#contact-form"><i class="fa fa-sign-out"></i><br><span>Logout</span></a></li>

            </ul>
            <!--/. Navbar Icons -->
        </div>
    </nav>
    <!--/.Navbar-->

    
    <!--Main container-->
    <div class="container">

	<hr><hr><hr><hr>
	
        <!--Section: Your Pantry-->
<div class="container">
<section id="sec-features">
            <div class="divider-new">Features</div>
			
			<?php
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "project_db";

			// Create connection
			$conn = new mysqli($servername, $username, $password, $dbname);
			// Check connection
			if ($conn->connect_error) {
				 die("Connection failed: " . $conn->connect_error);
			} 

			$sql = "SELECT ingredient_name, ingredient_category FROM ingredients";
			$result = $conn->query($sql);

			//echo "<table id='example' class='table table-striped table-bordered' cellspacing='0' width='100%'><thead><tr><th>Item</th><th>Category</th></tr></thead><tbody>";
			if ($result->num_rows > 0) {
			echo "<table id='example1' class='table table-striped table-bordered' cellspacing='0' width='100%'><thead><tr><th>Item</th><th>Category</th></tr></thead><tbody>";
			while($row = $result->fetch_assoc()) 
			{
				echo "<tr><td>$row[ingredient_name]</td><td>$row[ingredient_category]</td></tr>";
				 }
			} else {
				 echo "0 results";
			}
			echo "</tbody></table>";

			$conn->close();
			?> 
			
		
 

</div>

        </section>
        <!--/.Section:  Your Pantry-->
		
		<!--Section: Features-->
        <section id="sec-features">
            <div class="divider-new">Features</div>

            <div class="row">
			
			

                

            </div>

        </section>
        <!--/.Section:  Features-->

        <!--Section: Detailed info-->
        <div class="divider-new">Details<span class="hidden-xs">/Examples of use</span></div>
        <section id="sec-details">
            <!--First fow-->
            <div class="row">

                

            </div>
            <!--/.First fow-->
        </section>
        <!--/.Section: Detailed info-->


        <!--Main Container-->
        <div class="container">


            <!--Second Row-->
            <div class="container-fluid">
		
	
			
			
            <div class="row">
   
                <div class="container-fluid">
				
				<br>
				
				<button class="btn-info btn-lg" onClick="showUser()">Click to check what's in the Pantry</button>
				
				
				<div id="txtHint"><b></b></div>
				
				<!--closing 170-->
				</div>
				
			<!--closing 168-->	
			</div>
			

        </div>
        <!--/.Main Container-->
		<div class="row">
			<div class="col-md-12">
				
			</div>
		</div>



    </div>
    <!--/.Main container-->


    <!--Section: Footer-->
    <footer class="page-footer pt-color" id="sec-footer">
        <!--Footer Content-->
        <div class="container-fluid footer-content">
            <div class="row text-center wow fadeIn">
                <h4 class="white-text wow fadeIn">Find Us on social media</h4>
                <a href="https://www.facebook.com/mdbootstrap" class="btn-sm-full fb-bg rectangle waves-effect waves-light wow fadeInUp"><i class="fa fa-facebook"> </i> <span>Facebook</span> </a>
                <a href="https://twitter.com/MDBootstrap" class="btn-sm-full tw-bg rectangle waves-effect waves-light wow fadeInUp" data-wow-delay="0.1s"><i class="fa fa-twitter"> </i> <span>Twitter</span></a>
                <a href="https://plus.google.com/+Mdbootstrap" class="btn-sm-full gplus-bg rectangle waves-effect waves-light wow fadeInUp" data-wow-delay="0.2s"><i class="fa fa-google-plus"> </i> <span>Google +</span></a>
                <a class="btn-sm-full li-bg rectangle waves-effect waves-light wow fadeInUp" data-wow-delay="0.3s"><i class="fa fa-linkedin"> </i> <span>LinkedIn</span></a>
                <a class="btn-sm-full ins-bg rectangle waves-effect waves-light wow fadeInUp" data-wow-delay="0.4s"><i class="fa fa-instagram"> </i> <span>Instagram</span></a>
                <a href="https://www.pinterest.com/mdbootstrap/" class="btn-sm-full pin-bg rectangle waves-effect waves-light wow fadeInUp" data-wow-delay="0.5s"><i class="fa fa-pinterest"> </i> <span>Pinterest</span></a>
                <a class="btn-sm-full yt-bg rectangle waves-effect waves-light wow fadeInUp" data-wow-delay="0.6s"><i class="fa fa-youtube"> </i> <span>Youtube</span></a>
                <a class="btn-sm-full git-bg rectangle waves-effect waves-light wow fadeInUp" data-wow-delay="0.7s"><i class="fa fa-github"> </i> <span>Github</span></a>
            </div>
        </div>
        <!--/.Footer Content-->

        <!--Coprytights-->
        <div class="footer-copyright text-center rgba-black-light wow fadeIn">
            <div class="container-fluid">
                © 2016 Copyright: <a href=""> RAMP Co. Ltd. </a>
            </div>
        </div>
        <!--/.Coprytights-->
    </footer>
    <!--/.Section: Footer-->
    <!-- SCRIPTS -->

    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery.min.js"></script>

    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

    <!-- Material Design Bootstrap -->
    <script type="text/javascript" src="js/mdb.js"></script>

    <!--Google Maps-->
    	
	<script>
		// Initialize collapse button
		$(".button-collapse").sideNav();
		// Initialize collapsible 
		$('.collapsible').collapsible();
	</script>

    <!--WOW effect initialization-->
    <script>
        new WOW().init();
    </script>
	
	<script>
        $('.carousel').carousel();
    </script>
	
	<script type="text/javascript">
	
		var items = new Array();
	
		function addItem(one) //all other items apart from meat to be added to this array
		{
			//send the clicked item to the new list
			var ul = document.getElementById("list");
			var li = document.createElement("li");
			var result = document.getElementById(one); //result needs to be the item clicked!
			li.appendChild(result);
			ul.appendChild(li);
			//push the clicked item onto an array
			var json = '<?= json_encode($_SESSION['arr']); ?>';
			var obj = JSON.parse(json);
			items.push(obj[one]);
			//output the array to verify what it contains
			alert(JSON.stringify(items));
		}
		
		function addMeat(one) //first meat only to be added here, additional meats added to first array
		{
			//send the clicked item to the new list
			var ul = document.getElementById("list");
			var li = document.createElement("li");
			var result = document.getElementById(one); //result needs to be the item clicked!
			li.appendChild(result);
			ul.appendChild(li);
			//push the clicked item onto an array
			var json = '<?= json_encode($_SESSION['arr']); ?>';
			var obj = JSON.parse(json);
			items.push(obj[one]);
			//output the array to verify what it contains
			alert(JSON.stringify(items));
		}
		
		function findRecipe()//find out what to pass to the array
		{
			//just here for testing - need to pass array item in
			//var one = items[0];
			
			if (window.XMLHttpRequest) 
			{
				// code for IE7+, Firefox, Chrome, Opera, Safari
				xmlhttp = new XMLHttpRequest();
			} 
			else 
			{
				// code for IE6, IE5
				xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
			}
			xmlhttp.onreadystatechange = function() 
			{
				if (xmlhttp.readyState == 4 && xmlhttp.status == 200) 
				{
					document.getElementById("recipeLinks").innerHTML = xmlhttp.responseText;
				}
			};
			xmlhttp.open("GET","displayRecipes.php?q="+items,true);
			xmlhttp.send();
		}
			
		function showUser() 
		{
			if (window.XMLHttpRequest) 
			{
				// code for IE7+, Firefox, Chrome, Opera, Safari
				xmlhttp = new XMLHttpRequest();
			} 
			else 
			{
				// code for IE6, IE5
				xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
			}
			xmlhttp.onreadystatechange = function() 
			{
				if (xmlhttp.readyState == 4 && xmlhttp.status == 200) 
				{
					document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
				}
			};
			xmlhttp.open("GET","getIngredients.php",true);
			xmlhttp.send();
		}
		
		function storeText(element)
		{
			//need to store button name and pass to php file
			var one = element.value;
			//alert(one);
			xmlhttp.open("GET","scrape.php?q="+one,true);
			window.location = 'http://localhost/bootstrap/scrape.php?q='+one
		}
		
		function findLinks()
		{
			if (window.XMLHttpRequest) 
			{
				// code for IE7+, Firefox, Chrome, Opera, Safari
				xmlhttp = new XMLHttpRequest();
			} 
			else 
			{
				// code for IE6, IE5
				xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
			}
			xmlhttp.onreadystatechange = function() 
			{
				if (xmlhttp.readyState == 4 && xmlhttp.status == 200) 
				{
					document.getElementById("recipeLinks").innerHTML = xmlhttp.responseText;
				}
			};
			xmlhttp.open("GET", "links2.php?q="+items,true);
			//window.location = 'http://localhost/bootstrap/links2.php?q='+items
			xmlhttp.send();
		}
			
	</script>
	
	<script>
	function loadDoc() {
	  var xhttp;
	  if (window.XMLHttpRequest) {
		// code for modern browsers
		xhttp = new XMLHttpRequest();
		} else {
		// code for IE6, IE5
		xhttp = new ActiveXObject("Microsoft.XMLHTTP");
	  }
	  xhttp.onreadystatechange = function() {
		if (xhttp.readyState == 4 && xhttp.status == 200) {
		  document.getElementById("randomOutput").innerHTML = xhttp.responseText;
		}
	  };
	  xhttp.open("GET", "scrape.php?q=cashew+milk", true);
	  xhttp.send();
	}
	</script>
	
	<script>
		$(document).ready(function() {
		$('#example').dataTable();
	});
	</script>
	
	<script>
		$(document).ready(function() {
		$('#example1').dataTable();
	});
	</script>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/plug-ins/1.10.7/integration/bootstrap/3/dataTables.bootstrap.js"></script>


</body>
</html>
