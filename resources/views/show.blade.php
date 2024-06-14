<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Detail</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
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

                @if($order->payment_status == 'pending')
                    <form action="{{ route('orders.pay', $order->id) }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="payment_method">Payment Method</label>
                            <select class="form-control" id="payment_method" name="payment_method" required>
                                <option value="bank">Bank Transfer</option>
                                <option value="gopay">GoPay</option>
                                <option value="dana">Dana</option>
                            </select>
                        </div>
                        <div class="form-group" id="payment_details_group">
                            <label for="payment_details">Payment Details</label>
                            <input type="text" class="form-control" id="payment_details" name="payment_details" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Pay</button>
                    </form>
                @else
                    <p class="card-text"><strong>Payment Status:</strong> {{ ucfirst($order->payment_status) }}</p>
                @endif
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#payment_method').change(function() {
                var paymentMethod = $(this).val();
                var placeholderText = '';

                switch (paymentMethod) {
                    case 'bank':
                        placeholderText = 'Bank Account Number';
                        break;
                    case 'gopay':
                    case 'dana':
                        placeholderText = 'Phone Number';
                        break;
                }

                $('#payment_details').attr('placeholder', placeholderText);
            });

            // Trigger change event on page load to set the initial placeholder
            $('#payment_method').change();
        });
    </script>
</body>
</html>
