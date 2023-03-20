@extends('layout')


@section('main')
    <h1>{{ $heading }}</h1>
    @foreach ($posts as $post)
        <x-post-item :post="$post" />
    @endforeach
@endsection
