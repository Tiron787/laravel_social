@extends('layouts.main')
@section('content')
    <div><h5> is post page</h5></div>
    <div><a href="{{route('post.create')}}" class="btn btn-primary mb-3">CREATE</a></div>
    <div>
        @foreach ($posts as $post)
            <div>
                <a href="{{route ('post.show', $post->id)}}">{{$post->id}} . {{$post->title}}</a>
            </div>
        @endforeach
    </div>@endsection
 