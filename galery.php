<?php 
require('php/db.php');
?>
<!DOCTYPE html>
<html>
  <head>
    <style>
      .gallery {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  grid-gap: 10px;
}

.gallery img {
  width: 100%;
  cursor: pointer;
}

.modal {
  display: none;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.9);
  display: flex;
  align-items: center;
  justify-content: center;
}

.modal-content {
  max-width: 100%;
  max-height: 100%;
}

.modal img {
  width: auto;
  height: auto;
  max-width: 100%;
  max-height: 100%;
  cursor: pointer;
}

    </style>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="shortcut icon" href="images/favicon.png" type="" />

    <title>Кафе Таверна</title>

    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <link
      rel="stylesheet"
      type="text/css"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css"
      integrity="sha512-CruCP+TD3yXzlvvijET8wV5WxxEh5H8P4cmz0RFbKK6FlZ2sYl3AEsKlLPHbniXKSrDdFewhbmBK5skbdsASbQ=="
      crossorigin="anonymous"
    />
    <link href="css/font-awesome.min.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet" />
    <link href="css/responsive.css" rel="stylesheet" />
  </head>

  <body class="sub_page">
    <div class="hero_area">
      <div class="bg-box">
        <img src="images/main_bg.jpg" alt="" />
      </div>
      <?php require("header.php");?>
    </div>

    <section class="about_section layout_padding">
      <div class="container">
        <div class="gallery">
        <?php
        $galery = get_galery_all();
        foreach ($galery as $item): ?>
          <img src="<?php echo $item["image"];?>" alt="Image" onclick="openModal(this)">
        <?php endforeach; ?>
        </div>
      </div>
    </section>
    <div class="modal" onclick="closeModal()">
      <img class="modal-content" alt="Modal Image">
    </div>

    <?php require("footer.php");?>
    
    <script>
      function openModal(image) {
  var modal = document.querySelector('.modal');
  var modalImg = document.querySelector('.modal-content');

  modal.style.display = 'flex';
  modalImg.src = image.src;
  modalImg.alt = image.alt;
}

function closeModal() {
  var modal = document.querySelector('.modal');
  modal.style.display = 'none';
}

    </script>
    <script src="js/jquery-3.4.1.min.js"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
      integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
      crossorigin="anonymous"
    ></script>
    <script src="js/bootstrap.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="https://unpkg.com/isotope-layout@3.0.4/dist/isotope.pkgd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap"></script>
  </body>
</html>