@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Bewerk adres</div>
                    @include('common/address_errors')
                    <div class="form-group" style="padding: 10px">
                        {!! Form::open(array('url' => 'address/update', 'method' => 'put')) !!}

                        <div class="form-group">
                            {!! Form::label('name_label', 'Naam'); !!}
                            {!! Form::text('name', $address->name, array('class' => 'form-control')); !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('address_label', 'Adres'); !!}
                            {!! Form::text('address', $address->address, array('class' => 'form-control')); !!}
                        </div>
                        {!! Form::hidden('id', $address->id); !!}
                        {!! Form::submit('Bewerk adres', array('class' => 'btn btn-primary')); !!}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
