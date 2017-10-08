@extends('layouts.app')

@section('content')
    <div class="container">
        <a href="{{ url()->previous() }}" class="btn btn-secondary">< vorige</a>
        @include("common.messages")
        @include("common.errors")
        <div class="row">
            <div class="content">
                <h2 class="push">Deelnemersformulier</h2>
                <div class="col-md-12">
                        {!! Form::open(array('route' => 'create_participants','class' => 'form-horizontal')) !!}
                            <div class="col-md-3 col-md-offset-3">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    {{ Form::label('firstname', 'Voornaam', array('class' => 'control-label  pull-left')) }}
                                    {{ Form::input('firstname', 'firstname', null, ['class' => 'form-control']) }}
                                </div>
                                <div class="form-group">
                                    {{ Form::label('lastname', 'Achternaam', array('class' => 'control-label pull-left')) }}
                                    {{ Form::input('lastname', 'lastname', null, ['class' => 'form-control']) }}
                                </div>
                                <div class="form-group">
                                    {{ Form::label('age', 'Leeftijd', array('class' => 'control-label pull-left')) }}
                                    {{ Form::input('age', 'age', null, ['class' => 'form-control']) }}
                                </div>
                                <div class="form-group">
                                    {{ Form::label('email', 'Email', array('class' => 'control-label pull-left')) }}
                                    {{ Form::input('email', 'email', null, ['class' => 'form-control']) }}
                                </div>
                            </div>
                            <div class="col-md-3 col-md-offset-0">
                                <div class="form-group">
                                    {{ Form::label('adress', 'Straatnaam', array('class' => 'control-label pull-left')) }}
                                    {{ Form::input('adress', 'adress', null, ['class' => 'form-control']) }}
                                </div>
                                <div class="form-group">
                                    {{ Form::label('housenumber', 'Nummer', array('class' => 'control-label pull-left')) }}
                                    {{ Form::input('housenumber', 'housenumber', null, ['class' => 'form-control']) }}
                                </div>
                                <div class="form-group">
                                    {{ Form::label('postalcode', 'Postcode', array('class' => 'control-label pull-left')) }}
                                    {{ Form::input('postalcode', 'postalcode', null, ['class' => 'form-control']) }}
                                </div>
                                <div class="form-group">
                                    {{ Form::label('municipality', 'Gemeente', array('class' => 'control-label pull-left')) }}
                                    {{ Form::input('municipality', 'municipality', null, ['class' => 'form-control']) }}
                                </div>
                            </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                {{ Form::submit('IK DOE MEE!', array('class' => 'btn btn-primary')) }}
                            </div>
                        </div>
                        {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection