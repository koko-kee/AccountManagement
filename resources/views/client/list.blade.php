@extends('layout.main')

@section('content')
<h3 class="text-center text-primary">Liste des clients</h3>
<table class="table">
    <thead>
      <tr>
        <th scope="col">Nom</th>
        <th scope="col">Prenom</th>
        <th scope="col">CNI</th>
        <th scope="col">adresse</th>
        <th scope="col">date naissance</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($clients as $client)
        <tr>
            <td>{{$client->nom}}</td>
            <td>{{$client->prenom}}</td>
            <td>{{$client->CNI}}</td>
            <td>{{$client->adresse}}</td>
            <td>{{$client->date_naissance}}</td>
        </tr>
      @endforeach
    </tbody>
</table>
@endsection