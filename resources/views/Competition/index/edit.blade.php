@extends('layouts.app')

@section('content')

    @include("common.messages")
    <div class="col-md-4 col-md-offset-4 text-center">
        <h2>Guide</h2>
        {!! Form::open(array('route' => 'competitionedit','class' => 'form-horizontal')) !!}
            <div class="form-group">
                {{ Form::label('Uitleg'), "explanation" }}
                <input type="text" name="explanation" id="explanation" value="{{$competition->explanation}}">
            </div>
            <div class="form-group">
                {{ Form::label('Prijzen'), "prizes" }}
                <input type="text" name="prizes" id="prizes" value="{{$competition->prizes}}">
            </div>
            <div class="form-group">
                {{ Form::label('Vorige deelnemers'), "previous_participants" }}
                <input type="text" name="previous_participants" id="previous_participants" value="{{$competition->prizes}}">
            </div>
            {{ Form::submit('UPDATE', array('class' => 'btn btn-primary')) }}
        {!! Form::close() !!}
    </div>

@endsection