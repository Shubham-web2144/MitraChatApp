<?php
session_start();
include_once '../php/config.php';
if(!isset($_SESSION['unique_id'])) {
  header("location: loginPage.html");
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Mitra - A Chat Friend</title>

  <link rel="stylesheet" href="../css/style.css" />
  <link rel="stylesheet" href="../css/chatArea.css" />
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />

  <style>
      .incoming_msg-img {
    position: relative;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    top: 10%;
    margin-right: 10px;
}
  </style>
</head>

<body>
  <div class="wrapper">
    <div class="header">
      <img src="../images/logo_1.png" alt="" class="header__img" />
      <?php
      $sql = "SELECT * FROM `user` WHERE `unique_id`='{$_SESSION['unique_id']}'";
      $query = mysqli_query($conn, $sql);
      if ($query) {
        if (mysqli_num_rows($query) > 0) {
          $data = mysqli_fetch_assoc($query);
        }
      }

      ?>
      <img src="../php/uploadedImg/<?php echo $data['imgs'] ?>" alt="" class="header__currUser" />
    </div>
    <section class="chatArea">
      <div class="chatArea__profile">
        <?php
        $group_id = mysqli_real_escape_string($conn, $_GET['group_id']);
        $sql2 = "SELECT * FROM `groups` WHERE `group_id`='${group_id}'";
        $query2 = mysqli_query($conn, $sql2);
        if ($query2) {
          if (mysqli_num_rows($query2) > 0) {
            $data2 = mysqli_fetch_assoc($query2);
          }
        }
        ?>
        <img src="../php/uploadedImg/<?php echo $data2['group_img'] ?>" alt="">
        <h3><?php echo $data2['group_name'] ?></h3>
        <span class="chatArea__status"><? echo $data2['group_bio'] ?></span>
      </div>
      <div class="chatArea__chat">
        <div class="chatArea__chatBox">
          <!-- <div class="incoming__msg">
            <img src="../php/uploadedImg/1651769926Ey5OfFYVUAMjbG1.jpg" class="incoming_msg-img" alt="">
            <span class="msgtxt">
              Lorem ipsum dolor sit amet consectetur.
            </span>
          </div>
          <div class="incoming__msg">
          <img src="../php/uploadedImg/1651769926Ey5OfFYVUAMjbG1.jpg" class="incoming_msg-img" alt="">

            <span class="msgtxt">
              Lorem ipsum sit amet consectetur.
            </span>
          </div>
          <div class="outgoing__msg">
            <span class="msgtxt">
              Lorem ipsum dolor sit amet consectetur.
            </span>
          </div>
           -->
        </div>
        <form action="" class="chatArea__input" autocomplete="off">
          <input type="text" id="chatArea__msg" placeholder="Type message here...." name="chatMsg" />
          <input type="text" placeholder="Type message here...." name="outgoing_id" value="<?php echo $_SESSION['unique_id'] ?>" hidden/>
          <input type="text" placeholder="Type message here...." name="incoming_id" value="<?php echo $group_id ?>" hidden/>
          <button type="submit" class="chatArea__input-btn">
            <span class="material-icons"> send </span>
          </button>
        </form>
      </div>
    </section>
  </div>
  <script src="../javascript/loaderScreen.js"></script>
  <script src="../javascript/groupChat.js"></script>
  <script src="../javascript/path.js"></script>
</body>

</html>