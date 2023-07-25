@extends('layouts.backend')
@section('title', 'Transactions')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row gy-4">
            <div class="col-md-12 col-lg-12">
                <div class="card">
                    <div class="d-flex align-items-top row">
                        <div class="col-md-12 col-lg-12 order-2 order-md-1">
                            <div class="card-body align-items-top">
                                <h5 class="card-header">Transaction Records {{($user)?'For '. $user->name:''}}</h5>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover">
                                        <thead>
                                        <tr>
                                            <th class="text-center">Buy Date</th>
                                            <th class="text-center">Number</th>
                                            <th class="text-center">Buy Price</th>
                                            <th class="text-center">Buy Vol</th>
                                            <th class="text-center">Sell Date</th>
                                            <th class="text-center">Sell Price</th>
                                            <th class="text-center">Sell Vol</th>
                                            <th class="text-center">Different</th>
                                            <th class="text-center">User</th>
                                            <th class="text-center">Remarks</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($transactions as $item)
                                            <tr>
                                                <td class="quick-edit text-center">
                                                    <input onchange="dataChanged(this, '{{$item->id}}', 'buy_date')"
                                                           class="quick-edit-input flatpickr-input flatpickr-date text-center "
                                                           type="text">
                                                    <span
                                                        class="quick-edit-text">{{ $item->buy_date }}</span>
                                                </td>
                                                <td class="text-center">{{extractValueFromStockFormat($item->stockno)}}</td>
                                                <td class="quick-edit text-center">
                                                    <input onchange="dataChanged(this, '{{$item->id}}', 'buy_price')"
                                                           class="quick-edit-input text-center "
                                                           type="text">
                                                    <span
                                                        class="quick-edit-text">{{ $item->buy_price }}</span>
                                                </td>
                                                <td class="quick-edit text-center">
                                                    <input onchange="dataChanged(this, '{{$item->id}}', 'buy_volume')"
                                                           class="quick-edit-input text-center "
                                                           type="text">
                                                    <span
                                                        class="quick-edit-text">{{ $item->buy_volume }}</span>
                                                </td>
                                                <td class="quick-edit text-center">
                                                    <input onchange="dataChanged(this, '{{$item->id}}', 'sell_date')"
                                                           class="quick-edit-input flatpickr-input flatpickr-date text-center "
                                                           type="text">
                                                    <span
                                                        class="quick-edit-text dates">{{ $item->sell_date }}</span>
                                                </td>
                                                <td class="quick-edit text-center">
                                                    <input onchange="dataChanged(this, '{{$item->id}}', 'sell_price')"
                                                           class="quick-edit-input text-center "
                                                           type="text">
                                                    <span
                                                        class="quick-edit-text">{{ $item->sell_price }}</span>
                                                </td>
                                                <td class="quick-edit text-center">
                                                    <input onchange="dataChanged(this, '{{$item->id}}', 'sell_volume')"
                                                           class="quick-edit-input text-center "
                                                           type="text">
                                                    <span
                                                        class="quick-edit-text dates">{{ $item->difference }}</span>
                                                </td>
                                                <td class="quick-edit text-center">
                                                    <input onchange="dataChanged(this, '{{$item->id}}', 'difference')"
                                                           class="quick-edit-input text-center "
                                                           type="text">
                                                    <span
                                                        class="quick-edit-text dates">{{ $item->remarks }}</span>
                                                </td>
                                                <td class="text-center">{{$item->user->name}}</td>
                                                <td class="quick-edit text-center">
                                                    <input onchange="dataChanged(this, '{{$item->id}}', 'remarks')"
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
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!--/ Number List -->


        </div>
    </div>
@endsection

