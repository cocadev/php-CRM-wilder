<?php
session_start();

require '../admin/config.php';
require '../admin/functions.php';
require '../views/header.view.php';

$connect = connect($database);
$menu = get_menu($connect);
$editHome = get_all_edit_home($connect);

require '../views/navbar.view.php';
require '../views/menubar.view.php';

require '../views/index.view.php';
require '../views/footer.view.php';






?>