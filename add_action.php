<?php

require "config.php";

$name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_STRING);
$age = filter_input(INPUT_POST, "age", FILTER_VALIDATE_INT);
$cpf = filter_input(INPUT_POST, "cpf",);
$email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
$tel = filter_input(INPUT_POST, "tel");

if($name && $age && $cpf && $email){

    $sql = $pdo -> prepare("SELECT * FROM estudantes WHERE email = :email");
    $sql -> bindValue(":email", $email);
    $sql -> execute();

    if($sql -> rowCount() === 0){

        $sql = $pdo -> prepare("INSERT INTO estudantes (nome, idade, cpf, email, telefone) VALUES (:name, :age, :cpf, :email, :tel)");
        $sql -> bindValue(":name", $name);
        $sql -> bindValue(":age", $age);
        $sql -> bindValue(":cpf", $cpf);
        $sql -> bindValue(":email", $email);
        $sql -> bindValue(":tel", $tel);
        $sql -> execute();

    }
}

header("location: index.php");
exit;