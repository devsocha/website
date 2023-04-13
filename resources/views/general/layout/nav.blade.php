<!doctype html>
<html lang="pl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') - DevSocha.pl</title>
    @include('general.layout.css')
</head>
<body style="font-family: 'Rubik', sans-serif;">
@include('general.layout.scripts')
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid" >
        <a class="navbar-brand" href="{{route('homePage')}}">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('homePage')}}">Strona główna</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Oferta</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">O mnie</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Kontakt</a>
                </li>
            </ul>
            @if(!\Illuminate\Support\Facades\Auth::user())
                <a class="d-flex btn btn-secondary" role="search"> Zaloguj</a>
                <a href="{{route('rejestracja')}}"class="d-flex btn btn-primary" style="margin-left:1%" role="search"> Rejestracja</a>
            @endif
        </div>
    </div>
</nav>
@yield('content')
</body>
</html>
