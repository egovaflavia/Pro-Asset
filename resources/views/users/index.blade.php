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
                    <a class="btn btn-success" href="{{ route('users.create') }}"> Create New User</a>
                </p>

                <table id="user_tabel" class="table table-bordered dt-responsive table-responsive nowrap">
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


@endsection

@push('body')
<script>
    $(document).ready(function(){
        $('#user_tabel').DataTable({
            // dom: 'lBfrtip',
            //     buttons: [
            //         'copy', 'excel', 'pdf', 'csv', 'print'
            //     ],
            lengthChange: false,
            searching: false,
            processing: true,
            serverSide: true,
            ajax: `{{ route('list') }}`,
            columns: [
                {data: 'name', name: 'name'},
                {data: 'email', name: 'email'},
            ],
            drawCallback: function () {
                $('.dataTables_paginate').addClass('d-flex justify-content-end');
            }
        });
    });

</script>
@endpush
