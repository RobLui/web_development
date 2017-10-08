@extends('layouts.app')

@section('content')
    <div class="container">
        @include("common.messages")
        @include("common.errors")
        <div class="row">
            <div class="content">
                <h2 class="push">Deelnemersformulier</h2>
                <div class="col-md-12">
                    {!! Form::open(array('route' => 'create_participants','class' => 'form-horizontal')) !!}
                        {{ csrf_field() }}
                        <div class="form-group">
                            {{ Form::label('firstname', 'Voornaam', array('class' => 'control-label')) }}
                            {{ Form::text("firstname"),array('class' => 'form-control') }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('lastname', 'Achternaam', array('class' => 'control-label')) }}
                            {{ Form::text('lastname'), array('class' => 'form-control')  }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('age', 'Leeftijd', array('class' => 'control-label')) }}
                            {{ Form::text('age'), array('class' => 'form-control')  }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('email', 'Email', array('class' => 'control-label')) }}
                            {{ Form::text('email'), array('class' => 'form-control')  }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('adress', 'Straatnaam', array('class' => 'control-label')) }}
                            {{ Form::text('adress'), array('class' => 'form-control')  }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('housenumber', 'Nummer', array('class' => 'control-label')) }}
                            {{ Form::text('housenumber'), array('class' => 'form-control')  }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('postalcode', 'Postcode', array('class' => 'control-label')) }}
                            {{ Form::text('postalcode'), array('class' => 'form-control')  }}
                        </div>
                        <div class="form-group">
                            {{ Form::label('municipality', 'Gemeente', array('class' => 'control-label')) }}
                            {{ Form::text('municipality'), array('class' => 'form-control')  }}
                        </div>
                        <div class="form-group">
                            {{ Form::submit('IK DOE MEE!', array('class' => 'btn btn-primary')) }}
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection