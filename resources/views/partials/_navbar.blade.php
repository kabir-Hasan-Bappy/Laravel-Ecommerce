 <nav class="site-header sticky-top py-1">
  <div class="container d-flex flex-column flex-md-row justify-content-between">
    <a class="py-2" href="{{ route('home')}}">
      {{ config('app.name')}}
    </a>
     @foreach($categories as $category)
    <a class="py-2 d-none d-md-inline-block" href="{{ route('category.products',$category->slug )}}">
    {{$category->name}}</a>
    @endforeach
    <a class="py-2 d-none d-md-inline-block" href="#">Cart</a>
    <a class="py-2 d-none d-md-inline-block" href="#">Checkout</a>
    <a class="py-2 d-none d-md-inline-block" href="#">Register</a>
    <a class="py-2 d-none d-md-inline-block" href="#">Login</a>
      </div>
</nav>