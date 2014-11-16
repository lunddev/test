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
//Perform database query
$query = "SELECT * "; 
$query .="FROM users";

$result = mysqli_query($connection, $query);
//Test if there was a query error
if(!$result){
    die("Databse query failed");
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