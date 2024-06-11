<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Washwiz</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div class="backlogo"></div>
    <img src="{{ asset('image/logo.png') }}" class="backlogo">
    <div class="center">
        <h1>Sign-Up</h1>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @elseif (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
        <form method="post" action="/signup">
            @csrf
            <div class="txt_field">
                <input type="text" name="email" value="{{ old('email') }}" required>
                <span></span>
                <label>Masukan Alamat Email</label>
            </div>
            <div class="txt_field">
                <input type="text" name="phone" value="{{ old('phone') }}" required>
                <span></span>
                <label>Masukan Nomor Telephone</label>
            </div>
            <div class="txt_field">
                <input type="password" name="password" value="{{ old('password') }}" required>
                <span></span>
                <label>Masukan Password</label>
            </div>
            <input type="submit" value="Register">
            <div class="register">
                Sudah punya akun? <a href="/login">Yuk masuk!</a>
            </div>
        </form>
    </div>
</body>
</html>
