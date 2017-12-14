<div class="blog-masthead">
  <div class="container">
    <nav class="nav blog-nav" style="width: 100%;">
      
        <a href="{{ URL::route('index') }}" class="nav-link active" href="#">Home</a>
        @auth
          <a href="{{ URL::route('add-post') }}" class="nav-link" href="#">Add Post</a>      
          
          <a href="{{ URL::route('logout') }}"
            class="nav-link float-right"
            onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">
            Logout
          </a>
        @endauth
    </nav>
  </div>
</div>