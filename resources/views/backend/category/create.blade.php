@extends('backend.layouts.master')
@section('title','Admin')
@section('backend.category.create')
    <style>
        th{
            text-align: center;
            color: #28a745;
        }
        button{
            margin: 5px;
            height: 100%;
            border-radius: 5px;
        }
    </style>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Category Create</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <form action="" method="post" enctype="multipart/form-data">
                    @csrf
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <tr>
                        <th>Category</th>
                        <td>
                            <input style="width: 90%" type="text" name="name" value="{{old('name')}}">
                            @error('name')
                                <p class="text text-danger">{{$message}}</p>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <th>Description</th>
                        <td>
                            <textarea style="width: 90%" type="text" name="description" id="" cols="30" rows="10"></textarea>
                            @error('description')
                            <p class="text text-danger">{{$message}}</p>
                            @enderror
                        </td>
                    <tr>
                        <th>Image</th>
                        <td><input type="file" name="file"></td>
                    </tr>
                    <tr>
                        <a href="{{route('categories.list')}}"><button style="background-color: red" type="button" class="text-white">Back</button></a>
                        <button class="text-dark" style="background-color: yellow" onclick="confirm('Are you sure ???')" type="reset">Reset</button>
                        <button class="text-white" style="background-color: mediumseagreen" type="submit">Add Category</button>
                    </tr>
                </table>
                </form>
            </div>
        </div>
    </div>
@endsection

{{--<form action="" method="post" enctype="multipart/form-data">--}}
{{--    @csrf--}}
{{--    <input type="text" name="name">--}}
{{--    <input type="text" name="description">--}}
{{--    <input type="file" name="file">--}}
{{--    <button type="submit">Add Category</button>--}}
{{--</form>--}}
