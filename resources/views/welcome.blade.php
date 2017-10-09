@extends('layouts.app')
@section('content')
    @include("common.messages")
    @include("common.errors")
    <div class="container">
        <div class="flex-center position-ref full-height">
            <div class="content homepage">
                <h2>Speel mee en win deze prachtige retro iPhone!</h2>
                <div class="title m-b-md">
                    <img class="img-responsive" src="{{URL::asset('/images/iphone_red.png')}}" alt="Apple">
                </div>
                <div class="links">
                    <a href="{{ route('show_competition') }}" class="btn btn-primary">Ik wil meedoen!</a>
                </div>
            </div>
        </div>
    </div>
@endsection