@extends('layouts.app')

@section('content')
    <div class="container">
        @include("common.messages")
        @include("common.errors")
        @if(count($questions) > 0)
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <h2>{{ $questions->title }}</h2>
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
                            @if(Auth::check())
                            <li class="list-group-item">
                               <a href="{{ route('edit_questions',$questions->id) }}" class="btn btn-primary">edit</a>
                            </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        @endif
        @if(Auth::check())
            <div class="links">
                <a href="{{ route('create_questions') }}">Vraag aanmaken</a>
            </div>
        @endif
@endsection
