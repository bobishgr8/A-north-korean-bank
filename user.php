<?php
require_once "transaction.php";

class bank_user{
    private $stateID; // STORED AS RAW TEXT
    private $acc_pw; //SALTED HASH
    private $acc_no;
    private $balance;
    private $transactions;

    // currently the innit function is only called when a new user signs up
    public function __construct($ID,$acc_pw,$acc_no,$balance)
    {
        $this->stateID = $ID;
        $this->acc_pw = $acc_pw;
        $this->acc_no = $acc_no;
        $this->balance = $balance;
        $this->transactions = [];
    }

    public function get_stateID(){
        return $this->stateID;
    }


    public function get_balance(){
        return $this->balance;
    }

    public function calculate_valid_trans($val){
        return $this->get_balance() >= $val;
    }

    public function get_acc_pw(){
        return $this->acc_pw;
    }
    public function get_acc_no(){
        return $this->acc_no;
    }

}





?>