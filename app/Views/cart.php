<?php ob_start();
include('header.php');
$buffer = ob_get_contents();
ob_end_clean();

$title = "My Bag " . "  " . "  " . " | " . " " . "  " . " GUSHI";
$buffer = preg_replace('/(<title>)(.*?)(<\/title>)/i', '$1' . $title . '$3', $buffer);

echo $buffer; ?>
<section>
    <div class="reciept-wrapper">
        <div class="reciept">
            <div class="reciept-header">
                <span id="selections">
                    My Selections
                </span>
                <a title="Print This Reciept" href=""><span class="iconify print" data-icon="la:print"></span></a>
            </div>
            <div class="reciept-body">
                <div class="item">
                    <div>
                        <img src="/Assets/products/shoe1.jpg" alt="">
                    </div>
                    <hr>
                    <div>
                        <span>Nikey Swift Flow</span><br><br><br><br>
                        <span> Size: 42</span><br><br><br>
                        <span>KES 4500.00</span><br><br><br><br>
                        <button>Remove</button>
                    </div>

                </div>
                <hr>

            </div>
        </div>
        <div class="reciept-aside">
            <span>
                <h4>Order Summary</h4>
            </span>
            <hr>
            <span>
                <h6>Subtotal:</h6> &nbsp; KES 4500
            </span><br><br>
            <span>
                <h6>Shipping:</h6> &nbsp; KES 300
            </span><br><br>
            <span>
                <h6>Value Added Tax:</h6> &nbsp; KES 26
            </span><br><br>
            <span>
                <h5>Total:</h5> &nbsp; KES 4826
            </span><br><br>
            <hr>
            <button>Checkout</button>

        </div>
    </div>

</section>


</body>
<script src="https://code.iconify.design/2/2.0.4/iconify.min.js"></script>
<script src="/Javascript/pages.js"></script>
<script src="/Javascript/jquery-ui.min.js"></script>



</html>