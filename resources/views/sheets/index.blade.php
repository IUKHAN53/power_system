@extends('layouts.main')
@section('title', $title)
@section('content')

    <section class="section">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="scroll-menu-wrapper hidden" >
                        <ul class="menu">
                            <li class="item">1</li>
                            <li class="item">2</li>
                            <li class="item">3</li>
                            <li class="item">4</li>
                            <li class="item">5</li>
                            <li class="item">6</li>
                            <li class="item">7</li>
                            <li class="item">8</li>
                            <li class="item">9</li>
                            <li class="item">10</li>
                            <li class="item">5</li>
                            <li class="item">6</li>
                            <li class="item">1</li>
                            <li class="item">2</li>
                            <li class="item">3</li>
                            <li class="item">4</li>
                            <li class="item">5</li>
                            <li class="item">6</li>
                            <li class="item">1</li>
                            <li class="item">2</li>
                            <li class="item">3</li>
                            <li class="item">4</li>
                            <li class="item">5</li>
                            <li class="item">6</li>
                            <li class="item">1</li>
                            <li class="item">2</li>
                            <li class="item">3</li>
                            <li class="item">4</li>
                            <li class="item">5</li>
                            <li class="item">6</li>

                        </ul>

                        <div class="paddles">
                            <button class="left-paddle paddle hidden">
                                <
                            </button>
                            <button class="right-paddle paddle">
                                >
                            </button>
                        </div>

                    </div>
                    <div class="card-header">
                        <h4>{{$title}}</h4>

                    </div>
                    <div class="card-body">
                        <div class="row justify-content-end align-items-center">
                            <div class="mr-3">
                                <div class="form-group">
                                    <select id='tab' class="form-control select2">
                                        @php
                                        $i=1;
                                        @endphp
                                        @foreach($tabs as $tab)
                                            <option value="{{$tab->table_name}}" {{($i == 1) ? 'selected' : ''}}>{{$tab->name}}</option>
                                            @php
                                            $i++;
                                            @endphp
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div>
                                <div class="form-group">
                                <button type="button" id="filterBtn" class="btn btn-primary">Filter</button>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover" id="role-table" style="width:100%;" data-order='[[ 0, "desc" ]]'>
                                <thead>
                                <tr>
                                    <th>Sl no</th>
                                    <th>Date</th>
                                    <th>Open</th>
                                    <th>High </th>
                                    <th>Low</th>
                                    <th>Close</th>
                                    <th>Volume</th>
                                </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('custom-css')
    <link rel="stylesheet" href="{{ URL::asset('assets/bundles/select2/dist/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/bundles/datatables/datatables.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css') }}">
    <style>
        .scroll-menu-wrapper {
            position: relative;
            max-width: 500px;
            height: 100px;
            margin: 1em auto;
            border: 1px solid black;
            overflow-x: hidden;
            overflow-y: hidden;
        }

        .scroll-menu-wrapper .menu {
            height: 120px;
            background: #f3f3f3;
            box-sizing: border-box;
            white-space: nowrap;
            overflow-x: auto;
            overflow-y: hidden;
            -webkit-overflow-scrolling: touch;
        }

        .scroll-menu-wrapper .item {
            display: inline-block;
            width: 100px;
            height: 100%;
            outline: 1px dotted gray;
            padding: 1em;
            box-sizing: border-box;
        }


        .scroll-menu-wrapper .paddle {
            position: absolute;
            top: 0;
            bottom: 0;
            width: 3em;
        }
        .scroll-menu-wrapper .left-paddle {
            left: 0;
        }
        .right-paddle {
            right: 0;
        }
        .hidden {
            display: none;
        }
    </style>
@endpush
@push('scripts')
    <script src="{{ URL::asset('assets/bundles/datatables/datatables.min.js') }}"></script>
    <script src="{{ URL::asset('assets/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ URL::asset('assets/bundles/datatables/export-tables/dataTables.buttons.min.js') }}"></script>
    <script src="{{ URL::asset('assets/bundles/datatables/export-tables/buttons.flash.min.js') }}"></script>
    <script src="{{ URL::asset('assets/bundles/datatables/export-tables/jszip.min.js') }}"></script>
    <script src="{{ URL::asset('assets/bundles/datatables/export-tables/vfs_fonts.js') }}"></script>
    <script src="{{ URL::asset('assets/bundles/datatables/export-tables/buttons.print.min.js') }}"></script>
    <script src="{{ URL::asset('assets/bundles/select2/dist/js/select2.full.min.js') }}"></script>

    <script>
        var scrollDuration = 300;
        var leftPaddle = document.getElementsByClassName('left-paddle');
        var rightPaddle = document.getElementsByClassName('right-paddle');
        var itemsLength = $('.item').length;
        var itemSize = $('.item').outerWidth(true);
        var paddleMargin = 20;
        var getMenuWrapperSize = function() {
            return $('.scroll-menu-wrapper').outerWidth();
        }
        var menuWrapperSize = getMenuWrapperSize();
        $(window).on('resize', function() {
            menuWrapperSize = getMenuWrapperSize();
        });
        var menuVisibleSize = menuWrapperSize;
        var getMenuSize = function() {
            return itemsLength * itemSize;
        };
        var menuSize = getMenuSize();
        var menuInvisibleSize = menuSize - menuWrapperSize;
        var getMenuPosition = function() {
            return $('.menu').scrollLeft();
        };
        $(function() {

            $('.menu').on('scroll', function() {
                menuInvisibleSize = menuSize - menuWrapperSize;
                var menuPosition = getMenuPosition();
                var menuEndOffset = menuInvisibleSize - paddleMargin;
                if (menuPosition <= paddleMargin) {
                    $(leftPaddle).addClass('hidden');
                    $(rightPaddle).removeClass('hidden');
                } else if (menuPosition < menuEndOffset) {
                    // show both paddles in the middle
                    $(leftPaddle).removeClass('hidden');
                    $(rightPaddle).removeClass('hidden');
                } else if (menuPosition >= menuEndOffset) {
                    $(leftPaddle).removeClass('hidden');
                    $(rightPaddle).addClass('hidden');
                }

                // print important values
                $('#print-wrapper-size span').text(menuWrapperSize);
                $('#print-menu-size span').text(menuSize);
                $('#print-menu-invisible-size span').text(menuInvisibleSize);
                $('#print-menu-position span').text(menuPosition);

            });
            $(rightPaddle).on('click', function() {
                $('.menu').animate( { scrollLeft: menuInvisibleSize}, scrollDuration);
            });
            $(leftPaddle).on('click', function() {
                $('.menu').animate( { scrollLeft: '0' }, scrollDuration);
            });
            var table = $('#role-table').DataTable({
                processing: true,
                serverSide: true,
                "pageLength": 200,
                dom:
                    "<'row'<'col-sm-3'l><'col-sm-6 text-center'B><'col-sm-3'f>>" +
                    "<'row'<'col-sm-12'tr>>" +
                    "<'row'<'col-sm-5'i><'col-sm-7'p>>",
                "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
                "language": {
                    "infoFiltered": ""
                },
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ],
                ajax: {
                    url: "{!! $route !!}",
                    data: function (d) {
                        d.tab = $('#tab').val()
                    }
                },
                columns: [
                    { data: 'id', name: 'id' },
                    { data: 'date', name: 'date' },
                    { data: 'open', name: 'open' },
                    { data: 'high', name: 'high' },
                    { data: 'low', name: 'low' },
                    { data: 'close', name: 'close' },
                    { data: 'volume', name: 'volume' },
                ],
                "fnRowCallback" : function(nRow, aData, iDisplayIndex){
                    $("td:first", nRow).html(iDisplayIndex +1);
                    return nRow;
                },
                drawCallback: function(settings) {
                    var pagination = $(this).closest('.dataTables_wrapper').find('.dataTables_paginate');
                    pagination.toggle(this.api().page.info().pages > 1);
                }
            });

            $('#filterBtn').click(function(){
                table.draw();
            });

        });
    </script>
@endpush