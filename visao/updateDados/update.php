<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/update.css">
</head>

<body>
    <form method="post" action="/controleDeMetas/controle/controle_cliente.php">
        <h3>Alteração de dados</h3>
        <input type="text" name="empresa" placeholder="Digite o nome da empresa" required />
        <input type="email" name="email" placeholder="Digite seu email" required />
        <input type="text" id="telefone" name="telefone" placeholder=" Tel. formato: 11 99999-9999" required>
        <input type="password" name="senha" placeholder="Digite a senha" required /> <br><br>
        <input type="submit" name="bt_update" value="Enviar">
        <br><br>
    </form>

    <script src="/JQuery/jquery-3.6.0.js"></script>
    <script src="js/cadastro.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>

</html>