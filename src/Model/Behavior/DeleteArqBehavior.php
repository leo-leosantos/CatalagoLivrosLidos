<?php
namespace App\Model\Behavior;

use Cake\ORM\Behavior;
use Cake\ORM\Table;
use Cake\Filesystem\File;
use Cake\Filesystem\Folder;
/**
 * DeleteArq behavior
 */
class DeleteArqBehavior extends \Cake\ORM\Behavior
{
    /**
     * Default configuration.
     *
     * @var array
     */
    protected $_defaultConfig = [];
    public function deleteArq($destino)
    {
        $diretorio = new \Cake\Filesystem\Folder($destino);
        if ($diretorio->delete($destino)) {
            return true;
        } else {
            return false;
        }
    }
    public function deleteFile($destino, $aqrAntigo, $arqNovo = null)
    {
        if ($aqrAntigo !== null and $aqrAntigo !== $arqNovo) {
            $file = $destino . $aqrAntigo;
            unlink($file);
        }
    }
}
