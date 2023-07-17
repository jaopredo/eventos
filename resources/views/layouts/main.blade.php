<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital@0;1&family=Roboto:wght@300&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous" defer></script> --}}

    {{-- <link rel="stylesheet" href="/css/teste.css"> --}}
</head>
<body>
    <header>
        <nav class="navbar navbar-espand-lg navbar-light">
            <div class="collapse navbar-collapse" id="navbar">
                <a href="/" class="navbar-brand">
                    <img src="/images/logo.avif" alt="LOGO">
                </a>
                <ul class="navbar-nav">
                    <li class="nav-item"><a href="/produtos" class="nav-link">PRODUTOS</a></li>
                    <li class="nav-item"><a href="/teste" class="nav-link">TESTE</a></li>
                </ul>
            </div>
        </nav>
    </header>
    @yield('content')
    <footer>RODAPÉ</footer>
</body>
</html>
