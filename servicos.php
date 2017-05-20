<?php

    require_once './model/servico.php';
/* 
 CRUD
 * C - Create
 * R - Read
 * U - Update
 * D - Delete
 */
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sistema PetShop | Serviços</title>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-static-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
            <a class="navbar-brand" href="/admin.php">Pet Shop</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="/servicos.php">Serviços</a></li>
            <li><a href="/funcionarios.php">Funcionários</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-12 col-md-12 main">
          <h1 class="page-header">Serviços
              <a class="btn btn-primary"href="/cadastro_servico.php"> Cadastrar </a>
          </h1>
            <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Código</th>
                  <th>Nome</th>
                  <th>Descrição</th>
                  <th>Preço</th>
                  <th>Ações</th>
                </tr>
              </thead>
              <tbody>
                <?php
                    $servicos = retornaServicos();
                    foreach ($servicos as $servico)
                    {
                ?>        
                  <tr>
                  <td><?php echo $servico['id']; ?></td>
                  <td><?php echo $servico['nome']; ?></td>
                  <td><?php echo $servico['descricao']; ?></td>
                  <td>R$ <?php echo $servico['preco']; ?></td>
                  <td>
                      <a href="" class="btn btn-info"> <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
                      <a href="" class="btn btn-danger"> <span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
                  </td>
                </tr>
                    <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
   </body>
</html>

