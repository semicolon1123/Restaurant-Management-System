<?php 
  $app = new APP;
  $app->startingSession();
  define("ADMIN_URL", "http://localhost:8012/rawr_tea_restaurant_management/admin-panel/");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Admin Panel</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
     <link href="<?php echo ADMIN_URL; ?>/styles/style.css" rel="stylesheet">
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/4e563b5da7.js" crossorigin="anonymous"></script>
</head>
<body style="background: linear-gradient(rgba(15, 23, 43, .9), rgba(15, 23, 43, .9)), url('bg-hero.jpg');">

<div id="wrapper">
    <nav class="navbar header-top fixed-top navbar-expand-lg" style="background-color: #0F172B;">
    <div class="container">
      <img class="admin_panel_logo" src="../layouts/rawr_tea_logo.png" alt="ALT" style="width: 40px; margin-left: -150px; margin-right: 30px">
      <a class="navbar-brand" href="#" style="color: #FEA116; font-family: 'Pacifico', cursive; font-weight: 600 !important;">Rawr tea</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarText">
        <?php if(isset($_SESSION['email'])) : ?>

          <ul class="navbar-nav side-nav" style="width: 200px; background-color: #0F172B;">
            <li class="nav-item">
              <a class="nav-link" style="margin-left: 10px; color: #FEA116; padding-top: 30px;" href="<?php echo ADMIN_URL; ?>admins/index.php"> HOME
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo ADMIN_URL; ?>admins/admins.php" style="margin-left: 10px; color: #FEA116; padding-top: 20px;">ADMIN</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo ADMIN_URL; ?>orders-admins/show-orders.php" style="margin-left: 10px; color: #FEA116; padding-top: 20px;">ORDERS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo ADMIN_URL; ?>foods-admins/show-foods.php" style="margin-left: 10px; color: #FEA116; padding-top: 20px;">FOODS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo ADMIN_URL; ?>bookings-admins/show-bookings.php" style="margin-left: 10px; color: #FEA116; padding-top: 20px;">BOOKINGS</a>
            </li>
          </ul>
        <?php endif; ?>

        <ul class="navbar-nav ml-md-auto d-md-flex">
          <?php if(!isset($_SESSION['email'])) :?>

            <li class="nav-item">
              <a class="nav-link" style="color: #FEA116;" href="<?php echo ADMIN_URL; ?>/admins/login-admins.php">LOGIN</a>
            </li>

          <?php else : ?>
            <li class="nav-item">
              <a class="nav-link" style="color: #FEA116;" href="<?php echo ADMIN_URL; ?>">HOME
                <span class="sr-only">(current)</span>
              </a>
            </li>
          
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #FEA116;">

          <?php echo $_SESSION['email']; ?>
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" style="color: #FEA116;" href="<?php echo ADMIN_URL; ?>/admins/logout.php">LOGOUT</a>
              
            </li>
          <?php endif; ?>
                          
          
        </ul>
      </div>
    </div>
    </nav>
<div class="container-fluid">