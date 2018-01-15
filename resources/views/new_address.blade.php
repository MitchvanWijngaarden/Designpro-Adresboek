@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Voeg nieuw adres toe</div>
                    @include('common/address_errors')
                    <div class="form-group" style="padding: 10px">
                        {!! Form::open(array('url' => 'address/create', 'method' => 'post')) !!}

                        <div class="form-group">
                            {!! Form::label('name_label', 'Naam'); !!}
                            {!! Form::text('name', old('name'), array('class' => 'form-control')); !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('address_label', 'Adres'); !!}
                            {!! Form::text('address', old('address'), array('class' => 'form-control')); !!}
                        </div>
                        
                        {!! Form::submit('Opslaan', array('class' => 'btn btn-primary')); !!}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
