<?php 
session_start();
include_once '/xampp/htdocs/Mitra/php/config.php';

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Mitra - A Chat Friend</title>
    <link rel="stylesheet" href="../css/style.css" />
    <link rel="stylesheet" href="../css/userList.css" />
    <link
      href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet"
    />
  </head>
  <body>
    <div class="wrapper">
      <div class="header">
        <img src="../images/logo_1.png" alt="" class="header__img" />
      </div>
      <section class="search">
          <div class="search__txt">
              <a href="./userHome.php" class="backBtn"><span class="material-icons" style="font-size: 28px; color: rgb(52, 111, 228)">
          arrow_back
          </span></a>
              <h3>Select user to chat</h3>
          </div>
          <div class="search__box">
              <form action="" autocomplete="off">
                  <input type="text" placeholder="Search user...." name="search" />
                  <button type="submit">
                  <span class="material-icons" style="font-size: 17px; color: #fff !important">
          search
          </span>
                  </button>
              </form>
          </div>
      </section>
      <section class="users">
          <!-- <a href="#" class="user__card">
              <img src="../images/profile.jpg" alt="" class="user__card-img">
              <h3>gujman carla</h3>
              <span>active now</span>
          </a>
           -->
      </section>
    </div>
    
    <script src="../javascript/userList.js"></script>
    <script src="../javascript/search.js"></script>
  </body>
</html>
