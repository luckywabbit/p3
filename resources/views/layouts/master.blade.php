<!doctype html>
<html>
<head>
    <title>
        {{-- Yield the title if it exists, otherwise default to 'Foobooks' --}}
        @yield('title','Foobooks')
    </title>

    <meta charset='utf-8'>
    
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-7s5uDGW3AHqw6xtJmNNtr+OBRJUlgkNJEo78P4b0yRw= sha512-nNo+yCHEyn0smMxSswnf/OnX6/KwJuZTlNZBjauKhTK0c+zT+q5JOCx0UFhXQ6rJR9jg6Es8gPuD2uZcYDLqSw==" crossorigin="anonymous">
    
    
    
    <link href="/css/style.css" type='text/css' rel='stylesheet'>

    {{-- Yield any page specific CSS files or anything else you might want in the <head> --}}
    @yield('head')

</head>
<body>

    
 <div class="container">
<div class="row">
<div class="col-md-12">
  <header>
  
    <a href="http://p3.loc"><h1>Logo Lorum Ipsum Random user Generator</h1></a>
    
    
    <nav>
      <ul>
        <li><a href="/li">Lorum Ipsum Generator</a></li>
        <li><a href="/user">Random User Generator</a></li>
      </ul>
    </nav>
  </header>
</div>
</div>
<div class="row">
  <div class="col-md-12">   
    
    

    <section>
        {{-- Main page content will be yielded here --}}
        @yield('content')
    </section>
    
  </div>
</div>
<div class="row">
  <div class="col-md-12">
    <footer> &copy; {{ date('Y') }} </footer>
  </div>
</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    
    {{-- Yield any page specific JS files or anything else you might want at the end of the body --}}
    @yield('body')

</body>
</html>