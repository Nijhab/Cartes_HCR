@extends('layout.main')
@section('contenu')
<div class="nic_bg">
<div class="container">
    @if (Session::has('supprimer'))
    <span>{{ Session::get('supprimer') }}</span>

    @endif
    <table class="table bg-light">
    <h2 class="m-2 bg-light" style="font-family: Algerian; text-align: center;">LISTE DES CARTES DU PERSONNEL HCR BURKINA FASO</h2>
    <h3><a href="{{route('gestion_carte.create') }}"><span class="glyphicon glyphicon-plus"></span> <button type="button" class="btn btn-outline-primary">Ajouter une carte</button></a></h3>
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Matricule</th>
            <th scope="col">Nom</th>
            <th scope="col">Prénom</th>
            <th scope="col">Poste</th>
            <th scope="col">Titre</th>
            <th scope="col">Telephone</th>
            <th scope="col">Email</th>
            <th colspan="3">Actions</th>
          </tr>
        </thead>
        <tbody>
         @foreach($cartes as $carte)
         <tr>
            <th scope="row">{{$carte->id}}</th>
            <td>{{$carte->matricule}}</td>
            <td>{{$carte->nom}}</td>
            <td>{{$carte->prenom}}</td>
            <td>{{$carte->poste}}</td>
            <td>{{$carte->titre}}</td>
            <td>{{$carte->telephone}}</td>
            <td>{{$carte->email}}</td>
            <td> <a class="button" href="{{route('gestion_carte.show', [$carte->id]) }}"><img src="{{ asset('img/carte.ico') }}" alt=""> </a> </td>
            <td> <a class="button" href="{{route('gestion_carte.edit', [$carte->id]) }}"><img src="{{ asset('img/modif.ico') }}" alt=""></a></td>
            <td> <a class="button" href="{{url('supprimer_carte/'.$carte->id)}}"><img src="{{ asset('img/delete.jpg') }}" alt=""></a></td>
          </tr>
         @endforeach
        </tbody>
      </table>
</div>
</div>

@endsection
