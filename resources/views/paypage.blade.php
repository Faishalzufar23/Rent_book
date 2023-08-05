<!DOCTYPE html>
<html>
<head>
    <title>Form Pembayaran</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg py-3" style="background-color: #FFC26F ">
        <div class="container px-5" >
            <a class="navbar-brand" href="dashboard"><span class="fw-bolder">Kembali</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 small fw-bolder" style="color:#884A39">
                    <li class="nav-item"><a class="nav-link" href=""></a></li>
                </ul>
            </div>
        </div>
    </nav>

<div class="container mt-5">
    <h2>Form Pembayaran</h2>
    <form action="#" method="post">
        <div class="form-group">
            <label for="nama">Nama Lengkap</label>
            <input type="text" class="form-control" id="nama" name="nama" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="alamat">Alamat</label>
            <textarea class="form-control" id="alamat" name="alamat" rows="3" required></textarea>
        </div>
        <div class="form-group">
            <label for="nomor_kartu">Nomor Kartu Kredit</label>
            <input type="text" class="form-control" id="nomor_kartu" name="nomor_kartu" required>
        </div>
        <div class="form-group">
            <label for="tanggal_kadaluarsa">Tanggal Kadaluarsa Kartu</label>
            <input type="text" class="form-control" id="tanggal_kadaluarsa" name="tanggal_kadaluarsa" placeholder="MM/YY" required>
        </div>
        <div class="form-group">
            <label for="kode_cvv">Kode CVV</label>
            <input type="text" class="form-control" id="kode_cvv" name="kode_cvv" required>
        </div>
        <div class="form-group">
            <label for="jumlah_pembayaran">Jumlah Pembayaran</label>
            <input type="number" class="form-control" id="jumlah_pembayaran" name="jumlah_pembayaran" required>
        </div>
        <button type="submit" class="btn btn-primary">Bayar</button>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
