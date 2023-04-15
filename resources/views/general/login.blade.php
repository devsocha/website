@extends('general.layout.nav')
@section('title','Rejestracja')
@section('content')
    <form method="post" action="{{route('login.confirm')}}">
        @csrf
        <div class="row mt-5 text-center">
            <h1>LOGOWANIE</h1>
        </div>
        <div class="row mt-6">
            <div class="col-3"></div>
            <div class="col-6">
                <input type="text"  name="email" class="form-control" placeholder="Email" aria-label="Email">
            </div>
            <div class="col-3"></div>
        </div>
        <div class="row mt-4">
            <div class="col-3"></div>
            <div class="col-6">
                <input type="password" name="password"  class="form-control" placeholder="Hasło" >
            </div>
            <div class="col-3"></div>
        </div>
        <div class="row mt-4 text-center">
            <div class="col-3"></div>
            <div class="col-6">
                <input type="submit" class="btn btn-primary" value="Zaloguj" aria-label="Email">
            </div>
            <div class="col-3"></div>
        </div>
    </form>
@endsection
