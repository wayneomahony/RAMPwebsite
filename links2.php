<?php
	session_start();
	
	
	$q = strval($_GET['q']);
	$command1 = 'C:\xampp\htdocs\ramp2\ingredients_check2.py ';
	$output = shell_exec($command1 . $q);
	//by here the file should be created
	//echo "<h2> Serve Time :</h2>";
	//echo "<pre>";
	//echo $output;
	//echo "</pre>";
	//echo $q;
	//read a text file
	
	$handle = fopen("links.txt", "r");
	if ($handle) 
	{
		while (($line = fgets($handle)) !== false) 
		{
			// process the line read.
			$line = str_replace('-',' ', $line);
			echo "<button style='width: 100%;' id='recipeLink' class='btn btn-border-primary waves-effect recipe' value='$line' onClick='storeText(this)'>$line</button><br><br>";
		}

		fclose($handle);
	} 
	
	else 
	{
    // error opening the file.
	echo "Error";
	}
	
	//output each line as a button
	//each button uses scrape.php 
	
?>