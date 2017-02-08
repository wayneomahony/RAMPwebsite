<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Material Design for Bootstrap</title>

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
	
	<link href="https://cdn.datatables.net/plug-ins/1.10.7/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet" />

</head>

<body>

<?php
	session_start();
	
	
	$q = strval($_GET['q']);
	
	echo "<div class='container'><div class='divider-new'>$q</div><section id=1sec-recipe'><div class='row'><div class='col-md-12 wow slideInUp' data-wow-delay='0.2s'>";

	$command1 = 'C:\xampp\htdocs\ramp2\serve_times.py ';
	$output = shell_exec($command1 . $q);
	echo "<div class='panel-group' id='accordion'><div class='panel panel-primary'><div class='panel-heading'><h4 class='panel-title'><a data-toggle='collapse'  href=\"#collapse3\"><h5>Serve Time:</h5></a></h4></div><div id='collapse3' class='panel-collapse collapse in'><div class='panel-body'><pre>$output</pre></div></div></div>";
	/* echo "<pre>";
	echo $output;
	echo "</pre>"; */
	
	$command2 = 'C:\xampp\htdocs\ramp2\ingredients.py ';
	$output = shell_exec($command2 . $q);
	echo "<div class='panel panel-primary'><div class='panel-heading'><h4 class='panel-title'><a data-toggle='collapse'  href=\"#collapse4\"><h5>Ingredients Needed:</h5></a></h4></div><div id='collapse4' class='panel-collapse collapse in'><div class='panel-body'><pre>$output</pre></div></div></div>";
	/* echo "<pre class>";
	echo $output;
	echo "</pre>"; */
	
	$command3 = 'C:\xampp\htdocs\ramp2\instructions.py ';
	$output = shell_exec($command3 . $q);
	echo "<div class='panel panel-primary'><div class='panel-heading'><h4 class='panel-title'><a data-toggle='collapse'  href=\"#collapse5\"><h5>Instructions:</h4></a></h5></div><div id='collapse5' class='panel-collapse collapse in'><div class='panel-body'><pre>$output</pre></div></div></div></div>";
	/* echo "<pre>";
	echo $output;
	echo "</pre>"; */
	echo "</div></div></section></div>";
?>
</body>
</html>
