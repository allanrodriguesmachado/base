DROP TABLE users;
DROP TABLE address;

CREATE TABLE users (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    first_name VARCHAR(255) NOT NULL,
    last_name VARCHAR (255) NOT NULL,
    email VARCHAR(255) UNIQUE,
    document VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    canceled_at CURRENT_TIMESTAMP DEFAULT NULL
);

CREATE TABLE address (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    id_user INTEGER NOT NULL,
    street VARCHAR(255) NOT NULL,
    number VARCHAR(255) NOT NULL,
    complement VARCHAR(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    canceled_at CURRENT_TIMESTAMP DEFAULT NULL,
    FOREIGN KEY (id_user) REFERENCES users(id)
);

INSERT INTO users (first_name, last_name, email, document) 
VALUES ('Allan', 'Rodrigues', 'allan@php.com', '38672505883')

INSERT INTO address (id_user, street, number) 
VALUES (1, 'Rua Amazonas', '82 - A')


SELECT * FROM address 
JOIN users USING (id) 
WHERE id = 1 

SELECT * FROM users;
SELECT * FROM address;