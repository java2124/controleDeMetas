<?php
include_once('../modelo/cliente.php');
include_once('../modelo/clienteDAO.php');

$clienteDAO = new ClienteDAO();

if (isset($_POST['bt_cadastrar'])) {
    $clienteDAO->cadastrar($_POST['nome'], $_POST['empresa'], $_POST['email'], $_POST['telefone'], $_POST['senha']);
}

if (isset($_POST['bt_logar'])) {
    $clienteDAO->login($_POST['email'], $_POST['senha']);
}

if (isset($_POST['bt_sair'])) {
    $clienteDAO->Logout();
}
if (isset($_POST['bt_update'])) {
    $clienteDAO->update($_POST['id']);
}