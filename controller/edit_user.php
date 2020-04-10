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

        $username = cleardata($_POST['username']);
        $old_username = $_POST['old_username'];

        $duplicated = number_same_username($connect, $username);

        echo 'DUPLICATE COUNT = '.$duplicated;
        echo 'OLD USER = ~~~~'.$old_username;
        echo 'Current USER = ~~~~'.$username;

        if(($duplicated == 1 && $old_username == $username) || $duplicated == 0) {

            $email = $_POST['email'];
            $website = $_POST['website'];
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $nickname = $_POST['nickname'];

            $publicly = $_POST['publicly'];
            $biographical = $_POST['biographical'];
            $history = $_POST['history'];
            $level = $_POST['level'];
            $expires = $_POST['expires'];

            $address = $_POST['address'];
            $suburb = $_POST['suburb'];
            $state = $_POST['state'];
            $postcode = $_POST['postcode'];
            $mobile = $_POST['mobile'];
            $bookmakers = $_POST['bookmakers'];
            $introduce = $_POST['introduce'];
            $country = $_POST['country'];
            $ppp = $_POST['sms'];
            if ($_POST['sms'] == 1) {
                $sms = 0;
            } else {
                $sms = 1;
            }
            $birth = $_POST['birth'];
            $role = $_POST['role'];

            $user_id = cleardata($_POST['id']);
            $post_image_save = $_POST['post_image_save'];
            $post_image = $_FILES['post_image'];


            if (empty($post_image['name'])) {
                $post_image = $post_image_save;
            } else {
                $imagefile = explode(".", $_FILES["post_image"]["name"]);
                $renamefile = round(microtime(true)) . '.' . end($imagefile);
                $post_image_upload = '../' . $items_config['images_folder'];
                move_uploaded_file($_FILES['post_image']['tmp_name'], $post_image_upload . 'post_' . $renamefile);
                $post_image = 'post_' . $renamefile;
            }

            $statment = $connect->prepare(
                'UPDATE managers SET username = :username, email = :email, website =:website,
                        firstname = :firstname, lastname = :lastname, nickname = :nickname, publicly =:publicly, 
                        biographical = :biographical, history =:history, level =:level, expires =:expires,
                        address = :address, suburb =:suburb, state =:state, postcode =:postcode,
                        mobile = :mobile, bookmakers =:bookmakers, introduce =:introduce, country =:country, sms =:sms, birth =:birth, role =:role,
                        post_image = :post_image WHERE id = :user_id'
            );

            $statment->execute(array(

                ':username' => $username,
                ':email' => $email,
                ':website' => $website,
                ':firstname' => $firstname,
                ':lastname' => $lastname,
                ':nickname' => $nickname,
                ':publicly' => $publicly,
                ':biographical' => $biographical,
                ':history' => $history,
                ':level' => $level,
                ':expires' => $expires,
                ':address' => $address,
                ':suburb' => $suburb,
                ':state' => $state,
                ':postcode' => $postcode,
                ':mobile' => $mobile,
                ':bookmakers' => $bookmakers,
                ':introduce' => $introduce,
                ':country' => $country,
                ':sms' => $sms,
                ':birth' => $birth,
                ':role' => $role,
                ':post_image' => $post_image,
                ':user_id' => $user_id

            ));

            header('Location:' . SITE_URL . '/controller/users.php' . '?update=success');

        }else {
            header('Location:' . SITE_URL . '/controller/users.php' . '?update=fail');
        }

    } else{

        $id_user = id_user($_GET['id']);

        if(empty($id_user)){
            header('Location: ' . SITE_URL . '/controller/home.php');
        }

        $user = get_user_per_id($connect, $id_user);

        if (!$user){
            header('Location: ' . SITE_URL . '/controller/home.php');
        }

        $user = $user['0'];

    }

    $tags_lists = get_all_tags($connect);

    require '../views/edit.user.view.php';

} else {
    header('Location: ' . SITE_URL . '/controller/login.php');
}


?>