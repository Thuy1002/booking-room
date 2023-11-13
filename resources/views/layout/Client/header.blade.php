<div style="display:flex;" class="container">

    <a class="navbar-brand" href="index.html">Deluxe</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
    </button>

    <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active"><a href="{{route('client')}}" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="{{route('rooms.list')}}" class="nav-link">Rooms</a></li>
            <li class="nav-item"><a href="restaurant.html" class="nav-link">Restaurant</a></li>
            <li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
            <li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li>
            <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
            @if (Auth::user())
            <li style="float: right" class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    {{Auth::user()->name}}
                </a>
                <div class="dropdown-menu" aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="#">Profile</a>
                    <a class="dropdown-item" href="#">Settings</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{route('auth.logout')}}">Logout</a>
                </div>
            </li>
            @else
                <li></li>
            @endif
          
        </ul>
    </div>
</div>
