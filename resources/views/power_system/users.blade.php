@extends('layouts.backend')
@section('title', 'Users')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row gy-4">
            <div class="col-md-12 col-lg-12">
                <div class="card">
                    <div class="d-flex align-items-top row">
                        <div class="col-md-12 col-lg-12 order-2 order-md-1" >
                            <div class="card-body align-items-top" >
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

                                        <tr>
                                            <td class="text-center">001</td>
                                            <td class="text-center">usera</td>
                                            <td class="text-center">User A</td>
                                            <td class="text-center">usera@email.com</td>
                                            <td class="text-center">1234567890</td>
                                            <td class="text-center quick-edit"><input type="text" class="quick-edit-input text-center flatpickr-date flatpickr-input active"><span class="quick-edit-text">14/03/2023</span></td>
                                            <td class="text-center quick-edit"><select class="quick-edit-input text-center"><option>admin</option><option>member</option><option>user</option></select><span class="quick-edit-text">admin</span></td>
                                            <td class="text-center quick-edit"><input type="text" class="quick-edit-input text-center flatpickr-date flatpickr-input active"><span class="quick-edit-text">14/03/2023</span></td>
                                            <td class="text-center quick-edit"><input type="text" class="quick-edit-input text-center flatpickr-date flatpickr-input active"><span class="quick-edit-text">14/03/2024</span></td>
                                            <td class="text-center quick-edit"><select class="quick-edit-input text-center"><option>Enabled</option><option>Disabled</option></select><span class="quick-edit-text">Enabled</span></td>
                                            <td class="text-center align-items-center">
                                                <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-save"></i></a>
                                                <a href="transactions.html" class="btn btn-info btn-sm" title="Click to view transaction record of the user"><i class="fa fa-search"></i></a>
                                            </td>
                                        </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!--/ Number List -->




        </div>
    </div>
@endsection

