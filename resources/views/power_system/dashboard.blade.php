@extends('layouts.backend')
@section('title', 'Dashboard')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row gy-4">
            <!-- Gamification Card -->
            <div class="col-md-12 col-lg-6">
                <div class="card">
                    <div class="d-flex align-items-end row">
                        <div class="col-md-12 order-2 order-md-1">
                            <div class="card-body">
                                <h5 class="card-header">Daily Checklist</h5>
                                <div class="table-responsive text-nowrap">
                                    <table class="table table-borderless">
                                        <tbody class="table-border-bottom-0">
                                        <tr>
                                            <td style="width:33.3%"><strong>Text A</strong></td>
                                            <td>
                                                <input type="number" class="form-control">
                                            </td>
                                            <td style="width:33.3%"></td>
                                        </tr>
                                        <tr>
                                            <td><strong>Text B</strong></td>
                                            <td>
                                                <input type="number" class="form-control">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><strong>Text C</strong></td>
                                            <td>
                                                <input type="number" class="form-control">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><strong>Text D</strong></td>
                                            <td>
                                                <input type="number" class="form-control">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td class="text-align-left">
                                                <button class="btn btn-info ">Result</button>
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
            <div class="col-md-12 col-lg-6">
                <div class="card">
                    <div class="d-flex align-items-end row">
                        <div class="col-md-12 order-2 order-md-1">
                            <div class="card-body">
                                <h5 class="card-header">Notes</h5>
                                <textarea rows="12" class="form-control mb-3"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ Gamification Card -->


            <div class="col-12 col-xl-12">
                <div class="card">
                    <div class="row">
                        <div class="col-md-12 col-12 order-2 order-md-0">
                            <div class="card-header">
                                <h5 class="mb-0">Recent RA</h5>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive text-nowrap">
                                    <table class="table tabl-striped table-hover table-sm" id="recent-ra">
                                        <thead>
                                        <tr>
                                            <th class="text-center">Favourite</th>
                                            <th>Number</th>
                                            <th>Last 5 S:D</th>
                                            <th>Last 10 S:D</th>
                                            <th>Last 5 U:F</th>
                                            <th>Last 10 U:F</th>
                                            <th>Next RA Date</th>
                                            <th>RA Date to Go</th>
                                            <th>RA Remarks</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td class="text-center">
                                                <div class="form-check-primary">
                                                    <input class="form-check-input" type="checkbox" value="" checked="">
                                                </div>
                                            </td>
                                            <td><a href="number-details.html">0001</a></td>
                                            <td class="text-center">
                                                <div class="progress rounded">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="70"
                                                         aria-valuemin="0" aria-valuemax="100" style="width:37%">
                                                        37%
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="progress rounded">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="70"
                                                         aria-valuemin="0" aria-valuemax="100" style="width:37%">
                                                        37%
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="progress rounded">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="70"
                                                         aria-valuemin="0" aria-valuemax="100" style="width:37%">
                                                        37%
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="progress rounded">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="70"
                                                         aria-valuemin="0" aria-valuemax="100" style="width:37%">
                                                        37%
                                                    </div>
                                                </div>
                                            </td>
                                            <td>24/03/2023</td>
                                            <td>Tomorrow</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                <div class="form-check-primary">
                                                    <input class="form-check-input" type="checkbox" value="">
                                                </div>
                                            </td>
                                            <td><a href="number-details.html">0002</a></td>
                                            <td class="text-center">
                                                <div class="progress rounded">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="70"
                                                         aria-valuemin="0" aria-valuemax="100" style="width:37%">
                                                        37%
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="progress rounded">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="70"
                                                         aria-valuemin="0" aria-valuemax="100" style="width:37%">
                                                        37%
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="progress rounded">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="70"
                                                         aria-valuemin="0" aria-valuemax="100" style="width:37%">
                                                        37%
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="progress rounded">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="70"
                                                         aria-valuemin="0" aria-valuemax="100" style="width:37%">
                                                        37%
                                                    </div>
                                                </div>
                                            </td>
                                            <td>25/03/2023</td>
                                            <td>2 days</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                <div class="form-check-primary">
                                                    <input class="form-check-input" type="checkbox" value="" checked="">
                                                </div>
                                            </td>
                                            <td><a href="number-details.html">0003</a></td>
                                            <td class="text-center">
                                                <div class="progress rounded">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="70"
                                                         aria-valuemin="0" aria-valuemax="100" style="width:37%">
                                                        37%
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="progress rounded">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="70"
                                                         aria-valuemin="0" aria-valuemax="100" style="width:37%">
                                                        37%
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="progress rounded">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="70"
                                                         aria-valuemin="0" aria-valuemax="100" style="width:37%">
                                                        37%
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="progress rounded">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="70"
                                                         aria-valuemin="0" aria-valuemax="100" style="width:37%">
                                                        37%
                                                    </div>
                                                </div>
                                            </td>
                                            <td>25/03/2023</td>
                                            <td>2 days</td>
                                            <td></td>
                                        </tr>
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

