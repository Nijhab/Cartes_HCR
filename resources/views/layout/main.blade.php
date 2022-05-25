<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gestion_Cartes_Personnel_HCR</title>
    <link rel="stylesheet" href="{{ asset('bootstrap5/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap5/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap5/css/styleu.css') }}">
</head>
<body>
<header>
  <nav class="navbar navbar-expand-lg navbar-light bg-primary">
    <div class="container-fluid">
      <a class="navbar-brand me-5" style="color:white;"  href="#">CARTES-HCR</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item me-5">
            <a class="nav-link active " style="color:white;"  aria-current="page" href="{{url('/') }}">ACCUEIL</a>
          </li>
          <li class="nav-item me-5">
            <a class="nav-link active " style="color:white;"  aria-current="page" href="{{route('gestion_carte.create') }}">FORMULAIRE</a>
          </li>
          <li class="nav-item me-5">
            <a class="nav-link active" href="{{route('gestion_carte.index') }}" style="color:white;" >LISTE</a>
          </li>
        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Rechercher" aria-label="Search">
          <button class="btn btn-outline-warning" type="submit">Recherche</button>
        </form>
      </div>
    </div>
  </nav>
</header>

  @yield('contenu')
  
</body>
</html>
