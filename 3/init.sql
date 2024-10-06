CREATE DATABASE IF NOT EXISTS appDB;
CREATE USER IF NOT EXISTS 'user'@'%' IDENTIFIED BY 'password';
GRANT SELECT,UPDATE,INSERT ON appDB.* TO 'user'@'%';
FLUSH PRIVILEGES;

USE appDB;
CREATE TABLE IF NOT EXISTS music (
  ID INT(11) NOT NULL AUTO_INCREMENT,
  title VARCHAR(20) NOT NULL,
  timelong VARCHAR(10) NOT NULL,
  PRIMARY KEY (ID)
);

CREATE TABLE IF NOT EXISTS music_authors (
    ID INT(11) NOT NULL AUTO_INCREMENT,
    name_ VARCHAR(40) NOT NULL,
    year_ VARCHAR(10) NOT NULL,
    PRIMARY KEY (ID)
);

INSERT INTO music (title, timelong) VALUES
('Long Season', '35.16'),
('Karn Evil 9', '29.37'),
('Echoes', '23.35');

INSERT INTO music_authors (name_, year_) VALUES
('Fishmans', '1996'),
('Emerson, Lake & Palmer', '1973'),
('Pink Floyd', '1971');
