@extends('layout.main')
@section('contenu')

<div class="container">
    <form method="POST" action="{{ route('insertion') }}">
        @csrf
        <div class="col-sm-6 mb-3">
	        <label class="col-sm-6 control-label" style="text-align: left;" >NOM</label>
			<input type="text" name="nom" class="form-control" placeholder="Entrez nom" required autofocus/>
		</div>
        <div class="col-sm-6 mb-3">
			<label class="col-sm-6 control-label" style=" text-align: left;">PRENOM</label>
			<input type="text" name="prenom" class="form-control" placeholder="Entrez prenom" required />
		</div>
        <div class="col-sm-6 mb-3">
			<label class="col-sm-6 control-label" style=" text-align: left;">POSTE</label>
			<input type="text" name="poste" class="form-control" placeholder="Ecrivez son poste" required />
		</div>
        <div class="col-sm-6 mb-3">
			<label class="col-sm-6 control-label" style=" text-align: left;">TITRE</label>
			<input type="text" name="titre" class="form-control" placeholder="Ecrivez son titre" required />
		</div> 
        <div class="col-sm-6 mb-3">
			<label class="col-sm-6 control-label" style=" text-align: left;">TELEPHONE</label>
			<input type="number" name="telephone" class="form-control" placeholder="Telephone" required />
		</div>
        <div class="col-sm-6 mb-3">
			<label class="col-sm-6 control-label" style=" text-align: left;">E-MAIL</label>
			<input type="text" name="titre" class="form-control" placeholder="Ecrivez son titre" required />
		</div>
        <div class="col-sm-4 m-1">
			<label class="col-sm-6 control-label" style=" text-align: left;margin-left: 20px;color: green;">PHOTO</label>
			<input type="hidden" name="MAX_FILE_SIZE" value="300000" />
			<input type="file" name="photo" size="12" required/>
        </div>
        <div class="col-sm-6 mb-3">
		    <div class="col-sm-offset-3 col-sm-9 m-t-15">
		        <!-- Button trigger modal -->
                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Valider
                </button>
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                               Voulez-vous vraiment valider la carte?
                            </div>
                            <div class="modal-footer">
	                            <button  class="btn btn-success" type="submit"  name="btn_insert" class="btn btn-danger " value="Ajouter" >Oui</button>
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Non</button> 
                            </div>
                        </div>
                    </div>
                </div>
		        <a href="" class="btn btn-dark">Supprimer</a>
		    </div>
        </div>
    </form>
</div>

@endsection



