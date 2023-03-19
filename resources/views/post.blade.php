 @extends('layout')


 @section('main')
     <h1>My Blog</h1>

     <a href="/">back</a>

     <article>

         <h1> {{ $post->title }}</a> </h1>

         <h2> {!! $post->date !!}</h2>

         <div>
             {{ $post->abstract }}
         </div>


     </article>
 @endsection
