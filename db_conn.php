<?php

$sname= "localhost";
$usernmae= "root";
$password = "";

$db_name = "looging_system";

$conn = mysqli_connect($sname, $usernmae, $password, $db_name);

if (!$conn) {
	echo "Connection Failed Badly!";
}