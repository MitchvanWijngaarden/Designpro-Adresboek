<h1>Addresbook</h1>

<ul>
@foreach($addresses as $address)
    <li>{{$address->name}}</li> <li><a href="#">Edit</a>
@endforeach
</ul>