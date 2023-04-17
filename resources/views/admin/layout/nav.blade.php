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
<div class="row">
    <div class="col-4 btn btn-primary">

    </div>
    <div class="col-4">

    </div>
</div>
@yield('content')
</body>
</html>
