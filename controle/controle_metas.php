<?php
include_once('../modelo/metas.php');
include_once('../modelo/metasDAO.php');

$metasDAO = new metasDAO();

$progressCurrent = 0;

if (isset($_POST['salvar'])) {
    if (!isset($_POST['progressCurrent'])) {
        $_POST['progressCurrent'] = $progressCurrent;
        $metasDAO->cadastrarMetas($_POST['nameMeta'], $_POST['selectType'], $_POST['progressCurrent'], $_POST['description'], $_POST['id_cliente']);
    } else {
        $metasDAO->cadastrarMetas($_POST['nameMeta'], $_POST['selectType'], $_POST['progressCurrent'], $_POST['description'], $_POST['id_cliente']);
    }
}

if (isset($_POST['bt_excluir'])) {
        $metasDAO->excluir($_POST['id_meta']);
}