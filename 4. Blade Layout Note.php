Route::view("/","home")->name("home");
Route::view("/about","about")->name("about");
Route::view('/contact', 'contact')->name("contact");

create view/layout/

1.master.blade.php 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield("title")</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</head>
<body>
    @section("navbar")
    @include("layout.header")
    @show

    @yield("content")

</body>
</html>

2.header.blade.php

<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Web Hub</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route("home")}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route("about")}}">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route("contact")}}">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

// home.blade.php

@extends("layout.master")

@section("title","Home");

@section("navbar")
@parent
@endsection

@section("content")
<h1>Home Page content</h1>
@endsection

// about.blade.php

@extends("layout.master")

@section("title","Home");

@section("navbar")

@endsection

@section("content")
<h1>About Page content</h1>
@endsection

//contact.blade.php

@extends("layout.master")

@section("title","Home");

@section("navbar")
@parent
@endsection

@section("content")
<h1>Contact Page content</h1>
@endsection
