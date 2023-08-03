<!DOCTYPE html>
<html>
<head>
    <title>RentBook</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .sidebar {
            height: 100%;
            width: 250px;
            position: fixed;
            top: 0;
            left: 0;
            background-color: #111;
            padding-top: 20px;
        }
        .sidebar a {
            padding: 8px 8px 8px 16px;
            text-decoration: none;
            font-size: 18px;
            color: #f1f1f1;
            display: block;
        }
        .sidebar a:hover {
            color: #fff;
            background-color: #575757;
        }
        .content {
            margin-left: 250px;
            padding: 20px;
        }
    </style>
</head>
<body>

<div class="sidebar">
    <h3 class="text-light pl-3">Persewaan Buku</h3>
    <a href="{{ route('redirects') }}" class="mt-3">Dashboard</a>
    <a href="{{ route('book') }}">Input Data Buku</a>
    <a href="{{ route('pelanggan') }}">Pelanggan</a>
    <a href="{{ route('bp') }}">Bukti Pembayaran</a>
    <a href="#">Notifikasi</a>
    <a href="{{ route('admin.logout') }}">Logout</a>
</div>

<div class="content">
    <h1 class="d-flex mt-2" style="margin-left: 60vh">Hi Admin 1001 Welcome!!</h1>
    <h3 class="mt-5">Ringkasan Dashboard</h3>
    <div class="row">
        <!-- Tambahkan ringkasan dashboard di sini -->
        <div class="col-md-6 mt-5">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Total Buku</h5>
                    <p class="card-text">{{ $totalBuku }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-6 mt-5">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Pelanggan Terdaftar</h5>
                    <p class="card-text">{{ $totalUsers }}</p>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
