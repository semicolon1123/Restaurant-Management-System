<?php require '../config/config.php'; ?>
<?php require '../libs/App.php'; ?>
<?php require '../includes/header.php'; ?>
<?php 
     if(!isset($_SERVER['HTTP_REFERER'])){
        echo "<script> window.location.href='".APPURL."' </script>";
        exit;
    }
?>

    <div class="container-xxl py-5 bg-dark hero-header mb-5">
        <div class="container text-center my-5 pt-5 pb-4">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Pay with PayPal</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center text-uppercase">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pay</a></li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="container" style="margin-left: 250px" >  
        <script src="https://www.paypal.com/sdk/js?client-id=AV4JU_903HfcvuXfDYNiXs0pbmRYpfjnsQlkXEHceWtkc5Zylj43DYg8nvlA3uXT9bfwB3_24Zv3GBMo&currency=USD"></script>
        <div id="paypal-button-container"></div>
        <script>
            paypal.Buttons({
            createOrder: (data, actions) => {
                return actions.order.create({
                purchase_units: [{
                    amount: {
                    value: <?php echo $_SESSION['total_price']; ?> 
                    }
                }]
                });
            },

            onApprove: (data, actions) => {
                return actions.order.capture().then(function(orderData) {
              
                 window.location.href='delete-cart.php';
                });
            }
            }).render('#paypal-button-container');
        </script>
    </div>

<?php require '../includes/footer.php'; ?>