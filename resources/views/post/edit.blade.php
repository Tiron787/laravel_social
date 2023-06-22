@extends('layouts.main')
@section('content')
    <h5> is create page</h5>
    <div>
        <form action="{{ route('post.update', $post->id) }}" method="post">
            @csrf
            @method('patch'); 
            <div class="form-group">
                <label for="title">title</label>
                <input type="text" name="title" class="form-control" id="title" placeholder="title" value="{{$post->title}}">
            </div>
            <div class="form-group">
                <label for="content">content</label>
                <textarea class="form-control"  name="content" id="content" placeholder="content">{{$post->content}}</textarea>
            </div>
            <div class="form-group">
                <label for="image">image</label>
                <input type="text" class="form-control" id="image" name="image"  value="{{$post->image}}" placeholder="image" ></textarea>
            </div>
            {{-- <div class="form-group">
                <label for="image">likes</label>
                <textarea input type="number" class="form-control" id="Likes" placeholder="Likes"></textarea>
            </div> --}}
            <button type="submit" class="btn btn-primary">UPDATE</button>
        </form>
    </div>
@endsection
