<?php

    header('Content-Type: application/json');
    header("access-control-allow-origin: *");

    require '../admin/config.php';

    $content = trim(file_get_contents("php://input"));
    $decoded = json_decode($content, true);

    $connection = mysqli_connect($database['host'],$database['user'], $database['pass'], $database['db'])
    or die("An unexpected error has occurred in the database connection");


if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if(isset($decoded["post_title"]) && isset($decoded["post_date"]) && isset($decoded["post_image"])) {

        $post_title = '"'.$decoded["post_title"].'"';
        $post_date = '"'.$decoded["post_date"].'"';
        $post_image = '"'.$decoded["post_image"].'"';

        $Results = array(
            'post_title'=> $post_title,
            'post_date'=> $post_date,
            'post_image'=> $post_image
        );

//        $statment = $connect->prepare(
//            'INSERT INTO posts (post_id, post_title, post_date, post_image) VALUES (null, :post_title, :post_date, :post_image)'
//        );
//
//        $statment->execute(array(
////            ':post_title' => $post_title,
////            ':post_date' => $post_date,
////            ':post_image' => $post_image
//            ':post_title' => "Hello brothers",
//            ':post_date' => "2019-08-07",
//            ':post_image' => "race-190806111845.jpg"
//        ));

//        var_dump(http_response_code(400));
//
//        $json_results = json_encode($Results);
//        print ($json_results);


        $sql = "INSERT INTO posts (post_id, post_title, post_date, post_image) VALUES (null, $post_title, $post_date, $post_image)";

        mysqli_set_charset($connection, "utf8");

        if (!$result = mysqli_query($connection, $sql))die();
        print ($result);


    }else{
        $Results = array(
            'code'=> 400,
            'message'=> 'Bad request',
            'result'=> null
        );

        var_dump(http_response_code(400));

        $json_results = json_encode($Results);
        print ($json_results);
    }




//    $imagefile = explode(".", $_FILES["post_image"]["name"]);
//    $renamefile = round(microtime(true)) . '.' . end($imagefile);
//
//    $post_image_upload = '../' . $items_config['images_folder'];
//
//    move_uploaded_file($post_image, $post_image_upload . 'post_' . $renamefile);
//
//    $statment = $connect->prepare(
//        'INSERT INTO posts (post_id, post_title, post_date, post_image) VALUES (null, :post_title, :post_date, :post_image)'
//    );
//
//    $statment->execute(array(
//        ':post_title' => $post_title,
//        ':post_date' => $post_date,
//        ':post_image' => 'post_' . $renamefile
//    ));


//        $close = mysqli_close($connection)
//        or die("An unexpected error has occurred in the disconnection of the database");


//    $json_string = json_encode($posts);
//    print ($json_string);



    } else {

        $Results = array(
            'code'=> 400,
            'message'=> 'Only available post request',
            'result'=> null
        );

        var_dump(http_response_code(400));

        $json_results = json_encode($Results);
        print ($json_results);
        }

?>