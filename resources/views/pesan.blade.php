<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Detail Pemesanan</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    </head>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <body>
        @component('components.navbar-component')
        @endcomponent

        <div class="container mt-5">
            <h2 class="text-center">Detail Pemesanan Anda</h2>
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="card">
                        <div class="card-header">
                            <h4>Informasi Pemesanan</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('pesanan.store') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="nama">Nama Lengkap</label>
                                    <input type="text" class="form-control" id="nama" name="nama" required>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                </div>
                                <div class="form-group">
                                    <label for="telepon">Nomor Telepon</label>
                                    <input type="text" class="form-control" id="telepon" name="telepon" required>
                                </div>
                                <div class="form-group">
                                    <label for="jenis_tiket">Jenis Tiket</label>
                                    <select class="form-control" id="jenis_tiket" name="jenis_tiket" required>
                                        <option value="pesawat">Pesawat</option>
                                        <option value="kereta">Kereta</option>
                                        <option value="bus">Bus</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="jumlah_tiket">Jumlah Tiket</label>
                                    <input type="number" class="form-control" id="jumlah_tiket" name="jumlah_tiket"
                                        required>
                                </div>
                                <button type="submit" class="btn btn-primary">Konfirmasi Pemesanan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @component('components.footer-component')
        @endcomponent
    </body>

</html>
