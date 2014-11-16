<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/db_connection.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php include("../includes/header.php"); ?>

<?php
    
 confirm_logged_in();

?>


        <div id ="main">

            <div id="page">
            <?php
            echo message();
             ?>
               <h2>Create ad</h2>
               
               <form action="create_ad.php" method="post">
               <p>Titel:
               <input type="text" name="title" value=""/>
               </p>
                <p>Plats:
               <input type="text" name="location" value=""/>
               </p>
                <p>Typ:
               <input type="text" name="type" value=""/>
               </p>
                <p>Storlek:
               <input type="text" name="size" value=""/>
               </p>
               <p>Beskrivning:
               <input type="textfield" name="description" value=""/>
               </p>
                
                <input type="submit" name="submit" value="Create ad"/>
               </form>
               <br/>
               <a href="index.php">Cancel</a>
              <hr/>

            </div>
        </div>
        
        

        
<?php include("../includes/footer.php"); ?>
        
