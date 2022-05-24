<?php $footer  = $this->Search->getFooter('1');?>
<!-- footer content -->

<footer>

  <div class="text-center">
    <?= $footer->descricao . $footer->autor_frase; ?>
    <br>
    <p>&copy; 2019 - <?php echo date('Y');?> Desenvolvido por HLTI - PHP DEVELOPERS.</p>
   
  </div>
</footer>
<!-- /footer content -->