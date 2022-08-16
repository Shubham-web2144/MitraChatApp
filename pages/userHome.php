<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Mitra - A Chat Friend</title>
    <link rel="stylesheet" href="../css/style.css" />
    <link rel="stylesheet" href="../css/userHome.css" />
    <link
      href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet"
    />
  </head>
  <body>
    <div class="wrapper">
      <div class="header">
        <img src="../images/logo_1.png" alt="" class="header__img" />
        <a href="../php/logout.php?logout_id=<?php echo $_SESSION['unique_id']?>" class="logout__btn">Log out</a>
      </div>
      <section class="userInfo">
        <?php 
          include_once '/xampp/htdocs/Mitra/php/config.php';
          $sql = "SELECT * FROM `user` WHERE `unique_id`='{$_SESSION['unique_id']}'";
          $query = mysqli_query($conn, $sql);
          if($query) {  
            $data = mysqli_fetch_assoc($query);
          }
        ?>
        <div class="userInfo__img">
          <img src="../php/uploadedImg/<?php echo $data['imgs'];?>" alt="" class="userInfo__img-img" />
          <button class="userInfo__img-btn">
            <span class="material-icons"> edit </span>
          </button>
          <form action="" class="userInfo__img-form" autocomplete="off" enctype="multipart/form-data">
            <span class="backBtn">X</span>
            <label for="">Select new image</label>
            <input type="file" name="updateImg"/>
            <button type="submit" class="">Update</button>
          </form>
        </div>
        <div class="userInfo__name">
          <h3><?php echo $data['name'];?></h3>
          <button class="userInfo__name-btn">
            <span class="material-icons"> edit </span>
          </button>
          <form action="" class="userInfo__name-form" autocomplete="off">
            <span class="backBtn">X</span>
            <label for="">Edit your name</label>
            <input type="text" name="updateName"/>
            <button type="submit">Update</button>
          </form>
        </div>
        <div class="userInfo__txt">
          <h4>
            <?php echo $data['bio'];?>
          </h4>
          <button class="userInfo__txt-btn">
            <span class="material-icons"> edit </span>
          </button>
          <form action="" class="userInfo__txt-form" autocomplete="off">
            <span class="backBtn">X</span>
            <label for="">Add your bio</label>
            <input type="text" name="updateBio"/>
            <button type="submit">Update</button>
          </form>
        </div>
      </section>
      <section class="nav">
        <a href="./userList.php" class="nav__links">
          <span class="material-icons"> chat </span>
          <h4>Chats</h4>
        </a>
        <a href="./group.html" class="nav__links">
          <span class="material-icons"> group </span>
          <h4>Groups</h4>
        </a>
        <a href="../pages/about.html" class="nav__links">
          <span class="material-icons icns"> info </span>
          <h4>About Us</h4>
        </a>
        <a href="../pages/contact.html" class="nav__links">
          <span class="material-icons icns"> contact_support </span>
          <h4>Contact Us</h4>
        </a>
      </section>
    </div>

    <script src="../javascript/formToggle.js"></script>
    <script src="../javascript/updateData.js"></script>
  </body>
</html>
