@extends('layout.main')
@section('contenu')

<div class="container">
    <table class="table">
        <thead>
          <tr>
            <th scope="col">MATRICULE</th>
            <th scope="col">NOM</th>
            <th scope="col">PRENOM</th>
            <th scope="col">POSTE</th>
            <th scope="col">TITRE</th>
            <th scope="col">TELEPHONE</th>
            <th scope="col">E-MAIL</th>
            <th scope="col">PHOTO</th>
            <th width="280px">ACTION</th>
          </tr>
        </thead>
        <tbody>
         @foreach($cartes as $carte)
         <tr>
            <th scope="row">{{$carte->id}}</th>
            <td>{{$carte->nom}}</td>
            <td>{{$carte->prenom}}</td>
            <td>{{$carte->poste}}</td>
            <td>{{$carte->titre}}</td>
            <td>{{$carte->telephone}}</td>
            <td>{{$carte->email}}</td>
            <td>{{$carte->photo}}</td>
            <td>
                <form action="{{route('destroy',$carte->id)}}" method="POST">
                  <a class="btn btn-primary" href="{{route('edit',$carte->id)}}">Edit</a>
                  <a class="btn btn-info" href="{{route('show',$carte->id)}}">Show</a>
                  @csrf
                  @method ('DELETE')
                  <button  class="btn btn-danger" type="submit">Suprimer</button>
                </form>
            </td>
          </tr>
         @endforeach
        </tbody>
      </table>
</div>

@endsection
