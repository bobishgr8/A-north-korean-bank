<?php
require_once "user.php";
require_once "dbmanager.php";
require_once "transaction.php";

// stealings all stuff from DB

class userDAO{
    // private $users = [];
    
    public function get_all_users(){
        $DB = new ConnectionManager;
        $PDO = $DB->connect();


        $sql = "select * from user";
        $statement = $PDO->prepare($sql);
        $statement->execute();
        $statement->setFetchMode(PDO::FETCH_ASSOC);

        $res = $statement->fetchAll();
        $users = [];
        foreach($res as $value){
            $user = new bank_user($value["StateID"],$value["hashPW"],$value["accountNumber"]);
            $users[] = $user;
        }
        $statement = null;
        $PDO = null;
        return $users;

    }


    public function get_hashed_pw($userID){
        $DB = new ConnectionManager;
        $PDO = $DB->connect();

        $sql = "SELECT hashPW from user WHERE stateID = :stateID";
        $statement = $PDO->prepare($sql);
        $statement->bindParam(':stateID',$userID,PDO::PARAM_STR);
        $statement->setFetchMode(PDO::FETCH_ASSOC);
        $statement->execute();
        $res = $statement->fetchAll();
        $statement = null;
        $PDO = null;
        return $res[0]["hashPW"];
    }

    public function register_a_user($accountNumber,$stateID,$hash_pw){
        $DB = new ConnectionManager;
        $PDO = $DB->connect();


        $sql = "INSERT INTO `user` VALUES(:accountNumber, :stateID, :hash_pw );";
        $statement = $PDO->prepare($sql);
        $statement->bindParam(':accountNumber',$accountNumber,PDO::PARAM_STR);
        $statement->bindParam(':stateID',$stateID,PDO::PARAM_STR);
        $statement->bindParam(':hash_pw',$hash_pw,PDO::PARAM_STR);
        $statement->execute();
        
        $statement = null;
        $PDO = null;
        return "successfully registered";

    }

    public function update_pw($stateID,$new_hash_pw){
        $DB = new ConnectionManager;
        $PDO = $DB->connect();


        $sql = "UPDATE `user` SET hashPW=:new_pw WHERE stateID = :stateID";
        $statement = $PDO->prepare($sql);
        $statement->bindParam(':stateID',$stateID,PDO::PARAM_STR);
        $statement->bindParam(':new_pw',$new_hash_pw,PDO::PARAM_STR);
        $statement->execute();
        
        $statement = null;
        $PDO = null;
        return "successfully registered";

    }
    
    public function recentTransactions($stateID){
        $DB = new ConnectionManager;
        $PDO = $DB->connect();
        $sql = "SELECT * FROM transactions t1, account t2 
                WHERE t1.accountNumber = t2.accountNumber AND stateID = :stateID 
                ORDER BY TransID DESC LIMIT 5;";

        $statement = $PDO->prepare($sql);
        $statement->bindParam(':stateID',$stateID,PDO::PARAM_STR);
        $statement->execute();
        
        $statement->setFetchMode(PDO::FETCH_ASSOC);
        $res = $statement->fetchAll();
        $all_data = [];
        foreach($res as $value){
            $all_data[] = new transaction($value["TransID"],$value["accountNumber"],$value["Amount"],$value["TransType"]);
        }

        $statement = null;
        $PDO = null;
        return $all_data;
        
    }

    public function find_outstanding($stateID){
        $DB = new ConnectionManager;
        $PDO = $DB->connect();
        $sql = "SELECT SUM(t3.loanAmount) FROM user t1, account t2, loan t3 
                WHERE t1.StateID =  t2.stateID 
                AND t2.accountNumber = t3.accountNumber AND t3.paid = 'N' AND t1.stateID = :stateID 
                GROUP BY t1.StateID;";

        $statement = $PDO->prepare($sql);
        $statement->bindParam(':stateID',$stateID,PDO::PARAM_STR);
        $statement->execute();
        
        $statement->setFetchMode(PDO::FETCH_ASSOC);
        $res = $statement->fetchAll();
        // var_dump($res);
        $all_data = [];
        

        $statement = null;
        $PDO = null;
        return $res;
    }

    public function find_totalBalance($stateID){
        $DB = new ConnectionManager;
        $PDO = $DB->connect();
        $sql = "SELECT t2.totalBalance FROM user t1, account t2
                WHERE t1.StateID =  t2.stateID 
                AND t1.stateID = :stateID;";

        $statement = $PDO->prepare($sql);
        $statement->bindParam(':stateID',$stateID,PDO::PARAM_STR);
        $statement->execute();
        
        $statement->setFetchMode(PDO::FETCH_ASSOC);
        $res = $statement->fetchAll();
        // var_dump($res);
        $statement = null;
        $PDO = null;
        return $res[0]["totalBalance"];
    }

    public function find_totalTransaction($stateID){
        $DB = new ConnectionManager;
        $PDO = $DB->connect();
        $sql = "SELECT count(*) FROM transactions t1,account t2 
                WHERE t1.accountNumber = t2.accountNumber AND t2.StateID = :stateID";


        $statement = $PDO->prepare($sql);
        $statement->bindParam(':stateID',$stateID,PDO::PARAM_STR);
        $statement->execute();
        
        $statement->setFetchMode(PDO::FETCH_ASSOC);
        $res = $statement->fetchAll();
        // var_dump($res);
        $statement = null;
        $PDO = null;
        return $res[0]["count(*)"];
    }
   
}

?>