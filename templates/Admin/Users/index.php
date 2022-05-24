<?= $this->Html->css(['dataTables.bootstrap.min']) ?>
<?= $this->Html->script(['jquery.dataTables.min', 'dataTables.bootstrap4.min', 'dataTables.buttons.min', 'buttons.html5.min']) ?>

<div class="col-md-12">
    <div class="table-responsive mt-5">
        <h3>
            <?= $this->Html->link('<i class="fas fa-plus fa-2x"></i>', ['controller' => 'Users', 'action' => 'add'], ['class' => 'btn btn-primary btn-lg rounded-circle float-right', 'escape' => false]) ?>
        </h3>
        <h3 class="text-center">
            USUÁRIO
        </h3>
    </div>
    <br>
    <table id="datatable" class="table table-striped table-bordered table-hover text-center rounded">

        <thead>
            <tr>
                <th>ID</th>
                <th>NOME</th>
                <th>EMAIL</th>
                <th>NOME USUÁRIO</th>
                <th>DATA CADASTRO</th>
                <th class="text-center">AÇÕES</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user) : ?>
                <tr>
                    <td><?= $this->Number->format($user->id) ?></td>
                    <td class="align-middle"><?= h($user->name) ?></td>
                    <td class="align-middle"><?= h($user->email) ?></td>
                    <td class="align-middle"><?= h($user->username) ?></td>
                    <td class="align-middle"><?= h($user->created) ?></td>
                    <td class="align-middle">
                        <?= $this->Html->link(('<i class="far fa-eye"></i>'), ['controller' => 'Users', 'action' => 'view', $user->id], ['class' => 'btn btn-outline-primary', 'escape' => false]) ?>
                        <?= $this->Html->link('<i class="far fa-edit "></i>', ['controller' => 'Users', 'action' =>  'edit', $user->id], ['class' =>  'btn btn-outline-warning',  'escape' => false]) ?>
                        <?= $this->Form->postLink('<i class="fas fa-trash"></i>', ['controller' => 'Users', 'action' => 'delete', $user->id], ['class' => 'btn btn-outline-danger', 'escape' => false, 'confirm' => __('Realmente deseja apagar o Usuário  # {0}? TODOS OS VÍNCULOS SERÃO APAGADOS!', $user->id)]) ?>
                    </td>

                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<script>
    $(document).ready(function() {
        $('#datatable').DataTable({

            "pageLength": 10,
            "language": {
                "searchPlaceholder": "",
                "sEmptyTable": "Nenhum registro encontrado",
                "sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
                "sInfoEmpty": "Mostrando 0 até 0 de 0 registros",
                "sInfoFiltered": "(Filtrados de _MAX_ registros)",
                "sInfoPostFix": "",
                "sInfoThousands": ".",
                "sLengthMenu": "_MENU_ resultados por página",
                "sLoadingRecords": "Carregando...",
                "sProcessing": "Processando...",
                "sZeroRecords": "Nenhum registro encontrado",
                "sSearch": "Pesquisar",
                "oPaginate": {
                    "sNext": "Próximo",
                    "sPrevious": "Anterior",
                    "sFirst": "Primeiro",
                    "sLast": "Último"
                },
                "oAria": {
                    "sSortAscending": ": Ordenar colunas de forma ascendente",
                    "sSortDescending": ": Ordenar colunas de forma descendente"
                }
            }
        });
    });
</script>