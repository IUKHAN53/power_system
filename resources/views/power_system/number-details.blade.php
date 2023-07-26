@extends('layouts.backend')
@section('title', 'Number '.str_replace('hkg', '', $number))
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
                                            @php
                                                $result_diff = '--';
                                                $result_pattern = '--';
                                            @endphp
                                            @foreach($data as $item)
                                                @php
                                                    $bold_style = compareDates($item->date, $date_ra[$key]) ? 'font-weight: bold;' : '';
                                                    if($loop->first){
                                                        $difference = '';
                                                        $pattern = '--U';
                                                    }else if ($loop->index == 1){
                                                        $difference = number_format(calculatePercentageChange($data[$loop->index - 1]->close, $item->close),2) . '%';
                                                        $pattern = calculatePattern($item->open, $data[$loop->index - 1]->close, $item->close);
                                                    }else{
                                                        $difference = number_format(calculatePercentageChange($data[$loop->index - 1]->close, $item->close),2) . '%';
                                                        $pattern = calculatePattern2($item->open, $data[$loop->index - 1]->open, $data[$loop->index - 1]->close, $item->close);
                                                    }
                                                    if(compareDates($item->date, $date_ra[$key])){
                                                        $nextDiff = number_format(calculatePercentageChange($item->close, $data[$loop->index + 1]->close),2) . '%';
                                                        $result_diff = calculateResultDiff($difference, $nextDiff);
                                                        $result_pattern = $nextDiff > $difference ? 'U' : 'F';
                                                    }
                                                @endphp
                                                <tr>
                                                    <td style="{{$bold_style}}">{{\Carbon\Carbon::parse($item->date)->toDateString()}}</td>
                                                    <td style="{{$bold_style}}">{{$item->open}}</td>
                                                    <td style="{{$bold_style}}">{{$item->high}}</td>
                                                    <td style="{{$bold_style}}">{{$item->low}}</td>
                                                    <td style="{{$bold_style}}">{{$item->close}}</td>
                                                    <td style="{{$bold_style}}">{{$item->volume}}</td>
                                                    <td style="{{$bold_style}}">{{$difference}}</td>
                                                    <td style="{{$bold_style}}">{{$pattern}}</td>
                                                </tr>
                                            @endforeach
                                            <tr>
                                                <td colspan="6" style="text-align: right;">Result</td>
                                                <td>{{$result_diff}}</td>
                                                <td>{{$result_pattern}}</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <div class="col-md-12 col-lg-12 order-3 order-md-1">
                            <div class="card-body row">
                                @if(can_access('remarks_of_number'))
                                    <div class="col-lg-11">
                                        <div class="col-md">
                                            <div class="form-floating form-floating-outline">
                                                <input
                                                    value="{{getNumberRemarks($number)}}"
                                                    type="text"
                                                    class="form-control"
                                                    id="remarks"
                                                    placeholder="Remarks of 0001"
                                                    aria-describedby="floatingInputHelp"/>
                                                <label for="remarks">Remarks
                                                    of {{str_replace('hkg', '', $number)}}</label>
                                                <div id="floatingInputHelp" class="form-text">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-1">
                                        <button class="btn btn-info mt-1" onclick="saveRemarks('{{$number}}')">
                                            <i class="fa fa-save"></i> Save
                                        </button>
                                    </div>
                                @else
                                    <div class="col-lg-11">
                                        <div class="col-md">
                                            Remarks of {{str_replace('hkg', '', $number)}}
                                            <div class="form-floating form-floating-outline">
                                                <h3 class="text-center"> Members Only </h3>
                                            </div>
                                        </div>
                                    </div>
                                @endif
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
                                @if(can_access('transaction_record'))
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
                                                               class="form-control text-center flatpickr-input active flatpickr-date"
                                                               value="{{now()->toDateString()}}"
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
                                                               class="form-control text-center flatpickr-input active flatpickr-date"
                                                               value="{{now()->toDateString()}}"
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
                                                        <input type="text" class="form-control text-center"
                                                               name="remarks"
                                                               @error('remarks') style="border-color: #FA787E;" @enderror>
                                                    </td>
                                                    <td>
                                                        <button class="btn btn-info mt-1" type="submit">+</button>
                                                    </td>
                                                </tr>
                                            </form>
                                            @foreach($transactions as $item)
                                                <tr>
                                                    <td class="quick-edit text-center">
                                                        <input
                                                            onchange="dataChanged(this, '{{$item->id}}', 'buy_date')"
                                                            class="quick-edit-input flatpickr-input flatpickr-date text-center "
                                                            type="text">
                                                        <span
                                                            class="quick-edit-text">{{ $item->buy_date }}</span>
                                                    </td>
                                                    <td class="quick-edit text-center">
                                                        <input
                                                            onchange="dataChanged(this, '{{$item->id}}', 'buy_price')"
                                                            class="quick-edit-input text-center "
                                                            type="text">
                                                        <span
                                                            class="quick-edit-text">{{ $item->buy_price }}</span>
                                                    </td>
                                                    <td class="quick-edit text-center">
                                                        <input
                                                            onchange="dataChanged(this, '{{$item->id}}', 'buy_volume')"
                                                            class="quick-edit-input text-center "
                                                            type="text">
                                                        <span
                                                            class="quick-edit-text">{{ $item->buy_volume }}</span>
                                                    </td>
                                                    <td class="quick-edit text-center">
                                                        <input
                                                            onchange="dataChanged(this, '{{$item->id}}', 'sell_date')"
                                                            class="quick-edit-input flatpickr-input flatpickr-date text-center "
                                                            type="text">
                                                        <span
                                                            class="quick-edit-text dates">{{ $item->sell_date }}</span>
                                                    </td>
                                                    <td class="quick-edit text-center">
                                                        <input
                                                            onchange="dataChanged(this, '{{$item->id}}', 'sell_price')"
                                                            class="quick-edit-input text-center "
                                                            type="text">
                                                        <span
                                                            class="quick-edit-text">{{ $item->sell_price }}</span>
                                                    </td>
                                                    <td class="quick-edit text-center">
                                                        <input
                                                            onchange="dataChanged(this, '{{$item->id}}', 'sell_volume')"
                                                            class="quick-edit-input text-center "
                                                            type="text">
                                                        <span
                                                            class="quick-edit-text dates">{{ $item->difference }}</span>
                                                    </td>
                                                    <td class="quick-edit text-center">
                                                        <input
                                                            onchange="dataChanged(this, '{{$item->id}}', 'difference')"
                                                            class="quick-edit-input text-center "
                                                            type="text">
                                                        <span
                                                            class="quick-edit-text dates">{{ $item->remarks }}</span>
                                                    </td>
                                                    <td class="quick-edit text-center">
                                                        <input
                                                            onchange="dataChanged(this, '{{$item->id}}', 'remarks')"
                                                            class="quick-edit-input text-center "
                                                            type="text">
                                                        <span
                                                            class="quick-edit-text dates">{{ $item->sell_volume }}</span>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                @else
                                    <h3 class="text-center"> Members Only </h3>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function saveRemarks(number) {
            let remarks = $('#remarks').val();
            $.ajax({
                url: "{{route('save-remarks')}}",
                type: "POST",
                data: {
                    number: number,
                    remarks: remarks,
                },
                success: function (response) {
                    console.log(response);
                }
            });
        }
    </script>
@endsection

