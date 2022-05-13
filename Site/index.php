<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css\style.css">
    <link rel="stylesheet" href="css\adaptive.css">
    <link rel="stylesheet" href="css/components.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
    <title>FoodStore</title>
  </head>
  <body>


      <div class="head">
        <img class="logo1" src="images\logo1.png" alt="logo">

      </div>


      <div class="header">
        <nav class="navbar navbar-expand-lg navbar-light headin">
          <div class="container-fluid">
            <a class="navbar-brand" href="index.php" style="padding-right: 10px;">Food Store</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item" style="padding-right: 10px;">
                  <a class="nav-link active" aria-current="page" href="menu.html"><span>Menu</span></a>
                </li>
                <li class="nav-item" style="padding-right: 10px;">
                  <a class="nav-link active" href="place.html">Places</a>
                </li>
                <li class="nav-item dropdown" style="float:right;">
                  <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Information
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="info.html">Information</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="telnum.html">Tel-numbers</a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
          <?php
            if ($_COOKIE['user'] == ''):
           ?>
          <div class="col" style="margin-left: 400px; background-color: rgb(255, 166, 29); border-radius: 20px;">
            <a class="nav-link active" href="register.php">Register</a>
          </div>
        <?php else: ?>
          <div class="exit" style="margin-left: 200px;">
          <p style="">Hello <?=$_COOKIE['user']?>. To exit, click <a style="background-color: rgb(255, 166, 29);" href="/exit.php">here</a></p>
          </div>
        <?php endif ?>
        </nav>
      </div>


      <div class="info">
        <div class="wrapper">
          <div><p style="font-size: 15px; margin-top: 1rem"><img src="images\fork-and-knife-in-cross.png" alt="fork"  style="height: 50px;"><span style=";margin-left: 40px;" class="rekla">Choose a restaurant</span></div>
          <div><p style="font-size: 15px; margin-top: 1rem"><img src="images\dinner.png" alt="dish" style="height: 50px;"><span style="margin-left: 60px;" class="rekla">Choose a dish</span></div>
          <div><p style="font-size: 15px; margin-top: 1rem"><img src="images\shopping-cart.png" alt="cart" style="height: 50px;"><span style="margin-left: 60px;" class="rekla">Order in 70 seconds</span></div>
        </div>
      </div>


      <div class="container" id="cont">
        <div class="wrapper-1">
          <div style="margin-right:5px"><a href="menu.html"><img src="images\Products.png" alt="Prod" id="prod" style="height: 85px; width: 100%"></a></div>
          <div><a href="menu.html"><img src="images\Pizza.png" alt="Prod" id="prod" style="height: 85px; width: 100%"></a></div>
          <div style="margin-left: 5px"><a href="menu.html"><img src="images\Sushi rolls.png" alt="Prod" id="prod" style="height: 85px; width: 100%"></a></div>
          <div style="margin-right:5px; margin-top: 5px;"><a href="menu.html"><img src="images\Hotdish.png" alt="Prod" id="prod" style="height: 85px; width: 100%"></a></div>
          <div style="margin-top: 5px;"><a href="menu.html"><img src="images\Fast food.png" id="prod" style="height: 85px; width: 100%"></a></div>
          <div style="margin-left: 5px; margin-top: 5px;"><a href="menu.html"><img src="images\shashlik.png" id="prod" style="height: 85px; width: 100%"></a></div>
        </div>
      </div>

      <div class="Akc">
        <hr><br>
        <h3 class="text1">All new</h3>
      </div>


      <div class="carou">
        <div class="contain" id="carous">
          <div class="row" id="controw">
            <div class="col" style="text-align:center;"><img src="http://foodgo.kz/assets/img/restaurants/prodmasterpv/food/19052020085710_19A59C8D-8FCA-4AD7-AB28-95FF710D3D3D.jpg" alt="" style="height:190px;"><br> <p style="text-align: center; font-weight: bold;">Beef dok-pe</p> </div>
            <div class="col" style="text-align:center;"><img src="http://foodgo.kz/assets/img/restaurants/prodmasterpv/food/30122020153207_pozharskaya.jpg" alt="" style="height:190px;"><br> <p style="text-align: center; font-weight: bold;">Cutlet "Homemade" (beef)</p> </div>
            <div class="col" style="text-align:center;"><img src="http://foodgo.kz/assets/img/restaurants/prodmasterpv/food/30122020150412_blinchiki_farshirovannye.jpg" alt="" style="height:190px;"><br> <p style="text-align: center; font-weight: bold;">Pancakes stuffed with cottage cheese</p> </div>
            <div class="w-100"></div>
            <div class="col" style="text-align:center;"><img src="http://foodgo.kz/assets/img/restaurants/tsarskiyebani/food/01032022233520_IMG_2067.jpg" alt="" style="height:360px;"><br> <p style="text-align: center; font-weight: bold;">"Crispy Plateau"</p> </div>
            <div class="col" style="text-align:center;"><img src="http://foodgo.kz/assets/img/restaurants/tsarskiyebani/food/30042022131822_IMG_5372.jpg" alt="" style="height:360px;"><br> <p style="text-align: center; font-weight: bold;">"Mirabelle"</p> </div>
            <div class="col" style="text-align:center;"><img src="http://foodgo.kz/assets/img/restaurants/tsarskiyebani/food/02032022001726_IMG_2079.jpg" alt="" style="height:360px;"><br> <p style="text-align: center; font-weight: bold;">"Naryn"</p> </div>
          </div>
        </div>
      </div>
      <div class="d-grid gap-2" id="menbut">
        <button class="btn btn-primary bg-info text-light" type="button" onclick="location.href='menu.html';">Menu</button>
      </div>


      <div class="Bot">
        <hr><br>
        <h3 class="text2">Telegram bot</h3>
        <br>
      </div>
      <div class="Telega">
        <div class="container">
          <div class="row">
            <div class="col"><img src="https://www.pngkey.com/png/full/963-9638283_telegram-is-no-exception-and-thats-precisely-what.png"> </div>
            <div class="col" style="text-align: center; margin: auto; /* Important */ text-align: center; "><br><br><br><h1>Using the telegram bot is even more convenient!</h1><br><br><h5>Follow the link to our telegram bot</h5><br><button type="button" class="btn btn-info"><a href="https://app.leadteh.ru/w/birh" style="color: white;">Telegram</a></button> </div>
          </div>
        </div>
        <hr>
      </div>


      <div class="Bot">
        <hr><br>
        <h3 class="text2">Application</h3>
        <br>
      </div>
      <div class="Telega">
        <div class="container">
          <div class="row">
            <div class="col"><img src="https://www.pngkey.com/png/full/963-9638283_telegram-is-no-exception-and-thats-precisely-what.png"> </div>
            <div class="col" style="text-align: center; margin: auto; /* Important */ text-align: center; "><br><br><br><h1>Using the application is even more convenient!</h1><br><br><h5>Follow the link to our application</h5><br><button type="button" class="btn btn-info"><a href="" style="color: white;">App</a></button> </div>
          </div>
        </div>
        <hr>
      </div>




      <hr>


      <div class="telegabot">
        <p1>We are pleased to introduce you to the unified system of food orders at home Food store. Very often we do not have enough time for important things. Whether it's preparing for a holiday, not being able to leave the house, or not being able to leave work. Do you have no time to prepare food or suddenly there are guests? Do you not want to go anywhere, spend time and money on the road? Then you can order food at home or in the office on the telegram bot Foodstore. And you don't even need to search for phone numbers, call each cafe, pizzeria, restaurant separately and remember the menu. Visit the Foodstore</p>
        <p>Here you can choose what you need for your lunch, breakfast or dinner. It is very convenient and simple. And you get it all with convenient delivery to your home or office.</p>
        <p>We want you to have more time for your family and friends, for yourself and for very important events in your life! Save time-be with the Foodstore!</p>
      </div>

      


  </body>
</html>
