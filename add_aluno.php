<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    
<form method="POST" action="add_action.php">
    <label>
        Nome
        <input type="text" class="input name" name="name" placeholder="Nome Completo">
    </label>
    <label>
        Idade
        <input type="number" class="input age" name="age">
    </label>
    <label>
        CPF
        <input type="text" class="input cpf" name="cpf" placeholder="000.000.000-00">
    </label>
    <label>
        Email
        <input type="email" class="input email" name="email" placeholder="email@email.com">
    </label>
    <label>
        Telefone
        <input type="tel" class="input tel" name="tel" placeholder="(00) 0000 0000">
    </label>
    <input type="submit" class="add-btn" value="Adicionar">
</form>

</body>
</html>