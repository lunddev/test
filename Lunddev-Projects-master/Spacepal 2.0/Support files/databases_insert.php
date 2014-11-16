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

<?php

$first_name = "Ann'a";
$last_name = "Sommer";
$email = "anna@hotmail.com";
$password = "lösen";
$position = 5;
$visible = 1;

$first_name = mysqli_real_escape_string($connection, $first_name);
$last_name = mysqli_real_escape_string($connection, $last_name);


//Perform database query
$query = "INSERT INTO users ("; 
$query .=" first_name, last_name, email, hashed_passowrd, position, visible";
$query .=") VALUES (";
$query .=" '{$first_name}', '{$last_name}','{$email}', '{$password}', '{$position}', '{$visible}'";
$query .=")";

$result = mysqli_query($connection, $query);


if($result){
    //Success
    echo "Success!";
}else{
    die("Databse query failed" . mysqli_error($connection));
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title> Databases </title>
    </head>
    <body>
   
   <ul>
    <?php
    //output query result
    while($user = mysqli_fetch_assoc($result)){
        
    ?>
        <li><?php echo $user["first_name"]; ?> </li>
    
    <?php
    }
    ?>
    </ul>
    
    
    <?php 
    //Free results
    mysqli_free_result($result);
    ?>
    
    
    </body>
</html>

<?php 

mysqli_close($connection);

?>