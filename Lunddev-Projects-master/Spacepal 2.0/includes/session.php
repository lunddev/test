<?php session_start(); //Open up a session ?>


<?php

    function message(){
            if(isset($_SESSION["message"])){
               $output = "<div class=\"message\">";
               $output .= htmlentities($_SESSION["message"]);
               $output .="</div>";
               
               //Clears the message after use
               $_SESSION["message"] = null;
               return $output;
            }
            
    }

?>
