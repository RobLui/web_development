@extends('layouts.app')

@section('content')
    <div class="container">
        @include("common.messages")
        @include("common.errors")
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <h2 class="col-md-12">Deelnemers:</h2>
                <div class="col-md-4">
                    @if($parts)
                        @foreach($parts as $part )
                            <ul class="list-group">
                                <li class="list-group-item">Naam: {{ $part->firstname }} {{ $part->lastname }}</li>
                                <li class="list-group-item">Leeftijd: {{$part->age}}</li>
                                <li class="list-group-item">E-mail: {{ $part->email }}</li>
                                <li class="list-group-item">Adres: {{$part->adress}} {{$part->housenumber}}</li>
                                <li class="list-group-item">Gemeente: {{$part->postalcode}} {{$part->municipality}}</li>
                                <li class="list-group-item">IP: {{ $part->ipadress }}</li>
                            </ul>
                        @endforeach
                    @endif
                    {{--TEMPORARY--}}
                    @if(auth::user()->email == "robbertluit@hotmail.com")
                        {!! Form::open(array('route' => 'create_excel')) !!}
                            {{ Form::submit('Download excel', array('class' => 'btn btn-primary pull-left')) }}
                        {!! Form::close() !!}
                        {!! Form::open(array('route' => 'send_mail')) !!}
                            {{ Form::submit('Send mail', array('class' => 'btn btn-primary pull-right')) }}
                        {!! Form::close() !!}
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection