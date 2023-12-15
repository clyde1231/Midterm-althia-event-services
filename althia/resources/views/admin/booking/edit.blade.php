@extends('layouts.master')

@section('title', 'Althia Event Services')

@section('content')

<div class="container-fluid px-4">

    <div class="card mt-4">



        <div class="card-header">
            <h4>Edit Booking Status and Payment
                <a href="{{url('admin/bookings')}}" class="btn btn-danger float-end">BACK</a>
            </h4>
        </div>
        <div class="card-body">
            @if ($errors->any())
            <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <div>{{$error}}</div>
                @endforeach
                </div>
            @endif
            <form action="{{ url('admin/update-booking/'.$book->id)}}" method="POST">
                @csrf
                @method('PUT')

                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="">Choose Event</label>
                            <select name="event_id" required class="form-control">
                                <option value="">--Select Event--</option>
                                @foreach ($event as $eventitem)
                                    <option value="{{$eventitem->id}}" {{ $eventitem->event_id == $eventitem->id ? 'selected':'' }} >{{$eventitem->name}}</option>
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
                    <input type="text" name="name" value="{{$book->name}}" class="form-control">
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="">Email Address</label>
                            <input type="text" name="email" value="{{$book->email}}" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="">Contact Number</label>
                            <input type="number" name="number" value="{{$book->number}}" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="">Status</label>
                            <select name="status" required class="form-control">
                                <option value="">--Select Status--</option>
                                <option value="Pending" @if($book->status == 'Pending') selected @endif>Pending</option>
                                <option value="Approved" @if($book->status == 'Approved') selected @endif>Approved</option>
                                <option value="Denied" @if($book->status == 'Denied') selected @endif>Denied</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="">Payment</label>
                            <select name="payment" required class="form-control">
                                <option value="">--Payment Status--</option>
                                <option value="Unpaid" @if($book->payment == 'Unpaid') selected @endif>Unpaid</option>
                                <option value="Paid" @if($book->payment == 'Paid') selected @endif>Paid</option>
                            </select>
                        </div>
                    </div>
                </div>



                <div class="mb-3">
                    <label for="">Message</label>
                    <textarea name="message" class="form-control" cols="30" rows="10">{{$book->message}}</textarea>
                </div>

                <div class="col-12 text-center">
                    <button type="submit" class="btn btn-primary px-5 py-3 rounded-pill">Update Book</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
