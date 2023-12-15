@extends('layouts.app')

@section('content')
    <!-- Hero Start -->
    <div class="hero-bg">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="{{asset('assets/img/ev6.jpg')}}" class="d-block w-100" alt="event-img">
                <div class="carousel-caption d-none d-md-block">
                  <h1>Althia's Event Services</h1>
                </div>
              </div>
              <div class="carousel-item">
                <img src="{{asset('assets/img/ev9.jpg')}}" class="d-block w-100" alt="event-img">
                <div class="carousel-caption d-none d-md-block">
                  <h1>Althia's Event Services</h1>
                </div>
              </div>
              <div class="carousel-item">
                <img src="{{asset('assets/img/ev7.jpg')}}" class="d-block w-100" alt="event-img">
                <div class="carousel-caption d-none d-md-block">
                  <h1>Althia's Event Services</h1>
                </div>
              </div>
              <div class="carousel-item">
                <img src="{{asset('assets/img/ev8.jpg')}}" class="d-block w-100" alt="event-img">
                <div class="carousel-caption d-none d-md-block">
                  <h1>Althia's Event Services</h1>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
    </div>




    <!-- Hero End -->


    <!-- About Satrt -->
    <div class="container-fluid py-6">
        <div class="container">
            <div class="row g-5 align-items-center">

                <div class="col-lg-7 wow bounceInUp" data-wow-delay="0.3s">

                    <h1 class="display-5 mb-4 pink">Althia’s Event Services</h1>
                    <p class="mb-4">Althia Event Services specializes in providing a comprehensive range of event solutions, with a particular focus on catering and a multitude of other services. Our catering division is renowned for crafting exquisite culinary experiences that leave a lasting impression on guests. From mouthwatering appetizers to delectable main courses and indulgent desserts, our expert chefs curate menus that cater to diverse tastes and dietary preferences. Moreover, Althia's commitment to excellence extends beyond catering, as we offer an array of event services, including event planning, decor, entertainment, and audiovisual support. With our meticulous attention to detail and a passion for exceeding expectations, we transform every event into a memorable and seamless affair.</p>

                    <a href="{{ url('/about')}}" class="btn bg-pink py-3 px-5 rounded-pill">About Us<i class="fas fa-arrow-right ps-2"></i></a>
                </div>
                <div class="col-lg-5 wow bounceInUp" data-wow-delay="0.1s">
                    <img src="{{asset('assets/img/atlhia1.jpg')}}" class="img-fluid rounded" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

     <!-- Fact Start-->
     <div class="container-fluid faqt py-6">

        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-lg-7">

                    @foreach ($all_counts as $countitem)

                        <div class="row g-4">
                            <div class="col-sm-4 wow bounceInUp" data-wow-delay="0.3s">
                                <div class="faqt-item bg-pink rounded p-4 text-center">
                                    <i class="fas fa-users fa-4x mb-4 "></i>
                                    <h1 class="display-4 fw-bold " data-toggle="counter-up">{{$countitem->happy_customer}}</h1>
                                    <p class=" text-uppercase fw-bold mb-0">Happy Customers</p>
                                </div>
                            </div>
                            <div class="col-sm-4 wow bounceInUp" data-wow-delay="0.5s">
                                <div class="faqt-item bg-pink rounded p-4 text-center">
                                    <i class="fas fa-users-cog fa-4x mb-4 "></i>
                                    <h1 class="display-4 fw-bold " data-toggle="counter-up">{{$countitem->videographer}}</h1>
                                    <p class=" text-uppercase fw-bold mb-0">Photo-Videographer</p>
                                </div>
                            </div>
                            <div class="col-sm-4 wow bounceInUp" data-wow-delay="0.7s">
                                <div class="faqt-item bg-pink rounded p-4 text-center">
                                    <i class="fas fa-check fa-4x mb-4 "></i>
                                    <h1 class="display-4 fw-bold " data-toggle="counter-up">{{$countitem->events_complete}}</h1>
                                    <p class=" text-uppercase fw-bold mb-0">Events Complete</p>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
                {{-- <div class="col-lg-5 wow bounceInUp" data-wow-delay="0.1s">
                    <div class="video">
                        <button type="button" class="btn btn-play" data-bs-toggle="modal" data-src="{{ asset('assets/video/althia-vid.mp4')}}" data-bs-target="#videoModal">
                            <span></span>
                        </button>
                    </div>
                </div> --}}
                <div class="col-lg-5 wow bounceInUp" data-wow-delay="0.1s">
                    <div class="video">
                        <button type="button" class="btn btn-play" data-bs-toggle="modal" data-src="" data-bs-target="#videoModal">
                            <span></span>
                        </button>
                    </div>
                </div>
                <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="videoModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-body">
                                <video controls width="100%" height="auto">
                                    <source id="videoSource" src="{{ asset('assets/video/althia-vid.mp4')}}" type="video/mp4">
                                </video>
                            </div>
                        </div>
                    </div>
                </div>


                {{-- <div class="col-lg-5 wow bounceInUp" data-wow-delay="0.1s">
                    <div class="video">
                        <video controls width="560" height="500">
                            <source src="{{ asset('assets/video/althia-vid.mp4')}}" type="video/mp4">
                        </video>
                    </div>
                </div> --}}

            </div>
        </div>
    </div>
    <!-- Modal Video -->
    <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Youtube Video</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- 16:9 aspect ratio -->
                    <div class="ratio ratio-16x9">
                        <iframe class="embed-responsive-item" src="" id="video" allowfullscreen allowscriptaccess="always"
                            allow="autoplay"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Fact End -->

    <!-- Service Start -->
    <div class="container-fluid service py-6">
        <div class="container">
            <div class="text-center wow bounceInUp" data-wow-delay="0.1s">
                <small class="d-inline-block fw-bold pink text-uppercase bg-light border border-primary rounded-pill px-4 py-1 mb-3">Our Services</small>
                <h1 class="display-5 mb-5 pink">What We Offer</h1>
            </div>
            <div class="row gx-4 justify-content-center">
                @foreach ($all_events as $eventitem)


                        <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.1s">
                            <div class="blog-item">
                                <div class="overflow-hidden rounded">
                                    <img src="{{asset('uploads/event/'.$eventitem->image)}}" class="img-fluid w-100" style="height: 450px; object-fit: cover;" alt="">
                                </div>
                                <div class="blog-content mx-4 d-flex rounded bg-light">
                                    <div class=" bg-pink rounded-start">
                                        <div class="h-100 p-3 d-flex flex-column justify-content-center text-center">
                                            <p class="fw-bold mb-0">Book</p>
                                            <p class="fw-bold mbs-0">Now</p>
                                        </div>
                                    </div>
                                    <a href="{{'/add-booking'}}" class="h5 lh-base pink my-auto h-100 p-3">{{ $eventitem->name}}</a>
                                </div>
                            </div>
                        </div>

                @endforeach
            </div>
        </div>
    </div>
    <!-- Service End -->


@endsection
