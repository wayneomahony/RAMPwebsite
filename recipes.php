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
    <title>Recipe & Meal Planner</title>

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

</head>

<body>

	<!-- Modal -->
	<div class="modal fade" id="myModal" role="dialog">
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
							<form id="myform" role="form" method="post">
								<h4 class="text-center">or:</h4>
								
								<input type="hidden" name="tag" value="register">
								
								<div class="input-field">
									<i class="material-icons prefix">email</i>
									<input id="icon_email" type="text" class="validate" name="name">
									<label for="icon_email">Your name</label>
								</div>

								<div class="input-field">
									<i class="material-icons prefix">email</i>
									<input id="icon_email" type="email" class="validate" name="email">
									<label for="icon_email">Your email</label>
								</div>

								<div class="input-field">
									<i class="material-icons prefix">lock</i>
									<input id="password" type="password" class="validate" name="password">
									<label for="password">Password</label>
								</div>

								<div class="input-field">
									<i class="material-icons prefix">lock</i>
									<input id="password-rep" type="password" class="validate" name="password-rep">
									<label for="password-rep">Repeat password</label>
								</div>

								<div class="text-center">
									<button type="submit" id="submitForm" class="btn btn-primary btn-lg waves-effect waves-light">Sign up</button>
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
                        <form class="col-md-12" id="myformlogin" role="form" method="post">
                            <div class="row">
							
							<input type="hidden" name="tag" value="login">
							
                                <div class="input-field">
                                    <i class="material-icons prefix">email</i>
                                    <input id="icon_email" type="email" class="validate" name="email">
                                    <label for="icon_email">Your email</label>
                                </div>

                                <div class="input-field">
                                    <i class="material-icons prefix">lock</i>
                                    <input id="password" type="password" class="validate" name="password">
                                    <label for="password">Password</label>
                                </div>
                                <div class="text-center">
                                    <button type="submit" id="submitLog" class="btn btn-primary waves-effect waves-light">Login</button>

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
            <img src="img/circle.png" class="img-responsive img-circle">
            <div class="rgba-stylish-strong">
                <p class="user white-text">RAMP
                    <br> Recipe & Meal Planner
                </p>
            </div>
        </div>
        <!--/. Logo -->

        <!-- Side navigation links -->
        <ul class="collapsible collapsible-accordion">
            <li><a href="index.html" class="waves-effect waves-light"><i class="fa fa-home"></i> Home</a></li>
            <li><a href="recipes.php" class="waves-effect waves-light"><i class="fa fa-cutlery"></i> Recipes</a></li>
            <li><a href="pantry2.php" class="waves-effect waves-light"><i class="fa fa-table"></i> Pantry</a></li>
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
                <li><a href="#" class="waves-effect waves-light" data-toggle="modal" data-target="#contact-form"><i class="fa fa-sign-out"></i><br><span>Logout</span></a></li>

            </ul>
            <!--/. Navbar Icons -->
        </div>
    </nav>
    <!--/.Navbar-->

    
    <!--Main container-->
    <div class="container">

	<hr><hr><hr><hr>
	
        <!--Section: Promoted Recipe-->
        <section id="sec-randomrecipe">
            <div class="divider-new">Promoted Recipe</div>

            <div class="row">
				
				<div class="col-md-12 wow slideInUp" data-wow-delay="0.2s">

                <!--Rotating card-->
                <div class="card-wrapper">
                    <div id="card-1" class="card-rotating effect__click">

                        <!--Front Side-->
                        <div class="face card-rotating__front z-depth-1">
                            <div class="card-up">
                                <img src="img/randomrecipes1.jpg" class="img-responsive">
                            </div>
                            <div class="avatar"><img src="img/randomwheel.gif" class="img-circle img-responsive">
                            </div>
                            <h4>What is today's Promoted Recipe?</h4>

                            <!--Triggering button-->
                            <a class="rotate-btn" data-card="card-1"><i class="fa fa-repeat"> Click here to reveal</i></a>
                        </div>
                        <!--/.Front Side-->

                        <!--Back Side-->
                        <div class="face card-rotating__back z-depth-1">
						<body>
							<div class="row">
								<div class="col-md-6 col-md-offset-3">
									<!--Card Reveal-->
									<div class="card">
										<div class="card-image">
											<div class="view overlay hm-white-slight z-depth-1">
												<img src="img/chickencarbonara.jpg">
												<div class="mask waves-effect activator"></div>
											</div>
										</div>
										<div class="card-content">
											<span class="card-title activator grey-text text-darken-4"><h2>Chicken Carbonara</h2><i class="material-icons right">more_vert</i></span>
											<p>Click Image to reveal details</p>
										</div>
										<div class="card-reveal">
											<span class="card-title grey-text text-darken-4">Meal Details<i class="material-icons right">close</i></span>
											<p>When this dish is done right, the rich deep flavors of the egg mixture combined with the bacon make this a satisfying and delicious comfort dish. Getting the temperature of the egg and cream mixture hot but not scrambled is the most difficult part and the key to success.</p>
											<br><hr><br>
											<a href="http://www.afamilyfeast.com/chicken-carbonara/">SOURCE</a>
										</div>
									</div>
									<!--/.Card Reveal-->
								</div>
							</div>
						</body>

                            <!--Triggering button-->
                            <a class="rotate-btn" data-card="card-1"><i class="fa fa-undo"> Click here to rotate back</i></a>
                        </div>
                        <!--/.Back Side-->

                    </div>
                </div>
                <!--/.Rotating card-->
                
            </div>
                

            </div>

        </section>
        <!--/.Section:  Promoted Recipe-->
		
		<!--Section: Pantry Recipes-->
        <div class="divider-new">Pantry Recipes</div>
        <section id="sec-details">
            <!--First fow-->
            <div class="row">

                <!--First column-->
                <div class="col-md-6 wow slideInUp" data-wow-delay="0.2s">
				
					<a class="btn btn-primary btn-rounded waves-effect waves-light" style="float:right;" onClick="showPantry()">Click to check what's in the Pantry</a><br><br><br>
					
					
					<div id="txtHint"><b></b></div>
				
				</div>
                <!--/.First column-->

                <!--Second column-->
                <div class="col-md-6 wow slideInUp" data-wow-delay="0.2s">
				
					<?php
					$servername = "localhost";
					$username = "root";
					$password = "";
					$dbname = "project_db";

					// Create connection
					$conn = new mysqli($servername, $username, $password, $dbname);
					// Check connection
					if ($conn->connect_error) 
					{
						die("Connection failed: " . $conn->connect_error);
					} 

					$sql = "SELECT ingredient_id, ingredient_name FROM ingredients"; // WHERE link LIKE '%lasagna%'
					$result = $conn->query($sql);
								
					$array = array(); //used to hold each ingredient as a variable to pass to php script
					array_unshift($array,"");
					unset($array[0]);
					$_SESSION['arr'] = $array;
								
					if ($result->num_rows > 0) 
					{
						// output data of each row
						while($row = $result->fetch_assoc()) 
						{
							//echo "<button id='$row[ingredient_id]' name='button' value='button' class='btn-info btn-lg'
							//onClick='return addItem($row[ingredient_id])'>$row[ingredient_name]</button>";
							array_push($_SESSION['arr'],$row['ingredient_name']);
						}
					} 
					else 
					{
						echo "0 results";
					}
								
								
					$conn->close();
					?>   
					
					<a class="btn btn-primary btn-rounded waves-effect waves-light" id="btnLinks" onClick="return findLinks()" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Finding Links">Find Recipe Links</a><br><br>
					
					<p>Search for Recipes containing these items:</p>
				
							<ul id="list">
							
							</ul>
					
						<h4>Recipes</h4>
					
					<div id="recipeLinks"><b></b></div>
				
				
				</div>
                <!--/.Second column-->

            </div>
            <!--/.First fow-->
        </section>
        <!--/.Section: Pantry Recipes-->
		
		<!--Section: Browse Recipes-->
        <div class="divider-new">Search Recipes</div>
        <section id="sec-details">
            <!--First fow-->
            <div class="row">

                <!--First column-->
                <div class="col-md-6 wow slideInUp" data-wow-delay="0.2s">
				
					<a class="btn btn-primary btn-rounded waves-effect waves-light" id="btnLinks" onClick="return findLinks1()" style="float:right;" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Finding Links">Search Recipes</a>
					
					
					
				</div>
                <!--/.First column-->

                <!--Second column-->
                <div class="col-md-6 wow slideInUp" data-wow-delay="0.2s">
				
					<?php
					$servername = "localhost";
					$username = "root";
					$password = "";
					$dbname = "project_db";

					// Create connection
					$conn = new mysqli($servername, $username, $password, $dbname);
					// Check connection
					if ($conn->connect_error) 
					{
						die("Connection failed: " . $conn->connect_error);
					} 

					$sql = "SELECT ingredient_id, ingredient_name FROM ingredients"; // WHERE link LIKE '%lasagna%'
					$result = $conn->query($sql);
								
					$array = array(); //used to hold each ingredient as a variable to pass to php script
					array_unshift($array,"");
					unset($array[0]);
					$_SESSION['arr'] = $array;
								
					if ($result->num_rows > 0) 
					{
						// output data of each row
						while($row = $result->fetch_assoc()) 
						{
							//echo "<button id='$row[ingredient_id]' name='button' value='button' class='btn-info btn-lg'
							//onClick='return addItem($row[ingredient_id])'>$row[ingredient_name]</button>";
							array_push($_SESSION['arr'],$row['ingredient_name']);
						}
					} 
					else 
					{
						echo "0 results";
					}
								
								
					$conn->close();
					?>   
					
					<div class="container">
					<div class="row">
						<div class="col-md-3">
							<div id="custom-search-input">
								<div class="input-group col-md-12">
									<input type="text" class="form-control input-lg" id="searchThis" placeholder="Recipe Keyword" />
									<span class="input-group-btn">
										<button class="btn btn-info btn-lg" type="button">
											<i class="fa fa-search"></i>
										</button>
									</span>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				</div>
                <!--/.Second column-->
				
            </div>
            <!--/.First fow-->
			
			<!--First fow-->
            <div class="row">

                <hr>
				
				<div id="recipeLinks1"><b></b></div>
            </div>
            <!--/.First fow-->
			
        </section>
        <!--/.Section: Browse Recipes-->
		     
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
			//alert(JSON.stringify(items));
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
			
		function showPantry() 
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
			xmlhttp.open("GET","getIngredientsRecipes.php",true);
			xmlhttp.send();
		}
		
		function storeText(element)
		{
			//need to store button name and pass to php file
			var one = element.value;
			//alert(one);
			xmlhttp.open("GET","scrape.php?q="+one,true);
			window.location = 'scrape.php?q='+one
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
			$("#submitForm").click(function () {
		 $.ajax({
			 type: "POST",
			 url: "indexweb.php",
			 data: $('#myform').serialize(),
			 success: function () {
				alert("Pass");
				 $("#myModal").modal('hide');
			 },
			 error: function () {
				alert("Fail");
				 <!-- $("#error").show(); -->
			 }
		 });
	 });
    </script>
	
	<script>
		   $("#submitLog").click(function () {
		 $.ajax({
			 type: "POST",
			 url: "indexweb.php",
			 data: $('#myformlogin').serialize(),
			 success: function (response) {
			 
				 <!-- alert(response); -->
				 alert(response);
				 
			 },
			 error: function () {
				<!-- $("#modalLogin").modal('hide'); -->
				$("#modalLogin").modal({"backdrop": "static"});
				 
			 }
		 });
	 }); 
    </script>
	
	<script>
			$('#btnLinks').on('click', function() {
			var $this = $(this);
		  $this.button('loading');
			setTimeout(function() {
			   $this.button('reset');
		   }, 5000);
		});
	</script>
	
	<script>
		function findLinks1()
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
					document.getElementById("recipeLinks1").innerHTML = xmlhttp.responseText;
				}
			};
			xmlhttp.open("GET", "links2.php?q="+document.getElementById("searchThis").value,true);
			//window.location = 'http://localhost/bootstrap/links2.php?q='+items
			xmlhttp.send();
		}
		
	</script>

</body>
</html>

</body>

</html>