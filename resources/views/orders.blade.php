<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Order</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
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
            <h1>Buat Orderan</h1>
            <a href="/home" class="btn btn-secondary">Back</a>
        </div>
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        <form action="{{ route('orders.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Nama</label>
                <input type="text" name="name" id="name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="address">Alamat</label>
                <input type="text" name="address" id="address" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="service_id">Jenis Layanan</label>
                <select name="service_id" id="service_id" class="form-control" required>
                    @foreach($services as $service)
                        <option value="{{ $service->id }}">{{ $service->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="laundry_name">Laundry</label>
                <input type="text" name="laundry_name" id="laundry_name" class="form-control" value="{{ $selected_laundry->name }}" readonly>
                <input type="hidden" name="laundry_id" value="{{ $selected_laundry->id }}"> <!-- Hidden input for laundry_id -->
            </div>
            <div class="form-group">
                <label for="quantity">Berat (kg)</label>
                <input type="number" name="quantity" id="quantity" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="pickup_date">Tanggal Ambil/Antar</label>
                <input type="date" name="pickup_date" id="pickup_date" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="pickup_time">Jam Ambil/Antar</label>
                <input type="time" name="pickup_time" id="pickup_time" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Kirim</button>
        </form>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#pickup_date').datepicker({
                format: 'yyyy-mm-dd',
                startDate: '0d',
                autoclose: true
            });

            $('#pickup_time').timepicker({
                timeFormat: 'HH:mm',
                interval: 30,
                minTime: '8:00am',
                maxTime: '16:00pm',
                defaultTime: '6:00am',
                startTime: '6:00am',
                dynamic: false,
                dropdown: true,
                scrollbar: true
            });
        });
    </script>
</body>
</html>
