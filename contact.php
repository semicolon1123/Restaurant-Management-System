<?php require 'config/config.php'; ?>
<?php require 'libs/App.php'; ?>
<?php require 'includes/header.php'; ?>

    <div class="container-xxl py-5 bg-dark hero-header mb-5">
        <div class="container text-center my-5 pt-5 pb-4">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Contact Us</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center text-uppercase">
                    <li class="breadcrumb-item"><a href="<?php echo APPURL; ?>">Home</a></li>
                    <li class="breadcrumb-item"><a href="contact.php">Contact</a></li>
                </ol>
            </nav>
        </div>
    </div>


    <div class="container-xxl py-5">
        <div class="container">
        <div class="row g-5 align-items-center">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h5 class="section-title ff-secondary text-center text-primary fw-normal">Contact Us</h5>
                <h1 class="mb-5">Contact For Any Query</h1>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item rounded pt-3">
                    <div class="p-4" style="text-align: left">
                        <i class="fa fa-3x fa-map-marker-alt me-3 text-primary mb-4"></i>
                        <h5>Business Address</h5>
                        <p>Quezon Avenue, Lucban, Philippines, 4328</p>
                    </div>
                    <div class="p-4" style="text-align: left;">
                        <i class="fa fa-3x fa-phone-alt me-3 text-primary mb-4"></i>
                        <h5>Phone Number</h5>
                        <p>+639763042498</p>
                    </div>
                    <div class="p-4" style="text-align: left;">
                        <i class="fa fa-3x fa-envelope me-3 text-primary mb-4"></i>
                        <h5>Email Address</h5>
                        <p>rawrtearestaurant@gmail.com</p>
                    </div>
                </div>
            </div>
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
        </div>
    </div>
    </div>

<?php require 'includes/footer.php'; ?>