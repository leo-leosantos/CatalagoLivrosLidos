<div class="container-fluid">
    <div class="col-md-12">
        <div class="table-responsive rounded mt-5">
            <h3>
                <?= $this->Html->link(
                    '<i class="fas fa-undo"></i> Retornar',
                    ['controller' => 'Users', 'action' => 'index'],
                    ['class' => 'btn btn-info btn-lg float-right mb-5', 'escape' => false]
                ) ?>
            </h3>
            <h3>
                <?= $this->Html->link(
                    '<i class="fas fa-edit"></i> Editar Perfil',
                    ['controller' => 'Users', 'action' => 'editPerfilUser'],
                    ['class' => 'btn btn-warning btn-lg float-right mb-5', 'escape' => false]
                ) ?>
            </h3>

        </div>

        <div class="container-fluid card mb-5 ">
            <div class="card-body">
                <h6 class="alert alert-success text-center">PERFIL DO USUÁRIO </h6>
                <table class="table table-hover table-bordered rounded">
                    <tr>
                        <td>
                            <b>NOME : <?= h($user->name) ?></b>
                        </td>
                        <td>
                            <b>NOME DE USUÁRIO : <?= h($user->username) ?> </b>
                        </td>
                        <td>
                            <b>E-mail: <?= h($user->email) ?> </b>
                        </td>
                    </tr>
                </table>

                <table class="table table-hover table-bordered rounded">
                    <h6 class="alert alert-success text-center">FOTO PERFIL </h6>

                    <tr>
                        <td align="center">
                            <?php if (!empty($user->imagem)) { ?>
                                <?= $this->html->image(
                                    '../files/user/' . $user->id . '/' . $user->imagem,
                                    ['class' => 'img-fluid', 'width' => '320', 'height' => '110']
                                ) ?>&nbsp;
                            <?php } else { ?>
                                <?= $this->html->image(
                                    '../files/user/preview_img.png',
                                    ['class' => 'img-fluid', 'width' => '320', 'height' => '110']
                                ) ?>&nbsp;
                            <?php } ?>
                        </td>
                    </tr>

                </table>

            </div>
        </div>
    </div>
</div>