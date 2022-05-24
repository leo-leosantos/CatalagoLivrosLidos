<?php

declare(strict_types=1);

namespace App\View\Helper;

use Cake\ORM\TableRegistry;
use Cake\View\Helper;
use Cake\View\View;
use Cake\Datasource\FactoryLocator;
/**
 * Search helper
 */
class SearchHelper extends Helper
{
    /**
     * Default configuration.
     *
     * @var array
     */
    protected $_defaultConfig = [];





    public function getLivros($id)
    {

        $query = FactoryLocator::get('Table')->get('Livros')
            ->find()
            ->select(['nome_livro', 'nome_autor', 'serie', 'volume', 'data_inicio_leitura', 'data_fim_leitura'])
            ->where(['Livros.id' => $id])
            ->first();
        return $query;
    }

    public function getFooter($id)
    {

        $query =FactoryLocator::get('Table')->get('Footers')
            ->find()
            ->select(['descricao', 'autor_frase'])
            ->where(['Footers.id' => $id])
            ->first();
        return $query;
    }

   
}
