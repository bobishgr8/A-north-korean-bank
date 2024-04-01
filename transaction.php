<?php
class transaction{
    private $transID;
    private $accountNumber;
    private $amount;
    private $transType;
    
    public function __construct($transID,$accountNumber,$amount,$transType) {
        $this->transID = $transID;
        $this->accountNumber = $accountNumber; 
        $this->amount = $amount; 
        $this->transType = $transType; // D or W

    }

    public function get_transID(){
        return $this->transID;
    }

    public function get_accountNumber(){
        return $this->accountNumber;
    }

    public function get_amount(){
        return $this->amount;
    }

    public function get_transType(){
        return $this->transType;
    }

    public function format_transactions(){
        $mapping = ["D" => "Deposit", "W" => "Withdrawal", "L"=>"Loan"];
        return [$mapping["{$this->get_transType()}"],$this->get_amount(),$this->get_transID()];
    }
    
}
?>