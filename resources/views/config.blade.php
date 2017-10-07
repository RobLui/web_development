@extends('layouts.app')

@section('content')
    <div class="container">
        @if($mm)
            @include("common.messages")
            @include("common.errors")
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <ul>
                        @foreach($mm as $manager)
                        <div class="col-md-4">
                            <ul class="list-group">
                                <li class="list-group-item">{{ $manager->name }}</li>
                                <li class="list-group-item">{{ $manager->email }}</li>
                            </ul>
                        </div>
                        @endforeach
                    </ul>
                </div>
            </div>
        @endif
        <div class="row">
            {{-- --}}
            <div class="col-md-4 col-md-offset-2">
                <h2>Email managers</h2>
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
            </div>
            {{-- --}}
            <div class="col-md-4">
                <h2>Configureer periodes</h2>
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
                        {{ Form::submit('submit', array('class' => 'btn btn-primary')) }}
                    </div>
                {!! Form::close() !!}

                @if(count($periods) > 0)
                    <ul>
                        @foreach($periods as $p)
                            <div class="col-md-4">
                                <ul class="list-group">
                                    <li class="list-group-item">{{ $p }}</li>
                                </ul>
                            </div>
                        @endforeach
                    </ul>
                @endif
            </div>
        </div>
    </div>
@endsection
