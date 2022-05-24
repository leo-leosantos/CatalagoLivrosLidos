<div class="container-fluid mt-5 mb-5">
    <?= $this->Form->create($user, ['enctype' => 'multipart/form-data']) ?>
    <fieldset>
        <legend class="text-center">
            <h3> EDITAR DADOS DO USUÁRIO </h3>
        </legend>
     
        <div class="card">
            <div class="card-body">
                <div class="input-group font-weight-bold">
                    <div class="col-md-6 mt-3">
                        <label><span class="text-danger">*</span>Nome</label>
                        <?php echo $this->Form->control('name', ['class' => 'form-control font-weight-bold', 'label' => false]); ?>
                    </div>
                    <div class="col-md-6 mt-3">
                        <label><span class="text-danger">*</span>Nome de Usuário</label>
                        <?php echo $this->Form->control('username', ['class' => 'form-control font-weight-bold', 'label' => false]); ?>
                    </div>
                </div>
                <div class="input-group font-weight-bold">
                    <div class="col-md-6 mt-3">
                        <label><span class="text-danger">*</span>E-mail</label>
                        <?php echo $this->Form->control('email', ['class' => 'form-control font-weight-bold', 'label' => false]); ?>
                    </div>
                </div>
            </div>
            <div class=" justify-content-center text-center mb-5">
                <?= $this->Form->button('EDITAR', ['class' =>  'btn btn-warning mt-5',  'escape' => false]) ?>
                <?= $this->Html->link('CANCELAR', ['controller' =>  'Users',  'action' =>  'index'], ['class' =>  'btn btn-danger mt-5',  'escape' => false]) ?>
                <?= $this->Form->end() ?>
            </div>
           
        </div>
    </fieldset>
</div>