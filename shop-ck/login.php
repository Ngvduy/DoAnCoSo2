<?php

include 'components/connect.php';

session_start();

if (isset($_SESSION['user_id'])) {
  $user_id = $_SESSION['user_id'];
} else {
  $user_id = '';
}

if (isset($_POST['submit'])) {

  $email = $_POST['email'];
  $email = filter_var($email, FILTER_SANITIZE_STRING);
  $pass = sha1($_POST['pass']);
  $pass = filter_var($pass, FILTER_SANITIZE_STRING);

  $select_user = $conn->prepare("SELECT * FROM users WHERE email = ? AND password = ?");

  $select_user->execute([$email, $pass]);
  $row = $select_user->fetch(PDO::FETCH_ASSOC);

  if ($select_user->rowCount() > 0) {
    $_SESSION['user_id'] = $row['id'];
    header('location:home.php');
  } else {
    $message[] = 'incorrect email or password!';
  }

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
  <title>login</title>
</head>

<body>

  <!-- header section starts -->

  <?php include('components/user_header.php'); ?>

  <!-- header section ends -->

  <section class="form-container">

    <form action="" method="post">
      <h3>login now</h3>
      <input type="email" name="email" placeholder="enter your email" maxlength="50" required class="box">
      <input type="password" name="pass" placeholder="enter your password" maxlength="50" required class="box" oninput="this.value = this.value.replace(/\s/g,'')">
      <input type="submit" value="login now" name="submit" class="btn">
      <p>don't have an account? <a href="register.php">register now</a></p>
    </form>

  </section>









  <!-- footer section starts -->

  <?php include('components/user_footer.php'); ?>

  <!-- footer section ends -->

  

  <!-- custom js file link -->
  <script src="js/script.js"></script>


</body>

</html>