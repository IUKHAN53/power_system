@extends('layouts.backend')
@section('title', 'Numbers List')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row gy-4">
            <!-- Number List -->
            <div class="col-md-12 col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-header">Number Details {{str_replace('hkg', '', $number)}}</h5>
                        <h6 class="card-header">RA Pattern</h6>
                        <div class="d-flex align-items-end row ">
                            @foreach($tables as $key=>$data)
                                <div class="col-md-12 col-lg-6 order-2 order-md-1 mb-5">
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
                                                @php($bold_style = \Carbon\Carbon::parse($item->date)->toDateString()== \Carbon\Carbon::parse($date_ra[$key])->toDateString() ? 'font-weight: bold;' : '')
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
                            @endforeach
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
                                                aria-describedby="floatingInputHelp"/>
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
                        <div class="col-md-12 col-lg-12 order-2 order-md-1">
                            <div class="card-body align-items-top">
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

                                        <form action="{{route('save-transaction')}}" method="POST">
                                            @csrf
                                            <tr>

                                                <input type="hidden" name="stockno" value="{{$number}}">
                                                <td class="text-center">
                                                    <input type="text" placeholder="DD-MM-YYYY" name="buy_date"
                                                           class="form-control text-center flatpickr-input active flatpickr-date" value="{{now()->toDateString()}}"
                                                           @error('buy_date') style="border-color: #FA787E;" @enderror>
                                                </td>
                                                <td class="text-center">
                                                    <input type="text" class="form-control text-center"
                                                           name="buy_price"
                                                           @error('buy_price') style="border-color: #FA787E;" @enderror>
                                                </td>
                                                <td class="text-center">
                                                    <input type="text" class="form-control text-center"
                                                           name="buy_volume"
                                                           @error('buy_volume') style="border-color: #FA787E;" @enderror>
                                                </td>
                                                <td class="text-center">
                                                    <input type="text" placeholder="DD-MM-YYYY" name="sell_date"
                                                           class="form-control text-center flatpickr-input active flatpickr-date" value="{{now()->toDateString()}}"
                                                           @error('sell_date') style="border-color: #FA787E;" @enderror>
                                                </td>
                                                <td class="text-center">
                                                    <input type="text" class="form-control text-center"
                                                           name="sell_price"
                                                           @error('sell_price') style="border-color: #FA787E;" @enderror>
                                                </td>
                                                <td class="text-center">
                                                    <input type="text" class="form-control text-center"
                                                           name="sell_volume"
                                                           @error('sell_volume') style="border-color: #FA787E;" @enderror>
                                                </td>
                                                <td class="text-center">
                                                    <input type="text" class="form-control text-center"
                                                           name="difference"
                                                           @error('difference') style="border-color: #FA787E;" @enderror>
                                                </td>
                                                <td class="text-center">
                                                    <input type="text" class="form-control text-center" name="remarks"
                                                           @error('remarks') style="border-color: #FA787E;" @enderror>
                                                </td>
                                                <td>
                                                    <button class="btn btn-info mt-1" type="submit">+</button>
                                                </td>
                                            </tr>
                                        </form>
                                        @foreach($transactions as $item)
                                            <tr>
                                                <td class="quick-edit text-center">{{$item->buy_date}}</td>
                                                <td class="quick-edit text-center">{{$item->buy_price}}</td>
                                                <td class="quick-edit text-center">{{$item->buy_volume}}</td>
                                                <td class="quick-edit text-center">{{$item->sell_date}}</td>
                                                <td class="quick-edit text-center">{{$item->sell_price}}</td>
                                                <td class="quick-edit text-center">{{$item->sell_volume}}</td>
                                                <td class="quick-edit text-center">{{$item->difference}}</td>
                                                <td class="quick-edit text-center">{{$item->remarks}}</td>
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

