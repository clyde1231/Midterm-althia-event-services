@extends('layouts.master')

@section('title', 'Events')

@section('content')

<div class="container-fluid px-4">

    <div class="card mt-4">
        <div class="card-header">
            <h4 class="">Edit Event</h4>
        </div>
        <div class="card-body">

            @if ($errors->any())
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <div>{{$error}}</div>
                    @endforeach
                </div>
            @endif


            <form action="{{ url('admin/update-event/'.$event->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="">Event Name</label>
                    <input type="text" name="name" value="{{$event->name}}" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="">Slug</label>
                    <input type="text" name="slug" value="{{$event->slug}}" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="">Image</label>
                    <input type="file" name="image" class="form-control">
                </div>

                <h6>Status Mode</h6>
                <div class="row">
                    <div class="col-md-3 mb-3">
                        <label for="">Navbar Status</label>
                        <input type="checkbox" name="navbar_status" {{ $event->navbar_status == '1' ? 'checked':''}} />
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="">Status</label>
                        <input type="checkbox" name="status" {{ $event->status == '1' ? 'checked':''}}/>
                    </div>
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-primary">Update Event</button>
                    </div>
                </div>

            </form>

        </div>
    </div>
</div>

@endsection
