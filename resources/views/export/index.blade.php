@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Export</div>
                    <div class="card-body">
                        <a href="{{ url('/export/create') }}" class="btn btn-success btn-sm" title="Add New Export">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>

                        <form method="GET" action="{{ url('/export') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
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
                                        <th>#</th><th>A</th><th>Declaration Type</th><th>Year In Yy</th><th>Month</th><th>Running No</th><th>Item No</th><th>Origin Code</th><th>Destination Code</th><th>Transportation</th><th>Tax Id</th><th>Company Branch</th><th>Customs Coordinates</th><th>Product Code</th><th>Product Code Unit</th><th>Privilege Code</th><th>Duty Rate Percent</th><th>Duty Rate Condition</th><th>Brought Back</th><th>Promote Investment</th><th>Bonded Warehouse</th><th>Claim Duty</th><th>Reimport Reexport</th><th>Freezone</th><th>Epz</th><th>Multiple Boat Declaration</th><th>Import Export Date</th><th>Payment Place Code</th><th>Payment Number</th><th>Payment Date</th><th>Release Location Code</th><th>Release Date</th><th>Pickup Location Code</th><th>Pickup Date</th><th>Making Year</th><th>Making Month</th><th>Weight</th><th>Volume</th><th>Value In Baht</th><th>Value In Other</th><th>Currency Code</th><th>Duty</th><th>Vat</th><th>Excise Tax</th><th>Fee</th><th>Commerce Fee</th><th>Interior Tax</th><th>Other Tax</th><th>Excise Coordinate</th><th>Excise Tax Percent</th><th>Excise Tax Condition</th><th>Customs Set</th><th>Hscode</th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($export as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->a }}</td><td>{{ $item->declaration_type }}</td><td>{{ $item->year_in_yy }}</td><td>{{ $item->month }}</td><td>{{ $item->running_no }}</td><td>{{ $item->item_no }}</td><td>{{ $item->origin_code }}</td><td>{{ $item->destination_code }}</td><td>{{ $item->transportation }}</td><td>{{ $item->tax_id }}</td><td>{{ $item->company_branch }}</td><td>{{ $item->customs_coordinates }}</td><td>{{ $item->product_code }}</td><td>{{ $item->product_code_unit }}</td><td>{{ $item->privilege_code }}</td><td>{{ $item->duty_rate_percent }}</td><td>{{ $item->duty_rate_condition }}</td><td>{{ $item->brought_back }}</td><td>{{ $item->promote_investment }}</td><td>{{ $item->bonded_warehouse }}</td><td>{{ $item->claim_duty }}</td><td>{{ $item->reimport_reexport }}</td><td>{{ $item->freezone }}</td><td>{{ $item->epz }}</td><td>{{ $item->multiple_boat_declaration }}</td><td>{{ $item->import_export_date }}</td><td>{{ $item->payment_place_code }}</td><td>{{ $item->payment_number }}</td><td>{{ $item->payment_date }}</td><td>{{ $item->release_location_code }}</td><td>{{ $item->release_date }}</td><td>{{ $item->pickup_location_code }}</td><td>{{ $item->pickup_date }}</td><td>{{ $item->making_year }}</td><td>{{ $item->making_month }}</td><td>{{ $item->weight }}</td><td>{{ $item->volume }}</td><td>{{ $item->value_in_baht }}</td><td>{{ $item->value_in_other }}</td><td>{{ $item->currency_code }}</td><td>{{ $item->duty }}</td><td>{{ $item->vat }}</td><td>{{ $item->excise_tax }}</td><td>{{ $item->fee }}</td><td>{{ $item->commerce_fee }}</td><td>{{ $item->interior_tax }}</td><td>{{ $item->other_tax }}</td><td>{{ $item->excise_coordinate }}</td><td>{{ $item->excise_tax_percent }}</td><td>{{ $item->excise_tax_condition }}</td><td>{{ $item->customs_set }}</td><td>{{ $item->hscode }}</td>
                                        <td>
                                            <a href="{{ url('/export/' . $item->id) }}" title="View Export"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/export/' . $item->id . '/edit') }}" title="Edit Export"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                            <form method="POST" action="{{ url('/export' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Export" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $export->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
