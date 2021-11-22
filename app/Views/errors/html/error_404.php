<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Error 404 | GUSHI</title>
</head>

<body>
  <div class="side-img">
    <img src="/Assets/error.jpg" alt="Damn we really are having a trash day..." />
  </div>
  <div class="wrapper">
    <p id="error_text">ERROR 404</p>
    <p>
      Sorry,our bad. We may or may not <br />behaving that page at the moment.
    </p>
    <div class="home">
      <span>Country Road...</span>
      <button>
        <a href="<?= site_url('Pages') ?>">Take me home...</a>
      </button>
    </div>
  </div>

  <style>
    * {
      margin: 0;
      box-sizing: border-box;
      padding: 0;
      font-family: "Hack";
    }

    .side-img {
      position: absolute;
      top: 0;
      left: 0;
    }

    img {
      height: 100%;
      width: 731px;
    }

    .wrapper {
      position: absolute;
      width: 1027px;
      height: 100%;
      top: 0;
      right: 0;
    }

    #error_text {
      font-size: 50px;
      margin-top: 200px;
      margin-left: 100px;
    }

    p {
      font-size: 25px;
      margin-top: 200px;
    }

    .home {
      margin-top: 200px;
      font-size: 25px;
    }

    .home button {
      background: #404040;
      border: none;
      border-radius: 10px;
      height: 50px;
      width: 200px;
      transition: ease 0.4s;
    }

    .home button a {
      text-decoration: none;
      color: #d6d6d6;
      font-size: 20px;
      transition: ease 0.2s;
    }

    .home button:hover a,
    .home button:hover {
      background: #c9c9c9;
      color: #181818;
    }
  </style>
</body>

</html>