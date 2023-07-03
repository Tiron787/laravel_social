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
            <div class="form-group">
                <label for="Category">Category</label>
                <select class="form-control" id="Category" name="category_id">
                    @foreach ($categories as $category)
                        <option value="{{ $category->id}}">{{$category->title }}</option>
                    @endforeach
                  
                </select>
              </div>
              <div class="form-group">
                <label for="Tags"> Tags</label>
                <select multiple class="form-control" id="Tags" name="tags[]">
                    @foreach ($tags as $tag)
                  <option value="{{$tag->id}}">{{$tag->title}}</option> 
                 @endforeach
                </select>
              </div>
            <button type="submit" class="btn btn-primary">CREATE</button>
        </form>
    </div>
 @endsection
