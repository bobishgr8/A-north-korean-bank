-- Active: 1710419819726@@127.0.0.1@3306@northkoreabank
CREATE TABLE User (
    accountNumber VARCHAR(8) NOT NULL,
    StateID VARCHAR(45) NOT NULL PRIMARY KEY,
    hashPW VARCHAR(256) NOT NULL
);

drop table Account;
drop TABLE loan;
drop TABLE transactions;
drop TABLE feedback;

CREATE TABLE Account (
    accountNumber VARCHAR(8) NOT NULL PRIMARY KEY,
    StateID VARCHAR(45) NOT NULL,
    totalBalance DECIMAL(15,2),
    CONSTRAINT Account_FK FOREIGN KEY (StateID) REFERENCES User(StateID)
);


CREATE TABLE Loan ( 
    loanID INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	accountNumber VARCHAR(8), 
    loanAmount DECIMAL(15,2),
    reason VARCHAR(256),
    paid VARCHAR(1)
    CONSTRAINT Loan_FK FOREIGN KEY (accountNumber) REFERENCES Account(accountNumber)
); 



CREATE TABLE transactions(
    TransID INT NOT NULL AUTO_INCREMENT PRIMARY KEY, 
	accountNumber VARCHAR(8) NOT NULL, 
	Amount DECIMAL(10,2) NOT NULL, 
	TransType CHAR(1) NOT NULL,  
	CONSTRAINT transactions_FK FOREIGN KEY (accountNumber) REFERENCES Account(accountNumber) 
);

CREATE TABLE Feedback(
    FeedbackID INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    StateID VARCHAR(45) NOT NULL,
    Feedback VARCHAR(256) NOT NULL,
    CONSTRAINT Feedback_FK FOREIGN KEY (StateID) REFERENCES User(StateID)
);


INSERT INTO `user` VALUES("12345678","Kimmy023","potato02");

SELECT * from `user`;

delimiter $$
create trigger newLoan AFTER INSERT on loan FOR EACH ROW
	BEGIN
		INSERT INTO transactions (accountNumber,Amount,TransType) VALUES(new.accountNumber,new.loanAmount,"L");
    END$$
delimiter ;


delimiter $$
create trigger update_blans after INSERT on transactions FOR EACH ROW
	BEGIN
		declare transType varchar(1);
		declare accnum varchar(8);
		declare oldblans decimal(10,2);
		set transType = new.TransType;
		set accnum = new.accountNumber;
		set oldblans = (Select totalBalance from account where accountNumber = accnum);
		if(transType = "D") then
			update account set totalBalance = oldblans + NEW.Amount WHERE accountNumber = NEW.accountNumber;
		elseif(transType = "L") then
			update account set totalBalance = oldblans + NEW.Amount WHERE accountNumber = NEW.accountNumber;
		else
			update account set totalBalance = oldblans - NEW.Amount WHERE accountNumber = NEW.accountNumber;    
		END IF;
    END$$
delimiter ;