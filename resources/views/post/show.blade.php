@extends('layouts.main')
@section('content')
    <div>
        <h5> is post page</h5>
    </div>
    <div> {{ $post->id }}. {{ $post->title }}</div>
    <div>{{ $post->content }}</div>
    <div><a href="{{ route('post.edit', $post->id) }}">Edit</a></div>

    <form action="{{ route('post.delete', $post->id) }}" method="post">
        @csrf
        @method('delete')
        <input type='submit' value="Delete" class="btn btn-danger">
    </form>


    <div><a href="{{ route('post.index') }}">Back</a></div>
@endsection
