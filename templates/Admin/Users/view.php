

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
        </div>

        <div class="container-fluid card mb-5 ">
            <div class="card-body">
                <h6 class="alert alert-success text-center">DADOS DO USUÁRIO </h6>
                <table class="table table-hover table-bordered rounded">
                    <tr>
                        <td>
                            <b>NOME: <?= h($user->name) ?></b>
                        </td>
                        <td>
                            <b>E-MAIL: <?= h($user->email) ?></b>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <b>NOME USUÁRIO: <?= h($user->username) ?></b>
                        </td>
                        <td>
                            <b>DATA CADASTRO: <?= h($user->created) ?></b>
                        </td>
                    </tr>
                </table>


               
            </div>
        </div>
    </div>
</div>
