<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
  $user_id = $_SESSION['user_id'];
}else{
  $user_id = '';
  header('location:home.php');
}

if(isset($_POST['submit'])){

  $address = $_POST['house'] .', '.$_POST['street'].', '.$_POST['district'].', '.$_POST['city'] .', '. $_POST['country'] .' - '. $_POST['card'];
  $address = filter_var($address, FILTER_SANITIZE_STRING);

  $update_address = $conn->prepare("UPDATE `users` set address = ? WHERE id = ?");
  $update_address->execute([$address, $user_id]);

  $message[] = 'address saved!';

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
  <title>update address</title>
</head>

<body>

  <!-- header section starts -->

  <?php include('components/user_header.php'); ?>

  <!-- header section ends -->

  <section class="form-container">

    <form action="" method="post">
      <h3>your address</h3>
      <input type="text" class="box" placeholder="house number" required maxlength="50" name="house">
      <input type="text" class="box" placeholder="street name" required maxlength="50" name="street">
      <input type="text" class="box" placeholder="district name" required maxlength="50" name="district">
      <input type="text" class="box" placeholder="city name" required maxlength="50" name="city">
      <input type="text" class="box" placeholder="country name" required maxlength="50" name="country">
      <input type="number" class="box" placeholder="bank card number by payment method" required min="0" max="9999999999999999999" maxlength="19" name="card">
      <input type="submit" value="save address" name="submit" class="btn">
    </form>

  </section>










  <!-- footer section starts -->

  <?php include('components/user_footer.php'); ?>

  <!-- footer section ends -->

  


</body>

</html>