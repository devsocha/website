@extends('admin.layout.nav')
@section('title','Panel admina')
@section('content')
    <div class="row m-5">
        <a class="btn btn-primary" href="" >Dodaj nowy post</a>
    </div>

    <div class="row m-5">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th style="width:70%"scope="col">Tytuł</th>
                <th scope="col">Akcje</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>
                    <a class="btn btn-danger" href="">Usuń</a>
                    <a class="btn btn-secondary" href="">Edytuj</a>
                </td>
            </tr>

            </tbody>
        </table>
    </div>
@endsection
