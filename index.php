<?php 

require('queryBuider.php');

$pdo = new PDO("mysql:host=localhost;dbname=$dbname", "$user_login", "$user_psw");

$data = new queryBuilder($pdo);

$data->get_all($table);