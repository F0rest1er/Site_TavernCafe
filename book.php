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

  <section class="book_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Забронировать место
        </h2>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="form_container">
            <form action="" onsubmit="send(event, 'send.php')">
              <div>
                <input type="text" class="form-control" placeholder="Ваше имя" name="senderName" />
              </div>
              <div>
                <input type="text" class="form-control" placeholder="Номер телефона" name="sendPhone" id="phone" class="phone"/>
              </div>
              <div>
                <input type="email" class="form-control" placeholder="Ваш Email" name="senderEmail"/>
              </div>
              <div>
                <select class="form-control nice-select wide" name="sendPeople">
                  <option value="" disabled selected>
                    Сколько человек?
                  </option>
                  <option value="">
                    2
                  </option>
                  <option value="">
                    3
                  </option>
                  <option value="">
                    4
                  </option>
                  <option value="">
                    5
                  </option>
                </select>
              </div>
              <div>
                <input type="date" class="form-control" name="sendDate">
              </div>
                <label style="display: inline-block;">
                  <input type="checkbox" id="politics" onclick="check();" value="" autocomplete="off">
                  Нажимая на кнопку "Забронировать", я даю <a href="https://54.rkn.gov.ru/protection/docsamples/">согласие на обработку персональных данных.</a>
                </label>
              <div class="btn_box">
                <button class="bttn" name="bttn">
                  Забронировать
                </button>
              </div>
            </form>
            <script>
              function check() {
              var bttn = document.getElementsByName('bttn')[0];
              if (document.getElementById('politics').checked)
              bttn.disabled = '';
              else
              bttn.disabled = 'disabled';
              }
					</script>
          </div>
        </div>
        <div class="col-md-6">
          <div class="map_container ">
            <div id="googleMap"></div>
          </div>
        </div>
      </div>
    </div>
  </section>
    <script>
        const phoneInput = document.getElementById("phone");
        const phoneRegex = /^\+?[1-9]\d{1,11}$/;
        function validatePhone() {
        const phone = phoneInput.value;
        if (phoneRegex.test(phone)) {
            phoneInput.setCustomValidity("");
        } else {
            phoneInput.setCustomValidity("Некорректный номер телефона");
        }
        }

        phoneInput.addEventListener("input", validatePhone);
    </script>
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