@extends('layouts.main')
@section('content')
        <div class="container">
                <form action="{{ route('post.update', $post->id) }}" method="post">
                    @csrf
                    @method('patch')
                    <div class="form-group mt-3">
                        <label for="title">title</label>
                        <input name="title" type="text" class="form-control" id="title" placeholder="title" value="{{ $post->title }}">
                    </div>
                    <div class="form-group mt-3">
                        <label for="content">Content</label>
                        <textarea name="content" class="form-control" id="content" placeholder="Content" >{{ $post->content }}</textarea>
                    </div>
                    <div class="form-group mt-3">
                        <label for="image">Image</label>
                        <input name="image" type="text" class="form-control" id="title" placeholder="image" value="{{ $post->image }}">
                    </div>
                    <button type="submit" class="btn btn-outline-danger mt-5">Update</button>
                    <div class="form-group mt-3"><a  type="button" class="btn btn-outline-success mb-2 mt-2" href="{{ route('post.index') }}">Back-Назад</a>
                    </div>


                </form>
        </div>

@endsection



{{--<div>--}}
{{--    <form action="{{ route('post.update', $post->id) }}" method="post">--}}
{{--        @csrf--}}
{{--        @method('patch')--}}
{{--        <div class="form-group">--}}
{{--            <label for="title">Title</label>--}}
{{--            <input type="text" class="form-control" name="title" id="title" placeholder="Title"--}}
{{--                   value="{{ $post->title }}">--}}
{{--        </div>--}}
{{--        <div class="form-group">--}}
{{--            <label for="content">Content</label>--}}
{{--            <textarea name="content" class="form-control" id="content"--}}
{{--                      placeholder="Content">{{ $post->content }}</textarea>--}}
{{--        </div>--}}
{{--        <div class="form-group">--}}
{{--            <label for="image">Image</label>--}}
{{--            <input name="image" type="text" class="form-control" id="image" value="{{ $post->image }}"--}}
{{--                   placeholder="Image">--}}
{{--        </div>--}}

{{--        <div class="form-group">--}}
{{--            <label for="category">Категория</label>--}}
{{--            <select class="form-control" id="category" name="category_id">--}}
{{--                @foreach($categories as $category)--}}

{{--                    <option--}}
{{--                        {{ $category->id === $post->category_id ? ' selected' : '' }}--}}
{{--                        value="{{ $category->id }}">--}}
{{--                        {{ $category->title }}--}}
{{--                    </option>--}}

{{--                @endforeach--}}

{{--            </select>--}}
{{--        </div>--}}

{{--        <div class="form-group">--}}
{{--            <label for="tags">Tag</label>--}}
{{--            <select multiple class="form-control" id="tags" name="tags[]">--}}
{{--                @foreach($tags as $tag)--}}

{{--                    <option--}}
{{--                        @foreach($post->tags as $postTag)--}}
{{--                            {{ $tag->id === $postTag->id ? ' selected' : '' }}--}}
{{--                        @endforeach--}}
{{--                        value="{{ $tag->id }}">{{ $tag->title }}</option>--}}

{{--                @endforeach--}}

{{--            </select>--}}
{{--        </div>--}}


{{--        <button type="submit" class="btn btn-primary">Update</button>--}}
{{--    </form>--}}
{{--</div>--}}
