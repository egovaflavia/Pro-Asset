@extends('layouts.app')
@push('head')
<!-- third party css -->
<link href="{{ asset('assets/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css" rel="stylesheet"
    type="text/css') }}" />
<link href="{{ asset('assets/libs/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css') }}" rel="stylesheet"
    type="text/css" />
<link href="{{ asset('assets/libs/datatables.net-buttons-bs5/css/buttons.bootstrap5.min.css') }}" rel="stylesheet"
    type="text/css" />
<link href="{{ asset('assets/libs/datatables.net-select-bs5/css//select.bootstrap5.min.css') }}" rel="stylesheet"
    type="text/css" />
<!-- third party css end -->
@endpush

@section('content')

{{ Breadcrumbs::render('users') }}

<div class="row">
    <div class="col-12">
        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
        @endif

        <div class="card">
            <div class="card-body">
                <h4 class="mt-0 header-title">Default Example</h4>
                <p class="text-muted font-14 mb-3">
                    <a class="btn btn-success" href="{{ route('users.create') }}"> Create New User</a>
                </p>

                <table id="datatable" class="table table-bordered dt-responsive table-responsive nowrap">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>
        </div>

    </div>
</div> <!-- end row -->


<p class="text-center text-primary"><small>Tutorial by ItSolutionStuff.com</small></p>
@endsection

@push('body')
<script src="{{ asset('assets/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/libs/datatables.net-bs5/js/dataTables.bootstrap5.min.js') }}"></script>
<script src="{{ asset('assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('assets/libs/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js') }}"></script>
<script src="{{ asset('assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('assets/libs/datatables.net-buttons-bs5/js/buttons.bootstrap5.min.js') }}"></script>
<script src="{{ asset('assets/libs/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('assets/libs/datatables.net-buttons/js/buttons.flash.min.js') }}"></script>
<script src="{{ asset('assets/libs/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('assets/libs/datatables.net-keytable/js/dataTables.keyTable.min.js') }}"></script>
<script src="{{ asset('assets/libs/datatables.net-select/js/dataTables.select.min.js') }}"></script>
<script src="{{ asset('assets/libs/pdfmake/build/pdfmake.min.js') }}"></script>
<script src="{{ asset('assets/libs/pdfmake/build/vfs_fonts.js') }}"></script>

<script>
    $(document).ready(function(){
        $('table').DataTable({
            processing: true,
            serverSide: true,
            bDestroy: true,
            ajax: `{{ route('yajra') }}`,
            columns: [
                {data: 'name', name: 'name'},
                {data: 'email', name: 'email'},
            ]
        });
    });
    // $(document).ready(function () {
    //     $("#datatable").DataTable();
    //     var a = $("#datatable-buttons").DataTable({
    //         lengthChange: !1,
    //         buttons: ["copy", "excel", "pdf"]
    //     });
    //     $("#key-table").DataTable({
    //         keys: !0
    //     }), $("#responsive-datatable").DataTable(), $("#selection-datatable").DataTable({
    //         select: {
    //             style: "multi"
    //         }
    //     }), a.buttons().container().appendTo("#datatable-buttons_wrapper .col-md-6:eq(0)"), $(
    //         "#datatable_length select[name*='datatable_length']").addClass("form-select form-select-sm"), $(
    //         "#datatable_length select[name*='datatable_length']").removeClass(
    //         "custom-select custom-select-sm"), $(".dataTables_length label").addClass("form-label")
    // });

</script>
@endpush
