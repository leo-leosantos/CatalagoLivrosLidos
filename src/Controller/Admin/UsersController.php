<?php

declare(strict_types=1);

namespace App\Controller\Admin;

use App\Controller\AppController;
use Laminas\Diactoros\UploadedFile;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $users = $this->paginate($this->Users);

        $this->set(compact('users'));
    }


    public function perfil()
    {
        $user_id = $this->Auth->user('id');
        $user = $this->Users->get($user_id);

        $this->set(compact('user'));
    }
    public function editPerfilUser($id = null)
    {
        $user_id = $this->Auth->user('id');
        $user = $this->Users->get($user_id);

        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('O Usuário foi editado com Sucesso.'));

                return $this->redirect(['action' => 'perfil']);
            }
            $this->Flash->error(__('Usuário não foi editado com sucesso. Tente novamente.'));
        }
        $this->set(compact('user'));
    }
    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('user'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $user = $this->Users->newEmptyEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set(compact('user'));
    }

    public function editSenha($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('A Senha do usuário foi editada com sucesso.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->danger(__('A senha do usuário não foi editada com sucesso. Tente novamente.'));
        }
        $this->set(compact('user'));
    }
    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set(compact('user'));
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function login()
    {
        if ($this->request->is('post')) {
            $user = $this->Auth->identify();

            if ($user) {
                $this->Auth->setUser($user);
                return $this->redirect($this->Auth->redirectUrl());
            } else {
                $this->Flash->danger(__('Error: Login ou senha Incorreta.'));
            }
        }
    }
    public function alterarFotoPerfil($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => [],
        ]);

        $imagemAntiga = $user->imagem;



        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            $img = $this->request->getData('img');
            $img = $this->request->getData('img');


            $user->imagem = $this->Users->slugSingleUpload($img->getClientFilename());

            $user->id = $id;
            if ($this->Users->save($user)) {
                $arquivo_img = new UploadedFile($img->getStream()->getMetadata('uri'), $img->getSize(), $img->getError(), $user->imagem, $img->getClientMediaType());
                $destino = WWW_ROOT . "files" . DS . "user" . DS . $user->id . DS;


                if ($this->Users->singleUpload($arquivo_img, $destino)) {
                    $this->Users->deleteFile($destino, $imagemAntiga, $user->imagem);
                    $this->Flash->success(__('Perfil editado com sucesso.'));
                    return $this->redirect(['action' => 'index']);
                } else {
                    $user->imagem = $imagemAntiga;
                    $this->Flash->danger(__('Erro: Imagem não foi editada com sucesso. Erro ao realizar o upload'));
                }
            } else {
                $this->Flash->error(__('Error ao editar o perfil. Tente Novamente.'));
            }
        }
        $this->set(compact('user'));
    }
    public  function  logout()

    {
        $this->Flash->success(__('Deslogado com sucesso!'));
        return $this->redirect($this->Auth->logout());
    }
}
