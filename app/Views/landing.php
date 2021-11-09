<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Welcome to GUSHI</title>
  <link rel="stylesheet" href="/CSS/landing.css" />
  <script src="https://code.iconify.design/2/2.0.4/iconify.min.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond&family=Rampart+One&family=Ubuntu:wght@500&display=swap" rel="stylesheet" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Philosopher:wght@400;700&display=swap" rel="stylesheet">
</head>

<body>
  <section class="main">
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
          <li><a href="">Children</a></li>
          <li><a href="">Men</a></li>
          <li><a href="">Women</a></li>
          <li><a href="">Pets</a></li>
          <li><a href="<?= site_url('About') ?>">About Us</a></li>
        </ul>
      </div>
      <div class="cart">
        <span><a href="">Sign In/Register</a></span>
        <hr />
        <a class="icon" href=""><span class="iconify shopping_icon" data-icon="ph:shopping-bag-light"></span></a>
      </div>
    </header>
    <div class="container">
      <div class="female">
        <a href="">
          <img src="/Assets/female.png" alt="" srcset="" />
          <span id="women_label">FOR HER</span>
        </a>
      </div>
      <div class="male">
        <a href="">
          <img src="/Assets/male.png" alt="" srcset="" />
          <span id="men_label">FOR HIM</span>
        </a>
      </div>
    </div>
  </section>
  <section class="brands">
    <div class="brand_container">
      <img src="/Assets/1.jpg" alt="" />
      <img src="/Assets/4.jpg" alt="" />
      <img src="/Assets/6.jpg" alt="" />
      <img src="/Assets/2.gif" alt="" />
      <img src="/Assets/5.jpg" alt="" />
      <img src="/Assets/3.jpg" alt="" />
    </div>
  </section>
  <section class="children">
    <div class="children_container">
      <div>
        <div class="ages">
          <span><a href="">Ages 0-3</a></span>
        </div>
        <img src="/Assets/0-3.png" />
      </div>
      <div>
        <div class="ages">
          <span><a href="">Ages 4-6</a></span>
        </div>
        <img src="/Assets/4-6.png" alt="" />
      </div>
      <div>
        <div class="ages">
          <span><a href="">Ages 7-14</a></span>
        </div>
        <img src="/Assets/7-14.png" alt="" />
      </div>
    </div>
  </section>
  <section class="featured">
    <div class="featured_heading">
      <h1>Featured</h1>
      <hr>
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
  <section class="footer">
    <footer>
      <div class="content">
        <div class="content-block1">
          <h4>Need Help?</h4>
          <ul>
            <li><a href="">Contact Us</a></li>
            <li><a href="">Payment Options</a></li>
            <li><a href="">Returns and Exchanges</a></li>
            <li><a href="">Unsubscribe</a></li>
          </ul>
        </div>
        <div class="content-block2">
          <h4>GUSHI</h4>
          <ul>
            <li><a href="">About Us</a></li>
            <li><a href="">Privacy and Cookies</a></li>

            <li><a href="">Admin Login</a></li>
          </ul>
        </div>
        <div class="content-block3">
          <h4>Our Social Handles</h4>
          <ul>
            <li><a href=""><span id="twitter-icon" class="iconify" data-icon="ci:twitter"></span>Twitter</a></li>
            <li><a href=""><span id="instagram-icon" class="iconify" data-icon="ci:instagram"></span>Instagram</a></li>
            <li><a href=""><span id="youtube-icon" class="iconify" data-icon="ci:youtube"></span>You Tube</a></li>
            <li><a href=""><span id="pinterest-icon" class="iconify" data-icon="cib:pinterest-p"></span>Pinterest</a></li>
            <li><a href=""><span id="snapchat-icon" class="iconify" data-icon="ci:snapchat"></span>Snapchat</a></li>
          </ul>
        </div>
      </div>
      <div class="updates">
        <h4>Sign Up for GUSHI Updates</h4>
        <input placeholder="Email" type="email">
        <button> <i class="fas fa-arrow-right"></i></button>
      </div>
      <div class="copyright">
        <p>© 2021 - 2021 GUSHI I.a.N. - All rights reserved. </p>
      </div>

    </footer>
  </section>
  <script src="https://code.iconify.design/2/2.0.3/iconify.min.js"></script>
  <script src="https://kit.fontawesome.com/22c0187942.js" crossorigin="anonymous"></script>
</body>

</html>