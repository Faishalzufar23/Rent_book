<!DOCTYPE html>
<html lang="en">
<head>
    <x-app-layout>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalog</title>
    <!-- Link ke Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Link ke CSS kustom -->
    <style>
        body {
            background-color: #f3e9d2; /* Warna kuning kecoklatan untuk latar belakang */
            font-family: Arial, sans-serif;
        }

        .catalog-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 40px;
        }

        .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        }

        .btn-primary {
            background-color: #c79a3b; /* Warna kuning kecoklatan untuk tombol */
            border-color: #c79a3b;
        }

        .btn-primary:hover {
            background-color: #ae832f; /* Warna kuning kecoklatan lebih gelap untuk tombol saat dihover */
            border-color: #ae832f;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-10">
                <div class="catalog-container">
                    <h2 class="text-center mb-4">Catalog Book</h2>

                    <div class="row">                        @foreach ($bukus as $buku)

                        <div class="col-md-4 mb-4">

                            <div class="card">

                                <img src="{{ Vite::asset('resources/images/logorb2.png') }}"
                                class="card-img-top" alt="Book 1">

                                <div class="card-body">
                                    <h3 class="card-title">{{$buku->judul_buku}}</h3>
                                    <h5 class="card-tittle">{{$buku->desc_buku}}</h5>
                                    <p class="card-text">{{$buku->author_buku}}</p>
                                    <a href="#" class="btn btn-primary">Rent Now</a>



                                </div>
                            </div>
                        </div>
                        @endforeach
                        <!-- Add more book cards here -->
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
</x-app-layout>

