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
        $arr = array(0, 1, 2, 3, 4, 5, 6, 7);
        foreach ($arr as &$value): {
            $post_image[$value] = $_FILES['sponsor_img'.$value];
            $post_image_save[$value] = $_POST['post_image_save'.$value];
            if (empty($post_image[$value]['name'])) {
                $post_image[$value] = $post_image_save[$value];
            } else {
                $imagefile[$value] = explode(".", $_FILES["sponsor_img".$value]["name"]);
                $renamefile[$value] = 'tipster'.$value.'_'.round(microtime(true)) . '.' . end($imagefile[$value]);
                move_uploaded_file($_FILES['sponsor_img'.$value]['tmp_name'], $post_image_upload . 'post_' . $renamefile[$value]);
                $post_image[$value] = 'post_' . $renamefile[$value];
            }
        }
        endforeach;

        $statment = $connect->prepare(
            'UPDATE edit_sponsors SET 
                    image1 = :post_image0,
                    image2 = :post_image1,
                    image3 = :post_image2,
                    image4 = :post_image3,
                    advert1 = :post_image4,
                    advert2 = :post_image5,
                    advert3 = :post_image6,
                    advert4 = :post_image7
                    WHERE id = 1'
        );

        $statment->execute(array(
            ':post_image0' => $post_image[0],
            ':post_image1' => $post_image[1],
            ':post_image2' => $post_image[2],
            ':post_image3' => $post_image[3],
            ':post_image4' => $post_image[4],
            ':post_image5' => $post_image[5],
            ':post_image6' => $post_image[6],
            ':post_image7' => $post_image[7]
        ));

        header('Location:' . SITE_URL . '/controller/edit_sponsors.php');

    }else {

    }

    $editSponors = get_all_edit_sponsors($connect);

    require '../edits/sponsors.edit.php';
}
else {
    header('Location: ' . SITE_URL . '/controller/login.php');
}

?>