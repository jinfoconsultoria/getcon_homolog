<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CadEndereco $cadEndereco
 */
?>
<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <!-- Meta tags Obrigatórias -->
        <title>GestCCon</title>
        <!-- <link rel="icon" href="https://getbootstrap.com/docs/4.1/assets/img/favicons/favicon-32x32.png" /> -->
        <meta charset="utf-8" />
        <meta name="author" content="AgenciaLMG" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

        <!-- Bootstrap CSS -->
        <!-- <link rel="stylesheet" href="../../../assets/lib/bootstrap/css/bootstrap.min.css" /> -->

        <!-- Font Awesome -->
        <!-- <link href="https://pro.fontawesome.com/releases/v5.13.0/css/all.css" rel="stylesheet" /> -->
        <!-- <link href="../../../assets/fontawesome/css/all.css" rel="stylesheet" /> -->

        <!-- <link href="../../../assets/lib/uploader/css/croppie.css" rel="stylesheet" /> -->
        <!-- <link rel="stylesheet" href="../../../assets/lib/simplebar/simplebar.css" /> -->
        <!-- <link href="../../../assets/lib/toastr/build/toastr.css" rel="stylesheet" /> -->

        <!-- Estilos -->
        <!-- <link rel="stylesheet" href="../../../assets/css/components.css" /> -->
        <link rel="stylesheet" href="../../assets/css/estilo.css" />
    </head>  
    <body>
        <div class="row cadCondominios index content">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <?= $this->Html->link(__('Buscar'), ['action' => 'index']) ?>
                </li>
                <li class="nav-item">
                    <?= $this->Html->link(('Cadastro'), ['action' => 'add'], ['class' => 'button ']) ?>
                </li>
                <li class="nav-item">
                    <a class="button disabled" aria-disabled="true">Editar</a>
                </li>
            </ul>
        </div>
        <div class="row index content">
            <div class="column-responsive column-80">
                <div class="cadEnderecos form content">
                    <?= $this->Form->create($cadEndereco) ?>
                    <fieldset>
                        <legend><?= __('Cadastrar Endereço') ?></legend>
                        <?php
                            echo $this->Form->control('cep');
                            echo $this->Form->control('logradouro');
                            echo $this->Form->control('numero');
                            echo $this->Form->control('bairro');
                            echo $this->Form->control('tipo_logradouro');
                            echo $this->Form->control('cidade');
                            echo $this->Form->control('estado');
                            echo $this->Form->control('status');
                        ?>
                    </fieldset>
                    <?= $this->Form->button(__('Cadastrar')) ?>
                    <?= $this->Form->end() ?>
                </div>
            </div>
        </div>
    </body>
</html>