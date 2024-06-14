<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Detail</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Order Detail</h1>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Order #{{ $order->id }}</h5>
                <p class="card-text"><strong>Name:</strong> {{ $order->name }}</p>
                <p class="card-text"><strong>Address:</strong> {{ $order->address }}</p>
                <p class="card-text"><strong>Service:</strong> {{ $order->service->name }}</p>
                <p class="card-text"><strong>Quantity:</strong> {{ $order->quantity }} kg</p>
                <p class="card-text"><strong>Total Price:</strong> Rp {{ number_format($order->total_price) }}</p>
                <p class="card-text"><strong>Pickup/Delivery Date:</strong> {{ $order->pickup_date }}</p>
                <p class="card-text"><strong>Pickup/Delivery Time:</strong> {{ $order->pickup_time }}</p>
                <a href="{{ route('orders.create') }}" class="btn btn-primary">Create New Order</a>
            </div>
        </div>
    </div>
</body>
</html>
