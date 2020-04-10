<?php

session_start();
if (isset($_SESSION['username'])){


require '../admin/config.php';
require '../admin/functions.php';
require '../views/header.view.php';
require '../views/admin.navbar.view.php';

$connect = connect($database);
if(!$connect){
	header ('Location: ' . SITE_URL . '/controller/error.php');
	}

if ($_SERVER['REQUEST_METHOD'] == 'POST'){

    $header = cleardata($_POST['header']);
    $footer = cleardata($_POST['footer']);
	$id = 1;

$statment = $connect->prepare(
	'UPDATE tickers SET header = :header, footer = :footer WHERE id = :id'
	);

$statment->execute(array(

        ':header' => $header,
        ':footer' => $footer,
		':id' => $id

		));

header('Location:' . SITE_URL . '/controller/posts.php');

}else {

}

$tickers = get_tickers($connect);

require '../views/tickers.view.php';



} else {
		header('Location: ' . SITE_URL . '/controller/login.php');
		}


?>