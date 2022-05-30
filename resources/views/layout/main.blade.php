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
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid"  style="background-color: blue;">
    <a class="navbar-brand" href="#">
    <img src="{{ asset('img/logo3.jpg') }}" class="" height="50vh" alt="">
      <img src="image/logop2.jpg" style="height: 10vh;" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" 
     aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
     <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item" style=" margin-right: 35px; margin-left: 20px; text-align: center;">
          <a class="nav-link" style="color: black; font-size: 20px;width: 200px;" href="{{url('/') }}">
            <button type="button" class="btn btn-outline-light" style="width: 100%; height: 40px; font-family: arial;">ACCUEIL</button>
          </a>
        </li>
        <li class="nav-item" style=" height: 60px; margin-right: 35px;margin-left: 20px; text-align: center;">
          <a class="nav-link" style="color: black; font-size: 20px; width: 200px;" href="{{route('gestion_carte.create') }}">
            <button type="button" class="btn btn-outline-light" style="width: 100%; height: 40px; font-family: arial;">FORMULAIRE</button>
          </a>
        </li>
        <li class="nav-item" style=" height: 60px; margin-right: 35px;margin-left: 20px; text-align: center;">
          <a class="nav-link" style="color: black; font-size: 20px; width: 200px;" href="{{route('gestion_carte.index') }}">
            <button type="button" class="btn btn-outline-light" style="width: 100%; height: 40px; font-family: arial;">LISTE</button>
          </a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" id="myInput" onkeyup="myFunction()" type="search" aria-label="Search" placeholder="rechercher">
        <button class="btn btn-outline-light" style="background-color: red;" type="submit">Recherche</button>
       </form>
    </div>
  </div>
</nav>
</header>

  @yield('contenu')
  <footer style="background-color:blue; height: 60px;">
<dIv>
 <h4 style="text-align: center; font-family: arial; color: white; font-size: 20px; padding: 15px;">
 Copyright © 2022 HCR-B.F. Tous droits réservés. Powered by Orsy-Nicolas.</h4>
</dIv>
</footer> 
</body>
</html>
