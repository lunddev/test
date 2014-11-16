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
            </div>
           
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
                   
                
                
                <input type="submit" name="submit" value="Create User"/>
               </form>
               <br/>
               <a href="manage_content.php">Cancel</a>

            </div>
        </div>
        
        

        
<?php include("../includes/footer.php"); ?>
        
