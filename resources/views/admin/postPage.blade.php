@extends('admin.layout.nav')
@section('title','Panel admina')
@section('content')
    <div class="row m-5">
        <a class="btn btn-primary" href="{{route('admin.posts.add')}}" >Dodaj nowy post</a>
    </div>

    <div class="row m-5">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th style="width:70%" scope="col">Tytuł</th>
                <th scope="col">Akcje</th>
            </tr>
            </thead>
            <tbody>
                @foreach($posts as $post)
                    <tr>
                        <th scope="row">{{$loop->iteration}}</th>
                        <td>{{$post->title}}</td>
                        <td>
                            <a class="btn btn-danger" href="{{route('admin.post.delete',['id'=>$post->id])}}">Usuń</a>
                            <a class="btn btn-secondary" href="{{route('admin.posts.edit',['id'=>$post->id])}}">Edytuj</a>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>

    </div>
    <div class="row m-5" >
        {!! $posts->links() !!}
    </div>
@endsection
