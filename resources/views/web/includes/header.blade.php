<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="{{route('home')}}" class="logo d-flex align-items-center">
        <img src="{{URL::to('/public')}}/assets/img/logo.png" alt="">
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="{{route('home')}}" class="{{!empty($nav) && $nav == 'home' ? 'active' : ''}}">Home<br></a></li>
          <li><a href="{{route('services')}}" class="{{!empty($nav) && $nav == 'services' ? 'active' : ''}}">Services</a></li>
          <li><a href="{{route('faq')}}" class="{{!empty($nav) && $nav == 'faq' ? 'active' : ''}}">FAQ</a></li>
          <!-- <li><a href="{{route('blogs')}}" class="{{!empty($nav) && $nav == 'blogs' ? 'active' : ''}}">Blogs</a></li> -->
          <li><a href="{{route('about')}}" class="{{!empty($nav) && $nav == 'about' ? 'active' : ''}}">About Us</a></li>
          <li><a href="{{route('contact')}}" class="{{!empty($nav) && $nav == 'contact' ? 'active' : ''}}">Contact Us</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    </div>
  </header>