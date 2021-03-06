<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/login.css">

</head>

<body>
    <form method="post" action="/controleDeMetas/controle/controle_cliente.php">
        <img src="../img/goal.png" width="80px">
        <input type="email" name="email" placeholder="Digite seu email" required />
        <input type="password" name="senha" placeholder="Digite a senha" required />
        <input type="submit" class="btn" name="bt_logar" value="Login">
        <hr>
        <h5>Ainda não tem uma conta?</h5>
        <a href="../cadastro/cadastro.php" style="display: block;">
            <input class="btn" type="button" value="Criar conta">
        </a>
    </form>
    <script src="../JQuery/jquery-3.6.0.js"></script>
    <script src="js/login.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>

</html>