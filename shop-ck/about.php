<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
  $user_id = $_SESSION['user_id'];
}else{
  $user_id = '';
}

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
  <title>about</title>
</head>

<body>

  <!-- header section starts -->

  <?php include('components/user_header.php'); ?>

  <!-- header section ends -->

  <div class="heading">
    <h3>about us</h3>
    <p><a href="home.php">home</a><span> / about</span></p>
  </div>

  <!-- about section starts -->
  <section class="about">

    <div class="row">

      <div class="image">
        <img src="images/about.jpg" alt="">
      </div>

      <div class="content">
        <h3>Why choose us?</h3>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Incidunt, molestias. Cumque quia ut amet eos et quam, quaerat ipsa velit soluta sunt, repellat cupiditate blanditiis obcaecati. Sapiente saepe error esse?</p>
        <a href="menu.php" class="btn">our menu</a>
      </div>

    </div>

  </section>
  <!-- about section ends -->

  <!-- steps section starts -->

  <section class="steps">

    <h1 class="title">3 simple steps</h1>

    <div class="box-container">

      <div class="box">
        <img src="images/step-1.png" alt="">
        <h3>select products</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet autem et quod rem.</p>
      </div>

      <div class="box">
        <img src="images/step-2.png" alt="">
        <h3>fast delivery</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet autem et quod rem.</p>
      </div>

      <div class="box">
        <img src="images/step-3.jpg" alt="">
        <h3>enjoy product</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet autem et quod rem.</p>
      </div>

    </div>

  </section>

  <!-- steps section ends -->

  <!-- reviews section starts -->

  <section class="reviews">

    <h1 class="title">customer's reviews</h1>

    <div class="swiper reviews-slider">

      <div class="swiper-wrapper">

        <div class="swiper-slide slide">
          <img src="images/pic-1.png" alt="">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum, quos alias! Quia ex consequuntur cumque hic aliquid deleniti deserunt quidem perferendis.</p>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
          </div>
          <h3>john deo</h3>
        </div>

        <div class="swiper-slide slide">
          <img src="images/pic-2.png" alt="">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum, quos alias! Quia ex consequuntur cumque hic aliquid deleniti deserunt quidem perferendis.</p>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
          </div>
          <h3>john deo</h3>
        </div>

        <div class="swiper-slide slide">
          <img src="images/pic-3.png" alt="">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum, quos alias! Quia ex consequuntur cumque hic aliquid deleniti deserunt quidem perferendis.</p>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
          </div>
          <h3>john deo</h3>
        </div>

        <div class="swiper-slide slide">
          <img src="images/pic-4.png" alt="">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum, quos alias! Quia ex consequuntur cumque hic aliquid deleniti deserunt quidem perferendis.</p>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
          </div>
          <h3>john deo</h3>
        </div>

        <div class="swiper-slide slide">
          <img src="images/pic-5.png" alt="">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum, quos alias! Quia ex consequuntur cumque hic aliquid deleniti deserunt quidem perferendis.</p>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
          </div>
          <h3>john deo</h3>
        </div>

        <div class="swiper-slide slide">
          <img src="images/pic-6.png" alt="">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum, quos alias! Quia ex consequuntur cumque hic aliquid deleniti deserunt quidem perferendis.</p>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
          </div>
          <h3>john deo</h3>
        </div>

      </div>

      <div class="swiper-pagination"></div>

    </div>

  </section>

  <!-- reviews section ends -->


  
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
    
    var swiper = new Swiper(".reviews-slider", {
      loop: true,
      grabCursor: true,
      spaceBetween: 20,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      breakpoints: {
        0: {
          slidesPerView: 1,
        },
        700: {
          slidesPerView: 2,
        },
        1024: {
          slidesPerView: 3,
        },
      },
    });

  </script>
</body>

</html>