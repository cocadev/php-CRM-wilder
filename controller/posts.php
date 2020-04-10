<?php

 session_start();
if (isset($_SESSION['username'])){
    
    
require '../admin/config.php';
require '../admin/functions.php';	
require '../views/header.view.php';
require '../views/admin.navbar.view.php';
//require '../views/menubar.view.php';

$errors = '';   

$connect = connect($database);
if(!$connect){
	header('Location: ' . SITE_URL . '/controller/error.php');
	}

$posts = get_all_posts($connect);
 if (empty($posts)){
     $errors .='<div style="padding: 0px 15px;">No data found</div>';
}

$posts_total = number_posts($connect);

require '../views/posts.view.php';

}else {
		header('Location: ' . SITE_URL . '/controller/login.php');		
}


?>