<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order History</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Order History</h1>
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        @foreach($orders as $order)
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">Order #{{ $order->id }}</h5>
                    <p class="card-text"><strong>Name:</strong> {{ $order->name }}</p>
                    <p class="card-text"><strong>Address:</strong> {{ $order->address }}</p>
                    <p class="card-text"><strong>Service:</strong> {{ $order->service->name }}</p>
                    <p class="card-text"><strong>Quantity:</strong> {{ $order->quantity }} kg</p>
                    <p class="card-text"><strong>Total Price:</strong> Rp {{ number_format($order->total_price) }}</p>
                    <p class="card-text"><strong>Pickup/Delivery Date:</strong> {{ $order->pickup_date }}</p>
                    <p class="card-text"><strong>Pickup/Delivery Time:</strong> {{ $order->pickup_time }}</p>
                    <p class="card-text"><strong>Payment Method:</strong> {{ ucfirst($order->payment_method) }}</p>
                    <p class="card-text"><strong>Payment Details:</strong> {{ $order->payment_details }}</p>
                    <p class="card-text"><strong>Payment Status:</strong> {{ ucfirst($order->payment_status) }}</p>
                    <p class="card-text"><strong>Laundry Name:</strong> {{ $order->laundry->name ?? 'N/A' }}</p>
                </div>
            </div>
        @endforeach
    </div>
</body>
</html>
