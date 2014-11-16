<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/db_connection.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php include("../includes/header.php"); ?>

<?php

if(isset($_POST['submit'])){
    
    $username = $_POST["email"];
    $password = $_POST["password"];
    
    $found_user = attempt_login($username, $password);
    
    if($found_user){
     $_SESSION["user_id"] = $found_user["id"];
     $_SESSION["first_name"] = $found_user["first_name"];
     redirect_to("admin.php");
    }else{
     $_SESSION["message"] = "Login failed.";
    }
    
}else{
    //This is probably a get request
}

?>






        <div id ="main">

            <div id="page">
            <?php
            echo message();
             ?>
               <h2>Create User</h2>
               
               <form action="login.php" method="post">
                <p>E-mail:
               <input type="text" name="email" value=""/>
               </p>
                <p>Password:
               <input type="text" name="password" value=""/>
               </p>
                
                <input type="submit" name="submit" value="Login"/>
               </form>
               <br/>
               <a href="index.php">Cancel</a>
              <hr/>

            </div>
        </div>
        
        

        
<?php include("../includes/footer.php"); ?>
        
