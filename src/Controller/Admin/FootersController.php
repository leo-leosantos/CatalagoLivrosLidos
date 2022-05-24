<?php
declare(strict_types=1);

namespace App\Controller\Admin;

use App\Controller\AppController;

class FootersController extends AppController
{
   
    public function index()
    {
        $footers = $this->paginate($this->Footers);

        $this->set(compact('footers'));
    }

   
    public function view($id = null)
    {
        $footer = $this->Footers->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('footer'));
    }

   
    

   
    public function edit($id = null)
    {
        $footer = $this->Footers->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $footer = $this->Footers->patchEntity($footer, $this->request->getData());
            if ($this->Footers->save($footer)) {
                $this->Flash->success(__('A Frase do rodapé foi editada com sucesso.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->danger(__('A Frase do rodapé não foi editada com sucesso.Tente Novamente.'));
        }
        $this->set(compact('footer'));
    }

   
   
}
