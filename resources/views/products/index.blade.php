@extends('layouts.app')
@push('head')

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
                    <a class="btn btn-success" href="{{ route('products.create') }}"> Tambah</a>
                </p>

                <table id="user_tabel" class="table table-bordered dt-responsive table-responsive nowrap">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Img</th>
                            <th>Details</th>
                            <th width="280px">Action</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>

    </div>
</div> <!-- end row -->


@endsection

@push('body')
<script>
    $(document).ready(function(){
        $('table').DataTable({
            // dom: 'lBfrtip',
            //     buttons: [
            //         'copy', 'excel', 'pdf', 'csv', 'print'
            //     ],
            lengthChange: false,
            searching: false,
            processing: true,
            serverSide: true,
            ajax: `{{ route('products.list') }}`,
            columns: [
                {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                {data: 'name', name: 'name'},
                {data: 'detail', name: 'detail'},
                {data: 'image', name: 'image'},
                {data: 'action', name: 'action'},
            ],
            drawCallback: function () {
                $('.dataTables_paginate').addClass('d-flex justify-content-end');
            }
        });
    });

</script>
@endpush
