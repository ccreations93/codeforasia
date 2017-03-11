<?php

DEFINE ('DBUSER', 'overse18_bgri890'); 
DEFINE ('DBPW', 'SB576p7!Z@'); 
DEFINE ('DBHOST', 'localhost'); 
DEFINE ('DBNAME', 'overse18_bgri890'); 

$dbc = mysqli_connect(DBHOST,DBUSER,DBPW);
if (!$dbc) {
    die("Database connection failed: " . mysqli_error($dbc));
    exit();
}

$dbs = mysqli_select_db($dbc, DBNAME);
if (!$dbs) {
    die("Database selection failed: " . mysqli_error($dbc));
    exit(); 
}

?>