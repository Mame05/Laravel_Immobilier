<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GESTION DE BIEN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
 
  <div class="container"></div>

<div class="container"df:wrap>

                                        <form action="/modifier/commentaire-traitement" method="POST" class="form-group">
                                       
                                            @csrf
                                           
                                                <div class="form-group">
                                                   <input type="text" name="id" style="display:none"  value="{{$commentaires->id}}" >
                                                    <input type="hidden" name="bien_id" value="{{$commentaires->bien_id}}">
                                                    <label for="auteur">Présentez-vous!!!</label>
                                                    <input type="text" class="form-control" id="auteur" name="auteur" value="{{old('auteur', $commentaires->auteur)}}">
                                                </div>
                                               
                                                <br>
                                               
                                                <div class="form-group">
                                                    <label for="contenu">Que dites-vous???</label>
                                                    <textarea class="form-control" id="contenu" name="contenu">"{{old('contenu', $commentaires->contenu)}}"</textarea>
                                                </div>
                                                <br>
                                               
                                   
                                   
                                                                   
                                            <br>
                                            <button type="submit" class="btn btn-primary btn-sm">MODIFIER</button>
        </div>
       </div>
      </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

