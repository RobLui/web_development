@extends('layouts.app')
@section('content')

    @include("common.messages")
    @foreach($parts as $part )
        <div class="col-sm-4">
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
@endsection