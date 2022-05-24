<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Livro Entity
 *
 * @property int $id
 * @property string $nome_livro
 * @property string $nome_autor
 * @property string $sinopse
 * @property string $editora
 * @property int $numero_paginas
 * @property \Cake\I18n\FrozenDate $data_inicio_leitura
 * @property \Cake\I18n\FrozenDate|null $data_fim_leitura
 * @property string $serie
 * @property string|null $volume
 * @property int|null $tempo_leitura
 * @property string|null $media_paginas_dia
 * @property string|null $imagem
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime|null $modified
 */
class Livro extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'nome_livro' => true,
        'nome_autor' => true,
        'sinopse' => true,
        'editora' => true,
        'numero_paginas' => true,
        'data_inicio_leitura' => true,
        'data_fim_leitura' => true,
        'serie' => true,
        'volume' => true,
        'imagem' => true,
        'created' => true,
        'modified' => true,
    ];
}
