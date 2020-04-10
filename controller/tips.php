<?php
session_start();

require '../admin/config.php';
require '../admin/functions.php';	
require '../views/header.view.php';
require '../views/navbar.view.php';    
require '../views/menubar.view.php';

$connect = connect($database);
$d=strtotime("tomorrow");

$tips_day = array([
    date("Y-m-d"),
    date("Y-m-d", strtotime("+1 day")),
    date("Y-m-d", strtotime("+2 day")),
    date("Y-m-d", strtotime("+3 day")),
    date("Y-m-d", strtotime("+4 day")),
    date("Y-m-d", strtotime("+5 day")),
    date("Y-m-d", strtotime("+6 day"))
]);

$tips_day_posts = array([
    get_post_per_date($connect, $tips_day[0][0]),
    get_post_per_date($connect, $tips_day[0][1]),
    get_post_per_date($connect, $tips_day[0][2]),
    get_post_per_date($connect, $tips_day[0][3]),
    get_post_per_date($connect, $tips_day[0][4]),
    get_post_per_date($connect, $tips_day[0][5]),
]);

$all_posts = get_all_posts($connect);

require '../views/tips.view.php';

?>