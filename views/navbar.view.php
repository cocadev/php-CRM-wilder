<?php
$connect = connect($database);
$tickers = get_all_tickers($connect);
$editHome = get_all_edit_home($connect);
?>

<div class="bg-bbb pt-04 h-20">
    <marquee behavior="scroll" direction="left" scrollamount="5" onmouseover="this.stop();" onMouseOut="this.start();">
        <span class="text-darker font-size-16 font-weight"><?php echo $tickers[0]['header'] ?></span>
    </marquee>
</div>

<nav class="navbar-inverse navbar-embossed">

    <?php

    if (isset($_SESSION['username'])) {

        echo '<p class="text-white" style="position: absolute; top:50px">'."Signed as ".$_SESSION['username'].'</p>';

        ?>
        <a href="<?php echo SITE_URL ?>/controller/logout.php" >Sign out</a><br/>
        <a href="<?php echo SITE_URL ?>/controller/home.php" style="position: absolute; top:72px" class="text-white underline">Dashboard</a>

        <?php

    }else{ ?>
        <a class="text-white" style="position: absolute; left: 0" href="<?php echo SITE_URL ?>/controller/login.php">Sign in</a>
        <?php
    }
    ?>

</nav>

<div class="bg-darker ">

    <div class="container mypunter-padding-h">

        <div class="row pt-28">
            <div class="col-md-7">
                <div id="colorlib-logo">
                    <a href="<?php echo SITE_URL; ?>/controller/index.php">
                        <img src='<?php echo SITE_URL.'/images/logo.png' ?>' title="MyPunter" class="logo-punter nopadding img-responsive" /> </a>
                </div>
            </div>
            <div class="col-md-3"></div>
            <div class="col-md-2 pt-17 responsive-center">
                <span class="text-white font-weight font-size-13 ">Follow Us on</span>
                <br />
                <a href="https://www.facebook.com/wwsfit/" title="MyPunter Facebook" target="_blank">
                    <span class="fa fa-facebook"></span>
                </a>
                <a href="https://twitter.com/wwsfit" title="MyPunter Instagram" target="_blank">
                    <span class="fa fa-twitter"></span>
                </a>
                <a href="https://instagram.com/wwsfit/" title="MyPunter Instagram" target="_blank">
                    <span class="fa fa-instagram"></span>
                </a>
                <div class="mt-1"></div>
                <span class="text-white ">Contact Us</span>
                <br />
                <div class="mt-007-"></div>
                <a class="text-white underline font-size-13" href="mailto:support@wwsfit.com?subject=Thanks&body=Best Regards">support@wwsfit.com</a>
                <br />
            </div>
        </div>
    </div>
</div>



<div class="bg-bbb pt-04 h-20">
    <marquee behavior="scroll" direction="left" scrollamount="5" onmouseover="this.stop();" onMouseOut="this.start();">
        <span class="text-darker font-size-18 font-weight"><?php echo $tickers[0]['footer'] ?></span>
    </marquee>
</div>




