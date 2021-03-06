@extends('layouts.app')

@section('content')
    @if($question)
    <div class="container">
        <div class="col-sm-12">
            <a href="{{ route('show_questions') }}" class="btn btn-secondary">&#8592; terug naar vraag</a>
            @include("common.messages")
            @include("common.errors")
            <div class="row">
                <div class="col-sm-4 col-sm-offset-4">
                    <h2 class="text-center" >Vraag Aanpassen</h2>
                    {!! Form::open(array(route('edit_questions',$question->id) ,'class' => 'form-horizontal')) !!}
                        {{ csrf_field() }}
                        <div class="form-group">
                            {{ Form::label('Categorie'), "category" }}
                            <input type="text" class="form-control" name="category" id="category" value="{{$question->category}}">
                        </div>
                        <div class="form-group">
                            {{ Form::label('Titel'), "title" }}
                            <input type="text" class="form-control" name="title" id="title" value="{{$question->title}}">
                        </div>
                        <div class="form-group">
                            {{ Form::label('Tekst'), "text" }}
                            <input type="text" class="form-control" name="text" id="text" value="{{$question->text}}">
                        </div>
                        <div class="form-group">
                            {{ Form::label('Moeilijkheid'), "difficulty" }}
                            <input type="text" class="form-control" name="difficulty" id="difficulty" value="{{$question->difficulty}}">
                        </div>
                        <div class="form-group">
                            {{ Form::label('Antwoord'), "answerd" }}
                            <input type="text" class="form-control" name="answerd" id="answerd" value="{{$question->answerd}}">
                        </div>
                        <div class="form-group">
                            {{ Form::submit('submit', array('class' => 'btn btn-primary')) }}
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
    @endif
@endsection