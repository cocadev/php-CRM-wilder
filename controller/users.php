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
    if (isset($_GET["page"])) {
        $pn  = $_GET["page"];
    }
    else {
        $pn=1;
    };
    if (isset($_GET["search"])) {
        $searchKey  = $_GET["search"];
    }
    else {
        $searchKey='';
    };
    if (isset($_GET["limit"])) {
        $limit  = $_GET["limit"];
    }
    else {
        $limit=5;
    };
$users = get_page_users($connect, $pn, $searchKey, $limit);
 if (empty($users)){
     $errors .='<div style="padding: 0px 15px;">No data User</div>';
}

    $total_users = number_users($connect);
    $total_administrators = number_users_by_administrator($connect);
    $total_contributors = number_users_by_contributor($connect);
    $total_subscribers = number_users_by_subscriber($connect);
    $total_users_search = number_page_users($connect, $searchKey);

    require '../views/users.view.php';

}else {
		header('Location: ' . SITE_URL . '/controller/login.php');		
}


?>