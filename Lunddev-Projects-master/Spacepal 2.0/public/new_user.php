<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/db_connection.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php include("../includes/header.php"); ?>

        <div id ="main">

            <div id="page">
            <?php
            echo message();
             ?>
               <h2>Create User</h2>
               
               <form action="create_user.php" method="post">
               <p>First Name:
               <input type="text" name="first_name" value=""/>
               </p>
                <p>Last Name:
               <input type="text" name="last_name" value=""/>
               </p>
                <p>E-mail:
               <input type="text" name="email" value=""/>
               </p>
                <p>Password:
               <input type="text" name="password" value=""/>
               </p>
                
                <input type="submit" name="submit" value="Create User"/>
               </form>
               <br/>
               <a href="index.php">Cancel</a>
              <hr/>

            </div>
        </div>
        
        

        
<?php include("../includes/footer.php"); ?>
        
