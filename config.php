<?php

$db_server = "localhost";
$db_name = "alunos";
$db_user = "root";
$db_pass = "";

$pdo = new PDO("mysql:host=$db_server; dbname=$db_name", $db_user, $db_pass);