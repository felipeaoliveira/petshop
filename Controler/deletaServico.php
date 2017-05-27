<?php

require_once '../model/servico.php';

$status = deletaServico($_GET['id']);

if ($status != false)
{
    header("Location: /servicos.php");
}