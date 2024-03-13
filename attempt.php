<?php

// TODO:
// NEED TO DO FORM INPUT VALIDATION
// HOOK UP TO DB
// IMPLEMENT SESSION MANAGEMENT
// IMPLEMENT HASHING AND SALTING

// here lies mock data:
require "user.php";
// require "transaction.php";

$MOCK_STATE_ID = "Kimmy023";
$MOCK_PW = "potato2";
$MOCK_ACC_NO = 123456789;
$MOCK_BLANS = 203232425849;


$mock_user1 = new bank_user($MOCK_STATE_ID,$MOCK_PW, $MOCK_ACC_NO, $MOCK_BLANS);
$users = [$mock_user1];

var_dump($_POST);
if(array_key_exists("logined",$_POST)){
    session_start();
    $user_ID = $_POST["StateID"];
    $password = $_POST["password"];
    // this needs to replaced by proper SQL querry SELECT u_pw from USERS where stateID = $user_ID (?) 
    // with a prepared statemnt
    foreach($users as $user){
        if($user->get_stateID() == $user_ID){
            if($user->get_acc_pw() == $password){
                $_SESSION["bankBoi"] = $user_ID;
                header("Location: landing.php");
                exit();
            }else{
                echo "<h1> WRONG PASSWORD COMRADE, EXECUTION BY BOFORS 40MM ANTI AIRCRAFT CANNON</h1>";
                echo "<img src='./Assets/error1.jpg'>";
            }
        }else{
            echo "<h1> No such user exist. Please sign up with us here comrade </h1>";
        }
    }
}else{
    header("Location: /Project!/");
}

?>