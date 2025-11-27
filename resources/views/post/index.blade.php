@extends('layouts.main')
@section('content')

        <div>

            <div>

                <a type="button" class="btn btn-dark mb-3" href="{{ route('post.create') }}">Добавить пост</a>

            </div>

          @foreach($posts as $post)
           <div><a href="{{ route('post.show',$post->id) }}">  {{ $post->id }} . {{ $post->title }} </a></div>
          @endforeach
        </div>

@endsection
