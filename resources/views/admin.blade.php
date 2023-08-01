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
    <h4 class="text-light pl-3">Persewaan Buku</h4>
    <a href="#" class="mt-3">Dashboard</a>
    <a href="#">Produk</a>
    <a href="#">Pelanggan</a>
    <a href="#">Keamanan</a>
    <a href="#">Notifikasi</a>
    <a href="#" class="mt-5">Logout</a>
</div>

<div class="content">
    <h2>Ringkasan Dashboard</h2>
    <div class="row">
        <!-- Tambahkan ringkasan dashboard di sini -->
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Total Buku</h5>
                    <p class="card-text">100</p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Pelanggan Terdaftar</h5>
                    <p class="card-text">50</p>
                </div>
            </div>
        </div>
    </div>

    <h2 class="mt-4">Panel Pengelolaan Produk</h2>
    <!-- Tambahkan tabel untuk produk di sini -->
    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th>Nama Buku</th>
                <th>Pengarang</th>
                <th>Harga Sewa</th>
                <th>Stok</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <!-- Tambahkan data produk di sini -->
            <tr>
                <td>Buku 1</td>
                <td>Penulis 1</td>
                <td>10.000</td>
                <td>20</td>
                <td>
                    <a href="#" class="btn btn-primary btn-sm">Edit</a>
                    <a href="#" class="btn btn-danger btn-sm">Hapus</a>
                </td>
            </tr>
            <!-- Contoh data produk lainnya -->
        </tbody>
    </table>

    <h2 class="mt-4">Panel Pengelolaan Pelanggan</h2>
    <!-- Tambahkan tabel untuk pelanggan di sini -->
    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th>Nama Pelanggan</th>
                <th>Email</th>
                <th>Telepon</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <!-- Tambahkan data pelanggan di sini -->
            <tr>
                <td>Pelanggan 1</td>
                <td>pelanggan1@email.com</td>
                <td>08123456789</td>
                <td>
                    <a href="#" class="btn btn-primary btn-sm">Edit</a>
                    <a href="#" class="btn btn-danger btn-sm">Hapus</a>
                </td>
            </tr>
            <!-- Contoh data pelanggan lainnya -->
        </tbody>
    </table>

    <!-- Tambahkan panel keamanan dan sistem notifikasi di sini -->
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
