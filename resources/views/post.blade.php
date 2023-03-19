 @extends('layout')


 @section('main')
     <article>
         {{-- @dd($post->category->id) --}}
         <h1> <a href="/category/{{ $post->category->id }}">{{ $post->category->name }}</a> </h1>

         <h1> {{ $post->title }}</a> </h1>

         <h2> {!! $post->date !!}</h2>

         <div>
             {{ $post->abstract }}
         </div>
         <br>
         <div>
             {{ $post->body }}
         </div>
         <br>
         <a href="/">back</a>




     </article>
 @endsection
