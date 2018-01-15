@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Adressen</div>

                <div class="panel-body">
                <a href="{{ route('new_address') }}">Nieuw adres</a>

                    <table class="table">
                        <thead>
                            <tr>
                            <th>Naam</th>
                            <th>Adres</th>
                            <th>Bewerk</th>
                            <th>Verwijder</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($addresses as $address)
                                <tr>
                                    <td>{{ $address->name }}</td>
                                    <td>{{ $address->address }}</td>
                                    <td><a href=/address/{{ $address->id }}/edit>Bewerk</a></td>
                                    <td><a href={{ $address->id }}>Verwijder</a></td>
                                </tr>
                            @empty
                                <p>Geen addressen gevonden.</p>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

