@extends('layouts.main')
@section('content')

        <div class="container mt-5">

            <div>

            </div>

           <div class="">  {{ $post->id }} . {{ $post->title }} </div>
            <div> {{ $post->content }} </div>
        </div>

        <div>
            <a type="button" class="btn btn-outline-success mb-2 mt-2" href="{{ route('post.edit', $post->id) }}">Редактировать</a>
        </div>
        <form action="{{ route('post.delete', $post->id) }}" method="post">
            @csrf
            @method('delete')
            <input class="btn btn-danger" type="submit" value="Удалить">
        </form>
        <div><a  type="button" class="btn btn-outline-success mb-2 mt-2" href="{{ route('post.index') }}">Back-Назад</a>
        </div>

@endsection
