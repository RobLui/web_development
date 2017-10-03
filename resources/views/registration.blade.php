@extends('layouts.app')

@section('content')
    <div class="container">
        @include("common.messages")
        @include("common.errors")
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <h2>Deelnemersformulier</h2>
                {!! Form::open(array('route' => 'create_participants','class' => 'form-horizontal')) !!}
                    {{ csrf_field() }}
                    <div class="form-group col-md-7">
                        {{ Form::label('Voornaam'),'firstname' }}
                        {{ Form::text("firstname"),array('class' => 'form-control') }}
                    </div>
                    <div class="form-group col-md-7">
                        {{ Form::label('Achternaam'), 'lastname' }}
                        {{ Form::text('lastname'), array('class' => 'form-control')  }}
                    </div>
                    <div class="form-group col-md-7">
                        {{ Form::label('Leeftijd'), 'age' }}
                        {{ Form::text('age'), array('class' => 'form-control')  }}
                    </div>
                    <div class="form-group col-md-7">
                        {{ Form::label('email'), 'email' }}
                        {{ Form::text('email'), array('class' => 'form-control')  }}
                    </div>
                    <div class="form-group col-md-7">
                        {{ Form::label('Straatnaam'), 'adress' }}
                        {{ Form::text('adress'), array('class' => 'form-control')  }}
                    </div>
                    <div class="form-group col-md-7">
                        {{ Form::label('Nummer'), 'housenumber' }}
                        {{ Form::text('housenumber'), array('class' => 'form-control')  }}
                    </div>
                    <div class="form-group col-md-7">
                        {{ Form::label('Postcode'), 'postalcode' }}
                        {{ Form::text('postalcode'), array('class' => 'form-control')  }}
                    </div>
                    <div class="form-group col-md-7">
                        {{ Form::label('Gemeente'), 'municipality' }}
                        {{ Form::text('municipality'), array('class' => 'form-control')  }}
                    </div>
                    <div class="form-group col-md-7">
                        {{ Form::submit('IK DOE MEE!', array('class' => 'btn btn-primary')) }}
                    </div>
                {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection