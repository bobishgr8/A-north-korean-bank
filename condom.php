<?php
    session_start();
    // No session variable "user" => no login
    if ( !isset($_SESSION["bankBoi"]) ) {
         // redirect to login page
         header("Location: attempt.php"); 
         exit;
    }
?>
        