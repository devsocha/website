@extends('general.layout.nav')
@section('title','Strona główna')
@section('content')
    <div class="container-fluid Extra small" style="width: 100%;max-width:none ;padding-left:0;padding-right:0; font-family: 'Rubik', sans-serif;">
        <div>
            <img style="width: 100%;" src="{{asset('/images/baner/home.jpg')}}" alt=""/>
        </div>
        <div>
            @foreach($posts as $post)
                <div class="card m-5">
                    <div class="card-header">
                        {{$post->title}}
                    </div>
                    <div class="card-body">
                        <blockquote class="blockquote mb-0">
                            <p>{{$post->desc}}</p>
                            <footer class="blockquote-footer">{{$post->user->name}} {{$post->user->secondName}} </footer>
                        </blockquote>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="row m-5">
            {{$posts->links()}}
        </div>
    </div>


@endsection
