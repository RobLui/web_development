@extends('layouts.app')

@section('content')
    <div class="container">
        @include("common.messages")
        @include("common.errors")
        <div class="row">
            <div class="content">
                <h2 class="push">Deelnemersformulier</h2>
                <div class="col-md-4">
                    {!! Form::open(array('route' => 'create_participants','class' => '')) !!}
                        {{ csrf_field() }}
                        <div class="form-group col-md-6">
                            {{ Form::label('Voornaam'),'firstname' }}
                            {{ Form::text("firstname"),array('class' => 'form-control') }}
                        </div>
                        <div class="form-group col-md-6">
                            {{ Form::label('Achternaam'), 'lastname' }}
                            {{ Form::text('lastname'), array('class' => 'form-control')  }}
                        </div>
                        <div class="form-group col-md-6">
                            {{ Form::label('Leeftijd'), 'age' }}
                            {{ Form::text('age'), array('class' => 'form-control')  }}
                        </div>
                        <div class="form-group col-md-6">
                            {{ Form::label('email'), 'email' }}
                            {{ Form::text('email'), array('class' => 'form-control')  }}
                        </div>
                        <div class="form-group col-md-6">
                            {{ Form::label('Straatnaam'), 'adress' }}
                            {{ Form::text('adress'), array('class' => 'form-control')  }}
                        </div>
                        <div class="form-group col-md-6">
                            {{ Form::label('Nummer'), 'housenumber' }}
                            {{ Form::text('housenumber'), array('class' => 'form-control')  }}
                        </div>
                        <div class="form-group col-md-6">
                            {{ Form::label('Postcode'), 'postalcode' }}
                            {{ Form::text('postalcode'), array('class' => 'form-control')  }}
                        </div>
                        <div class="form-group col-md-6">
                            {{ Form::label('Gemeente'), 'municipality' }}
                            {{ Form::text('municipality'), array('class' => 'form-control')  }}
                        </div>
                        <div class="form-group col-md-6">
                            {{ Form::submit('IK DOE MEE!', array('class' => 'btn btn-primary')) }}
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection