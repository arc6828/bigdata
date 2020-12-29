@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Export_2hs_time</div>
                    <div class="card-body">
                        <a href="{{ url('/export_2hs_time/create') }}" class="btn btn-success btn-sm" title="Add New Export_2hs_time">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>

                        <form method="GET" action="{{ url('/export_2hs_time') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
                            <div class="input-group">
                                <input type="text" class="form-control" name="search" placeholder="Search..." value="{{ request('search') }}">
                                <span class="input-group-append">
                                    <button class="btn btn-secondary" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                        </form>

                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th><th>Year At</th><th>Exporter</th><th>Importer</th><th>Hscode</th><th>Value</th><th>Unit</th><th>Trade Type</th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($export_2hs_time as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->year_at }}</td><td>{{ $item->exporter }}</td><td>{{ $item->importer }}</td><td>{{ $item->hscode }}</td><td>{{ $item->value }}</td><td>{{ $item->unit }}</td><td>{{ $item->trade_type }}</td>
                                        <td>
                                            <a href="{{ url('/export_2hs_time/' . $item->id) }}" title="View Export_2hs_time"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/export_2hs_time/' . $item->id . '/edit') }}" title="Edit Export_2hs_time"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                            <form method="POST" action="{{ url('/export_2hs_time' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Export_2hs_time" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $export_2hs_time->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
