@extends('layouts.app')

@section('title')
Lavieenbluu
@endsection

@section('content')
    <!-- start header -->
    <header class="text-center">
        <h1>
            Jelajahi Dunia Indah <br> Hanya dengan Satu Klik
        </h1>
        <p class="mt-3">
            Anda akan melihat momen indah <br> yang belum pernah Anda lihat sebelumnya
        </p>
        <a href="#popularContent" class="btn btn-started px-4 mt-4">Get Started</a>
    </header>
    <!-- end header -->

    <!-- contentt -->
    <main>
        <!-- stats -->
        <div class="container">
            <section class="section-stats row justify-content-center text-center" id="stats">
                <div class="col-md-2 col-3 stats-detail">
                    <h2>20K</h2>
                    <p>Members</p>
                </div>
                <div class="col-md-2 col-3 stats-detail">
                    <h2>12</h2>
                    <p>Countries</p>
                </div>
                <div class="col-md-2 col-3 stats-detail">
                    <h2>5K</h2>
                    <p>Hotel</p>
                </div>
                <div class="col-md-2 col-3 stats-detail">
                    <h2>72</h2>
                    <p>Partners</p>
                </div>
            </section>
        </div>
        <!-- end stats -->

        <!-- start wisata populer -->
        <section class="section-popular">
            <div class="container">
                <div class="row">
                    <div class="col text-center section-popular-heading"id="popular">
                        <h2>Wisata Populer</h2>
                        <p>Sesuatu yang belum pernah Anda coba <br> sebelumnya di dunia ini</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- end wisata populer -->

        <!-- start popular content -->
        <section class="section-popular-content" id="popularContent">
            <div class="container">
                <section class="section-travel row justify-content-center">
                    @foreach ($items as $item)
                        <div class="col-sm-6 col-md-4 col-lg-3">
                            <div class="card-travel text-center d-flex flex-column"
                                style="background-image: url('{{ $item->galleries->count() ? Storage::url($item->galleries->first()->image) : '' }}');">
                                <div class=" travel-country">{{ $item->location }}</div>
                                <div class="travel-location">{{ $item->title }}</div>
                                <div class="travel-button mt-auto">
                                    <a href="{{ route('detail', $item->slug) }}" class="btn btn-travel-details px-4 ">
                                        Pesan Sekarang</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </section>
            </div>
        </section>
        <!-- end popular content -->

        <!-- start testimonial heading -->
        <section class="section-testimonial-heading" id="testimonialHeading">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <h2>Testimoni</h2>
                        <p>Pengalaman dari beberapa pengguna</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- end testimonial heading -->

        <!-- start testimonial content -->
        <section class="section-testimonial-content" id="testimonialContent">
            <div class="container">
                <div class="section-testimonial-travel row justify-content-center">

                    <div class="col-sm-6 col-md-6 col-lg-3">
                        <div class="card card-testimonial text-center">
                            <div class="testimonial-content">
                                <img src="https://adensahwaludin.github.io/Logo%20Aden%20Sahwaludin.png" class="mb-4 rounded-circle" width="200px">
                                <h3 class="mb-4">Aden Sahwaludin</h3>
                                <p class="testimonial"> “ Wisata membuka cakrawala baru, membawa kita menjelajahi keindahan yang baru“</p>
                            </div>
                            <hr>
                            <p class="trip-to mt-2">
                                Trip to Tembi
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-3">
                        <div class="card card-testimonial text-center">
                            <div class="testimonial-content">
                                <img src="./frontend/images/testimonial-3.png" class="mb-4 rounded-circle" width="200px">
                                <h3 class="mb-4">Faisal A I</h3>
                                <p class="testimonial"> “ Perjalanan adalah cara terbaik untuk memahami dunia, mengenali budaya, dan menghargai keindahan alam “</p>
                            </div>
                            <hr>
                            <p class="trip-to mt-2">
                                Trip to Blue Lagoon
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-3">
                        <div class="card card-testimonial text-center">
                            <div class="testimonial-content">
                                <img src="./frontend/images/testimonial-2.png" class="mb-4 rounded-circle" width="200px">
                                <h3 class="mb-4">Fahri Anugrah</h3>
                                <p class="testimonial">“ Menjelajahi tempat baru memberikan perspektif berbeda, memperkaya jiwa dan menambah wawasan hidup kita “</p>
                            </div>
                            <hr>
                            <p class="trip-to mt-2">
                                Trip to Obelix
                            </p>
                        </div>
                    </div>
                    {{-- baru --}}
                     <div class="col-sm-6 col-md-6 col-lg-3">
                        <div class="card card-testimonial text-center">
                            <div class="testimonial-content">
                                <img src="./frontend/images/testimonial-1.png" class="mb-4 rounded-circle" width="200px">
                                <h3 class="mb-4">Jaka Anandaru</h3>
                                <p class="testimonial">“ Wisata adalah satu-satunya hal yang Kita bisa rasakan dan membuat Kita lebih tenang, indah dan berkesan“</p>
                            </div>
                            <hr>
                            <p class="trip-to mt-2">
                                Trip to Prambanan
                            </p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 text-center">
                        <a href="{{ route('register') }}" class="btn btn-get-started px-4 mt-4 mx-1">Get Started</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- end testimonial content -->
    </main>
    <!-- end contentt -->
@endsection
