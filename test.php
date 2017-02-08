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
			unset($array[0]); //our first ingredient_id is set to 1 so I've started my array at 1 to allow for that
			$_SESSION['arr'] = $array;
					
			if ($result->num_rows > 0) 
			{
				// output data of each row
				while($row = $result->fetch_assoc()) 
				{
					echo "<br /><button id='$row[ingredient_id]' name='button' value='button' class='btn-info btn-lg'
						onClick='return addItem($row[ingredient_id])'>$row[ingredient_name]</button><br />";
					array_push($_SESSION['arr'],$row['ingredient_name']);
				}
			} 
			else 
			{
				echo "0 results";
			}
					
	$conn->close();
?>