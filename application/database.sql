/* First to be pasted */
CREATE DATABASE crud_in_ci;

/* Second to be glued */
CREATE TABLE tb_user(
    use_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY, 
    use_name VARCHAR(50) NOT NULL,
    use_email VARCHAR(100) NOT NULL,
    use_createAt DATE NOT NULL
);