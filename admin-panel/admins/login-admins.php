<?php require "../../config/config.php"; ?>
<?php require "../../libs/App.php"; ?>
<?php require "../layouts/header.php"; ?>
<?php 

    $app = new App;
    $app->validateAdminSession();

    if(isset($_POST['submit'])){

        $email = $_POST['email'];
        $password = $_POST['password'];

        $query = "SELECT * FROM admins WHERE email='$email'";

        $data = [
            "email" => $email,
            "password" => $password,
        ];

        // Root directory
        $path = "http://localhost:8012/rawr_tea_restaurant_management/admin-panel/admins/index.php";
        
        $app->login($query, $data, $path);
    }
?>
  <div class="row" style="width: 400px; text-align: center; margin: 100px auto auto;">
    <div class="col">
      <div class="card" style="background-color: transparent;">
        <div class="card-body">
            <h1 class="card-title mt-6" style="color: white;">LOGIN</h1>
            <form method="POST" class="p-auto" action="login-admins.php">
                <!-- Email input -->
                <div class="form-outline mb-4">
                  <input type="email" name="email" id="form2Example1" class="form-control-lg" placeholder="Email" />
                 
                </div>
                
                <!-- Password input -->
                <div class="form-outline mb-4">
                  <input type="password" name="password" id="form2Example2" placeholder="Password" class="form-control-lg" />
                  
                </div>
                <!-- Submit-->
                <button type="submit" name="submit" class="btn btn-primary btn-lg  mb-4 text-center">LOGIN</button>
            </form>
        </div>
      </div>
    </div>
  </div>

<?php require "../layouts/footer.php"; ?>