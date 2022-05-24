<?php

use Cake\ORM\TableRegistry;

?>
<?= $this->Html->css(['dataTables.bootstrap.min']) ?>
<?= $this->Html->script(['jquery.dataTables.min', 'dataTables.bootstrap4.min', 'dataTables.buttons.min', 'buttons.html5.min']) ?>
<div class="container-fluid">
    <div class="table-responsive rounded mt-5">
        <h3 class="mb-5">Livros Lidos por Período</h3>
        <div class="card">
            <div class="card-body">
                <form>
                    <div class="form-group row font-weight-bold">

                        <div class="col-md-4 mt-4">
                            <?php echo $this->Form->control('data_inicio_leitura', ['type' => 'date', 'class' => 'form-control font-weight-bold text-center', 'value' => $this->request->getQuery('data_inicial'), 'required', 'label' => 'DATA INICIO LEITURA']); ?>
                        </div>
                        <div class="col-md-4 mt-4">
                            <?php echo $this->Form->control('data_fim_leitura', ['type' => 'date', 'class' => 'form-control font-weight-bold text-center', 'value' => $this->request->getQuery('data_final'), 'required', 'label' => 'DATA FIM LEITURA']); ?>
                        </div>
                        <div class="col-md-4 mt-3">
                            <?php echo $this->Form->button('<i class="fas fa-search"></i> Pesquisar', ['class' => 'btn btn-outline-success btn-lg mt-4', 'escapeTitle' => false]); ?>
                            <?php echo $this->Form->end(); ?>
                        </div>
                    </div>
            </div>
        </div>
        </form>
        <br>
        <div class="card">
            <div class="table-responsive">
                <table id="datatable" class="table table-striped table-bordered table-hover text-center">
                    <thead>
                        <tr>
                            <th>NOME DO LIVRO</th>
                            <th>AUTOR DO LIVRO</th>
                            <th>SÉRIE</th>
                            <th>VOLUME</th>
                            <th>DATA INÍCIO LEITURA</th>
                            <th>DATA FIM LEITURA</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($pesquisa as $row) { ?>
                            <tr>
                                <td><?php
                                    $nome_livro =   $this->Search->getLivros($row->id);
                                    echo $nome_livro->nome_livro;
                                    ?>
                                </td>

                                <td><?php
                                    $nome_autor = $this->Search->getLivros($row->id);
                                    echo $nome_autor->nome_autor;
                                    ?>
                                </td>

                                <td><?php $series = $this->Search->getLivros($row->id);
                                    echo $series->serie;
                                    ?>
                                </td>
                                <td><?php $volumes = $this->Search->getLivros($row->id);
                                    echo $volumes->volume;
                                    ?>
                                </td>

                                <td><?php $data_inicio_leitura = $this->Search->getLivros($row->id);

                                    echo $data_inicio_leitura->data_inicio_leitura;
                                    ?>
                                </td>

                                <td><?php $data_fim_leitura = $this->Search->getLivros($row->id);
                                    echo $data_fim_leitura->data_fim_leitura;

                                    ?>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
                <div class="card">
                    <div class="card-body">
                        <?php echo '<strong>TOTAL: ' . $total . ' Livro(s) lido(s) no período selecionado.  </strong>'; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(".form-control-chosen").chosen();
    $(document).ready(function() {
        $('#datatable').DataTable({
            "bInfo": false,
            "searching": false,
            "paging": false,
            "orderable": false,
            "columnDefs": [{
                "targets": [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10],
                "orderable": false
            }],
            dom: 'Bfrtip',
            buttons: [{
                    extend: 'excelHtml5',
                    text: '<i class="far fa-file-excel fa-2x"></i>',
                    titleAttr: 'Excel',
                    exportOptions: {
                        columns: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10]
                    }
                },

                {
                    extend: 'pdfHtml5',
                    text: '<i class="far fa-file-pdf fa-2x"></i>',
                    titleAttr: 'PDF',
                    orientation: 'landscape',
                    pageSize: 'A4',
                    exportOptions: {
                        columns: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10]
                    }
                },
                {
                    extend: 'print',
                    text: '<i class="fas fa-print fa-2x"></i>',
                    titleAttr: 'IMPRIMIR',
                    exportOptions: {
                        columns: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10]
                    }
                }
            ],
            "pageLength": 50,
            "order": [
                [0, "ASC"]
            ],
        });
    });
</script>