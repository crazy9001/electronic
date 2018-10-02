@extends('bases::layouts.master')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-heading">
                    <div class="panel-title">
                        Table <strong>DataTables</strong> with <strong>Scroller</strong>
                    </div>
                </div>
                <div class="panel-body">
                    <table id="products" class="table table-striped table-hover dt-responsive" width="100%">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Full name</th>
                            <th>Email</th>
                            <th>Country</th>
                            <th>IP Address</th>
                        </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>

@stop

@section('javascript')
    <script>
        $(function() {
            $('#products').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{{ route('products.list') }}',
                columns: [
                    { data: 'id', name: 'id' },
                    { data: 'full_name', name: 'full_name' },
                    { data: 'email', name: 'email' }
                ]
            });
        });
    </script>
@stop