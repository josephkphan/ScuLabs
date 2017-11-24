CREATE TABLE User (
    Email varchar(255)  PRIMARY KEY,
    Pass varchar(255) NOT NULL,
    Name varchar(255),
    Type varchar(255),
    MonLab1 varchar(255),
    MonLab2 varchar(255),
    MonLab3 varchar(255),
    TueLab1 varchar(255),
    TueLab2 varchar(255),
    TueLab3 varchar(255),
    WedLab1 varchar(255),
    WedLab2 varchar(255),
    WedLab3 varchar(255),
    ThuLab1 varchar(255),
    ThuLab2 varchar(255),
    ThuLab3 varchar(255),
    FriLab1 varchar(255),
    FriLab2 varchar(255),
    FriLab3 varchar(255)
);


CREATE TABLE EnabledUser (
    Email varchar(255)  PRIMARY KEY
);
