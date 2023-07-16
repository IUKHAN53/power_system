@extends('layouts.backend')
@section('title', 'Numbers List')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row gy-4">

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
                                            <td ><a href="number-details.html">0001</a></td>
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
                                                    <input class="form-check-input" type="checkbox" value="" >
                                                </div>
                                            </td>
                                            <td ><a href="number-details.html">0002</a></td>
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
                                            <td ><a href="number-details.html">0003</a></td>
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
            <!--/ Sessions line chart -->



        </div>
    </div>
@endsection

