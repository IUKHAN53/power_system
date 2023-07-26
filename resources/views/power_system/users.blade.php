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
                                            <th class="text-center">ID</th>
                                            <th class="text-center">User ID</th>
                                            <th class="text-center">Name</th>
                                            <th class="text-center">Email</th>
                                            <th class="text-center">Mobile</th>
                                            <th class="text-center">Register date</th>
                                            <th class="text-center">User Type</th>
                                            <th class="text-center">Start Date</th>
                                            <th class="text-center">Expiry Date</th>
                                            <th class="text-center">User Status</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($users as $user)
                                            <form action="{{route('update-user', [$user->id])}}" method="post">
                                                @csrf
                                                <tr>
                                                    <td class="text-center">{{$user->id}}</td>
                                                    <td class="text-center">User-{{$user->id}}</td>
                                                    <td class="text-center">{{$user->name}}</td>
                                                    <td class="text-center">{{$user->email}}</td>
                                                    <td class="text-center quick-edit">
                                                        <input type="text" name="mobile" value="{{$user->mobile}}"
                                                               class="quick-edit-input text-center">
                                                        <span class="quick-edit-text">{{$user->mobile}}</span>
                                                    </td>
                                                    <td class="text-center quick-edit">
                                                        <input type="text" name="created_at"
                                                               value="{{$user->created_at->toDateString()}}"
                                                               class="quick-edit-input text-center flatpickr-date flatpickr-input active">
                                                        <span
                                                            class="quick-edit-text">{{$user->created_at->toDateString()}}</span>
                                                    </td>
                                                    <td class="text-center quick-edit">
                                                        <select class="quick-edit-input text-center form-control"
                                                                name="role">
                                                            @foreach(\App\Models\User::ROLES as $id=>$role)
                                                                <option
                                                                    value="{{$id}}" {{$user->role == $id ? 'selected':''}}>{{$role}}</option>
                                                            @endforeach
                                                        </select>
                                                        <span
                                                            class="quick-edit-text">{{\App\Models\User::ROLES[$user->role]}}</span>
                                                    </td>
                                                    <td class="text-center quick-edit">
                                                        <input type="text" name="start_date" value="{{$user->start_date}}"
                                                               class="quick-edit-input text-center flatpickr-date flatpickr-input active">
                                                        <span class="quick-edit-text">{{$user->start_date}}</span>
                                                    </td>
                                                    <td class="text-center quick-edit">
                                                        <input type="text" name="expiry_date" value="{{$user->expiry_date}}"
                                                               class="quick-edit-input text-center flatpickr-date flatpickr-input active">
                                                        <span class="quick-edit-text">{{$user->expiry_date}}</span>
                                                    </td>
                                                    <td class="text-center quick-edit">
                                                        <select class="quick-edit-input text-center  form-control"
                                                                name="status">
                                                            <option value="0" {{$user->status == 0 ? 'selected' : ''}}>Disabled</option>
                                                            <option value="1" {{$user->status == 1 ? 'selected' : ''}}>Enabled</option>
                                                        </select>
                                                        <span
                                                            class="quick-edit-text">{{$user->status ? 'Enabled' : 'Disabled'}}</span>
                                                    </td>
                                                    <td class="text-center align-items-center">
                                                        <button type="submit" class="btn btn-primary btn-sm">
                                                            <i class="fa fa-save"></i>
                                                        </button>
                                                        <a href="{{route('transactions', ['user_id' => $user->id])}}"
                                                           class="btn btn-info btn-sm"
                                                           title="Click to view transaction record of the user"><i
                                                                class="fa fa-search"></i></a>
                                                    </td>
                                                </tr>
                                            </form>
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

