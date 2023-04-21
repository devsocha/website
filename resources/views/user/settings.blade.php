@extends('user.layout.nav')
@section('title','Panel usera - ustawienia')
@section('content')
    <form method="post" action="">
        @csrf
        <div class="row mt-5 text-center">
            <h1>REJESTRACJA</h1>
        </div>
        <div class="row mt-5">
            <div class="col-3"></div>
            <div class="col-3">
                <input type="text" name="name" value="{{$user->name}}" class="form-control" placeholder="Imię">
            </div>
            <div class="col-3">
                <input type="text" name="secondName" value="{{$user->secondName}}" class="form-control" placeholder="Nazwisko">
            </div>
            <div class="col-3"></div>
        </div>
        <div class="row mt-4">
            <div class="col-3"></div>
            <div class="col-6">
                <input type="text"  name="email" class="form-control" value="{{$user->email}}" placeholder="Email" aria-label="Email">
            </div>
            <div class="col-3"></div>
        </div>
        <div class="row mt-4">
            <div class="col-3"></div>
            <div class="col-3">
                <input type="password" name="password"  class="form-control" value="{{$user->password}}" placeholder="Hasło" >
            </div>
            <div class="col-3">
                <input type="password"  name="rePassword" class="form-control" value="{{$user->password}}" placeholder="Wprowadź ponownie hasło">
            </div>
            <div class="col-3"></div>
        </div>
        <div class="row mt-4 text-center">
            <div class="col-3"></div>
            <div class="col-6">
                <input type="submit" class="btn btn-primary" value="Zmień ustawienia" aria-label="Email">
            </div>
            <div class="col-3"></div>
        </div>
    </form>
@endsection
