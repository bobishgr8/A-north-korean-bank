<?php
require_once "loan.php";
require_once "dbmanager.php";
require_once "account.php";

class loanAccountDAO{
    // this function takes in a account number, and returns the top row 
    public function calculate_NotLoanBalances($accountNumber){// TODO
        $conn = new ConnectionManager();
        $PDO = $conn->connect();
        $sql1 = "SELECT totalBalance FROM account where accountNumber = :accountNumber";
        $statement = $PDO->prepare($sql1);
        $statement->bindParam(":accountNumber",$accountNumber,PDO::PARAM_STR);
        $statement->execute();
        $statement->setFetchMode(PDO::FETCH_DEFAULT);
        $total_balance = $statement->fetchAll()[0];
        var_dump($total_balance);
        $sql2 = "SELECT totalBalance FROM account where accountNumber = :accountNumber";
        
        
        
        $balance = null;
    }

    public function get_recent_transactions($stateID){
        $sql = "";
    }


    // when the user takes any loan, this is what is executed, 
    public function took_a_loan($stateID,$amount,$reason){
        $conn = new ConnectionManager();
        $PDO = $conn->connect();
        $sql1 = "SELECT accountNumber FROM user where StateID = :stateID";
        $statement = $PDO->prepare($sql1);
        $statement->bindParam(":stateID",$stateID,PDO::PARAM_STR);
        $statement->execute();
        $statement->setFetchMode(PDO::FETCH_DEFAULT);
        $accountNumber = $statement->fetchAll()[0];
        $statement = null;
        $accountNumber = $accountNumber[0];
        $sql2 = "INSERT INTO `loan` (accountNumber,loanAmount,reason,paid) VALUES(:accountNumber,:amount,:reason,'N')";
        $statement = $PDO->prepare($sql2);
        $statement->bindParam(":accountNumber",$accountNumber,PDO::PARAM_STR);
        $statement->bindParam(":amount",$amount,PDO::PARAM_STR);
        $statement->bindParam(":reason",$reason,PDO::PARAM_STR);
        $status = $statement->execute();
        $statement = null;
        $PDO = null;
        return $status;
    }

    public function deposit($stateID,$amount){
        $conn = new ConnectionManager();
        $PDO = $conn->connect();
        $sql1 = "SELECT accountNumber FROM user where StateID = :stateID";
        $statement = $PDO->prepare($sql1);
        $statement->bindParam(":stateID",$stateID,PDO::PARAM_STR);
        $statement->execute();
        $statement->setFetchMode(PDO::FETCH_DEFAULT);
        $accountNumber = $statement->fetchAll()[0];
        $statement = null;
        $accountNumber = $accountNumber[0];
        $sql2 = "INSERT INTO `transactions` (accountNumber,Amount,TransType) VALUES(:accountNumber,:amount,'D')";
        $statement = $PDO->prepare($sql2);
        $statement->bindParam(":accountNumber",$accountNumber,PDO::PARAM_STR);
        $statement->bindParam(":amount",$amount,PDO::PARAM_STR);
        $status = $statement->execute();
        $statement = null;
        $PDO = null;
        return $status;
    }

    public function withdrawal($stateID,$amount){ // TODO to check if the user has such money in the account
        $conn = new ConnectionManager();
        $PDO = $conn->connect();
        $sql1 = "SELECT t1.accountNumber,t2.totalBalance FROM user t1, account t2 
        WHERE t1.accountNumber = t2.accountNumber
        AND t1.StateID =:stateID";
        $statement = $PDO->prepare($sql1);
        $statement->bindParam(":stateID",$stateID,PDO::PARAM_STR);
        $statement->execute();
        $statement->setFetchMode(PDO::FETCH_DEFAULT);
        $res = $statement->fetchAll()[0];
        $statement = null;
        var_dump($res);
        $accountNumber = $res[0];
        $total_balance = $res[1];
        // check account value > withdrawal
        if($total_balance >= $amount){
            $sql2 = "INSERT INTO `transactions` (accountNumber,Amount,TransType) VALUES(:accountNumber,:amount,'W')";
            $statement = $PDO->prepare($sql2);
            $statement->bindParam(":accountNumber",$accountNumber,PDO::PARAM_STR);
            $statement->bindParam(":amount",$amount,PDO::PARAM_STR);
            $status = $statement->execute();
            $statement = null;
            $PDO = null;
            return $status;
        }else{
            return "NO MONEY NO HONEY";
        }        
    }

    public function transfer($TOStateID,$FROMStateID,$amount){
        // spawns 2 functions
        $withdrawl_status = $this->withdrawal($FROMStateID,$amount);
        $deposit_status = $this->deposit($TOStateID,$amount);
        if($withdrawl_status && $deposit_status){
            return true;
        }elseif(!$withdrawl_status){
            return "NO MONEY NO HONEY";
        }else{
            return false;
        }
    }

    public function payLoan($stateID,$loanID){
        exit();
    }


}

?>