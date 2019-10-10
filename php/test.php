<?php

$conn = new mysqli('db', 'test', 'test', 'test');
$result = $conn->query('SELECT * FROM test');
$row = $result->fetch_assoc();
print_r($row[0]);
$conn->close();
