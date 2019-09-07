<?php

session_start();

$dsn = 'mysql:dbname=tv;host=localhost';
$user = 'root';
$password = '8048963413';

try {
    $dbh = new PDO($dsn, $user, $password);
    $count = $dbh->exec("INSERT INTO shows (Show_Id,Name,Info) values('$id','$name','$info');");
    echo $count ? "Item added successfully" : "Item addition failed";
} catch (PDOException $e) {
    echo 'Failed: ' . $e->getMessage();
}
?>