<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minhas Metas</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/metas.css">
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
                    <a class="nav-link" href="../updateDados/update.php">Alterar cadastro</a>
                    <a class="nav-link active" aria-current="page" href="../metas/metas.php">Minhas Metas</a>
                    <form method="post" action="/controleDeMetas/controle/controle_cliente.php">
                        <input class="btn nav-link b1" type="submit" name="bt_sair" value="Sair">
                    </form>
                </div>
            </div>
        </div>
    </nav>

    <!--Container do conteúdo-->
    <div class="container">

        <div class="row alert" style="margin: 20px;">
            <div class="col-12 box">
                <h3 style="display: inline-block; margin: 0px;">Minhas Metas</h3>
                <img src="../img/plus.png" alt="" height="30" class="d-inline-block align-text-top modalCreateShow" style="margin-left: 10px;" type="button">
            </div>
        </div>

        <hr>

        <div class="alerta"></div>

        <!-- Cards Container-->
        <div class="row row-cols-1 row-cols-md-3 g-4 centro" style="margin-top: 10px;">
            <div class="col" style="width: 15rem; margin: 10px;">
                <div class="card h-100" type="button">
                    <div class="card-body">
                        <h5 class="card-title">10 mil reais de lucro no mês 10
                        </h5>
                        <p class="card-text">Conseguir margem de lucro de 10 mil reais em cima das vendas do mês de
                            outubro.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col" style="width: 15rem; margin: 10px;">
                <div class="card h-100" type="button">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a short card.</p>
                    </div>
                </div>
            </div>
            <div class="col" style="width: 15rem; margin: 10px;">
                <div class="card h-100" type="button">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to
                            additional content.</p>
                    </div>
                </div>
            </div>
            <div class="col" style="width: 15rem; margin: 10px;">
                <div class="card h-100" type="button">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to
                            additional content.</p>
                    </div>
                </div>
            </div>
            <div class="col" style="width: 15rem; margin: 10px;">
                <div class="card h-100" type="button">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to
                            additional content.</p>
                    </div>
                </div>
            </div>
            <div class="col" style="width: 15rem; margin: 10px;">
                <div class="card h-100" type="button">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to
                            additional content.</p>
                    </div>
                </div>
            </div>
            <div class="col" style="width: 15rem; margin: 10px;">
                <div class="card h-100" type="button">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to
                            additional content.</p>
                    </div>
                </div>
            </div>
            <div class="col" style="width: 15rem; margin: 10px;">
                <div class="card h-100" type="button">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to
                            additional content.</p>
                    </div>
                </div>
            </div>
            <div class="col" style="width: 15rem; margin: 10px;">
                <div class="card h-100" type="button">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to
                            additional content.</p>
                    </div>
                </div>
            </div>
        </div>

        <footer class="jumbotron" style="margin-top: 50px;">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-auto ">
                        <p>© Minhas Metas 2021</p>
                    </div>
                </div>
            </div>
        </footer>

        <!-- Modal -->
        <div id="meuModal" class="modal fade" role="dialog" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">

                <!-- Conteúdo do modal-->
                <div class="modal-content modalCss">

                    <!-- Cabeçalho do modal -->
                    <div class="modal-header">
                        <img src="img/trophy.png" style="width: 35px; margin-right: 10px;">
                        <h5 class="modal-title">10 mil reais de lucro no mês 10</h5>
                        <button type="button" class="btn close" style="padding-top: 0;"><img src="img/close.svg"></button>
                    </div>

                    <!-- Corpo do modal -->
                    <div class="modal-body body">
                        <p>Conseguir margem de lucro de 10 mil reais em cima das vendas do mês de outubro.</p>
                        <p>Tipo de progresso: Numérico</p>
                        <br>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%">
                            </div>
                        </div>
                        <div style="text-align: center;">
                            <p style="margin-top: 20px;">Você já atingiu 75% da sua meta!</p>
                        </div>
                    </div>

                    <!-- Rodapé do modal-->
                    <div class="modal-footer" style="flex-wrap: inherit;">
                        <div class="divButtonFooter">
                            <button type="button" class="btn buttonExcluirDanger rounded-circle" data-toggle="modal" data-target="#modalDelete" data-dismiss="modal"><img src="img/trash.svg"></button>
                        </div>
                        <div class="divButtonFooter">
                            <button type="button" class="btn buttonProgress">Adicionar progresso</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Modal -->
        <div id="modalDelete" class="modal fade" role="dialog" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">

                <!-- Conteúdo do modal-->
                <div class="modal-content modalCss">

                    <!-- Corpo do modal -->
                    <div class="modal-body body">
                        <button type="button" class="btn close" style="float: right;padding-top: 0;"><img src="img/close.svg"></button>

                        <p>Você tem certeza que quer apagar sua meta e todo o progresso dela?</p>
                    </div>
                    <div class="modal-footer" style="flex-wrap: inherit;">
                        <div class="divButtonFooter">
                            <button type="button" class="btn buttonExcluir" data-dismiss="modal" data-toggle="modal" data-target="#meuModal">Eu desisto</button>
                        </div>
                        <div class="divButtonFooter">
                            <button type="button" class="btn buttonDeleteSave">Estou decidido!</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal (Criar)-->
        <div id="modalCreate" class="modal fade" role="dialog" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">

                <!-- Conteúdo do modal-->
                <div class="modal-content modalCss">

                    <!-- Cabeçalho do modal -->
                    <div class="modal-header">
                        <h5 class="modal-title">Construa sua meta:</h5>
                        <button type="button" class="btn close" style="padding-top: 0;"><img src="img/close.svg"></button>
                    </div>

                    <!-- Corpo do modal -->
                    <form class="metas">
                        <div class="modal-body body">
                            <div class="form-group">
                                <label for="exampleInputText">O nome da minha meta é...</label>
                                <input class="form-control" type="text" placeholder="nome da meta" id="nameMeta" maxlength="45" required>
                            </div>
                            <div class="form-group">
                                <label for="selectType">O tipo da minha meta é...</label>
                                <select class="form-control" id="selectType" required>
                                    <option value="">Escolher...</option>
                                    <option value="number">Numérica</option>
                                    <option value="current">Moeda</option>
                                    <option value="qualitativa">Qualitativa</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <div class="formulario">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="description">Descrevendo a minha meta...</label>
                                <textarea class="form-control" id="description" rows="3" maxlength="160" required></textarea>
                            </div>
                        </div>

                        <!-- Rodapé do modal-->
                        <div class="modal-footer">
                            <input type="submit" class="btn buttonSaveMeta" name="salvar" value="Salvar">
                        </div>
                    </form>

                </div>
            </div>
        </div>

        <script src="../JQuery/jquery-3.6.0.js"></script>
        <script src="js/metas.js"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>

</html>