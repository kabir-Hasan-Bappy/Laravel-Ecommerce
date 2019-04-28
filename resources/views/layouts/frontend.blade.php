
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>{{config('app.name')}} -@yield('title', 'Home')</title>

    

    <!-- Bootstrap core CSS -->
    <link href= "{{ asset('css/bootstarp.min.css')}}" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="{{ asset('css/app.css')}}" rel="stylesheet">
@yield('css')
</head>
<body>
    
    @include('partials._navbar')

<main role="main">

  @includeWhen($hero, 'partials._hero')

<div class="album py-5 bg-light">
    <div class="container">

     @yield('content')
</div>
</div>

</main>

@include('partials._footer')
<script src="{{ asset('js/jequery.min.js') }}"> </script>
<script src="{{ asset('js/bootstarp.min.js') }}"> </script>
@yield('js')
</body>
</html>
