<div class="form-group {{ $errors->has('hscode') ? 'has-error' : ''}}">
    <label for="hscode" class="control-label">{{ 'Hscode' }}</label>
    <input class="form-control" name="hscode" type="text" id="hscode" value="{{ isset($export_2h->hscode) ? $export_2h->hscode : ''}}" >
    {!! $errors->first('hscode', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('product') ? 'has-error' : ''}}">
    <label for="product" class="control-label">{{ 'Product' }}</label>
    <input class="form-control" name="product" type="text" id="product" value="{{ isset($export_2h->product) ? $export_2h->product : ''}}" >
    {!! $errors->first('product', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('html_title') ? 'has-error' : ''}}">
    <label for="html_title" class="control-label">{{ 'Html Title' }}</label>
    <textarea class="form-control" rows="5" name="html_title" type="textarea" id="html_title" >{{ isset($export_2h->html_title) ? $export_2h->html_title : ''}}</textarea>
    {!! $errors->first('html_title', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('html_data') ? 'has-error' : ''}}">
    <label for="html_data" class="control-label">{{ 'Html Data' }}</label>
    <textarea class="form-control" rows="5" name="html_data" type="textarea" id="html_data" >{{ isset($export_2h->html_data) ? $export_2h->html_data : ''}}</textarea>
    {!! $errors->first('html_data', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('json') ? 'has-error' : ''}}">
    <label for="json" class="control-label">{{ 'Json' }}</label>
    <textarea class="form-control" rows="5" name="json" type="textarea" id="json" >{{ isset($export_2h->json) ? $export_2h->json : ''}}</textarea>
    {!! $errors->first('json', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('scraping_date') ? 'has-error' : ''}}">
    <label for="scraping_date" class="control-label">{{ 'Scraping Date' }}</label>
    <input class="form-control" name="scraping_date" type="datetime-local" id="scraping_date" value="{{ isset($export_2h->scraping_date) ? $export_2h->scraping_date : ''}}" >
    {!! $errors->first('scraping_date', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
