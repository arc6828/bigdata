<div class="form-group {{ $errors->has('code') ? 'has-error' : ''}}">
    <label for="code" class="control-label">{{ 'Code' }}</label>
    <input class="form-control" name="code" type="text" id="code" value="{{ isset($country->code) ? $country->code : ''}}" >
    {!! $errors->first('code', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    <label for="name" class="control-label">{{ 'Name' }}</label>
    <input class="form-control" name="name" type="text" id="name" value="{{ isset($country->name) ? $country->name : ''}}" >
    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('iso_code') ? 'has-error' : ''}}">
    <label for="iso_code" class="control-label">{{ 'Iso Code' }}</label>
    <input class="form-control" name="iso_code" type="text" id="iso_code" value="{{ isset($country->iso_code) ? $country->iso_code : ''}}" >
    {!! $errors->first('iso_code', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('iso_name') ? 'has-error' : ''}}">
    <label for="iso_name" class="control-label">{{ 'Iso Name' }}</label>
    <input class="form-control" name="iso_name" type="text" id="iso_name" value="{{ isset($country->iso_name) ? $country->iso_name : ''}}" >
    {!! $errors->first('iso_name', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('parentCode') ? 'has-error' : ''}}">
    <label for="parentCode" class="control-label">{{ 'Parentcode' }}</label>
    <input class="form-control" name="parentCode" type="text" id="parentCode" value="{{ isset($country->parentCode) ? $country->parentCode : ''}}" >
    {!! $errors->first('parentCode', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('parentName') ? 'has-error' : ''}}">
    <label for="parentName" class="control-label">{{ 'Parentname' }}</label>
    <input class="form-control" name="parentName" type="text" id="parentName" value="{{ isset($country->parentName) ? $country->parentName : ''}}" >
    {!! $errors->first('parentName', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
