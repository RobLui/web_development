@extends('layouts.app')

@section('content')
    @if($mm)
            <div class="container">
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
            <div class="col-md-4 col-md-offset-4">
                <h2 class="text-center" >Email managers</h2>
                {!! Form::open(array('route' => 'create_email_manager','class' => 'form-horizontal')) !!}
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
        </div>
    </div>
@endsection
