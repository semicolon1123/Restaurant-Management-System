<?php require "../../config/config.php"; ?>
<?php require "../../libs/App.php"; ?>
<?php require "../layouts/header.php"; ?>
<?php 

    $app = new App;
    $app->validateAdminSessionInside();

    if(isset($_POST['submit'])){
        $admin_name = $_POST['admin_name'];
        $email = $_POST['email'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

        $query = "INSERT INTO admins(admin_name, email, password)
                    VALUES(:admin_name, :email, :password)";

        $arr = [
            ":admin_name" => $admin_name,
            ":email" => $email,
            ":password" => $password,
        ];

        $path = "admins.php";
        
        $app->register($query, $arr, $path);
    }
?>

  <div class="row">
    <div class="col">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title mb-5 d-inline">Create Admins</h5>
          <form method="POST" action="create-admins.php" enctype="multipart/form-data">
            <!-- Email input -->
            <div class="form-outline mb-4 mt-4">
              <input type="email" name="email" id="form2Example1" class="form-control" placeholder="email" />                
            </div>
            <div class="form-outline mb-4">
              <input type="text" name="admin_name" id="form2Example1" class="form-control" placeholder="admin_name" />
            </div>
            <div class="form-outline mb-4">
              <input type="password" name="password" id="form2Example1" class="form-control" placeholder="password" />
            </div>
            <!-- Submit button -->
            <button type="submit" name="submit" class="btn btn-primary  mb-4 text-center">create</button>
          </form>
        </div>
      </div>
    </div>
  </div>
<?php require "../layouts/footer.php"; ?>