<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/db_connection.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php include("../includes/header.php"); ?>

<?php
        find_selected_ad(); //find the selected ad or user
?>
        
        <div id ="main">
            <div id="navigation">
            <?php echo navigation($current_user, $current_ad); ?>
            <a href="new_user.php">+Add a user</a>
            </div>
           
            <div id="page">
            <?php
                echo message();
               ?>
            <h2>Manage Content</h2>
            
            <?php if($current_user){ ?>
            User name: <?php echo htmlentities($current_user["first_name"]) . " " . htmlentities($current_user["last_name"]); ?>
            <a href="edit_user.php?user=<?php echo $current_user["id"]?>">Edit user</a>
            
            <?php }elseif($current_ad){ ?>
            Title: <?php echo htmlentities($current_ad["title"]); ?> <br/>
            Location: <?php echo htmlentities($current_ad["location"]); ?><br/>
            <p><?php echo htmlentities($current_ad["description"]); ?></p>
            <?php } else { ?>
            Please select a user or ad
            <?php }?>

            </div>
        </div>
        
        

        
<?php include("../includes/footer.php"); ?>
        
