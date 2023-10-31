CREATE TABLE users (
    user_username VARCHAR(50) UNIQUE,
    user_password VARCHAR(50),
    user_email VARCHAR(50) UNIQUE,
    user_id INT PRIMARY KEY
);