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
        <div class="container text-center my-5 pt-5 pb-4">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Menu</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center text-uppercase">
                    <li class="breadcrumb-item"><a href="<?php echo APPURL; ?>">Home</a></li>
                    <li class="breadcrumb-item"><a href="food-menu.php">MENU</a></li>
                </ol>
            </nav>
        </div>
    </div>

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

<?php require 'includes/footer.php'; ?>