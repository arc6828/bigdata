@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Export_2h {{ $export_2h->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/export_2hs') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/export_2hs/' . $export_2h->id . '/edit') }}" title="Edit Export_2h"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('export_2hs' . '/' . $export_2h->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Export_2h" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $export_2h->id }}</td>
                                    </tr>
                                    <tr><th> Hscode </th><td> {{ $export_2h->hscode }} </td></tr><tr><th> Product </th><td> {{ $export_2h->product }} </td></tr><tr><th> Html Title </th><td> {{ $export_2h->html_title }} </td></tr><tr><th> Html Data </th><td> {{ $export_2h->html_data }} </td></tr><tr><th> Json </th><td> {{ $export_2h->json }} </td></tr><tr><th> Scraping Date </th><td> {{ $export_2h->scraping_date }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
