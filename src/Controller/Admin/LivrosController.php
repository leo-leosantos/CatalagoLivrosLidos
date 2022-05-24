<?php

declare(strict_types=1);

namespace App\Controller\Admin;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

use Laminas\Diactoros\UploadedFile;


class LivrosController extends AppController
{

    public function index()
    {
        $livros = $this->Livros->find('all');

        $this->set(compact('livros'));
    }

    public function view($id = null)
    {
        $livro = $this->Livros->get($id, ['contain' => [],]);
        $this->set(compact('livro'));
    }


    public function add()
    {
        $livro = $this->Livros->newEmptyEntity();


        if ($this->request->is('post')) {

            $livro = $this->Livros->patchEntity($livro, $this->request->getData());
            $img = $this->request->getData('imagem');
            $livro->imagem = $this->Livros->slugUploadImgRed($img->getClientFilename());
            if ($this->Livros->save($livro)) {
                $this->Flash->success(__('Novo Livro Cadastrado com sucesso.'));
                $arquivo_img = new UploadedFile(
                    $img->getStream()->getMetadata('uri'),
                    $img->getSize(),
                    $img->getError(),
                    $livro->imagem,
                    $img->getClientMediaType()
                );
                $destino = WWW_ROOT . "files" . DS . "livros" . DS . $livro->id . DS;
                $this->Livros->uploadImgRed($arquivo_img, $destino, 1196, 1600);


                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->danger(__('O Livro não foi cadastrado com sucesso. Tente Novamente.'));
        }
        $this->set(compact('livro'));
    }

    public function edit($id = null)
    {
        $livro = $this->Livros->get($id, ['contain' => [],]);
        $imagemAntiga = $livro->imagem;

        if ($this->request->is(['patch', 'post', 'put'])) {
            $livro = $this->Livros->patchEntity($livro, $this->request->getData());
            $img = $this->request->getData('imagem');
            if (empty($img->getClientFilename())) {
                $livro->imagem = $imagemAntiga;
                if ($this->Livros->save($livro)) {
                    $this->Flash->success(__('O Livro foi editado com sucesso.'));
                    return $this->redirect(['action' => 'index']);
                }
                $this->Flash->danger(__('O Livro não foi editado com sucesso. Tente Novamente.'));
            } else {
                $livro = $this->Livros->patchEntity($livro, $this->request->getData());
                $img = $this->request->getData('imagem');
                $livro->imagem = $this->Livros->slugUploadImgRed($img->getClientFilename());
                if ($this->Livros->save($livro)) {
                    $this->Flash->success(__('Capa do Livro editada com sucesso.'));
                    $destino = WWW_ROOT . "files" . DS . "livros" . DS . $livro->id . DS;

                    $this->Livros->deleteFile($destino, $imagemAntiga, $livro->imagem);

                    $arquivo_img = new UploadedFile(
                        $img->getStream()->getMetadata('uri'),
                        $img->getSize(),
                        $img->getError(),
                        $livro->imagem,
                        $img->getClientMediaType()
                    );
                    $destino = WWW_ROOT . "files" . DS . "livros" . DS . $livro->id . DS;
                    $this->Livros->uploadImgRed($arquivo_img, $destino, 1196, 1600);


                    return $this->redirect(['action' => 'index']);
                }

                $this->Flash->danger(__('O Livro não foi editado com sucesso. Tente Novamente.'));
            }
        }
        $this->set(compact('livro'));
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $livro = $this->Livros->get($id);
        if ($this->Livros->delete($livro)) {
            $this->Flash->success(__('O Livro foi deletado com sucesso.'));
        } else {
            $this->Flash->danger(__('O Livro não foi excluido com sucesso. Tente Novamente.'));
        }

        return $this->redirect(['action' => 'index']);
    }


    public function listarLivrosPeriodo()
    {



        $data_inicial = $this->request->getQuery('data_inicio_leitura');
        $data_final = $this->request->getQuery('data_fim_leitura');
        $pesquisa = TableRegistry::getTableLocator()->get('Livros')->find()
            ->where([
                'data_inicio_leitura BETWEEN :data_inicio_leitura AND :data_fim_leitura'
            ])
            ->bind(':data_inicio_leitura', $data_inicial, 'date')
            ->bind(':data_fim_leitura',   $data_final, 'date')
            ->order(['data_inicio_leitura' => 'ASC']);
        $total = $pesquisa->count();



        $this->set(compact('pesquisa', 'total'));
        if (($data_inicial !== null) && ($data_final !== null)) {
            return $this->Flash->error(__('Nenhum registro no período selecionado.'));
        }
    }
}
