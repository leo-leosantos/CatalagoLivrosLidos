<?php $cakeDescription = 'Login: Administrativo'; ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        <?= $cakeDescription ?>
    </title>
    <?= $this->Html->meta('icon') ?>
    <?= $this->Html->css(['bootstrap.min', 'fontawesome.min', 'signin']) ?>
    <?= $this->Html->script(['jquery.min', 'bootstrap.min', 'popper.min.js', 'fontawesome']) ?>
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body class="login">
        <?= $this->Flash->render() ?>
        <?= $this->fetch('content') ?>

</body>


</html>

