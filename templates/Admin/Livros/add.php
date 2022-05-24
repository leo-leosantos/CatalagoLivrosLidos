<?= $this->Html->css(['fileinput.min', 'switchery', 'nprogress']) ?>
<h4 class="text-center">Adicionar Novo Livro</h4>
<hr>
<div class="container">
    <?= $this->Form->create($livro, ['enctype' => 'multipart/form-data']) ?>
    <fieldset>
        <div class="card">
            <div class="card-body py-4">
                <div class="row">
                    <div class="form-group col-md-4">
                    <strong><label>TITULO DO LIVRO</label></strong>  
                        <?= $this->Form->control('nome_livro', ['class' => 'form-control', 'placeholder'=>'Título do Livro', 'label' => false]) ?>
                    </div>
                    <div class="form-group col-md-4">
                    <strong><label>NOME DO AUTOR</label></strong>  
                        <?= $this->Form->control('nome_autor', ['class' => 'form-control', 'placeholder'=>'Nome Autor' ,'required'=>true, 'label' => false]) ?>
                    </div>
                    <div class="form-group col-md-4">
                    <strong><label>SÉRIE</label></strong>  
                        <?= $this->Form->control('serie', ['class' => 'form-control', 'placeholder'=>'Ex:Guerra das Rosas', 'label' => false]) ?>
                    </div>
                    <div class="form-group col-md-4">
                    <strong><label>VOLUME</label></strong>  
                        <?= $this->Form->control('volume', ['class' => 'form-control', 'placeholder'=>'Ex:VOL.1', 'label' => false]) ?>
                    </div>
                    <div class="form-group col-md-4">
                    <strong><label>EDITORA</label></strong>  
                        <?= $this->Form->control('editora', ['class' => 'form-control', 'placeholder'=>'Editora', 'label' => false]) ?>
                    </div>
                    <div class="form-group col-md-4">
                    <strong><label>NÚMERO DE PÁGINAS</label></strong>  
                        <?= $this->Form->control('numero_paginas', ['class' => 'form-control','placeholder'=>'Número de Páginas', 'label' => false]) ?>
                    </div>
                    <div class="form-group col-md-4">
                    <strong><label>DATA INÍCIO LEITURA</label></strong>  
                        <?= $this->Form->control('data_inicio_leitura', ['class' => 'form-control','placeholder'=>'Data Início da Leitura', 'label' => false]) ?>
                    </div>
                    <div class="form-group col-md-4">
                      <strong><label>DATA FIM LEITURA</label></strong>  
                        <?= $this->Form->control('data_fim_leitura', ['class' => 'form-control', 'placeholder'=>'Data Fim da Leitura','label' => false]) ?>
                    </div>
                </div>
            </div>
    </fieldset>
    <div class="card mt-3">
        <div class="card-body">
            <div class="col-md-12">
            <strong><h6>IMAGEM PRINCIPAL</h6></strong>  
                <?= $this->Form->control('imagem', ['id' => 'bootstrapfileinput', 'type' => 'file', 'label' => false]) ?>
            </div>
        </div>
    </div>
    <div class="card mt-4">
        <div class="card-body text-center">
            <strong><h4 class="text-center mb-3">SINOPSE</h4></strong>  
            <div class="container">
                <?= $this->Form->control('sinopse', ['type' => 'textarea','label' => false, 'id'=>'editor-um', 'required' => false, 'escape' => false]) ?>
            </div>
        </div>
    </div>
    <div class="col-md-12 text-center mt-2 mb-5">
        <?= $this->Form->button('<i class="fas fa-save"></i> SALVAR', ['class' => 'btn btn-primary btn-lg mt-5', 'escapeTitle' => false]) ?>
        <?= $this->Html->link('CANCELAR', ['prefix' => 'Admin', 'controller' => 'Livros', 'action' => 'index'], ['class' => 'btn btn-danger btn-lg mt-5', 'escape' => false])  ?>
        <?= $this->Form->end() ?>
    </div>
    </section>
</div>
<?= $this->Html->script(['tinymce.min', 'piexif.min', 'fileinput.min', 'nprogress', 'theme.min', 'pt-BR', 'switchery']) ?>
<script>


    $("#bootstrapfileinput").fileinput({
        'theme': "fas",
        'showUpload': false,
        'showRemove': true,
        'previewFileType': 'any',
        'maxFileSize': '25600',
        'maxFileCount': '6',
        'maxFilePreviewSize': '15360',
        'allowedFileExtensions': ['pdf', 'jpeg', 'jpg', 'tif', 'doc', 'docx', 'png'],
        'language': 'pt-BR',
        'removeClass': 'btn btn-danger'
    });
</script>
<?= $this->Html->script('ckeditor.js',['block'=>'script']) ?>
<?= $this->Html->scriptBlock("
    ClassicEditor
    .create( document.querySelector('#editor-um') )
    .catch( error => {
        console.error( error );
    });

    ",['block'=>'script'])
?>
