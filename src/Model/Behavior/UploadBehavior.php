<?php

declare(strict_types=1);

namespace App\Model\Behavior;

use Cake\ORM\Behavior;
use Cake\ORM\Table;
use Laminas\Diactoros\UploadedFile;
class UploadBehavior extends \Cake\ORM\Behavior
{
    protected $_defaultConfig = [];
    public function singleUpload(\Laminas\Diactoros\UploadedFile $file, string $destino)
    {
        $this->criarDiretorio($destino);
        return $this->upload($file, $destino);
    }
    public function criarDiretorio(string $destino)
    {
        if (!file_exists($destino)) {
            mkdir($destino, 0777, true);
        }
    }
    public function singleDelete($file, $destino){
        if (file_exists($destino . $file)) {
         return unlink($destino . $file);
        }
    }
    protected function upload(\Laminas\Diactoros\UploadedFile $file, string $destino)
    {
        if (move_uploaded_file($file->getStream()->getMetadata('uri'), $destino . $file->getClientFilename())) {
            return $file->getClientFilename();
        } else {
            return false;
        }
    }
    public function slugSingleUpload($name)
    {
        $formato['a'] = 'ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜüÝÞßàáâãäåæçèéêëìíîïðñòóôõöøùúûýýþÿRr"!@#$%&*()_-+={[}]/?;:,\\\'<>°ºª';
        $formato['b'] = 'aaaaaaaceeeeiiiidnoooooouuuuuybsaaaaaaaceeeeiiiidnoooooouuuyybyRr                                ';
        $name = strtr(utf8_decode($name), utf8_decode($formato['a']), $formato['b']);
        $name = str_replace(' ', '-', $name);
        $name = str_replace(['-----', '----', '---', '--'], '-', $name);
        $name = strtolower($name);
        $variavel = date('m-d-H-i-s');
        $registro = preg_replace("/[^0-9]/", "", $variavel);
        $name = $registro . "-" . $name;
        return $name;
    }
    public function getSlug(string $name)
    {
        $formato['a'] = 'ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜüÝÞßàáâãäåæçèéêëìíîïðñòóôõöøùúûýýþÿRr"!@#$%&*()_-+={[}]/?;:,\\\'<>°ºª';
        $formato['b'] = 'aaaaaaaceeeeiiiidnoooooouuuuuybsaaaaaaaceeeeiiiidnoooooouuuyybyRr                                ';
        $name = strtr(utf8_decode($name), utf8_decode($formato['a']), $formato['b']);
        $name = str_replace(' ', '-', $name);
        $name = str_replace(['-----', '----', '---', '--'], '-', $name);
        $name = strtolower($name);
        return $name;
    }
}
