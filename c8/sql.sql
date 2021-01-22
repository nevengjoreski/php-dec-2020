

-- insert

/*
INSERT INTO table_name
( col1, col2, col3 )
VALUES
( val-col1, val-col2, val-col3 )
*/

INSERT INTO studenti
( `name`, `lastname`, `age`, `email`, `phone` )
VALUES
( 'Stavre', 'Stavreski', 100, 's.s@gmail.com', '077875463' );

SELECT * FROM studenti;

-- update
/*
UPDATE table_name
SET
	col1 = val1,
	col2 = val2,
	col3 = val3,
	col4 = val4,
	col5 = val5
WHERE condition
*/

UPDATE studenti
SET
	name = 'Neven',
    lastname = 'Gjoreski',
    age = 33,
    email = 'n.g@gmail.com',
    phone = '076543212'
WHERE id = 14;

-- delete

/*
DELETE FROM table_name
WHERE col = val;
*/



UPDATE studenti
SET
    age = 99
WHERE id = 12;


