
<div class="col-md-3 left_col">
  <div class="left_col scroll-view">
    <div class="navbar nav_title mb-5" style="border: 0;">
    </div>
    <div class="clearfix"></div>
    <!-- sidebar menu -->
    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
      <div class="menu_section">
        <ul class="nav side-menu mt-5">
          <li><a><i class="fas fa-home"></i> Dashboard <span class="fas fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li>
                <?= $this->Html->link('<i class=" fa fa-fw  fa-tachometer-alt"></i> Dashboard', [ 'controller' => 'Welcome', 'action' => 'index'], ['escape' => false]) ?>
              </li>
            </ul>
          </li>
          <li><a><i class="fas fa-clipboard"></i> Cadastro <span class="fas fa-chevron-down"></span></a>
            <ul class="nav child_menu">
                <li>
                    <?= $this->Html->link('<i class="fas fa-book"></i> Livros', ['controller' => 'Livros', 'action' => 'index'], ['escape' => false]) ?>
                </li>
                <li>
                    <?= $this->Html->link('<i class="fas fa-book"></i> Lidos por Período', ['controller' => 'Livros', 'action' => 'listarLivrosPeriodo'], ['escape' => false]) ?>
                </li>
                <li>
                    <?= $this->Html->link('<i class="fas fa-book"></i> Visualizar Rodapé', ['controller' => 'Footers', 'action' => 'index'], ['escape' => false]) ?>
                </li>
            </ul>
          </li>
         
          <li><a><i class="fas fa-user"></i> Dados do Usuário <span class="fas fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li>
                <?= $this->Html->link('<i class="fas fa-user"></i> Usuário', ['controller' => 'Users', 'action' => 'index'], ['escape' => false]) ?>
              </li>
            
              <li>
                <?= $this->Html->link('<i class="fas fa-sign-out-alt"></i> Sair', ['controller' => 'Users', 'action' => 'logout'], ['escape' => false]) ?>
              </li>
            </ul>
          </li>
       
         
        </ul>
      </div>
    </div>
    <!-- /sidebar menu -->
  </div>
</div>