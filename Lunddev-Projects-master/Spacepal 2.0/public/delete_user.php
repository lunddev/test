<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/db_connection.php"); ?>
<?php require_once("../includes/functions.php"); ?>


<?php
    $current_user = find_user_by_id($_GET["user"]);

    if(!$current_user){
        redirect_to("manage_content.php");
    }

    $id = $current_user["id"];
    $query = "DELETE FROM users WHERE id = {$id} LIMIT 1";
    $result = mysqli_query($connection, $query);
    
    if($result && mysqli_affected_rows($connection) == 1){
    //Success
    $_SESSION["message"] = "User Deleted";
    redirect_to("manage_content.php");
    }else{
   $_SESSION["message"] = "Delete Failed";
   redirect_to("manage_content.php");
    }

?>



<?php 

if(isset($connection)){
   mysqli_close($connection); 
}


?>