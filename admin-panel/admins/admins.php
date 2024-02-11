<?php require "../../config/config.php"; ?>
<?php require "../../libs/App.php"; ?>
<?php require "../layouts/header.php"; ?>
<?php 
  $query = "SELECT * FROM admins";
  $app = new App;
  $app->validateAdminSessionInside();
  $admins = $app->selectAll($query);
?>

  <div class="row">
    <div class="col">
      <div class="card">
        <div class="card-body">
          <i class="fa-solid fa-user-tie fa-xl" style="padding-right: 20px;"></i>
            <h5 class="card-title mb-4 d-inline">Admins</h5>
           <a  href="create-admins.php" class="btn btn-primary mb-4 text-center float-right">Create Admins</a>
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">admin_name</th>
                  <th scope="col">email</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach($admins as $admin) : ?>
                  <tr>
                    <th scope="row"><?php echo $admin->id; ?></th>
                    <td><?php echo $admin->admin_name; ?></td>
                    <td><?php echo $admin->email; ?></td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table> 
        </div>
      </div>
    </div>
  </div>

<?php require "../layouts/footer.php"; ?>