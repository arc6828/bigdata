@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Export {{ $export->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/export') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/export/' . $export->id . '/edit') }}" title="Edit Export"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('export' . '/' . $export->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Export" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $export->id }}</td>
                                    </tr>
                                    <tr><th> A </th><td> {{ $export->a }} </td></tr><tr><th> Declaration Type </th><td> {{ $export->declaration_type }} </td></tr><tr><th> Year In Yy </th><td> {{ $export->year_in_yy }} </td></tr><tr><th> Month </th><td> {{ $export->month }} </td></tr><tr><th> Running No </th><td> {{ $export->running_no }} </td></tr><tr><th> Item No </th><td> {{ $export->item_no }} </td></tr><tr><th> Origin Code </th><td> {{ $export->origin_code }} </td></tr><tr><th> Destination Code </th><td> {{ $export->destination_code }} </td></tr><tr><th> Transportation </th><td> {{ $export->transportation }} </td></tr><tr><th> Tax Id </th><td> {{ $export->tax_id }} </td></tr><tr><th> Company Branch </th><td> {{ $export->company_branch }} </td></tr><tr><th> Customs Coordinates </th><td> {{ $export->customs_coordinates }} </td></tr><tr><th> Product Code </th><td> {{ $export->product_code }} </td></tr><tr><th> Product Code Unit </th><td> {{ $export->product_code_unit }} </td></tr><tr><th> Privilege Code </th><td> {{ $export->privilege_code }} </td></tr><tr><th> Duty Rate Percent </th><td> {{ $export->duty_rate_percent }} </td></tr><tr><th> Duty Rate Condition </th><td> {{ $export->duty_rate_condition }} </td></tr><tr><th> Brought Back </th><td> {{ $export->brought_back }} </td></tr><tr><th> Promote Investment </th><td> {{ $export->promote_investment }} </td></tr><tr><th> Bonded Warehouse </th><td> {{ $export->bonded_warehouse }} </td></tr><tr><th> Claim Duty </th><td> {{ $export->claim_duty }} </td></tr><tr><th> Reimport Reexport </th><td> {{ $export->reimport_reexport }} </td></tr><tr><th> Freezone </th><td> {{ $export->freezone }} </td></tr><tr><th> Epz </th><td> {{ $export->epz }} </td></tr><tr><th> Multiple Boat Declaration </th><td> {{ $export->multiple_boat_declaration }} </td></tr><tr><th> Import Export Date </th><td> {{ $export->import_export_date }} </td></tr><tr><th> Payment Place Code </th><td> {{ $export->payment_place_code }} </td></tr><tr><th> Payment Number </th><td> {{ $export->payment_number }} </td></tr><tr><th> Payment Date </th><td> {{ $export->payment_date }} </td></tr><tr><th> Release Location Code </th><td> {{ $export->release_location_code }} </td></tr><tr><th> Release Date </th><td> {{ $export->release_date }} </td></tr><tr><th> Pickup Location Code </th><td> {{ $export->pickup_location_code }} </td></tr><tr><th> Pickup Date </th><td> {{ $export->pickup_date }} </td></tr><tr><th> Making Year </th><td> {{ $export->making_year }} </td></tr><tr><th> Making Month </th><td> {{ $export->making_month }} </td></tr><tr><th> Weight </th><td> {{ $export->weight }} </td></tr><tr><th> Volume </th><td> {{ $export->volume }} </td></tr><tr><th> Value In Baht </th><td> {{ $export->value_in_baht }} </td></tr><tr><th> Value In Other </th><td> {{ $export->value_in_other }} </td></tr><tr><th> Currency Code </th><td> {{ $export->currency_code }} </td></tr><tr><th> Duty </th><td> {{ $export->duty }} </td></tr><tr><th> Vat </th><td> {{ $export->vat }} </td></tr><tr><th> Excise Tax </th><td> {{ $export->excise_tax }} </td></tr><tr><th> Fee </th><td> {{ $export->fee }} </td></tr><tr><th> Commerce Fee </th><td> {{ $export->commerce_fee }} </td></tr><tr><th> Interior Tax </th><td> {{ $export->interior_tax }} </td></tr><tr><th> Other Tax </th><td> {{ $export->other_tax }} </td></tr><tr><th> Excise Coordinate </th><td> {{ $export->excise_coordinate }} </td></tr><tr><th> Excise Tax Percent </th><td> {{ $export->excise_tax_percent }} </td></tr><tr><th> Excise Tax Condition </th><td> {{ $export->excise_tax_condition }} </td></tr><tr><th> Customs Set </th><td> {{ $export->customs_set }} </td></tr><tr><th> Hscode </th><td> {{ $export->hscode }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
