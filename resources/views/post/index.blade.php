@extends('layouts.main')
@section('content')
    

    <div class="container">
        <div>
        <h4>posts</h4>
    </div>
        <div>
            <a href="{{ route('post.create') }}" class="btn btn-primary mb-3">CREATE</a>
        </div>
        <div>
            @foreach ($posts as $post)
                <div>
                    <a href="{{ route('post.show', $post->id) }}">{{ $post->id }} . {{ $post->title }}</a>
                </div>
            @endforeach
        <div class="mt-3">
            {{$posts->withQueryString()->links()}}
        </div>
        </div>
    </div>
@endsection
