@extends('layouts.master')


@section('title')
    Home - Lorum Ipsum Generator / Random User
@stop


{{--
This `head` section will be yielded right before the closing
</head>
tag.
Use it to add specific things that *this* View needs in the head,
such as a page specific stylesheets.
--}}
@section('head')
<link href="/css/homeStyle.css" type='text/css' rel='stylesheet'>
@stop


@section('content')
<div class="row">
  <div class="col-md-12">
    <h1>Intro</h1>
  </div>
  <!--Column End--> 
</div>
<!--Row End-->

<div class="row">
  <div class="col-md-6">
    <h2>Lorum Ipsum Generator</h2>
    <form action="/li" method="get">
      Number of Paragraphs<br>
      <input type="number" name="liCount" placeholder="5">
      <br>
      
      <input type="submit" value="Get Lorum Ipsum">
    </form>
  </div>
  <!--Column End-->
  <div class="col-md-6">
    <h2>Random User Generator</h2>
        <form action="/user" method="get">
      Number of Paragraphs<br>
      <input type="number" name="userCount" placeholder="5">
      <br>
      
      <input type="submit" value="Get Random Users">
    </form>
    
    
  </div>
  <!--Column End--> 
</div>
<!--Row End-->



{{--
<h1>Variable Data: {{ $abc }} </h1>
<h2>Lorum: {{$lorum}}</h2>--}}

{{-- Blade Comment 
            
            @if($this)
            	Do this
            @else
            	do this
             @endif
            
            --}}



@stop


{{--
This `body` section will be yielded right before the closing
</body>
tag.
Use it to add specific things that *this* View needs at the end of the body,
such as a page specific JavaScript files.
--}}
@section('body') 
<script src="/js/scripts.js"></script> 
@stop