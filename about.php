<?php require 'config/config.php'; ?>
<?php require 'libs/App.php'; ?>
<?php require 'includes/header.php'; ?>

    <div class="container-xxl py-5 bg-dark hero-header mb-5">
        <div class="container text-center my-5 pt-5 pb-4">
            <h1 class="display-3 text-white mb-3 animated slideInDown">About Us</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center text-uppercase">
                    <li class="breadcrumb-item"><a href="<?php echo APPURL; ?>">Home</a></li>
                    <li class="breadcrumb-item"><a href="about.php">About</a></li>
                </ol>
            </nav>
        </div>
    </div>

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
                            <a class="btn btn-square btn-primary mx-1"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square btn-primary mx-1"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square btn-primary mx-1"><i class="fab fa-instagram"></i></a>
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
                            <a class="btn btn-square btn-primary mx-1"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square btn-primary mx-1"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square btn-primary mx-1"><i class="fab fa-instagram"></i></a>
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
                            <a class="btn btn-square btn-primary mx-1"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square btn-primary mx-1"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square btn-primary mx-1"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php require 'includes/footer.php'; ?>