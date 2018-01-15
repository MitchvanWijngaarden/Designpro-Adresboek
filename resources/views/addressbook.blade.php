@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Adressen</div>

                <div class="panel-body">
                <a class='btn btn-primary' href="{{ route('new_address') }}">Nieuw adres</a>

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
                                    <td><a href ="#" class='deleteAddress' data-address={{ $address }} >Verwijder</a></td>
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

<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script type="text/javascript">
    const root = '/api/address/';

    $( document ).ready(function() {
        $(".deleteAddress" ).each(function(index) {
            $(this).on("click", function(){
                if (confirm("Are you sure?")) {
                    var data_address = $(this).attr('data-address');
                    axios({
                        method: 'delete',
                        url: root,
                        data: {
                            data_address
                        }
                    });
                    $(this).parent().parent().remove();
                }
                return false;
            });
        });
    });    

</script>
@endsection