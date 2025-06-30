<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>@yield('titre')</title>

<div class="container-fluid text-dark">
    <ul class="nav justify-content-center">
        <li class="nav-item">
            <a class="nav-link" href="calendrier">Calendrier</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="billets">Billeterie</a>
        </li>
        <li class="nav-item">
            @if (session()->has('état'))
            <a class="nav-link" href="auth.account">Mon compte</a>
            @endif
            <a class="nav-link" href="login">Se connecter</a>
        </li>
    </ul>
</div>

    <a href="home"><img src="https://upload.wikimedia.org/wikipedia/fr/thumb/6/68/Logo_JO_d%27%C3%A9t%C3%A9_-_Paris_2024.svg/1200px-Logo_JO_d%27%C3%A9t%C3%A9_-_Paris_2024.svg.png" class="rounded mx-auto d-block img-thumbnail" alt="Logo des JO 2024" width="640" height="480"></a>
</head>
<body>
@yield('content')
</body>
</html>