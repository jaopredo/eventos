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

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <div class="card interface">
        <header class="card-header">
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="container-fluid">
                    <a class="navbar-brand" href="/">
                        <strong>LOGO</strong>
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a href="/" class="nav-link">EVENTOS</a>
                            </li>
                            @auth
                                <li class="nav-item">
                                    <a class="nav-link" href="/dashboard">MEUS EVENTOS</a>
                                </li>
                                <li class="nav-item"><form action="/logout" method="POST">
                                    @csrf
                                    <a href="/logout" class="nav-link" onclick="event.preventDefault();
                                        this.closest('form').submit();">LOGOUT</a>
                                </form></li>
                                @yield ('aditional-nav-items')
                            @endauth
                            @guest
                                <li class="nav-item">
                                    <a href="/login" class="nav-link">LOGIN</a>
                                </li>
                                <li class="nav-item">
                                    <a href="/register" class="nav-link">REGISTRAR</a>
                                </li>
                            @endguest
                        </ul>
                    </div>
                </div>
              </nav>
        </header>
        <main class="card-body">
            @yield('content')
            @if (session('msg'))
                <div class="message">
                    {{ session('msg') }}
                </div>
            @endif
        </main>
        <footer class="card-footer text-center">RODAPÉ</footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous" defer></script>
</body>
</html>
