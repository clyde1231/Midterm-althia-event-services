@extends('layouts.app')

@section('content')


<!-- Book Us Start -->
<div id="book" class="container-fluid contact py-2 wow bounceInUp" data-wow-delay="0.1s">
    <div class="container">
        @if ($errors->any())
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <div>{{$error}}</div>
                    @endforeach
                </div>
        @endif

        @if (session('message'))
            <div class="alert alert-success">{{session('message')}}</div>
        @endif

        <div class="row g-0">
            <div class="col-1">
                <img src="{{asset('assets/img/footer-bg.jpg')}}" class="img-fluid h-100 w-100 rounded-start" style="object-fit: cover; opacity: 0.7;" alt="">
            </div>
            <div class="col-10">
                <div class="border-bottom border-top border-primary bg-light py-5 px-4">
                    <div class="text-center">
                        <small class="d-inline-block fw-bold pink text-uppercase bg-light border border-primary rounded-pill px-4 py-1 mb-3">Book Us</small>
                        <h1 class="display-5 mb-5 pink">Where you want Our Services</h1>
                    </div>

                    <form action="{{ url('add-booking')}}" method="POST">
                        @csrf

                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="">Choose Event</label>
                                    <select name="event_id" class="form-control">
                                        @foreach ($event as $eventitem)
                                            <option value="{{$eventitem->id}}">{{$eventitem->name}}</option>
                                        @endforeach

                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="">Select Date</label>
                                    <input type="date" name="date_picker" class="form-control border-primary p-2" placeholder="Select Date">
                                </div>
                            </div>
                        </div>



                        <div class="mb-3">
                            <label for="">Full Name</label>
                            <input type="text" name="name" class="form-control">
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="">Email Address</label>
                                    <input type="text" name="email" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="">Contact Number</label>
                                    <input type="number" name="number" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="">Message</label>
                            <textarea name="message" class="form-control" cols="30" rows="10"></textarea>
                        </div>

                        <div class="col-12 text-center">
                            <button type="submit" class="btn bg-pink px-5 py-3 rounded-pill">Submit Now</button>
                        </div>
                    </form>


                </div>
            </div>
            <div class="col-1">
                <img src="{{asset('assets/img/footer-bg.jpg')}}" class="img-fluid h-100 w-100 rounded-end" style="object-fit: cover; opacity: 0.7;" alt="">
            </div>
        </div>
    </div>
</div>
<!-- Book Us End -->


@endsection
