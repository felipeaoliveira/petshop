<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Dashboard Template for Bootstrap</title>
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
    </head>

    <body>

    <?php
        include './template/topoadmin.php';
    ?>

        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12 col-md-12 main">
                    <h1 class="page-header">
                        <?php if ($_SERVER["PHP_SELF"] == "/cadastro_servico.php"): ?>
                            Cadastrar Novo Serviço
                        <?php else: ?>
                            Alterar Serviço
                        <?php endif; ?>
                    </h1>
                    <div>
                        <?php if(isset($erro_msg) == true): ?>
                            <div class="alert alert-danger" role="alert"><?php echo $erro_msg; ?> </div>
                            <?php endif; ?>
                        <form class="form-horizontal" action="<?php echo $_SERVER["PHP_SELF"] ?>" method="POST">
                            <fieldset>

                                <!-- Form Name -->
                                <legend>Cadastro</legend>

                                <!-- Text input-->
                                <div class="form-group <?php echo ($erro_nome == true)? "has-error" : ""; ?>" >
                                    <label class="col-md-4 control-label" for="Nome">Nome do Serviço</label>  
                                    <div class="col-md-4">
                                        <input id="Nome" name="Nome" type="text" placeholder="" class="form-control input-md" required="">

                                    </div>
                                </div>

                                <!-- Textarea -->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="Descricao">Descrição</label>
                                    <div class="col-md-4">                     
                                        <textarea class="form-control" id="Descricao" name="Descricao"></textarea>
                                    </div>
                                </div>

                                <!-- Text input-->
                                <div class="form-group <?php echo ($erro_preco == true)? "has-error" : ""; ?>" >
                                    <label class="col-md-4 control-label" for="Preco">Preço</label>  
                                    <div class="col-md-4">
                                        <input id="Preco" name="Preco" type="text" placeholder="" class="form-control input-md">

                                    </div>
                                </div>

                                <!-- Button -->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="Salvar"></label>
                                    <div class="col-md-4">
                                        <button id="Salvar" name="Salvar" class="btn btn-primary">Salvar</button>
                                    </div>
                                </div>

                            </fieldset>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </body>
</html>

