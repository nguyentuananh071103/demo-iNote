@extends('backend.layouts.master')
@section('title','Admin')
@section('backend.category.list')
    <style>
        th{
            text-align: center;
            color: #28a745;
        }
        button{
            margin: 10px;
            border-radius: 5px;
            background-color: #28a745;
        }
    </style>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Category List</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <a href="{{route("categories.create")}}"><button>ADD CATEGORY</button></a>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Category</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th colspan="3">Action</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Category</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th colspan="3">Action</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    @foreach($categories as $key => $category)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td><a href="{{route('categories.detail',$category->id)}}">{{$category["name"]}}</a></td>
                            <td>{{$category["description"]}}</td>
                            <td><img style="width: 300px; height: 150px" src="img/{{$category->image}}" alt=""></td>
{{--                            <td><a class="btn btn-warning" href="{{route('categories.detail',$category->id)}}">Detail</a></td>--}}
                            <td><a class="btn btn-success" href="{{route('categories.update',$category->id)}}"><i class="fas fa-edit"></i></a></td>
                            <td><a class="btn btn-danger" onclick="return confirm('Are you sure ??')" href="{{route('categories.delete',$category->id)}}"><i class="fas fa-trash-alt"></i></a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection



{{--    <a href="{{route("categories.create")}}"><button>CREATE CATEGORY</button></a>--}}
{{--    <table border="1px">--}}
{{--        <thead>--}}
{{--        <tr>--}}
{{--            <th>ID</th>--}}
{{--            <th>Name</th>--}}
{{--            <th>Description</th>--}}
{{--            <th>Image</th>--}}
{{--            <th colspan="3">Action</th>--}}
{{--        </tr>--}}
{{--        </thead>--}}
{{--        <tbody>--}}
{{--        @foreach($categories as $key => $category)--}}
{{--            <tr>--}}
{{--                <td>{{$key+1}}</td>--}}
{{--                <td>{{$category["name"]}}</td>--}}
{{--                <td>{{$category["description"]}}</td>--}}
{{--                <td><img style="width: 300px; height: 150px" src="img/{{$category->image}}" alt=""></td>--}}
{{--                <td><a href="{{route('categories.detail',$category->id)}}">Detail</a></td>--}}
{{--                <td><a href="{{route('categories.update',$category->id)}}">Update</a></td>--}}
{{--                <td><a href="{{route('categories.delete',$category->id)}}">Delete</a></td>--}}
{{--            </tr>--}}
{{--        @endforeach--}}
{{--        </tbody>--}}
{{--    </table>--}}






