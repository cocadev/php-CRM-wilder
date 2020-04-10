<?php
session_start();
require '../admin/config.php';
require '../admin/functions.php';
require '../views/header.view.php';
require '../views/navbar.view.php';
require '../views/menubar.view.php';

$connect = connect($database);

if(!$connect){
	header ('Location: ' . SITE_URL . '/controller/error.php');
}

$EditResults = get_all_edit_results($connect);
$id_post = id_post($_GET['id']);

if(empty($id_post)){
	header('Location: ' . SITE_URL . '/controller/home.php');
	}

$post = get_post_per_id($connect, $id_post);

    if (!$post){
    header('Location: ' . SITE_URL . '/controller/home.php');
}

$post = $post['0'];

require '../views/frontend.post.view.php';
require '../views/footer.view.php';


?>