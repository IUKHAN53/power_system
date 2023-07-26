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
                                @if(can_access('number_list'))
                                    <div class="table-responsive text-nowrap">
                                        <table class="table tabl-striped table-hover table-sm" id="recent-ra">
                                            <thead>
                                            <tr>
                                                <th>
                                                    @if(can_access('mark_favourite'))
                                                        Favourite
                                                    @endif
                                                </th>
                                                <th>Number</th>
                                                <th>Last 5 S:D</th>
                                                <th>Last 10 S:D</th>
                                                <th>Last 5 U:F</th>
                                                <th>Last 10 U:F</th>
                                                <th>Next RA Date</th>
                                                <th>RA Date to Go</th>
                                                <th>
                                                    @if(can_access('remarks_of_number'))
                                                        Remarks
                                                    @endif
                                                </th>


                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($data as $number => $value)
                                                <tr>
                                                    <td class="text-center">
                                                        @if(can_access('mark_favourite'))
                                                            <div class="form-check-primary">
                                                                <input class="form-check-input" type="checkbox"
                                                                       onchange="markFav('{{$number}}', this)"
                                                                    {{$value['fav'] == 'true' ? 'checked' : ''}}>
                                                            </div>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        <a href="{{route('number-details',$number)}}">{{str_replace('hkg', '', $number)}}</a>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="progress rounded">
                                                            <div class="progress-bar" role="progressbar"
                                                                 aria-valuenow="70"
                                                                 aria-valuemin="0" aria-valuemax="100"
                                                                 style="width:37%">
                                                                37%
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="progress rounded">
                                                            <div class="progress-bar" role="progressbar"
                                                                 aria-valuenow="70"
                                                                 aria-valuemin="0" aria-valuemax="100"
                                                                 style="width:37%">
                                                                37%
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="progress rounded">
                                                            <div class="progress-bar" role="progressbar"
                                                                 aria-valuenow="70"
                                                                 aria-valuemin="0" aria-valuemax="100"
                                                                 style="width:37%">
                                                                37%
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="progress rounded">
                                                            <div class="progress-bar" role="progressbar"
                                                                 aria-valuenow="70"
                                                                 aria-valuemin="0" aria-valuemax="100"
                                                                 style="width:37%">
                                                                37%
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>{{$value['next']}}</td>
                                                    <td>{{getReadableDay($value['to_go'])}}</td>
                                                    <td>
                                                        @if(can_access('remarks_of_number'))
                                                            {{$value['remarks']}}
                                                        @endif
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                @else
                                    <h3 class="text-center"> Members Only</h3>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ Sessions line chart -->
        </div>
    </div>

    <script>
        function markFav(number, element) {
            $.ajax({
                url: '{{route('mark-fav')}}',
                type: 'POST',
                data: {
                    number: number,
                    fav: element.checked
                },
                success: function (response) {
                    if (response.status == 'success') {
                        toastr.success(response.message);
                    } else {
                        toastr.error(response.message);
                    }
                }
            });
        }
    </script>
@endsection

