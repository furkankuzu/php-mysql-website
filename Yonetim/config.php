<?php
date_default_timezone_set('Europe/Istanbul');
error_reporting(E_ALL);

/* DATABASE Ayarları */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'u9648068_db2020');
define('DB_PASSWORD', '_ry};%dJK$hb');
define('DB_DATABASE', 'u9648068_db2020');

function getDB() 
{
$dbhost=DB_SERVER;
$dbuser=DB_USERNAME;
$dbpass=DB_PASSWORD;
$dbname=DB_DATABASE;
try {
$dbConnection = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass); 
$dbConnection->exec("set names utf8");
$dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
return $dbConnection;
}
catch (PDOException $e) {
echo 'Connection failed: ' . $e->getMessage();
}

}


?>