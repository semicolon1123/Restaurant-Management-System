<?php require '../config/config.php'; ?>
<?php require '../libs/App.php'; ?>
<?php require '../includes/header.php'; ?>
<?php 

    $query = "SELECT * FROM bookings WHERE user_id='$_SESSION[user_id]'";
    $app = new App;

    $bookings = $app->selectAll($query);

?>


            <div class="container-xxl py-5 bg-dark hero-header mb-5">
                <div class="container text-center my-5 pt-5 pb-4">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Bookings</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item"><a href="<?php echo APPURL; ?>">Home</a></li>
                            <li class="breadcrumb-item"><a href="<?php echo APPURL; ?>/users/bookings.php?id=<?php echo $_SESSION['user_id'];?>">Bookings</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->


        <!-- Service Start -->
            <div class="container">
                
                <div class="col-md-12">
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">name</th>
                            <th scope="col">email</th>
                            <th scope="col">date_booking</th>
                            <th scope="col">num_people</th>
                            <th scope="col">special_request</th>   
                            <th scope="col">status</th>
                            <th scope="col">review</th>
                          </tr>
                        </thead>
                        <tbody>
                                <?php foreach($bookings as $booking) : ?>
                                    <tr>
                                        <th> <?php echo $booking->name; ?> </th>
                                        <th> <?php echo $booking->email; ?> </th>
                                        <th> <?php echo $booking->date_booking; ?> </th>
                                        <th> <?php echo $booking->num_people; ?> </th>
                                        <th> <?php echo $booking->special_request; ?> </th>
                                        <th> <?php echo $booking->status; ?> </th>
                                        <?php if($booking->status == "Confirmed") : ?>
                                            <td><a href="<?php echo APPURL; ?>/users/review.php" class="btn btn-success text-white">Write a review</td>
                                        <?php endif; ?>
                                    </tr>
                                <?php endforeach; ?>
                        </tbody>
                      </table>
                </div>
            </div>
        <!-- Service End -->
        

<?php require '../includes/footer.php'; ?>