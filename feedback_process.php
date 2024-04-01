<?php
require_once "dbmanager.php";
session_start();
if(array_key_exists("feedback",$_POST)){
    var_dump($_POST);
    var_dump($_SESSION);
    $conn = new ConnectionManager;
    $PDO = $conn->connect();

    $sql = "INSERT INTO `feedback` VALUES(0, :StateID, :feedback)";
    $statement = $PDO->prepare($sql);
    $statement->bindParam(":StateID",$_SESSION["bankBoi"],PDO::PARAM_STR);
    $statement->bindParam(":feedback",$_POST["content"],PDO::PARAM_STR);


    $statement->execute();
    $statement = null;
    $PDO = null;

    echo "<h1> Feedback given</h1>";
    echo "<a href='/Project!/landing.php'> click here to return </a>";
}


?>