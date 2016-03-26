@extends('layouts.master')


@section('title')
    Lorum Ipsum Generator
@stop


{{--
This `head` section will be yielded right before the closing </head> tag.
Use it to add specific things that *this* View needs in the head,
such as a page specific stylesheets.
--}}
@section('head')
    <link href="/css/liStyle.css" type='text/css' rel='stylesheet'>
@stop


@section('content')


      
      <h3>Here you go pal, {{ $liCount }} paragraphs of Lorum Ipsum. Have a great day!</h3>
    


      
        @if ($lorum)
            	@foreach ($lorum as $value)
    				<p>{{ $value}}</p>
				@endforeach
        @else
            <p>please select number of paragraphs</p>
        @endif
      
      
      
      

			{{-- Blade Comment 
            
            @if($this)
            	Do this
            @else
            	do this
             @endif
            
            --}}



@stop


{{--
This `body` section will be yielded right before the closing </body> tag.
Use it to add specific things that *this* View needs at the end of the body,
such as a page specific JavaScript files.
--}}
@section('body')
    <script src="/js/li/scripts.js"></script>
@stop