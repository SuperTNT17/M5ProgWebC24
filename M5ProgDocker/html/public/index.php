<?php


include_once("../source/database.php");

$connection = database_connect();

$result = $connection->query("SELECT * from book");

print_r($result->fetch_all());
