<?php
session_start();
if (isset($_SESSION['username'])) {

    require '../admin/config.php';
    require '../admin/functions.php';
    require '../views/header.view.php';
    require '../views/admin.navbar.view.php';

    $connect = connect($database);
    if(!$connect){
        header('Location: ' . SITE_URL . '/controller/error.php');
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){

        $post_image[] = '';
        $post_image_upload = '../' . $items_config['images_folder'];
        $arr = array(0);
        foreach ($arr as &$value): {
            $post_image[$value] = $_FILES['logo_img'.$value];
            $post_image_save[$value] = $_POST['post_image_save'.$value];
            if (empty($post_image[$value]['name'])) {
                $post_image[$value] = $post_image_save[$value];
            } else {
                $imagefile[$value] = explode(".", $_FILES["logo_img".$value]["name"]);
                $renamefile[$value] = 'logo'.$value.'_'.round(microtime(true)) . '.' . end($imagefile[$value]);
                move_uploaded_file($_FILES['logo_img'.$value]['tmp_name'], $post_image_upload . 'post_' . $renamefile[$value]);
                $post_image[$value] = 'post_' . $renamefile[$value];
            }
        }
        endforeach;

        $statment = $connect->prepare(
            'UPDATE edit_home SET logo = :post_image0 WHERE id = 1'
        );

        $statment->execute(array(
            ':post_image0' => $post_image[0]
        ));

        header('Location:' . SITE_URL . '/controller/edit_logo.php');

    }else {

    }

    $editHome = get_all_edit_home($connect);

    require '../edits/logo.edit.php';
}
else {
    header('Location: ' . SITE_URL . '/controller/login.php');
}

?>