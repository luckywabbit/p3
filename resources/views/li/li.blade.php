@extends('layouts.master')


@section('title')
    Developers SuperEST BestEST Friend Ever! | Lorum Ipsum Results
@stop


{{--
This `head` section will be yielded right before the closing </head> tag.
Use it to add specific things that *this* View needs in the head,
such as a page specific stylesheets.
--}}
@section('head')

@stop

@section('nav')
	{{-- Additional navigation to help user navigate back Home --}}
    <a href="/">Home</a>
@stop

@section('content')

    <h3>Here you go pal, {{ $liCount }} paragraphs of Lorem Ipsum. Have a great day!</h3>

    @if ($lorem)
        @foreach ($lorem as $value)
            <p>{{ $value}}</p>
        @endforeach
    @else
        <p>please select number of paragraphs</p>
    @endif

@stop


{{--
This `body` section will be yielded right before the closing </body> tag.
Use it to add specific things that *this* View needs at the end of the body,
such as a page specific JavaScript files.
--}}
@section('body')

@stop