<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For the Ladies | GUSHI</title>
    <link rel="stylesheet" href="/CSS/pages.css" />
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond&family=Rampart+One&family=Ubuntu:wght@500&display=swap" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Philosopher:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/CSS/jquery-ui.min.css">
    <link rel="stylesheet" href="/CSS/jquery-ui.structure.min.css">
    <link rel="stylesheet" href="/CSS/jquery-ui.theme.min.css">

</head>

<body>
    <section class="header">
        <header id="top_bar">
            <div class="logo">
                <svg xmlns="http://www.w3.org/2000/svg" width="178" height="65" viewBox="0 0 178 65">
                    <text id="GUSHI" transform="translate(0 52)" font-size="58" font-family="Philosopher-Bold, Philosopher" font-weight="700" letter-spacing="0.01em">
                        <tspan x="0" y="0">GUSHI</tspan>
                    </text>
                </svg>
            </div>
            <div>
                <form name="homepage_search" action="" method="get">
                    <input class="searchbox" name="search_term" type="text" placeholder="Search" />
                </form>
            </div>
            <div class="links">
                <ul>
                    <li><a href="<?= site_url('Landing') ?>">Home</a></li>
                    <li><a href="<?= site_url('Pages/Children') ?>">Children</a></li>
                    <li><a href="<?= site_url('Pages/Men') ?>">Men</a></li>
                    <li><a href="<?= site_url('Pages/Women') ?>">Women</a></li>
                    <li><a href="">Pets</a></li>

                </ul>
            </div>
            <div class="cart">
                <span><a href="">Sign In/Register</a></span>
                <hr />
                <a class="icon" href=""><span class="iconify shopping_icon" data-icon="ph:shopping-bag-light"></span></a>
            </div>
        </header>
    </section>
    <section class="cards">
        <div class="heading">
            <h1>Ladies's Wear</h1>
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
                    <h5>Date Added:&nbsp</h6>
                        <select name="" id="">
                            <option value="">All</option>
                            <option value="1">Newest First</option>
                            <option value="10">Oldest First</option>
                        </select>
                </div>
                <div>
                    <h5>Sub-Category:&nbsp</h6>
                        <select name="" id="">
                            <option value="">All</option>
                            <option value="1">Sports</option>
                            <option value="2">Casual Wear</option>
                            <option value="3">Official Wear</option>
                            <option value="4">Accessories</option>
                            <option value="5">Underwear</option>
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