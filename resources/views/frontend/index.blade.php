@extends('frontend.main')
@section('herosection')
<section id="hero" class="d-flex align-items-center">

    <div class="container">
        {{-- <div class="row">
            <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
                <h1 data-aos="fade-up" style="color: #5d6349">Jokeen.id</h1>
                <h2 data-aos="fade-up" data-aos-delay="400">
                    Memberikan pelayanan untuk pembuatan prototype sekaligus produk jadi.
                </h2>
                <div data-aos="fade-up" data-aos-delay="800">
                    <a href="#contact" class="btn-get-started scrollto">Bicarakan Kebutuhanmu!</a>
                </div>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left" data-aos-delay="200">
                <img src="{{asset('frontend/assets/img/hero-2.png')}}" class="img-fluid animated" alt="">
    </div>
    </div> --}}

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner mt-3">
            <div class="carousel-item active">
                <img class="d-block w-100" src="https://images.unsplash.com/photo-1542744094-3a31f272c490?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="https://images.unsplash.com/photo-1542744095-0d53267d353e?ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="https://images.unsplash.com/photo-1542744094-3a31f272c490?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    </div>

</section>
@endsection
@section('content')
<!-- ======= About Us Section ======= -->
<section id="about" class="about">
    <div class="container">

        <div class="section-title" data-aos="fade-up">
            <h2>About Us</h2>
        </div>

        <div class="row content">
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="150">
                <p>
                    Kami bekerja dalam bidang sebagai berikut :
                </p>
                <ul>
                    <li><i class="ri-check-double-line"></i> Program eksternal</li>
                    <li><i class="ri-check-double-line"></i> 3D modeling</li>
                    <li><i class="ri-check-double-line"></i> Simulasi Sistem</li>
                    <li><i class="ri-check-double-line"></i> Pembuatan Prototype dan/atau barang jadi</li>
                </ul>
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-up" data-aos-delay="300">
                <p>
                    Memberikan jembatan antara client yang ingin mewujudkan suatu produk yang belum memiliki resource
                    dengan
                    mahasiswa yang memiliki kreativitas tapi belum memiliki media untuk mengembangkannya.
                </p>
                <!-- <a href="#" class="btn-learn-more">Learn More</a> -->
            </div>
        </div>

    </div>
</section><!-- End About Us Section -->

<!-- ======= Counts Section ======= -->
<section id="counts" class="counts">
    <div class="container">
        <div class="row">
            @foreach ($about as $item)
            @if ($item->category=="Ranah Jokeen.id")
            <div class="col-lg-6 order-1 order-lg-2 d-flex flex-column justify-content-center" data-aos="fade-left" data-aos-delay="200">
                <h1 data-aos="fade-up">{{$item->title}}</h1>
                <p data-aos="fade-up" class="mt-3">
                    {{$item->description}}
                </p>
            </div>

            <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 hero-img" data-aos="fade-up">
                <img src="{{asset('frontend/assets/img/robot.png')}}" class="img-fluid" alt="">
            </div>
            @endif
            @endforeach
        </div>

        <div class="row">
            @foreach ($about as $item)
            @if ($item->category=="Program Jokeen.id")
            <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left" data-aos-delay="200">
                <img src="{{asset('frontend/assets/img/img2.png')}}" class="img-fluid" alt="">
            </div>

            <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="fade-up">
                <h1 data-aos="fade-up">{{$item->title}}</h1>
                <p data-aos="fade-up" class="mt-3">
                    {{$item->description}}
                </p>
            </div>
            @endif
            @endforeach
        </div>
    </div>
</section>
<!-- End Counts Section -->

<!-- ======= Services Section ======= -->
<section id="services" class="services section-bg">
    <div class="container">

        <div class="section-title" data-aos="fade-up">
            <h2>Services</h2>
        </div>

        <div class="row">
            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                @foreach ($service as $item)
                <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon"><i class="bx bxl-dribbble"></i></div>
                    <h4 class="title"><a href="">{{$item->title}}</a></h4>
                    <p class="description">{{$item->description}}
                    </p>
                </div>
            </div>
            @if($loop->iteration % 1 == 0)
            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                @endif
                @endforeach
            </div>
        </div>

    </div>
</section>
<!-- End Services Section -->

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

                <div class="portfolio-wrap">
                    <img src="{{asset('storage/images/portfolio/'.$item->image)}}" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>{{$item->title}}</h4>
                        <p>{{$item->catgory}}</p>
                        <div class="portfolio-links">
                            <a href="{{asset('storage/images/portfolio/'.$item->image)}}" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="bx bx-plus"></i></a>
                            <a href="{{route("frontend.portofolio.show",[$item->id])}}" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            @endforeach



        </div>

    </div>
</section>
<!-- End Portfolio Section -->

<!-- ======= Team Section ======= -->
<section id="team" class="team section-bg">
    <div class="container">

        <div class="section-title" data-aos="fade-up">
            <h2>Team</h2>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                @foreach ($team as $item)


                <div class="member" data-aos="fade-up" data-aos-delay="100">
                    <div class="member-img">
                        <img src="{{asset('storage/images/team/'.$item->image)}}" class="img-fluid" alt="">
                        <div class="social">
                            <a href=""><i class="icofont-twitter"></i></a>
                            <a href=""><i class="icofont-facebook"></i></a>
                            <a href=""><i class="icofont-instagram"></i></a>
                            <a href=""><i class="icofont-linkedin"></i></a>
                        </div>
                    </div>
                    <div class="member-info">
                        <h4>{{$item->name}}</h4>
                        <span>{{$item->status}}</span>
                    </div>
                </div>
            </div>
            @if($loop->iteration % 1 == 0)
            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                @endif

                @endforeach
            </div>

        </div>

    </div>
</section>
<!-- End Team Section -->

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
