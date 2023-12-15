@extends('layouts.app')

@section('content')

<!-- About Satrt -->
<div class="container-fluid py-6">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-5 wow bounceInUp" data-wow-delay="0.1s">
                <img src="{{asset('assets/img/ev8.jpg')}}" class="img-fluid rounded" alt="">
            </div>
            <div class="col-lg-7 wow bounceInUp" data-wow-delay="0.3s">

                <h1 class="display-5 mb-4 pink">Trusted By 200 + satisfied clients</h1>
                <p class="mb-4">Althia Event Services is your one-stop solution for unforgettable events. Our renowned catering division crafts exquisite culinary experiences that cater to diverse tastes and dietary preferences. With fresh foods and on-time deliveries, we ensure your guests are delighted. But our commitment to excellence extends beyond catering, offering event planning, decor, and entertainment. Enjoy our 24/7 customer support and easy customization options, and check out our delicious deals for delicious meals. At Althia, we transform every event into a memorable and seamless experience.</p>
                <div class="row g-4 text-dark mb-5">
                    <div class="col-sm-6">
                        <i class="fas fa-share pink me-2"></i>Fresh and Fast food Delivery
                    </div>
                    <div class="col-sm-6">
                        <i class="fas fa-share pink me-2"></i>24/7 Customer Support
                    </div>
                    <div class="col-sm-6">
                        <i class="fas fa-share pink me-2"></i>Easy Customization Options
                    </div>
                    <div class="col-sm-6">
                        <i class="fas fa-share pink me-2"></i>Event Satisfaction
                    </div>
                </div>
                <a href="" class="btn bg-pink py-3 px-5 rounded-pill">About Us<i class="fas fa-arrow-right ps-2"></i></a>
            </div>
        </div>
    </div>
</div>
<!-- About End -->





@endsection
