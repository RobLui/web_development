@extends('layouts.app')

@section('content')
    <div class="container">
        @include("common.messages")
        @include("common.errors")
        <div class="row">
            <div class="col-sm-8 col-sm-offset-4">
                <h2>Wedstrijd pagina</h2>
                {!! Form::open(array('route' => 'create_competition','class' => 'form-horizontal')) !!}
                    {{ csrf_field() }}
                    <div class="form-group col-sm-7">
                        {{ Form::label('explanation', 'Uitleg', array('class' => 'form-group col-sm-12')) }}
                        {{ Form::text('explanation', '', array('class' => 'form-control field col-sm-12')) }}
                    </div>
                    <div class="form-group col-sm-7">
                        {{ Form::label('prizes', 'Prijzen', array('class' => 'form-group col-sm-12')) }}
                        {{ Form::text("prizes",'',array('class' => 'form-control col-sm-12')) }}
                    </div>
                    <div class="form-group col-sm-7">
                        {{ Form::label('previous_participants', 'Vorige deelnemers', array('class' => 'form-group col-sm-12')) }}
                        {{ Form::text("previous_participants",'',array('class' => 'form-control col-sm-12')) }}
                    </div>
                    <div class="form-group col-sm-7">
                        {{ Form::submit('Toevoegen', array('class' => 'btn btn-primary btn-sm')) }}
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection