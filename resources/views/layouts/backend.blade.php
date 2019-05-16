<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Jekyll v3.8.5">
  <title>{{config('app.name')}} -@yield('title', 'Dashboard')</title>



  <!-- Bootstrap core CSS -->
  <link href= "{{ asset('css/bootstarp.min.css')}}" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href= "{{ asset('css/dashboard.css')}}" rel="stylesheet">
  @yield('js')

</head>
<body>
 @include('backend.partials._navbar')

 <div class="container-fluid">
  <div class="row">

    @include('backend.partials._sidebar')

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
      @yield('content')
    </main>
  </div>
</div>
<script src="{{ asset('js/jequery.min.js') }}"> </script>
<script src="{{ asset('js/bootstarp.min.js') }}"> </script>
<script src="{{ asset('js/feather.min.js') }}"> </script>
<script src="{{ asset('js/backend.js') }}"> </script>

@yield('js')
</html>
