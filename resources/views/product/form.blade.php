<div class="form-group {{ $errors->has('harvest_date') ? 'has-error' : ''}}">
    <label for="harvest_date" class="control-label">{{ 'Harvest Date' }}</label>
    <input class="form-control" name="harvest_date" type="text" id="harvest_date" value="{{ isset($product->harvest_date) ? $product->harvest_date : ''}}" >
    {!! $errors->first('harvest_date', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('area') ? 'has-error' : ''}}">
    <label for="area" class="control-label">{{ 'Area' }}</label>
    <input class="form-control" name="area" type="text" id="area" value="{{ isset($product->area) ? $product->area : ''}}" >
    {!! $errors->first('area', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('resource_name') ? 'has-error' : ''}}">
    <label for="resource_name" class="control-label">{{ 'Resource Name' }}</label>
    <input class="form-control" name="resource_name" type="text" id="resource_name" value="{{ isset($product->resource_name) ? $product->resource_name : ''}}" >
    {!! $errors->first('resource_name', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('label') ? 'has-error' : ''}}">
    <label for="label" class="control-label">{{ 'Label' }}</label>
    <input class="form-control" name="label" type="text" id="label" value="{{ isset($product->label) ? $product->label : ''}}" >
    {!! $errors->first('label', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('volume') ? 'has-error' : ''}}">
    <label for="volume" class="control-label">{{ 'Volume' }}</label>
    <input class="form-control" name="volume" type="text" id="volume" value="{{ isset($product->volume) ? $product->volume : ''}}" >
    {!! $errors->first('volume', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('freq') ? 'has-error' : ''}}">
    <label for="freq" class="control-label">{{ 'Freq' }}</label>
    <input class="form-control" name="freq" type="text" id="freq" value="{{ isset($product->freq) ? $product->freq : ''}}" >
    {!! $errors->first('freq', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
