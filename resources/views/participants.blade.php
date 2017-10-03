@extends('layouts.app')

@section('content')
    <div class="container">
        @include("common.messages")
        @include("common.errors")
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <h2 class="col-md-12">Deelnemers:</h2>
                @if($parts)
                    @foreach($parts as $part )
                        <div class="col-md-4">
                            <ul class="list-group">
                                <li class="list-group-item">Naam: {{ $part->firstname }} {{ $part->lastname }}</li>
                                <li class="list-group-item">Leeftijd: {{$part->age}}</li>
                                <li class="list-group-item">E-mail: {{ $part->email }}</li>
                                <li class="list-group-item">Adres: {{$part->adress}} {{$part->housenumber}}</li>
                                <li class="list-group-item">Gemeente: {{$part->postalcode}} {{$part->municipality}}</li>
                                <li class="list-group-item">IP: {{ $part->ipadress }}</li>
                            </ul>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            {!! Form::open(array('route' => 'drukknop')) !!}
                <div class="col-md-4">
                {{ Form::submit('download excel', array('class' => 'btn btn-primary')) }}
                </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection