<div class="container-fluid mt-5 mb-5">

    <?= $this->Form->create($user) ?>

    <fieldset>
        <div class="card">
            <div class="card-body">
                <dl class="row">

                    <dt class="col-sm-3"></dt>
                    <dd class="col-sm-9">

                        <?php if (!empty($user->imagem)) { ?>
                            <?= $this->Html->image('../files/user/' . $user->id . '/' . $user->imagem, ['class' => 'rounded-circle', 'width' => '120', 'height' => '120']) ?>&nbsp;
                        <?php } else { ?>
                            <?= $this->Html->image('../files/user/icone_usuario.png', ['class' => 'rounded-circle', 'width' => '120', 'height' => '120']) ?>&nbsp;
                        <?php } ?>

                        <?= $this->Html->link(__('Alterar Foto'), ['action' => 'alterarFotoPerfil',$user->id], ['class' => 'btn btn-outline-primary btn-sm']); ?>
                        <?= $this->Html->link(__('Alterar Senha'), ['action' => 'editSenha',$user->id], ['class' => 'btn btn-outline-danger btn-sm']); ?>

                    </dd>


                </dl>
                <legend class="text-center">
                    <h3> EDITAR USUÁRIO </h3>
                </legend>

                <div class="input-group font-weight-bold">
                    <div class="col-md-6 mt-3">
                        <label>
                            <h4>Nome</h4>
                        </label>
                        <?= $this->Form->control('name', ['class' => 'form-control', 'placeholder' => 'Seu melhor e-mail', 'label' => false]) ?>
                    </div>
                    <div class="col-md-6 mt-3">
                        <label>
                            <h4>Nome de usuário</h4>
                        </label>
                        <?= $this->Form->control('username', ['class' => 'form-control', 'placeholder' => 'Digite o nome de usuário', 'label' => false]) ?>
                    </div>
                    <div class="col-md-6 mt-3">
                        <label>
                            <h4>E-mail</h4>
                        </label>
                        <?= $this->Form->control('email', ['class' => 'form-control', 'placeholder' => 'Digite o seu email', 'label' => false]) ?>
                    </div>
                 
                </div>
                <div class=" justify-content-center text-center mb-5">
                    <?= $this->Form->button('<i class ="fas fa-save"></i> SALVAR', ['class' =>  'btn btn-primary mt-5',  'escapeTitle' => false]) ?>
                    <?= $this->Html->link('CANCELAR', ['controller' =>  'Users',  'action' =>  'perfil'], ['class' =>  'btn btn-danger mt-5',  'escape' => false]) ?>
                    <?= $this->Form->end() ?>
                </div>
            </div>
        </div>


    </fieldset>
</div>
