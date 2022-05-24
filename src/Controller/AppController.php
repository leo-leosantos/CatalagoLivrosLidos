<?php
declare(strict_types=1);


namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\EventInterface;
use Cake\ORM\TableRegistry;

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link https://book.cakephp.org/4/en/controllers.html#the-app-controller
 */
class AppController extends Controller
{

    public function initialize(): void
    {
        parent::initialize();

        $this->loadComponent('RequestHandler');
        $this->loadComponent('Flash');
        $this->loadComponent('Auth',[
            'loginRedirect'=> [
                'controller'=>'Welcome',
                'action'=>'index'
            ],
            'logoutRedirect'=>[
                'controller'=>'Users',
                'action'=>'login'
            ],
            'authError'=>false
        ]);
    }

    public  function  beforeRender(EventInterface $event)
    {
        $prefix = null;
        if ($this->request->getParam('prefix') !== null){
            $prefix = $this->request->getParam('prefix');
        }

        if($prefix == 'Admin'){
            if(($this->request->getParam('action') !== null) AND
                ($this->request->getParam('action') == 'login')){
                $this->viewBuilder()->setLayout('login');
            }else{
                $user = TableRegistry::getTableLocator()->get('Users');
                $perfilUser =$user->getUserDados($this->Auth->user('id'));

               // var_dump($perfilUser);
               $this->set(compact('perfilUser'));
                $this->viewBuilder()->setLayout('admin');
            }
        }
    }
}
