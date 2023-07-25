<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1001 Library</title>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    @vite('resources/sass/app.scss')
</head>

<body>
<main class="flex-shrink-0">
@include('layout.nav')



    <section class="bg-gray py-5">
        <div class="container px-5">
            <div class="row gx-5 justify-content-center">
                <div class="col-xxl-8">
                    <div class="text-center my-5">
                        <h2 class="display-5 fw-bolder"><span class="text-gradient d-inline">About Us</span></h2>
                        <h4>One Thousan One Library adalah sebuah website untuk memfasilitasi antara user dan pihak perpustakaan agar lebih mudah dalam melakukan proses peminjaman dan pengembalian buku.</h4>
                        <p class="lead fw-light mb-4">Our Goals</p>
                        <p class="text-muted">Website perpustakaan memungkinkan pengguna untuk melakukan peminjaman buku dan sumber daya lainnya secara online.</p>
                        <div class="d-flex justify-content-center fs-2 gap-4">
                            <a class="text-gradient" href="#!"><i class="bi bi-twitter"></i></a>
                            <a class="text-gradient" href="#!"><i class="bi bi-linkedin"></i></a>
                            <a class="text-gradient" href="#!"><i class="bi bi-github"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@include('layout.footer')


    @vite('resources/js/app.js')
</body>

</html>
