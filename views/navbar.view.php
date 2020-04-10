<div class="bg-darker pt-04 h-20">
    <marquee behavior="scroll" direction="left" scrollamount="5" onmouseover="this.stop();" onMouseOut="this.start();">
        <span class="text-white font-size-16">
            The Wilder Community Center for Aging in Saint Paul serves as a hub and resource for aging and caregiving services for families, caregivers, employers, counties, organizations and communities in Saint Paul, Minneapolis and Minnesota.
        </span>
    </marquee>
</div>

<nav class="navbar-inverse navbar-embossed">

    <?php

    if (isset($_SESSION['username'])) {

        echo '<p class="text-darker" style="position: absolute; top:50px">'."Signed as ".$_SESSION['username'].'</p>';

        ?>
        <a href="<?php echo SITE_URL ?>/controller/home.php" style="position: absolute; top:72px" class="text-darker underline">Dashboard</a>
        <a href="<?php echo SITE_URL ?>/controller/logout.php" >Sign out</a><br/>

        <?php

    }else{ ?>
        <a class="text-white" style="position: absolute; left: 0" href="<?php echo SITE_URL ?>/controller/login.php">Sign in</a>
        <?php
    }
    ?>

</nav>

<div class="">

    <div class="container mypunter-padding-h">

        <div class="row pt-28">
            <div class="col-md-7">
                <div id="colorlib-logo">
                    <a href="<?php echo SITE_URL; ?>/controller/index.php">
                        <img src='../files/logo.png' title="MyPunter" class="logo-punter nopadding img-responsive" />
                    </a>
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
                <span class="text-darker ">Contact Us</span>
                <br />
                <div class="mt-007-"></div>
                <a class="text-darker underline font-size-13" href="mailto:support@wwsfit.com?subject=Thanks&body=Best Regards">support@mypunter.com</a>
                <br />
            </div>
        </div>
    </div>
</div>




