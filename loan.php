<?php
class Loan{
    private $id;
    private $accountNo;
    private $loanAmount;
    private $reason;
    private $paid;

    public function __construct($id,$acc_no,$loanAmount,$reason,$paid){
        $this->id = $id;
        $this->accountNo = $acc_no;
        $this->loanAmount = $loanAmount;
        $this->reason = $reason;
        $this->paid = $paid;
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

    public function get_paid(){
        return $this->paid;
    }

    public function format_loans(){
        $mapping = ["N"=>"No", "Y"=>"Paid"];
        return [$this->id,$this->loanAmount,$this->reason,$mapping[$this->paid]];
    }
}