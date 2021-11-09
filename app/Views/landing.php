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
        <span id="span1"><a href="">Ages 0-3</a></span>
        <img src="/Assets/0-3.png" />
      </div>
      <div>
        <span><a href="">Ages 4-6</a></span>
        <img src="/Assets/4-6.png" alt="" />
      </div>
      <div>
        <span><a href="">Ages 7-14</a></span>
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
        <span>Starting from Ksh 3500.00 &nbsp;<button href="">Buy Now</button></span>
      </div>
      <div><img src="/Assets/products/men_collection.jpg" alt="" srcset="">
        <h4>THE FRIDAY FIT</h4>
        <p>A collection of mens' casual wear carefully curated by our in-house fashionistas</p>
        <span>Ksh 5000.00* &nbsp;<button href="">Buy Now</button></span>
      </div>
      <div><img src="/Assets/products/shoe2.jpg" alt="" srcset="">
        <h4>Adidas&#8482;
          Funk Wav Bounces</h4>
        <p>Our prime picks from Adidas' top shelf collection of runnning Shoes<span>(please dont run in these beauties)</span></p>
        <span>Ksh 7000.00 &nbsp;<button>Buy Now</button></span>
      </div>
    </div>
  </section>
</body>

</html>