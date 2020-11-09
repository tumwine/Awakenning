<?php

$host = "umabrisfx8afs3ja.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$user = "hzwhr1kkj9flbtj3";
$pass = "b639582ngy93stq9";
$db_name ="uf68dny9zi9edgh9";

$conn = new MySQLi($host,$user,$pass,$db_name);

if($conn->connect_error) {
	die("Database connection error".$conn->connect_error);
}
