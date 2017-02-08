<?php include 'database.php'; ?>

<?php

// create a variable
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$uuid = uniqid('', true);
//*************************************************//
//working up until this was added - $encrypted password above was altered to $password
//below - users is changed to users1
$hash = hash('ripemd160',$password);
$encrypted_password = $hash['password']; // encrypted password
$salt = $hash['salt']; // salt
//*************************************************//
//Execute the query

mysqli_query($connect,"INSERT INTO users(unique_id, name, email, encrypted_password, salt, created_at) 
VALUES('$uuid', '$name', '$email', '$encrypted_password', '$salt', NOW())");
				
	if(mysqli_affected_rows($connect) > 0){
	//echo "<p>Employee Added</p>";
	//echo "<a href='index1.php'>Go Back</a>";
	header("Location: index1.php"); /* Redirect browser */
exit();
} else {
	echo "Employee NOT Added<br />";
	echo mysqli_error ($connect);
}