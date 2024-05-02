CREATE TABLE Users(
    u_id int PRIMARY KEY AUTO_INCREMENT,
    username varchar(200),
    email varchar(200),
    passwordd varchar(200)
    );

CREATE TABLE products(
    p_id int PRIMARY KEY,
    pname varchar(100),
    price varchar(100),
    imagee varchar(100)
    );

CREATE TABLE carts(
    id int PRIMARY KEY,
    cname varchar(100),
    price varchar(100),
    cimage varchar(100),
    quantity int
    );

CREATE TABLE Student_Course (
    user_id INT NOT NULL,
    product_id INT NOT NULL,
    PRIMARY KEY (user_id, product_id),
    FOREIGN KEY (user_id) REFERENCES Users(u_id),
    FOREIGN KEY (product_id) REFERENCES products(p_id)
);