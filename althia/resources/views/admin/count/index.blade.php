@extends('layouts.master')

@section('title', 'Althia Event Services')

@section('content')


<div class="container-fluid px-4">
    <h1 class="mt-4">Althia Event Counts</h1>

    @if (session('message'))
        <div class="alert alert-success">{{ session('message')}}</div>

    @endif

    <div class="container">
        @foreach ($count as $item)
            <div class="row mt-5">
                <div class="col-md-3 m-2 p-3" style="border: 1px solid #303030;">
                    <h3 >Happy Customer</h3>
                    <span style="font-size: 6rem; font-weight:bold;color: #BE1A3F;">{{$item->happy_customer}}</span>
                </div>
                <div class="col-md-3 m-2 p-3" style="border: 1px solid #303030;">
                    <h3 >Photo Videographer</h3>
                    <span style="font-size: 6rem; font-weight:bold;color: #BE1A3F;">{{$item->videographer}}</span>
                </div>
                <div class="col-md-3 m-2 p-3" style="border: 1px solid #303030;">
                    <h3 >Events Complete</h3>
                    <span style="font-size: 6rem; font-weight:bold;color: #BE1A3F;">{{$item->events_complete}}</span>
                </div>
            </div>
        @endforeach

        <div class="col-md-4 mt-5">
            <a href="{{ url('admin/edit-count/'.$item->id)}}" class="btn btn-success">Edit</a>
        </div>

    </div>

</div>

@endsection
