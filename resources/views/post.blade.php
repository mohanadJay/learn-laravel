 @extends('layout')


 @section('main')
     <article>


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
