CREATE DATABASE chel_course_db;
USE chel_course_db;

CREATE TABLE registrations (
    id INT AUTO_INCREMENT PRIMARY KEY,
    full_name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    phone_number VARCHAR(15),
    institution VARCHAR(255),
    instagram VARCHAR(255),
    course VARCHAR(255),
    interests TEXT,
    receive_info BOOLEAN,
    reason TEXT
);
