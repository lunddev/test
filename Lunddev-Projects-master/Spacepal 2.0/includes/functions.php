<?php

    function redirect_to($new_location){
        header("Location: " . $new_location);
        exit;
    }
    
    function mysql_prep($string){
        global $connection;
        $escaped_string = mysqli_real_escape_string($connection, $string);
        return $escaped_string;
    }

    function confirm_query($result_set){
    
        if(!$result_set){
            die("Database query failed.");
        }
        
    }

    function find_all_users(){
                        global $connection;
                         
                        $query = "SELECT * "; 
                        $query .="FROM users " ;
                        $query .="ORDER BY id ASC";
                        $user_set = mysqli_query($connection, $query); //Run query
                        confirm_query($user_set); //Check for errors
                        return $user_set;
                        
    }
    
    function find_ads_for_user($user_id){
                        global $connection;
                        
                        $query = "SELECT * "; 
                        $query .="FROM ads ";
                        $query .="WHERE user_id = {$user_id}";
                        $ad_set = mysqli_query($connection, $query); //Run query
                        confirm_query($ad_set); //Check for errors
                        return $ad_set;
    }


    function navigation($user_array, $ad_array){
                    $output = "<ul class=\"users\">";
                    $user_set = find_all_users();
                    
                        while($user = mysqli_fetch_assoc($user_set)){

                                //<li> tag that gets class="selected" if selected
                                $output .= "<li";
                                if($user_array && $user["id"] == $user_array["id"]) $output .= " class=\"selected\"";
                                $output .= ">";
                            
                                $output .= "<a href=\"manage_content.php?user=" ;
                                $output .= urlencode($user["id"]);
                                $output .="\">";
                                $output .= $user["first_name"];
                                $output .= "</a>";
                        

                                    $ad_set = find_ads_for_user($user["id"]);

                                    $output .= "<ul class=\"ads\">";

                                    while($ad = mysqli_fetch_assoc($ad_set)){

                                            $output .= "<li";
                                            if($ad_array && $ad["id"] == $ad_array["id"]) $output .= " class=\"selected\"";
                                            $output .= ">";

                                            $output .=  "<a href=\"manage_content.php?ad=";
                                            $output .= urlencode($ad["id"]);
                                            $output .="\">";
                                            $output .= $ad["title"];
                                            $output .= "</a>";
                                            $output .= "</li>";

                                    }

                                            
                                        $output .= "</ul>";
                                $output .= " </li>";
                    

                        }

    mysqli_free_result($user_set);
    mysqli_free_result($ad_set);

              $output .=  "</ul>";
              
              return $output;
    }

    function find_user_by_id($user_id){
                        global $connection;
                        $safe_user_id = mysqli_real_escape_string($connection, $user_id);
                         
                        $query = "SELECT * "; 
                        $query .="FROM users " ;
                        $query .="WHERE id = {$safe_user_id} ";
                        $query .="LIMIT 1";
                        $user_set = mysqli_query($connection, $query); //Run query
                        confirm_query($user_set); //Check for errors
                        if($user = mysqli_fetch_assoc($user_set)){
                            return $user;
                        }else{
                            return null;
                        }

        
    }
    
        function find_user_by_mail($email){
                        global $connection;
                        $safe_user_email = mysqli_real_escape_string($connection, $email);
                         
                        $query = "SELECT * "; 
                        $query .="FROM users " ;
                        $query .="WHERE email = '{$safe_user_email}' ";
                        $query .="LIMIT 1";
                        $user_set = mysqli_query($connection, $query); //Run query
                        confirm_query($user_set); //Check for errors
                        if($user = mysqli_fetch_assoc($user_set)){
                            return $user;
                        }else{
                            return null;
                        }

        
    }
    
    
    
    function find_ad_by_id($ad_id){
                        global $connection;
                        $safe_ad_id = mysqli_real_escape_string($connection, $ad_id);
                        
                        $query = "SELECT * "; 
                        $query .="FROM ads ";
                        $query .="WHERE id = {$safe_ad_id}";
                        $ad_set = mysqli_query($connection, $query); //Run query
                        confirm_query($ad_set); //Check for errors
                        if($ad = mysqli_fetch_assoc($ad_set)){
                            return $ad;
                        }else{
                            return null;
                        }
    }
    
    function find_selected_ad(){
    global $current_user;
    global $current_ad;
    
    if(isset($_GET["user"])){
        $current_user = find_user_by_id($_GET["user"]); //get the selected user from DB
        $current_ad = null;
    }elseif (isset($_GET["ad"])){
        $current_ad = find_ad_by_id($_GET["ad"]); //get the selected ad from DB
        $current_user = null;
    }
    }
    
    function password_encrypt($password){
        $hash_format = "$2y$10$";
        $salt_length = 22;
        $salt = generate_salt($salt_length);
        $format_and_salt = $hash_format . $salt;
        $hash = crypt($password, $format_and_salt);
        return $hash;
    }
    
    function generate_salt($length){
        $unique_random_string = md5(uniqid(mt_rand(),true));
        
        $base64_string = base64_encode($unique_random_string);
        $modified_base64_string = str_replace('+', '.', $base64_string);
        $salt = substr($modified_base64_string, 0, $length);
        
        return $salt;
    }
    
    function password_check($password, $existing_hash){
        $hash = crypt($password, $existing_hash);
        if($hash === $existing_hash){
            return true;
        }else{
            return false;
        }
    }
    
    function attempt_login($username, $password){
        $login_user = find_user_by_mail($username);
        if($login_user){
            if(password_check($password, $login_user["hashed_password"])){
                return $login_user;
            }else{
                return false;
            }
            
            
        }else{
            return false;
        }
        
    }
    function logged_in(){
        return isset($_SESSION['user_id']);
    }
    
    
    function confirm_logged_in(){
        if(!isset($_SESSION['user_id'])){
        redirect_to("login.php");
    }
    }
    
?>