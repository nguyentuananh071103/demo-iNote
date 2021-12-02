@extends('backend.layouts.master')
@section('title','Admin')
@section('backend.user.detail')
    <style>
        th{
            text-align: center;
            color: #28a745;
        }
        button{
            margin: 1px;
            height: 100%;
            width: 100px;
            border-radius: 5px;
        }
    </style>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">User Detail</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Image</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Image</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    <tr>
                        <a href="{{route('users.list')}}"><button style="background-color: red" type="button" class="text-white">Back</button></a>
                        <td>{{$user["name"]}}</td>
                        <td>{{$user["phone"]}}</td>
                        <td>{{$user["email"]}}</td>
                        <td><img style="width: 300px; height: 150px" src="{{asset('img/'.$user->image)}}" alt=""></td>
{{--                        <td><textarea name="" id="" cols="45" rows="10">{{$user->description}}</textarea></td>--}}
{{--                                                <td>{{$user["description"]}}</td>--}}
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection

