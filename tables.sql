/* db_name = users1 */

CREATE TABLE users(
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50),
    password VARCHAR(50),
    email VARCHAR(50)
);

CREATE TABLE posts(
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50),
    comment VARCHAR(150),
    date VARCHAR(50),
    reply_id INT
);