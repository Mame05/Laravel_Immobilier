<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GESTION BIEN IMMOBILIER</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container text-center">
        <div class="row">
            <div class="col s12">
              <h4>Salut {{auth()->user()->prenom}} {{auth()->user()->nom}}</h4>
              <h4>Voici la liste de vos biens</h4>
                <hr>
                <p class="d-inline-flex gap-3">
                  <a href="/biens/ajouter" class="btn btn-primary">Ajouter un bien</a>
                  <a href="#" onclick="document.getElementById('logout-form').submit()">
                    <form action="{{route('logout')}}" action="post" id="logout-form">@csrf</form>
                     Se deconnecter
                  </a>
                </p>
                <hr>
                @if (session('status'))
                <div class="alert alert-success">
                    {{session('status')}}
                </div>
                @endif
                @php
                    $ide = 1;
                @endphp
                <div class="row">
                @foreach($biens as $bien)
                <div class="col-sm-3">
                    <div class="card" style="width: 20rem;height:400px">
                    <img src="{{ $bien->image }}" class="card-img-top" alt="..." width="20rem" height="200px"> <!--permet losqu'on met l'url de l'image on le verra-->
                    <div class="card-body">
                      <h5 class="card-title">{{ $bien->nom }}</h5>
                      <h6 class="card-text">Catégorie: {{ $bien->categorie }}</h6>

                      <!--<div class="form-group">-->
                        <p>
                            <div>
                                @if($bien->statut=='libre')
                                <span class="badge text-bg-success">Libre</span>
                                @else
                                <span class="badge text-bg-danger">Occupé</span>
                                @endif
                            </div>
                        </p>
                        <br>
                      <p class="d-inline-flex gap-3">  <!--C'est pour mettre des espacements entre les button-->
                      <a href="/detail-bien/{{ $bien->id }}"  class="btn btn-outline-success btn-sm">Voir détails</a>
                      <a href="/modifier-bien/{{ $bien->id }}"  class="btn btn-outline-primary btn-sm">Modifier</a>
                      <a href="/supprimer-bien/{{ $bien->id }}"  class="btn btn-outline-danger btn-sm">Supprimer</a>
                      </p>
                    </div>
                    </div>
                </div>
                  @php
                  $ide += 1;
                  @endphp
                  @endforeach
                </div>
    </div>
</div>
</div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>




