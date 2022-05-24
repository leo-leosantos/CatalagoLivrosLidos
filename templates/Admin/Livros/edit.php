<div class="container-fluid mt-5 mb-5">
    <?= $this->Form->create($livro, ['enctype' => 'multipart/form-data']) ?>
    <fieldset>
        <legend class="text-center">
            <h3> EDITAR LIVRO </h3>
        </legend>
        <div class="card">
            <div class="card-body">
                <div class="input-group font-weight-bold">
                    <div class="col-md-4 mt-3">
                        <label><span class="text-danger">*</span>TITULO DO LIVRO</label>
                        <?php echo $this->Form->control('nome_livro', ['class' => 'form-control font-weight-bold', 'placeholder'=>'Título do Livro', 'label' => false]); ?>
                    </div>
                    <div class="col-md-4 mt-3">
                        <label><span class="text-danger">*</span>NOME AUTOR</label>
                        <?php echo $this->Form->control('nome_autor', ['class' => 'form-control font-weight-bold', 'placeholder'=>'Nome Autor' , 'label' => false]); ?>
                    </div>
                    <div class="col-md-4 mt-3">
                        <label><span class="text-danger">*</span>SERIE</label>
                        <?php echo $this->Form->control('serie', ['class' => 'form-control font-weight-bold', 'placeholder'=>'Ex:Guerra das Rosas'  ,'label' => false]); ?>
                    </div>
                </div>

                <div class="input-group font-weight-bold">
                    <div class="col-md-4 mt-3">
                        <label><span class="text-danger">*</span>VOLUME</label>
                        <?php echo $this->Form->control('volume', ['class' => 'form-control font-weight-bold','placeholder'=>'Ex:VOL.1'  , 'label' => false]); ?>
                    </div>
                    <div class="col-md-4 mt-3">
                        <label><span class="text-danger">*</span>EDITORA</label>
                        <?php echo $this->Form->control('editora', ['class' => 'form-control font-weight-bold', 'placeholder'=>'Editora Arqueiro' ,'label' => false]); ?>
                    </div>
                    <div class="col-md-4 mt-3">
                        <label><span class="text-danger">*</span>N. PÁGINAS</label>
                        <?php echo $this->Form->control('numero_paginas', ['class' => 'form-control font-weight-bold', 'placeholder'=>'Número de Páginas' ,'label' => false]); ?>
                    </div>
                </div>
                <div class="input-group font-weight-bold">
                    <div class="col-md-6 mt-3">
                        <label><span class="text-danger">*</span>Data Ínicio Leitura</label>
                        <?= $this->Form->control('data_inicio_leitura', ['class' => 'form-control font-weight-bold', 'placeholder' => 'Data Ínicio da Leitura', 'label' => false]) ?>
                    </div>
                    <div class="col-md-6 mt-3">
                        <label><span class="text-danger">*</span>Data do Fim da Leitura</label>
                        <?= $this->Form->control('data_fim_leitura', ['class' => 'form-control font-weight-bold', 'placeholder' => 'Data Fim da Leitura  ', 'label' => false]) ?>
                    </div>
                </div>
                <div class="input-group font-weight-bold">
                <div class="form-group col-md-6">
                            <label><span class="text-danger">*</span> Foto Capa </label>
                            <?= $this->Form->control('imagem',  ['type' => 'file', 'label' => false,  'onchange' => 'previewImg()']) ?>
                        </div>

                    <div class=" col-md-6 mt-2">
                        <?php
                        if (($livro->imagem !== null) or (!empty($livro->imagem))) {
                            $imagem_antiga = '../../../files/livros/' . $livro->id . '/' . $livro->imagem;
                        } else {
                            $imagem_antiga = '../../../files/livros/preview_img.png';
                        }
                        ?>
                        <img src='<?= $imagem_antiga ?>' alt='<?= $livro->imagem ?>' id='preview-img-1' class='img-fluid' style="width: 320px; height: 420px;">
                    </div>
                   
                </div>

                <div class="container justify-content-center mt-5">
                    <?= $this->Form->control('sinopse', ['type' => 'textarea', 'id' => 'editor-um', 'label' => '', 'escape' => false]); ?>
                </div>
            </div>
        </div>




        <div class=" justify-content-center text-center mb-5">
            <?= $this->Form->button('SALVAR', ['class' =>  'btn btn-primary mt-5',  'escape' => false]) ?>
            <?= $this->Html->link('CANCELAR', ['controller' =>  'Livros',  'action' =>  'index'], ['class' =>  'btn btn-danger mt-5',  'escape' => false]) ?>
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
<script>
    function previewImg() {
        var img_um = document.querySelector('input[name=imagem]').files[0];
        var preview_um = document.querySelector('#preview-img-1');
        var reader_um = new FileReader();
        reader_um.onloadend = function() {
            preview_um.src = reader_um.result;
        };
        if (img_um) {
            reader_um.readAsDataURL(img_um);
        } else {
            preview_um.src = "";
        }
    }
</script>