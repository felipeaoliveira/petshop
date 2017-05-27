<?php

require_once './model/servico_poo.php';

$servico = new Servico();

$erro_nome = false;
$erro_preco = false;

if (count($_POST) > 0)
{
    // salva a alteração no BD
    $status = $servico->atualizaServico($_POST['id'], $_POST['Nome'], $_POST['Descricao'], $_POST['Preco']);
    header("Location: /servicos.php");
//var_dump($_POST);
} else
{
    $valores = $servico->getServico($_GET['id']);
    include './template/form_servico.php';
}
