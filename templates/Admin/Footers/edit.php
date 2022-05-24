<div class="container-fluid mt-5 mb-5">
    <?= $this->Form->create($footer) ?>
    <fieldset>
        <legend class="text-center">
            <h3> EDITAR RODAPÉ </h3>
        </legend>
        <div class="card">
            <div class="card-body">

                <div class="input-group font-weight-bold">
                    <div class="col-md-6 mt-3">
                        <label><span class="text-danger">*</span>AUTOR DA FRASE</label>
                        <?= $this->Form->control('autor_frase', ['class' => 'form-control font-weight-bold', 'placeholder' => 'data_inicio_leitura', 'label' => false]) ?>
                    </div>
                    
                </div>
                <div class="input-group font-weight-bold">

                    <div class="container justify-content-center mt-5">
                    <label><span class="text-danger">*</span>TEXTO DO RODAPÉ</label>

                        <?= $this->Form->control('descricao', ['type' => 'textarea', 'id' => 'editor-um', 'label' => '', 'escape' => false]); ?>
                    </div>
                </div>
            </div>
        </div>
        <div class=" justify-content-center text-center mb-5">
            <?= $this->Form->button('SALVAR', ['class' =>  'btn btn-primary mt-5',  'escape' => false]) ?>
            <?= $this->Html->link('CANCELAR', ['controller' =>  'Footers',  'action' =>  'index'], ['class' =>  'btn btn-danger mt-5',  'escape' => false]) ?>
            <?= $this->Form->end() ?>
        </div>
    </fieldset>

</div>

<?= $this->Html->script('ckeditor.js', ['block' => 'script']) ?>
<?= $this->Html->scriptBlock("
    ClassicEditor
    .create( document.querySelector('#editor-um') )
    .catch( error => {
        console.error( error );
    });

    ", ['block' => 'script'])
?>