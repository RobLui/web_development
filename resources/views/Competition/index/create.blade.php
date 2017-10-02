@extends('layouts.app')

@section('content')
    <div class="container">
        @include("common.messages")
        @include("common.errors")
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <h2>Wedstrijd pagina</h2>
                {!! Form::open(array('route' => 'competitioncreate','class' => 'form-horizontal')) !!}
                    {{ csrf_field() }}
                    <div class="col-md-4">
                        {{ Form::label('explanation'),array('class' =>  'form-control' )}}
                        {{ Form::textarea("explanation"),array('class' => 'form-control') }}
                    </div>
                    <div class="col-md-4">
                        {{ Form::label('prizes'),array('class' => 'form-group') }}
                        {{ Form::textarea("prizes"),array('class' => 'form-control') }}
                    </div>
                    <div class="col-md-4">
                        {{ Form::label('previous_participants'),array('class' => 'form-group') }}
                        {{ Form::textarea("previous_participants"),array('class' => 'form-control') }}
                    </div>
                    <div class="col-md-4">
                        {{ Form::submit('Toevoegen', array('class' => 'btn btn-secondary')) }}
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection