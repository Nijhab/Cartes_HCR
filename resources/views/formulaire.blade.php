@extends('layout.main')
@section('contenu')
<div style="background-color: yellow; height: 580px; ">
  <div class="container">
    <div class="m-2"><h2 style="font-family: Algerian; text-align: center;">FORMULAIRE POUR AJOUTER UNE CARTE</h2></div>
    <form method="POST" action="{{ route('gestion_carte.store') }}" enctype="multipart/form-data">
      @csrf
      <div class="d-flex">
        <div class="col-lg-6 col-sm-6 me-5">
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Matricule</label>
            <input type="text" class="form-control" name="matricule" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
		      <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nom</label>
            <input type="text" class="form-control" name="nom" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Prénom</label>
            <input type="text" class="form-control" name="prenom" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Poste</label>
            <input type="text" class="form-control" name="poste" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
        </div>
        <div class="col-lg-6 col-sm-6 me-5">
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Titre</label>
            <input type="text" class="form-control" name="titre" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Telephone</label>
            <input type="number" class="form-control" name="telephone" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
		      <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email</label>
            <input type="text" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Photo</label>
            <input type="file" class="form-control" name="photo" id="photo" aria-describedby="emailHelp">
          </div>
        </div>
      </div>
      <div class="container d-flex m-3">
        <button type="submit" class="btn btn-primary me-5">Valider</button>
        <button type="reset" class="btn btn-danger">Supprimer</button>
      </div>
    </form>
  </div>
</div>
@endsection
