@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Voeg nieuw adres toe</div>
                    <!-- @if($errors->any())
                    <ul>
                        <li>
                            {{ $errors->first('name', ':message') }}
                        </li>
                        <li>
                            {{ $errors->first('address', ':message') }}
                        </li>
                    </ul>
                    @endif -->

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    {!! Form::open(array('url' => 'address/create')) !!}

                        {!! Form::label('name_label', 'Naam'); !!}
                        {!! Form::text('name', old('name')); !!}

                        {!! Form::label('address_label', 'Adres'); !!}
                        {!! Form::text('address', old('address')); !!}


                        {!! Form::submit('Click Me!'); !!}

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
