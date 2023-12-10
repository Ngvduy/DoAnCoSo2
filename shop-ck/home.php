<?php

include 'components/connect.php';

session_start();

if (isset($_SESSION['user_id'])) {
  $user_id = $_SESSION['user_id'];
} else {
  $user_id = '';
}

include 'components/add_cart.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- font awesome cdn link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- custom css file link -->
  <link rel="stylesheet" href="css/style.css">

  <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
  <title>home</title>
</head>

<body>

  <!-- header section starts -->

  <?php include('components/user_header.php'); ?>

  <!-- header section ends -->






  <!-- hero section starts -->

  <section class="hero">

    <div class="swiper hero-slider">

      <div class="swiper-wrapper">

        <div class="swiper-slide slide">
          <div class="content">
            <span>order online</span>
            <h3>Beautiful painting</h3>
            <a href="menu.php" class="btn">see menus</a>
          </div>
          <div class="image">
            <img src="images/home-1.jpg" alt="">
          </div>
        </div>

        <div class="swiper-slide slide">
          <div class="content">
            <span>order online</span>
            <h3>amazing painting</h3>
            <a href="menu.php" class="btn">see menus</a>
          </div>
          <div class="image">
            <img src="images/home-2.jpg" alt="">
          </div>
        </div>

        <div class="swiper-slide slide">
          <div class="content">
            <span>order online</span>
            <h3>peaceful painting</h3>
            <a href="menu.php" class="btn">see menus</a>
          </div>
          <div class="image">
            <img src="images/home-3.jpg" alt="">
          </div>
        </div>

      </div>

      <div class="swiper-pagination"></div>

    </div>

  </section>

  <!-- hero section ends -->

  <!-- category section starts -->

  <section class="category">

    <h1 class="title">paintings category</h1>

    <div class="box-container">

      <a href="category.php?category=landscape paintings" class="box">
        <img src="images/cat-1.jpeg" alt="">
        <h3>Landscape paintings</h3>
      </a>

      <a href="category.php?category=still life paintings" class="box">
        <img src="images/cat-2.jpg" alt="">
        <h3>Still life paintings</h3>
      </a>

      <a href="category.php?category=portrait paintings" class="box">
        <img src="images/cat-3.jpg" alt="">
        <h3>Portrait paintings</h3>
      </a>

      <a href="category.php?category=another paintings" class="box">
        <img src="images/cat-4.jpg" alt="">
        <h3>Another paintings</h3>
      </a>

    </div>

  </section>

  <!-- category section ends -->

  <!-- home products section starts -->

  <section class="products">

    <h1 class="title">lastest paintings</h1>

    <div class="box-container">
      <?php
      $select_products = $conn->prepare("SELECT * FROM products LIMIT 6");
      $select_products->execute();
      if ($select_products->rowCount() > 0) {
        while ($fetch_products = $select_products->fetch(PDO::FETCH_ASSOC)) {
      ?>
          <form action="" method="post" class="box">
            <input type="hidden" name="pid" value="<?= $fetch_products['id']; ?>">
            <input type="hidden" name="name" value="<?= $fetch_products['name']; ?>">
            <input type="hidden" name="price" value="<?= $fetch_products['price']; ?>">
            <input type="hidden" name="image" value="<?= $fetch_products['image']; ?>">
            <a href="quick_view.php?pid=<?= $fetch_products['id']; ?>" class="fas fa-eye"></a>
            <button type="submit" class="fas fa-shopping-cart" name="add_to_cart"></button>
            <img src="uploaded_img/<?= $fetch_products['image']; ?>" class="image" alt="">
            <a href="category.php?category=<?= $fetch_products['category']; ?>" class="cat"><?= $fetch_products['category']; ?></a>
            <div class="name"><?= $fetch_products['name']; ?></div>
            <div class="flex">
              <div class="price"><span>$</span><?= $fetch_products['price']; ?></div>
              <input type="number" name="qty" class="qty" min="1" max="99" value="1" maxlength="2">
            </div>
          </form>
      <?php
        }
      } else {
        echo '<div class="empty">no products added yet!</div>';
      }
      ?>
      
    </div>

    <div class="more-btn">
      <a href="menu.php" class="btn">load more</a>
    </div>

  </section>

  <!-- home products section ends -->








  <!-- footer section starts -->

  <?php include('components/user_footer.php'); ?>

  <!-- footer section ends -->

  <div class="loader">
    <img src="images/loader.gif" alt="">
  </div>








  <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

  <!-- custom js file link -->
  <script src="js/script.js"></script>
  <script>
    var swiper = new Swiper(".hero-slider", {
      loop: true,
      grabCursor: true,
      effect: "flip",
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
    });
  </script>
</body>

</html>