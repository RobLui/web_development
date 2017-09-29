@extends('layouts.app')
    <div class="flex-center position-ref full-height">
{{--        @if (Route::has('login'))--}}
            {{--<div class="top-right links">--}}
                {{--@auth--}}
                    {{--<a href="{{ url('/home') }}">Home</a>--}}
                {{--@else--}}
                    {{--<a href="{{ route('login') }}">Login</a>--}}
                    {{--<a href="{{ route('register') }}">Register</a>--}}
                {{--@endauth--}}
            {{--</div>--}}
        {{--@endif--}}

        <div class="content">
            <div class="title m-b-md">
                <img src="{{URL::asset('/images/apple_banner.png')}}" alt="Apple">
            </div>

            <div class="links">
                <a href="{{ url('competition') }}">Wedstrijd</a>
                <a href="{{ url('competition/registration') }}">Registratie</a>
                <a href="{{ url('competition/participants') }}">Deelnemers</a>
                {{--<a href="https://laravel-news.com">News</a>--}}
                {{--<a href="https://forge.laravel.com">Forge</a>--}}
                {{--<a href="https://github.com/laravel/laravel">GitHub</a>--}}
            </div>

            {{--@foreach()--}}
            {{--<div class="col-md-4">--}}
                {{--xxxxx--}}
            {{--</div>--}}
            {{--<div class="col-md-4">--}}
                {{--xxxxx--}}
            {{--</div>--}}
            {{--<div class="col-md-4">--}}
                {{--xxxxx--}}
            {{--</div>--}}
            {{--@endforeach--}}
        </div>

    </div>
