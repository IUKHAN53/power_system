<script src="{{asset('assets/vendor/libs/jquery/jquery.js')}}"></script>
<script src="{{asset('assets/vendor/libs/popper/popper.js')}}"></script>
<script src="{{asset('assets/vendor/js/bootstrap.js')}}"></script>
<script src="{{asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
<script src="{{asset('assets/vendor/libs/node-waves/node-waves.js')}}"></script>

<script src="{{asset('assets/vendor/libs/hammer/hammer.js')}}"></script>
<script src="{{asset('assets/vendor/libs/i18n/i18n.js')}}"></script>
<script src="{{asset('assets/vendor/libs/typeahead-js/typeahead.js')}}"></script>

<script src="{{asset('assets/vendor/js/menu.js')}}"></script>
<!-- endbuild -->

<!-- Vendors JS -->
<script src="{{asset('assets/vendor/libs/apex-charts/apexcharts.js')}}"></script>
<script src="{{asset('assets/vendor/libs/swiper/swiper.js')}}"></script>

<!-- Main JS -->
<script src="{{asset('assets/js/main.js')}}"></script>

<!-- Page JS -->
<script src="{{asset('assets/js/dashboards-analytics.js')}}"></script>
<script src="{{asset('assets/vendor/libs/moment/moment.js')}}"></script>
<script src="{{asset('assets/vendor/libs/flatpickr/flatpickr.js')}}"></script>
<script src="{{asset('assets/vendor/libs/bootstrap-datepicker/bootstrap-datepicker.js')}}"></script>
<script src="{{asset('assets/vendor/libs/bootstrap-daterangepicker/bootstrap-daterangepicker.js')}}"></script>
<script src="{{asset('assets/vendor/libs/jquery-timepicker/jquery-timepicker.js')}}"></script>
<script src="{{asset('assets/vendor/libs/pickr/pickr.js')}}"></script>
<script src="{{asset('assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js')}}"></script>
<script src="{{asset('assets/vendor/libs/dropzone/dropzone.js')}}"></script>
<script src="{{asset('assets/js/forms-file-upload.js')}}"></script>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $(".flatpickr-date").each(function () {
        $(this).flatpickr({
            altInput: true,
            altFormat: 'd/m/Y',
            dateFormat: 'Y-m-d'
        });
    });
    // if ($('#DropzoneElementId').length) {
    //   $("div#DropzoneElementId").dropzone({ url: "/file/post" });
    //   // other code here
    // }
    var dt_recent_ra = $('#recent-ra');
    table_recent_ra = dt_recent_ra.DataTable(
        {
            searching: false, paging: false, info: false,
            "order": [[1, "asc"]],
            "columnDefs": [{
                "targets": 0,
                "orderable": false
            },
                {
                    "targets": 7,
                    "orderable": false
                },
                {
                    "targets": 8,
                    "orderable": false
                }]
        }
    );
    var dt_ra_dates = $('#table-ra-dates');
    table_ra_dates = dt_ra_dates.DataTable(
        {
            searching: false, paging: false, info: false,
            "columnDefs": [{
                "targets": 0,
                "orderable": false
            },
                {
                    "targets": 7,
                    "orderable": false
                },
                {
                    "targets": 8,
                    "orderable": false
                }]
        }
    );
</script>
