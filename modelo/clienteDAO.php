<?php
class clienteDAO
{
    function cadastrar($nome, $empresa, $email, $telefone, $senha)
    {
        try {
            $pdo = new PDO('mysql:host=localhost;dbname=controledemetas', "root", "");
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = $pdo->prepare('INSERT INTO clientes (nome,empresa,email,telefone,senha) VALUES(:nome,:empresa,:email,:telefone,:senha)');
            $stmt->execute(array(
                ':nome' => "$nome", ':empresa' => "$empresa", ':email' => "$email", ':telefone' => "$telefone", ':senha' => "$senha"
            ));
            echo "<script>alert('Cadastrado com sucesso!');
            window.location = '../visao/login/login.php';
            </script>";
        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

    function login($email, $senha)
    {
        include_once("../modelo/cliente.php");
        if ($email == '' || $senha == '') {
            echo "<script>alert('Usuário ou senha vazios!')
            window.location = '../visao/login/login.php';
            </script>";
        } else {

            $pdo  = new PDO("mysql:host=localhost;dbname=controledemetas", "root", "");
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $consulta = $pdo->query("SELECT id, nome, empresa, email, telefone, senha FROM clientes WHERE email = '$email' AND senha = '$senha'");
            $total_retornado = $consulta->rowCount();


            if ($total_retornado  === 0) {
                echo "<script>alert('Usuário ou senha invalido')
                window.location = '../visao/login/login.php';
                </script>";
            } else {
                $linha = $consulta->fetch(PDO::FETCH_ASSOC);
                $cliente = new cliente($linha['id'], $linha['nome'], $linha['empresa'], $linha['email'], $linha['telefone'], $linha['senha']);
                if ($cliente->getEmail() == $email && $cliente->getSenha() == $senha) {
                    // Inicia a sessão
                    session_start();
                    // Cria variáveis de sessão da sessão e atribui os valores recebidos por parâmetro
                    $_SESSION['id'] = $cliente->getId();
                    $_SESSION['nome'] = $cliente->getNome();
                    $_SESSION['empresa'] = $cliente->getEmpresa();
                    $_SESSION['email'] = $cliente->getEmail();
                    $_SESSION['telefone'] = $cliente->getTelefone();
                    $_SESSION['senha'] = $cliente->getSenha();
                    // Verifica se a sessão do usuário está vazia
                    if (empty($_SESSION['email']) && empty($_SESSION['senha'])) {
                        // Ação a ser executada: mata o script e manda uma mensagem
                        exit('Usuário ou senha vazio');
                        // Verifica se os valores das variáveis de sessão são iguais aos valores de teste
                    } elseif (($_SESSION['email'] != $email) || ($_SESSION['senha'] != $senha)) {
                        // Ação a ser executada: mata o script e manda uma mensagem
                        exit('Usuário ou senha não encontrado.');
                    } else {
                        echo "<script>alert('Wellcome!')</script>";
                        // Direciona para a página inicio.php
                        header("Location:../visao/home/index.php");
                    }
                } else {
                    echo "<script>alert('Email ou senha invalido!')</script>";
                }
            }
        }
    }

    function Logout()
    {
        session_start();
        session_destroy();
        unset($_SESSION);
        header("Location:../visao/login/login.php");
    }
}
