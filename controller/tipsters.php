<?php
session_start();

require '../admin/config.php';
require '../admin/functions.php';
require '../views/header.view.php';

$connect = connect($database);
if(!$connect){
    header('Location: ' . SITE_URL . '/controller/error.php');
}

$Tipsters = get_all_edit_tipsters($connect);

require '../views/navbar.view.php';
require '../views/menubar.view.php';

require '../views/tipsters.view.php';
require '../views/footer.view.php';

?>