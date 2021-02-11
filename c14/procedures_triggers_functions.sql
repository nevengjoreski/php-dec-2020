

-- FUNCTIONS

DELIMITER ////

CREATE FUNCTION sobiranje ( i1 INT , i2 INT )
RETURNS INT
BEGIN
	DECLARE i3 INT;
    DECLARE i4 INT;
    DECLARE result INT;
    
	SET i3 = 5;
    SET i4 = 17;
    SET result = i1 + i2 + i3 + i4;
    
	RETURN result;
END ////

DELIMITER ;


SELECT sobiranje( 13 , 10);

SELECT sobiranje( 3 , 10);


DELIMITER $$

CREATE FUNCTION godina_na_transakcija( id INT)
RETURNS INT
BEGIN
	DECLARE godina INT;
    
    SET godina = ( SELECT YEAR(t.date) FROM transactions t WHERE t.id = id );
    
    RETURN godina;
END $$

DELIMITER ;


SELECT godina_na_transakcija( 2 ) as godina;

SELECT MONTHNAME(t.date) FROM transactions t WHERE t.id = '1';


-- PROCEDURES

DELIMITER ////

CREATE PROCEDURE sobiranje ( IN i1 INT, IN i2 INT, OUT result INT )
BEGIN
	DECLARE i3 , i4 INT;
    
    SET i3 = 15;
    SET i4 = 11;
    
    SET result = i1 + i2 + i3 + i4;
END ////
DELIMITER ;

call sobiranje( 12, 2 , @izlezen );
select @izlezen;


DELIMITER ////
CREATE PROCEDURE godina_mesec_nedela_na_transakcija ( IN id INT, OUT godina INT , OUT mesec VARCHAR(50), OUT nedela INT)
BEGIN
	SET godina = ( SELECT YEAR(t.date) FROM transactions t WHERE t.id = id);
    SET nedela = ( SELECT WEEK(t.date) FROM transactions t WHERE t.id = id);
    SET mesec = ( SELECT MONTHNAME(t.date) FROM transactions t WHERE t.id = id);
END ////
DELIMITER ;

call godina_mesec_nedela_na_transakcija( 1 , @godina, @mesec, @nedela );
SELECT @godina as godina, @mesec, @nedela;



-- TRIGGERS

/*
CREATE TRIGGER event_name
BEFORE / AFTER 
INSERT / UPDATE / DELETE
ON table_name
FOR EACH ROW
BEGIN 
	trigger body
END
*/

CREATE TABLE transactions_audit (
	id INT AUTO_INCREMENT PRIMARY KEY,
    date DATETIME DEFAULT current_timestamp,
    record_id INT,
    old_value bigint,
    new_value bigint
);

DELIMITER ////
CREATE TRIGGER before_transactions_update
BEFORE UPDATE ON transactions
FOR EACH ROW
BEGIN
	INSERT INTO transactions_audit ( record_id, old_value, new_value ) VALUES ( OLD.id , OLD.sum, NEW.sum );
END ////
DELIMITER ;

UPDATE transactions set sum = 50500 where id = 1;

select * from transactions_audit;





