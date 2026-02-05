@extends('layouts.main')
@section('content')

    <form action="{{ route('post.store') }}" method="post">
                @csrf
                <div class="form-group mt-3">
                    <label for="title">title</label>
                    <input name="title" type="text" class="form-control" id="title" placeholder="title">
                </div>
                <div class="form-group mt-3">
                    <label for="content">Content</label>
                    <textarea name="content" class="form-control" id="content" placeholder="Content"></textarea>
                </div>
                <div class="form-group mt-3">
                    <label for="image">Image</label>
                    <input name="image" type="text" class="form-control" id="title" placeholder="image">
                </div>

                <button type="submit" class="btn btn-outline-danger mt-5">Create</button>
    </form>


@endsection
