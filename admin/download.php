<?php
$filename = 'users.csv';
$export_data = unserialize($_POST['export_data']);

// file creation
$file = fopen($filename,"w");

fputcsv($file, array('Username', 'RealName', 'Email', 'Role', 'Membership Level', 'Posts'));

foreach ($export_data as $line){
    fputcsv($file, $line);
}

fclose($file);

// download
header("Content-Description: File Transfer");
header("Content-Disposition: attachment; filename=".$filename);
header("Content-Type: application/csv; ");

readfile($filename);

// deleting file
unlink($filename);
exit();
