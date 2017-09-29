@extends('layouts.app')

@section('content')
    @include("common.messages")
    <div class="col-md-4 col-md-offset-4 text-center">
        <h2>Registration </h2>
        {!! Form::open(array('url' => '/competition/registration','class' => 'form-horizontal')) !!}
            <div class="form-group">
                {{ Form::label('Voornaam'), 'firstname' }}
                {{ Form::text("firstname"),array('class' => 'form-control') }}
            </div>
            <div class="form-group">
                {{ Form::label('Achternaam'), 'lastname' }}
                {{ Form::text('lastname'), array('class' => 'form-control')  }}
            </div>
            <div class="form-group">
                {{ Form::label('Leeftijd'), 'age' }}
                {{ Form::text('age'), array('class' => 'form-control')  }}
            </div>
            <br> {{--TEMPORARY scheiding--}}
            <div class="form-group">
                {{ Form::label('Straatnaam'), 'adress' }}
                {{ Form::text('adress'), array('class' => 'form-control')  }}
            </div>
            <div class="form-group">
                {{ Form::label('Nummer'), 'housenumber' }}
                {{ Form::text('housenumber'), array('class' => 'form-control')  }}
            </div>
            <div class="form-group">
                {{ Form::label('Gemeente'), 'municipality' }}
                {{ Form::text('municipality'), array('class' => 'form-control')  }}
            </div>
            <div class="form-group">
                {{ Form::label('Postcode'), 'postalcode' }}
                {{ Form::text('postalcode'), array('class' => 'form-control')  }}
            </div>
            <br> {{--TEMPORARY scheiding--}}
            <div class="form-group">
                {{ Form::label('email'), 'email' }}
                {{ Form::text('email'), array('class' => 'form-control')  }}
            </div>
            {{ Form::submit('Join the Competition!', array('class' => 'btn btn-primary')) }}

        {!! Form::close() !!}
        </div>
    </div>
@endsection