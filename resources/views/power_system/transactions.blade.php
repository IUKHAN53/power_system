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
                                        @foreach($transactions as $item)
                                            <tr>
                                                <td class="text-center quick-edit">
                                                    <span class="quick-edit-text">{{$item->buy_date}}</span>
                                                </td>
                                                <td class="text-center quick-edit">
                                                    <span
                                                        class="quick-edit-text">{{extractValueFromStockFormat($item->stockno)}}</span>
                                                </td>
                                                <td class="text-center quick-edit">
                                                    <span class="quick-edit-text">{{$item->buy_price}}</span>
                                                </td>
                                                <td class="text-center quick-edit">
                                                    <span class="quick-edit-text">{{$item->buy_volume}}</span>
                                                </td>
                                                <td class="text-center quick-edit">
                                                    <span class="quick-edit-text">{{$item->sell_date}}</span>
                                                </td>
                                                <td class="text-center quick-edit">
                                                    <span class="quick-edit-text">{{$item->sell_price}}</span>
                                                </td>
                                                <td class="text-center quick-edit">
                                                    <span class="quick-edit-text">{{$item->sell_volume}}</span>
                                                </td>
                                                <td class="text-center quick-edit">
                                                    <span class="quick-edit-text">{{$item->difference}}</span>
                                                </td>
                                                <td class="text-center quick-edit">
                                                    <span class="quick-edit-text">{{$item->user->name}}</span>
                                                </td>
                                                <td class="quick-edit">
                                                    <span class="quick-edit-text">{{$item->remarks}}</span>
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

