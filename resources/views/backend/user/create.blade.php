@extends('backend.layouts.master')
@section('title','Admin')
@section('backend.user.create')
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
            <h6 class="m-0 font-weight-bold text-primary">User Create</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <form action="" method="post" enctype="multipart/form-data">
                    @csrf
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <tr>
                            <th>Name</th>
                            <td><input style="width: 90%" type="text" name="name"></td>
                        </tr>
                        <tr>
                            <th>Phone</th>
                            <td><input style="width: 90%" type="number" name="phone"></td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td><input style="width: 90%" type="text" name="email"></td>
                        </tr>
                        <tr>
                            <th>Password</th>
                            <td><input style="width: 90%" type="number" name="password"></td>
                        </tr>
{{--                        <tr>--}}
{{--                            <th>Birthday</th>--}}
{{--                            <td><input style="width: 90%" type="date" name="birthday"></td>--}}
{{--                        </tr>--}}
{{--                        <tr>--}}
{{--                            <th>Sex</th>--}}
{{--                            <td>--}}
{{--                                <select name="sex" id="sex" style="width: 90%">--}}
{{--                                    <option value="Other">Male</option>--}}
{{--                                    <option value="Other">Female</option>--}}
{{--                                    <option value="Other">Other</option>--}}
{{--                                </select>--}}
{{--                            </td>--}}
{{--                        </tr>--}}
                        <tr>
                            <th>Image</th>
                            <td><input type="file" name="file"></td>
                        </tr>
                        <tr>
                            <a href="{{route('users.list')}}"><button style="background-color: red" type="button" class="text-white">Back</button></a>
                            <button class="text-dark" style="background-color: yellow" onclick="confirm('Are you sure ???')" type="reset">Reset</button>
                            <button class="text-white" style="background-color: mediumseagreen" type="submit">Add User</button>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>
@endsection


