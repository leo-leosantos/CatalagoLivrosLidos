<?php

namespace App\Controller\Admin;

use App\Controller\AppController;


class ArquivosController extends AppController
{

    public function downloadImgLivros($id, $nome = null)
    {

        if ($nome) {
            $path = WWW_ROOT . "files" . DS .  "livros" . DS . $id . DS . $nome;
            return $this->response->withFile($path, ['download' => true]);
        } else {
            $this->Flash->danger(__('Não existe imagem para download.'));

            return $this->redirect(['controller' => 'Livros', 'action' => 'index']);
        }
    }
}