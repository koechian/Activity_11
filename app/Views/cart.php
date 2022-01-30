<?php ob_start();
$buffer = ob_get_contents();
ob_end_clean();

$title = "My Bag " . "  " . "  " . " | " . " " . "  " . " GUSHI";
$buffer = preg_replace('/(<title>)(.*?)(<\/title>)/i', '$1' . $title . '$3', $buffer);

echo $buffer; ?>
<?php

$session = session();

if ($session->get('name') == "") {
    header('location:login');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Number One Fashion Store | GUSHI</title>
    <link rel="stylesheet" href="/CSS/pages.css" />
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond&family=Rampart+One&family=Ubuntu:wght@500&display=swap" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Philosopher" rel="stylesheet">
    <link rel="stylesheet" href="/CSS/cart.css">
    <script src="/Javascript/jquery.js"></script>


</head>

<body>
    <section class="header">
        <header id="top_bar">
            <div class="logo">
                <a href="<?= site_url('Pages/index') ?>">
                    <svg xmlns="http://www.w3.org/2000/svg" width="178" height="65" viewBox="0 0 178 65">
                        <text id="GUSHI" transform="translate(0 52)" font-size="58" font-family="Philosopher-Bold, Philosopher" font-weight="700" letter-spacing="0.01em">
                            <tspan x="0" y="0">GUSHI</tspan>
                        </text>
                    </svg>
                </a>
            </div>

            <div class="cart">
                <a title="Logout" href="<?= site_url('Login/logout') ?>"><?php
                                                                            if ($session->get('name') == "") {
                                                                                echo 'Sign In or Register';
                                                                            } else {
                                                                                echo $session->get('name');
                                                                            }
                                                                            ?></a>
                <hr />
                <span onclick="revealWallet()" style="color:rgb(56, 56, 56)" id="wallet-button" class="iconify wallet-icon" data-icon="icon-park-outline:wallet-two"></span>
            </div>
        </header>
    </section>
    <section>
        <div class="wallet-box hide">
            <span onclick="hideWallet()" id='close-wallet' class="iconify" data-icon="eva:close-fill"></span>
            <h2>Your Wallet</h2>
            <div id="wallet-details">
                <span>Available Balance:</span>
                <span>Ksh&nbsp;<span id="wallet-balance"></span></span>
            </div>
            <hr>
            <div id="deposit-details">
                <h3>Make a Deposit</h6>
                    <input type="number" id="deposit-amount"><br>
                    <button class="button" id="make-deposit">Deposit</button>
            </div>
        </div>
        <div class="reciept-wrapper">
            <div class="reciept">
                <div class="reciept-header">
                    <span id="selections">
                        My Selections
                    </span>
                    <a title="Print This Reciept" href=""><span class="iconify print" data-icon="la:print"></span></a>
                </div>
                <div class="reciept-body">
                </div>
            </div>
            <div class="reciept-aside">
                <span>
                    <h4>Order Summary</h4>
                </span>
                <hr>
                <span>
                    <h6>Subtotal:</h6> &nbsp; <span id="total"></span>
                </span><br><br>
                <span>
                    <h6>Shipping:</h6> &nbsp; Free
                </span><br><br>
                <span>
                    <h6>VAT Rate:</h6> &nbsp; 10%
                </span><br><br>
                <span>
                    <h5>Total:</h5> &nbsp; <span id="calculated-total"></span>
                </span><br><br>
                <hr>
                <button onclick="checkout()" class="button" id="checkout">Checkout</button>

            </div>
        </div>

    </section>
    <input id="userid" value="<?php $session = session();
                                echo ($session->get('userid')); ?>" type="hidden">

</body>
<?php include('Includes/cart-js.php') ?>
<script src="https://code.iconify.design/2/2.0.4/iconify.min.js"></script>
<script src="/Javascript/pages.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</html>