<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
  @include('layouts.blog.meta-essentials')
  @yield('meta-dynamic')
  @include('layouts.blog.styles')

  @include('layouts.blog.header-scripts')
</head>

<body>
  @include('layouts.blog.masthead')
  @include('layouts.blog.header')

  <div class="container">
    <div class="row">
      @yield('content')      
    </div><!--/.row-->
  </div><!--/.container-->
  
  @include('layouts.blog.footer')
  @include('layouts.blog.footer-scripts')
  @yield('page-footer-scripts')
</body>

</html>