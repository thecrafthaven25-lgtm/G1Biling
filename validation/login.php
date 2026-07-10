<?php session_start(); ?>


<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Title Meta -->
  <meta charset="utf-8" />
  <title>Admin Login | G1 Fashion</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description"
    content="Darkone: An advanced, fully responsive admin dashboard template packed with features to streamline your analytics and management needs." />

  <meta name="author" content="G1_fashion" />

  <meta name="keywords"
    content="Darkone, admin dashboard, responsive template, analytics, modern UI, management tools" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="robots" content="index, follow" />
  <meta name="theme-color" content="#ffffff">

    <!-- App favicon -->
    <link rel="shortcut icon" href="../assets/img/favicons.ico">

    <!-- Google Font Family link -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>

    <!-- Vendor css -->
    <link href="../assets/css/vendor.min.css" rel="stylesheet" type="text/css" />

    <!-- Icons css -->
    <link href="../assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="/your-path-to-uicons/css/uicons-rounded-regular.css" rel="stylesheet">
    <link href="/your-path-to-uicons/css/uicons-rounded-bold.css" rel="stylesheet">
    <link href="/your-path-to-uicons/css/uicons-rounded-solid.css" rel="stylesheet">

    <!-- App css -->
    <link href="../assets/css/style.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="../assets/css/style.css">
    <link href="../assets/css/style.min.css" rel="stylesheet" type="text/css" />

    <!-- Theme Config js -->
    <script src="../assets/js/config.js"></script>


  <link href="../assets/css/login.css" rel="stylesheet" />


</head>


<body>
  
  <div class="wrapper">
     <div class="logo-box">
      <a href="index.html" class="logo-dark">
        <img src="../assets/img/logo-sm.png" class="logo-sm" alt="logo sm">
        <img src="../assets/img/logo-dark.png" class="logo-lg" style="width: 12em!important; height: auto;margin-bottom: 20px;">
      </a>
    </div>

    <div class="login-container">
      <h2>Login</h2>


      <form action="#" method="POST" id="loginForm">

        <div class="input-field">
          <input type="text" id="username" name="user_name" required>
        <label>Enter your username</label>

          <!-- <input type="text" id="username" name="user_name" placeholder="Username" 
            autocomplete="off" autofocus required> -->
        </div>

        <div class="input-field">
          <input type="password" name="pass" id="password" required>
          <span class="toggle-password" id="togglePassword">👁️</span>
          <label>Enter your password</label>
        </div>

        <button type="submit" name="login" class="login-btn">Login</button>
      </form>

    </div>
  </div>




  <script src="../assets/js/login.js"> </script>

     <?php 

    include ("../db_con.php");

    if(isset($_POST['login'])){
        $user_name = $_POST['user_name'];
        $pass = $_POST['pass'];

        $query = "SELECT * FROM `users` WHERE user_name = '$user_name' && pass = '$pass' ";
        $query_run = mysqli_query($conn,$query);
        $total = mysqli_num_rows($query_run);
        // echo $total;
        if($total == 1)
        {
            $_SESSION['user_name']=$user_name;
            echo "
            <script>
            document.location.href='../index.php';
            </script>";

        }
        else
        {

            echo "<script> 
                alert('Please Check Details');
            </script>";
        }
    } 
    
    ?>

</body>
</html>
