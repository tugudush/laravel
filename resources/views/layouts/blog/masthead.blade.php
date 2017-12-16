<div class="blog-masthead">
  <div class="container">
    <nav class="nav blog-nav" style="width: 100%;">
      
        <a href="{{ URL::route('index') }}" class="nav-link active" href="#">Home</a>
        @if(Auth::check())
          <a href="{{ URL::route('add-post') }}" class="nav-link" href="#">Add Post</a>      
          
          {{--
          <a href="{{ URL::route('logout') }}"
            class="nav-link float-right"
            onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">
            Logout
          </a>
          --}}

          <a href="{{ URL::route('logout') }}" class="nav-link float-right">Logout</a>
        @else          

          @if(Route::current()->getName() != 'login')
            <a href="{{ URL::route('login') }}" class="nav-link float-right">Login</a>
          @endif          

          @if(Route::current()->getName() != 'register')
            <a href="{{ URL::route('register') }}" class="nav-link float-right">Register</a>
          @endif

        @endif
    </nav>
  </div>
</div>