SELECT MonLab1, MonLab2, MonLab3, TueLab1, TueLab2, TueLab3, WedLab1, WedLab2, WedLab3, ThuLab1, ThuLab2, ThuLab3, FriLab1, FriLab2, FriLab3, Name, Email FROM Users;

SELECT Email, Name FROM Users WHERE Type='TA' AND MonLab1='Available';

SELECT * FROM Users


UPDATE User Set MonLab1="Not Available" WHERE Email="jphan123@scu.edu";
