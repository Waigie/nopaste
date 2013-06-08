@extends('layouts.base')


@section('content')
<form class="form-horizontal">
    <fieldset>
        <legend><em>New</em> paste</legend>
        <textarea placeholder="paste"></textarea>
    </fieldset>
    <fieldset>
        <legend><em>Optional</em> Settings</legend>
        <div class="control-group">
            <label class="control-label" for="title">Title</label>
            <div class="controls">
                <input type="text" id="title" placeholder="title">
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="language">Language</label>

            <div class="controls">
                <select id="language"></select>
            </div>
        </div>
        <div class="control-group">
            <div class="controls">
                <input type="submit" value="submit" class="btn-large btn-primary">
            </div>
        </div>
    </fieldset>
</form>
@stop