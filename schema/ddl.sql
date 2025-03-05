
DROP TABLE IF EXISTS users;
CREATE TABLE users(
    id INTEGER NOT NULL AUTO_INCREMENT,
    username VARCHAR(50),
    password VARCHAR(50),
    PRIMARY KEY (id)
    ) DEFAULT CHARACTER SET utf8 ENGINE=InnoDB;

DROP TABLE IF EXISTS userdata;
CREATE TABLE userdata(
    id INTEGER NOT NULL AUTO_INCREMENT,
    username VARCHAR(50),
    password VARCHAR(50),
    email VARCHAR(50),
    PRIMARY KEY (id)
    ) DEFAULT CHARACTER SET utf8 ENGINE=InnoDB;

-- For Module 7.6 
DROP TABLE IF EXISTS fullform;
CREATE TABLE `fullform`.`fullform`(
    SR INTEGER NOT NULL AUTO_INCREMENT, 
    Name TEXT(250),
    Age INTEGER(10),
    Gender VARCHAR(20),
    Email VARCHAR(22),
    Phone VARCHAR(20),
    Description TEXT(250),
    dt TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    PRIMARY KEY (SR)
    ) DEFAULT CHARACTER SET utf8 ENGINE=InnoDB;
