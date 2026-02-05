@extends('layouts.main')
@section('content')

        <div class="container mt-5">

            <div>
                <a type="button" class="btn btn-outline-success mb-2 mt-5" href="{{ route('post.create') }}">Добавить пост</a>
            </div>

           <div class="">  {{ $post->id }} . {{ $post->title }} </div>
            <div> {{ $post->content }} </div>
        </div>


        <div><a class="btn" href="{{ route('post.index') }}">Back-Назад</a>
        </div>

@endsection
