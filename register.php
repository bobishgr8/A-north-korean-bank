<?php
require_once "userDAO.php";

function check_valid_new_account($arr,$acc_no){
    foreach($arr as $value){
        if($value == $acc_no){
            return false;
        }
        return true;
    }
}

if(array_key_exists("inputCheck",$_POST)){
    var_dump($_POST);
    if($_POST["password1"] != $_POST["password2"]){
        echo "<h1> MAKE SURE BOTH PASSWORD IS THE SAME </h1>";
    }else{
        $password = password_hash($_POST["password1"],PASSWORD_DEFAULT);
        $stateID = $_POST["StateID"];
        $dao = new userDAO;
        // generating a new account for the user
        $all_user = $dao->get_all_users();
        $new_acc_no = random_int(1000000,99999999);
        var_dump($new_acc_no);
        $all_acc_no = [];
        $all_state_id = [];
        foreach($all_user as $user){
            $all_acc_no[] = $user->get_acc_no();
            if($stateID == $user->get_stateID()){
                echo "<h1>User is already register with us.</h1>";
                echo "if you have been a victim of Identity theft please contact your local Ministry of State Security office (조선민주주의인민공화국 국가보위성)";
                echo "<hr>";
                echo "<a href='/Project!'> click here to return </a>";
                exit();
            }
            
        }
        while(!check_valid_new_account($all_acc_no,$new_acc_no)){
            $new_acc_no = random_int(1000000,99999999);
        }
        if($dao->register_a_user($new_acc_no,$stateID,$password)){
            header("Location: success.html");
        }else{
            echo "faliure to register account, I feel like you should be shot for filling in a form wrongly";
        }
        // echo "<h1>Successfully registered. We will verify your stateID and you can use it to log in soon </h1>";
        // echo "<hr>";
        // echo "<a href='/Project!'> click here to return </a>";
    }
}

?>