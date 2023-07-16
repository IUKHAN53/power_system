@extends('layouts.main')
@section('title', 'Sheet Upload')
@section('content')
    <section class="section">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Sheet Upload') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form  method="POST" action="{{ route('sheet.upload') }}" enctype="multipart/form-data">

                            @csrf
                            <div class="row ">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>File<span class="error">*</span></label>
                                        <div class='file file--upload'>
                                            <label for='file'>
                                                <input id='file' name="file" type='file' />
                                            </label>

                                        </div>
                                        @error('file')
                                        <div class="error">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Select sheet<span class="error">*</span></label>
                                        <select name="sheet" class="form-control">
                                            <option value="">Select Sheet</option>
                                            <option value="sheet1">Sheet 1</option>
                                            <option value="sheet2">Sheet 2</option>
                                            <option value="sheet3">Sheet 3</option>
                                        </select>
                                        @error('sheet')
                                        <div class="error">{{ $message }}</div>
                                        @enderror
                                    </div>

                                </div>
                                <div class="col-md-4" style="margin-top: 30px">
                                    <input type="submit" name="submit" value="Upload" class="btn btn-primary">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover" id="role-table" style="width:100%;">
                                <thead>
                                <tr>
                                    <th>Sl no</th>
                                    <th>File path</th>
                                    <th>Sheet</th>
                                    <th>Completed</th>
                                    <th>Created At</th>
                                    <th>Action</th>
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
    <link rel="stylesheet" href="{{ URL::asset('assets/bundles/datatables/datatables.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/bundles/izitoast/css/iziToast.min.css') }}">

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

    <script src="{{ URL::asset('assets/bundles/sweetalert/sweetalert.min.js') }}"></script>
    <script src="{{ URL::asset('assets/bundles/izitoast/js/iziToast.min.js') }}"></script>

    <script>
        $(function() {
            $('#role-table').DataTable({
                "order": [[ 0, "desc" ]],
                processing: true,
                serverSide: true,
                dom: 'Bfrtip',
                buttons: [
                    'csv', 'excel', 'pdf', 'print'
                ],
                ajax: '{!! route('upload.index') !!}',
                columns: [
                    { data: 'id', name: 'id'},
                    { data: 'file_path', name: 'file_path'},
                    { data: 'sheet', name: 'sheet'},
                    { data: 'completed', name: 'completed' },
                    { data: 'created_at', name: 'created_at' },
                    {data: 'actions', name: 'actions', orderable: false, searchable: false}
                ],
                "fnRowCallback" : function(nRow, aData, iDisplayIndex){
                    $("td:first", nRow).html(iDisplayIndex +1);
                    return nRow;
                },
            });
        });
    </script>
@endpush