<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestão de alunos</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<?php
    require "config.php";

    $info =[];
    $sql = $pdo -> query("SELECT * FROM estudantes");
    if($sql->rowCount() > 0){
        $info = $sql -> fetchAll(PDO::FETCH_ASSOC);
    }
?>

<h1 style="color: #2d2d2d;">Gestão de Alunos</h1>

<?php
require "add_aluno.php";
?>

<table class="table-aluno">
    <tr class="header-alunos">
        <th>Id</th>
        <th>Nome</th>
        <th>Idade</th>
        <th>CPF</th>
        <th>Email</th>
        <th>Telefone</th>
        <th>Ação</th>
    </tr>
    <?php foreach($info as $aluno): ?>
        <tr class="aluno-info">
            <td><?=$aluno['id'];?></td>
            <td><?=$aluno['nome'];?></td>
            <td><?=$aluno['idade'];?></td>
            <td><?=$aluno['cpf'];?></td>
            <td><?=$aluno['email'];?></td>
            <td><?=$aluno['telefone'];?></td>
            <td class="alunos-btn">
                <a href="editar.php?id=<?=$aluno['id'];?>"><div class="edit-btn">Editar</div></a>
                <a href="excluir.php?id=<?=$aluno['id'];?>" onclick="return confirm('Tem certeza que deseja excluir <?=$aluno['nome']?>?')"><div class="delete-btn">Excluir</div></a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>

</body>
</html>