<div class="form-group {{ $errors->has('a') ? 'has-error' : ''}}">
    <label for="a" class="control-label">{{ 'A' }}</label>
    <input class="form-control" name="a" type="text" id="a" value="{{ isset($export->a) ? $export->a : ''}}" >
    {!! $errors->first('a', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('declaration_type') ? 'has-error' : ''}}">
    <label for="declaration_type" class="control-label">{{ 'Declaration Type' }}</label>
    <input class="form-control" name="declaration_type" type="text" id="declaration_type" value="{{ isset($export->declaration_type) ? $export->declaration_type : ''}}" >
    {!! $errors->first('declaration_type', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('year_in_yy') ? 'has-error' : ''}}">
    <label for="year_in_yy" class="control-label">{{ 'Year In Yy' }}</label>
    <input class="form-control" name="year_in_yy" type="text" id="year_in_yy" value="{{ isset($export->year_in_yy) ? $export->year_in_yy : ''}}" >
    {!! $errors->first('year_in_yy', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('month') ? 'has-error' : ''}}">
    <label for="month" class="control-label">{{ 'Month' }}</label>
    <input class="form-control" name="month" type="text" id="month" value="{{ isset($export->month) ? $export->month : ''}}" >
    {!! $errors->first('month', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('running_no') ? 'has-error' : ''}}">
    <label for="running_no" class="control-label">{{ 'Running No' }}</label>
    <input class="form-control" name="running_no" type="text" id="running_no" value="{{ isset($export->running_no) ? $export->running_no : ''}}" >
    {!! $errors->first('running_no', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('item_no') ? 'has-error' : ''}}">
    <label for="item_no" class="control-label">{{ 'Item No' }}</label>
    <input class="form-control" name="item_no" type="text" id="item_no" value="{{ isset($export->item_no) ? $export->item_no : ''}}" >
    {!! $errors->first('item_no', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('origin_code') ? 'has-error' : ''}}">
    <label for="origin_code" class="control-label">{{ 'Origin Code' }}</label>
    <input class="form-control" name="origin_code" type="text" id="origin_code" value="{{ isset($export->origin_code) ? $export->origin_code : ''}}" >
    {!! $errors->first('origin_code', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('destination_code') ? 'has-error' : ''}}">
    <label for="destination_code" class="control-label">{{ 'Destination Code' }}</label>
    <input class="form-control" name="destination_code" type="text" id="destination_code" value="{{ isset($export->destination_code) ? $export->destination_code : ''}}" >
    {!! $errors->first('destination_code', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('transportation') ? 'has-error' : ''}}">
    <label for="transportation" class="control-label">{{ 'Transportation' }}</label>
    <input class="form-control" name="transportation" type="text" id="transportation" value="{{ isset($export->transportation) ? $export->transportation : ''}}" >
    {!! $errors->first('transportation', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('tax_id') ? 'has-error' : ''}}">
    <label for="tax_id" class="control-label">{{ 'Tax Id' }}</label>
    <input class="form-control" name="tax_id" type="text" id="tax_id" value="{{ isset($export->tax_id) ? $export->tax_id : ''}}" >
    {!! $errors->first('tax_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('company_branch') ? 'has-error' : ''}}">
    <label for="company_branch" class="control-label">{{ 'Company Branch' }}</label>
    <input class="form-control" name="company_branch" type="text" id="company_branch" value="{{ isset($export->company_branch) ? $export->company_branch : ''}}" >
    {!! $errors->first('company_branch', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('customs_coordinates') ? 'has-error' : ''}}">
    <label for="customs_coordinates" class="control-label">{{ 'Customs Coordinates' }}</label>
    <input class="form-control" name="customs_coordinates" type="text" id="customs_coordinates" value="{{ isset($export->customs_coordinates) ? $export->customs_coordinates : ''}}" >
    {!! $errors->first('customs_coordinates', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('product_code') ? 'has-error' : ''}}">
    <label for="product_code" class="control-label">{{ 'Product Code' }}</label>
    <input class="form-control" name="product_code" type="text" id="product_code" value="{{ isset($export->product_code) ? $export->product_code : ''}}" >
    {!! $errors->first('product_code', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('product_code_unit') ? 'has-error' : ''}}">
    <label for="product_code_unit" class="control-label">{{ 'Product Code Unit' }}</label>
    <input class="form-control" name="product_code_unit" type="text" id="product_code_unit" value="{{ isset($export->product_code_unit) ? $export->product_code_unit : ''}}" >
    {!! $errors->first('product_code_unit', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('privilege_code') ? 'has-error' : ''}}">
    <label for="privilege_code" class="control-label">{{ 'Privilege Code' }}</label>
    <input class="form-control" name="privilege_code" type="text" id="privilege_code" value="{{ isset($export->privilege_code) ? $export->privilege_code : ''}}" >
    {!! $errors->first('privilege_code', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('duty_rate_percent') ? 'has-error' : ''}}">
    <label for="duty_rate_percent" class="control-label">{{ 'Duty Rate Percent' }}</label>
    <input class="form-control" name="duty_rate_percent" type="text" id="duty_rate_percent" value="{{ isset($export->duty_rate_percent) ? $export->duty_rate_percent : ''}}" >
    {!! $errors->first('duty_rate_percent', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('duty_rate_condition') ? 'has-error' : ''}}">
    <label for="duty_rate_condition" class="control-label">{{ 'Duty Rate Condition' }}</label>
    <input class="form-control" name="duty_rate_condition" type="text" id="duty_rate_condition" value="{{ isset($export->duty_rate_condition) ? $export->duty_rate_condition : ''}}" >
    {!! $errors->first('duty_rate_condition', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('brought_back') ? 'has-error' : ''}}">
    <label for="brought_back" class="control-label">{{ 'Brought Back' }}</label>
    <input class="form-control" name="brought_back" type="text" id="brought_back" value="{{ isset($export->brought_back) ? $export->brought_back : ''}}" >
    {!! $errors->first('brought_back', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('promote_investment') ? 'has-error' : ''}}">
    <label for="promote_investment" class="control-label">{{ 'Promote Investment' }}</label>
    <input class="form-control" name="promote_investment" type="text" id="promote_investment" value="{{ isset($export->promote_investment) ? $export->promote_investment : ''}}" >
    {!! $errors->first('promote_investment', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('bonded_warehouse') ? 'has-error' : ''}}">
    <label for="bonded_warehouse" class="control-label">{{ 'Bonded Warehouse' }}</label>
    <input class="form-control" name="bonded_warehouse" type="text" id="bonded_warehouse" value="{{ isset($export->bonded_warehouse) ? $export->bonded_warehouse : ''}}" >
    {!! $errors->first('bonded_warehouse', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('claim_duty') ? 'has-error' : ''}}">
    <label for="claim_duty" class="control-label">{{ 'Claim Duty' }}</label>
    <input class="form-control" name="claim_duty" type="text" id="claim_duty" value="{{ isset($export->claim_duty) ? $export->claim_duty : ''}}" >
    {!! $errors->first('claim_duty', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('reimport_reexport') ? 'has-error' : ''}}">
    <label for="reimport_reexport" class="control-label">{{ 'Reimport Reexport' }}</label>
    <input class="form-control" name="reimport_reexport" type="text" id="reimport_reexport" value="{{ isset($export->reimport_reexport) ? $export->reimport_reexport : ''}}" >
    {!! $errors->first('reimport_reexport', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('freezone') ? 'has-error' : ''}}">
    <label for="freezone" class="control-label">{{ 'Freezone' }}</label>
    <input class="form-control" name="freezone" type="text" id="freezone" value="{{ isset($export->freezone) ? $export->freezone : ''}}" >
    {!! $errors->first('freezone', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('epz') ? 'has-error' : ''}}">
    <label for="epz" class="control-label">{{ 'Epz' }}</label>
    <input class="form-control" name="epz" type="text" id="epz" value="{{ isset($export->epz) ? $export->epz : ''}}" >
    {!! $errors->first('epz', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('multiple_boat_declaration') ? 'has-error' : ''}}">
    <label for="multiple_boat_declaration" class="control-label">{{ 'Multiple Boat Declaration' }}</label>
    <input class="form-control" name="multiple_boat_declaration" type="text" id="multiple_boat_declaration" value="{{ isset($export->multiple_boat_declaration) ? $export->multiple_boat_declaration : ''}}" >
    {!! $errors->first('multiple_boat_declaration', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('import_export_date') ? 'has-error' : ''}}">
    <label for="import_export_date" class="control-label">{{ 'Import Export Date' }}</label>
    <input class="form-control" name="import_export_date" type="text" id="import_export_date" value="{{ isset($export->import_export_date) ? $export->import_export_date : ''}}" >
    {!! $errors->first('import_export_date', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('payment_place_code') ? 'has-error' : ''}}">
    <label for="payment_place_code" class="control-label">{{ 'Payment Place Code' }}</label>
    <input class="form-control" name="payment_place_code" type="text" id="payment_place_code" value="{{ isset($export->payment_place_code) ? $export->payment_place_code : ''}}" >
    {!! $errors->first('payment_place_code', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('payment_number') ? 'has-error' : ''}}">
    <label for="payment_number" class="control-label">{{ 'Payment Number' }}</label>
    <input class="form-control" name="payment_number" type="text" id="payment_number" value="{{ isset($export->payment_number) ? $export->payment_number : ''}}" >
    {!! $errors->first('payment_number', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('payment_date') ? 'has-error' : ''}}">
    <label for="payment_date" class="control-label">{{ 'Payment Date' }}</label>
    <input class="form-control" name="payment_date" type="text" id="payment_date" value="{{ isset($export->payment_date) ? $export->payment_date : ''}}" >
    {!! $errors->first('payment_date', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('release_location_code') ? 'has-error' : ''}}">
    <label for="release_location_code" class="control-label">{{ 'Release Location Code' }}</label>
    <input class="form-control" name="release_location_code" type="text" id="release_location_code" value="{{ isset($export->release_location_code) ? $export->release_location_code : ''}}" >
    {!! $errors->first('release_location_code', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('release_date') ? 'has-error' : ''}}">
    <label for="release_date" class="control-label">{{ 'Release Date' }}</label>
    <input class="form-control" name="release_date" type="text" id="release_date" value="{{ isset($export->release_date) ? $export->release_date : ''}}" >
    {!! $errors->first('release_date', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('pickup_location_code') ? 'has-error' : ''}}">
    <label for="pickup_location_code" class="control-label">{{ 'Pickup Location Code' }}</label>
    <input class="form-control" name="pickup_location_code" type="text" id="pickup_location_code" value="{{ isset($export->pickup_location_code) ? $export->pickup_location_code : ''}}" >
    {!! $errors->first('pickup_location_code', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('pickup_date') ? 'has-error' : ''}}">
    <label for="pickup_date" class="control-label">{{ 'Pickup Date' }}</label>
    <input class="form-control" name="pickup_date" type="text" id="pickup_date" value="{{ isset($export->pickup_date) ? $export->pickup_date : ''}}" >
    {!! $errors->first('pickup_date', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('making_year') ? 'has-error' : ''}}">
    <label for="making_year" class="control-label">{{ 'Making Year' }}</label>
    <input class="form-control" name="making_year" type="text" id="making_year" value="{{ isset($export->making_year) ? $export->making_year : ''}}" >
    {!! $errors->first('making_year', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('making_month') ? 'has-error' : ''}}">
    <label for="making_month" class="control-label">{{ 'Making Month' }}</label>
    <input class="form-control" name="making_month" type="text" id="making_month" value="{{ isset($export->making_month) ? $export->making_month : ''}}" >
    {!! $errors->first('making_month', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('weight') ? 'has-error' : ''}}">
    <label for="weight" class="control-label">{{ 'Weight' }}</label>
    <input class="form-control" name="weight" type="text" id="weight" value="{{ isset($export->weight) ? $export->weight : ''}}" >
    {!! $errors->first('weight', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('volume') ? 'has-error' : ''}}">
    <label for="volume" class="control-label">{{ 'Volume' }}</label>
    <input class="form-control" name="volume" type="text" id="volume" value="{{ isset($export->volume) ? $export->volume : ''}}" >
    {!! $errors->first('volume', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('value_in_baht') ? 'has-error' : ''}}">
    <label for="value_in_baht" class="control-label">{{ 'Value In Baht' }}</label>
    <input class="form-control" name="value_in_baht" type="text" id="value_in_baht" value="{{ isset($export->value_in_baht) ? $export->value_in_baht : ''}}" >
    {!! $errors->first('value_in_baht', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('value_in_other') ? 'has-error' : ''}}">
    <label for="value_in_other" class="control-label">{{ 'Value In Other' }}</label>
    <input class="form-control" name="value_in_other" type="text" id="value_in_other" value="{{ isset($export->value_in_other) ? $export->value_in_other : ''}}" >
    {!! $errors->first('value_in_other', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('currency_code') ? 'has-error' : ''}}">
    <label for="currency_code" class="control-label">{{ 'Currency Code' }}</label>
    <input class="form-control" name="currency_code" type="text" id="currency_code" value="{{ isset($export->currency_code) ? $export->currency_code : ''}}" >
    {!! $errors->first('currency_code', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('duty') ? 'has-error' : ''}}">
    <label for="duty" class="control-label">{{ 'Duty' }}</label>
    <input class="form-control" name="duty" type="text" id="duty" value="{{ isset($export->duty) ? $export->duty : ''}}" >
    {!! $errors->first('duty', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('vat') ? 'has-error' : ''}}">
    <label for="vat" class="control-label">{{ 'Vat' }}</label>
    <input class="form-control" name="vat" type="text" id="vat" value="{{ isset($export->vat) ? $export->vat : ''}}" >
    {!! $errors->first('vat', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('excise_tax') ? 'has-error' : ''}}">
    <label for="excise_tax" class="control-label">{{ 'Excise Tax' }}</label>
    <input class="form-control" name="excise_tax" type="text" id="excise_tax" value="{{ isset($export->excise_tax) ? $export->excise_tax : ''}}" >
    {!! $errors->first('excise_tax', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('fee') ? 'has-error' : ''}}">
    <label for="fee" class="control-label">{{ 'Fee' }}</label>
    <input class="form-control" name="fee" type="text" id="fee" value="{{ isset($export->fee) ? $export->fee : ''}}" >
    {!! $errors->first('fee', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('commerce_fee') ? 'has-error' : ''}}">
    <label for="commerce_fee" class="control-label">{{ 'Commerce Fee' }}</label>
    <input class="form-control" name="commerce_fee" type="text" id="commerce_fee" value="{{ isset($export->commerce_fee) ? $export->commerce_fee : ''}}" >
    {!! $errors->first('commerce_fee', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('interior_tax') ? 'has-error' : ''}}">
    <label for="interior_tax" class="control-label">{{ 'Interior Tax' }}</label>
    <input class="form-control" name="interior_tax" type="text" id="interior_tax" value="{{ isset($export->interior_tax) ? $export->interior_tax : ''}}" >
    {!! $errors->first('interior_tax', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('other_tax') ? 'has-error' : ''}}">
    <label for="other_tax" class="control-label">{{ 'Other Tax' }}</label>
    <input class="form-control" name="other_tax" type="text" id="other_tax" value="{{ isset($export->other_tax) ? $export->other_tax : ''}}" >
    {!! $errors->first('other_tax', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('excise_coordinate') ? 'has-error' : ''}}">
    <label for="excise_coordinate" class="control-label">{{ 'Excise Coordinate' }}</label>
    <input class="form-control" name="excise_coordinate" type="text" id="excise_coordinate" value="{{ isset($export->excise_coordinate) ? $export->excise_coordinate : ''}}" >
    {!! $errors->first('excise_coordinate', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('excise_tax_percent') ? 'has-error' : ''}}">
    <label for="excise_tax_percent" class="control-label">{{ 'Excise Tax Percent' }}</label>
    <input class="form-control" name="excise_tax_percent" type="text" id="excise_tax_percent" value="{{ isset($export->excise_tax_percent) ? $export->excise_tax_percent : ''}}" >
    {!! $errors->first('excise_tax_percent', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('excise_tax_condition') ? 'has-error' : ''}}">
    <label for="excise_tax_condition" class="control-label">{{ 'Excise Tax Condition' }}</label>
    <input class="form-control" name="excise_tax_condition" type="text" id="excise_tax_condition" value="{{ isset($export->excise_tax_condition) ? $export->excise_tax_condition : ''}}" >
    {!! $errors->first('excise_tax_condition', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('customs_set') ? 'has-error' : ''}}">
    <label for="customs_set" class="control-label">{{ 'Customs Set' }}</label>
    <input class="form-control" name="customs_set" type="text" id="customs_set" value="{{ isset($export->customs_set) ? $export->customs_set : ''}}" >
    {!! $errors->first('customs_set', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('hscode') ? 'has-error' : ''}}">
    <label for="hscode" class="control-label">{{ 'Hscode' }}</label>
    <input class="form-control" name="hscode" type="text" id="hscode" value="{{ isset($export->hscode) ? $export->hscode : ''}}" >
    {!! $errors->first('hscode', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
