<div class="card">
	<div class="card-body">
		<div class="d-flex">
			<div class="mr-auto p-2">

				<h2 class="display-6 titulo">Editar Foto Perfil</h2>
			</div>
			<div class="p-2">
				<span class="d-none d-md-block">
					<?= $this->Html->link(__('Visualizar Perfil'), ['controller' => 'Users', 'action' => 'perfil'], ['class' => 'btn btn-outline-primary btn-sm']) ?>
				</span>
				<div class="dropdown d-block d-md-none">
					<button class="btn btn-primary dropdown-toggle btn-sm" type="button" id="acoesListar" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Ações
					</button>
					<div class="dropdown-menu dropdown-menu-right" aria-labelledby="acoesListar">
						<?= $this->Html->link(__('Visualizar'), ['controller' => 'Users', 'action' => 'perfil'], ['class' => 'dropdown-item']) ?>
					</div>
				</div>
			</div>
		</div>

		<hr>
		<?= $this->Flash->render() ?>

		<?= $this->Form->create($user, ['enctype' => 'multipart/form-data']) ?>

		<div class="form-row">
			<div class="form-group col-md-6">
				<label><span class="text-danger">*</span> Foto(150 x 150)</label>
				<?= $this->Form->control('img', ['type' => 'file', 'label' => false, 'onchange' => 'previewImagem()']) ?>
			</div>
			<div class="form-group col-md-6">
				<?php
				if ($user->imagem !== null) {
					
					$imagem_antiga = '../files/user/' . $user->id . '/' . $user->imagem;

				} else {
					$imagem_antiga = '../files/user/preview_img.png';
				}
				?>
				<img src='<?= $imagem_antiga ?>' alt='<?= $user->imagem ?>' id='preview-img' class='img-thumbnail' style="width: 150px; height: 150px;">
			</div>
		</div>
		<p>
			<span class="text-danger">* </span>Campo obrigatório
		</p>
		<?= $this->Form->button(__('Salvar'), ['class' => 'btn btn-warning']) ?>
		<?= $this->Form->end() ?>

	</div>
</div>

<script>
	  function previewImagem() {
        var img_um = document.querySelector('input[name=img]').files[0];
        var preview_um = document.querySelector('#preview-img');
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