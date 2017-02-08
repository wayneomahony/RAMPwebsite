<?php
/* 
 DELETE.PHP
 Deletes a specific entry from the 'products' table
*/

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
 
 // check if the 'id' variable is set in URL, and check that it is valid
 if (isset($_GET['product_id']))
 {
 // get id value
 $product_id = $_GET['product_id'];
 
 // delete the entry
 $result = mysqli_query($conn, "DELETE FROM products WHERE product_id=$product_id")
 or die(mysql_error()); 

	
	echo'deleted';
 
 // redirect back to the view page
 header("Location: pantry2.php");
 }
 else
 // if id isn't set, or isn't valid, redirect back to view page
 {
 echo'no id'; 
 #header("Location: pantry2.php");
 }
 
?>