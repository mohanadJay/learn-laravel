 @extends('layout')


 @section('main')
     <h1>{{ $heading }}</h1>

     <article>
         @foreach ($list as $item)
             <h2><a href="{{ $listType . '/' . $item->id }}">{{ $item->name }}</a></h2>



             @if ($listType === 'user')
                 <h3>email:<a href="mailto:{{ $item->email }}">{{ $item->email }}</a> </h3>
             @endif
         @endforeach

     </article>
 @endsection
