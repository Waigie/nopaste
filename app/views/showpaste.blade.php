@extends('layouts.base')

@section('content')
@if($new)
{{ Form::open(array('class' => 'form-horizontal', 'id' => 'copy-form'))}}
    <fieldset>
        <legend><em>Link</em></legend>
        <div class="control-group">
            <label class="control-label" for="url">Link</label>
            <div class="controls">
                <div class="input-append">
                    {{ Form::text('url', Request::url(), array('placeholder' => 'title', 'id' => 'url', 'class' => 'span5', 'disabled'=>'true')) }}
                    {{ Form::button('Shorten link', array('class' => 'btn', 'id' => 'shorten')) }}
                    {{ Form::button('Copy to clipboard', array('class' => 'btn btn-primary', 'id' => 'copy', 'data-clipboard-text' => Request::url() )) }}
                </div>
            </div>
        </div>
    </fieldset>
{{ Form::close() }}
@endif
<h1><em>[{{ LuminousViewHelper::languageFromCode($paste->language) }}]</em>
    @if (empty($paste->title))
        Untitled
    @else
        {{{ $paste->title }}}
    @endif
</h1>
{{ LuminousViewHelper::highlight($paste->language, $paste->paste) }}
@stop

@section('js')
<script src="/ZeroClipboard/ZeroClipboard.min.js"></script>
<script src="/ZeroClipboard/main.js"></script>
<script src="/nopaste/js/shorten.js"></script>
@stop