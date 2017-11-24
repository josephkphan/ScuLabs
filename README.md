# ScuLabs

## Problem
With only 15 classes and rougly 20 TAs at Santa Clara University. It becomes a challenge for TAs to find another TA 
to cover their session. This system provides a solution to this problem. Rather than using Google Calendar 
(which requires every TA to use it and keep it updated) or SMS (blindly attempting to contact any TA) or Google sheets(
doesn't have any security on the page). Our solution, SCU Labs, will solve this problem, covering all the holes in the
current solutions addressed.

## Overview
The purpose of this project is to create a TA Contact System. 
TAs can create an account (which must be enabled by an admin), but can then enter a TA Portal.
In this portal, TAs can find other available TAs at a given lab time frame in order to contact them.

## How this addresses the problem
- Provides a simple, easy way to find TA contact information
- Managable as it generalizes to a weekly schedule - less work on TAs
- A web application and database can provide levels of security. 

## Design Document
https://docs.google.com/document/d/1A30oIRoH-Z7dPshtrAsQaG2797Zi0w4CIedi6BjtSyc/edit?usp=drive_web


## Screenshot
#### Login Page
![alt text](https://raw.githubusercontent.com/josephkphan/ScuLabs/master/images/screenshot_login.png)
#### Registration Page
![alt text](https://raw.githubusercontent.com/josephkphan/ScuLabs/master/images/screenshot_register.png)
#### TA Home Page
![alt text](https://raw.githubusercontent.com/josephkphan/ScuLabs/master/images/screenshot_home.png)
#### TA Availability Page
![alt text](https://raw.githubusercontent.com/josephkphan/ScuLabs/master/images/screenshot_avail.png)
#### Admin Page
![alt text](https://raw.githubusercontent.com/josephkphan/ScuLabs/master/images/screenshot_admin.png)



# Setup 
### Getting Source Code
1. Clone Github Source code \
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; `	git clone https://github.com/josephkphan/ScuLabs.git`

### Setting up SCU MySQL5 Database:
1. Send an email to support@engr.scu.edu to request a mysql 5 account.
2. After completion, your database will be in format sdb_<username> and your username  would be named sdb_<school_username>
3. Install mySQL5 into your school user account: \
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; `setup mysql5 ` 
4. Enter MySQL5 CLI \
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; `mysql -h dbserver.engr.scu.edu -p -u <username> <db_name>`
5. Create Database Tables \
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Copy contents of file “createdb.sql” into the CLI 
6. Add Test Data \
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Copy contents of “insert_test_users.sql into CLI to create test users

### Reset Database:
1. Enter MySQL5 CLI \
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; `mysql -h dbserver.engr.scu.edu -p -u <username> <db_name>`
2. Delete Database Tables \
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Copy contents of file “drop.sql” into the CLI 
3. Add Test Data \
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Copy contents of “insert_test_users.sql into CLI to create test users

### Setting up Web Application:
1. Make sure your have an scu webpages: \
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	`webpage` \
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; type in ‘5’ to check if you have a webpage enabled. Otherwise hit ‘1’ to request a webpage to be created
2. Copy source code files into your webpages (inside the ScuLabs directory) \
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;		`scp * <Username>@linux.scudc.scu.edu:/webpages/<Username>/` 
3. Check to see if files are accessible publicly \
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;		`ls -lh`
4. Change credentials \
   $servername = "************"; \
   $username = "***********"; \
   $password = "***********"; \
   $db_name  = "***********"; \
   $conn = new mysqli($servername, $username, $password, $db_name); \ 
   
   Change the above lines of code in all .php files to match your credentials.

5. View your webpage on http://students.engr.scu.edu/~<Username>/login.php