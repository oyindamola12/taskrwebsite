<?php
$host = 'localhost';
$username = 'root';
$password='';
$dbname = 'TaskamWebsite';

$dsn = 'mysql:host ='.$host.";dbname=".$dbname;
$pdo = new PDO ($dsn,$username,$password );
$pdo = setAttribute(PDO::ATTR_DEFAULT_FETCH-MODE, PDO::FETCHOBJ);
?>