<?php require '../config/config.php'; ?>
<?php require '../libs/App.php'; ?>
<?php require '../includes/header.php'; ?>
<?php 
     if(!isset($_SERVER['HTTP_REFERER'])){
        // redirect them to your desired location
        echo "<script> window.location.href='".APPURL."' </script>";
        exit;
    }
?>

<?php 

    $app = new App;

    if(isset($_POST['submit'])){

        $full_name = $_POST['full_name'];
        $email_address = $_POST['email_address'];
        $city = $_POST['city'];
        $province = $_POST['province'];
        $zipcode = $_POST['zipcode'];
        $phone_number = $_POST['phone_number'];
        $address = $_POST['address'];
        $total_price = $_SESSION['total_price'];
        $user_id = $_SESSION['user_id'];
            
    
        $query = "INSERT INTO orders(full_name, email_address, city, province, zipcode, phone_number, address, total_price, user_id)
                        VALUES(:full_name, :email_address, :city, :province, :zipcode, :phone_number, :address, :total_price, :user_id)";
    
        $arr = [
            ":full_name" => $full_name,
            ":email_address" => $email_address,
            ":city" => $city,
            ":province" => $province,
            ":zipcode" => $zipcode,
            ":phone_number" => $phone_number,
            ":address" => $address,
            ":total_price" => $total_price,
            ":user_id" => $user_id,
        ];
    
            $path = "pay.php";
            
            $app->insert($query, $arr, $path);
    }
?>

            <div class="container-xxl py-5 bg-dark hero-header mb-5">
                <div class="container text-center my-5 pt-5 pb-4">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Checkout</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Checkout</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <div class="container">  
            <div class="col-md-12 bg-dark">
                <div class="p-5 wow fadeInUp" data-wow-delay="0.2s">
                    <h5 class="section-title ff-secondary text-start text-primary fw-normal">Reservation</h5>
                    <h1 class="text-white mb-4">Checkout</h1>
                        <form  class="col-md-12" method="POST" action="checkout.php">
                            <div class="row g-3">
                                <div class="col-md-12">
                                    <div class="form-floating">
                                        <input name="full_name" type="text" class="form-control" id="name" placeholder="Full Name">
                                        <label for="name">Full Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input name="email_address" type="email" class="form-control" id="email" placeholder="Email Address">
                                        <label for="email">Email Address</label>
                                    </div>
                                </div>
                               
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input name="city" type="text" class="form-control" id="email" placeholder="City">
                                        <label for="email">City</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input name="province" type="text" class="form-control" id="email" placeholder="Province">
                                        <label for="text">Province</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input name="zipcode" type="text" class="form-control" id="email" placeholder="Zipcode">
                                        <label for="text">Zipcode</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-floating">
                                        <input name="phone_number" type="text" class="form-control" id="email" placeholder="Phone Number">
                                        <label for="text">Phone Number</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea name="address" class="form-control" placeholder="Address" id="message" style="height: 100px"></textarea>
                                        <label for="message">Address</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button name="submit" class="btn btn-primary w-100 py-3" type="submit">Order and Pay Now</button>
                                </div>
                            </div>
                        </form>
                </div>
            </div>
        </div>       

<?php require '../includes/footer.php'; ?>