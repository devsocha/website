@extends('admin.layout.nav')
@section('title','Panel admina')
@section('content')
    <div class="row m-5">
        <form>
            <div class="mb-3">
                <label for="title" class="form-label">Tytuł posta</label>
                <input type="text" class="form-control" id="title" placeholder="Przykładowy tytuł - WOW">
            </div>
            <div class="mb-3">
                <label for="desc" class="form-label">Opis</label>
                <textarea class="form-control" id="desc" rows="10"placeholder="Przykładowy tekst - WOW"></textarea>
            </div>
            <div>
                <input class="btn btn-primary "type="submit" value="Dodaj">
                <a href="{{route('admin.posts')}}"class="btn btn-secondary" >Cofnij</a>
            </div>
        </form>
    </div>
@endsection
