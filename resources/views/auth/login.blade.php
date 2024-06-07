<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GESTION BIEN IMMOBILIER</title>
</head>
<body>

    @foreach($errors->all() as $error)
        {{$error}}
    @endforeach
    <form action="{{ route('authentification-login') }}" method="POST" >
    @csrf
        <div class="mb-3">
          <label for="email" class="form-label">Addresse email</label>
          <input type="email" class="form-control" id="email" name="email">
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Mot de passe</label>
          <input type="password" class="form-control" id="password" name="password">
        </div>
        <button type="submit" class="btn btn-primary">Se connecter</button>
      </form>
</body>
</html>