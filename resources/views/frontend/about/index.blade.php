@extends('frontend.main')
@section('content')
<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

        <div class="d-flex justify-content-between align-items-center">
            <h2>About Us</h2>
            <ol>
                <li><a href="index.html">Home</a></li>
                <li>About</li>
            </ol>
        </div>

    </div>
</section>
<!-- End Breadcrumbs -->

<section id="banner" class="d-flex justify-content-center" data-aos="zoom-in">
    <img src="{{asset('frontend/assets/img/logo.png')}}" class="img-fluid" alt="">
</section>

<section id="about">
    <div class="container">
        <div class="section-title" data-aos="fade-up">
            <h2>Apa itu Jokeen.id ?</h2>
        </div>
        <p align="center" class="mt-3" data-aos="fade-up">
            Memberikan jembatan antara client yang ingin mewujudkan suatu produk tapi tidak memiliki resource
            dengan mahasiswa yang memiliki kreativitas tapi belum memiliki media untuk mengembangkannya.
        </p>
    </div>
</section>

<section id="progam">
    <div class="section-title" data-aos="fade-up">
        <h2>Yang Kami Lakukan</h2>
    </div>

    <div class="ranah">
        <div class="container">
            <div class="row d-flex justify-content-center">
                @foreach ($about as $item)
                @if($item->category == "3D modeling")
                <div class="col-lg-6 order-1 order-lg-2 d-flex flex-column justify-content-center" data-aos="fade-left"
                    data-aos-delay="200">
                    <h1 data-aos="fade-up">{{$item->title}}</h1>
                    <p data-aos="fade-up" class="mt-3">
                        {{$item->description}}
                    </p>
                </div>

                <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 hero-img" data-aos="fade-up">
                    <img src="{{asset('frontend/assets/img/3d-model.png')}}" class="img-fluid" alt="">
                </div>
                @endif
                @endforeach

            </div>

            <div class="row d-flex justify-content-center hero-img mt-3">
                @foreach ($about as $item)
                @if($item->category == "Simulasi Sistem")
                <div class="col-lg-6 order-1 order-lg-2 " data-aos="fade-left" data-aos-delay="200">
                    <img src="{{asset('frontend/assets/img/sistem.png')}}" class="img-fluid" alt="">
                </div>

                <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center"
                    data-aos="fade-up">
                    <h1 data-aos="fade-up">{{$item->title}}</h1>
                    <p data-aos="fade-up" class="mt-3">
                        {{$item->description}}
                    </p>
                </div>
                @endif
                @endforeach
            </div>

            <div class="row d-flex justify-content-center">
                @foreach ($about as $item)
                @if($item->category == "Pembuatan Prototype")
                <div class="col-lg-6 order-1 order-lg-2 d-flex flex-column justify-content-center mt-3"
                    data-aos="fade-left" data-aos-delay="200">
                    <h1 data-aos="fade-up">{{$item->title}}</h1>
                    <p data-aos="fade-up" class="mt-3">
                        {{$item->description}}
                    </p>
                </div>

                <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 hero-img" data-aos="fade-up">
                    <img src="{{asset('frontend/assets/img/pembuatan.png')}}" class="img-fluid" alt="">
                </div>
                @endif
                @endforeach
            </div>

        </div>
    </div>
</section>

<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
    <div class="container">

        <div class="section-title" data-aos="fade-up">
            <h2>Contact</h2>
        </div>

        <div class="row">

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="contact-about">
                    <h3 style="color: #5d6349;">Jokeen.id</h3>
                    <p>Memberikan pelayanan untuk pembuatan prototype sekaligus produk jadi. </p>

                </div>
            </div>

            <div class="col-lg-3 col-md-6 mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="200">
                <div class="info">
                    <div>
                        <i class="ri-map-pin-line"></i>
                        <p>Keputih, Surabaya</p>
                    </div>

                    <div>
                        <i class="ri-mail-send-line"></i>
                        <p>Jokeen.pro@gmail.com</p>
                    </div>

                    <div>
                        <i class="ri-phone-line"></i>
                        <p>+628705668818</p>
                    </div>

                    <div>
                        <i class="bx bxl-instagram"></i>
                        <p>jokeen.id</p>
                    </div>

                </div>
            </div>

            <div class="col-lg-5 col-md-12" data-aos="fade-up" data-aos-delay="300">
                <img src="{{asset('frontend/assets/img/contact.png')}}" class="img-fluid" alt="">
            </div>

        </div>

    </div>
</section>
<!-- End Contact Section -->
@endsection
