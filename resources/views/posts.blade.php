@extends('layout')


@section('main')
    {{-- <ul>
        <li><a href="/">Home </a></li>
        <li><a href="/category">Home </a></li>

    </ul> --}}

    <h1>{{ $heading }}</h1>
    @foreach ($posts as $post)
        <article>

            <h1> <a href="/post/{{ $post->id }}">{{ $post->title }}</a> </h1>


            <h3>By <a href="/user/{{ $post->user->id }}"> {{ $post->user->name }}</a><br> in <a
                    href="/category/{{ $post->category->id }}">{{ $post->category->name }}</a> </h3>

            <h2> {!! $post->date !!}</h2>

            <div>
                {{ $post->abstract }}
            </div>


        </article>
    @endforeach
@endsection
