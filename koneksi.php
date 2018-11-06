<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'php-api';
$conn = new mysqli($servername,$username,$password,$database);
if ($conn->connect_error)
{
	die("Connection failed: <br>".$conn->connect_error);
}
echo "Connection Succes <br>";
?>