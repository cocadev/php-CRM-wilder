<?php

header('Content-Type: application/json');
header("access-control-allow-origin: *");

require '../admin/config.php';

$content = trim(file_get_contents("php://input"));
$decoded = json_decode($content, true);


    $connection = mysqli_connect($database['host'], $database['user'], $database['pass'], $database['db'])
    or die("An unexpected error has occurred in the database connection");


if(isset($decoded["username"]) && isset($decoded["password"]) ) {

    $username = '"'.$decoded["username"].'"';
    $password = '"'.$decoded["password"].'"';

    $sql = "SELECT * FROM managers WHERE username = $username AND password = $password";
    mysqli_set_charset($connection, "utf8");

    if (!$result = mysqli_query($connection, $sql))die();

    $tags = array();
    $id = 0;

    while ($row = mysqli_fetch_array($result)) {
        $username = $row['username'];
        $password = $row['password'];
        $tags[] = array(
            'username' => $username,
            'password' => $password,
        );

    }

    $json_string = json_encode($tags);
    $myObj ='';
    if($tags==[]){
        $myObj = new stdClass();
        $myObj->result = false;
        $myObj->message = "Fail! Invalid User";
        $myJSON = json_encode($myObj);
        echo $myJSON;
    }else {
        $myObj = new stdClass();
        $myObj->result = true;
        $myObj->message = "Success";
        $myObj->user = $decoded["username"];
        $myObj->token = base64_encode(random_bytes(1024));
        $myJSON = json_encode($myObj);
        echo $myJSON;
    }

	} else {
		print ('Go Away');
	}

?>
