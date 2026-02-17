@extends('layouts.main')
@section('content')

    <form action="{{ route('post.store') }}" method="post">
                @csrf
                <div class="form-group mt-3">
                    <label for="title">title</label>
                    <input name="title" type="text" class="form-control" id="title" placeholder="title">
                </div>
                    @error('title')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                <div class="form-group mt-3">
                    <label for="content">Content</label>
                    <textarea name="content" class="form-control" id="content" placeholder="Content"></textarea>
                </div>
                <div class="form-group mt-3 mb-3">
                    <label for="image">Image</label>
                    <input name="image" type="text" class="form-control" id="title" placeholder="image">
                </div>

                    <label class="mb-3" for="category">Category</label>

                    <select class="form-control" name="category_id" id="category" aria-label="Default select example">
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->title }}</option>
                        @endforeach
                    </select>

                <div class="form-group mt-3">
                    <label for="tags">Tags</label>
                    <select multiple class="form-control" id="tags" name="tags[]">
                        @foreach($tags as $tag)
                        <option value="{{ $tag->id }}">{{ $tag->title }}</option>
                        @endforeach
                    </select>
                </div>


                <button type="submit" class="btn btn-outline-danger mt-3">Create</button>
    </form>


@endsection
