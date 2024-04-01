<?php
class Loan{
    
    private $accountNo;
    private $loanAmount;
    private $reason;

    public function __construct($acc_no,$loanAmount,$reason){
        $this->accountNo = $acc_no;
        $this->loanAmount = $loanAmount;
        $this->reason = $reason;
    }

    public function get_accountNo(){
        return $this->accountNo;
    }

    public function get_loanAmount(){
        return $this->loanAmount;
    }

    public function get_reason(){
        return $this->reason;
    }

    

    
}