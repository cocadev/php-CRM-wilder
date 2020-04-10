<?php 



session_start();

if (isset($_SESSION['username'])){
    
    header('Location: ./controller/index.php');
} else {
    
    header('Location: ./controller/index.php');
}



?>