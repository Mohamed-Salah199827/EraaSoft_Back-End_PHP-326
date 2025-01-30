--! DDL - Data Definition Language
--CREATE (create a new table , database, etc)
--? CREATE DATABASE
    CREATE DATABASE school;
--? CREATE TABLE
CREATE TABLE students (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(50),
    age INT,
    email VARCHAR(255),
    password VARCHAR(255)
);
--? DROP TABLE
DROP TABLE students;

--? DROP DATABASE
DROP DATABASE school;
-- ALTER 
--? ALTER TABLE tableName ADD 
ALTER TABLE students ADD salary  INT ;
--? ALTER TABLE tableName DROP
ALTER TABLE students DROP email;
--? ALTER TABLE tableName MODIFY
ALTER TABLE students MODIFY name VARCHAR(100);
--? ALTER TABLE tableName CHANGE
ALTER TABLE students CHANGE name full_name VARCHAR(100);



-------------------------------------------------------

--! DML - Data Manipulation Language
-- INSERT
INSERT INTO students (name, age) VALUES ('John', 20);

-- SELECT
SELECT * FROM students;
SELECT name, age FROM students;
-- WHERE 
-- AND 
SELECT id,full_name, age,salary FROM students WHERE age>25 AND salary>3000 ;
-- ORDER BY (ASC|DESC)
SELECT id,full_name, age,salary FROM students ORDER BY salary DESC LIMIT 5  ;



-- LIMIT


 -- DELETE
    DELETE FROM students WHERE id 4;
-- UPDATE
UPDATE students SET full_name = 'John Doe' WHERE id = 13;
