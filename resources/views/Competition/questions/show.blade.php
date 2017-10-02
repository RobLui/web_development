@extends('layouts.app')

@section('content')

    @include("common.messages")
    @include("common.errors")
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <h2>Vraag:</h2>
            <div class="col-md-4">
                {{ $questions->category }}
            </div>
            <div class="col-md-6">
                {{ $questions->title }}
            </div>
            <div class="col-md-4">
                {{ $questions->text }}
            </div>
            <div class="col-md-6">
                {{ $questions->difficulty }}
            </div>
        </div>
    </div>

@endsection
