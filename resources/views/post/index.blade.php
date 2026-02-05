@extends('layouts.main')
@section('content')

        <div>
            <div>
                <a type="button" class="btn btn-outline-success mb-2 mt-5" href="{{ route('post.create') }}">Добавить пост</a>
            </div>

          @foreach($posts as $post)
           <div><a href="{{ route('post.show', $post->id) }}">{{ $post->id }} . {{ $post->title }}</a>
           </div>
          @endforeach

            <div class="mt-3">

{{--                {{ $posts->withQueryString()->links() }}--}}
            </div>
        </div>

@endsection
