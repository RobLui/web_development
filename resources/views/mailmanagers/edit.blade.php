@extends('layouts.app')

@section('content')
    @if($mm)
        <div class="container">
            <a href="{{ route('config') }}" class="btn btn-secondary">< instellingen</a>
            @include("common.messages")
            @include("common.errors")
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <h2 class="text-center" >Manager Aanpassen</h2>
                    {!! Form::open(array(route('edit_questions',$mm->id) ,'class' => 'form-horizontal')) !!}
                    {{ csrf_field() }}
                    <div class="form-group">
                        {{ Form::label('name'), "Naam" }}
                        <input type="text" class="form-control" name="name" id="name" value="{{$mm->name}}">
                    </div>
                    <div class="form-group">
                        {{ Form::label('email'), "E-mail" }}
                        <input type="text" class="form-control" name="email" id="email" value="{{$mm->email}}">
                    </div>
                    <div class="form-group">
                        {{ Form::label('Competitie ID'), "competition_id" }}
                        @foreach($comps as $c)
                            {{ Form::select('competition_id', [$c->id => $c->id]) }}
                        @endforeach
                    </div>
                    <div class="form-group">
                        {{ Form::label('active'), "Actief" }}
                        <input type="checkbox" class="form-control" name="active" id="active" value="{{$mm->active}}">
                    </div>
                    <div class="form-group">
                        {{ Form::submit('opslaan', array('class' => 'btn btn-primary')) }}
                        <a href="{{ route('delete_email_manager', $mm->id) }}" class="btn btn-danger pull-right">delete</a>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>

    @endif
@endsection