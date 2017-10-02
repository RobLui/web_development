@extends('layouts.app')

@section('content')
    <div class="container">
        @include("common.messages")
        @include("common.errors")
        @if(count($questions) > 0)
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <h2>Vraag:</h2>
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
                        </ul>
                    </div>
                </div>
            </div>
        @endif
    </div>
@endsection
