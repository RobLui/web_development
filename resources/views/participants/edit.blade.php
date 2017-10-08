@extends('layouts.app')

@section('content')
    <div class="container">
        <a href="{{ url()->previous() }}" class="btn btn-secondary">< vorige</a>
        @include("common.messages")
        @include("common.errors")
            <div class="row">
            <div class="col-md-12">
                <div class="content">
                    <h2 class="push">Deelnemersformulier</h2>
                        {!! Form::open(array(route('edit_participants',$participant->id) ,'class' => 'form-horizontal')) !!}
                        <div class="col-md-6">
                            <div class="col-md-5 col-md-offset-1 pull-right">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    {{ Form::label('firstname', 'Voornaam', array('class' => 'control-label pull-left')) }}
                                    <input type="text" class="form-control" name="firstname" value="{{$participant->firstname}}">
                                </div>
                                <div class="form-group">
                                    {{ Form::label('lastname', 'Achternaam', array('class' => 'control-label pull-left')) }}
                                    <input type="text" class="form-control" name="lastname" value="{{$participant->lastname}}">
                                </div>
                                <div class="form-group">
                                    {{ Form::label('age', 'Leeftijd', array('class' => 'control-label pull-left')) }}
                                    <input type="text" class="form-control" name="age" value="{{$participant->age}}">
                                </div>
                                <div class="form-group">
                                    {{ Form::label('email', 'Email', array('class' => 'control-label pull-left')) }}
                                    <input type="text" class="form-control" name="email" value="{{$participant->email}}">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="col-md-5 col-md-offset-1">
                                <div class="form-group">
                                    {{ Form::label('adress', 'Straatnaam', array('class' => 'control-label pull-left')) }}
                                    <input type="text" class="form-control" name="adress" value="{{$participant->adress}}">
                                </div>
                                <div class="form-group">
                                    {{ Form::label('housenumber', 'Nummer', array('class' => 'control-label pull-left')) }}
                                    <input type="text" class="form-control" name="housenumber" value="{{$participant->housenumber}}">
                                </div>
                                <div class="form-group">
                                    {{ Form::label('postalcode', 'Postcode', array('class' => 'control-label pull-left')) }}
                                    <input type="text" class="form-control" name="postalcode" value="{{$participant->postalcode}}">
                                </div>
                                <div class="form-group">
                                    {{ Form::label('municipality', 'Gemeente', array('class' => 'control-label pull-left' )) }}
                                    <input type="text" class="form-control" name="municipality" value="{{$participant->municipality}}">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                {{ Form::label('has_permission', 'Toestemming', array('class' => 'control-label pull-left' )) }}
                                <input type="checkbox" class="form-control checkbox" name="has_permission" id="has_permission">
                            </div>
                        </div>
                            <div class="form-group">
                                {{ Form::submit('aanpassen', array('class' => 'btn btn-primary')) }}
                            </div>
                        {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
