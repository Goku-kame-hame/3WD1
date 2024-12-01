CREATE TABLE customers(
id VARCHAR (100) NOT NULL,
name VARCHAR (100) NOT NULL,
email VARCHAR(100) NOT NULL,
PRIMARY KEY (id)
);

CREATE TABLE admin(
username VARCHAR(100) NOT NULL,
password VARCHAR(100) NOT NULL,
PRIMARY KEY (username)
);
INSERT INTO admin (username, password) VALUES ('admin', 'admin');

CREATE TABLE comments(
id INT NOT NULL AUTO_INCREMENT,
email VARCHAR(100) NOT NULL,
comment TEXT,
PRIMARY KEY (id)
);