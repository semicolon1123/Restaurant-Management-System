<?php require "../../config/config.php"; ?>
<?php require "../../libs/App.php"; ?>
<?php require "../layouts/header.php"; ?>
<?php

  $query = "SELECT * FROM bookings";
  $app = new App;
  $app->validateAdminSessionInside();
  $bookings = $app->selectAll($query);
?>

  <div class="row">
    <div class="col">
      <div class="card">
        <div class="card-body">
          <i class="fa-solid fa-chair fa-xl" style="padding-right: 20px;"></i>
          <h5 class="card-title mb-4 d-inline">Bookings</h5>

          <table class="table">
            <thead>
              <tr>
                <th scope="col">id</th>
                <th scope="col">name</th>
                <th scope="col">email</th>
                <th scope="col">date_booking</th>
                <th scope="col">num_people</th>
                <th scope="col">special_request</th>
                <th scope="col">status</th>
                <th scope="col">change status</th>
                <th scope="col">delete</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach($bookings as $booking) : ?>
              <tr>
                <th scope="row"><?php echo $booking->id; ?></th>
                <td><?php echo $booking->name; ?></td>
                <td><?php echo $booking->email; ?></td>
                <td><?php echo $booking->date_booking; ?></td>
                <td><?php echo $booking->num_people; ?></td>
                <td><?php echo $booking->special_request; ?></td>
                <td><?php echo $booking->status; ?></td>
                <td><a href="booking-status.php?id=<?php echo $booking->id; ?>" class="btn btn-primary text-center">status</a></td>
                <td><a href="delete-bookings.php?id=<?php echo $booking->id; ?>" class="btn btn-danger  text-center ">delete</a></td>
              </tr>
              <?php endforeach; ?>
            </tbody>
          </table> 
        </div>
      </div>
    </div>
  </div>

<?php require "../layouts/footer.php"; ?>