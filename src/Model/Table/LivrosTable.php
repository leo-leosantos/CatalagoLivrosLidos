<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Livros Model
 *
 * @method \App\Model\Entity\Livro newEmptyEntity()
 * @method \App\Model\Entity\Livro newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Livro[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Livro get($primaryKey, $options = [])
 * @method \App\Model\Entity\Livro findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Livro patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Livro[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Livro|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Livro saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Livro[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Livro[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Livro[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Livro[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class LivrosTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('livros');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
        $this->addBehavior('Upload');
        $this->addBehavior('UploadRed');
        $this->addBehavior('DeleteArq');

    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('nome_livro')
            ->maxLength('nome_livro', 255)
            ->requirePresence('nome_livro', 'create')
            ->notEmptyString('nome_livro');

        $validator
            ->scalar('nome_autor')
            ->maxLength('nome_autor', 255)
            ->requirePresence('nome_autor', 'create')
            ->notEmptyString('nome_autor');

        $validator
            ->scalar('sinopse')
            ->requirePresence('sinopse', 'create')
            ->notEmptyString('sinopse');

        $validator
            ->scalar('editora')
            ->maxLength('editora', 255)
            ->requirePresence('editora', 'create')
            ->notEmptyString('editora');

        $validator
            ->integer('numero_paginas')
            ->requirePresence('numero_paginas', 'create')
            ->notEmptyString('numero_paginas');

        $validator
            ->date('data_inicio_leitura')
            ->requirePresence('data_inicio_leitura', 'create')
            ->notEmptyDate('data_inicio_leitura');

        $validator
            ->date('data_fim_leitura')
            ->allowEmptyDate('data_fim_leitura');

        $validator
            ->scalar('serie')
            ->maxLength('serie', 222)
           // ->requirePresence('serie', 'create')
            ->allowEmptyString('serie');

        $validator
            ->scalar('volume')
            ->maxLength('volume', 222)
            ->allowEmptyString('volume');

       

        $validator
            ->scalar('imagem')
            ->maxLength('imagem', 220)
            //->requirePresence('imagem', 'create');
            ->allowEmptyString('imagem');

        return $validator;
    }



 
}
