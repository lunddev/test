<?php
	// Create database connection
	$dbhost = "0.0.0.0";
	$dbuser = "lunddev";
	$dbpass = "";
	$dbname = "spacepal";
	$port = "3306";

	$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
	
	if(mysqli_connect_errno()){
	    die("Database connection failed: " . 
	        mysqli_connect_error() . 
	        " (" . mysqli_connect_errno() . ")"
	        );
	}
?>