<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GESTION BIEN IMMOBILIER</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col s12">
          <h1>MODIFIER UN BIEN</h1>
          <hr>
          @if (session('status'))
            <div class="alert alert-success">
              {{ session('status') }}
            </div>
          @endif
          @if ($errors->any())
            <div class="alert alert-danger">
              @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
            </div>
          @endif

          <form action="{{url('/modifier/bien-traitement/')}}" method="post">
            @csrf
            <input type="text" name="id" style="display: none" value="{{ old('id', $biens->id) }}" >
             <div class="form-group">
              <label for="nom">Nom</label>
              <input type="text" class="form-control" id="nom" name="nom" value="{{ old('nom', $biens->nom) }}">
            </div>
              <div class="form-group">
                <label for="categorie">Catégorie</label>
                <select id="categorie" name="categorie" class="form-control" required value="{{old('categorie', $biens->categorie)}}">
                    <option value="Standard">Standard</option>
                    <option value="Moyen">Moyen</option>
                    <option value="Luxe">Luxe</option>
                </select>
            </div>
            <div class="form-group">
              <label for="image">Image illustrative </label>
              <input type="text" class="form-control" id="image" name="image"  value="{{ old('image', $biens->image) }}">
            </div>

            <div class="form-group">
              <label for="description">Description</label>
              <textarea class="form-control" id="description" name="description">{{ old('description', $biens->description) }}</textarea>
            </div>

            <div class="form-group">
              <label for="adresse">Adresse</label>
              <input type="text" class="form-control" id="adresse" name="adresse" value="{{ old('adresse', $biens->adresse) }}">
            </div>
            <div class="form-group">
                <label for="statut">Est-il libre ou occupé? </label>
                <select id="statut" name="statut" class="form-control" requiredvalue="" {{ $biens->statut ? 'checked' : '' }}>
                    <option value="occupe">Occupé</option>
                    <option value="libre">Libre</option>
                </select>

            <div class="form-group">
              <label for="date_ajout">Date de l'ajout</label>
              <input type="date" class="form-control" id="date_ajout" name="date_ajout" value="{{ old('date_ajout', $biens->date_ajout) }}">
            </div>

            <br>
            <button type="submit" class="btn btn-primary btn-sm">MODIFIER LE BIEN</button>

            <br>
            <br>
            <a href="/biens" class="btn btn-outline-primary btn-sm">Revenir au liste de vos biens</a>
          </form>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3."></script>
