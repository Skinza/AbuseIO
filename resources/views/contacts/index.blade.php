@extends('app')

@section('content')
    <h1 class="page-header">{{ trans('misc.contacts') }}</h1>
    <div class="row">
        <div class="col-md-3 col-md-offset-9 text-right">
            {!! link_to_route('admin.contacts.create', trans('contacts.button.new_contact'), [ ], ['class' => 'btn btn-info']) !!}
            {!! link_to_route('admin.contacts.export', trans('misc.button.csv_export'), ['format' => 'csv'], ['class' => 'btn btn-info']) !!}
        </div>
    </div>

    @if ( !$contacts->count() )
        <div class="alert alert-info top-buffer"><span class="glyphicon glyphicon-info-sign"></span> {{ trans('contacts.no_contacts')}}</div>
    @else
        <table class="table table-striped top-buffer" id="contacts-table">
            <thead>
                <tr>
                    <th>{{ trans('contacts.reference') }}</th>
                    <th>{{ trans('misc.name') }}</th>
                    <th>{{ trans('misc.email') }}</th>
                    <th>{{ trans('contacts.rpchost') }}</th>
                    <th>{{ trans('contacts.notification') }}</th>
                    <th class="text-right">{{ trans('misc.action') }}</th>
                </tr>
            </thead>
        </table>
    @endif
@endsection

@section('extrajs')
<script>
     $(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('#contacts-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{!! route('admin.contacts.search') .'/query/' !!}',
            columnDefs: [ {
                targets: -1,
                data: null,
                defaultContent: " "
            } ],
            language: {
                url: '{{ asset("/i18n/$auth_user->locale.json") }}'
            },
            columns: [
                { data: 'reference', name: 'reference' },
                { data: 'name', name: 'name' },
                { data: 'email', name: 'email' },
                { data: 'rpc_host', name: 'rpc_host' },
                { data: 'auto_notify', name: 'auto_notify' },
                { data: 'actions', name: 'actions', orderable: false, searchable: false, class: "text-right" },
            ]
        });
    });
</script>
@endsection
