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
        $arr = array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21);
        foreach ($arr as &$value): {
            $post_image[$value] = $_FILES['home_img'.$value];
            $post_image_save[$value] = $_POST['post_image_save'.$value];
            if (empty($post_image[$value]['name'])) {
                $post_image[$value] = $post_image_save[$value];
            } else {
                $imagefile[$value] = explode(".", $_FILES["home_img".$value]["name"]);
                $renamefile[$value] = 'home'.$value.'_'.round(microtime(true)) . '.' . end($imagefile[$value]);
                move_uploaded_file($_FILES['home_img'.$value]['tmp_name'], $post_image_upload . 'post_' . $renamefile[$value]);
                $post_image[$value] = 'post_' . $renamefile[$value];
            }
        }
        endforeach;

        $statment = $connect->prepare(
            'UPDATE edit_home SET 
                    advert0 = :post_image0,
                    advert1 = :post_image1,
                    advert2 = :post_image2,
                    advert3 = :post_image3,
                    advert4 = :post_image4,
                    advert5 = :post_image5,
                    advert6 = :post_image6,
                    advert7 = :post_image7,
                    advert8 = :post_image8,
                    advert9 = :post_image9,
                    advert10 = :post_image10,
                    advert11 = :post_image11,
                    advert12 = :post_image12,
                    advert13 = :post_image13,
                    advert14 = :post_image14,
                    advert15 = :post_image15,
                    advert16 = :post_image16,
                    advert17 = :post_image17,
                    advert18 = :post_image18,
                    advert19 = :post_image19,
                    advert20 = :post_image20,
                    main_img = :post_image21
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
            ':post_image7' => $post_image[7],
            ':post_image8' => $post_image[8],
            ':post_image9' => $post_image[9],
            ':post_image10' => $post_image[10],
            ':post_image11' => $post_image[11],
            ':post_image12' => $post_image[12],
            ':post_image13' => $post_image[13],
            ':post_image14' => $post_image[14],
            ':post_image15' => $post_image[15],
            ':post_image16' => $post_image[16],
            ':post_image17' => $post_image[17],
            ':post_image18' => $post_image[18],
            ':post_image19' => $post_image[19],
            ':post_image20' => $post_image[20],
            ':post_image21' => $post_image[21]
        ));

        header('Location:' . SITE_URL . '/controller/edit_home.php');

    }else {

    }

    $editHome = get_all_edit_home($connect);

    require '../Edits/index.edit.php';
} else {
    header('Location: ' . SITE_URL . '/controller/login.php');
}

?>