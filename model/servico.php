<?php

require_once 'config.php';

/*
 * 1 - conexão
 * 2 - envia SQL
 * 3 - trato o retorno
 */

function retornaServicos()
{
    $con = new PDO('mysql:host='.HOST.';dbname='.DATABASE, NOME, SENHA);

    $sql = "SELECT * FROM servico";
    
    $retorno = $con->query($sql);
    
    $vetor = $retorno->fetchAll(PDO::FETCH_ASSOC);
    return $vetor;
}