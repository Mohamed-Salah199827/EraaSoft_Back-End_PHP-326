--! Relationship

  -- One-to-One
  CREATE TABLE users (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(50)
);
-- users ,  profiles , posts , students , courses , enrollments
CREATE TABLE profiles (
    id INT PRIMARY KEY AUTO_INCREMENT,
    user_id INT UNIQUE,
    bio TEXT,
    -- FOREIGN KEY
    -- REFERENCES
    FOREIGN KEY (user_id) REFERENCES users(id) 
    -- UNIQUE
);

  -- One-to-Many
  CREATE TABLE posts (
    id INT PRIMARY KEY AUTO_INCREMENT,
    user_id INT ,
    title VARCHAR(100),
    content TEXT,
     FOREIGN KEY (user_id) REFERENCES users(id)
);
  -- Many-to-Many
  CREATE TABLE students (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(50)
);
CREATE TABLE courses (
    id INT PRIMARY KEY AUTO_INCREMENT,
    course_name VARCHAR(50)
);

-- enrollments table
CREATE TABLE enrollments (
    id INT PRIMARY KEY AUTO_INCREMENT,
    student_id INT,
    course_id INT,
    FOREIGN KEY (student_id) REFERENCES students(id),
    FOREIGN KEY (course_id) REFERENCES courses(id)
);

-- get data 
   -- inner join  (default) 
--    { SELECT * FROM table1 INNER JOIN table2 ON table1.id = table2.foreign_id }


-- M-M
SELECT students.name AS student_name, courses.course_name FROM students INNER 
 JOIN enrollments on students.id = enrollments.student_id
 JOIN courses on courses.id = enrollments.course_id;



 SELECT users.id  ,profiles.id as profile_id, users.name as user_name ,profiles.bio FROM users INNER JOIN profiles ON users.id=profiles.user_id;
   -- left join
   SELECT * FROM users LEFT JOIN profiles ON users.id = profiles.user_id; 
   -- right join
   SELECT * FROM users RIGHT JOIN profiles ON users.id = profiles.user_id; 