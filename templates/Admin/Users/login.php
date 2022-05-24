
<div class="container">
    <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card card-signin">
                <div class="card-body">

                    <h1 class="h3 mb-3 font-weight-normal text-center">Área Restrita</h1>
                    <?= $this->Form->create() ?>
                        <?= $this->Flash->render(); ?>
                        <label class="mt-2">Usuário</label>
                        <div class="form-label-group">
                            <?= $this->Form->control('username', ['class' => 'form-control', 'autocomplete' => 'username', 'placeholder' => 'Digite o usuário', 'label' => false]) ?>
                        </div>
                        <label class="mt-2">Senha</label>
                        <div class="form-label-group">
                            <?= $this->Form->control('password', ['class' => 'form-control', 'autocomplete' => 'current-password', 'placeholder' => 'Digite a senha', 'label' => false]) ?>
                        </div>
                        <div class="custom-control custom-checkbox mb-3">
                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                        </div>
                        <?= $this->Form->button(('<i class="fas fa-sign-in-alt"></i>  Acessar'), ['class' => 'btn btn-lg btn-primary btn-block','escapeTitle' => false]) ?>
                        <?= $this->Form->end() ?>
                        <hr>
                </div>
            </div>
        </div>
    </div>
</div>