@extends('layouts.app')

@section('content')
    <div class="col-sm-6 text-center ">
        {!! Form::open(array('url' => 'registration/new'), "Wedstrijd registratie") !!}
            <div class="form-group">
                {{ Form::label('Voornaam'), 'firstname' }}
                {{ Form::text('firstname'), array('class' => 'form-control')  }}
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
                {{ Form::label('Straatnaam'), 'street' }}
                {{ Form::text('street'), array('class' => 'form-control')  }}
            </div>
            <div class="form-group">
                {{ Form::label('Nummer'), 'housenumber' }}
                {{ Form::text('housenumber'), array('class' => 'form-control')  }}
            </div>
            <div class="form-group">
                {{ Form::label('Gemeente'), 'municipality' }}
                {{ Form::text('municipality'), array('class' => 'form-control')  }}
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