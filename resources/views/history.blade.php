<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order History</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .card {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border: none;
            border-radius: 10px;
        }
        .card-title {
            font-weight: bold;
            color: #007bff;
        }
        .card-text {
            margin-bottom: 0.5rem;
        }
        .btn-cancel {
            background-color: #dc3545;
            border: none;
            color: #fff;
            border-radius: 5px;
            padding: 5px 10px;
        }
        .btn-cancel:hover {
            background-color: #c82333;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1>History Pesanan</h1>
            <a href="/home" class="btn btn-secondary">Back</a>
        </div>
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        @foreach($orders as $order)
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">Orderan di #{{ $order->laundry->name ?? 'N/A' }}</h5>
                    <p class="card-text"><strong>Nama:</strong> {{ $order->name }}</p>
                    <p class="card-text"><strong>Alamat:</strong> {{ $order->address }}</p>
                    <p class="card-text"><strong>Jenis Layanan:</strong> {{ $order->service->name ?? 'N/A' }}</p>
                    <p class="card-text"><strong>Berat (kg):</strong> {{ $order->quantity }} kg</p>
                    <p class="card-text"><strong>Total Bayar:</strong> Rp {{ number_format($order->total_price) }}</p>
                    <p class="card-text"><strong>Tanggal Ambil/Antar:</strong> {{ $order->pickup_date }}</p>
                    <p class="card-text"><strong>Jam Ambil/Antar:</strong> {{ $order->pickup_time }}</p>
                    <p class="card-text"><strong>Metode Pembayaran:</strong> {{ ucfirst($order->payment_method) }}</p>
                    <p class="card-text"><strong>Detail Pembayaran:</strong> {{ $order->payment_details }}</p>
                    <p class="card-text"><strong>Status Pembayaran:</strong> {{ ucfirst($order->payment_status) }}</p>

                    @if($order->payment_status == 'pending')
                        <a href="{{ route('orders.show', $order->id) }}" class="btn btn-primary">Lihat Detail</a>
                        <form action="{{ route('orders.cancel', $order->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-cancel">Batal</button>
                        </form>
                    @endif
                </div>
            </div>
        @endforeach
    </div>
</body>
</html>
