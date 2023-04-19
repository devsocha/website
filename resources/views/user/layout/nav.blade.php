<!doctype html>
<html lang="pl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') - DevSocha.pl</title>
    @include('general.layout.css')
</head>
<body style="font-family: 'Rubik', sans-serif; ">
@include('general.layout.scripts')
<div class="row" style="width: 100%;height: 100%;position:absolute;">
    <div class="col-3" style="  background-color: dodgerblue;">
        <div class="row">
        </div>
        <div class="row m-3" >
            <a class="btn btn-primary" >
                Strona główna
            </a>
        </div>
        <div class="row m-3" >
            <a class="btn btn-primary" >
                Twoje kursy
            </a>
        </div>
        <div class="row m-3" >
            <a class="btn btn-primary" >
                Ustawienia
            </a>
        </div>
        <div class="row m-3" >
            <a href="{{route('homePage')}}" class="btn btn-success" >
                Wróć na stronę
            </a>
        </div>
        <div class="row m-3" >
            <a href="{{route('logout')}}" class="btn btn-danger" >
                Wyloguj
            </a>
        </div>
    </div>
    <div class="col-9">
        @yield('content')
    </div>
</div>
</body>
</html>

