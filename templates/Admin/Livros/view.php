<?php

// $data_inicial = $livro->data_inicio_leitura;
// $data_final = $livro->data_fim_leitura;
// var_dump($data_inicial);

// if($data_final == null)
// {
//     $data_final = date('0000-00-00 00:00:00.000000');
// }

// // transforma a data do formato BR para o formato americano, ANO-MES-DIA
// $data_inicial = implode('-', array_reverse(explode('/', $data_inicial)));
// $data_final = implode('-', array_reverse(explode('/', $data_final)));
// var_dump($data_final);

// // converte as datas para o formato timestamp
// $d1 = strtotime($data_inicial); 
// $d2 = strtotime($data_final);
// // verifica a diferença em segundos entre as duas datas e divide pelo número de segundos que um dia possui
// $tempoLeitura = ($d2 - $d1) /86400;
// if($tempoLeitura < 0)
//   $tempoLeitura *= -1;


   // (int) $mediapaginasdias = ($livro->numero_paginas/ $tempoLeitura);

//    $datetime1 = date_create ($livro->data_inicio_leitura);
//    $datetime2 =date_create ($livro->data_fim_leitura);

//    $datafinal = date_diff($datetime1, $datetime2);
  
//   var_dump($datafinal);

?>

<div class="container-fluid">
    <div class="col-md-12">
        <div class="table-responsive rounded mt-5">
            <h3>
                <?= $this->Html->link(
                    '<i class="fas fa-undo"></i> Retornar',
                    ['controller' => 'Livros', 'action' => 'index'],
                    ['class' => 'btn btn-info btn-lg float-right mb-5', 'escape' => false]
                ) ?>
            </h3>
        </div>

        <div class="container-fluid card mb-5 ">
            <div class="card-body">
                <h6 class="alert alert-success text-center">DADOS DO LIVRO </h6>
                <table class="table table-hover table-bordered rounded">
                    <tr>
                        <td>
                            <b>TITULO DO LIVRO: <?= h($livro->nome_livro) ?></b>
                        </td>
                        <td>
                            <b>AUTOR DO LIVRO: <?= h($livro->nome_autor) ?></b>
                        </td>
                        <td>
                            <b>SERIE: <?= h($livro->serie) ?></b>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <b>VOLUME: <?= h($livro->volume) ?></b>
                        </td>
                        <td>
                            <b>EDITORA: <?= h($livro->editora) ?></b>
                        </td>
                        <td>
                            <b>N. PÁGINAS: <?= $this->Number->format($livro->numero_paginas) ?></b>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <b>DATA INÍCIO DA LEITURA: <?= h($livro->data_inicio_leitura) ?></b>
                        </td>
                        <td>
                            <b>DATA FIM DA LEITURA: <?= h($livro->data_fim_leitura) ?></b>
                        </td>
                        <td>
                            <b>TEMPO LEITURA:

                            <?php
                                if($livro->data_fim_leitura) {
                                    $interval = $livro->data_inicio_leitura->diff($livro->data_fim_leitura);
                                    echo $interval->format('%a  DIAS')."\n";

                                }else{
                                   echo $livro->data_fim_leitura = null;
                                }
                            ?>
                            </b>
                        </td>
                     
                    </tr>
                    <tr>
                    <td>
                            <b>MÉDIA DE PÁGINAS POR DIA:
                            <?php
                                if($livro->data_fim_leitura) {
                                    $conta  =  $livro->numero_paginas /  $interval->format('%a');

                                    $conta = number_format($conta,2, '.', '');

                                    // debug($conta);
                                        echo (int)  $conta . " páginas" ;
                                }else{
                                    $this->Number->format($livro->data_fim_leitura=null);
                                }
                            ?></b>
                        </td>
                        <td>
                        </td>
                        <td>
                        </td>
                       
                     
                    </tr>
                </table>
                <h6 class="alert alert-success text-center">SINOPSE </h6>
                <table class="table table-hover table-bordered rounded">
                    <div class="container-fluid card mb-3">
                        <div class=" card-body mb-5"> <?php echo $livro->sinopse;   ?>
                        </div>
                    </div>
                </table>
                <h6 class="alert alert-success text-center">FOTO CAPA </h6>
                <table class="table table-hover table-bordered rounded">
                    <tr>
                        <td align="center">
                            <?php if (!empty($livro->imagem)) { ?>
                                <?= $this->html->image(
                                    '../files/livros/' . $livro->id . '/' . $livro->imagem,
                                    ['class' => 'img-fluid', 'width' => '220', 'height' => '120']
                                ) ?>&nbsp;
                            <?php } else { ?>
                                <?= $this->html->image(
                                    '../files/livros/preview_img.png',
                                    ['class' => 'img-fluid', 'width' => '220', 'height' => '120']
                                ) ?>&nbsp;
                            <?php } ?>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>













