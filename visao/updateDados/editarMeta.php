<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minhas Metas</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/update.css">
    <?php
    session_start();
    if (empty($_SESSION['email']) && empty($_SESSION['senha'])) {
        header("Location:../login/login.php");
        echo "<script>alert('Não foi possível fazer login,usuário ou senha inválidos')</script>";
    }
    ?>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <img src="../img/goal.png" alt="" height="60" class="d-inline-block align-text-top" style="margin-left: 5px;">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Navbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="Navbar">
                <div class="navbar-nav">
                    <a class="nav-link" href="../home/index.php">Pagina Inicial</a>
                    <a class="nav-link" aria-current="page" href="../metas/metas.php">Minhas Metas</a>
                    <form method="post" action="/controleDeMetas/controle/controle_cliente.php">
                        <input class="btn nav-link b1" type="submit" name="bt_sair" value="Sair">
                    </form>
                </div>
            </div>
        </div>
    </nav>

    <!--Container do conteúdo-->

    <?php

    include_once("/xampp/htdocs/controleDeMetas/modelo/metas.php");
    $id_meta = unserialize($_SESSION['obj_metas'])->getId_meta();
    $nome_meta = unserialize($_SESSION['obj_metas'])->getNome_meta();
    $tipo_meta = unserialize($_SESSION['obj_metas'])->getTipo_meta();
    $valor_meta = unserialize($_SESSION['obj_metas'])->getValor_meta();
    $desc_meta = unserialize($_SESSION['obj_metas'])->getDesc_meta();
    $id_cliente = unserialize($_SESSION['obj_metas'])->getId_cliente();
    ?>
    <div id="container">
        <form method="post" action="/controleDeMetas/controle/controle_metas.php">
            <div class="form-group">
                <div class="col-12 col-sm-6">
                    <label for="nome" class="form-label">Nome da Meta</label>
                    <input type="text" class="form-control" name="nome_meta" id="nome_meta" value="<?php echo $nome_meta ?>" required>
                </div>
            </div>

            <div class="form-group">
                <div class="col-12 col-sm-6">
                    <label for="email" class="form-label">Tipo da Meta</label>
                    <select class="form-control" id="selectType" name="selectType">
                        <option value=""><?php echo $tipo_meta ?></option>
                        <option value="">Escolher...</option>
                        <option value="number">Numérica</option>
                        <option value="current">Moeda</option>
                        <option value="qualitativa">Qualitativa</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <div class="col-12 col-sm-6">
                    <label for="description" class="form-label">Descrição da Meta</label>
                    <textarea class="form-control" id="description" name="description" rows="3" maxlength="160" required><?php echo $desc_meta ?></textarea>
                </div>
            </div>

            <div class="form-group">
                <div class="col-12">
                    <input type='hidden' name='id_meta' value="<?php echo $id_meta ?>" />
                    <input type='hidden' name='valor_meta' value="<?php echo $valor_meta ?>" />
                    <input type='hidden' name='id_cliente' value="<?php echo $id_cliente ?>" />
                    <input type="submit" name="salvar_alteracao" value="Salvar Alteração" class="btn btn-success mr-2">
                    <a href='../metas/metas.php' class='btn mr-2' role='button'>Voltar</a>
                </div>
            </div>

        </form>
    </div>

    <script src="../JQuery/jquery-3.6.0.js"></script>
    <script src="js/metas.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>