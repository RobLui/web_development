@extends('layouts.app')

@section('content')
    <div class="container">
        @include("common.messages")
        @include("common.errors")
            <div class="col-sm-12">        <a href="{{ url()->previous() }}" class="btn btn-secondary">< vorige</a>
            </div>
            <div class="col-sm-6">
                <h2>Excel ontvangers</h2>


{{--START INSERT MANAGER --}}
                <div class="col-sm-6">
                {!! Form::open(array('route' => 'create_email_manager', 'class' => 'form-horizontal')) !!}
                    {{ csrf_field() }}
                    <div class="form-group">
                        {{ Form::label('Naam'), "name" }}
                        <input type="text" class="form-control" name="name" id="name">
                    </div>
                    <div class="form-group">
                        {{ Form::label('Email'), "email" }}
                        <input type="text" class="form-control" name="email" id="email">
                    </div>
                    <div class="form-group">
                        {{ Form::label('Competitie ID'), "competition_id" }}
                        @foreach($comps as $c)
                            {{ Form::select('competition_id', [$c->id => $c->id]) }}
                        @endforeach
                    </div>
                    <div class="form-group">
                        {{ Form::submit('submit', array('class' => 'btn btn-primary')) }}
                    </div>
                {!! Form::close() !!}
                </div>
{{--END INSERT MANAGER --}}

{{--START MANAGERS --}}
                <div class="col-sm-6">
                    @if(count($mm) > 0)
                        @foreach($mm as $manager)
                        <ul class="list-group">
                            <li class="list-group-item active">Manager ID: {{ $manager->id }}</li>
                            <li class="list-group-item">Naam: {{ $manager->name }}</li>
                            <li class="list-group-item">E-mail: {{ $manager->email }}</li>
                            <li class="list-group-item"><a class="btn btn-primary btn-sm" href="{{ route('edit_email_manager', $manager->id ) }}">edit</a></li>
                        </ul>
                        @endforeach
                    @endif
                </div>
{{--END MANAGERS --}}
            </div>

{{-- START INSERT PERIODES --}}
            <div class="col-sm-6">
                <h2>Periodes</h2>
                <div class="col-sm-6">
                {!! Form::open(array('route' => 'create_period', 'class' => 'form-horizontal'))  !!}
                    {{ csrf_field() }}
                    <div class="form-group">
                        {{ Form::label('startDate', 'Start', array('class' => 'control-label')) }}
                        <input type="text" class="form-control" name="startDate" id="startDate">
                    </div>
                    <div class="form-group">
                        {{ Form::label('endDate', 'Eind', array('class' => 'control-label')) }}
                        <input type="text" class="form-control" name="endDate" id="endDate">
                    </div>
                    <div class="form-group">
                        {{ Form::label('Prijs'), "prize" }}
                        <input type="text" class="form-control" name="prize" id="prize">
                    </div>
                    <div class="form-group">
                        {{ Form::label('Competitie ID'), "competition_id" }}
                        @foreach($comps as $c)
                            {{ Form::select('competition_id', [$c->id => $c->id]) }}
                        @endforeach
                    </div>

                    <div class="form-group">
                        {{ Form::submit('submit', array('class' => 'btn btn-primary')) }}
                    </div>
                {!! Form::close() !!}
                </div>
{{-- END INSERT PERIODES --}}

{{--START PERIODES--}}
                <div class="col-sm-6">
                    @if(count($periods) > 0)
                        @foreach($periods as $p)
                            <ul class="list-group">
                                <li class="list-group-item active">
                                   Periode: {{$p->id}}
                                </li>
                                <li class="list-group-item">
                                    Start: {{ date('d-m-Y', strtotime($p->startDate)) }}
                                </li>
                                <li class="list-group-item">
                                    Eind: {{ date('d-m-Y', strtotime($p->endDate)) }}
                                </li>
                                <li class="list-group-item">
                                    Prijs: {{  $p->prize}}
                                </li>
                                <li class="list-group-item">
                                    Naam winnaar: {{  $p->winner_name}}
                                </li>
                                <li class="list-group-item">
                                    Email winnaar: {{  $p->winner_email}}
                                </li>
                                <li class="list-group-item">
                                    <a class="btn btn-primary" href="{{ route('edit_period', $p->id) }}">edit</a>
                                </li>
                            </ul>
                        @endforeach
                    @endif
                </div>
{{--END PERIODES--}}

            </div>
        </div>
    </div>
@endsection
