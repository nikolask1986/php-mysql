CREATE DATABASE IF NOT EXISTS appdbase;
USE appdbase;
CREATE TABLE nameDB (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);
INSERT INTO nameDB (firstname, lastname, email)
VALUES ('Karl', 'Brady', 'karl.brady@email.com');
INSERT INTO nameDB (firstname, lastname, email)
VALUES ('Julie', 'Phelan', 'julie.phelan@email.com');
INSERT INTO nameDB (firstname, lastname, email)
VALUES ('Luke', 'Roach', 'luke.roach@email.com')