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

		$sql = "SELECT ingredient_name, ingredient_category FROM ingredients"; // WHERE link LIKE '%lasagna%'
		$result = $conn->query($sql);
		
		/* $sql2 = "SELECT ingredient_id, ingredient_name FROM ingredients WHERE ingredient_category = 'Dairy'"; // WHERE link LIKE '%lasagna%'
		$result2 = $conn->query($sql2);
		
		$sql3 = "SELECT ingredient_id, ingredient_name FROM ingredients WHERE ingredient_category = 'Grains'"; // WHERE link LIKE '%lasagna%'
		$result3 = $conn->query($sql3);
		
		$sql4 = "SELECT ingredient_id, ingredient_name FROM ingredients WHERE ingredient_category = 'Fruits'"; // WHERE link LIKE '%lasagna%'
		$result4 = $conn->query($sql4);
		
		$sql5 = "SELECT ingredient_id, ingredient_name FROM ingredients WHERE ingredient_category = 'Vegetables'"; // WHERE link LIKE '%lasagna%'
		$result5 = $conn->query($sql5); */
					
		$array = array(); //used to hold each ingredient as a variable to pass to php script
		array_unshift($array,"");
		unset($array[0]);
		$_SESSION['arr'] = $array;
		
		$meatArray = array();
		$_SESSION['meatArr'] = $meatArray;
		
		
		
					
		if ($result->num_rows > 0) 
		{
		echo "<table id='example1' class='table table-striped table-bordered' cellspacing='0' width='100%'><thead><tr><th>Item</th><th>Category</th></tr></thead><tbody>";
			while($row = $result->fetch_assoc()) 
			{
				echo "<tr><td>$row[ingredient_name]</td><td>$row[ingredient_category]</td></tr>";
				
				/* echo "<button id='$row[ingredient_id]' name='button' value='button' class='btn-info btn-lg'
				onClick='return addItem($row[ingredient_id])'>$row[ingredient_name]</button>"; */
				//array_push($_SESSION['arr'],$row['ingredient_name']);
			}
			
		} 
		else 
		{
			
		}
		echo "</tbody></table>";
		
		
		
		/* //Dairy query
		if ($result2->num_rows > 0) 
		{
			echo "<h4>Dairy</h4>";
			// output data of each row
			while($row = $result2->fetch_assoc()) 
			{
				
				echo "<button id='$row[ingredient_id]' name='button' value='button' class='btn-info btn-lg'
				onClick='return addItem($row[ingredient_id])'>$row[ingredient_name]</button>";
				array_push($_SESSION['arr'],$row['ingredient_name']);
			}
		} 
		else 
		{
			echo "<h4>Dairy</h4>";
			echo "Nothing yet!";
		}
		
		//Grains query
		if ($result3->num_rows > 0) 
		{
			echo "<h4>Grains</h4>";
			// output data of each row
			while($row = $result3->fetch_assoc()) 
			{
				
				echo "<button id='$row[ingredient_id]' name='button' value='button' class='btn-info btn-lg'
				onClick='return addItem($row[ingredient_id])'>$row[ingredient_name]</button>";
				array_push($_SESSION['arr'],$row['ingredient_name']);
			}
		} 
		else 
		{
			echo "<h4>Grains</h4>";
			echo "Nothing yet!";
		}
		
		//Fruits query
		if ($result4->num_rows > 0) 
		{
			echo "<h4>Fruits</h4>";
			// output data of each row
			while($row = $result4->fetch_assoc()) 
			{
				
				echo "<button id='$row[ingredient_id]' name='button' value='button' class='btn-info btn-lg'
				onClick='return addItem($row[ingredient_id])'>$row[ingredient_name]</button>";
				array_push($_SESSION['arr'],$row['ingredient_name']);
			}
		} 
		else 
		{
			echo "<h4>Fruits</h4>";
			echo "Nothing yet!";
		}
		
		//Vegetables query
		if ($result5->num_rows > 0) 
		{
			echo "<h4>Vegetables</h4>";
			// output data of each row
			while($row = $result5->fetch_assoc()) 
			{
				
				echo "<button id='$row[ingredient_id]' name='button' value='button' class='btn-info btn-lg'
				onClick='return addItem($row[ingredient_id])'>$row[ingredient_name]</button>";
				array_push($_SESSION['arr'],$row['ingredient_name']);
			}
		} 
		else 
		{
			echo "<h4>Vegetables</h4>";
			echo "Nothing yet!";
		} */
					
					
		$conn->close();
?>