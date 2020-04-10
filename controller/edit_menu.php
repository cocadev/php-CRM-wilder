<?php

session_start();
if (isset($_SESSION['username'])){


    require '../admin/config.php';
    require '../admin/functions.php';
    require '../views/header.view.php';
    require '../views/admin.navbar.view.php';
//    require '../views/menubar.view.php';

    $connect = connect($database);
    if(!$connect){
        header ('Location: ' . SITE_URL . '/controller/error.php');
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){

        $content = ($_POST['out']);
        $statment = $connect->prepare(
            'UPDATE menu SET content = :content '
        );
        $statment->execute(array(
            ':content' => $content,
        ));
            header('Location: ' . SITE_URL . '/controller/home.php');

    } else{

//        $id_post = id_post($_GET['id']);
//
//        if(empty($id_post)){
//            header('Location: ' . SITE_URL . '/controller/home.php');
//        }
//
//        $post = get_post_per_id($connect, $id_post);
//
//        if (!$post){
//            header('Location: ' . SITE_URL . '/controller/home.php');
//        }
//
//        $post = $post['0'];

    }

    $tags_lists = get_all_tags($connect);

    require '../views/editmenu.view.php';

} else {
    header('Location: ' . SITE_URL . '/controller/login.php');
}


?>