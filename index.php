<?php
require 'function.php';

$categories = query('SELECT * FROM categories');

?>
<!DOCTYPE html>
    <html lang="en" >
    <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="stylesheet" href="//stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <title>Creatrix</title>
    
    <style>
      body {
         background-image: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)),
        url("images/background.jpg");
        background-color: rgba(0,0,0,1);
        background-repeat: no-repeat;
        background-position: center center;
        background-size: cover;
      }
    </style>
</head>
<body>
  <div class="container wrapper-container">
    <div class="row">
      <div class="wrapper">
        <div class="neon-wrapper">
          <div class="neon-text">CREATRIX</div>
          <div class="lounge-text" >Smoking Lounge</div>
        </div>
      </div>
    </div>
  </div>
  
  <div class="container lounge-container">
    <div class="row">
    </div>
  </div>

  
  <div class="container categories-container">
    <div class="row">
      <ul class="list-categories">
      <?php foreach ($categories as $category) : ?>
        <li>
        <span>
            <a href="cat.php?id=<?=  $category['id'] ?>">
            <span class="cat-btn">
              <?= $category["categories"]; ?></a>
            </span>
        </span>
        </li>
      <?php endforeach ?>
    </div>
    </ul>
  </div>
  

  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
  <script src="//stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  </body>
</html>
