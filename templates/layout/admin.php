<?php


$cakeDescription = 'Administrativo: Catálogo de Leituras';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        <?= $cakeDescription ?>:
      
    </title>
    <?= $this->Html->meta('icon') ?>
    <?= $this->Html->css(['bootstrap.min', 'fontawesome.min', 'bootstrap-progressbar-3.3.4.min', 'custom.min', 'animate.min']) ?>    
    <?= $this->Html->script(['fontawesome-all.min']) ?>
    <?= $this->Html->script(['jquery.min', 'chart.min', 'bootstrap-progressbar.min', 'popper.min',  'fontawesome', 'bootstrap.bundle.min'
    ]) ?>

   
</head>
<body class="nav-md">
<div class="container body">
        <div class="main_container">
        <?= $this->element('sidebar') ?>
        <?= $this->element('top_bar') ?>
        <?= $this->Flash->render() ?>
        <?= $this->element('content') ?>
        <?= $this->element('footer') ?>
        </div>
      
</div>



<?= $this->Html->script(['custom.min']) ?>
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</body>
</html>
