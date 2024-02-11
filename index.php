<?php require 'config/config.php'; ?>
<?php require 'libs/App.php'; ?>
<?php require 'includes/header.php'; ?>
<?php 

    // Breakfast
    $query = "SELECT * FROM foods  WHERE meal_id =1";
    $app = new App;
    $meal_1 = $app->selectAll($query);

    $query = "SELECT * FROM foods WHERE meal_id =2";
    $app = new App;
    $meal_2 = $app->selectAll($query);

    $query = "SELECT * FROM foods WHERE meal_id =3";
    $app = new App;
    $meal_3 = $app->selectAll($query);

    $query = "SELECT * FROM foods WHERE meal_id =4";
    $meal_4 = $app->selectAll($query);

    // Lunch
    $query = "SELECT * FROM foods  WHERE meal_id =5";
    $app = new App;
    $meal_5 = $app->selectAll($query);

    $query = "SELECT * FROM foods WHERE meal_id = 6";
    $app = new App;
    $meal_6 = $app->selectAll($query);

    $query = "SELECT * FROM foods WHERE meal_id =7";
    $app = new App;
    $meal_7 = $app->selectAll($query);

    $query = "SELECT * FROM foods WHERE meal_id =8";
    $app = new App;
    $meal_8 = $app->selectAll($query);

    // Dinner
    $query = "SELECT * FROM foods  WHERE meal_id =9";
    $app = new App;
    $meal_9 = $app->selectAll($query);

    $query = "SELECT * FROM foods WHERE meal_id =10";
    $app = new App;
    $meal_10 = $app->selectAll($query);

    $query = "SELECT * FROM foods WHERE meal_id =11";
    $app = new App;
    $meal_11 = $app->selectAll($query);

    $query = "SELECT * FROM foods WHERE meal_id = 12";
    $app = new App;
    $meal_12 = $app->selectAll($query);

    // Reviews
    $query = "SELECT * FROM reviews";
    $app = new App;
    $reviews = $app->selectAll($query);
?>


            <div class="container-xxl py-5 bg-dark hero-header mb-5">
                <div class="container my-5 py-5">
                    <div class="row align-items-center g-5">
                        <div class="col-lg-6 text-center text-lg-start">
                            <h1 class="display-3 text-white animated slideInLeft">Enjoy Our<br>Delicious Meal</h1>
                            <p class="text-white animated slideInLeft mb-4 pb-2">Rawr tea Restaurant is more than just a place to eat, it’s an experience. Our thoughtfully designed space reflects our commitment to aesthetics and comfort. Whether you’re here for a romantic dinner, a family celebration, or a casual gathering with friends, our ambiance sets the stage for memorable moments.</p>
                            <a href="<?php echo APPURL;?>/booking.php" class="btn btn-primary py-sm-3 px-sm-5 me-3 animated slideInLeft">Book A Table</a>
                        </div>
                        <div class="col-lg-6 text-center text-lg-end overflow-hidden">
                            <img class="img-fluid" src="img/hero.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->


        <!-- Service Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-4">
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item rounded pt-3">
                            <div class="p-4">
                                <i class="fa fa-3x fa-user-tie text-primary mb-4"></i>
                                <h5>Master Chefs</h5>
                                <p>Our passionate culinary team is made up of innovative and experienced professionals with years of experience in foodservice.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item rounded pt-3">
                            <div class="p-4">
                                <i class="fa fa-3x fa-utensils text-primary mb-4"></i>
                                <h5>Quality Food</h5>
                                <p>Our vision is to craft the best dishes that people will love, nourishing them in body and spirit ensuring that every dish is a dish they can trust for both quality and safety.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="service-item rounded pt-3">
                            <div class="p-4">
                                <i class="fa fa-3x fa-cart-plus text-primary mb-4"></i>
                                <h5>Online Order</h5>
                                <p>Browse through our website's menu, choose your dish, and afterwards, proceed to checkout and payment. Your meal will delivered to you in no time.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="service-item rounded pt-3">
                            <div class="p-4">
                                <i class="fa fa-3x fa-headset text-primary mb-4"></i>
                                <h5>24/7 Service</h5>
                                <p> Yes, we offer 24 hour online delivery from a wide range of dishes. You can make online payment with your credit or debit card, as well as cash on delivery.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service End -->


        <!-- About Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6">
                        <div class="row g-3">
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.1s" src="img/about-1.jpg">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.3s" src="img/about-2.jpg" style="margin-top: 25%;">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.5s" src="img/about-3.jpg">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.7s" src="img/about-4.jpg">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <h5 class="section-title ff-secondary text-start text-primary fw-normal">About Us</h5>
                        <h1 class="mb-4">Welcome to <i class="fa fa-utensils text-primary me-2"></i>Rawr tea Restaurant</h1>
                        <p class="mb-4">Welcome to Rawr tea Restaurant, where culinary excellence meets warm hospitality. Our story is one of passion, dedication, 
                            and a commitment to delivering an exceptional dining experience to our cherished guests.</p>
                        <p class="mb-4">At Rawr tea Restaurant, our journey began with a simple yet profound vision – to create a haven for food enthusiasts, 
                            a place where flavors come alive, and memories are made. Established in 2023, 
                            we embarked on this culinary adventure with the aim of offering a unique blend of delectable cuisine, inviting ambiance, and impeccable service.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


        <!-- Menu Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">Food Menu</h5>
                    <h1 class="mb-5">Most Popular Dishes</h1>
                </div>
                <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.1s">
                    <ul class="nav nav-pills d-inline-flex justify-content-center border-bottom mb-5">
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 ms-0 pb-3 active" data-bs-toggle="pill" href="#tab-1">
                                <i class="fa fa-coffee fa-2x text-primary"></i>
                                <div class="ps-3">
                                    <small class="text-body">Popular</small>
                                    <h6 class="mt-n1 mb-0">Breakfast</h6>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 pb-3" data-bs-toggle="pill" href="#tab-2">
                                <i class="fa fa-hamburger fa-2x text-primary"></i>
                                <div class="ps-3">
                                    <small class="text-body">Special</small>
                                    <h6 class="mt-n1 mb-0">Lunch</h6>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 me-0 pb-3" data-bs-toggle="pill" href="#tab-3">
                                <i class="fa fa-utensils fa-2x text-primary"></i>
                                <div class="ps-3">
                                    <small class="text-body">Lovely</small>
                                    <h6 class="mt-n1 mb-0">Dinner</h6>
                                </div>
                            </a>
                        </li>
                    </ul>

                    <!-- Breakfast Category -->
                    <div class="tab-content">
                        <div id="tab-1" class="tab-pane fade show p-0 active">
                            <div class="row g-4">
                                <?php foreach($meal_1 as $meal_1) : ?>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="<?php echo APPIMAGES; ?>/<?php echo $meal_1->image; ?>" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span><?php echo $meal_1->name; ?></span>
                                                <span class="text-primary">₱ <?php echo $meal_1->price; ?></span>
                                            </h5>
                                            <small class="fst-italic"><?php echo $meal_1->description; ?></small>
                                            <a type="button" href="<?php echo APPURL; ?>/food/add-cart.php?id=<?php echo $meal_1->id; ?>" class="btn btn-primary py-2 top-0 end-0 mt-2 me-2">view</a>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach; ?>
                                <?php foreach($meal_2 as $meal_2) : ?>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="<?php echo APPIMAGES; ?>/<?php echo $meal_2->image; ?>" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span><?php echo $meal_2->name; ?></span>
                                                <span class="text-primary">₱ <?php echo $meal_2->price; ?></span>

                                            </h5>
                                            <small class="fst-italic"><?php echo $meal_2->description; ?></small>
                                                <a type="button" href="<?php echo APPURL; ?>/food/add-cart.php?id=<?php echo $meal_2->id; ?>" class="btn btn-primary py-2 top-0 end-0 mt-2 me-2">view</a>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach ?>
                                <?php foreach($meal_3 as $meal_3) : ?>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="<?php echo APPIMAGES; ?>/<?php echo $meal_3->image; ?>" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span><?php echo $meal_3->name; ?></span>
                                                <span class="text-primary">₱ <?php echo $meal_3->price; ?></span>

                                            </h5>
                                            <small class="fst-italic"><?php echo $meal_3->description; ?></small>
                                                <a type="button" href="<?php echo APPURL; ?>/food/add-cart.php?id=<?php echo $meal_3->id; ?>" class="btn btn-primary py-2 top-0 end-0 mt-2 me-2">view</a>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach ?>
                                <?php foreach($meal_4 as $meal_4) : ?>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="<?php echo APPIMAGES; ?>/<?php echo $meal_4->image; ?>" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span><?php echo $meal_4->name; ?></span>
                                                <span class="text-primary">₱ <?php echo $meal_4->price; ?></span>

                                            </h5>
                                            <small class="fst-italic"><?php echo $meal_4->description; ?></small>
                                                <a type="button" href="<?php echo APPURL; ?>/food/add-cart.php?id=<?php echo $meal_4->id; ?>" class="btn btn-primary py-2 top-0 end-0 mt-2 me-2">view</a>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach ?>   
                            </div>
                        </div>

                        <!-- Lunch Category -->
                        <div id="tab-2" class="tab-pane fade show p-0">
                            <div class="row g-4">
                            <?php foreach($meal_5 as $meal_5) : ?>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="<?php echo APPIMAGES; ?>/<?php echo $meal_5->image; ?>" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span><?php echo $meal_5->name; ?></span>
                                                <span class="text-primary">₱ <?php echo $meal_5->price; ?></span>
                                            </h5>
                                            <small class="fst-italic"><?php echo $meal_5->description; ?></small>
                                            <a type="button" href="<?php echo APPURL; ?>/food/add-cart.php?id=<?php echo $meal_5->id; ?>" class="btn btn-primary py-2 top-0 end-0 mt-2 me-2">view</a>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach; ?>
                                <?php foreach($meal_6 as $meal_6) : ?>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="<?php echo APPIMAGES; ?>/<?php echo $meal_6->image; ?>" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span><?php echo $meal_6->name; ?></span>
                                                <span class="text-primary">₱ <?php echo $meal_6->price; ?></span>
                                            </h5>
                                            <small class="fst-italic"><?php echo $meal_6->description; ?> </small>
                                                <a type="button" href="<?php echo APPURL; ?>/food/add-cart.php?id=<?php echo $meal_6->id; ?>" class="btn btn-primary py-2 top-0 end-0 mt-2 me-2">view</a>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach ?>
                                <?php foreach($meal_7 as $meal_7) : ?>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="<?php echo APPIMAGES; ?>/<?php echo $meal_7->image; ?>" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span><?php echo $meal_7->name; ?></span>
                                                <span class="text-primary">₱ <?php echo $meal_7->price; ?></span>
                                            </h5>
                                            <small class="fst-italic"><?php echo $meal_7->description; ?></small>
                                                <a type="button" href="<?php echo APPURL; ?>/food/add-cart.php?id=<?php echo $meal_7->id; ?>" class="btn btn-primary py-2 top-0 end-0 mt-2 me-2">view</a>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach ?>
                                <?php foreach($meal_8 as $meal_8) : ?>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="<?php echo APPIMAGES; ?>/<?php echo $meal_8->image; ?>" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span><?php echo $meal_8->name; ?></span>
                                                <span class="text-primary">₱ <?php echo $meal_8->price; ?></span>
                                            </h5>
                                            <small class="fst-italic"><?php echo $meal_8->description; ?></small>
                                                <a type="button" href="<?php echo APPURL; ?>/food/add-cart.php?id=<?php echo $meal_8->id; ?>" class="btn btn-primary py-2 top-0 end-0 mt-2 me-2">view</a>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach ?>
                            </div>
                        </div>

                        <!-- Dinner Category -->
                        <div id="tab-3" class="tab-pane fade show p-0">
                            <div class="row g-4">
                            <?php foreach($meal_9 as $meal_9) : ?>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="<?php echo APPIMAGES; ?>/<?php echo $meal_9->image; ?>" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span><?php echo $meal_9->name; ?></span>
                                                <span class="text-primary">₱ <?php echo $meal_9->price; ?></span>
                                            </h5>
                                            <small class="fst-italic"><?php echo $meal_9->description; ?></small>
                                            <a type="button" href="<?php echo APPURL; ?>/food/add-cart.php?id=<?php echo $meal_9->id; ?>" class="btn btn-primary py-2 top-0 end-0 mt-2 me-2">view</a>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach; ?>
                                <?php foreach($meal_10 as $meal_10) : ?>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="<?php echo APPIMAGES; ?>/<?php echo $meal_10->image; ?>" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span><?php echo $meal_10->name; ?></span>
                                                <span class="text-primary">₱ <?php echo $meal_10->price; ?></span>
                                            </h5>
                                            <small class="fst-italic"><?php echo $meal_10->description; ?></small>
                                                <a type="button" href="<?php echo APPURL; ?>/food/add-cart.php?id=<?php echo $meal_10->id; ?>" class="btn btn-primary py-2 top-0 end-0 mt-2 me-2">view</a>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach ?>
                                <?php foreach($meal_11 as $meal_11) : ?>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="<?php echo APPIMAGES; ?>/<?php echo $meal_11->image; ?>" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span><?php echo $meal_11->name; ?></span>
                                                <span class="text-primary">₱ <?php echo $meal_11->price; ?></span>
                                            </h5>
                                            <small class="fst-italic"><?php echo $meal_11->description; ?></small>
                                            <a type="button" href="<?php echo APPURL; ?>/food/add-cart.php?id=<?php echo $meal_11->id; ?>" class="btn btn-primary py-2 top-0 end-0 mt-2 me-2">view</a>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach ?>
                                <?php foreach($meal_12 as $meal_12) : ?>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="<?php echo APPIMAGES; ?>/<?php echo $meal_12->image; ?>" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span><?php echo $meal_12->name; ?></span>
                                                <span class="text-primary">₱ <?php echo $meal_12->price; ?></span>
                                            </h5>
                                            <small class="fst-italic"><?php echo $meal_12->description; ?></small>
                                            <a type="button" href="<?php echo APPURL; ?>/food/add-cart.php?id=<?php echo $meal_12->id; ?>" class="btn btn-primary py-2 top-0 end-0 mt-2 me-2">view</a>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Menu End -->


        <!-- Reservation Start -->
        <div class="container-xxl py-5 px-0 wow fadeInUp" data-wow-delay="0.1s">
            <div class="row g-0">
                <div class="col-md-6">
                    <img src="img/about-1.jpg" alt="The image is not supported" width="700px">
                </div>
                <div class="col-md-6 bg-dark d-flex align-items-center">
                    <div class="p-5 wow fadeInUp" data-wow-delay="0.2s">
                        <h5 class="section-title ff-secondary text-start text-primary fw-normal">Reservation</h5>
                        <h1 class="text-white mb-4">Book A Table Online</h1>
                        <form method="POST" action="booking-table.php">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input name="name" type="text" class="form-control" id="name" placeholder="Your Name">
                                        <label for="name">Your Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input name="email" type="email" class="form-control" id="email" placeholder="Your Email">
                                        <label for="email">Your Email</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating date" id="date3" data-target-input="nearest">
                                        <input name="date_booking" type="text" class="form-control datetimepicker-input" id="datetime" placeholder="Date & Time" data-target="#date3" data-toggle="datetimepicker" />
                                        <label for="datetime">Date & Time</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <select name="num_people" class="form-select" id="select1">
                                          <option value="1">1</option>
                                          <option value="2">2</option>
                                          <option value="3">3</option>
                                          <option value="4">4</option>
                                          <option value="5">5</option>
                                        </select>
                                        <label for="select1">No Of People</label>
                                      </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea name="special_request" class="form-control" placeholder="Special Request" id="message" style="height: 100px"></textarea>
                                        <label for="message">Special Request</label>
                                    </div>
                                </div>
                                <?php 
                                    if(isset($_SESSION['user_id'])) : ?>
                                        <div class="col-12">
                                            <button name="submit" class="btn btn-primary w-100 py-3" type="submit">Book Now</button>
                                        </div>
                                <?php else : ?>  
                                    <p>Log in to book a table</p> 
                                <?php endif; ?>                           
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Reservation Start -->


        <!-- Team Start -->
        <div class="container-xxl pt-5 pb-3">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">Team Members</h5>
                    <h1 class="mb-5">Our Master Chefs</h1>
                </div>
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item text-center rounded overflow-hidden">
                            <div class="rounded-circle overflow-hidden m-4">
                                <img class="img-fluid" src="img/chef_yasee.jpg" alt="">
                            </div>
                            <h5 class="mb-0">Lyka Marie S. Hutalla</h5>
                            <small>Executive Chef</small>
                            <div class="d-flex justify-content-center mt-3">
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="team-item text-center rounded overflow-hidden">
                            <div class="rounded-circle overflow-hidden m-4">
                                <img class="img-fluid" src="img/chef_placino.png" alt="">
                            </div>
                            <h5 class="mb-0">Renson S. Placino</h5>
                            <small>Chef-Owner</small>
                            <div class="d-flex justify-content-center mt-3">
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="team-item text-center rounded overflow-hidden">
                            <div class="rounded-circle overflow-hidden m-4">
                                <img class="img-fluid" src="img/chef_abadilla.jpg" alt="">
                            </div>
                            <h5 class="mb-0">Danielle Lyn J. Abadilla</h5>
                            <small>Senior Chef</small>
                            <div class="d-flex justify-content-center mt-3">
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->


        <!-- Testimonial Start -->
        <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container">
                <div class="text-center">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">Testimonial</h5>
                    <h1 class="mb-5">Our Customers Say!!!</h1>
                </div>
                <div class="owl-carousel testimonial-carousel">
                    <?php foreach($reviews as $review) : ?>
                    <div class="testimonial-item bg-transparent border rounded p-4">
                        <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                        <p>
                            <?php echo $review->review; ?>
                        </p>
                        <div class="d-flex align-items-center">
                            <!-- <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial_glenn.jpg" style="width: 50px; height: 50px;"> -->
                            <div class="ps-3">
                                <h5 class="mb-1"><?php echo $review->username; ?></h5>
                                <small>College Student</small>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->
        
<?php require "includes/footer.php"; ?>