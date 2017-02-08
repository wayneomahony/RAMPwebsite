<!DOCTYPE html>
<html>
<head>
<h1> Links related to search items :</h1>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>RAMP - Something new</title>

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
<?php
	session_start();
	
	
	$q = strval($_GET['q']);
	$command1 = 'C:\xampp\htdocs\bootstrap\ingredients_check2.py ';
	$output = shell_exec($command1 . $q);
	//by here the file should be created
	//echo "<h2> Serve Time :</h2>";
	//echo "<pre>";
	//echo $output;
	//echo "</pre>";
	//echo $q;
	//read a text file
	$handle = fopen("sample.txt", "r");
	if ($handle) 
	{
		while (($line = fgets($handle)) !== false) 
		{
			// process the line read.
			echo "<button class='btn-info btn-lg recipe' value='$line' onClick='storeText(this)'>$line</button><br><br>";
			//echo "<button class='btn-info btn-lg recipe' value='$row[link]' onClick='storeText(this)'>$row[link]</button><br><br>";
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

	<script>
	
		function storeText(element)
		{
			//need to store button name and pass to php file
			var one = element.value;
			//alert(one);
			xmlhttp.open("GET","scrape.php?q="+one,true);
			window.location = 'http://localhost/bootstrap/scrape.php?q='+one
		}
		
	</script>
</body>
</html>