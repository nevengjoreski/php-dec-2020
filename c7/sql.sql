-- CREATE SCHEMA `php` ;

/*
CREATE TABLE `php`.`studenti` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NOT NULL,
  `lastname` VARCHAR(45) NOT NULL,
  `age` INT NOT NULL,
  `email` VARCHAR(45) NOT NULL,
  `phone` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`));
*/

/*
INSERT INTO `php`.`studenti` (`name`, `lastname`, `age`, `email`, `phone`) VALUES ('Martina', 'Velickovska', '38', 'm.v@yahoo.com', '075458796');
INSERT INTO `php`.`studenti` (`name`, `lastname`, `age`, `email`, `phone`) VALUES ('Damjan', 'Grupcev', '30', 'd.g@hotmail.com', '077894512');
INSERT INTO `php`.`studenti` (`name`, `lastname`, `age`, `email`, `phone`) VALUES ('Kristina', 'Kraleva', '33', 'k.k@gmail.com', '072321654');
INSERT INTO `php`.`studenti` (`name`, `lastname`, `age`, `email`, `phone`) VALUES ('Trpe', 'Slavkoski', '40', 't.s@outlook.com', '071316497');
INSERT INTO `php`.`studenti` (`name`, `lastname`, `age`, `email`, `phone`) VALUES ('Stefan', 'Kostov', '44', 's.k@yahoo.com', '078789444');
INSERT INTO `php`.`studenti` (`name`, `lastname`, `age`, `email`, `phone`) VALUES ('Zlatko', 'Mitrovski', '50', 'z.m@hotmail.com', '075554466');
INSERT INTO `php`.`studenti` (`name`, `lastname`, `age`, `email`, `phone`) VALUES ('Rahela', 'Cvetkoska', '27', 'r.c@gmail.com', '078774469');
INSERT INTO `php`.`studenti` (`name`, `lastname`, `age`, `email`, `phone`) VALUES ('Voislav', 'Markovik', '55', 'v.m@outlook.com', '077646458');
INSERT INTO `php`.`studenti` (`name`, `lastname`, `age`, `email`, `phone`) VALUES ('Petar', 'Petrovski', '23', 'p.p@hotmail.com', '072326545');
INSERT INTO `php`.`studenti` (`name`, `lastname`, `age`, `email`, `phone`) VALUES ('Milan', 'Ognjanoski', '37', 'm.o@gmail.com', '071457896');
INSERT INTO `php`.`studenti` (`name`, `lastname`, `age`, `email`, `phone`) VALUES ('Ana', 'Dionisieva', '22', 'a.d@yahoo.com', '076446587');
INSERT INTO `php`.`studenti` (`name`, `lastname`, `age`, `email`, `phone`) VALUES ('Ana', 'Stavreska', '25', 'a.s@hotmail.com', '077789987');

*/

-- SELECT
SELECT * FROM studenti;

SELECT name, lastname, age FROM studenti;

-- WHERE / uslov
SELECT *
FROM studenti
WHERE age >= 33;

SELECT name , lastname, age , email
FROM studenti
WHERE name = 'Martina';

-- AND / OR

SELECT *
FROM studenti
WHERE age >= 30 AND age <=40;


SELECT *
FROM studenti
WHERE age >= 30 OR name = 'Ana';


-- alias

SELECT name , lastname as surname
FROM studenti;

-- LIKE
-- % nula, eden ili poveke karakteri
-- _ samo eden karakter


SELECT *
FROM studenti
WHERE email LIKE '%@yahoo.com';

SELECT *
FROM studenti
WHERE phone LIKE '_75%';

SELECT *
FROM studenti
WHERE phone LIKE '_75%' OR phone LIKE '_76%' OR phone LIKE '_77%';

-- not 
SELECT *
FROM studenti
WHERE name != 'Ana';


-- IN

SELECT *
FROM studenti
WHERE name = 'Damjan' OR name = 'Kristina';


SELECT *
FROM studenti
WHERE name IN ('Damjan' ,'Kristina');

-- NOT IN

SELECT *
FROM studenti
WHERE name NOT IN ('Damjan' ,'Kristina');

-- distinct

SELECT DISTINCT name
FROM studenti;

-- count

SELECT count(*) as ani
FROM studenti
WHERE name = 'Ana';


-- GROUP BY

SELECT name , count(*) as broj_po_ime
FROM studenti
GROUP BY name;

-- ORDER BY ASC / DESC

SELECT name , count(*) as broj_po_ime
FROM studenti
GROUP BY name
ORDER BY name DESC; -- default e ASC

SELECT *
FROM studenti
ORDER BY age DESC;

SELECT *
FROM studenti
ORDER BY age;


-- limit

SELECT *
FROM studenti
ORDER BY age
LIMIT 3;








