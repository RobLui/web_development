@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="content">
            <div class="links">
                <a href="{{ route('create_prizes') }}">Prijs aanmaken</a>
            </div>
        </div>
    </div>
    {{--@foreach($prizes as $p)--}}
        {{--{{ $p->name }}--}}
    {{--@endforeach--}}
@endsection
