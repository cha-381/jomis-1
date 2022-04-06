<?php

$servername = 'localhost';
$username = 'root';
$password = '1234';
$db = 'jo';

$conn = mysqli_connect($servername,$username,$password,$db) ;

if (!$conn)
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>
