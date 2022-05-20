@extends('layout.main')
@section('contenu')

<div class="container">
    <form method="POST" action="{{ route('insertion') }}">
        @csrf
		<div class="col-sm-6 mb-3">
	        <label class="col-sm-6 control-label" style="text-align: left;" >MATRICULE</label>
			<input type="text" name="matricule" class="form-control" placeholder="Entrez matricule" required>
		</div>
        <div class="col-sm-6 mb-3">
	        <label class="col-sm-6 control-label" style="text-align: left;" >NOM</label>
			<input type="text" name="nom" class="form-control" placeholder="Entrez nom" required>
		</div>
        <div class="col-sm-6 mb-3">
			<label class="col-sm-6 control-label" style=" text-align: left;">PRENOM</label>
			<input type="text" name="prenom" class="form-control" placeholder="Entrez prenom" required>
		</div>
        <div class="col-sm-6 mb-3">
			<label class="col-sm-6 control-label" style=" text-align: left;">POSTE</label>
			<input type="text" name="poste" class="form-control" placeholder="Ecrivez son poste" required>
		</div>
        <div class="col-sm-6 mb-3">
			<label class="col-sm-6 control-label" style=" text-align: left;">TITRE</label>
			<input type="text" name="titre" class="form-control" placeholder="Ecrivez son titre" required>
		</div> 
        <div class="col-sm-6 mb-3">
			<label class="col-sm-6 control-label" style=" text-align: left;">TELEPHONE</label>
			<input type="number" name="telephone" class="form-control" placeholder="Telephone" required>
		</div>
        <div class="col-sm-6 mb-3">
			<label class="col-sm-6 control-label" style=" text-align: left;">E-MAIL</label>
			<input type="text" name="email" class="form-control" placeholder="Ecrivez son titre" required>
		</div>
        <div class="col-sm-4 m-1">
			<label class="col-sm-6 control-label" style=" text-align: left;margin-left: 20px;color: green;">PHOTO</label>
			<input type="file" name="photo" size="12" required>
        </div>
        <button type="submit" class="btn btn-primary">Valider</button>
    </form>
</div>

@endsection



