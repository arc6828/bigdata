@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Export_2hs_time {{ $export_2hs_time->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/export_2hs_time') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/export_2hs_time/' . $export_2hs_time->id . '/edit') }}" title="Edit Export_2hs_time"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('export_2hs_time' . '/' . $export_2hs_time->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Export_2hs_time" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $export_2hs_time->id }}</td>
                                    </tr>
                                    <tr><th> Year At </th><td> {{ $export_2hs_time->year_at }} </td></tr><tr><th> Exporter </th><td> {{ $export_2hs_time->exporter }} </td></tr><tr><th> Importer </th><td> {{ $export_2hs_time->importer }} </td></tr><tr><th> Hscode </th><td> {{ $export_2hs_time->hscode }} </td></tr><tr><th> Value </th><td> {{ $export_2hs_time->value }} </td></tr><tr><th> Unit </th><td> {{ $export_2hs_time->unit }} </td></tr><tr><th> Trade Type </th><td> {{ $export_2hs_time->trade_type }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
