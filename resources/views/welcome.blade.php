@extends('layouts.app')
@section('content')
    <div class="flex-center position-ref full-height">
        <div class="content">
            <div class="title m-b-md">
                <img class="img-responsive" src="{{URL::asset('/images/apple_opacity_null.png')}}" alt="Apple">
            </div>
            <div class="links">
                {{--<a href="{{ route('registration') }}">Deelnemen</a>--}}
                {{--<a href="{{ route('show_competition') }}">Wedstrijd</a>--}}
                {{--<a href="{{ route('show_participants') }}">Deelnemers</a>--}}
                <a href="{{ route('show_competition') }}" class="btn btn-primary">Speel mee!</a>
            </div>

        </div>
    </div>
@endsection