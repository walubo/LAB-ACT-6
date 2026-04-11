@extends('layouts.app')

@section('title', ucfirst($name) . "'s Posts")

@section('content')
    <h1 class="text-4xl font-bold mb-8">{{ ucfirst($name) }}'s Posts</h1>

    <ul class="list-disc list-inside space-y-2 text-gray-700 mb-8">
        @foreach($posts as $post)
            <li>{{ $post }}</li>
        @endforeach
    </ul>

    <div class="flex space-x-4 text-gray-600">
        <a href="#"><i class="fab fa-facebook"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
    </div>
@endsection
