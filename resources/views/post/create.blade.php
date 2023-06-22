@extends('layouts.main')
@section('content')
    <h5> is create page</h5>
    <div>
        <form action="{{ route('post.store') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="title">title</label>
                <input type="text" name="title" class="form-control" id="title" placeholder="title">
            </div>
            <div class="form-group">
                <label for="content">content</label>
                <textarea class="form-control"  name="content" id="content" placeholder="content"></textarea>
            </div>
            <div class="form-group">
                <label for="image">image</label>
                <textarea class="form-control" id="image" name="image" placeholder="image"></textarea>
            </div>
            {{-- <div class="form-group">
                <label for="image">likes</label>
                <textarea input type="number" class="form-control" id="Likes" placeholder="Likes"></textarea>
            </div> --}}
            <button type="submit" class="btn btn-primary">CREATE</button>
        </form>
    </div>
@endsection
