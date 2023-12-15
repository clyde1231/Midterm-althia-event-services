@extends('layouts.master')

@section('title', 'Althia Event Services')

@section('content')

<div class="container-fluid px-4">
    <div class="card mt-4">
        <div class="card-header">
            <h4>Booking Details</h4>
        </div>
        <div class="card-body">
            <div class="mb-3">
                <strong>Booking ID:</strong> {{ $booking->id }}
            </div>
            <div class="mb-3">
                <strong>Event:</strong> {{ $booking->event->name }}
            </div>
            <div class="mb-3">
                <strong>Full Name:</strong> {{ $booking->name }}
            </div>
            <div class="mb-3">
                <strong>Email:</strong> {{ $booking->email }}
            </div>
            <div class="mb-3">
                <strong>Contact Number:</strong> {{ $booking->number }}
            </div>
            <div class="mb-3">
                <strong>Status:</strong> {{ $booking->status }}
            </div>
            <div class="mb-3">
                <strong>Payment:</strong> {{ $booking->payment }}
            </div>
            <div class="mb-3">
                <strong>Message:</strong>
                <p>{{ $booking->message }}</p>
            </div>
            <a href="{{ url('admin/bookings') }}" class="btn btn-primary">Back to Bookings</a>
        </div>
    </div>
</div>

@endsection
