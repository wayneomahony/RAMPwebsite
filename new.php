<?php
/* 
 EDIT.PHP
 Allows user to edit specific entry in database
*/

 // creates the edit record form
 // since this form is used multiple times in this file, I have made it a function that is easily reusable
 function renderForm($product_id, $barcode, $product_name)
 {
 ?>
 <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
 <html>
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
 <title>New Record</title>
 </head>
 <body>
 <div class="container">

        <!--Section: Features-->
        <section id="sec-features">
            <div class="divider-new">New Product</div>

            <div class="row">
 
				<div class="panel panel-primary">
					<div class="panel-heading">New Pantry Item</div>
						<div class="panel-body">
							<div class="row">
								<form class="col-md-8" action="" method="post">
								  <div class="row">
									<div class="input-field col-md-6">
									  <i class="fa fa-barcode prefix"></i>
									  <input id="icon_prefix" type="number" class="validate" name="barcode" value="<?php echo $barcode; ?>"/>
									  <label class="control-label" for="icon_prefix">Barcode: *</label>
									</div>
									<div class="input-field col-md-6">
									  <i class="fa fa-shopping-cart prefix"></i>
									  <input id="icon_prefix1" type="text" name="product_name" value="<?php echo $product_name; ?>"/>
									  <label class="control-label" for="icon_prefix1">Product Name: *</label>
									</div>
									<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* Required</p>

									<input type="submit" name="submit" value="Submit" class="btn btn-primary btn-rounded waves-effect waves-light">
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>

 </body>
 </html> 
 <?php
 }
 
 // connect to the database
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
 
 // check if the form has been submitted. If it has, start to process the form and save it to the database
 if (isset($_POST['submit']))
 { 
 // get form data, making sure it is valid
 $barcode = $_POST['barcode'];
 $product_name = $_POST['product_name'];
 
 // check to make sure both fields are entered
 if ($barcode == '' || $product_name == '')
 {
 // generate error message
 $error = 'ERROR: Please fill in all required fields!';
 
 // if either field is blank, display the form again
 renderForm($barcode, $product_name, $error);
 }
 else
 {
 // save the data to the database
 mysqli_query($conn, "INSERT products SET barcode='$barcode', product_name='$product_name'")
 or die(mysql_error()); 
 
 // once saved, redirect back to the view page
 header("Location: pantry2.php"); 
 }
 }
 else
 // if the form hasn't been submitted, display the form
 {
 renderForm('','','');
 }
?>