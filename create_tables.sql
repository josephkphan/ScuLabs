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


INSERT INTO  User(Email, Pass, Name, Type, MonLab1, MonLab2, MonLab3, TueLab1, TueLab2, TueLab3, WedLab1, WedLab2, WedLab3, ThuLab1, ThuLab2, ThuLab3, FriLab1, FriLab2, FriLab3)
VALUES ('jphan123@scu.edu','admin', 'Joey Phan', 'TA', 'Available', 'Available', 'Available', 'Available', 'Available', 'Available', 'Available', 'Available', 'Available', 'Available', 'Available', 'Available', 'Available', 'Available', 'Available' );

INSERT INTO  User(Email, Pass, Name, Type, MonLab1, MonLab2, MonLab3, TueLab1, TueLab2, TueLab3, WedLab1, WedLab2, WedLab3, ThuLab1, ThuLab2, ThuLab3, FriLab1, FriLab2, FriLab3)
VALUES ('cmaggio123@scu.edu','admin', 'Carl Maggio', 'TA', 'Available', 'Available', 'Available', 'Available', 'Available', 'Available', 'Available', 'Available', 'Available', 'Available', 'Available', 'Available', 'Available', 'Available', 'Available' );

INSERT INTO  User(Email, Pass, Name, Type, MonLab1, MonLab2, MonLab3, TueLab1, TueLab2, TueLab3, WedLab1, WedLab2, WedLab3, ThuLab1, ThuLab2, ThuLab3, FriLab1, FriLab2, FriLab3)
VALUES ('kduddi123@scu.edu','admin', 'Kirti Duddi', 'TA', 'Available', 'Not Available', 'Not Available', 'Not Available', 'Not Available', 'Not Available', 'Not Available', 'Not Available', 'Not Available', 'Not Available', 'Not Available', 'Not Available', 'Not Available', 'Not Available', 'Not Available' );

INSERT INTO  User(Email, Pass, Name, Type, MonLab1, MonLab2, MonLab3, TueLab1, TueLab2, TueLab3, WedLab1, WedLab2, WedLab3, ThuLab1, ThuLab2, ThuLab3, FriLab1, FriLab2, FriLab3)
VALUES ('admin','admin', 'System Admin', 'Admin', 'Available', 'Not Available', 'Not Available', 'Not Available', 'Not Available', 'Not Available', 'Not Available', 'Not Available', 'Not Available', 'Not Available', 'Not Available', 'Not Available', 'Not Available', 'Not Available', 'Not Available' );



CREATE TABLE EnabledUser (
    Email varchar(255)  PRIMARY KEY
);

INSERT INTO  EnabledUser(Email)
VALUES ('jphan123@scu.edu');

INSERT INTO  EnabledUser(Email)
VALUES ('admin');
