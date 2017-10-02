@extends('layouts.app')

@section('content')

    @include("common.messages")
    @include("common.errors")
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            @if($questions)
                @foreach($questions as $q )
                    {{ $q->text }}
                @endforeach
            @endif
        </div>
    </div>

@endsection
