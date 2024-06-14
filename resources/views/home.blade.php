<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Washwiz</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Washwiz</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="#">Why Washwiz</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pricing</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Integrations</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">FAQs</a>
                </li>
            </ul>
        </div>
    </nav>

    <section class="hero-section">
        <div class="hero-text">
            <h1>Washwiz Sipaling Solusi Cucianmu</h1>
            <p>Warning <span class="text-warning">&#9888;</span></p>
            <p>Disini dapat meringankan beban cucian mingguan maupun harianmu</p>
            <a href="#products" class="btn btn-primary btn-lg">Kepoin yuu!!</a>
        </div>
        <div class="hero-img">
            <img src="{{ asset('image/logo.png') }}" class="img-fluid" alt="Hero Image">
        </div>
    </section>

    <div class="container" id="products">
        <h1 class="my-4">Our Products</h1>
        <div class="row">
            @foreach ($laundries as $laundry)
                <div class="col-md-3 product-card">
                    <div class="card">
                        <img src="{{ asset($laundry->image) }}" class="card-img-top" alt="{{ $laundry->name }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $laundry->name }}</h5>
                            <a href="/pesanan" class="btn btn-primary">Pesan Sekarang</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-mrcI6iIzuI2Gpjt3E2VGC0LEiWlS6z4XD2B57OeoN7t/6LU5co1p5lFfuYd7bs3" crossorigin="anonymous"></script>
    <script>
        document.querySelector('.btn-primary').addEventListener('click', function (e) {
            e.preventDefault();
            document.querySelector('#products').scrollIntoView({ behavior: 'smooth' });
        });
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
