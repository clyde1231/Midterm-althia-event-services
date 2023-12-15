@extends('layouts.master')

@section('title', 'Althia Event Services')

@section('content')

<div class="container-fluid px-4">
    <div class="card mt-4">
        <div class="card-header">
            <h4>Inquiry Details</h4>
        </div>
        <div class="card-body">
            <div class="mb-3">
                <strong>Inquiry ID:</strong> {{ $inquiry->id }}
            </div>

            <div class="mb-3">
                <strong>Full Name:</strong> {{ $inquiry->name }}
            </div>
            <div class="mb-3">
                <strong>Email:</strong> {{ $inquiry->email }}
            </div>

            <div class="mb-3">
                <strong>Subject:</strong> {{ $inquiry->subject }}
            </div>

            <div class="mb-3">
                <strong>Message:</strong>
                <p>{{ $inquiry->message }}</p>
            </div>
            <a href="{{ url('admin/inquiry') }}" class="btn btn-primary">Back to inquiries</a>
        </div>
    </div>
</div>

@endsection
