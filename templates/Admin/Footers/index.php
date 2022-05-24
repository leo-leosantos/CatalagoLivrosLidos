<?= $this->Html->css(['dataTables.bootstrap.min']) ?>
<?= $this->Html->script(['jquery.dataTables.min', 'dataTables.bootstrap4.min', 'dataTables.buttons.min', 'buttons.html5.min']) ?>

<div class="col-md-12">
    <div class="table-responsive mt-5">

        <h3 class="text-center">
            RODAPÉ
        </h3>
    </div>
    <br>
    <div class="card">

        <table id="datatable" class="table table-striped table-bordered table-hover text-center rounded">

            <thead>
                <tr>

                    <th>FRASE</th>
                    <th>DATA CADASTRO</th>
                    <th>DATA MODIFICAÇÃO</th>

                    <th class="text-center">AÇÕES</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($footers as $footer) : ?>
                    <tr>

                        <td class="align-middle"><?= ($footer->descricao) ?></td>


                        <td class="align-middle"><?= h($footer->created) ?></td>
                        <td class="align-middle"><?= h($footer->modified) ?></td>

                        <td class="align-middle">
                            <?= $this->Html->link(('<i class="far fa-eye"></i>'), ['controller' => 'Footers', 'action' => 'view', $footer->id], ['class' => 'btn btn-outline-primary', 'escape' => false]) ?>
                            <?= $this->Html->link('<i class="far fa-edit "></i>', ['controller' => 'Footers', 'action' =>  'edit', $footer->id], ['class' =>  'btn btn-outline-warning',  'escape' => false]) ?>
                        </td>

                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>