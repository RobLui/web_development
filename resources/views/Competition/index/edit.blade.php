@extends('layouts.app')

@section('content')

    @include("common.messages")
    <div class="col-md-4 col-md-offset-4">
        <h2 class="text-center" >Guide</h2>
        {!! Form::open(array('route' => 'competitionedit','class' => 'form-horizontal')) !!}
            <div class="form-group">
                {{ Form::label('Uitleg'), "explanation" }}
                <input type="text" class="form-control" name="explanation" id="explanation" value="{{$competition->explanation}}">
            </div>
            <div class="form-group">
                {{ Form::label('Prijzen'), "prizes" }}
                <input type="text" class="form-control" name="prizes" id="prizes" value="{{$competition->prizes}}">
            </div>
            <div class="form-group">
                {{ Form::label('Vorige deelnemers'), "previous_participants" }}
                <input type="text" class="form-control" name="previous_participants" id="previous_participants" value="{{$competition->previous_participants}}">
            </div>
            <div class="form-group">
                {{ Form::submit('submit', array('class' => 'btn btn-secondary')) }}
            </div>
        {!! Form::close() !!}
    </div>

@endsection