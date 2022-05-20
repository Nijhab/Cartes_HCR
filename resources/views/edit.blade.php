@extends('layout.main')
@section('contenu')

<div class="row">
    <div class="col-log-12 margin -tb">
        <div class="pull-left">
        <h2>Edit carte</h2>
        </div>
        <div class="pull-right">
          <a class="btn btn-primary" href="{{'liste'}}">Retour</a>
        </div>
    </div>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There is were some problems with your input<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{route('update',$carte->id)}}" method="POST">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nom:</strong>
				<input type="text" name="nom" value="{{$carte->nom}}" class="form-control" placeholder="Entrez nom">
			</div>
		</div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Prenom:</strong>
				<input type="text" name="prenom" value="{{$carte->prenom}}" class="form-control" placeholder="Entrez prenom">
			</div>
		</div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Poste:</strong>
				<input type="text" name="poste" value="{{$carte->poste}}" class="form-control" placeholder="Entrez son poste">
			</div>
		</div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Titre:</strong>
				<input type="text" name="titre" value="{{$carte->titre}}" class="form-control" placeholder="titre">
			</div>
		</div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Telephone:</strong>
				<input type="number" name="telephone" value="{{$carte->telephone}}" class="form-control" placeholder="Entrez telephone">
			</div>
		</div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Email:</strong>
				<input type="text" name="email" value="{{$carte->email}}" class="form-control" placeholder="Entrez email">
			</div>
		</div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Photo:</strong>
				<input type="image" name="photo" value="{{$carte->photo}}" class="form-control" placeholder="Entrez photo">
			</div>
		</div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
		</div>
    </div>
</form>

@endsection



