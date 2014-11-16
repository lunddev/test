<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/db_connection.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php find_selected_ad(); //find the selected ad or user?>

<?php if(!$current_user){
    redirect_to("manage_content.php");
}
?>

<?php include("../includes/header.php"); ?>

<?php

if(isset($_POST['submit'])){

$id = $current_user["id"];
    
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
$query = "UPDATE users SET"; 
//$query .=" first_name, last_name, email, hashed_password, position, visible, admin";
//$query .=") VALUES (";
//$query .=" '{$first_name}', '{$last_name}','{$email}', '{$password}', {$position}, {$visible}, {$admin}";
//$query .=")";
$query .= " first_name = '{$first_name}',";
$query .= " last_name = '{$last_name}',";
$query .= " email = '{$email}',";
$query .= " hashed_password = '{$password}',";
$query .= " position = '{$position}',";
$query .= " visible = '{$visible}',";
$query .= " admin = '{$admin}'";
$query .=" WHERE id = {$id}";
$query .=" LIMIT 1";

$result = mysqli_query($connection, $query);


if($result && mysqli_affected_rows($connection) == 1){
    //Success
    $_SESSION["message"] = "User Updated";
    redirect_to("manage_content.php");
}else{
   $_SESSION["message"] = "Edit failed";
}
    
    
    
}else{

}



?>



        
        <div id ="main">
            <div id="navigation">
            <?php echo navigation($current_user, $current_ad); ?>
            </div>
           
            <div id="page">
            <?php
            echo message();
             ?>
             
               <h2>Edit User: <?php echo $current_user["first_name"]; ?></h2>
               
               
               <form action="edit_user.php?user=<?php echo $current_user["id"]; ?>" method="post">
               <p>First Name:
               <input type="text" name="first_name" value="<?php echo $current_user["first_name"]; ?>"/>
               </p>
                <p>Last Name:
               <input type="text" name="last_name" value="<?php echo $current_user["last_name"]; ?>"/>
               </p>
                <p>E-mail:
               <input type="text" name="email" value="<?php echo $current_user["email"]; ?>"/>
               </p>
                <p>Password:
               <input type="text" name="password" value="<?php echo $current_user["hashed_password"]; ?>"/>
               </p>
               
                <p>Position:
               <select name="position">
               
               <?php 
               $user_set = find_all_users();
                $user_count = mysqli_num_rows($user_set) + 1 ;
               for($count=1; $count <= $user_count; $count++){
                   echo "<option value=\"{$count}\">{$count}</option>";
               }
               ?>
               </select>
               </p>
               
                <p>Visible:
               <input type="radio" name="visible" value="0"/> NO
               <input type="radio" name="visible" value="1"/> YES
               </p>
               
                <p>Admin:
               <input type="radio" name="admin" value="0"/> NO
               <input type="radio" name="admin" value="1"/> YES
               </p>
                   
                
                
                <input type="submit" name="submit" value="Edit User"/>
               </form>
               <br/>
               <a href="manage_content.php">Cancel</a>
               <a href="delete_user.php?user=<?php echo $current_user["id"]?>">Delete user</a>
            </div>
        </div>
        
        

        
<?php include("../includes/footer.php"); ?>
        
