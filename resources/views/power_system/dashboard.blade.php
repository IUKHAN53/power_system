@extends('layouts.backend')
@section('title', 'Dashboard')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        @if(Session::has('message'))
            <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
        @endif
        <div class="row gy-4">
            <!-- Gamification Card -->
            <div class="col-md-12 col-lg-6">
                <div class="card">
                    <div class="d-flex align-items-end row">
                        <div class="col-md-12 order-2 order-md-1">
                            <div class="card-body">
                                <h5 class="card-header">Daily Checklist</h5>
                                <div class="table-responsive text-nowrap">
                                    <form action="{{route('save-checklist')}}" method="POST">
                                        @csrf
                                        <table class="table table-borderless">
                                            <tbody class="table-border-bottom-0">
                                            <tr>
                                                <td style="width:33.3%"><strong>Text A</strong></td>
                                                <td>
                                                    <input type="number" pattern="^\d*(\.\d{0,4})?$" name="checklist[]"
                                                           value="{{$checklist[0] ?? ''}}" class="form-control">
                                                    @error('checklist.0')<span>{{$message}}</span>@enderror
                                                </td>
                                                <td style="width:33.3%"></td>
                                            </tr>
                                            <tr>
                                                <td><strong>Text B</strong></td>
                                                <td>
                                                    <input type="number" pattern="^\d*(\.\d{0,4})?$" name="checklist[]"
                                                           value="{{$checklist[1] ?? ''}}" class="form-control">
                                                    @error('checklist.1')<span>{{$message}}</span>@enderror
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><strong>Text C</strong></td>
                                                <td>
                                                    <input type="number" pattern="^\d*(\.\d{0,4})?$" name="checklist[]"
                                                           value="{{$checklist[2] ?? ''}}" class="form-control">
                                                    @error('checklist.2')<span>{{$message}}</span>@enderror
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><strong>Text D</strong></td>
                                                <td>
                                                    <input type="number" pattern="^\d*(\.\d{0,4})?$" name="checklist[]"
                                                           value="{{$checklist[3] ?? ''}}" class="form-control">
                                                    @error('checklist.3')<span>{{$message}}</span>@enderror
                                                </td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td class="text-align-left">
                                                    <button class="btn btn-info" type="submit">Result</button>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </form>
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
                                <textarea rows="12" id="notes_field"
                                          class="form-control mb-3">{{auth()->user()->notes}}</textarea>
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
                                        @foreach($data as $number => $value)
                                            <tr>
                                                <td class="text-center">
                                                    <div class="form-check-primary">
                                                        <input class="form-check-input" type="checkbox"
                                                               onchange="markFav('{{$number}}', this)"
                                                            {{$value['fav'] == 'true' ? 'checked' : ''}}>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="{{route('number-details',$number)}}">{{str_replace('hkg', '', $number)}}</a>
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
                                                <td class="text-center">
                                                    <div class="progress rounded">
                                                        <div class="progress-bar" role="progressbar" aria-valuenow="70"
                                                             aria-valuemin="0" aria-valuemax="100" style="width:37%">
                                                            37%
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>{{$value['next']}}</td>
                                                <td>{{getReadableDay($value['to_go'])}}</td>
                                                <td></td>
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

    <script type="module">
        $("#notes_field").on("focusout", function () {
            let notes = $(this).val();
            let url = "{{ route('save-user-notes') }}";
            $.ajax({
                url: url,
                type: 'POST',
                data: {
                    notes: notes,
                },
                success: function (data) {
                    console.log(data);
                }
            });
        })

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

