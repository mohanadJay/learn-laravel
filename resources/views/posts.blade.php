@extends('layout')


@section('main')
    <h1>{{ $heading }}</h1>
    @foreach ($posts as $item)
        <article>

            <h1> <a href="/post/{{ $item->id }}">{{ $item->title }}</a> </h1>

            <h2> {!! $item->date !!}</h2>

            <div>
                {{ $item->abstract }}
            </div>


        </article>
    @endforeach
@endsection
