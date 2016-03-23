<!DOCTYPE html>
<html>
<head>
<title>Show Book</title>
<meta charset='utf-8'>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-7s5uDGW3AHqw6xtJmNNtr+OBRJUlgkNJEo78P4b0yRw= sha512-nNo+yCHEyn0smMxSswnf/OnX6/KwJuZTlNZBjauKhTK0c+zT+q5JOCx0UFhXQ6rJR9jg6Es8gPuD2uZcYDLqSw==" crossorigin="anonymous">
<link href="/css/fstyle.css" type='text/css' rel='stylesheet'>
</head>
<body>
<div class="container">
<div class="row">
<div class="col-md-12">
  <header>
    <h1 class="siteTitle">Lorum </h1>
    <nav>
      <ul>
        <li><a href="http://localhost/p3/public/li">Lorum Ipsum Generator</a></li>
        <li><a href="http://localhost/p3/public/user">Random User Generator</a></li>
      </ul>
    </nav>
  </header>
</div>
</div>
<div class="row">
  <div class="col-md-12">
    <section>
      <?php  //echo $title; ?>
      <!--Delete-->
      
      <h1>Variable Data: {{ $abc }} </h1>
      <h2>Lorum: {{$lorum}}</h2>
			{{-- Blade Comment 
            
            @if($this)
            	Do this
            @else
            	do this
             @endif
            
            --}}
      
      
      
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
</body>
</html>