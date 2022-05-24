<div class="container-fluid">
    <div class="col-md-12">
        <div class="table-responsive rounded mt-5">
            <h3>
                <?= $this->Html->link(
                    '<i class="fas fa-undo"></i> Retornar',
                    ['controller' => 'Footers', 'action' => 'index'],
                    ['class' => 'btn btn-info btn-lg float-right mb-5', 'escape' => false]
                ) ?>
            </h3>
        </div>
        <div class="container-fluid card mb-5 ">
            <div class="card-body">
                <h6 class="alert alert-success text-center">DADOS DO RODAPÉ </h6>
                <table class="table table-hover table-bordered rounded">
                        <tr align="center">
                            <td>
                            <b>AUTOR DA FRASE: <?= h($footer->autor_frase) ?></b>

                            </td>
                        </tr>
                </table>
                <table class="table table-hover table-bordered rounded">
                    <div class="container-fluid card mb-3">
                        <tr>
                            <td>
                                <b>FRASE:
                                    <div class=" card-body mb-5"> <?php echo $footer->descricao;   ?>
                                    </div>
                            </td></b>
                        </tr>
                    </div>
                </table>
            </div>
        </div>
    </div>
</div>















