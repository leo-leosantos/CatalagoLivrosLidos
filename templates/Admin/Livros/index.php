<?= $this->Html->css(['dataTables.bootstrap.min']) ?>
<?= $this->Html->script(['jquery.dataTables.min', 'dataTables.bootstrap4.min', 'dataTables.buttons.min', 'buttons.html5.min']) ?>

<div class="col-md-12">
    <div class="table-responsive mt-5">
        <h3>
            <?= $this->Html->link('<i class="fas fa-plus fa-2x"></i>', ['controller' => 'Livros', 'action' => 'add'], ['class' => 'btn btn-primary btn-lg rounded-circle float-right', 'escape' => false]) ?>
        </h3>
        <h3 class="text-center">
            LIVROS LIDOS
        </h3>
    </div>
    <br>
    <div class="card">

        <table id="datatable" class="table table-striped table-bordered table-hover text-center rounded">

            <thead>
                <tr>

                    <th>TÍTULO DO LIVRO</th>
                    <th>SÉRIE</th>
                    <th>VOLUME</th>
                    <th>NOME AUTOR</th>
                    <th>EDITORA</th>
                    <th>FOTO CAPA</th>
                    <th>DATA ÍNICIO LEITURA</th>
                    <th class="text-center">AÇÕES</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($livros as $livro) : ?>
                    <tr>

                        <td class="align-middle"><?= h($livro->nome_livro) ?></td>
                        <td class="align-middle"><?= h($livro->serie) ?></td>
                        <td class="align-middle"><?= h($livro->volume) ?></td>
                        <td class="align-middle"><?= h($livro->nome_autor) ?></td>
                        <td class="align-middle"><?= h($livro->editora) ?></td>

                        <td class="text-center"><?php $foto_um = $this->Html->image('../files/livros/' . $livro->id . '/' .
                                                    $livro->imagem, ['class' => 'rounded img-thumbnail', 'width' => '110', 'height' => '500']); ?>
                            <?= $this->Html->link($foto_um, ['controller' => 'Arquivos', 'action' => 'downloadImgLivros', $livro->id, $livro->imagem],  ['class' =>  'btn btn-outline-primary', 'escape' => false]) ?>
                        </td>
                        <td class="align-middle"><?= h($livro->data_inicio_leitura) ?></td>
                        <td class="align-middle">
                            <?= $this->Html->link(('<i class="far fa-eye"></i>'), ['controller' => 'Livros', 'action' => 'view', $livro->id], ['class' => 'btn btn-outline-primary', 'escape' => false]) ?>
                            <?= $this->Html->link('<i class="far fa-edit "></i>', ['controller' => 'Livros', 'action' =>  'edit', $livro->id], ['class' =>  'btn btn-outline-warning',  'escape' => false]) ?>
                            <?= $this->Form->postLink('<i class="fas fa-trash"></i>', ['controller' => 'Livros', 'action' => 'delete', $livro->id], ['class' => 'btn btn-outline-danger', 'escape' => false, 'confirm' => __('Realmente deseja apagar o Livro  # {0}?', $livro->id)]) ?>
                        </td>

                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>