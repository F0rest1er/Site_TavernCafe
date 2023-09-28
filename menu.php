<?php 
require('php/db.php');
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="images/favicon.png" type="">

  <title>Кафе Таверна</title>

  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css" integrity="sha512-CruCP+TD3yXzlvvijET8wV5WxxEh5H8P4cmz0RFbKK6FlZ2sYl3AEsKlLPHbniXKSrDdFewhbmBK5skbdsASbQ==" crossorigin="anonymous" />
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <link href="css/style.css" rel="stylesheet" />
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<body class="sub_page">

  <div class="hero_area">
    <div class="bg-box">
      <img src="images/main_bg.jpg" alt="">
    </div>
    <?php require("header.php");?>
  </div>

  <section class="food_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Наше Меню
        </h2>
      </div>

      <ul class="filters_menu">
        <li class="active" data-filter="*">Все блюда</li>
        <li data-filter=".pasta">Супы</li>
        <li data-filter=".fries">Жаркое</li>
        <li data-filter=".pizza">Пицца</li>
        <li data-filter=".burger">Бургеры</li>
      </ul>

      <div class="filters-content">
        <div class="row grid">
        <?php
        $menu = get_menu_all();
        foreach ($menu as $item): ?>
          <div class="col-sm-6 col-lg-4 all <?php echo $item["category"];?>">
            <div class="box">
              <div>
                <div class="img-box">
                  <img src="<?php echo $item["img"];?>" alt="">
                </div>
                <div class="detail-box">
                  <h5>
                  <?php echo $item["name"];?>
                  </h5>
                  <p>
                  <?php echo $item["desс"];?>
                  </p>
                  <div class="options">
                    <h6>
                    <?php echo $item["price"];?> ₽
                    </h6>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </section>

  <?php require("footer.php");?>

  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <script src="js/bootstrap.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <script src="https://unpkg.com/isotope-layout@3.0.4/dist/isotope.pkgd.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js"></script>
  <script src="js/custom.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
  </script>
</body>

</html>