<?php
    require_once './model/servico_poo.php';
    
    $servico = new Servico();
    
    $erro_nome = false;
    $erro_preco = false;
    
    if(count($_POST) > 0)
    {
        // Verifica se o campo foi preenchido
        if ($_POST["Nome"] == "")
        {
            $erro_msg = "O campo nome é obrigatório";
            $erro_nome = true;
        } elseif ($_POST["Preco"] == "")
        {
                $erro_msg = "O campo preço é obrigatório";
                $erro_preco = true;
        }
            // Se todos foram preenchidos
         else
        {
            $status = $servico->CadastraServico($_POST['Nome'], $_POST['Descricao'], $_POST['Preco']);

            if ($status != FALSE)
            {
                // Caso for inserido no BD com sucesso
                header("Location: servicos.php");
            } else {
                $erro_msg = "Não foi possível adicionar o serviço";
            }
        }
    }
/*
  CRUD
 * C - Create
 * R - Read
 * U - Update
 * D - Delete
 */
    
include './template/form_servico.php';
    
?>