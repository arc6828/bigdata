@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Country {{ $country->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/country') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/country/' . $country->id . '/edit') }}" title="Edit Country"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('country' . '/' . $country->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Country" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $country->id }}</td>
                                    </tr>
                                    <tr><th> Code </th><td> {{ $country->code }} </td></tr><tr><th> Name </th><td> {{ $country->name }} </td></tr><tr><th> Iso Code </th><td> {{ $country->iso_code }} </td></tr><tr><th> Iso Name </th><td> {{ $country->iso_name }} </td></tr><tr><th> ParentCode </th><td> {{ $country->parentCode }} </td></tr><tr><th> ParentName </th><td> {{ $country->parentName }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
