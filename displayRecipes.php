<?php 
	
session_start();

 $array = $_SESSION['arr'];
 $q = strval($_GET['q']);
 $q = explode(",",$q); //divides up the array items
 //$q = "chicken";
 
 //print_r($array);
 //print_r($q);
	
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

	//set up a loop here
	//loop must be of length of $q
	//each $sql and $result must be stored in arrays
	echo $q[0];
	echo $q[1];
	$sql = "SELECT id, link FROM recipe_links WHERE link LIKE '%".$q[0]."%'"; // WHERE link LIKE '%lasagna%'
	$result = $conn->query($sql);
	
	//echo $q;
	
		$linksArray = array(); //used to hold each ingredient as a variable to pass to php script
		array_unshift($linksArray,"");
		unset($linksArray[0]);
		$_SESSION['lArr'] = $linksArray;

	if ($result->num_rows > 0) {
		// output data of each row
		
		while($row = $result->fetch_assoc()) 
		{
			//highest ranking recipes based on the number of matches will be at the top
			echo "<button class='btn-info btn-lg recipe' value='$row[link]' onClick='storeText(this)'>$row[link]</button><br><br>";
		}
	} else {
		echo "0 results";
	}
	$conn->close();
?>