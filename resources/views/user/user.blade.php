@extends('layouts.master')


@section('title')
    User Generator
@stop


{{--
This `head` section will be yielded right before the closing </head> tag.
Use it to add specific things that *this* View needs in the head,
such as a page specific stylesheets.
--}}
@section('head')
    <link href="/css/userStyle.css" type='text/css' rel='stylesheet'>
@stop


@section('content')


      <h1>Name: {{ $userName }} </h1>
 	  <h1>eMail: {{ $userEmail }} </h1>
      <h1>City: {{ $userCity }} </h1>
      <h1>Credit Card: {{ $userCC }} </h1>
      <h1>Member Since: {{ $userMemberSince }} </h1> 
      
      
      <h1>Variable Data: {{ $abc }} </h1>
      
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
    <script src="/js/user/scripts.js"></script>
@stop