@extends('layouts.app')

@section('content')

    @include("common.messages")
    <div class="col-md-4 col-md-offset-4 text-center">
        <h2>Guide</h2>
        {!! Form::open(array('route' => 'competitioncreate','class' => 'form-horizontal')) !!}

            <div class="form-group">
                {{ Form::label('Uitleg'), 'explanation' }}
                {{ Form::text("explanation"),array('class' => 'form-control') }}
            </div>
            <div class="form-group">
                {{ Form::label('Prijzen'), 'prizes' }}
                {{ Form::text("prizes"),array('class' => 'form-control') }}
            </div>
            <div class="form-group">
                {{ Form::label('Vorige deelnemers'), 'previous_participants' }}
                {{ Form::text("previous_participants"),array('class' => 'form-control') }}
            </div>
            {{ Form::submit('IK DOE MEE!', array('class' => 'btn btn-primary')) }}

        {!! Form::close() !!}
    </div>

@endsection