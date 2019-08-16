<?php
$host = 'db';
$user = 'devuser';
$password = 'devpass';
$db = 'test_db';

$conn = new mysqli($host, $user, $password, $db);

if ($conn->connect_error){
	echo 'erro connecting to mysql';
}

echo 'Mysql connection succesful';
?>
