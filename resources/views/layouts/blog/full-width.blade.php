@yield('header-php')
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

  <head>
    @include('layouts.blog.meta-essentials')
    @yield('meta-dynamic')
    @include('layouts.blog.styles')

    @include('layouts.blog.header-scripts')
  </head>

  <body id="{{ $body_id }}" class="{{ $body_class }}">
    @include('layouts.blog.masthead')

    <!--
    @if($body_id == 'page-home')
      @include('layouts.blog.header')
    @endif  
    -->

    <div class="container">
      <div class="row">
        @yield('content')      
      </div><!--/.row-->
    </div><!--/.container-->

    @include('layouts.blog.footer')
    @include('logout')
    @include('layouts.blog.footer-scripts')
    @yield('page-footer-scripts')
  </body>

</html>