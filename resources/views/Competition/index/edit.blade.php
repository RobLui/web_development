@extends('layouts.app')

@section('content')
    @if(count($competition) > 0)
        <div class="container">
            @include("common.messages")
            @include("common.errors")
            {{--{{$competition->id}}--}}
            <a href="{{ route('show_competition') }}" class="btn btn-secondary">&#8592; terug</a>
            <div class="row">
                <div class="col-sm-4 col-sm-offset-4 text-left">
                    <h2 class="text-center" >Wedstrijd aanpassen</h2>
                    {!! Form::open(array('route' => 'edit_competition','class' => 'form-horizontal')) !!}
                        {{ csrf_field() }}
                        <div class="form-group">
                            {{ Form::label('Uitleg'), "explanation" }}
                            <input type="text" class="form-control" name="explanation" id="explanation" value="{{$competition->explanation}}">
                        </div>
                        <div class="form-group">
                            {{ Form::label('Uitleg prijs'), "prizes" }}
                            <input type="text" class="form-control" name="prizes" id="prizes" value="{{$competition->prizes}}">
                        </div>
                        <div class="form-group">
                            {{ Form::submit('submit', array('class' => 'btn btn-primary')) }}
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    @endif
@endsection