<?php
require "config.php";

$id = filter_input(INPUT_POST, "id");
$name = filter_input(INPUT_POST, "name");
$age = filter_input(INPUT_POST, "age", FILTER_VALIDATE_INT);
$cpf = filter_input(INPUT_POST, "cpf");
$email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
$tel = filter_input(INPUT_POST, "tel");

if($id && $name && $age && $cpf && $email){
    $sql = $pdo -> prepare("UPDATE estudantes SET nome = :name, idade = :age, cpf = :cpf, email = :email, telefone = :tel WHERE id = :id");
    $sql -> bindValue(":id", $id);
    $sql -> bindValue(":name", $name);
    $sql -> bindValue(":age", $age);
    $sql -> bindValue(":cpf", $cpf);
    $sql -> bindValue(":email", $email);
    $sql -> bindValue(":tel", $tel);
    $sql -> execute();
}else{
    header("location: index.php");
    exit;
}

header("location: index.php");
exit;