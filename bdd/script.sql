DROP TABLE IF EXISTS User;
DROP TABLE IF EXISTS Login_info;
DROP TABLE IF EXISTS Address;
DROP TABLE IF EXISTS Commands;
DROP TABLE IF EXISTS Command;
DROP TABLE IF EXISTS Cart;
DROP TABLE IF EXISTS Invoices;
DROP TABLE IF EXISTS Invoice;
DROP TABLE IF EXISTS Payment;
DROP TABLE IF EXISTS Rating;
DROP TABLE IF EXISTS Items;
DROP TABLE IF EXISTS Category;
DROP TABLE IF EXISTS Photo;
DROP TABLE IF EXISTS Prefer_payment;
DROP TABLE IF EXISTS Comment;
DROP TABLE IF EXISTS Auth;
DROP TABLE IF EXISTS Code_promo;

CREATE TABLE IF NOT EXISTS Comment
(
    Id      INT          NOT NULL,
    Comment VARCHAR(255) NOT NULL,
    User    INT          NOT NULL
);

CREATE TABLE IF NOT EXISTS User
(
    Id             INT          NOT NULL,
    Name           VARCHAR(255) NOT NULL,
    Login_info     INT          NOT NULL,
    Address        INT          NOT NULL,
    Photo          INT          NOT NULL,
    Commands       INT          NOT NULL,
    Cart           INT          NOT NULL,
    Invoices       INT          NOT NULL,
    Prefer_payment INT          NOT NULL,
    Rating         INT          NOT NULL,
    PRIMARY KEY (Id)
);

CREATE TABLE IF NOT EXISTS Login_info
(
    Id       INT          NOT NULL,
    mail     VARCHAR(255) NOT NULL,
    Password VARCHAR(255) NOT NULL
);

CREATE TABLE IF NOT EXISTS Payment
(
    Id      INT          NOT NULL,
    Payment VARCHAR(255) NOT NULL,
    PRIMARY KEY (Id)
);

CREATE TABLE IF NOT EXISTS Prefer_payment
(
    Id      INT NOT NULL,
    Payment INT NOT NULL,
    PRIMARY KEY (Id)
);

CREATE TABLE IF NOT EXISTS Category
(
    Id   INT          NOT NULL,
    Name VARCHAR(255) NOT NULL,
    PRIMARY KEY (Id)
);

CREATE TABLE IF NOT EXISTS Photo
(
    Id   INT          NOT NULL,
    Link LONG VARCHAR NOT NULL,
    PRIMARY KEY (Id)
);

CREATE TABLE IF NOT EXISTS Address
(
    Id      INT          NOT NULL,
    Street  VARCHAR(255) NOT NULL,
    City    VARCHAR(255) NOT NULL,
    CP      INT          NOT NULL,
    State   VARCHAR(255) NOT NULL,
    Country VARCHAR(255) NOT NULL,
    PRIMARY KEY (Id)
);

CREATE TABLE IF NOT EXISTS Command
(
    Id    INT NOT NULL,
    Items INT NOT NULL
);

CREATE TABLE IF NOT EXISTS Commands
(
    Id      INT NOT NULL,
    UserId INT NOT NULL,
    Date VARCHAR(50) NOT NULL,
    PRIMARY KEY (Id)
);

CREATE TABLE IF NOT EXISTS Comment
(
    Id      INT          NOT NULL,
    Comment VARCHAR(255) NOT NULL,
    User    INT          NOT NULL
);

CREATE TABLE IF NOT EXISTS Rating
(
    Id      INT NOT NULL,
    Rating  FLOAT NOT NULL,
    Comment INT NOT NULL
);

CREATE TABLE IF NOT EXISTS Items
(
    Id          INT          NOT NULL,
    Name        VARCHAR(255) NOT NULL,
    Price       FLOAT          NOT NULL,
    Description VARCHAR(255) NOT NULL,
    Photo       INT          NOT NULL,
    Category    INT          NOT NULL,
    Seller      INT          NOT NULL,
    Rating      INT          NOT NULL,
    PRIMARY KEY (Id)
);

CREATE TABLE IF NOT EXISTS Cart
(
    Id    INT NOT NULL,
    Items INT NOT NULL
);

CREATE TABLE IF NOT EXISTS Invoices
(
    Id      INT NOT NULL,
    Invoice INT NOT NULL,
    PRIMARY KEY (Id)
);

CREATE TABLE IF NOT EXISTS Invoice
(
    Id      INT  NOT NULL,
    Cart    INT  NOT NULL,
    Date  DATE NOT NULL,
    Payment INT  NOT NULL
);

CREATE TABLE IF NOT EXISTS User
(
    Id             INT          NOT NULL,
    Name           VARCHAR(255) NOT NULL,
    Login_info     INT          NOT NULL,
    Address        INT          NOT NULL,
    Photo          INT          NOT NULL,
    Commands       INT          NOT NULL,
    Cart           INT          NOT NULL,
    Invoices       INT          NOT NULL,
    Prefer_payment INT          NOT NULL,
    Rating         INT          NOT NULL,
    PRIMARY KEY (Id)
);

CREATE TABLE IF NOT EXISTS Auth
(
    Id INT NOT NULL,
    Token VARCHAR(200) NOT NULL,
    FOREIGN KEY (Id) REFERENCES User (Id)
);

CREATE TABLE IF NOT EXISTS Code_promo
(
    Code VARCHAR(50) NOT NULL,
    Diminution FLOAT NOT NULL,
    PRIMARY KEY (Code)
);