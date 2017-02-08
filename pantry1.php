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
    <title>RAMP - Pantry</title>

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
					<a href="#" data-activates="slide-out" class="navbar-brand button-collapse"><i class="material-icons">menu</i></a>
							
                    <a class="navbar-brand waves-effect waves-light" href="#">RAMP - Recipe And Meal Planner</a>
                </div>

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#" class="waves-effect waves-light">Pantry <span class="sr-only">(current)</span></a></li>
                        <li><a href="#" class="waves-effect waves-light">Shopping</a></li>
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
							<a href="signUp.php" class="btn btn-danger waves-effect waves-light ">Sign Up</a>
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
                    <img src="Capture.JPG" class="img-responsive">
                </div>
                <!--/.First Column-->

                <!--Second Column-->
                <div class="col-md-6">

                    <!--Heading-->
                    <h4>Turn Ordinary Groceries Into Extraordinary Meals</h4>

                    <!--Description-->
                    <p>Insert nice abstract for the website here!</p>

                    <!--Call to action button-->
                    <a href="http://mdbootstrap.com/material-design-for-bootstrap/" class="btn btn-danger waves-effect waves-light ">Take The Tour</a>

                </div>
                <!--/.Second Column-->

            </div>
            <!--/.First Row-->
            
            <hr>

            <!--Second Row-->
            <div class="col-md-6">
			
			

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

			<h3>Search items</h3>
			
					<button class="btn-danger btn-lg" onClick="return findLinks()">Find Links</button><br>
					
					<br>
					
					<!--<button class="btn-danger btn-lg" onClick="return findRecipe()">Find Recipe</button><br>-->
					
					<br>
						<ul id="list">
						
						</ul>
				
				<h4>Recipes</h4>
				
				<div id="recipeLinks"><b></b></div>

			<!--Php above here-->	
            </div>
            <!--/.Second Row-->
			
			<!--Third Row-->
			
			
			
            <div class="row">
   
                <div class="col-md-6">
				
				<br>
				
				<button class="btn-info btn-lg" onClick="showUser()">Click to check what's in the Pantry</button>
				
				
				<div id="txtHint"><b></b></div>
				
				<!--closing 170-->
				</div>
				
			<!--closing 168-->	
			</div>
			
			<!--<button onClick="test()">Test</button>
			
			
					<h3>Search items</h3>
					
					<button class="btn-danger btn-lg" onClick="return findRecipe()">Find Recipe</button>
					
					<br>
						<ul id="list">
						
						</ul>
				
				<h4>Recipes</h4>
				
				<div id="recipeLinks"><b></b></div>-->

        </div>
        <!--/.Main Container-->
		<div class="row">
			<div class="col-md-12">
				
			</div>
		</div>
		
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

</body>

</html>