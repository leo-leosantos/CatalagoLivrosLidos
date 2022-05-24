<?php
declare(strict_types=1);

namespace App\Model\Behavior;

use Cake\ORM\Behavior;
use Cake\ORM\Table;
use Laminas\Diactoros\UploadedFile;
class UploadRedBehavior extends \Cake\ORM\Behavior
{
    protected $_defaultConfig = [];
    public function uploadImgRed(\Laminas\Diactoros\UploadedFile $file, string $destino, int $largura, int $altura)
    {
        $this->criarDiretorioImgRed($destino);
        $this->verExtensaoImg($file, $destino, $largura, $altura);
        //   return $this->upload($file, $destino);
        return true;
    }
    public function verExtensaoImg(\Laminas\Diactoros\UploadedFile $file, string $destino, int $largura, int $altura)
    {
        switch ($file->getClientMediaType()) {
            case 'image/jpeg':
            case 'image/pjpeg':
                $imagem = imagecreatefromjpeg($file->getStream()->getMetadata('uri'));
                $imgRedimens = $this->redimensImg($imagem, $largura, $altura);
                imagejpeg($imgRedimens, $destino . $file->getClientFilename());
                break;
            case 'image/png':
            case 'image/x-png':
                $imagem = imagecreatefrompng($file->getStream()->getMetadata('uri'));
                $imgRedimens = $this->redimensImg($imagem, $largura, $altura);
                imagepng($imgRedimens, $destino . $file->getClientFilename());
                break;
        }
    }
    protected function redimensImg($imagem, $largura, $altura)
    {
        $largura_original = imagesx($imagem);
        $altura_original = imagesy($imagem);
        $imgRedimens = imagecreatetruecolor($largura, $altura);
        imagecopyresampled($imgRedimens, $imagem, 0, 0, 0, 0, $largura, $altura, $largura_original, $altura_original);
        return $imgRedimens;
    }
    public function criarDiretorioImgRed(string $destino)
    {
        if (!file_exists($destino)) {
            mkdir($destino, 0777, true);
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
    public function slugUploadImgRed($name)
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
