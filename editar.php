<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<?php
require "config.php";

    $aluno = [];
    $id = filter_input(INPUT_GET, "id");

    if($id){
        $sql = $pdo -> prepare("SELECT * FROM estudantes WHERE id = :id");
        $sql -> bindValue(":id", $id);
        $sql -> execute();

        if($sql -> rowCount() > 0){
            $aluno = $sql -> fetch(PDO::FETCH_ASSOC);
        }else{
            header("location: index.php");
            exit;
        }
    }else{
        header("location: index.php");
        exit;
    }

?>

<h1 style="color: #2d2d2d;">Editar Aluno</h1>
<form method="POST" action="editar_action.php">
    <input type="hidden" name="id" value="<?=$aluno['id'];?>">
    <label>
        Nome
        <input type="text" class="input name" name="name" value="<?=$aluno['nome'];?>">
    </label>
    <label>
        Idade
        <input type="number" class="input age" name="age" value="<?=$aluno['idade'];?>">
    </label>
    <label>
        CPF
        <input type="text" class="input cpf" name="cpf" value="<?=$aluno['cpf'];?>">
    </label>
    <label>
        Email
        <input type="email" class="input email" name="email" value="<?=$aluno['email'];?>">
    </label>
    <label>
        Telefone
        <input type="tel" class="input tel" name="tel" value="<?=$aluno['telefone'];?>">
    </label>
    <input type="submit" class="add-btn" value="Salvar">
</form>

</body>
</html>