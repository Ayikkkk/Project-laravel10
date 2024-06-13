<!-- Start Generation Here -->
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Pemesanan Tiket Online</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    </head>

    <body>
        @component('components.navbar-component')
        @endcomponent
        <header class="hero">
            <h1>Selamat Datang di Pemesanan Tiket Online</h1>
            <p>Pesan tiket perjalanan Anda dengan mudah dan cepat</p>
            <a href="#explore" class="btn btn-primary btn-lg">Pesan Sekarang</a>
        </header>

        <section id="explore" class="content container">
            <h2 class="text-center">Pesan Tiket Anda</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card mb-4">
                        <img src="https://source.unsplash.com/400x300/?plane" class="card-img-top" alt="Pesawat">
                        <div class="card-body">
                            <h5 class="card-title">Pesawat</h5>
                            <p class="card-text">Pesan tiket pesawat ke berbagai destinasi dengan harga terbaik.</p>
                            <a href="#" class="btn btn-primary">Pesan Sekarang</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <img src="https://source.unsplash.com/400x300/?train" class="card-img-top" alt="Kereta">
                        <div class="card-body">
                            <h5 class="card-title">Kereta</h5>
                            <p class="card-text">Nikmati perjalanan nyaman dengan kereta api ke berbagai kota.</p>
                            <a href="#" class="btn btn-primary">Pesan Sekarang</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <img src="https://source.unsplash.com/400x300/?bus" class="card-img-top" alt="Bus">
                        <div class="card-body">
                            <h5 class="card-title">Bus</h5>
                            <p class="card-text">Pesan tiket bus untuk perjalanan darat yang ekonomis dan nyaman.</p>
                            <a href="#" class="btn btn-primary">Pesan Sekarang</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @component('components.footer-component')
        @endcomponent
    </body>

</html>
<!-- End Generation Here -->
