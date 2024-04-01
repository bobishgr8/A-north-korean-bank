<?php

class bank_user{
    private $stateID; // STORED AS RAW TEXT
    private $acc_pw; //SALTED HASH
    private $acc_no;

    // currently the innit function is only called when a new user signs up
    
    public function __construct($stateID,$acc_pw,$acc_no){
        $this->stateID = $stateID;
        $this->acc_pw = $acc_pw;
        $this->acc_no = $acc_no;
    }

    public function get_stateID(){
        return $this->stateID;
    }
    public function get_acc_pw(){
        return $this->acc_pw;
    }
    public function get_acc_no(){
        return $this->acc_no;
    }

    // we will only allow the user to change their password

    public function set_acc_pw($new_password){
        $this->acc_pw = $new_password;
    }
}





?>