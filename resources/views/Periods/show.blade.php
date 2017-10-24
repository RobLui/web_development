@extends('layouts.app')

@section('content')
    <div class="container">
        <a href="{{ route('dashboard') }}" class="btn btn-secondary">&#8592; terug</a>
        @include("common.messages")
        @include("common.errors")
        <div class="row">
            <div class="col-sm-4 col-sm-offset-4">
                <h2 class="text-center" >Periode aanpassen</h2>
                {!! Form::open(array('url' => ('/periods/edit/' . $period->id),'class' => 'form-horizontal')) !!}
                    {{ csrf_field() }}
                    <div class="form-group">
                        {{ Form::label('prize', 'Prijs', array('class' => 'control-label')) }}
                        <input type="text" class="form-control" name="prize" id="prize" value="{{$period->prize}}">
                    </div>
                    <div class="form-group">
                        {{ Form::label('startDate', 'Start', array('class' => 'control-label')) }}
                        <input type="text" class="form-control" name="startDate" id="startDate" value="{{date('d-m-Y', strtotime($period->startDate))}}">
                    </div>
                    <div class="form-group">
                        {{ Form::label('endDate', 'Eind', array('class' => 'control-label')) }}
                        <input type="text" class="form-control" name="endDate" id="endDate" value="{{date('d-m-Y', strtotime($period->endDate))}}">
                    </div>
                    <div class="form-group hidden">
                        {{ Form::select('competition_id', [$period->competition_id => $period->competition_id]) }}
                    </div>
                    <div class="form-group">
                        {{ Form::submit('submit', array('class' => 'btn btn-primary')) }}
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection