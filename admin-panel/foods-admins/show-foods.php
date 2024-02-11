<?php require "../../config/config.php"; ?>
<?php require "../../libs/App.php"; ?>
<?php require "../layouts/header.php"; ?>
<?php

  $query = "SELECT * FROM foods";
  $app = new App;
  $app->validateAdminSessionInside();
  $foods = $app->selectAll($query);
?>

  <div class="row">
    <div class="col">
      <div class="card">
        <div class="card-body">
        <i class="fa-solid fa-utensils fa-xl" style="padding-right: 20px;"></i>
          <h5 class="card-title mb-4 d-inline">Foods</h5>
            <a  href="create-foods.php" class="btn btn-primary mb-4 text-center float-right">Create Foods</a>

            <table class="table">
              <thead>
                <tr>
                  <th scope="col">id</th>
                  <th scope="col">name</th>
                  <th scope="col">image</th>
                  <th scope="col">price</th>
                  <th scope="col">delete</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach($foods as $food) : ?>
                  <tr>
                    <th scope="col"><?php echo $food->id; ?></th>
                    <td><?php echo $food->name; ?></td>
                    <td><img style="width: 50px; height: 50px;" src="../../food/<?php echo $food->image; ?>" alt=""></td>                  
                    <td>₱ <?php echo $food->price; ?></td>
                    <td><a href="delete-foods.php?id=<?php echo $food->id; ?>" class="btn btn-danger text-center ">delete</a></td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table> 
          </div>
        </div>
      </div>
    </div>

<?php require "../layouts/footer.php"; ?>