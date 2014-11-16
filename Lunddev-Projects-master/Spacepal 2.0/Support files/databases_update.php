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

$first_name = "Delete";
$last_name = "Me";
$id = 4;

//Perform database query
$query = "UPDATE users SET "; 
$query .=" first_name = '{$first_name}', "; 
$query .=" last_name = '{$last_name}' ";
$query .="WHERE id = {$id}";

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