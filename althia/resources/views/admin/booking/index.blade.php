@extends('layouts.master')

@section('title', 'Althia Event Services')

@section('content')

<div class="container-fluid px-4">

    <div class="card mt-4">
        <div class="card-header">
            <h4>View Bookings</h4>
        </div>
        <div class="card-body">
            @if (session('message'))
                <div class="alert alert-success">{{session('message')}}</div>
            @endif

            <table id="myDataTable" class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Event</th>
                        <th>Full Name</th>
                        <th>Email</th>
                        <th>Contact Number</th>
                        <th>Status</th>
                        <th>Payment</th>
                        <th>Action</th>
                    </tr>
                    <tbody>
                        @foreach ($books as $item)
                            <tr>
                                <td>{{ $item->id}}</td>
                                <td>{{ $item->event->name}}</td>
                                <td>{{ $item->name}}</td>
                                <td>{{ $item->email}}</td>
                                <td>{{ $item->number}}</td>
                                <td >{{ $item->status }}</td>
                                <td >{{ $item->payment }}</td>
                                <td class="">
                                    <a href="{{ route('bookings.show', $item->id) }}"><i class="fa fa-eye px-2" aria-hidden="true"></i></a>
                                    <a href="{{url('admin/booking/'.$item->id)}}"><i class="fa fa-pencil px-2" aria-hidden="true"></i></a>
                                    <a href="{{url('admin/delete-booking/'.$item->id)}}"><i class="fa fa-trash px-2" aria-hidden="true"></i></a>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </thead>
            </table>

        </div>
    </div>

</div>

{{-- @php
function getStatusColor($status) {
    switch ($status) {
        case 'Pending':
            return 'orange';
        case 'Approved':
            return 'green';
        case 'Denied':
            return 'red';
        default:
            return 'black'; // Default color
    }
}

function getPaymentColor($payment) {
    switch ($payment) {
        case 'Unpaid':
            return 'red';
        case 'Paid':
            return 'green';
        default:
            return 'black'; // Default color
    }
}
@endphp --}}

@endsection
