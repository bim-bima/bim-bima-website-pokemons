<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pokemons</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous"> -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
    <!-- <h1>Hello, world!</h1> -->
    <div class="container-xxl mt-2 mb-2 text-center">
      <nav class="navbar navbar-expand-lg border-bottom">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <img src="assets/img/pokemon.png" width="220" height="80">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto">
              <a href="https://github.com/bim-bima"><img src="assets/img/github.png" width="40" height="40"></a>
              <div class="form-check form-switch mt-2 ms-2">
                  <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
               </div>

            </div>
          </div>
        </div>
      </nav>
      <div class="row mt-1">
        <nav id="sidebarMenu" class="col-md-2 col-lg-2 d-md-block sidebar collapse border-end">
          <div class="position-sticky pt-3">
            <ul class="nav flex-column text-start">
              <li class="nav-item">
                <a class="nav-link active link-dark fw-bold" aria-current="page" href="#">
                  <img src="assets/img/logo-1.png" width="20" height="20"> Pokemons</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active link-dark fw-bold" aria-current="page" href="#">
                  <img src="assets/img/documents.png" width="20" height="20"> Compare</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active link-dark fw-bold" aria-current="page" href="#">
                  <img src="assets/img/monitor.png" width="20" height="20"> Statistics</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active link-dark fw-bold" aria-current="page" href="#">
                  <img src="assets/img/drawer.png" width="20" height="20"> My Pokemons</a>
              </li>
            </ul>
          </div>
        </nav>
        <main class="col-md-10 ms-sm-auto col-lg-10">
          <div class="d-flex justify-content-start flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <form class="d-flex mb-2" role="search">
              <input class="form-control me-2" type="search" placeholder="Search pokemons" aria-label="Search">
            </form>
            <div class="dropdown">
              <button class="btn dropdown-toggle border me-2 mb-2" type="button" data-bs-toggle="dropdown" 
              aria-expanded="false">All generations </button>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Generations-1</a></li>
                <li><a class="dropdown-item" href="#">Generations-2</a></li>
                <li><a class="dropdown-item" href="#">Generations-3</a></li>
              </ul>
            </div>
            <div class="dropdown">
              <button class="btn dropdown-toggle border mb-2" type="button" data-bs-toggle="dropdown" 
              aria-expanded="false">All types </button>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Water</a></li>
                <li><a class="dropdown-item" href="#">Fire</a></li>
                <li><a class="dropdown-item" href="#">Lighting</a></li>
                <li><a class="dropdown-item" href="#">Earth</a></li>
                <li><a class="dropdown-item" href="#">Grass</a></li>
                <li><a class="dropdown-item" href="#">Poison</a></li>
                <li><a class="dropdown-item" href="#">Light</a></li>
                <li><a class="dropdown-item" href="#">Dark</a></li>
              </ul>
            </div>
          </div>
          <div class="row justify-content-around ms-2 me-2 d-flex flex-wrap">
            <div class="col-md-5 col-lg-5 col-xl-3 bg br d-flex mb-3">
              <div class="card-body text-start">
                <h4 class="card-title mt-2 mb-3">Eevee</h4>
                <h6 class="card-text mb-1">Type:</h6>
                <p>Earth</p>
                <button type="button" class="btn btn-light mb-2 d-flex">001</button>
              </div>
              <div class="test">
                <img class="mt-1" src="assets/img/eevee.png" width="150" height="150">
              </div>
            </div>
            <div class="col-md-5 col-lg-5 col-xl-4 bg-1 br d-flex mb-3">
              <div class="card-body text-start">
                <h4 class="card-title mt-2 mb-3">Pikachu</h4>
                <h6 class="card-text mb-1">Type:</h6>
                <p>Lighting</p>
                <button type="button" class="btn btn-light mb-2 d-flex">002</button>
              </div>
              <div class="pikachu">
                <img class="mt-2" src="assets/img/pikachu.png" width="150" height="150">
              </div>
            </div>
            <div class="col-md-6 col-lg-5 col-xl-4 bg-2 br d-flex mb-3">
              <div class="card-body text-start">
                <h4 class="card-title mt-2 mb-3">Charmander</h4>
                <h6 class="card-text mb-1">Type:</h6>
                <p>Fire</p>
                <button type="button" class="btn btn-light mb-2 d-flex">003</button>
              </div>
              <div class="test">
                <img class="mt-3" src="assets/img/charmander.png" width="150" height="150">
              </div>
            </div>
          </div>
          <div class="row justify-content-around ms-2 me-2 d-flex flex-wrap">
            <div class="col-md-5 col-lg-5 col-xl-4 bg-1 br d-flex mb-3">
              <div class="card-body text-start">
                <h4 class="card-title mt-2 mb-3">Pikachu</h4>
                <h6 class="card-text mb-1">Type:</h6>
                <p>Lighting</p>
                <button type="button" class="btn btn-light mb-2 d-flex">002</button>
              </div>
              <div class="pikachu">
                <img class="mt-2" src="assets/img/pikachu.png" width="150" height="150">
              </div>
            </div>
            <div class="col-md-5 col-lg-5 col-xl-4 bg-3 br d-flex mb-3">
              <div class="card-body text-start">
                <h4 class="card-title mt-2 mb-3">Snorlax</h4>
                <h6 class="card-text mb-1">Type:</h6>
                <p>Water</p>
                <button type="button" class="btn btn-light mb-2 d-flex">005</button>
              </div>
              <div class="test">
                <img class="mt-1" src="assets/img/snorlax.png" width="150" height="150">
              </div>
            </div>
            <div class="col-md-6 col-lg-5 col-xl-3 bg-4 br d-flex mb-3">
              <div class="card-body text-start">
                <h4 class="card-title mt-2 mb-3">Gengar</h4>
                <h6 class="card-text mb-1">Type:</h6>
                <p>Dark</p>
                <button type="button" class="btn btn-light mb-2 d-flex">006</button>
              </div>
              <div class="test">
                <img class="mt-1" src="assets/img/gengar.png" width="150" height="150">
              </div>
            </div>
          </div>
          <div class="row justify-content-around ms-2 me-2 d-flex flex-wrap">
            <div class="col-md-5 col-lg-5 col-xl-4 bg-5 br d-flex mb-3">
              <div class="card-body text-start">
                <h4 class="card-title mt-2 mb-3">Ninetiles</h4>
                <h6 class="card-text mb-1">Type:</h6>
                <p>Light</p>
                <button type="button" class="btn btn-light mb-2 d-flex">007</button>
              </div>
              <div class="test">
                <img class="mt-1" src="assets/img/ninetales.png" width="150" height="150">
              </div>
            </div>
            <div class="col-md-5 col-lg-5 col-xl-3 bg-4 br d-flex mb-3">
              <div class="card-body text-start">
                <h4 class="card-title mt-2 mb-3">Gengar</h4>
                <h6 class="card-text mb-1">Type:</h6>
                <p>Dark</p>
                <button type="button" class="btn btn-light mb-2 d-flex">006</button>
              </div>
              <div class="test">
                <img class="mt-1" src="assets/img/gengar.png" width="150" height="150">
              </div>
            </div>
            <div class="col-md-6 col-lg-5 col-xl-4 bg-3 br d-flex mb-3">
              <div class="card-body text-start">
                <h4 class="card-title mt-2 mb-3">Snorlax</h4>
                <h6 class="card-text mb-1">Type:</h6>
                <p>Water</p>
                <button type="button" class="btn btn-light mb-2 d-flex">005</button>
              </div>
              <div class="test">
                <img class="mt-1" src="assets/img/snorlax.png" width="150" height="150">
              </div>
            </div>
          </div>
          <div class="row justify-content-around ms-2 me-2 d-flex flex-wrap">
            <div class="col-md-5 col-lg-5 col-xl-3 bg br d-flex mb-3">
              <div class="card-body text-start">
                <h4 class="card-title mt-2 mb-3">Eevee</h4>
                <h6 class="card-text mb-1">Type:</h6>
                <p>Earth</p>
                <button type="button" class="btn btn-light mb-2 d-flex">001</button>
              </div>
              <div class="test">
                <img class="mt-1" src="assets/img/eevee.png" width="150" height="150">
              </div>
            </div>
            <div class="col-md-5 col-lg-5 col-xl-4 bg-5 br d-flex mb-3">
              <div class="card-body text-start">
                <h4 class="card-title mt-2 mb-3">Ninetiles</h4>
                <h6 class="card-text mb-1">Type:</h6>
                <p>Light</p>
                <button type="button" class="btn btn-light mb-2 d-flex">007</button>
              </div>
              <div class="test">
                <img class="mt-1" src="assets/img/ninetales.png" width="150" height="150">
              </div>
            </div>
            <div class="col-md-6 col-lg-5 col-xl-4 bg-2 br d-flex mb-3">
              <div class="card-body text-start mb-3">
                <h4 class="card-title mt-2 mb-3">Charmander</h4>
                <h6 class="card-text mb-1">Type:</h6>
                <p>Fire</p>
                <button type="button" class="btn btn-light mb-2 d-flex">003</button>
              </div>
              <div class="test">
                <img class="mt-3" src="assets/img/charmander.png" width="150" height="150">
              </div>
            </div>
          </div>
          <div class="row justify-content-around ms-2 me-2 d-flex flex-wrap">
            <div class="col-md-5 col-lg-5 col-xl-4 bg-3 br d-flex mb-3">
              <div class="card-body text-start">
                <h4 class="card-title mt-2 mb-3">Squirtle</h4>
                <h6 class="card-text mb-1">Type:</h6>
                <p>Water</p>
                <button type="button" class="btn btn-light mb-2 d-flex">008</button>
              </div>
              <div class="test">
                <img class="mt-1" src="assets/img/squirtle.png" width="150" height="150">
              </div>
            </div>
            <div class="col-md-5 col-lg-5 col-xl-4 bg-5 br d-flex mb-3">
              <div class="card-body text-start">
                <h4 class="card-title mt-2 mb-3">Jigglypuff</h4>
                <h6 class="card-text mb-1">Type:</h6>
                <p>Light</p>
                <button type="button" class="btn btn-light mb-2 d-flex">004</button>
              </div>
              <div class="test">
                <img class="mt-1" src="assets/img/jigglypuff.png" width="150" height="150">
              </div>
            </div>
            <div class="col-md-6 col-lg-5 col-xl-3 bg-7 br d-flex mb-3">
              <div class="card-body bg-6 text-start">
                <h4 class="card-title mt-2 mb-3">Bulbasaur</h4>
                <h6 class="card-text mb-1">Type:</h6>
                <p>Grass,Poison</p>
                <button type="button" class="btn btn-light mb-2 d-flex">009</button>
              </div>
              <div class="test">
                <img class="mt-1 bg-6" src="assets/img/bulbasaur.png" width="150" height="150">
              </div>
            </div>
          </div>

        </main>
      </div>
      <footer class="text-center pt-3 border-top">
      <p>Created with <i class="bi bi-heart-fill text-danger"></i> by <a class="fw-bold text-dark" href="https://www.instagram.com/newname022/">Bima Tresna Putra</a></p>
    </footer>
    </div>
    <script src="js/bootstrap.bundle.min.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script> -->
  </body>
</html>