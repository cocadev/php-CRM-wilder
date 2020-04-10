<?php 

session_start();
if (isset($_SESSION['username'])){

}else {
    header('Location: ' . SITE_URL . '/controller/login.php');
}

require '../admin/config.php';
require '../admin/functions.php';	
require '../views/header.view.php';

$errors = '';   

$connect = connect($database);
if(!$connect){
	header('Location: ' . SITE_URL . '/controller/error.php');
}

$exercises = get_all_exercises($connect);
$workouts = get_all_workouts($connect);
$diets = get_all_diets($connect);
$posts = get_all_posts($connect);
$users = get_all_users($connect);
$posts_filtered_by_date = get_all_posts_filtered_by_datte($connect);
$menu = get_menu($connect);

$tags_total = number_tags($connect);
$posts_total = number_posts($connect);
$exercises_total = number_exercises($connect);
$workouts_total = number_workouts($connect);
$diets_total = number_diets($connect);
$goals_total = number_goals($connect);
$levels_total = number_levels($connect);
$quotes_total = number_quotes($connect);
$bodyparts_total = number_bodyparts($connect);
$equipments_total = number_equipments($connect);
$categories_total = number_categories($connect);

require '../views/admin.navbar.view.php';
require '../views/home.view.php';

?>