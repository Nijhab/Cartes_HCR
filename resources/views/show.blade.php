@extends('layout.main')
@section('contenu')
<h1 class="text-center">CARTE DE SERVICE A IMPRIMER DE {{$finds->nom}} {{$finds->prenom}}</h1>

<div class="card mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="{{ asset('storage').'/'.$finds->photo }}" style="width: 100%" alt="">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title" style="color: red;">HCR BURKINA FASO</h5>
        <p class="card-text">Nom et prenom : <strong style="color: blue;">{{$finds->nom}} {{$finds->prenom}}</strong></p>
        <p class="card-text">Matricule : <strong style="color: blue;">{{$finds->matricule}}</strong></p>
        <p class="card-text">Poste : <strong style="color: blue;">{{$finds->poste}}</strong></p>
        <p class="card-text">Titre : <strong style="color: blue;">{{$finds->titre}}</strong></p>
        <p class="card-text">Telephone : <strong style="color: blue;">{{$finds->telephone}}</strong></p>
        <p class="card-text">Email : <strong style="color: blue;">{{$finds->email}}</strong></p>
      </div>
    </div>
  </div>
</div>

@endsection