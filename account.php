<?php
class Account{
    
    private $accountNo;
    private $stateID;
    private $balance;

    public function __construct($acc_no,$stateID,$balance){
        $this->accountNo = $acc_no;
        $this->stateID = $stateID;
        $this->balance = $balance;
    }

    public function get_accountNo(){
        return $this->accountNo;
    }

    public function get_stateID(){
        return $this->stateID;
    }

    public function get_balance(){
        return $this->balance;
    }

    public function set_balance($amount){
        $this->balance = $amount;
    }

    
}


?>
