<?php

// TODO:

// here lies mock data:
require "userDAO.php";
// require "transaction.php";
$usersDAO = new userDAO;
$users = $usersDAO->get_all_users();
// var_dump($users);
// var_dump($_POST);
if(array_key_exists("logined",$_POST)){
    session_start();
    $user_ID = $_POST["StateID"];
    $password = $_POST["password"];
    // this needs to replaced by proper SQL querry SELECT u_pw from USERS where stateID = $user_ID (?) 
    // with a prepared statemnt
    foreach($users as $user){
        if($user->get_stateID() == $user_ID){
            if(password_verify($password,$user->get_acc_pw())){
                $_SESSION["bankBoi"] = $user_ID;
                header("Location: landing.php");
                exit();
            }else{
                echo "<h1> WRONG PASSWORD COMRADE, EXECUTION BY BOFORS 40MM ANTI AIRCRAFT CANNON</h1>";
                echo "<img src='./Assets/error1.jpg'>";
            }
        }
    };
    echo "<h1> No such user exist. Please sign up with us <a href='/Project!/signup.php'>here</a> comrade </h1>";

}else{
    header("Location: /Project!/");
}

?>