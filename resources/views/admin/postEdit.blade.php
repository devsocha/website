@extends('admin.layout.nav')
@section('title','Panel admina')
@section('content')
    <div class="row m-5">
        <form method="post" action="{{route('admin.post.edit')}}">
            @csrf
            <input type="hidden" value="{{$post->id}}" name="id">
            <div class="mb-3">
                <label for="title" class="form-label">Tytuł posta</label>
                <input type="text" name="title" class="form-control" id="title" value="{{$post->title}}" placeholder="Przykładowy tytuł - WOW">
            </div>
            <div class="mb-3">
                <label for="desc" class="form-label">Opis</label>
                <textarea name="desc" class="form-control" id="desc" rows="10" placeholder="Przykładowy tekst - WOW">{{$post->desc}}</textarea>
            </div>
            <div>
                <input class="btn btn-primary "type="submit" value="Popraw">
                <a href="{{route('admin.posts')}}"class="btn btn-secondary" >Cofnij</a>
            </div>
        </form>
    </div>
@endsection
