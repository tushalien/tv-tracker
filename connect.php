<?php

$db_host		= 'localhost';
$db_user		= 'root';
$db_pass		= '8048963413';
$db_database		= 'tv1'; 

$link = @mysql_connect($db_host,$db_user,$db_pass) or die('Unable to establish a DB connection');

mysql_query("SET NAMES 'utf8'");
mysql_select_db($db_database,$link);

?>