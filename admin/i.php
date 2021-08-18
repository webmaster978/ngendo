<?php

function imgup()
{

    $url_img = basename($_FILES['img']['name']);
    $titre = htmlspecialchars($_POST['titre']);
    $contenue = htmlspecialchars_decode($_POST['cont']);


    $verif_img = getimagesize($_FILES['img']['tmp_name']);

    if (isset($_FILES['img']) and $_FILES['img']['error'] == 0) {
        if ($_FILES['img']['size'] <= 2000000) {

            $infosfichier = pathinfo($_FILES['img']['name']);
            $extension_upload = $infosfichier['extension'];
            $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png', 'JPG', 'JPEG', 'GIF', 'PNG');
            // if (in_array($extension_upload,$extensions_autorisees)){
            if ($verif_img and $verif_img[2] < 4) {
                if (move_uploaded_file($_FILES['img']['tmp_name'], 'blogs/' . $url_img)) {
                    require 'config/database.php';

                    $req = $db->prepare('INSERT INTO blog (avatar,titre,contenue) VALUES (:avatar,:titre,:contenue)');
                    $req->execute(array(
                        'avatar' => $_FILES['img']['name'],
                        'titre' => $titre,
                        'contenue' => $contenue

                    ));



                    header('location:blog?effectuer');
                    return true;
                }
            }
        } else {

            unlink($_FILES['img']['tmp_name']);
            unset($_FILES['img']);
        }
    }
}



if (imgup()) {
}
//var_dump($_FILES);