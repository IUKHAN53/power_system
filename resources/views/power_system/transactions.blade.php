@extends('layouts.backend')
@section('title', 'Transactions')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row gy-4">
            <div class="col-md-12 col-lg-12">
                <div class="card">
                    <div class="d-flex align-items-top row">
                        <div class="col-md-12 col-lg-12 order-2 order-md-1" >
                            <div class="card-body align-items-top" >
                                <h5 class="card-header">Transaction Record</h5>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover">
                                        <thead>
                                        <tr>
                                            <th>Buy Date</th>
                                            <th>Number</th>
                                            <th>Buy Price</th>
                                            <th>Buy Vol</th>
                                            <th>Sell Date</th>
                                            <th>Sell Price</th>
                                            <th>Sell Vol</th>
                                            <th>Different</th>
                                            <th>User</th>
                                            <th>Remarks</th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        <tr>
                                            <td class="text-center quick-edit"><input type="text" class="quick-edit-input text-center flatpickr-date flatpickr-input active"><span class="quick-edit-text">14/03/2023</span></td>
                                            <td class="text-center quick-edit"><input type="text" class="quick-edit-input text-center"><span class="quick-edit-text">0001</span></td>
                                            <td class="text-center quick-edit"><input type="text" class="quick-edit-input text-center"><span class="quick-edit-text">9.08</span></td>
                                            <td class="text-center quick-edit"><input type="text" class="quick-edit-input text-center"><span class="quick-edit-text">1000</span></td>
                                            <td class="text-center quick-edit"><input type="text" class="quick-edit-input text-center flatpickr-date flatpickr-input active"><span class="quick-edit-text">14/03/2023</span></td>
                                            <td class="text-center quick-edit"><input type="text" class="quick-edit-input text-center"><span class="quick-edit-text">9.08</span></td>
                                            <td class="text-center quick-edit"><input type="text" class="quick-edit-input text-center"><span class="quick-edit-text">1000</span></td>
                                            <td class="text-center quick-edit"><input type="text" class="quick-edit-input"><span class="quick-edit-text">0.00%</span></td>
                                            <td class="text-center quick-edit"><input type="text" class="quick-edit-input"><span class="quick-edit-text">Admin</span></td>
                                            <td class="quick-edit"><input type="text" class="quick-edit-input"><span class="quick-edit-text">Text</span></td>
                                        </tr>

                                        <tr>
                                            <td class="text-center quick-edit"><input type="text" class="quick-edit-input text-center"><span class="quick-edit-text">14/03/2023</span></td>
                                            <td class="text-center quick-edit"><input type="text" class="quick-edit-input text-center"><span class="quick-edit-text">0001</span></td>
                                            <td class="text-center quick-edit"><input type="text" class="quick-edit-input text-center"><span class="quick-edit-text">9.08</span></td>
                                            <td class="text-center quick-edit"><input type="text" class="quick-edit-input text-center"><span class="quick-edit-text">1000</span></td>
                                            <td class="text-center quick-edit"><input type="text" class="quick-edit-input text-center"><span class="quick-edit-text">14/03/2023</span></td>
                                            <td class="text-center quick-edit"><input type="text" class="quick-edit-input text-center"><span class="quick-edit-text">9.08</span></td>
                                            <td class="text-center quick-edit"><input type="text" class="quick-edit-input text-center"><span class="quick-edit-text">1000</span></td>
                                            <td class="text-center quick-edit"><input type="text" class="quick-edit-input text-center"><span class="quick-edit-text">0.00%</span></td>
                                            <td class="text-center quick-edit"><input type="text" class="quick-edit-input"><span class="quick-edit-text">Admin</span></td>
                                            <td class="quick-edit"><input type="text" class="quick-edit-input"><span class="quick-edit-text">Text</span></td>
                                        </tr>

                                        <tr>
                                            <td class="text-center quick-edit"><input type="text" class="quick-edit-input text-center"><span class="quick-edit-text">14/03/2023</span></td>
                                            <td class="text-center quick-edit"><input type="text" class="quick-edit-input text-center"><span class="quick-edit-text">0001</span></td>
                                            <td class="text-center quick-edit"><input type="text" class="quick-edit-input text-center"><span class="quick-edit-text">9.08</span></td>
                                            <td class="text-center quick-edit"><input type="text" class="quick-edit-input text-center"><span class="quick-edit-text">1000</span></td>
                                            <td class="text-center quick-edit"><input type="text" class="quick-edit-input text-center"><span class="quick-edit-text">14/03/2023</span></td>
                                            <td class="text-center quick-edit"><input type="text" class="quick-edit-input text-center"><span class="quick-edit-text">9.08</span></td>
                                            <td class="text-center quick-edit"><input type="text" class="quick-edit-input text-center"><span class="quick-edit-text">1000</span></td>
                                            <td class="text-center quick-edit"><input type="text" class="quick-edit-input text-center"><span class="quick-edit-text">0.00%</span></td>
                                            <td class="text-center quick-edit"><input type="text" class="quick-edit-input"><span class="quick-edit-text">Admin</span></td>
                                            <td class="quick-edit"><input type="text" class="quick-edit-input"><span class="quick-edit-text">Text</span></td>
                                        </tr>

                                        <tr>
                                            <td class="text-center quick-edit"><input type="text" class="quick-edit-input text-center"><span class="quick-edit-text">14/03/2023</span></td>
                                            <td class="text-center quick-edit"><input type="text" class="quick-edit-input text-center"><span class="quick-edit-text">0001</span></td>
                                            <td class="text-center quick-edit"><input type="text" class="quick-edit-input text-center"><span class="quick-edit-text">9.08</span></td>
                                            <td class="text-center quick-edit"><input type="text" class="quick-edit-input text-center"><span class="quick-edit-text">1000</span></td>
                                            <td class="text-center quick-edit"><input type="text" class="quick-edit-input text-center"><span class="quick-edit-text">14/03/2023</span></td>
                                            <td class="text-center quick-edit"><input type="text" class="quick-edit-input text-center"><span class="quick-edit-text">9.08</span></td>
                                            <td class="text-center quick-edit"><input type="text" class="quick-edit-input text-center"><span class="quick-edit-text">1000</span></td>
                                            <td class="text-center quick-edit"><input type="text" class="quick-edit-input text-center"><span class="quick-edit-text">0.00%</span></td>
                                            <td class="text-center quick-edit"><input type="text" class="quick-edit-input"><span class="quick-edit-text">Admin</span></td>
                                            <td class="quick-edit"><input type="text" class="quick-edit-input"><span class="quick-edit-text">Text</span></td>
                                        </tr>

                                        <tr>
                                            <td class="text-center quick-edit"><input type="text" class="quick-edit-input text-center"><span class="quick-edit-text">14/03/2023</span></td>
                                            <td class="text-center quick-edit"><input type="text" class="quick-edit-input text-center"><span class="quick-edit-text">0001</span></td>
                                            <td class="text-center quick-edit"><input type="text" class="quick-edit-input text-center"><span class="quick-edit-text">9.08</span></td>
                                            <td class="text-center quick-edit"><input type="text" class="quick-edit-input text-center"><span class="quick-edit-text">1000</span></td>
                                            <td class="text-center quick-edit"><input type="text" class="quick-edit-input text-center"><span class="quick-edit-text">14/03/2023</span></td>
                                            <td class="text-center quick-edit"><input type="text" class="quick-edit-input text-center"><span class="quick-edit-text">9.08</span></td>
                                            <td class="text-center quick-edit"><input type="text" class="quick-edit-input text-center"><span class="quick-edit-text">1000</span></td>
                                            <td class="text-center quick-edit"><input type="text" class="quick-edit-input text-center"><span class="quick-edit-text">0.00%</span></td>
                                            <td class="text-center quick-edit"><input type="text" class="quick-edit-input"><span class="quick-edit-text">Admin</span></td>
                                            <td class="quick-edit"><input type="text" class="quick-edit-input"><span class="quick-edit-text">Text</span></td>
                                        </tr>

                                        <tr>
                                            <td class="text-center quick-edit"><input type="text" class="quick-edit-input text-center"><span class="quick-edit-text">14/03/2023</span></td>
                                            <td class="text-center quick-edit"><input type="text" class="quick-edit-input text-center"><span class="quick-edit-text">0001</span></td>
                                            <td class="text-center quick-edit"><input type="text" class="quick-edit-input text-center"><span class="quick-edit-text">9.08</span></td>
                                            <td class="text-center quick-edit"><input type="text" class="quick-edit-input text-center"><span class="quick-edit-text">1000</span></td>
                                            <td class="text-center quick-edit"><input type="text" class="quick-edit-input text-center"><span class="quick-edit-text">14/03/2023</span></td>
                                            <td class="text-center quick-edit"><input type="text" class="quick-edit-input text-center"><span class="quick-edit-text">9.08</span></td>
                                            <td class="text-center quick-edit"><input type="text" class="quick-edit-input text-center"><span class="quick-edit-text">1000</span></td>
                                            <td class="text-center quick-edit"><input type="text" class="quick-edit-input text-center"><span class="quick-edit-text">0.00%</span></td>
                                            <td class="text-center quick-edit"><input type="text" class="quick-edit-input"><span class="quick-edit-text">Admin</span></td>
                                            <td class="quick-edit"><input type="text" class="quick-edit-input"><span class="quick-edit-text">Text</span></td>
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

