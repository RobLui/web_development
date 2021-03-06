@extends('layouts.app')

@section('content')
    <div class="container">
        @include("common.messages")
        @include("common.errors")
        <div class="row">
            {{--TEMPORARY--}}
            <div class="col-sm-12">
                <a href="{{ route('dashboard') }}" class="btn btn-secondary">&#8592; terug naar dashboard</a>
                @if(Auth::check())
                    {!! Form::open(array('route' => 'create_excel')) !!}
                        {{ Form::submit('Download Excel', array('class' => 'btn btn-primary pull-right')) }}
                    {!! Form::close() !!}

                    {!! Form::open(array('route' => 'send_mail')) !!}
                        {{ Form::submit('Verstuur mail', array('class' => 'btn btn-primary pull-right')) }}
                    {!! Form::close() !!}
                @endif
                <h2>Deelnemers:</h2>
                @if($parts)
                    @foreach($parts as $part )
                        <div class="col-sm-4">
                            <ul class="list-group">
                                <li class="list-group-item">Naam: {{ $part->firstname }} {{ $part->lastname }}</li>
                                <li class="list-group-item">Leeftijd: {{$part->age}}</li>
                                <li class="list-group-item">E-mail: {{ $part->email }}</li>
                                <li class="list-group-item">Adres: {{$part->adress}} {{$part->housenumber}}</li>
                                <li class="list-group-item">Gemeente: {{$part->postalcode}} {{$part->municipality}}</li>
                                <li class="list-group-item">IP: {{ $part->ipadress }}</li>
                                <li class="list-group-item">Kan winnen:
                                    @if($part->has_permission)
                                        Ja
                                        @else
                                        Nee
                                    @endif
                                </li>
                                @if(Auth::check())
                                    <li class="list-group-item">
                                        <a class="btn btn-primary btn-sm" href="{{ route('edit_participants', $part->id) }}">aanpassen</a>
                                        <a class="btn btn-danger btn-sm" href="{{ route('delete_participant', $part->id) }}">delete</a>
                                    </li>
                                @endif
                            </ul>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
@endsection