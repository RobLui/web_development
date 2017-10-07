@extends('layouts.app')

@section('content')
    <div class="container">
        @include("common.messages")
        @include("common.errors")

        <div class="row">
            {{-- --}}
            <div class="col-md-4 col-md-offset-2">
                <h2>E-mail Managers</h2>
                {!! Form::open(array('route' => 'create_email_manager')) !!}
                    {{ csrf_field() }}
                    <div class="form-group">
                        {{ Form::label('Naam'), "name" }}
                        <input type="text" class="form-control" name="name" id="name">
                    </div>
                    <div class="form-group">
                        {{ Form::label('Email'), "email" }}
                        <input type="text" class="form-control" name="email" id="email">
                    </div>
                    <div class="form-group">
                        {{ Form::label('Competitie ID'), "competition_id" }}
                        @foreach($comps as $c)
                            {{ Form::select('competition_id', [$c->id => $c->id]) }}
                        @endforeach
                    </div>
                    <div class="form-group">
                        {{ Form::submit('submit', array('class' => 'btn btn-primary')) }}
                    </div>
                {!! Form::close() !!}
                @if($mm)
                    @foreach($mm as $manager)
                    <ul class="list-group">
                        <li class="list-group-item">Naam: {{ $manager->name }}</li>
                        <li class="list-group-item">E-mail: {{ $manager->email }}</li>
                    </ul>
                    @endforeach
                @endif
            </div>

            {{-- --}}
            <div class="col-md-4">
                <h2>Periodes</h2>
                {!! Form::open(array('route' => 'create_period')) !!}
                    {{ csrf_field() }}
                    <div class="form-group">
                        {{ Form::label('Start'), "startDate" }}
                        <input type="text" class="form-control" name="startDate" id="startDate">
                    </div>
                    <div class="form-group">
                        {{ Form::label('Eind'), "endDate" }}
                        <input type="text" class="form-control" name="endDate" id="endDate">
                    </div>
                    <div class="form-group">
                        {{ Form::label('Prijs'), "prize" }}
                        <input type="text" class="form-control" name="prize" id="prize">
                    </div>
                    <div class="form-group">
                        {{ Form::label('Competitie ID'), "competition_id" }}
                        @foreach($comps as $c)
                            {{ Form::select('competition_id', [$c->id => $c->id]) }}
                        @endforeach
                    </div>

                    <div class="form-group">
                        {{ Form::submit('submit', array('class' => 'btn btn-primary')) }}
                    </div>
                {!! Form::close() !!}

                @if(count($periods) > 0)
                    @foreach($periods as $p)
                        <ul class="list-group">
                            <li class="list-group-item">
                               ID: {{$p->id}}
                            </li>
                            <li class="list-group-item">
                                start: {{ $p->startDate }}
                            </li>
                            <li class="list-group-item">
                                eind: {{ $p->startDate }}
                            </li>
                            <li class="list-group-item">
                                prijs: {{  $p->prize}}
                            </li>
                        </ul>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
@endsection
