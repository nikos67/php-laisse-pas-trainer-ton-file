<?php
define('ALLOWED_EXTENSIONS',['jpg','png','gif']);
$uploadDir = __DIR__ . '/upload/';

if($_POST){
    $nbImages = count($_FILES['fichier']['name']);
    if($nbImages>0){
        for($i=0; $i<$nbImages;$i++){
            if($_FILES['fichier']['size'][$i] < 1000000){
                $extension = pathinfo($_FILES['fichier']['name'][$i], PATHINFO_EXTENSION);
                if(in_array($extension,ALLOWED_EXTENSIONS)){
                    $filename = 'image' . uniqid() . '.' .$extension;
                    $uploadFile = $uploadDir . basename($filename);
                    if(move_uploaded_file($_FILES['fichier']['tmp_name'][$i], $uploadFile)){
                        $error = 'GOOD';
                        header('location:Images.php');
                    }else{
                        $error = 'Problème d\'upload';
                    }
                }else{
                    $error = 'Extension non autorisée';
                }
            }else{
                $error = 'fichier trop volumineux';
            }
        }
    }
}
?>



