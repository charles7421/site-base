<?php

App::uses('Component', 'Controller');

class UploadComponent extends Component {

    public $caminho = "app\webroot";
    public $uses = array('Imagem');

    public function upload($data = null, $nomeArquivo = null, $tamanhos = null) {
        App::import('Vendor', 'PhpThumbFactory', array('file' => 'phpThumb/ThumbLib.inc.php'));
        if (!empty($data)) {
            $filename = $data['name'];
            $file_tmp_name = $data['tmp_name'];
            $dir = WWW_ROOT . 'img' . DS . 'uploads';
            $dirMiniatura = WWW_ROOT . 'img' . DS . 'uploads' . DS . 'mini';
            //print_r($dir); exit;
            $allowed = array('png', 'jpg', 'gif', 'bmp');

            if (!in_array(substr(strrchr($filename, '.'), 1), $allowed)) {
                throw new NotFoundException("Extensão não permitida", 1);
            } elseif (is_uploaded_file($file_tmp_name)) {
                $nomeArquivo = $nomeArquivo . '.' . substr(strrchr($filename, '.'), 1);
                move_uploaded_file($file_tmp_name, $dir . DS . 'original_' . $nomeArquivo);
                $image_name = $dir . DS . 'original_' . $nomeArquivo;
                if ($tamanhos != null) {
                    foreach ($tamanhos as $key => $value) {
                        $thumb = PhpThumbFactory::create($image_name);
                        $thumb->adaptiveResize($key, $value)->save($dirMiniatura . DS . $key . '_' . $nomeArquivo);
                    }
                }
            }
        }
        return $nomeArquivo;
    }

    public function uploadParceiro($data = null, $nomeArquivo = null) {
        App::import('Vendor', 'PhpThumbFactory', array('file' => 'phpThumb/ThumbLib.inc.php'));
        if (!empty($data)) {
            //pr($data);exit;
            $filename = $data['name'];
            $file_tmp_name = $data['tmp_name'];
            $dir = WWW_ROOT . 'img' . DS . 'uploads'. DS. 'parceiros';
            $allowed = array('png', 'jpg', 'gif', 'bmp');
            if (!in_array(substr(strrchr(strtolower($filename), '.'), 1), $allowed)) {
                throw new NotFoundException("Extensão não permitida", 1);
            } elseif (is_uploaded_file($file_tmp_name)) {
                $nomeArquivo = $nomeArquivo . '.' . substr(strrchr($filename, '.'), 1);
                move_uploaded_file($file_tmp_name, $dir . DS  . $nomeArquivo);
                $image_name = $dir . DS  . $nomeArquivo;
                $thumb = PhpThumbFactory::create($image_name);
                $thumb->adaptiveResize('800', '500')->save($image_name);
            }
        }
        return $nomeArquivo;
    }
    public function uploadArquivo($data = null, $nomeArquivo = null) {
        App::import('Vendor', 'PhpThumbFactory', array('file' => 'phpThumb/ThumbLib.inc.php'));
        if (!empty($data)) {
            //pr($data);exit;
            $filename = $data['name'];
            $file_tmp_name = $data['tmp_name'];
            $dir = WWW_ROOT . 'img' . DS . 'uploads';
            $allowed = array('png', 'jpg', 'gif', 'bmp');
            if (!in_array(substr(strrchr(strtolower($filename), '.'), 1), $allowed)) {
                throw new NotFoundException("Extensão não permitida", 1);
            } elseif (is_uploaded_file($file_tmp_name)) {
                $nomeArquivo = $nomeArquivo . '.' . substr(strrchr($filename, '.'), 1);
                move_uploaded_file($file_tmp_name, $dir . DS  . $nomeArquivo);
                $image_name = $dir . DS  . $nomeArquivo;
                $thumb = PhpThumbFactory::create($image_name);
                $thumb->adaptiveResize('800', '500')->save($image_name);
            }
        }
        return $nomeArquivo;
    }

    public function uploadOutro($data = null, $nomeArquivo = null) {
        if (!empty($data)) {
            //pr($data);exit;
            $filename = $data['name'];
            $file_tmp_name = $data['tmp_name'];
            $dir = WWW_ROOT . 'files';
            $allowed = array('pdf', 'doc', 'docx', 'odt');

            if (!in_array(substr(strrchr($filename, '.'), 1), $allowed)) {
                $this->Session->setFlash(__('Extensão não permitida.'));
            } elseif (is_uploaded_file($file_tmp_name)) {
                $nomeArquivo = $nomeArquivo . '.' . substr(strrchr($filename, '.'), 1);
                move_uploaded_file($file_tmp_name, $dir . DS . $nomeArquivo);
            }
        }
        return $nomeArquivo;
    }

    public function uploadAlbum($file = null, $nomeArquivo = null, $tamanhos = null, $idAlbum = null) {
        App::import('Vendor', 'PhpThumbFactory', array('file' => 'phpThumb/ThumbLib.inc.php'));
        if (!empty($file)) {
            if (!is_dir(WWW_ROOT . 'img' . DS . 'uploads' . DS . 'album' . DS . $idAlbum)) {
                App::uses('Folder', 'Utility');
                $folder = new Folder();
                //Criar pastas para armazenar as fotos do album
                if ($folder->create(WWW_ROOT . 'img' . DS . 'uploads' . DS . 'album' . DS . $idAlbum)) {
                    $folder->chmod(WWW_ROOT . 'img' . DS . 'uploads' . DS . 'album' . DS . $idAlbum, 0755, true);
                } else {
                    return false;
                }
                $folder = new Folder();
                //Criar pastas para armazenar as fotos de mini do album
                if ($folder->create(WWW_ROOT . 'img' . DS . 'uploads' . DS . 'album' . DS . $idAlbum . DS . 'mini')) {
                    //se conseguiu criar o diretório eu dou permissão  
                    $folder->chmod(WWW_ROOT . 'img' . DS . 'uploads' . DS . 'album' . DS . $idAlbum . DS . 'mini', 0755, true);
                } else {
                    return false;
                }
            }

            //pr($file);exit;
            $filename = $file['name'];
            $file_tmp_name = $file['tmp_name'];
            $dir = WWW_ROOT . 'img' . DS . 'uploads' . DS . 'album' . DS . $idAlbum;
            $dirMiniatura = WWW_ROOT . 'img' . DS . 'uploads' . DS . 'album' . DS . $idAlbum . DS . 'mini';
            $allowed = array('png', 'jpg', 'gif', 'bmp');

            if (!in_array(substr(strrchr(strtolower($filename), '.'), 1), $allowed)) {
                throw new NotFoundException("Extensão não permitida", 1);
            } elseif (is_uploaded_file($file_tmp_name)) {
                $nomeArquivoTemp = $nomeArquivo . '.' . substr(strrchr($filename, '.'), 1);
                move_uploaded_file($file_tmp_name, $dir . DS . 'original_' . $nomeArquivoTemp);
                $image_name = $dir . DS . 'original_' . $nomeArquivoTemp;
                if ($tamanhos != null) {
                    foreach ($tamanhos as $key => $value) {
                        $thumb = PhpThumbFactory::create($image_name);
                        $thumb->adaptiveResize($key, $value)->save($dirMiniatura . DS . $key . '_' . $nomeArquivoTemp);
                    }
                }
            }
        }
        return $nomeArquivoTemp;
    }

    public function resize($width = 0, $height = 0, $r = 255, $g = 255, $b = 255, $ratio = true) {
        if (!$this->info['width'] || !$this->info['height']) {
            return;
        }

        $xpos = 0;
        $ypos = 0;

        $scale = min($width / $this->info['width'], $height / $this->info['height']);

        if ($scale == 1) {
            return;
        }

        if ($ratio != false) {
            $new_width = (int) ($this->info['width'] * $scale);
            $new_height = (int) ($this->info['height'] * $scale);
            $xpos = (int) (($width - $new_width) / 2);
            $ypos = (int) (($height - $new_height) / 2);

            $image_old = $this->image;
            $this->image = imagecreatetruecolor($width, $height);

            if (isset($this->info['mime']) && $this->info['mime'] == 'image/png') {
                imagealphablending($this->image, false);
                imagesavealpha($this->image, true);
                $background = imagecolorallocatealpha($this->image, $r, $g, $b, 127);
                imagecolortransparent($this->image, $background);
            } else {
                $background = imagecolorallocate($this->image, $r, $g, $b);
            }

            imagefilledrectangle($this->image, 0, 0, $width, $height, $background);

            imagecopyresampled($this->image, $image_old, $xpos, $ypos, 0, 0, $new_width, $new_height, $this->info['width'], $this->info['height']);
            imagedestroy($image_old);

            $this->info['width'] = $width;
            $this->info['height'] = $height;
        } else {

            $new_width = (int) ($width);
            $new_height = (int) ($height);
            $xpos = (int) (($width - $new_width) / 2);
            $ypos = (int) (($height - $new_height) / 2);

            $image_old = $this->image;
            $this->image = imagecreatetruecolor($width, $height);

            if (isset($this->info['mime']) && $this->info['mime'] == 'image/png') {
                imagealphablending($this->image, false);
                imagesavealpha($this->image, true);
                $background = imagecolorallocatealpha($this->image, $r, $g, $b, 127);
                imagecolortransparent($this->image, $background);
            } else {
                $background = imagecolorallocate($this->image, $r, $g, $b);
            }

            imagefilledrectangle($this->image, 0, 0, $width, $height, $background);

            imagecopyresampled($this->image, $image_old, $xpos, $ypos, 0, 0, $new_width, $new_height, $this->info['width'], $this->info['height']);
            imagedestroy($image_old);

            $this->info['width'] = $width;
            $this->info['height'] = $height;
        }
    }

    function deletarPastas($dir) {
        $files = array_diff(scandir($dir), array('.', '..'));
        foreach ($files as $file) {
            (is_dir("$dir/$file")) ? $this->deletarPastas("$dir/$file") : unlink("$dir/$file");
        }
        return rmdir($dir);
    }

}

?>
