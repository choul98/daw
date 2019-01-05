<nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar bg-dark">
  <a class="navbar-brand" href="#"><?php  
    if($data['ROLE'] == 'A') {
        echo "Admin";
    } elseif($data['ROLE'] == 'S') {
        echo "Subscriber";
    } elseif($data['ROLE'] == 'D') {
        echo "Doctorant";
    } elseif ($data['ROLE'] == 'E') {
        echo "Enseignant";
    }
  ?></a>
  

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Acceuil <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Infos</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Laboratoire
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">IFA</a>
          <a class="dropdown-item" href="#">AAA</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">More</a>
        </div>
      </li>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
<div class="btn-group">
  <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Spécialité
  </button>
  <div class="dropdown-menu">
    
    <a class="dropdown-item" href="#">TI</a>
    <a class="dropdown-item" href="#">SCI</a>
    <a class="dropdown-item" href="#">GL</a>
    <a class="dropdown-item" href="#">SI</a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="#">En savoir plus</a>
  </div>
</div>
      <li class="nav-item">
        <a class="nav-link " href="#">A Propos</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>














<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
