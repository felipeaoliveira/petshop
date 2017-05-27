<?php

require_once './model/servico.php';
    $erro_nome = false;
    $erro_preco = false;
$valores = getServico($_GET['id']);

include './template/form_servico.php';