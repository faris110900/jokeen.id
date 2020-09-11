@extends('frontend.main')
@section('content')
<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

        <div class="d-flex justify-content-between align-items-center">
            <h2>Portfolio</h2>
            <ol>
                <li><a href="index.html">Home</a></li>
                <li>Portfolio</li>
            </ol>
        </div>

    </div>
</section><!-- End Breadcrumbs -->


<!-- ======= Portfolio Section ======= -->
<section id="portfolio" class="portfolio">
    <div class="container">

        <div class="section-title" data-aos="fade-up">
            <h2>Portfolio</h2>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="200">
            <div class="col-lg-12 d-flex justify-content-center">
                <ul id="portfolio-flters">
                    <li data-filter="*" class="filter-active">All</li>
                    <li data-filter=".filter-3dModel">3D Model</li>
                    <li data-filter=".filter-protoype">Prototype</li>
                    <li data-filter=".filter-3dPrint">3d Print</li>
                </ul>
            </div>
        </div>


        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="400">

            @foreach ($portfolio as $item)


            <div class="col-lg-4 col-md-6 portfolio-item {{$item->filter}}">
                <div class="card">
                    <div class="portfolio-wrap">
                        <img src="{{asset('storage/images/portfolio/'.$item->image)}}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>{{$item->title}}</h4>
                            <p>{{$item->category}}</p>
                            <div class="portfolio-links">
                                <a href="{{asset('storage/images/portfolio/'.$item->image)}}"
                                    data-gall="portfolioGallery" class="venobox" title="App 1"><i
                                        class="bx bx-plus"></i></a>
                                <a href="{{route('frontend.portofolio.show',[$item->id])}}" title="More Details"><i
                                        class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body" align="center">
                        <h5 class="card-title" style="font-weight: bold;">{{$item->title}}</h5>
                        <p class="card-text">
                          {{$item->description}}
                        </p>
                        <a href="{{route('frontend.portofolio.show',[$item->id])}}" class="btn btn-show">View Detail</a>
                    </div>
                </div>
            </div>
            @endforeach


        </div>

    </div>
</section><!-- End Portfolio Section -->


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
</section><!-- End Contact Section -->
@endsection
