CREATE TABLE Users(
    u_id int PRIMARY KEY AUTO_INCREMENT,
    username varchar(200),
    email varchar(200),
    passwordd varchar(200)
    );

CREATE TABLE products(
    p_id int PRIMARY KEY,
    name varchar(100),
    price float
    );

CREATE TABLE Student_Course (
    user_id INT NOT NULL,
    product_id INT NOT NULL,
    PRIMARY KEY (user_id, product_id),
    FOREIGN KEY (user_id) REFERENCES Users(u_id),
    FOREIGN KEY (product_id) REFERENCES products(p_id)
);