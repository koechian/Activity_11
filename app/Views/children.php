    <?php ob_start();
    include('header.php');
    $buffer = ob_get_contents();
    ob_end_clean();

    $title = "For the Kids " . "  " . "  " . " | " . " " . "  " . " GUSHI";
    $buffer = preg_replace('/(<title>)(.*?)(<\/title>)/i', '$1' . $title . '$3', $buffer);

    echo $buffer; ?>
    <section class="cards">
        <div class="heading">
            <h1>Children's Wear</h1>
            <hr>
            <div class="filters">
                <div class="list-group">
                    <h5>Price: &nbsp</h5>
                    <select name="" id="">
                        <option value="">All</option>
                        <option value="ascending">Lowest to Highest</option>
                        <option value="descending">Highest to Lowest</option>

                    </select>
                </div>
                <div>
                    <h5>Gender: &nbsp</h6>
                        <select name="" id="">
                            <option value="">All</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                </div>
                <div>
                    <h5>Date Added:&nbsp</h6>
                        <select name="" id="">
                            <option value="">All</option>
                            <option value="1">Newest First</option>
                            <option value="10">Oldest First</option>
                        </select>
                </div>

            </div>
            <hr class="filter-hr">
        </div>
        <div class="cards_wrapper">
            <div><img src="/Assets/products/nike.jpg" alt="" srcset="">
                <h4>FOR THE NIKEY FANS</h4>
                <p>Authentic products from Nike&#8482; for everyone.</p>
                <span class="price_tag">Starting from Ksh 3500.00 &nbsp;<button href="">Buy Now</button></span>
            </div>
            <div><img src="/Assets/products/men_collection.jpg" alt="" srcset="">
                <h4>THE FRIDAY FIT</h4>
                <p>A collection of mens' casual wear carefully curated by our in-house fashionistas</p>
                <span class="price_tag">Ksh 5000.00* &nbsp;<button href="">Buy Now</button></span>
            </div>
            <div><img src="/Assets/products/shoe2.jpg" alt="" srcset="">
                <h4>Adidas&#8482;
                    Funk Wav Bounces</h4>
                <p>Our prime picks from Adidas' top shelf collection of runnning Shoes<span>(please dont run in these beauties)</span></p>
                <span class="price_tag">Ksh 7000.00 &nbsp;<button>Buy Now</button></span>
            </div>
        </div>
    </section>
    <button id="back-to-top" onclick="start('back-to-top')">Back</button>
    </body>
    <script src="https://code.iconify.design/2/2.0.4/iconify.min.js"></script>
    <script src="/Javascript/pages.js"></script>
    <script src="/Javascript/jquery-ui.min.js"></script>



    </html>