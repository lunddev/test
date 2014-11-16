<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/db_connection.php"); ?>
<?php require_once("../includes/functions.php"); ?>

<?php

if(isset($_POST['submit'])){
    
$first_name = mysql_prep($_POST["first_name"]);
$last_name = mysql_prep($_POST["last_name"]);
$email = mysql_prep($_POST["email"]);
$password = password_encrypt($_POST["password"]);



//Perform database query
$query = "INSERT INTO users ("; 
$query .=" first_name, last_name, email, hashed_password";
$query .=") VALUES (";
$query .=" '{$first_name}', '{$last_name}','{$email}', '{$password}'";
$query .=")";

$result = mysqli_query($connection, $query);


if($result){
    //Success
    $_SESSION["message"] = "User created";
    redirect_to("manage_content.php");
}else{
    redirect_to("new_user.php");
    $_SESSION["message"] = "Creation failed";
}
    
    
    
}else{
    //This is probably a get request
    redirect_to("new_user.php");
}



?>


<?php 
if(isset($connection)){
   mysqli_close($connection); 
}
?>