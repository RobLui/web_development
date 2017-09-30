@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-4 col-sm-offset-4">
                    <h3>Uitleg</h3>
                {{--<p>{{ $competition }}</p>--}}
                </div>
            </div>
            <div class="col-md-12">
                <div class="col-md-4 col-sm-offset-4">
                    <h3>Prijzen</h3>
                    <p></p>
                </div>
            </div>
            <div class="col-md-12">
                <div class="col-md-4 col-sm-offset-4">
                    <h3>Vorige deelnemers</h3>
                    <p></p>
                    <a class="btn btn-primary" href="{{ route('newregistration') }}">IK WIL DEELNEMEN!</a>
                </div>
            </div>
        </div>
    </div>
@endsection

