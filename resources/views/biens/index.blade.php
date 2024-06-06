<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>GESTION BIEN IMMOBILIER</title>
</head>
<body>
    <header style="position: relative; padding: 0 10rem; background-color: #131113; margin: 0;">
        <div class="navbar" style="width: 100%;height: 88px;margin: 0 auto;display: flex;align-items: center;justify-content: space-between;">
            <div class="logo" style="font-weight:700;font-size:30px; ">
                <a style="text-decoration: none;color:#f55d16"href="#">ImmoExpert</a>
            </div>
            <ul class = "links" style=" font-weight:400;font-size:24px;display: flex;gap: 25px; ">
                <li style="list-style: none;"><a style="text-decoration: none; margin-right:70rem;color:#ffffff" href="#">Accueil</a> </li>
            </ul>
            <button type="button" style="background-color: #ffffff;width: 200px;height: 55px;border-radius: 5px;outline: none;cursor: pointer;padding: 14px 8px 16px 13px;cursor: pointer;"><a style="font-weight: semi-bold;font-size: 20px; text-decoration: none; color:#000000"href="#">Personnel</a>
            </button>
        </div>
    </header>
    <section class="banniere" style="margin-top: -25px;width: 100%;height: 600px;background-image:linear-gradient(rgba(19,17,19,0.50), rgba(19,17,19,0.50)),url(https://images.pexels.com/photos/5178055/pexels-photo-5178055.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1);background-size: cover;background-repeat: no-repeat; background-position:center;">
        <h1 style="font-size: 35px;color: #f55d16;padding-top: 120px ;padding-right: 501px;padding-left: 750px;">Bienvenue sur ImmoExpert</h1>
        <h3 style="font-size: 30px;color: #f55d16;padding-top: 40px;padding-left: 500px;line-height: 1.3;text-indent: 1.4em;">Votre partenaire de confiance dans toutes vos transactions immobilières.</h3>
        <h3 style="font-size: 30px;color: #f55d16;padding-left: 550px;line-height: 1.3;">Découvrez notre sélection exclusive de biens de qualité et laissez-nous<br> vous guider vers la propriété de vos rêves. </h3>
    </section>
    <section class="description" style=" width: 100%;height: 400px;background-color: #ffffff;">
        <div class="trait" style="width: 300px;height: 3px;background-color: #f07d07;margin: 0 auto;margin-top:30px"></div>
        <div class="container" style="display:flex; margin-top:40px">
            <div style="margin-left:50px;">
                <p style="font-size: 18px;color: #f07d07">VOUS CHERCHEZ UN VILLA DANS UN BON ENVIRONNEMENT ?</p>
                <p style="font-size: 16px;color: #999999">Notre entreprise vous offre une collection riche avec les options que vous désirez.</p>
            </div>
            <div style="margin-left:50px;">
                <p style="font-size: 18px;color: #f07d07">VOUS CHERCHEZ UN APPARTEMENT LUXIEUX AVEC UN PRIX CONVENABLE?</p>
                <p style="font-size: 16px;color: #999999">Notre entreprise vous offre une collection riche avec les options que vous désirez.</p>
            </div>
            <div style="margin-left:50px;">
                <p style="font-size: 18px;color: #f07d07">VOUS CHERCHEZ UN STUDIO  AVEC UN PRIX CONVENABLE?</p>
                <p style="font-size: 16px;color: #999999">Notre entreprise vous offre une collection riche avec les options que vous désirez.</p>
            </div>
        </div>
        <div class="trait" style="width: 300px;height: 3px;background-color: #f07d07;margin: 0 auto;margin-top:20px"></div>
    </section>
    <section style=" width: 100%;background-color: #ffffff; margin-top:-100px">
        <h1 style="text-align: center;"> Nous Proposons </h1>
        <div class="container text-center"> 
        <div class="row">
            @foreach($biens as $bien)
            <div class="col-sm-3">
                <div class="card" style="width: 100%;height:500px">
                    <img src="{{ $bien->image }}" class="card-img-top" alt="..." width="100%" height="300px"> <!--permet losqu'on met l'url de l'image on le verra-->
                    <div class="card-body">
                        <h5 class="card-title">{{ $bien->nom }}</h5>
                        <h6 class="card-text">Avec comme classe: {{ $bien->categorie }}</h6>
                        <div>
                            @if($bien->statut=='libre')
                            <span class="adge rounded-pill text-bg-warning">Libre</span>
                            @else
                            <span class="adge rounded-pill text-bg-warning">Occupé</span>
                            @endif
                        </div>
                    <br>
                        <a href="/detail-bien/{{ $bien->id }}"  class="btn btn-outline-success btn-sm">Voir détails</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    </section>-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

