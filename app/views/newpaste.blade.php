@extends('layouts.base')


@section('content')
{{ Form::open(array('method' => 'post', 'action' =>'PasteController@newPaste', 'class' => 'form-horizontal'))}}
    <fieldset>
        <legend><em>New</em> paste</legend>
        @foreach($errors->getMessages() as $error)
        <div class="alert alert-error">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>ERROR</strong> {{ $error[0] }}
        </div>
        @endforeach
        {{ Form::textarea('paste', Input::old('paste'), array('placeholder' => 'paste')) }}
    </fieldset>
    <fieldset>
        <legend><em>Optional</em> settings</legend>
        <div class="control-group">
            {{ Form::label('title', 'Title', array('class' => 'control-label')) }}
            <div class="controls">
                {{ Form::text('title', Input::old('title') , array('placeholder' => 'title')) }}
            </div>
        </div>
        <div class="control-group">
            {{ Form::label('language', 'Language', array('class' => 'control-label')) }}
            <div class="controls">
                {{ Form::select('language', LuminousViewHelper::options(), Input::old('language', 'plain')) }}
            </div>
        </div>
        <div class="control-group">
            <div class="controls">
                {{ Form::submit('submit', array('class'=>'btn-large btn-primary'))}}
            </div>
        </div>
    </fieldset>
{{ Form::close() }}
@stop