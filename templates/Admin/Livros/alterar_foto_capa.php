<div class="d-flex">
	<div class="mr-auto p-2">
		<h2 class="display-4 titulo">Alterar Foto Capa</h2>
	</div>
	
</div>
<hr>

<?= $this->Flash->render() ?>
<?= $this->Form->create($livro, ['enctype' => 'multipart/form-data']) ?>
<div class="container-fluid">
            <div class="card-body">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label><span class="text-danger">*</span> Foto</label>
                        <?= $this->Form->control('imagem', ['type' => 'file', 'label' => false, 'onchange' => 'previewImagem()']) ?>
                    </div>
                    <div class="form-group col-md-6">
                        <?php
                        if ($livro->imagem !== null) {
                            $imagem_antiga = '../../files/livros/' . $livro->id . '/' . $livro->imagem;
                        } else {
                            $imagem_antiga = '../../files/livros/preview_img.jpg';
                        }
                        ?>
                        <img src='<?= $imagem_antiga ?>' alt='<?= $livro->imagem ?>' id='preview-img' class='img-thumbnail' style="width: 650px; height: 450px;">
                    </div>
                </div>
        </div>
</div>

<p>
	<span class="text-danger">* </span>Campo obrigatório
</p>
<?= $this->Form->button(__('Salvar'), ['class' => 'btn btn-warning']) ?>
<?= $this->Html->link('Cancelar', ['controller' => 'Livros', 'action' => 'index'], ['class' => 'btn btn-danger', 'escape' => false]) ?>
<?= $this->Form->end() ?>