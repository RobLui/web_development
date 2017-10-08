@extends('layouts.app')

@section('content')
    <div class="container">
        @include("common.messages")
        @include("common.errors")
        <div class="links">
            <a href="{{ route('create_questions') }}">Vraag aanmaken</a>
        </div>
        @if(count($questions) > 0)
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <h2>Vraag: {{ $questions->title }}</h2>
                        <ul class="list-group">
                            <li class="list-group-item">
                                {{ $questions->category }}
                            </li>
                            <li class="list-group-item">
                                {{ $questions->title }}
                            </li>
                            <li class="list-group-item">
                                {{ $questions->text }}
                            </li>
                            <li class="list-group-item">
                                {{ $questions->difficulty }}
                            </li>
                            <li class="list-group-item">
                               <a href="{{ route('edit_questions',$questions->id) }}" class="btn btn-primary">edit</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        @endif
@endsection
