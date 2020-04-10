<html lang="en">
<head>
    <title>PHP - Paypal Payment Gateway Integration</title>
</head>
<body style="background:#E1E1E1">
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap/latest/css/bootstrap.css" />
<style type="text/css">
    .price.panel-red>.panel-heading {
        color: #fff;
        background-color: #D04E50;
        border-color: #FF6062;
        border-bottom: 1px solid #FF6062;
    }
    .price.panel-red>.panel-body {
        color: #fff;
        background-color: #EF5A5C;
    }
    .price .list-group-item{
        border-bottom-:1px solid rgba(250,250,250, .5);
    }
    .panel.price .list-group-item:last-child {
        border-bottom-right-radius: 0px;
        border-bottom-left-radius: 0px;
    }
    .panel.price .list-group-item:first-child {
        border-top-right-radius: 0px;
        border-top-left-radius: 0px;
    }
    .price .panel-footer {
        color: #fff;
        border-bottom:0px;
        background-color:  rgba(0,0,0, .1);
        box-shadow: 0px 3px 0px rgba(0,0,0, .3);
    }
    .panel.price .btn{
        box-shadow: 0 -1px 0px rgba(50,50,50, .2) inset;
        border:0px;
    }
</style>
<?php
$paypalUrl='https://www.sandbox.paypal.com/cgi-bin/webscr';
$paypalId='smith2019@paypal.com';
?>

<div class="container text-center">
    <br/>
    <h2><strong>My punter Membership</strong></h2>
    <br/>
    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-4 col-md-offset-4 col-lg-3">
            <!-- PRICE ITEM -->
                <div class="panel price panel-red">

                    <div class="panel-heading text-center">
                        <h3>BASIC PLAN</h3>
                    </div>
                    <div class="panel-body text-center">
                        <p class="lead" style="font-size:40px"><strong>Free</strong></p>
                    </div>
                    <ul class="list-group list-group-flush text-center">
                        <li class="list-group-item"><i class="icon-ok text-danger"></i> Basic </li>
                        <li class="list-group-item"><i class="icon-ok text-danger"></i> Membership</li>
                        <li class="list-group-item"><i class="icon-ok text-danger"></i> mypunter.com</li>
                    </ul>
                    <div class="panel-footer">
                        <button class="btn btn-lg btn-block btn-danger" href="#">Free</button>
                    </div>
                </div>
            <!-- /PRICE ITEM -->
        </div>

        <div class="col-xs-6 col-sm-6 col-md-4 col-md-offset-4 col-lg-3">
            <!-- PRICE ITEM -->
            <form action="<?php echo $paypalUrl; ?>" method="post" name="frmPayPal1">
                <div class="panel price panel-red">
                    <input type="hidden" name="business" value="<?php echo $paypalId; ?>">
                    <input type="hidden" name="cmd" value="_xclick">
                    <input type="hidden" name="item_name" value="It Solution Stuff">
                    <input type="hidden" name="item_number" value="2">
                    <input type="hidden" name="amount" value="40">
                    <input type="hidden" name="no_shipping" value="1">
                    <input type="hidden" name="currency_code" value="USD">
                    <input type="hidden" name="cancel_return" value="http://demo.itsolutionstuff.com/paypal/cancel.php">
                    <input type="hidden" name="return" value="http://localhost/admin/payment.php">

                    <div class="panel-heading  text-center">
                        <h3>NORMAL PLAN</h3>
                    </div>
                    <div class="panel-body text-center">
                        <p class="lead" style="font-size:40px"><strong>$40</strong></p>
                    </div>
                    <ul class="list-group list-group-flush text-center">
                        <li class="list-group-item"><i class="icon-ok text-danger"></i> Welcome Punter </li>
                        <li class="list-group-item"><i class="icon-ok text-danger"></i> Membership</li>
                        <li class="list-group-item"><i class="icon-ok text-danger"></i> mypunter.com</li>
                    </ul>
                    <div class="panel-footer">
                        <button class="btn btn-lg btn-block btn-danger" href="#">BUY NOW!</button>
                    </div>
                </div>
            </form>
            <!-- /PRICE ITEM -->
        </div>
        <div class="col-xs-6 col-sm-6 col-md-4 col-md-offset-4 col-lg-3">
            <!-- PRICE ITEM -->
            <form action="<?php echo $paypalUrl; ?>" method="post" name="frmPayPal1">
                <div class="panel price panel-red">
                    <input type="hidden" name="business" value="<?php echo $paypalId; ?>">
                    <input type="hidden" name="cmd" value="_xclick">
                    <input type="hidden" name="item_name" value="It Solution Stuff">
                    <input type="hidden" name="item_number" value="2">
                    <input type="hidden" name="amount" value="70">
                    <input type="hidden" name="no_shipping" value="1">
                    <input type="hidden" name="currency_code" value="USD">
                    <input type="hidden" name="cancel_return" value="http://demo.itsolutionstuff.com/paypal/cancel.php">
                    <input type="hidden" name="return" value="http://localhost/admin/payment.php">

                    <div class="panel-heading  text-center">
                        <h3>EXPERT PLAN</h3>
                    </div>
                    <div class="panel-body text-center">
                        <p class="lead" style="font-size:40px"><strong>$70</strong></p>
                    </div>
                    <ul class="list-group list-group-flush text-center">
                        <li class="list-group-item"><i class="icon-ok text-danger"></i> Club Platinum </li>
                        <li class="list-group-item"><i class="icon-ok text-danger"></i> Membership</li>
                        <li class="list-group-item"><i class="icon-ok text-danger"></i> mypunter.com</li>
                    </ul>
                    <div class="panel-footer">
                        <button class="btn btn-lg btn-block btn-danger" href="#">BUY NOW!</button>
                    </div>
                </div>
            </form>
            <!-- /PRICE ITEM -->
        </div>
        <div class="col-xs-6 col-sm-6 col-md-4 col-md-offset-4 col-lg-3">
            <!-- PRICE ITEM -->
            <form action="<?php echo $paypalUrl; ?>" method="post" name="frmPayPal1">
                <div class="panel price panel-red">
                    <input type="hidden" name="business" value="<?php echo $paypalId; ?>">
                    <input type="hidden" name="cmd" value="_xclick">
                    <input type="hidden" name="item_name" value="It Solution Stuff">
                    <input type="hidden" name="item_number" value="2">
                    <input type="hidden" name="amount" value="100">
                    <input type="hidden" name="no_shipping" value="1">
                    <input type="hidden" name="currency_code" value="USD">
                    <input type="hidden" name="cancel_return" value="http://demo.itsolutionstuff.com/paypal/cancel.php">
                    <input type="hidden" name="return" value="http://localhost/admin/payment.php">

                    <div class="panel-heading  text-center">
                        <h3>PRO PLAN</h3>
                    </div>
                    <div class="panel-body text-center">
                        <p class="lead" style="font-size:40px"><strong>$100</strong></p>
                    </div>
                    <ul class="list-group list-group-flush text-center">
                        <li class="list-group-item"><i class="icon-ok text-danger"></i> Cranbourne Mypunter </li>
                        <li class="list-group-item"><i class="icon-ok text-danger"></i> Membership</li>
                        <li class="list-group-item"><i class="icon-ok text-danger"></i> mypunter.com</li>
                    </ul>
                    <div class="panel-footer">
                        <button class="btn btn-lg btn-block btn-danger" href="#">BUY NOW!</button>
                    </div>
                </div>
            </form>
            <!-- /PRICE ITEM -->
        </div>

    </div>
</div>
</body>
</html>