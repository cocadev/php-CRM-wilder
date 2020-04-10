<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>renderizeMenu by Davicotico - w/Bootstrap 3 & Smartmenus </title>
    <link href="../menulib/jquery.smartmenus.bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="../otherlib/css/bootstrap.css">
    <link href="https://fonts.googleapis.com/css2?family=Michroma&display=swap" rel="stylesheet">
    <style>
        .punter-text {
            cursor: pointer; float: left; list-style-type:none; padding: 18px 20px; color: #fff; font-size: 20px; font-family: 'Michroma', sans-serif;
        }
    </style>
</head>
<body>
<!-- Navbar fixed top -->
<div class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="navbar-collapse collapse">
            <ul>
                <li class="punter-text">
                    <a class="text-white" href="<?php echo SITE_URL ?>/controller/home.php">Home</a>
                </li>
                <li class="punter-text">
                    <a class="text-white" href="<?php echo SITE_URL ?>/controller/tipsters.php" >Customers</a>
                </li>
                <li class="punter-text">
                    <a class="text-white" href="<?php echo SITE_URL ?>/controller/results.php">Posts</a>
                </li>
                <li class="punter-text">
                    <a class="text-white" href="<?php echo SITE_URL ?>/controller/posts.php">About Us</a>
                </li>
                <li class="punter-text" data-toggle="modal" data-target="#myModal">
                    <a class="text-white">Contact Us</a>
                </li>
                <li class="punter-text">
                    <a class="text-white" href="<?php echo SITE_URL ?>/controller/login.php">Become a member</a>
                </li>
            </ul>
        </div>
    </div>
</div>

<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">

        <!-- Modal content-->
        <div class="modal-content">

            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal">&times;</button>

                <h2 class="modal-title mt-03 mb-1">Contact Us</h2>

                <div class="form-group">
                    <input type="text" class="modal-input w-full" id="name" placeholder="Your Name">

                    <input type="text" class="modal-input w-full" id="add" placeholder="Your Email Address">

                    <input type="text" class="modal-input w-full" id="sub" placeholder="Subject (optional)">

                    <textarea class="modal-input w-full pt-1" rows="8" id="msg" placeholder="Your message"></textarea>

                </div>

                <button data-dismiss="modal" style="float:right">
                    <span class="text-darker submit-btn">Submit</span>
                </button>
                <div style="clear:both"></div>

            </div>

        </div>

    </div>
</div>

<script src="../otherlib/js/jquery.min.js"></script>
<script src="../otherlib/js/bootstrap.min.js"></script>


<?php
    $connect = connect($database);
    $menu = get_menu($connect)[0]['content'];
?>

<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
<script src="../menulib/renderMenu.js"></script>
<script type="text/javascript" src="../menulib/jquery.smartmenus.min.js"></script>
<script type="text/javascript" src="../menulib/jquery.smartmenus.bootstrap.js"></script>

</body>
</html>
