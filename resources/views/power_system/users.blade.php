@extends('layouts.backend')
@section('title', 'Users')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row gy-4">
            <div class="col-md-12 col-lg-12">
                <div class="card">
                    <div class="d-flex align-items-top row">
                        <div class="col-md-12 col-lg-12 order-2 order-md-1">
                            <div class="card-body align-items-top">
                                <h5 class="card-header">Users</h5>
                                <div class="table-responsive text-nowrap">
                                    <table class="table table-striped table-bordered table-hover" id="user-table">
                                        <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>User ID</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Mobile</th>
                                            <th>Register date</th>
                                            <th>User Type</th>
                                            <th>Start Date</th>
                                            <th>Expiry Date</th>
                                            <th>User Status</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($users as $user)
                                            <tr>
                                                <td class="text-center">{{$user->id}}</td>
                                                <td class="text-center">User-{{$user->id}}</td>
                                                <td class="text-center">{{$user->name}}</td>
                                                <td class="text-center">{{$user->email}}</td>
                                                <td class="text-center">{{$user->mobile}}</td>
                                                <td class="text-center">{{$user->created_at}}</td>
                                                <td class="text-center">{{\App\Models\User::ROLES[$user->role]}}</td>
                                                <td class="text-center"></td>
                                                <td class="text-center"></td>
                                                <td class="text-center quick-edit">
                                                    <select class="quick-edit-input text-center">
                                                        <option>Enabled</option>
                                                        <option>Disabled</option>
                                                    </select><span class="quick-edit-text">Enabled</span>
                                                </td>
                                                <td class="text-center align-items-center">
{{--                                                    <a href="#" class="btn btn-primary btn-sm"><i--}}
{{--                                                            class="fa fa-save"></i></a>--}}
                                                    <a href="{{route('transactions', ['user_id' => $user->id])}}" class="btn btn-info btn-sm"
                                                       title="Click to view transaction record of the user"><i
                                                            class="fa fa-search"></i></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

