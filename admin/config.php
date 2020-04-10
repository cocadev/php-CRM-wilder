<?php



/* URL PROJECT */

define ('SITE_URL', 'http://localhost');

/* DATABASE CONFIGURATION */

$database = array(
    'host' => 'localhost',
    'db' => 'mypunter',
    'user' => 'root',
    'pass' => ''
);

$email_config = array(
    'email_address' => 'EMAIL_ADDRESS_HERE',
    'email_password' => 'PASSWORD_HERE',
    'email_subject' => 'EMAIL_SUBJECT_HERE',
    'email_name' => 'EMAIL_NAME_HERE',
    'smtp_host' => 'EMAIL_HOST_HERE',
    'smtp_port' => 'EMAIL_PORT_HERE',
    'smtp_encrypt' => 'tls'
);

$items_config = array(

    'items_per_page' => '8',
    'images_folder' => 'images/'
);


define ('HEAD_NOTICE_1', 'The number of Minnesotans older than 65 is expected to nearly double between 2010 and 2030. As this shift happens, Wilder is committed to improving the lives of individuals who #AgeinPlace and live where they feel most comfortable, whether in their own home or connected to their community. Seniors, older adults, adults with mental, physical and chronic health conditions and their caregivers have access to a variety of healthy aging and caregiving services, support and resources. Our goal is to help maintain their health, well-being and independence.');

define ('HEAD_NOTICE_2', 'Helping older adults and caregivers maintain their health, well-being and independence.');

define ('NEWS_API', 'https://newsapi.org/v2/top-headlines?country=au&category=sports&apiKey=08b6140e8db04919a08e0f5b66f173d6');




/* ~~~ Tipsters ~~~ */



?>