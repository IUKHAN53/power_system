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
                                <h5 class="mb-0"><span class="float-left">RA Dates</span></h5>
                                <!-- <button class="btn btn-info float-right m2" style="float:right">Quick Edit</button></h5> -->
                            </div>
                            <div class="card-body">
                                <div class="table-responsive text-nowrap">
                                    <table class="table tabl-striped table-hover table-bordered tale-sm"
                                           id="table-ra-dates">
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
                                        @foreach($data as $number => $ra_dates)
                                            @if($ra_dates)
                                                <tr id="{{str_replace('hkg', '', $number)}}">
                                                    <td class="text-center">{{str_replace('hkg', '', $number)}}</td>
                                                    <td class="text-center">
                                                        <input style="width:128px!important;" type="text"
                                                               onchange="dateChanged(this, 'next')"
                                                                value="{{($ra_dates->next == '0000-00-00') ? '' : $ra_dates->next}}"
                                                               class="form-control flatpickr-input active flatpickr-date"
                                                               placeholder="YYYY-MM-DD" readonly="readonly">
                                                    </td>
                                                    @for($i = 1 ; $i <=12; $i++)
                                                        <td class="quick-edit text-center">
                                                            <input onchange="dateChanged(this, 'last'+{{$i}})"
                                                                   class="quick-edit-input flatpickr-input flatpickr-date text-center "
                                                                   type="text">
                                                            <span
                                                                class="quick-edit-text dates">{{ $ra_dates->{'last'.$i} }}</span>
                                                        </td>
                                                    @endfor
                                                    <td title="Click to Verify">
                                                        <button class="btn btn-info btn-sm"
                                                                onclick="verifyDate(this,'{{$number}}')">
                                                            <i class="fa fa-check-circle"></i>
                                                        </button>
                                                    </td>
                                                </tr>
                                            @endif
                                        @endforeach
                                        </tbody>
                                    </table>
                                    {{--                                    <form action="/upload" class="dropzone needsclick" id="dropzone-basic">--}}
                                    {{--                                        <div class="dz-message needsclick">--}}
                                    {{--                                            Drop RA Dates files here or click to upload--}}
                                    {{--                                            <span class="note needsclick"--}}
                                    {{--                                            >(This is just a demo dropzone. Selected files are <strong>not</strong>--}}
                                    {{--                                                actually--}}
                                    {{--                                                uploaded.)</span--}}
                                    {{--                                            >--}}
                                    {{--                                        </div>--}}
                                    {{--                                        <div class="fallback">--}}
                                    {{--                                            <input name="file" type="file"/>--}}
                                    {{--                                        </div>--}}
                                    {{--                                    </form>--}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function dateChanged(element, field) {
            var date = $(element).val();
            var number = $(element).closest('tr').find('td:first').text();
            var url = "{{route('update-data-field')}}";
            $.ajax({
                url: url,
                type: 'POST',
                data: {
                    field: field,
                    value: date,
                    number: number,
                    from: 'ra_dates'
                },
                success: function () {
                    $(this).hide();
                    $(this).parent().find(".quick-edit-text").show();
                    $(this).parent().find(".quick-edit-text").text(date);
                }
            });
        }

        function verifyDate(buttonElement, number) {
            const tableRow = buttonElement.closest('tr');
            const nextDateInput = tableRow.querySelector('input[onchange="dateChanged(this, \'next\')"]');
            const originalNextDateValue = nextDateInput.value;
            if (originalNextDateValue.trim() === '') {
                alert('Please input "Next Date" before verifying.');
                return;
            }
            const confirmation = confirm('Is the Next Date data correct?');
            if (confirmation) {
                window.location.href = `/verify-dates?number=${number}`;
            } else {
                alert('Verification canceled.');
            }
        }
    </script>
    <script type="module">
        $('.quick-edit-input').keyup(function (e) {
            var key = e.which;
            if (key === 13) {//ENTER
                $(this).hide();
                $(this).parent().find(".quick-edit-text").text($(this).val());
                $(this).parent().find(".quick-edit-text").show();
            }
            if (key === 27) {//ESCAPE
                $(this).hide();
                $(this).parent().find(".quick-edit-text").show();
                // $(this).parent().find(".quick-edit-text").text($(this).val());
            }
        });
    </script>
@endsection

