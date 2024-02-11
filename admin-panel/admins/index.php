<?php require "../../config/config.php"; ?>
<?php require "../../libs/App.php"; ?>
<?php require "../layouts/header.php"; ?>
<?php 
  $app = new App;
  $app->validateAdminSessionInside();

  $query = "SELECT COUNT(*) AS count_foods FROM foods";
  $count_foods = $app->selectOne($query);

  $query = "SELECT COUNT(*) AS count_orders FROM orders";
  $count_orders = $app->selectOne($query);

  $query = "SELECT COUNT(*) AS count_bookings FROM bookings";
  $count_bookings = $app->selectOne($query);

  $query = "SELECT COUNT(*) AS count_admins FROM admins";
  $count_admins = $app->selectOne($query);
?>
    
  <div class="row" style="width: 50%; margin-left: auto; margin-right: auto; margin-top: 50px;">
    <div class="col-md-6">
      <div class="card" style="margin-bottom: 70px;">
        <div class="card-body"> 
          <h5 class="card-title" style="text-align: left; font-weight: 1000; padding-bottom: 20px;">  <i class="fa-solid fa-utensils fa-xl" style="padding-right: 50px;"></i>FOODS</h5>
          <p class="card-text">number of foods: <b><?php echo $count_foods->count_foods; ?></b></p>          
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="card" style="margin-bottom: 70px;">
        <div class="card-body">
          <h5 class="card-title" style="text-align: left; font-weight: 1000; padding-bottom: 20px;"> <i class="fa-solid fa-bell-concierge fa-xl" style="padding-right: 50px;"></i> ORDERS</h5>
          
          <p class="card-text">number of orders: <b><?php echo $count_orders->count_orders; ?></b></p>       
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="card" style="margin-bottom: 70px;">
        <div class="card-body">
          <h5 class="card-title" style="text-align: left; font-weight: 1000; padding-bottom: 20px;"> <i class="fa-solid fa-chair fa-xl" style="padding-right: 50px;"></i> BOOKINGS</h5>            
          <p class="card-text">number of bookings: <b><?php echo $count_bookings->count_bookings; ?></b> </p> 
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="card" style="margin-bottom: 70px;">
        <div class="card-body">
          <h5 class="card-title" style="text-align: left; font-weight: 1000; padding-bottom: 20px;"> <i class="fa-solid fa-user-tie fa-xl" style="padding-right: 50px;"></i> ADMINS</h5>
          
          <p class="card-text">number of admins: <b><?php echo $count_admins->count_admins; ?></b></p>    
        </div>
      </div>
    </div>
  </div>

<?php require "../layouts/footer.php"; ?>
