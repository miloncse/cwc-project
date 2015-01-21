# cwc-project
project for code warrior challenge 15


##################Configuration documentation###########


 #step 1
 Please define the default database name, user name,password in the database.php file,  path: application/config/database.php

example: 

$db['default']['username'] = 'postgres';
$db['default']['password'] = '1234';
$db['default']['database'] = 'db_cwc_project';
$db['default']['dbdriver'] = 'postgre'; //must be set to "postgre" as postgreSQL is used . 
 
 
 #step 2
Now import the  db_cwc_project.sql into the database.

Note: Make sure postgreSQL is installed in your pc, and the value of variable "$active_record" in database.php file is set to "TRUE".
  
