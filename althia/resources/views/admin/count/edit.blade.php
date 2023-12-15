@extends('layouts.master')

@section('title', 'Althia Event Services')

@section('content')


<div class="container-fluid px-4">
    <div class="card mt-4">
        <div class="card-header">
            <h4 class="mt-4">Edit Althia Event Counts</h4>
        </div>
        <div class="card-body">

            @if ($errors->any())
            <div class="alert alert-danger">
                @foreach ($error->all() as $error)
                    <div>{{$error}}</div>
                @endforeach
            </div>
            @endif


            <form action="{{url('admin/update-count/'.$count->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')


                <div class="mb-3">
                    <label for="">Happy Customer</label>
                    <input type="text" name="happy_customer" value="{{$count->happy_customer}}" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="">Photo-Videographer</label>
                    <input type="text" name="videographer" value="{{$count->videographer}}" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="">Events Complete</label>
                    <input type="text" name="events_complete" value="{{$count->events_complete}}" class="form-control">
                </div>

                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>

            </form>
        </div>
    </div>

</div>

@endsection
