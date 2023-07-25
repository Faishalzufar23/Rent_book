<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <!-- Link ke Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Link ke CSS kustom -->
    <style>
        body {
            background-color: #f3e9d2; /* Warna kuning kecoklatan untuk latar belakang */
            font-family: Arial, sans-serif;
            padding-top: 60px;
            position: relative;
        }

        .about-container {
            position: relative;
            padding: 30px;
            border-radius: 20px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            background-color: #f9f1e5; /* Latar belakang kuning kecoklatan untuk container konten */
            z-index: 1;
        }

        .about-container:before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-image: url("background_pattern.jpg"); /* Gambar pattern sebagai latar belakang */
            background-size: 100%;
            opacity: 0.2;
            z-index: -1;
            border-radius: inherit;
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
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="about-container">
                    <h2 class="text-center mb-4">About Us</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed auctor odio a fermentum
                        ultrices. Proin quis nisi et est volutpat dictum. Integer convallis purus vel quam
                        facilisis, vel ultricies tortor congue. Maecenas bibendum, elit ac aliquam porttitor,
                        nisl metus viverra mi, at elementum lacus justo id mi. Donec non cursus nisi. Nam nec
                        nulla eu nisl aliquam pharetra. Maecenas eget nisi odio.</p>

                    <p>Aliquam scelerisque tincidunt libero, ut aliquam metus. Vestibulum ac enim nisi.
                        Mauris eu justo justo. Vivamus ullamcorper, elit a facilisis porttitor, tortor tortor
                        facilisis sapien, sit amet bibendum risus risus id lectus. Proin eu enim nunc. Nulla
                        tempus magna eget libero varius, id semper risus ultricies. Donec malesuada ipsum nec
                        leo dignissim, vitae tristique risus hendrerit.</p>

                    <p>Quisque sagittis ac lectus a gravida. In hac habitasse platea dictumst. Etiam eu quam
                        auctor, lobortis lorem at, facilisis metus. Pellentesque eleifend euismod nisi, vel
                        feugiat odio auctor vel. In lobortis, quam eu volutpat rhoncus, enim arcu congue ex, in
                        dictum odio lacus quis magna. Proin dapibus consequat augue. Nullam hendrerit tortor sit
                        amet nisi commodo, quis euismod quam tempus.</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
