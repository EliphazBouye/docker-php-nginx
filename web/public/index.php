<?php

$pdo = new PDO('mysql:host=mysql;dbname=test_db', 'samuel', 'secret');

$query = $pdo->query('SHOW VARIABLES like "version"');

$row = $query->fetch();

echo 'MySql version:' . $row['Value'];