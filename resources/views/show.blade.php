<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Detail</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            background: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        h1 {
            font-size: 2rem;
            font-weight: bold;
            color: #007bff;
        }
        .card {
            border: none;
            border-radius: 10px;
        }
        .card-title {
            font-weight: bold;
            color: #007bff;
        }
        .btn-primary {
            background-color: #007bff;
            border: none;
        }
        .btn-secondary {
            background-color: #6c757d;
            border: none;
        }
        .form-group label {
            font-weight: bold;
        }
        .form-control {
            border-radius: 5px;
        }
        .btn {
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1>Detail Orderan</h1>
            <a href="{{ route('orders.create') }}" class="btn btn-secondary">Kembali</a>
        </div>
        <div class="card mb-4">
            <div class="card-body">
                <h5 class="card-title">Order #{{ $order->id }}</h5>
                <p class="card-text"><strong>Nama:</strong> {{ $order->name }}</p>
                <p class="card-text"><strong>Alamat:</strong> {{ $order->address }}</p>
                <p class="card-text"><strong>Jenis Layanan:</strong> {{ $order->service->name ?? 'N/A' }}</p>
                <p class="card-text"><strong>Berat (kg):</strong> {{ $order->quantity }} kg</p>
                <p class="card-text"><strong>Total Bayar:</strong> Rp {{ number_format($order->total_price) }}</p>
                <p class="card-text"><strong>Tanggal Ambil/Antar:</strong> {{ $order->pickup_date }}</p>
                <p class="card-text"><strong>Jam Ambil/Antar:</strong> {{ $order->pickup_time }}</p>

                <p class="card-text"><strong>Laundry:</strong> {{ $order->laundry->name ?? 'N/A' }}</p>

                @if($order->payment_status == 'pending')
                    <form action="{{ route('orders.pay', $order->id) }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="payment_method">Metode Pembayaran</label>
                            <select class="form-control" id="payment_method" name="payment_method" required>
                                <option value="bank">Bank Transfer</option>
                                <option value="gopay">GoPay</option>
                                <option value="dana">Dana</option>
                            </select>
                        </div>
                        <div class="form-group" id="payment_details_group">
                            <label for="payment_details">Detail Pembayaran</label>
                            <input type="text" class="form-control" id="payment_details" name="payment_details" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Bayar Sekarang</button>
                    </form>
                @else
                    <p class="card-text"><strong>Status Pembayaran:</strong> {{ ucfirst($order->payment_status) }}</p>
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
