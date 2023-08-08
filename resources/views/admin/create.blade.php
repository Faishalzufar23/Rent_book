<!DOCTYPE html>
<html>
<head>
    <title>Create New Book</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
    <h2>Create New Book</h2>
    <form action="{{ route('admin.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="judul_buku">Judul Buku:</label>
            <input type="text" class="form-control" id="judul_buku" name="judul_buku" required>
        </div>
        <div class="form-group">
            <label for="author_buku">Author Buku:</label>
            <input type="text" class="form-control" id="author_buku" name="author_buku" required>
        </div>
        <div class="form-group">
            <label for="harga_buku">Harga Buku:</label>
            <input type="number" class="form-control" id="harga_buku" name="harga_buku" required>
        </div>
        <button type="submit" class="btn btn-primary">Create Book</button>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
