<?php 
require('php/db.php');
?>
<!DOCTYPE html>
<html>
<head>
<style>
    /* Стили для кнопки */
    #scrollUpButton {
      display: none; /* Изначально скрываем кнопку */
      position: fixed;
      bottom: 20px;
      right: 30px;
      z-index: 99;
      font-size: 18px;
      border: none;
      outline: none;
      background-color: #555;
      color: white;
      cursor: pointer;
      padding: 15px;
      border-radius: 4px;
    }
  </style>
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

<body>

  <div class="hero_area">
    <div class="bg-box">
      <img src="images/main_bg.jpg" alt="">
    </div>
    <?php require("header.php");?>
    <section class="slider_section ">
      <div id="customCarousel1" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container ">
              <div class="row">
                <div class="col-md-7 col-lg-6 ">
                  <div class="detail-box">
                    <h1>
                      Таверна
                    </h1>
                    <p>
                      У нас вы найдете как традиционную русскую кухню, так и разнообразные зарубежные блюда.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item ">
            <div class="container ">
              <div class="row">
                <div class="col-md-7 col-lg-6 ">
                  <div class="detail-box">
                    <h1>
                      Таверна
                    </h1>
                    <p>
                      Каждые выходные у нас вы можете собраться с друзьями и поиграть в разные настольные игры.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container ">
              <div class="row">
                <div class="col-md-7 col-lg-6 ">
                  <div class="detail-box">
                    <h1>
                      Таверна
                    </h1>
                    <p>
                     Приходите к нам, чтобы погрузиться в уютную и домашнюю атмосферу, которая создана для вашего комфорта.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="container">
          <ol class="carousel-indicators">
            <li data-target="#customCarousel1" data-slide-to="0" class="active"></li>
            <li data-target="#customCarousel1" data-slide-to="1"></li>
            <li data-target="#customCarousel1" data-slide-to="2"></li>
          </ol>
        </div>
      </div>

    </section>
  </div>

  <section class="offer_section layout_padding-bottom">
    <div class="offer_container">
      <div class="container ">
          <div class="heading_container heading_center">
        <h2>
          Акции
        </h2>
        <div class="row">
          <div class="col-md-6  ">
            <div class="box ">
              <div class="img-box">
                <img src="images/main_soup.jpg" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  День Супов по понедельникам
                </h5>
                <h6>
                  <span>20%</span> Скидка
                </h6>
              </div>
            </div>
          </div>
          <div class="col-md-6  ">
            <div class="box ">
              <div class="img-box">
                <img src="images/main_pizza.jpg" alt="">
              </div>
              <div class="detail-box">
                <h5>
                  День Пиццы по пятницам
                </h5>
                <h6>
                  <span>15%</span> Скидка
                </h6>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="food_section layout_padding-bottom">
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
      <div class="btn-box">
        <a href="menu.php">
          Посмотреть все блюда
        </a>
      </div>
    </div>
  </section>

  <section class="client_section layout_padding-bottom">
    <div class="container">
      <div class="heading_container heading_center psudo_white_primary mb_45">
        <h2>
          Что говорят наши посетители
        </h2>
      </div>
      <div class="carousel-wrap row ">
        <div class="owl-carousel client_owl-carousel">
          <div class="item">
            <div class="box">
              <div class="detail-box">
                <p>
                Атмосфера была приятной и уютной, а обслуживание было высокого уровня. Я заказал блюда с морепродуктами и они были свежими и вкусными. Особенно мне понравилась вариация на тему креветок - такое великолепное сочетание вкусов! В целом, ресторан Таверна - отличное место для того, чтобы насладиться вкусной едой и приятной атмосферой. Я бы определенно рекомендовал его своим друзьям и знакомым!
                </p>
                <h6>
                  Михаил Гусев
                </h6>
                <p>
                </p>
              </div>
              <div class="img-box">
                <img src="images/client01.jpg" alt="" class="box-img">
              </div>
            </div>
          </div>
          <div class="item">
            <div class="box">
              <div class="detail-box">
                <p>
                Я была приятно удивлена атмосферой ресторана Таверна - уютное место, где можно насладиться вкусной едой и приятной компанией. Меню порадовало разнообразием блюд, особенно впечатлила курица на гриле с овощами, очень сочная и ароматная. Обслуживание было на высшем уровне - персонал был внимателен и доброжелателен. В целом, визит в ресторан Таверна оставил только положительные впечатления, и я обязательно вернусь сюда еще раз.
                </p>
                <h6>
                  Елена Кузнецова
                </h6>
              </div>
              <div class="img-box">
                <img src="images/client02.jpg" alt="" class="box-img">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php require("footer.php");?>
  <button onclick="scrollToTop()" id="scrollUpButton" title="Прокрутить вверх">Вверх</button>

<script>
  // Показать кнопку, когда пользователь прокручивает страницу
  window.onscroll = function() {scrollFunction()};

  function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
      document.getElementById("scrollUpButton").style.display = "block";
    } else {
      document.getElementById("scrollUpButton").style.display = "none";
    }
  }

  // Плавно прокрутить страницу вверх при нажатии на кнопку
  function scrollToTop() {
    document.body.scrollTop = 0; // Для Safari
    document.documentElement.scrollTop = 0; // Для Chrome, Firefox, IE и Opera
  }
</script>
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