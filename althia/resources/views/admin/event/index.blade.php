@extends('layouts.master')

@section('title', 'Events')

@section('content')

<div class="container-fluid px-4">

    <div class="card mt-4">
        <div class="card-header">
            <h4>View Events <a href="{{url('admin/add-event')}}" class="btn btn-primary btn-sm float-end">Add Event</a> </h4>
        </div>
        <div class="card-body">
            @if (session('message'))
                <div class="alert alert-success">{{session('message')}}</div>
            @endif

            <table id="myDataTable" class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Event Name</th>
                        <th>Event Image</th>
                        <th>Status</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($event as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->name}}</td>
                        <td>
                            <img src="{{asset('uploads/event/'.$item->image)}}" width="50px" height="50px" alt="img">
                        </td>
                        <td>{{$item->status == '1' ? 'Normal' : 'Sale' }}</td>
                        <td>
                            <a href="{{url('admin/edit-event/'.$item->id) }}" class="btn btn-success">Edit</a>
                        </td>
                        <td>
                            <a href="{{url('admin/delete-event/'.$item->id) }}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>


        </div>
    </div>




</div>

@endsection
