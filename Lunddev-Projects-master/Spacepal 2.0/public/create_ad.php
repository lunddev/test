<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/db_connection.php"); ?>
<?php require_once("../includes/functions.php"); ?>




<?php
confirm_logged_in();
if(isset($_POST['submit'])){
    
$title = mysql_prep($_POST["title"]);
$location = mysql_prep($_POST["location"]);
$type = mysql_prep($_POST["type"]);
$size = (int)$_POST["size"];
$description = mysql_prep($_POST["description"]);


//Perform database query
$query = "INSERT INTO ads ("; 
$query .=" title, location, type, size, description, user_id";
$query .=") VALUES (";
$query .=" '{$title}', '{$location}','{$type}', '{$size}', '{$description}', '{$_SESSION["user_id"]}'";
$query .=")";

$result = mysqli_query($connection, $query);


if($result){
    //Success
    $_SESSION["message"] = "Ad created";
    redirect_to("manage_content.php");
}else{
    redirect_to("new_ad.php");
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