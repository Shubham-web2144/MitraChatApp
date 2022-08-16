<?php

include_once './php/config.php';

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Mitra - A Chat Friend</title>
    <link rel="stylesheet" href="./css/style.css" />

    <script src="https://unpkg.com/scrollreveal"></script>

    <!-- Link Swiper's CSS -->
    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper/swiper-bundle.min.css"
    />

    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/icon?family=Material+Icons"
    />
  </head>
  <body>
    <div class="logo__loader">
      <img src="./images/logo1.png" class="logo__loader-img" alt="" />
    </div>
    <div class="wrapper">
      <!-- welcome page header -->
      <div class="header">
        <img src="./images/logo_1.png" alt="" class="header__img" />
      </div>
      <!-- welcome page main section -->
      <section class="banner">
        <div class="banner__txt">
          <h1>
            A new approch <br />
            to Chatting those <br />
            around you.
          </h1>
          <p>
            <strong>Mitra</strong> makes it easy and fun to stay close to your
            favourite mitra <br />
            You'll get fast, simple and secure messaging all over the world
          </p>
          <div class="banner__btns">
            <a href="./pages/loginPage.html" class="banner__btn log">Log in</a>
            <a href="./pages/signupPage.html" class="banner__btn sign"
              >Sign up</a
            >
          </div>
          <div class="banner__txt-img">
            <img src="./images/img8.png" alt="" />
          </div>
        </div>
        <div class="banner__imgs">
          <div class="banner__img-primary">
            <img src="./images/img3.png" alt="" />
          </div>
          <img src="./images/img2.png" alt="" class="banner__img-floating" />
          <img src="./images/img4.png" alt="" class="banner__img-floating1" />
          <div class="banner__img-secondary">
            <img src="./images/img5.png" alt="" />
          </div>
          <img src="./images/imgr7.png" alt="" class="banner__img-floating2" />
        </div>
      </section>
      <section class="review">
        <?php 
          $sql = "SELECT * FROM `feedback`";
          $query = mysqli_query($conn, $sql);
          if($query) {
            if(mysqli_num_rows($query) > 0) {
              while($data = mysqli_fetch_assoc($query)) {

             
        ?>
        <div class="swiper mySwiper">
          <div class="swiper-wrapper">
            <?php 
            echo '<div class="swiper-slide">
            <p>
              '. $data['feedBack_msg'] .'
            </p>
            <h3>'. $data['user_name'] .'</h3>
            <h4>'. $data['email'] .'</h4>
          </div>';
            ?>
            <div class="swiper-slide">
              <p>
                Great Expreience with this app
              </p>

              <h3>Rushikesh Mangate</h3>
              <h4>rushi@mail.com</h4>
            </div>
            <div class="swiper-slide">
              <p>
                Nice chatting web app          </p>
              <h3>Saurabh Thorat</h3>
              <h4>saurabh@mail.com</h4>
            </div>
            <!-- <div class="swiper-slide">
              <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                Repellendus quibusdam labore fuga ipsam.
              </p>
              <h3>Jhon Doe</h3>
              <h4>email</h4>
            </div>
            <div class="swiper-slide">
              <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                Repellendus quibusdam labore fuga ipsam.
              </p>
              <h3>Jhon Doe</h3>
              <h4>email</h4>
            </div> -->
          </div>
          <div class="swiper-pagination"></div>
        </div>
        <?php 
         }
        }
      }
        ?>
      </section>
    </div>

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="./javascript/swiper.js"></script>
    <script src="./javascript/loaderScreen.js"></script>
    <script src="./javascript/scrollRevel.js"></script>
  </body>
</html>
