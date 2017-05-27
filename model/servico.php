<?php

require_once 'config.php';

/*
 * 1 - conexão
 * 2 - envia SQL
 * 3 - trato o retorno
 */

/**
 * Conecta ao banco de dados
 * @return \PDO
 */
function conecta()
{
    $con = new PDO('mysql:host='.HOST.';dbname='.DATABASE.";charset=UTF8", NOME, SENHA);
    return $con;
}

/**
 * 
 * @return type
 */
function retornaServicos()
{
    $con = conecta();

    $sql = "SELECT * FROM servico";
    
    $retorno = $con->query($sql);
    
    $vetor = $retorno->fetchAll(PDO::FETCH_ASSOC);
    return $vetor;
}

/**
 * 
 * @param type $nome
 * @param type $descricao
 * @param type $valor
 * @return type
 */
function CadastraServico ($nome, $descricao, $valor)
{
    $con = conecta();
    
    $sql = "INSERT INTO servico (nome, descricao, preco) 
            VALUES ('$nome', '$descricao', '$valor')";
    $retorno = $con->exec($sql);
    return $retorno;
}

/**
 * Deleta o registro do serviço
 * @param int $id
 * @return int
 */
function DeletaServico ($id)
{
    $con = conecta();
    
    $sql = "DELETE FROM servico "
            . "WHERE id = $id";
    $retorno = $con->exec($sql);
    return $retorno;
}
 /**
  * Obtem o serviço selecionado
  * @param int $id
  * @return array
  */
function getServico ($id)
{
    $con = conecta();
    
    $sql = "SELECT * FROM servico WHERE id = $id";
    $retorno = $con->query($sql);
    $vetor = $retorno->fetch(PDO::FETCH_ASSOC);
    
    return $vetor;
}