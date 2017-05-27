<?php

require_once '../model/servico_poo.php';

$servico = new Servico();
$status = $servico->deletaServico($_GET['id']);

if ($status != false)
{
    header("Location: /servicos.php");
}