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
 <title>Edit Record</title>
 </head>
 <body>
 <div class="container">

        <!--Section: Features-->
        <section id="sec-features">
            <div class="divider-new">Edit Product</div>

            <div class="row">
 
				<div class="panel panel-primary">
					<div class="panel-heading">Edit Pantry Item</div>
						<div class="panel-body">
							<div class="row">
								<form class="col-md-8" action="" method="post">
								<input type="hidden" name="product_id" value="<?php echo $product_id; ?>"/>
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
 
 // check if the form has been submitted. If it has, process the form and save it to the database
 if (isset($_POST['submit']))
 { 
 // confirm that the 'id' value is a valid integer before getting the form data
 if (is_numeric($_POST['product_id']))
 {
 // get form data, making sure it is valid
 $product_id = $_POST['product_id'];
 $barcode = $_POST['barcode'];
 $product_name = $_POST['product_name'];
 
 // check that firstname/lastname fields are both filled in
 if ($product_id == '' || $barcode == '' || $product_name == '')
 {
 // generate error message
 $error = 'ERROR: Please fill in all required fields!';
 
 //error, display form
 renderForm($product_id, $barcode, $product_name, $error);
 }
 else
 {
 // save the data to the database
 mysqli_query($conn, "UPDATE products SET product_id='$product_id', barcode='$barcode', product_name='$product_name' WHERE product_id='$product_id'")
 or die(mysql_error()); 
 
 // once saved, redirect back to the view page
 header("Location: pantry2.php"); 
 }
 }
 else
 {
 // if the 'id' isn't valid, display an error
 echo 'Error!';
 }
 }
 else
 // if the form hasn't been submitted, get the data from the db and display the form
 {
 
 // get the 'id' value from the URL (if it exists), making sure that it is valid (checing that it is numeric/larger than 0)
 if (isset($_GET['product_id']) && is_numeric($_GET['product_id']) && $_GET['product_id'] > 0)
 {
 // query db
 $product_id = $_GET['product_id'];
 $result = mysqli_query($conn, "SELECT * FROM products WHERE product_id=$product_id")
 or die(mysql_error()); 
 $row = mysqli_fetch_array($result);
 
 // check that the 'id' matches up with a row in the databse
 if($row)
 {
 
 // get data from db
 $product_id = $row['product_id'];
 $barcode = $row['barcode'];
 $product_name = $row['product_name'];
 
 // show form
 renderForm($product_id, $barcode, $product_name, '');
 }
 else
 // if no match, display result
 {
 echo "No results!";
 }
 }
 else
 // if the 'id' in the URL isn't valid, or if there is no 'id' value, display an error
 {
 echo 'Error!';
 }
 }
?>