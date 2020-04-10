<?php 

session_start();
if (isset($_SESSION['username'])){
    
    
require '../admin/config.php';
require '../admin/functions.php';
require '../views/header.view.php';
require '../views/admin.navbar.view.php';

$errors = '';

$connect = connect($database);
if(!$connect){
	header('Location: ' . SITE_URL . '/controller/error.php');
	} 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $username = cleardata($_POST['username']);

    $duplicated = number_same_username($connect, $username);

        if ($duplicated >= 1) {
            echo '<script type="text/javascript">hulla.send("User existed!", "danger");</script>';
            $errors = 'This user already existed here!';
        } else {
            $password = cleardata($_POST['password']);
            $email = cleardata($_POST['email']);
            $role = cleardata($_POST['role']);
            $level = cleardata($_POST['level']);
            $post_image = $_FILES['post_image']['tmp_name'];

            $imagefile = explode(".", $_FILES["post_image"]["name"]);
            $renamefile = round(microtime(true)) . '.' . end($imagefile);

            $post_image_upload = '../' . $items_config['images_folder'];

            move_uploaded_file($post_image, $post_image_upload . 'post_' . $renamefile);

            $statment = $connect->prepare(
                'INSERT INTO managers (id, post_image, username, password, email, role, level) VALUES (null, :post_image, :username, :password, :email, :role, :level)'
            );

            $statment->execute(array(
                ':username' => $username,
                ':password' => $password,
                ':email' => $email,
                ':role' => $role,
                ':level' => $level,
                ':post_image' => 'post_' . $renamefile
            ));

            header('Location:' . SITE_URL . '/controller/users.php?add=success');
        }

}
$tags_lists = get_all_tags($connect);

require '../views/new.user.view.php';

}else {
		header('Location: ' . SITE_URL . '/controller/login.php');
		}


?>


