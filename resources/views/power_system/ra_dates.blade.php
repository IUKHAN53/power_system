@extends('layouts.backend')
@section('title', 'RA Dates')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row gy-4">

            <!-- Recent RA -->
            <div class="col-12 col-xl-12">
                <div class="card">
                    <div class="row">
                        <div class="col-md-12 col-12 order-2 order-md-0">
                            <div class="card-header m-2">
                                <h5 class="mb-0"><span class="float-left">RA Dates</span>
                                    <!-- <button class="btn btn-info float-right m2" style="float:right">Quick Edit</button></h5> -->
                            </div>
                            <div class="card-body">
                                <div class="table-responsive text-nowrap">
                                    <table class="table tabl-striped table-hover table-bordered tale-sm" id="table-ra-dates">
                                        <thead>
                                        <tr>
                                            <th>Number</th>
                                            <th style="width:130px!important">Next Date</th>
                                            <th>Date 1</th>
                                            <th>Date 2</th>
                                            <th>Date 3</th>
                                            <th>Date 4</th>
                                            <th>Date 5</th>
                                            <th>Date 6</th>
                                            <th>Date 7</th>
                                            <th>Date 8</th>
                                            <th>Date 9</th>
                                            <th>Date 10</th>
                                            <th>Date 11</th>
                                            <th>Date 12</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td class="text-center">0001</td>
                                            <td class="text-center"><input style="width:128px!important;" type="text" class="form-control flatpickr-input active flatpickr-date" placeholder="DD-MM-YYYY" readonly="readonly"></td>
                                            <td class="quick-edit text-center"><input type="text" class="quick-edit-input flatpickr-input flatpickr-date text-center"><span class="quick-edit-text">14/03/2023</span></td>
                                            <td class="quick-edit text-center"><input type="text" class="quick-edit-input flatpickr-input flatpickr-date text-center"><span class="quick-edit-text">14/03/2023</span></td>
                                            <td class="quick-edit text-center"><input type="text" class="quick-edit-input flatpickr-input flatpickr-date text-center"><span class="quick-edit-text">14/03/2023</span></td>
                                            <td class="quick-edit text-center"><input type="text" class="quick-edit-input flatpickr-input flatpickr-date text-center"><span class="quick-edit-text">14/03/2023</span></td>
                                            <td class="quick-edit text-center"><input type="text" class="quick-edit-input flatpickr-input flatpickr-date text-center"><span class="quick-edit-text">14/03/2023</span></td>
                                            <td class="quick-edit text-center"><input type="text" class="quick-edit-input flatpickr-input flatpickr-date text-center"><span class="quick-edit-text">14/03/2023</span></td>
                                            <td class="quick-edit text-center"><input type="text" class="quick-edit-input flatpickr-input flatpickr-date text-center"><span class="quick-edit-text">14/03/2023</span></td>
                                            <td class="quick-edit text-center"><input type="text" class="quick-edit-input flatpickr-input flatpickr-date text-center"><span class="quick-edit-text">14/03/2023</span></td>
                                            <td class="quick-edit text-center"><input type="text" class="quick-edit-input flatpickr-input flatpickr-date text-center"><span class="quick-edit-text">14/03/2023</span></td>
                                            <td class="quick-edit text-center"><input type="text" class="quick-edit-input flatpickr-input flatpickr-date text-center"><span class="quick-edit-text">14/03/2023</span></td>
                                            <td class="quick-edit text-center"><input type="text" class="quick-edit-input flatpickr-input flatpickr-date text-center"><span class="quick-edit-text">14/03/2023</span></td>
                                            <td class="quick-edit text-center"><input type="text" class="quick-edit-input flatpickr-input flatpickr-date text-center"><span class="quick-edit-text">14/03/2023</span></td>
                                            <td title="Click to Verify"><button class="btn btn-info btn-sm"> <i class="fa fa-check-circle"></i> </button></td>
                                        </tr>

                                        <tr>
                                            <td class="text-center">0001</td>
                                            <td class="text-center"><input style="width:128px!important;" type="text" class="form-control flatpickr-input active flatpickr-date" placeholder="DD-MM-YYYY" readonly="readonly"></td>
                                            <td class="quick-edit text-center"><input type="text" class="quick-edit-input flatpickr-input flatpickr-date text-center"><span class="quick-edit-text">14/03/2023</span></td>
                                            <td class="quick-edit text-center"><input type="text" class="quick-edit-input flatpickr-input flatpickr-date text-center"><span class="quick-edit-text">14/03/2023</span></td>
                                            <td class="quick-edit text-center"><input type="text" class="quick-edit-input flatpickr-input flatpickr-date text-center"><span class="quick-edit-text">14/03/2023</span></td>
                                            <td class="quick-edit text-center"><input type="text" class="quick-edit-input flatpickr-input flatpickr-date text-center"><span class="quick-edit-text">14/03/2023</span></td>
                                            <td class="quick-edit text-center"><input type="text" class="quick-edit-input flatpickr-input flatpickr-date text-center"><span class="quick-edit-text">14/03/2023</span></td>
                                            <td class="quick-edit text-center"><input type="text" class="quick-edit-input flatpickr-input flatpickr-date text-center"><span class="quick-edit-text">14/03/2023</span></td>
                                            <td class="quick-edit text-center"><input type="text" class="quick-edit-input flatpickr-input flatpickr-date text-center"><span class="quick-edit-text">14/03/2023</span></td>
                                            <td class="quick-edit text-center"><input type="text" class="quick-edit-input flatpickr-input flatpickr-date text-center"><span class="quick-edit-text">14/03/2023</span></td>
                                            <td class="quick-edit text-center"><input type="text" class="quick-edit-input flatpickr-input flatpickr-date text-center"><span class="quick-edit-text">14/03/2023</span></td>
                                            <td class="quick-edit text-center"><input type="text" class="quick-edit-input flatpickr-input flatpickr-date text-center"><span class="quick-edit-text">14/03/2023</span></td>
                                            <td class="quick-edit text-center"><input type="text" class="quick-edit-input flatpickr-input flatpickr-date text-center"><span class="quick-edit-text">14/03/2023</span></td>
                                            <td class="quick-edit text-center"><input type="text" class="quick-edit-input flatpickr-input flatpickr-date text-center"><span class="quick-edit-text">14/03/2023</span></td>
                                            <td title="Click to Verify"><button class="btn btn-info btn-sm"> <i class="fa fa-check-circle"></i> </button></td>
                                        </tr>

                                        <tr>
                                            <td class="text-center">0001</td>
                                            <td class="text-center"><input style="width:128px!important;" type="text" class="form-control flatpickr-input active flatpickr-date" placeholder="DD-MM-YYYY" readonly="readonly"></td>
                                            <td class="quick-edit text-center"><input type="text" class="quick-edit-input flatpickr-input flatpickr-date text-center"><span class="quick-edit-text">14/03/2023</span></td>
                                            <td class="quick-edit text-center"><input type="text" class="quick-edit-input flatpickr-input flatpickr-date text-center"><span class="quick-edit-text">14/03/2023</span></td>
                                            <td class="quick-edit text-center"><input type="text" class="quick-edit-input flatpickr-input flatpickr-date text-center"><span class="quick-edit-text">14/03/2023</span></td>
                                            <td class="quick-edit text-center"><input type="text" class="quick-edit-input flatpickr-input flatpickr-date text-center"><span class="quick-edit-text">14/03/2023</span></td>
                                            <td class="quick-edit text-center"><input type="text" class="quick-edit-input flatpickr-input flatpickr-date text-center"><span class="quick-edit-text">14/03/2023</span></td>
                                            <td class="quick-edit text-center"><input type="text" class="quick-edit-input flatpickr-input flatpickr-date text-center"><span class="quick-edit-text">14/03/2023</span></td>
                                            <td class="quick-edit text-center"><input type="text" class="quick-edit-input flatpickr-input flatpickr-date text-center"><span class="quick-edit-text">14/03/2023</span></td>
                                            <td class="quick-edit text-center"><input type="text" class="quick-edit-input flatpickr-input flatpickr-date text-center"><span class="quick-edit-text">14/03/2023</span></td>
                                            <td class="quick-edit text-center"><input type="text" class="quick-edit-input flatpickr-input flatpickr-date text-center"><span class="quick-edit-text">14/03/2023</span></td>
                                            <td class="quick-edit text-center"><input type="text" class="quick-edit-input flatpickr-input flatpickr-date text-center"><span class="quick-edit-text">14/03/2023</span></td>
                                            <td class="quick-edit text-center"><input type="text" class="quick-edit-input flatpickr-input flatpickr-date text-center"><span class="quick-edit-text">14/03/2023</span></td>
                                            <td class="quick-edit text-center"><input type="text" class="quick-edit-input flatpickr-input flatpickr-date text-center"><span class="quick-edit-text">14/03/2023</span></td>
                                            <td title="Click to Verify"><button class="btn btn-info btn-sm"> <i class="fa fa-check-circle"></i> </button></td>
                                        </tr>

                                        <tr>
                                            <td class="text-center">0001</td>
                                            <td class="text-center"><input style="width:128px!important;" type="text" class="form-control flatpickr-input active flatpickr-date" placeholder="DD-MM-YYYY" readonly="readonly"></td>
                                            <td class="quick-edit text-center"><input type="text" class="quick-edit-input flatpickr-input flatpickr-date text-center"><span class="quick-edit-text">14/03/2023</span></td>
                                            <td class="quick-edit text-center"><input type="text" class="quick-edit-input flatpickr-input flatpickr-date text-center"><span class="quick-edit-text">14/03/2023</span></td>
                                            <td class="quick-edit text-center"><input type="text" class="quick-edit-input flatpickr-input flatpickr-date text-center"><span class="quick-edit-text">14/03/2023</span></td>
                                            <td class="quick-edit text-center"><input type="text" class="quick-edit-input flatpickr-input flatpickr-date text-center"><span class="quick-edit-text">14/03/2023</span></td>
                                            <td class="quick-edit text-center"><input type="text" class="quick-edit-input flatpickr-input flatpickr-date text-center"><span class="quick-edit-text">14/03/2023</span></td>
                                            <td class="quick-edit text-center"><input type="text" class="quick-edit-input flatpickr-input flatpickr-date text-center"><span class="quick-edit-text">14/03/2023</span></td>
                                            <td class="quick-edit text-center"><input type="text" class="quick-edit-input flatpickr-input flatpickr-date text-center"><span class="quick-edit-text">14/03/2023</span></td>
                                            <td class="quick-edit text-center"><input type="text" class="quick-edit-input flatpickr-input flatpickr-date text-center"><span class="quick-edit-text">14/03/2023</span></td>
                                            <td class="quick-edit text-center"><input type="text" class="quick-edit-input flatpickr-input flatpickr-date text-center"><span class="quick-edit-text">14/03/2023</span></td>
                                            <td class="quick-edit text-center"><input type="text" class="quick-edit-input flatpickr-input flatpickr-date text-center"><span class="quick-edit-text">14/03/2023</span></td>
                                            <td class="quick-edit text-center"><input type="text" class="quick-edit-input flatpickr-input flatpickr-date text-center"><span class="quick-edit-text">14/03/2023</span></td>
                                            <td class="quick-edit text-center"><input type="text" class="quick-edit-input flatpickr-input flatpickr-date text-center"><span class="quick-edit-text">14/03/2023</span></td>
                                            <td title="Click to Verify"><button class="btn btn-info btn-sm"> <i class="fa fa-check-circle"></i> </button></td>
                                        </tr>

                                        <tr>
                                            <td class="text-center">0001</td>
                                            <td class="text-center"><input style="width:128px!important;" type="text" class="form-control flatpickr-input active flatpickr-date" placeholder="DD-MM-YYYY" readonly="readonly"></td>
                                            <td class="quick-edit text-center"><input type="text" class="quick-edit-input flatpickr-input flatpickr-date text-center"><span class="quick-edit-text">14/03/2023</span></td>
                                            <td class="quick-edit text-center"><input type="text" class="quick-edit-input flatpickr-input flatpickr-date text-center"><span class="quick-edit-text">14/03/2023</span></td>
                                            <td class="quick-edit text-center"><input type="text" class="quick-edit-input flatpickr-input flatpickr-date text-center"><span class="quick-edit-text">14/03/2023</span></td>
                                            <td class="quick-edit text-center"><input type="text" class="quick-edit-input flatpickr-input flatpickr-date text-center"><span class="quick-edit-text">14/03/2023</span></td>
                                            <td class="quick-edit text-center"><input type="text" class="quick-edit-input flatpickr-input flatpickr-date text-center"><span class="quick-edit-text">14/03/2023</span></td>
                                            <td class="quick-edit text-center"><input type="text" class="quick-edit-input flatpickr-input flatpickr-date text-center"><span class="quick-edit-text">14/03/2023</span></td>
                                            <td class="quick-edit text-center"><input type="text" class="quick-edit-input flatpickr-input flatpickr-date text-center"><span class="quick-edit-text">14/03/2023</span></td>
                                            <td class="quick-edit text-center"><input type="text" class="quick-edit-input flatpickr-input flatpickr-date text-center"><span class="quick-edit-text">14/03/2023</span></td>
                                            <td class="quick-edit text-center"><input type="text" class="quick-edit-input flatpickr-input flatpickr-date text-center"><span class="quick-edit-text">14/03/2023</span></td>
                                            <td class="quick-edit text-center"><input type="text" class="quick-edit-input flatpickr-input flatpickr-date text-center"><span class="quick-edit-text">14/03/2023</span></td>
                                            <td class="quick-edit text-center"><input type="text" class="quick-edit-input flatpickr-input flatpickr-date text-center"><span class="quick-edit-text">14/03/2023</span></td>
                                            <td class="quick-edit text-center"><input type="text" class="quick-edit-input flatpickr-input flatpickr-date text-center"><span class="quick-edit-text">14/03/2023</span></td>
                                            <td title="Click to Verify"><button class="btn btn-info btn-sm"> <i class="fa fa-check-circle"></i> </button></td>
                                        </tr>

                                        <tr>
                                            <td class="text-center">0001</td>
                                            <td class="text-center"><input style="width:128px!important;" type="text" class="form-control flatpickr-input active flatpickr-date" placeholder="DD-MM-YYYY" readonly="readonly"></td>
                                            <td class="quick-edit text-center"><input type="text" class="quick-edit-input flatpickr-input flatpickr-date text-center"><span class="quick-edit-text">14/03/2023</span></td>
                                            <td class="quick-edit text-center"><input type="text" class="quick-edit-input flatpickr-input flatpickr-date text-center"><span class="quick-edit-text">14/03/2023</span></td>
                                            <td class="quick-edit text-center"><input type="text" class="quick-edit-input flatpickr-input flatpickr-date text-center"><span class="quick-edit-text">14/03/2023</span></td>
                                            <td class="quick-edit text-center"><input type="text" class="quick-edit-input flatpickr-input flatpickr-date text-center"><span class="quick-edit-text">14/03/2023</span></td>
                                            <td class="quick-edit text-center"><input type="text" class="quick-edit-input flatpickr-input flatpickr-date text-center"><span class="quick-edit-text">14/03/2023</span></td>
                                            <td class="quick-edit text-center"><input type="text" class="quick-edit-input flatpickr-input flatpickr-date text-center"><span class="quick-edit-text">14/03/2023</span></td>
                                            <td class="quick-edit text-center"><input type="text" class="quick-edit-input flatpickr-input flatpickr-date text-center"><span class="quick-edit-text">14/03/2023</span></td>
                                            <td class="quick-edit text-center"><input type="text" class="quick-edit-input flatpickr-input flatpickr-date text-center"><span class="quick-edit-text">14/03/2023</span></td>
                                            <td class="quick-edit text-center"><input type="text" class="quick-edit-input flatpickr-input flatpickr-date text-center"><span class="quick-edit-text">14/03/2023</span></td>
                                            <td class="quick-edit text-center"><input type="text" class="quick-edit-input flatpickr-input flatpickr-date text-center"><span class="quick-edit-text">14/03/2023</span></td>
                                            <td class="quick-edit text-center"><input type="text" class="quick-edit-input flatpickr-input flatpickr-date text-center"><span class="quick-edit-text">14/03/2023</span></td>
                                            <td class="quick-edit text-center"><input type="text" class="quick-edit-input flatpickr-input flatpickr-date text-center"><span class="quick-edit-text">14/03/2023</span></td>
                                            <td title="Click to Verify"><button class="btn btn-info btn-sm"> <i class="fa fa-check-circle"></i> </button></td>
                                        </tr>

                                        <tr>
                                            <td class="text-center">0001</td>
                                            <td class="text-center"><input style="width:128px!important;" type="text" class="form-control flatpickr-input active flatpickr-date" placeholder="DD-MM-YYYY" readonly="readonly"></td>
                                            <td class="quick-edit text-center"><input type="text" class="quick-edit-input flatpickr-input flatpickr-date text-center"><span class="quick-edit-text">14/03/2023</span></td>
                                            <td class="quick-edit text-center"><input type="text" class="quick-edit-input flatpickr-input flatpickr-date text-center"><span class="quick-edit-text">14/03/2023</span></td>
                                            <td class="quick-edit text-center"><input type="text" class="quick-edit-input flatpickr-input flatpickr-date text-center"><span class="quick-edit-text">14/03/2023</span></td>
                                            <td class="quick-edit text-center"><input type="text" class="quick-edit-input flatpickr-input flatpickr-date text-center"><span class="quick-edit-text">14/03/2023</span></td>
                                            <td class="quick-edit text-center"><input type="text" class="quick-edit-input flatpickr-input flatpickr-date text-center"><span class="quick-edit-text">14/03/2023</span></td>
                                            <td class="quick-edit text-center"><input type="text" class="quick-edit-input flatpickr-input flatpickr-date text-center"><span class="quick-edit-text">14/03/2023</span></td>
                                            <td class="quick-edit text-center"><input type="text" class="quick-edit-input flatpickr-input flatpickr-date text-center"><span class="quick-edit-text">14/03/2023</span></td>
                                            <td class="quick-edit text-center"><input type="text" class="quick-edit-input flatpickr-input flatpickr-date text-center"><span class="quick-edit-text">14/03/2023</span></td>
                                            <td class="quick-edit text-center"><input type="text" class="quick-edit-input flatpickr-input flatpickr-date text-center"><span class="quick-edit-text">14/03/2023</span></td>
                                            <td class="quick-edit text-center"><input type="text" class="quick-edit-input flatpickr-input flatpickr-date text-center"><span class="quick-edit-text">14/03/2023</span></td>
                                            <td class="quick-edit text-center"><input type="text" class="quick-edit-input flatpickr-input flatpickr-date text-center"><span class="quick-edit-text">14/03/2023</span></td>
                                            <td class="quick-edit text-center"><input type="text" class="quick-edit-input flatpickr-input flatpickr-date text-center"><span class="quick-edit-text">14/03/2023</span></td>
                                            <td title="Click to Verify"><button class="btn btn-info btn-sm"> <i class="fa fa-check-circle"></i> </button></td>
                                        </tr>

                                        <tr>
                                            <td class="text-center">0001</td>
                                            <td class="text-center"><input style="width:128px!important;" type="text" class="form-control flatpickr-input active flatpickr-date" placeholder="DD-MM-YYYY" readonly="readonly"></td>
                                            <td class="quick-edit text-center"><input type="text" class="quick-edit-input flatpickr-input flatpickr-date text-center"><span class="quick-edit-text">14/03/2023</span></td>
                                            <td class="quick-edit text-center"><input type="text" class="quick-edit-input flatpickr-input flatpickr-date text-center"><span class="quick-edit-text">14/03/2023</span></td>
                                            <td class="quick-edit text-center"><input type="text" class="quick-edit-input flatpickr-input flatpickr-date text-center"><span class="quick-edit-text">14/03/2023</span></td>
                                            <td class="quick-edit text-center"><input type="text" class="quick-edit-input flatpickr-input flatpickr-date text-center"><span class="quick-edit-text">14/03/2023</span></td>
                                            <td class="quick-edit text-center"><input type="text" class="quick-edit-input flatpickr-input flatpickr-date text-center"><span class="quick-edit-text">14/03/2023</span></td>
                                            <td class="quick-edit text-center"><input type="text" class="quick-edit-input flatpickr-input flatpickr-date text-center"><span class="quick-edit-text">14/03/2023</span></td>
                                            <td class="quick-edit text-center"><input type="text" class="quick-edit-input flatpickr-input flatpickr-date text-center"><span class="quick-edit-text">14/03/2023</span></td>
                                            <td class="quick-edit text-center"><input type="text" class="quick-edit-input flatpickr-input flatpickr-date text-center"><span class="quick-edit-text">14/03/2023</span></td>
                                            <td class="quick-edit text-center"><input type="text" class="quick-edit-input flatpickr-input flatpickr-date text-center"><span class="quick-edit-text">14/03/2023</span></td>
                                            <td class="quick-edit text-center"><input type="text" class="quick-edit-input flatpickr-input flatpickr-date text-center"><span class="quick-edit-text">14/03/2023</span></td>
                                            <td class="quick-edit text-center"><input type="text" class="quick-edit-input flatpickr-input flatpickr-date text-center"><span class="quick-edit-text">14/03/2023</span></td>
                                            <td class="quick-edit text-center"><input type="text" class="quick-edit-input flatpickr-input flatpickr-date text-center"><span class="quick-edit-text">14/03/2023</span></td>
                                            <td title="Click to Verify"><button class="btn btn-info btn-sm"> <i class="fa fa-check-circle"></i> </button></td>
                                        </tr>




                                        </tbody>
                                    </table>
                                    <form action="/upload" class="dropzone needsclick" id="dropzone-basic">
                                        <div class="dz-message needsclick">
                                            Drop RA Dates files here or click to upload
                                            <span class="note needsclick"
                                            >(This is just a demo dropzone. Selected files are <strong>not</strong> actually
                                                uploaded.)</span
                                            >
                                        </div>
                                        <div class="fallback">
                                            <input name="file" type="file" />
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ Recent RA -->


        </div>
    </div>
@endsection

