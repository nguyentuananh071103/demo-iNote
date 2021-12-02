@extends('backend.layouts.master')
@section('title','Note')
@section('backend.note.list')
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
                <a href="{{route("notes.create")}}"><button>CREATE NOTE</button></a>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
{{--                        <th>Category ID</th>--}}
                        <th>Description</th>
{{--                        <th>User ID</th>--}}
                        <th>Image</th>
                        <th colspan="3">Action</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
{{--                        <th>Category ID</th>--}}
                        <th>Description</th>
{{--                        <th>User ID</th>--}}
                        <th>Image</th>
                        <th colspan="3">Action</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    @foreach($notes as $key => $note)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$note["name"]}}</td>
                            <td>{{$note["description"]}}</td>
                            <td><img style="width: 300px; height: 150px" src="img/{{$note->image}}" alt=""></td>
                            <td><a class="btn btn-warning" href="{{route('notes.detail',$note->id)}}">Detail</a></td>
                            <td><a class="btn btn-success" href="{{route('notes.update',$note->id)}}">Update</a></td>
                            <td><a class="btn btn-danger" onclick="return confirm('Are you sure ??')" href="{{route('notes.delete',$note->id)}}"><i class="fas fa-trash-alt"></i></a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
@endsection








