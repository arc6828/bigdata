<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    <label for="name" class="control-label">{{ 'Name' }}</label>
    <input class="form-control" name="name" type="text" id="name" value="{{ isset($product->name) ? $product->name : ''}}" >
    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('year') ? 'has-error' : ''}}">
    <label for="year" class="control-label">{{ 'Year' }}</label>
    <input class="form-control" name="year" type="text" id="year" value="{{ isset($product->year) ? $product->year : ''}}" >
    {!! $errors->first('year', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('month') ? 'has-error' : ''}}">
    <label for="month" class="control-label">{{ 'Month' }}</label>
    <input class="form-control" name="month" type="text" id="month" value="{{ isset($product->month) ? $product->month : ''}}" >
    {!! $errors->first('month', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('place') ? 'has-error' : ''}}">
    <label for="place" class="control-label">{{ 'Place' }}</label>
    <input class="form-control" name="place" type="text" id="place" value="{{ isset($product->place) ? $product->place : ''}}" >
    {!! $errors->first('place', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('output') ? 'has-error' : ''}}">
    <label for="output" class="control-label">{{ 'Output' }}</label>
    <input class="form-control" name="output" type="text" id="output" value="{{ isset($product->output) ? $product->output : ''}}" >
    {!! $errors->first('output', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('unit') ? 'has-error' : ''}}">
    <label for="unit" class="control-label">{{ 'Unit' }}</label>
    <input class="form-control" name="unit" type="text" id="unit" value="{{ isset($product->unit) ? $product->unit : ''}}" >
    {!! $errors->first('unit', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
