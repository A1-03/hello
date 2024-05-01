<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="assets/css/style.css"/>
</head>

<body>

    
<!--Navbar-->
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <img src="assets/img/logo.jpeg" alt="Logo" width="75" height="75" id="brandLogo">
        
        <!-- jQuery script to toggle brand logo visibility -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script>
            $(document).ready(function() {
                $('.navbar-toggler').click(function() {
                    $('#brandLogo').toggle();
                });
            });
        </script>

        <a class="navbar-brand" href="#" id="brand"></a>

        <!-- Profile Icon -->
        <div class="d-flex align-items-center">
            <i class="fas fa-user mr-2"></i> <!-- Added margin class to create space -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>

        <div class="collapse navbar-collapse nav-buttons" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="account.html">Account</a></li>
                        <li><a class="dropdown-item" href="Cart.html">cart</a></li>
                        <li><a class="dropdown-item" href="contact.html">Contact us</a></li>
                       
                    </ul>
                </li>
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>





    

    <!-- Subscription Cards Section -->
<section id="featured" class="container">
    <h2 class="text-center mb-4">Featured</h2>
    <div class="row row-cols-1 row-cols-md-3 g-4">

    <?php include('server/get_featured_products.php'); ?>

    <?php while($row= $featured_products->fetch_assoc()){  ?>
        <!-- Subscription Card 1 -->
        <div class="col">
            <div class="card">
                <img src="assets/img/<?php echo $row['product_image']; ?>" class="card-img-top" alt="Subscription 1">
                <div class="card-body">
                    <h5 class="card-title"><<?php echo $row['product_name']; ?></h5>
                    <p class="card-text">Rs <?php echo $row['product_price']; ?></p>
                    <a href="buy.html" class="btn btn-primary">Buy</a>
                </div>
            </div>
        </div>
       
       <?php } ?>
    
    </div>
</section>


 <!-- Footer -->
 <footer class="footer mt-auto py-5 bg-light">
    <div class="container">
        <div class="row">
            <!-- Navigation Links -->
            <div class="col-lg-3 col-md-6 mb-4">
                <h5 class="mb-3">Quick Links</h5>
                <ul class="list-unstyled">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="contact.html">Contact Us</a></li>
                </ul>
            </div>

            <!-- Contact Information -->
            <div class="col-lg-3 col-md-6 mb-4">
                <h5 class="mb-3">Contact Us</h5>
                <p>Dhangadhi<br>City, Province 7<br>Email: Sandeshchy04@gmail.com<br>Phone: +977 9806492602</p>
            </div>

            <!-- Follow Us -->
            <div class="col-lg-3 col-md-6 mb-4">
                <h5 class="mb-3">Follow Us</h5>
                <ul class="list-unstyled">
                    <li><a href="#">Facebook</a></li>
                    <li><a href="#">Twitter</a></li>
                    <li><a href="#">Instagram</a></li>
                </ul>
            </div>

            <!-- Legal Information -->
            <div class="col-lg-3 col-md-6 mb-4">
                <h5 class="mb-3">Legal</h5>
                <ul class="list-unstyled">
                    <li><a href="#">Terms & Conditions</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                </ul>
            </div>
        </div>

        <!-- Copyright -->
        <div class="row">
            <div class="col-12 text-center">
                <p class="text-muted">&copy; 2024 Your Company. All rights reserved.</p>
            </div>
        </div>
    </div>
</footer>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
