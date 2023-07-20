@extends('layouts.backend')
@section('title', 'Numbers List')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row gy-4">
            <!-- Number List -->
            <div class="col-md-12 col-lg-12">
                <div class="card">
                    <div class="d-flex align-items-end row">
                        <div class="col-md-12 col-lg-6 order-2 order-md-1">
                            <div class="card-body">
                                <h5 class="card-header">Number Details {{str_replace('hkg', '', $number)}}</h5>
                                <h6 class="card-header">RA Pattern</h6>
                                <div class="table-responsive text-nowrap">
                                    <table class="table table-striped table-hover table-bordered table-sm">
                                        <thead>
                                        <th>Date</th>
                                        <th>Open</th>
                                        <th>High</th>
                                        <th>Low</th>
                                        <th>Close</th>
                                        <th>Volume</th>
                                        <th>Different</th>
                                        <th>Pattern</th>
                                        </thead>
                                        <tbody>
                                        @foreach($data as $item)
                                            @php($bold_style = \Carbon\Carbon::parse($item->date)->toDateString()== \Carbon\Carbon::parse($ra_date)->toDateString() ? 'font-weight: bold;' : '')
                                            <tr>
                                                <td style="{{$bold_style}}">{{\Carbon\Carbon::parse($item->date)->toDateString()}}</td>
                                                <td style="{{$bold_style}}">{{$item->open}}</td>
                                                <td style="{{$bold_style}}">{{$item->high}}</td>
                                                <td style="{{$bold_style}}">{{$item->low}}</td>
                                                <td style="{{$bold_style}}">{{$item->close}}</td>
                                                <td style="{{$bold_style}}">{{$item->volume}}</td>
                                                <td style="{{$bold_style}}">0%</td>
                                                <td style="{{$bold_style}}">0</td>
                                            </tr>
                                        @endforeach
                                        <tr>
                                            <td colspan="6" style="text-align: right;">Result</td>
                                            <td>Same</td>
                                            <td>U</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-6 order-3 order-md-1">
                            <div class="card-body">
                                <h5 class="card-header"></h5>
                                <h6 class="card-header"></h6>
                                <div class="table-responsive text-nowrap">
                                    <table class="table table-striped table-hover table-bordered table-sm">
                                        <thead>
                                        <th>Date</th>
                                        <th>Open</th>
                                        <th>High</th>
                                        <th>Low</th>
                                        <th>Close</th>
                                        <th>Volume</th>
                                        <th>Different</th>
                                        <th>Pattern</th>
                                        </thead>
                                        <tbody>
                                        @foreach($data as $item)
                                            @php($bold_style = \Carbon\Carbon::parse($item->date)->toDateString()== \Carbon\Carbon::parse($ra_date)->toDateString() ? 'font-weight: bold;' : '')
                                            <tr>
                                                <td style="{{$bold_style}}">{{\Carbon\Carbon::parse($item->date)->toDateString()}}</td>
                                                <td style="{{$bold_style}}">{{$item->open}}</td>
                                                <td style="{{$bold_style}}">{{$item->high}}</td>
                                                <td style="{{$bold_style}}">{{$item->low}}</td>
                                                <td style="{{$bold_style}}">{{$item->close}}</td>
                                                <td style="{{$bold_style}}">{{$item->volume}}</td>
                                                <td style="{{$bold_style}}">0%</td>
                                                <td style="{{$bold_style}}">0</td>
                                            </tr>
                                        @endforeach
                                        <tr>
                                            <td colspan="6" style="text-align: right;">Result</td>
                                            <td>Same</td>
                                            <td>U</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-12 order-3 order-md-1">
                            <div class="card-body row">
                                <div class="col-lg-11">
                                    <div class="col-md">
                                        <div class="form-floating form-floating-outline">
                                            <input
                                                type="text"
                                                class="form-control"
                                                id="floatingInput"
                                                placeholder="Remarks of 0001"
                                                aria-describedby="floatingInputHelp" />
                                            <label for="floatingInput">Remarks of 0001</label>
                                            <div id="floatingInputHelp" class="form-text">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-1">
                                    <button class="btn btn-info mt-1"><i class="fa fa-save"></i> Save</button>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>

            </div>

            <div class="col-md-12 col-lg-12">
                <div class="card">
                    <div class="d-flex align-items-top row">
                        <div class="col-md-12 col-lg-12 order-2 order-md-1" >
                            <div class="card-body align-items-top" >
                                <h5 class="card-header">Transaction Record</h5>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover table-sm">
                                        <thead>
                                        <tr>
                                            <th>Buy Date</th>
                                            <th>Buy Price</th>
                                            <th>Buy Vol</th>
                                            <th>Sell Date</th>
                                            <th>Sell Price</th>
                                            <th>Sell Vol</th>
                                            <th>Different</th>
                                            <th>Remarks</th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        <tr>
                                            <td class="text-center">
                                                <input type="text" placeholder="DD-MM-YYYY"
                                                       class="form-control text-center flatpickr-input active flatpickr-date" >
                                            </td>
                                            <td class="text-center">
                                                <input type="text" class="form-control text-center">
                                            </td>
                                            <td class="text-center">
                                                <input type="text" class="form-control text-center">
                                            </td>
                                            <td class="text-center">
                                                <input type="text" placeholder="DD-MM-YYYY"
                                                       class="form-control text-center flatpickr-input active flatpickr-date" >
                                            </td>
                                            <td class="text-center">
                                                <input type="text" class="form-control text-center">
                                            </td>
                                            <td class="text-center">
                                                <input type="text" class="form-control text-center">
                                            </td>
                                            <td class="text-center">
                                                <input type="text" class="form-control text-center">
                                            </td>
                                            <td class="text-center">
                                                <input type="text" class="form-control text-center">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="quick-edit text-center"><input type="text" class="text-center quick-edit-input flatpickr-input active flatpickr-date"><span class="quick-edit-text">14/03/2023</span></td>
                                            <td class="quick-edit text-center"><input type="text" class="text-center quick-edit-input"><span class="quick-edit-text">9.08</span></td>
                                            <td class="quick-edit text-center"><input type="text" class="text-center quick-edit-input"><span class="quick-edit-text">1000</span></td>
                                            <td class="quick-edit text-center"><input type="text" class="text-center quick-edit-input flatpickr-input active flatpickr-date"><span class="quick-edit-text">14/03/2023</span></td>
                                            <td class="quick-edit text-center"><input type="text" class="text-center quick-edit-input"><span class="quick-edit-text">9.08</span></td>
                                            <td class="quick-edit text-center"><input type="text" class="text-center quick-edit-input"><span class="quick-edit-text">1000</span></td>
                                            <td class="quick-edit text-center"><input type="text" class="text-center quick-edit-input"><span class="quick-edit-text">0.00</span>%</td>
                                            <td class="quick-edit text-center"><input type="text" class="text-center quick-edit-input"><span class="quick-edit-text">Text</span></td>
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

