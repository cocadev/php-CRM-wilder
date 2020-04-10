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
        $arr = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13);
        foreach ($arr as &$value): {
            $post_image[$value] = $_FILES['result_img'.$value];
            $post_image_save[$value] = $_POST['post_image_save'.$value];
            if (empty($post_image[$value]['name'])) {
                $post_image[$value] = $post_image_save[$value];
            } else {
                $imagefile[$value] = explode(".", $_FILES["result_img".$value]["name"]);
                $renamefile[$value] = 'result'.$value.'_'.round(microtime(true)) . '.' . end($imagefile[$value]);
                move_uploaded_file($_FILES['result_img'.$value]['tmp_name'], $post_image_upload . 'post_' . $renamefile[$value]);
                $post_image[$value] = 'post_' . $renamefile[$value];
            }
        }
        endforeach;

        $statment = $connect->prepare(
            'UPDATE edit_results SET 
                    advert1 = :post_image0,
                    advert2 = :post_image1,
                    advert3 = :post_image2,
                    advert4 = :post_image3,
                    advert5 = :post_image4,
                    advert6 = :post_image5,
                    advert7 = :post_image6,
                    advert8 = :post_image7,
                    advert9 = :post_image8,
                    advert10 = :post_image9,
                    advert11 = :post_image10,
                    advert12 = :post_image11,
                    advert13 = :post_image12
                    WHERE id = 1'
        );

        $statment->execute(array(
            ':post_image0' => $post_image[1],
            ':post_image1' => $post_image[2],
            ':post_image2' => $post_image[3],
            ':post_image3' => $post_image[4],
            ':post_image4' => $post_image[5],
            ':post_image5' => $post_image[6],
            ':post_image6' => $post_image[7],
            ':post_image7' => $post_image[8],
            ':post_image8' => $post_image[9],
            ':post_image9' => $post_image[10],
            ':post_image10' => $post_image[11],
            ':post_image11' => $post_image[12],
            ':post_image12' => $post_image[13]
        ));

        header('Location:' . SITE_URL . '/controller/edit_results.php');

    }else {

    }

    $editResults = get_all_edit_results($connect);

    require '../edits/frontend.post.edit.php';
}
else {
    header('Location: ' . SITE_URL . '/controller/login.php');
}

?>