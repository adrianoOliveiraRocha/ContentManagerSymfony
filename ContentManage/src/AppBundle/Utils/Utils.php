<?php
namespace AppBundle\Utils;
use Intervention\Image\ImageManager;


class Utils {
    
    public static function uploadImage($file){
        $errors = []; // Store all foreseen and unforseen errors here
        $fileExtensions = ['jpeg','jpg','png']; // Get all the file extensions

        $fileName = $file['name'];
        $fileTmpName  = $file['tmp_name'];
        $fileSize = $file['size'];
        $fileType = $file['type'];
        $fileExtension = pathinfo($fileName, PATHINFO_EXTENSION);

        $date = new DateTime();
        $fileNameUploaded = $date->getTimestamp() . basename($fileName);

        $uploadPath = '../../../web/upload/images/' . $fileNameUploaded;

        if (! in_array($fileExtension, $fileExtensions)) {
            $errors[] = "Esse tipo de arquivo não é permitido " .
            "Por favor! envie um arquivo jpg, jpeg ou png";
        }

        if ($fileSize > 2000000) {
            $errors[] = "Esse arquivo tem mais de 2MB. Por favor! envie um " .
            "arquivo com tamanho menor ou igual a 2MB";
        }

        if (empty($errors)){
            $didUpload = move_uploaded_file($fileTmpName, $uploadPath);

            if ($didUpload) {
                $promotion = new Promotion();
                $promotion->setImage($fileNameUploaded);

                if ($promotion->save()) {
                    //create thumbnail
                    $dest = PROMOTION_IMAGES;
                    Utils::make_thumb($uploadPath, $dest, $fileNameUploaded);
                        header('location: admin?alert=success');
                } else {
                    header('location: admin?alert=error');
                }

            } else {
                foreach ($errors as $error) {
                    echo "<div style='color: red;'>{$error}</div> </br>";
                }
            }
        }
    }

    public static function make_thumb($src, $dest, $fileName) {
        $manager = new ImageManager(array('driver' => 'imagick'));
        $image = $manager->make($src)->resize(100, 100);
        $dest = $dest . '/thumb/'. $fileName;
        $image->save($dest);
    }
}

