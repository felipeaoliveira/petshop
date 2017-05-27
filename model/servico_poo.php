<?php

class Servico
{
    private $host = "localhost";
    private $database = "petshop";
    private $usuario = "root";
    private $senha = "elaborata";

    private function conecta()
    {
    $con = new PDO('mysql:host='.$this->host.';dbname='.$this->database.";charset=UTF8", $this->usuario, $this->senha);
    return $con;
    }

    /**
     * 
     * @return type
     */
    public function retornaServicos()
    {
        $con = $this->conecta();

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
    public function CadastraServico ($nome, $descricao, $valor)
    {
        $con = $this->conecta();

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
    public function DeletaServico ($id)
    {
        $con = $this->conecta();

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
     public function getServico ($id)
    {
        $con = $this->conecta();

        $sql = "SELECT * FROM servico WHERE id = $id";
        $retorno = $con->query($sql);
        $vetor = $retorno->fetch(PDO::FETCH_ASSOC);

        return $vetor;
    }
    /**
     * Atualiza as informações do serviço
     * @param int $id
     * @param string $nome
     * @param string $descricao
     * @param float $valor
     */
    public function atualizaServico($id, $nome, $descricao, $valor)
    {
        $con = $this->conecta();

        $sql = "UPDATE servico SET "
                . "nome = '$nome', "
                . "descricao = '$descricao', "
                . "preco = '$valor' "
                . "WHERE servico.id = '$id'";

        $retorno = $con->exec($sql);
        return $retorno;
    }
}