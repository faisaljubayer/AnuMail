# AnuMail
It is a project that you can use for University, School, College or science fair. This script is not for production purposes. 

### Download and watch the Video tutorial from the following link:

https://github.com/faisaljubayer/AnuMail/blob/master/video-1555506347.mp4

### System Requirements
1. WAMP Server 2.5.

### Steps to Consider:
1. Install WAMP Server 2.5
2. copy this project to wamp server/www
3. go to locahost/phpmyadmin from browser
4. Create a new database in phpmyadmin for example mailserver
5. In our database go to Import section in phpmyadmin.
6. Then import the zip file located in this source code's db folder and click Go. Your database should be created automatically now. 
7. Then open connection.php in the source code.
8. Edit the following line:
mysql_select_db("mailserver",$con);

From the above code replace "mailserver" with the name of database that you created earlier in phpmyadmin.
9. Your Mailing Service project should be created without any problem.
10. Enjoy !
