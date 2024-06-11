<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Washwiz</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <header class="floating-header">
		<div class="header-container">
			<img src="assets/logo.png" class="logo">
			<h1>Washwiz</h1>
			<nav>
				<div class="nav-left">
					<ul>
						<li><a href="home.html">Home</a></li>
						<li><a href="history.html">History</a></li>
						<li><a href="order.html">Make Order</a></li>
						<li><a href="MyOrder.html">My Order</a></li>
					</ul>
				</div>
				<div class="nav-right">
					<div class="account-panel">
						<a href="#account">
							<img src="avatar.jpg" class="avatar">
							Account
						</a>
					</div>
				</div>
			</nav>
		</div>
    </header>
    <main>
        <div class="grid-container">
			<div class="grid-item">
				<img src="assets/rinse.png">
            	<a href="#section1" id="section1">Cuci Aja</a>
			</div>
			<div class="grid-item">
				<img src="assets/iron.png">
            	<a href="#section2" id="section2">Cuci Setrika</a>
			</div>
			<div class="grid-item">
				<img src="assets/tshirt.png">
            	<a href="#section3" id="section3">Dry Cleaning</a>
			</div>
			<div class="grid-item">
				<img src="assets/towels.png">
            	<a href="#section4" id="section4">Karpet</a>
			</div>
			<div class="grid-item">
				<img src="assets/bed.png">
            	<a href="#section5" id="section5">Kasur</a>
			</div>
			<div class="grid-item">
				<img src="assets/shoe.png">
            	<a href="#section6" id="section6">Sepatu & Tas</a>
			</div>
        </div>
    </main>
</body>
</html>