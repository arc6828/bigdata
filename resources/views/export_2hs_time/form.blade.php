<div class="form-group {{ $errors->has('year_at') ? 'has-error' : ''}}">
    <label for="year_at" class="control-label">{{ 'Year At' }}</label>
    <input class="form-control" name="year_at" type="text" id="year_at" value="{{ isset($export_2hs_time->year_at) ? $export_2hs_time->year_at : ''}}" >
    {!! $errors->first('year_at', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('exporter') ? 'has-error' : ''}}">
    <label for="exporter" class="control-label">{{ 'Exporter' }}</label>
    <input class="form-control" name="exporter" type="text" id="exporter" value="{{ isset($export_2hs_time->exporter) ? $export_2hs_time->exporter : ''}}" >
    {!! $errors->first('exporter', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('importer') ? 'has-error' : ''}}">
    <label for="importer" class="control-label">{{ 'Importer' }}</label>
    <input class="form-control" name="importer" type="text" id="importer" value="{{ isset($export_2hs_time->importer) ? $export_2hs_time->importer : ''}}" >
    {!! $errors->first('importer', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('hscode') ? 'has-error' : ''}}">
    <label for="hscode" class="control-label">{{ 'Hscode' }}</label>
    <input class="form-control" name="hscode" type="text" id="hscode" value="{{ isset($export_2hs_time->hscode) ? $export_2hs_time->hscode : ''}}" >
    {!! $errors->first('hscode', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('value') ? 'has-error' : ''}}">
    <label for="value" class="control-label">{{ 'Value' }}</label>
    <input class="form-control" name="value" type="number" id="value" value="{{ isset($export_2hs_time->value) ? $export_2hs_time->value : ''}}" >
    {!! $errors->first('value', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('unit') ? 'has-error' : ''}}">
    <label for="unit" class="control-label">{{ 'Unit' }}</label>
    <input class="form-control" name="unit" type="text" id="unit" value="{{ isset($export_2hs_time->unit) ? $export_2hs_time->unit : ''}}" >
    {!! $errors->first('unit', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('trade_type') ? 'has-error' : ''}}">
    <label for="trade_type" class="control-label">{{ 'Trade Type' }}</label>
    <input class="form-control" name="trade_type" type="text" id="trade_type" value="{{ isset($export_2hs_time->trade_type) ? $export_2hs_time->trade_type : ''}}" >
    {!! $errors->first('trade_type', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
