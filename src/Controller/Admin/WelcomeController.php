<?php

declare(strict_types=1);

namespace App\Controller\Admin;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use Cake\Datasource\ConnectionManager;


class WelcomeController extends AppController
{

    public  function  index()
    {

        $con = ConnectionManager::get('default');
        $result = $con->prepare(' SELECT (SUM(numero_paginas)) AS soma FROM livros Livros');
        $result->execute();
        $total_paginas = $result->fetch('assoc');
        implode($total_paginas);

        $total_livros  = TableRegistry::getTableLocator()->get('Livros')->find('all')->count();
        // $dadosuser  = TableRegistry::getTableLocator()->get('Users')->find()->select(['name','username'])->first();

        $user_id = $this->Auth->user('id');
        $userTable =   TableRegistry::getTableLocator()->get('Users');
        $dadosuser =    $userTable->getUserDados($user_id);


        $this->set(compact('total_livros', 'total_paginas', 'dadosuser'));
    }
}
