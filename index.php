<?php


$host = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "my_first_db";

$connection = new mysqli($host, $db_username, $db_password, $db_name);

$sql_query = "SELECT * FROM users WHERE id > 5";

$response = $connection->query($sql_query);

$data = $response->fetch_all(MYSQLI_NUM);

echo "<pre>";
var_dump($data);
echo "</pre>";

