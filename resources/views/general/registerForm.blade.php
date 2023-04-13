@extends('general.layout.nav')
@section('title','Rejestracja')
@section('content')
    <form method="post" action="{{route('rejestracjaUsera')}}">
        @csrf
        <div class="row mt-5 text-center">
            <h1>REJESTRACJA</h1>
        </div>
        <div class="row mt-5">
            <div class="col-3"></div>
            <div class="col-3">
                <input type="text" name="name" class="form-control" placeholder="Imię" aria-label="First name">
            </div>
            <div class="col-3">
                <input type="text" name="secondName"  class="form-control" placeholder="Nazwisko" aria-label="Last name">
            </div>
            <div class="col-3"></div>
        </div>
        <div class="row mt-4">
            <div class="col-3"></div>
            <div class="col-6">
                <input type="text"  name="email" class="form-control" placeholder="Email" aria-label="Email">
            </div>
            <div class="col-3"></div>
        </div>
        <div class="row mt-4">
            <div class="col-3"></div>
            <div class="col-3">
                <input type="password" name="password"  class="form-control" placeholder="Hasło" aria-label="Password">
            </div>
            <div class="col-3">
                <input type="password"  name="rePassword" class="form-control" placeholder="Wprowadź ponownie hasło" aria-label="rePassword">
            </div>
            <div class="col-3"></div>
        </div>
        <div class="row mt-4 text-center">
            <div class="col-3"></div>
            <div class="col-6">
                <input type="submit" class="btn btn-primary" value="Zarejestruj" aria-label="Email">
            </div>
            <div class="col-3"></div>
        </div>
    </form>
@endsection
