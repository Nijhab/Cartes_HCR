@extends('layout.main')
@section('contenu')
<div class="nic_bg" style="height: 520px; ">
  <div class="container">
    <div class="m-2"><h2 class="text-center mt-3 text-primary shadow p-3 mb-2 bg-body rounded" style="font-family: Algerian; text-align: center; color: blue">FORMULAIRE POUR AJOUTER UNE CARTE DU PERSONNEL</h2></div>
    <form method="POST" class="shadow p-3 mb-2 bg-body rounded nic_bg1" action="{{route('gestion_carte.store')}}" enctype="multipart/form-data">
      @csrf
      <div class="d-flex">
        <div class="col-lg-6 col-sm-6 me-2 container">
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label text-light">Matricule</label>
            <input type="text" class="form-control" name="matricule" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
		      <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label text-light">Nom</label>
            <input type="text" class="form-control" name="nom" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label text-light">Prénom</label>
            <input type="text" class="form-control" name="prenom" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label text-light">Poste</label>
            <input type="text" class="form-control" name="poste" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
        </div>
        <div class="col-lg-6 col-sm-6 me-2 container">
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label text-light">Titre</label>
            <input type="text" class="form-control" name="titre" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label text-light">Telephone</label>
            <input type="number" class="form-control" name="telephone" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
		      <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label text-light">Email</label>
            <input type="text" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label text-light">Photo</label>
            <input type="file" class="form-control" name="photo" id="photo" aria-describedby="emailHelp">
          </div>
        </div>
      </div>
      <div class="container d-flex" style="text-align: center;">
        <button type="submit" class="btn btn-primary me-5">Valider</button>
        <button type="reset" class="btn btn-danger">Annuler</button>
      </div>
    </form>
  </div>
</div>
@endsection
