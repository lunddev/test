<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/db_connection.php"); ?>
<?php require_once("../includes/functions.php"); ?>

<?php

if(isset($_POST['submit'])){
    
$first_name = $_POST["first_name"];
$last_name = $_POST["last_name"];
$email = $_POST["email"];
$password = $_POST["password"];
$position = (int) $_POST["position"];
$visible = (int) $_POST["visible"];
$admin = (int) $_POST["admin"];

$first_name = mysql_prep($first_name);
$last_name = mysql_prep($last_name);
$email= mysql_prep($email);
$password = mysql_prep($password);

//Perform database query
$query = "INSERT INTO users ("; 
$query .=" first_name, last_name, email, hashed_password, position, visible, admin";
$query .=") VALUES (";
$query .=" '{$first_name}', '{$last_name}','{$email}', '{$password}', {$position}, {$visible}, {$admin}";
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