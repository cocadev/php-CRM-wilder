<?php 

session_start();
if (isset($_SESSION['username'])){
    
    
require '../admin/config.php';
require '../admin/functions.php';
require '../views/header.view.php';
require '../views/navbar.view.php'; 

$errors = '';

$connect = connect($database);

if(!$connect){
	header('Location: ' . SITE_URL . '/controller/error.php');
	} 

$user_id = cleardata($_GET['id']);

if(!$user_id){
	header('Location: ' . SITE_URL . '/controller/home.php');
}

$statement = $connect->prepare('DELETE FROM managers WHERE id = :user_id');
$statement->execute(array('user_id' => $user_id));

    $url = parse_url($_SERVER['HTTP_REFERER']);
    $trimmedHeader = $url['scheme'] . '://' . $url['host'] . $url['path'];
    header('Location: ' . $trimmedHeader . '?del=success');

}else {
		header('Location: ' . SITE_URL . '/controller/login.php');
		}


?>