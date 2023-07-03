@extends('layouts.main')
@section('content')
    <h5> is create page</h5>
    <div>
        <form action="{{ route('post.store') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="title">title</label>
                <input
                value="{{old('title')}}"
                type="text" name="title" class="form-control" id="title" placeholder="title">
            </div>

            @error('title')
            <p class="text-danger">{{$message}}</p>
            @enderror

            <div class="form-group">
                <label for="content">content</label>
                <textarea class="form-control"  name="content" id="content" placeholder="content">{{old('content')}}</textarea>
            </div>

            @error('content')
            <p class="text-danger">{{$message}}</p>
            @enderror

            <div class="form-group">
                <label for="image">image</label>
                <input value="{{old('image')}}" class="form-control" id="image" name="image" type="text" placeholder="image">
            </div>

            @error('image')
            <p class="text-danger">{{$message}}</p>
            @enderror

            <div class="form-group">
                <label for="Category">Category</label>
                <select class="form-control" id="Category" name="category_id">

                    @foreach ($categories as $category)
                    {{old('category_id') == $category->id ? ' selected' : '' }}
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
