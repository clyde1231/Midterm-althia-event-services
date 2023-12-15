@extends('layouts.app')

@section('content')


 <!-- Contact Start -->
 <div class="container-fluid contact py-2 wow bounceInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="p-5 bg-light rounded contact-form">
            <div class="row g-4">
                <div class="col-12">
                    <small class="d-inline-block fw-bold pink text-uppercase bg-light border border-primary rounded-pill px-4 py-1 mb-3">Get in touch</small>
                    <h1 class="display-5 mb-0 pink">Contact Us For Any Queries!</h1>
                </div>
                <div class="col-md-6 col-lg-7">

                    @if (session('message'))
                        <div class="alert alert-success">{{session('message')}}</div>
                    @endif
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            @foreach ($errors->all() as $error)
                                <div>{{$error}}</div>
                            @endforeach
                        </div>
                    @endif

                    <form action="{{url('/add-inquiry')}}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <input type="text" name="name" class="w-100 form-control p-3 mb-4 border-primary bg-light" placeholder="Your Name">
                        <input type="email" name="email" class="w-100 form-control p-3 mb-4 border-primary bg-light" placeholder="Enter Your Email">
                        <input type="subject" name="subject" class="w-100 form-control p-3 mb-4 border-primary bg-light" placeholder="Subject">
                        <textarea name="message" class="w-100  form-control mb-4 p-3 pink bg-light" rows="10" cols="10" placeholder="Your Message"></textarea>
                        <button class="w-100 btn bg-pink form-control p-3 pink rounded-pill" type="submit">Submit Now</button>
                    </form>
                </div>
                <div class="col-md-6 col-lg-5">
                    <div>
                        <div class="d-inline-flex w-100 border p-4 rounded mb-4">
                            <i class="fas fa-map-marker-alt fa-2x pink me-4"></i>
                            <div class="">
                                <h4>Address</h4>
                                <p>Poblacion, Zone 2, San Quintin, Pangasinan</p>
                            </div>
                        </div>
                        <div class="d-inline-flex w-100 border p-4 rounded mb-4">
                            <i class="fas fa-envelope fa-2x pink me-4"></i>
                            <div class="">
                                <h4>Mail Us</h4>
                                <p class="mb-2">AlthiasEvent@gmail.com</p>

                            </div>
                        </div>
                        <div class="d-inline-flex w-100 border p-4 rounded">
                            <i class="fa fa-phone-alt fa-2x pink me-4"></i>
                            <div class="">
                                <h4>Telephone</h4>
                                <p class="mb-2">0985 185 3226</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->



@endsection
