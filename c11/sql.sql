CREATE TABLE `transactions` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
    `transaction_number` varchar(50) NOT NULL,
    `type` varchar(50) NOT NULL,
    `sum` bigint NOT NULL,
    `date` datetime DEFAULT CURRENT_TIMESTAMP,
    `student_id` int(11) NOT NULL,
    PRIMARY KEY (`id`),
    CONSTRAINT FK_student_transactions FOREIGN KEY (student_id) REFERENCES studenti (id) ON DELETE CASCADE
);


INSERT INTO transactions ( id, transaction_number, type, sum, date, student_id )
VALUES 
( 1 , UUID(), 'deposit' , 60000, current_timestamp(), 9),
( 2 , UUID(), 'deposit' , 30000, '2021-01-15 00:00:00', 9),
( 3 , UUID(), 'withdraw' , 47000, '2021-01-16 00:00:00', 9),
( 4 , UUID(), 'deposit' , 45000, current_timestamp(), 7),
( 5 , UUID(), 'withdraw' , 8000, current_timestamp(), 7),
( 6 , UUID(), 'withdraw' , 7000, current_timestamp(), 7);


SELECT * FROM transactions;

-- inner JOIN

SELECT transactions.type, transactions.sum, transactions.date, studenti.name, studenti.lastname
FROM transactions
JOIN studenti on studenti.id = transactions.student_id;

SELECT transactions.type, transactions.sum, transactions.date, studenti.name, studenti.lastname
FROM studenti
JOIN transactions on studenti.id = transactions.student_id;

-- aliases tables

SELECT t.type, t.sum, t.date, s.name, s.lastname
FROM studenti s
JOIN transactions t on s.id = t.student_id;

-- uslov / WHERE JOIN tabela

SELECT t.type, t.sum, t.date, s.name, s.lastname
FROM studenti s
JOIN transactions t on s.id = t.student_id
WHERE t.type = 'deposit';


SELECT t.type, t.sum, t.date, s.name, s.lastname
FROM studenti s
JOIN transactions t on s.id = t.student_id
WHERE t.type = 'deposit' AND s.age > 25;

-- LEFT / RIGHT JOIN
SELECT t.type, t.sum, t.date, s.name, s.lastname
FROM studenti s
LEFT JOIN transactions t on s.id = t.student_id;

SELECT t.type, t.sum, t.date, s.name, s.lastname
FROM transactions t 
LEFT JOIN studenti s on s.id = t.student_id;

SELECT t.type, t.sum, t.date, s.name, s.lastname
FROM transactions t 
RIGHT JOIN studenti s on s.id = t.student_id;


SELECT max(sum) as max_deposit
FROM transactions
WHERE type = 'deposit';

SELECT year(date), sum
FROM transactions
WHERE type = 'deposit';

-- daj mi gi site korisnici i sumata sto ja imaat napraveno kako deposit

SELECT sum(t.sum) as suma
FROM transactions t
JOIN studenti s ON s.id = t.student_id
WHERE t.type = 'deposit';

-- daj mi gi site korisnici ( posebno po korisnik ) i sumata koja ja imaat napraveno kako deposit

SELECT sum(t.sum) as suma , s.name
FROM transactions t
JOIN studenti s ON s.id = t.student_id
WHERE t.type = 'deposit'
GROUP BY s.name;

-- daj mi gi site korisnici ( posebno po korisnik ) i sumata koja ja imaat napraveno kako deposit i withdraw

SELECT sum(t.sum) as suma , s.name, t.type
FROM transactions t
JOIN studenti s ON s.id = t.student_id
WHERE t.type = 'deposit' OR t.type = 'withdraw'
GROUP BY s.name , t.type;

SELECT sum(t.sum) as suma , s.name, t.type
FROM transactions t
JOIN studenti s ON s.id = t.student_id
GROUP BY s.name , t.type;


-- ovie dve kverinja se ednkvi -->
SELECT (
	SELECT max(sum)
    FROM transactions
    WHERE type = 'deposit'
) as max_deposit, 
(
	SELECT max(sum)
    FROM transactions
    WHERE type = 'withdraw'
) as max_withdraw
;

SELECT max(sum), type
FROM transactions
GROUP by type;

