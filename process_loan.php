<?php
session_start();
require_once "loanAccountDAO.php";

$stateID = $_SESSION["bankBoi"];
if(array_key_exists("application",$_POST)){
    $amount = $_POST["amount"];
    $reason = $_POST["reason"];
    $temp = new loanAccountDAO();
    $res = $temp->took_a_loan($stateID,$amount,$reason);
    if($res){
        echo "<h1>We will review your loan application</h1>";
        echo "<hr>";
        echo "<a href='/Project!/landing.php'>click here to return</a>";
    }else{
        echo "loan application failed";
    }

}

?>