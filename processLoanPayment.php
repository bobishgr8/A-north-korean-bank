<?php
require_once "condom.php";
require_once "loanAccountDAO.php";

if(array_key_exists("inputcheck",$_POST)){
    var_dump($_POST);
    $res = new loanAccountDAO();
    $output = $res->payLoan($_SESSION["bankBoi"],$_POST["Amount"],$_POST["LoanID"]);
    echo "<h1>$output</h1>";
    echo "<hr>";
    echo "<a href='/Project!/repayloan.php'> click here to return </a>";
}   
?>