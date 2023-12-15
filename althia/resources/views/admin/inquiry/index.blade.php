@extends('layouts.master')

@section('title', 'Inquiries')

@section('content')

<div class="container-fluid px-4">

    <div class="card mt-4">
        <div class="card-header">
            <h4>View Inquiries</h4>
        </div>
        <div class="card-body">
            @if (session('message'))
                <div class="alert alert-success">{{session('message')}}</div>
            @endif

            <table id="myDataTable" class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Subject</th>
                        <th>View</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($inquiry as $inquiryitem)
                    <tr>
                        <td>{{$inquiryitem->id}}</td>
                        <td>{{$inquiryitem->name}}</td>
                        <td>{{$inquiryitem->email}}</td>
                        <td>{{$inquiryitem->subject}}</td>

                        <td>
                            <a href="{{url('admin/show-inquiry/'.$inquiryitem->id) }}" class="btn btn-success">View</a>
                        </td>
                        <td>
                            <a href="{{url('admin/delete-inquiry/'.$inquiryitem->id) }}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>


        </div>
    </div>




</div>

@endsection
