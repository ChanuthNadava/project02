<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>curd operation</title>
    <link rel="stylesheet" href="{{asset('admin/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('admin/css/sb-admin-2')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script type="module" src="admin/js/sb-admin-2"></script>
  </head>
<body>
<x-app-layout>
    <x-slot name="header">

    <nav class="navbar bg-body-tertiary">
  <div class="search">
    <form class="d-flex" action="{{url('search')}}" method ="Get" role="search">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
  </div>
</nav>
<div class="container">

<div class="card text-center">
<div class="navigation">
  <div class="card-header">
    <ul class="nav nav-tabs card-header-tabs">
      <li class="nav-item">
      <a class="nav-link" href="{{ route('product.index')}}">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('product.create')}}">product</a>
      </li>
      
      <li class="nav-item">
      <a class="nav-link" href="{{ route('product.about')}}">about</a>
      </li>
    </ul>
  </div>
</div>
  
</div>
        @yield('content')
    </div>
        
    </x-slot>
</x-app-layout>

 
</body>
</html>
