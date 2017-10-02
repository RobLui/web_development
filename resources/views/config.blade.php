@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                @if($emailmanagers)
                    @foreach($emailmanagers as $em)
                        {{ $em->name }}
                        {{ $em->email }}
                    @endforeach
                @endif
            </div>
        </div>
    </div>
@endsection
