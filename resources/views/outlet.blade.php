<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Grid</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .product-card {
            margin-bottom: 20px;
        }
        .product-card img {
            max-width: 100%;
            height: auto;
        }
        .product-card .card-body {
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="my-4">Our Product</h1>
        <div class="row">
            <div class="col-md-3 product-card">
                <div class="card">
                    <img src="image1.jpg" class="card-img-top" alt="Nike Court Vision">
                    <div class="card-body">
                        <h5 class="card-title">Nike Court Vision</h5>
                        <p class="card-text">352$</p>
                        <a href="#" class="btn btn-primary">Add to Cart</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 product-card">
                <div class="card">
                    <img src="image2.jpg" class="card-img-top" alt="Nike Essential 2">
                    <div class="card-body">
                        <h5 class="card-title">Nike Essential 2</h5>
                        <p class="card-text">349$</p>
                        <a href="#" class="btn btn-primary">Add to Cart</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 product-card">
                <div class="card">
                    <img src="image3.jpg" class="card-img-top" alt="Nike Downshifter">
                    <div class="card-body">
                        <h5 class="card-title">Nike Downshifter</h5>
                        <p class="card-text">252$</p>
                        <a href="#" class="btn btn-primary">Add to Cart</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 product-card">
                <div class="card">
                    <img src="image4.jpg" class="card-img-top" alt="Nike Air Force 1 '07">
                    <div class="card-body">
                        <h5 class="card-title">Nike Air Force 1 '07</h5>
                        <p class="card-text">145$</p>
                        <a href="#" class="btn btn-primary">Add to Cart</a>
                    </div>
                </div>
            </div>
            <!-- Add more products in the same pattern -->
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
