<!DOCTYPE html>
<html>
<head>
    <title>Delete Book</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
    <h2>Delete Book</h2>
    <p>Are you sure you want to delete this book?</p>
    @foreach ($books as $book)
    <form action="{{ route('admin.delete', ['book' => $book->id]) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Yes, Delete</button>
        <a href="{{ route('redirects') }}" class="btn btn-secondary">Cancel</a>
    </form>
    @endforeach
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
