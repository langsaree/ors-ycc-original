<?php
//define connection elements
$dbHost = "localhost";
$dbDatabase = "ors-ycc";
$dbUsername = "root";
$dbPassword = "";

//connect to Database
$conn = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbDatabase);

	if ($conn)
	{
		mysqli_query( $conn ,"SET NAMES 'utf8'") or die(mysqli_error());
	}else{
		die("could not connect to database". mysqli_error());
	}
?>
