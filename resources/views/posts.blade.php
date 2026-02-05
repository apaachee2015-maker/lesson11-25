@extends('layouts.main')
   @section('content')

     @foreach($posts as $post)
         <div>{{ $post->title }}</div>
         <div>{{ $post->image }}</div>
         <div>{{ $post->likes }}</div>
     @endforeach

   @endsection
