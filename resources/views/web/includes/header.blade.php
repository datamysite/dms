<header id="header" class="header fixed-top">
    <div class="header-info">
      <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
        <span>
          <a href="https://api.whatsapp.com/send/?phone=971525287259" class="webCellPhone"><i class="bi bi-telephone"></i>&nbsp; +971 52 528 7259</a>
        </span> 

        <span class="para">
          Call Us Now for Your Personalized Media Plan.
        </span> 

        <span>
          <button type="button" class="open-newsletter">Book Now</button>
        </span>  
      </div>
    </div>
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="{{route('home')}}" class="logo d-flex align-items-center" aria-label="Home">
        <img src="{{URL::to('/public')}}/assets/img/logo.png" alt="Logo">
      </a>
      <a href="https://api.whatsapp.com/send/?phone=971525287259" class="m-phone-link"><i class="bi bi-telephone"></i>&nbsp; +971 525 287 259</a>
      <nav id="navmenu" class="navmenu">
        <ul class="nav-mega">
          <li><a href="{{route('home')}}" class="{{!empty($nav) && $nav == 'home' ? 'active' : ''}}">Home<br></a></li>
          <li class="nested-menu">
            <a href="{{route('services')}}" class="{{!empty($nav) && $nav == 'services' ? 'active' : ''}}">Services<br></a>
            <button class="open-service-menu">►</button>
          </li>
          <li class="dropdown hide-mobile"><a href="{{route('services')}}" class="{{!empty($nav) && $nav == 'services' ? 'active' : ''}}"><span>Services</span> <font style="font-size: 9px;padding: 1px 0px 0px 3px;">▼</font></a>
            <ul class=" mega-menu">
              <li>
                <div class="row-fluid">
                    <div class="container p-0 d-flex align-items-start">
                      <ul class="nav nav-new nav-pills flex-column nav-pills border-end border-3 me-3 align-items-start" id="pills-tab" role="tablist">
                        @foreach($header_services as $key => $val)
                          <li class="nav-item {{$key == 0 ? 'active' : ''}} p-1 " role="presentation">
                            <button class="nav-link fw-semibold {{$key == 0 ? 'active' : ''}} position-relative" id="pills-{{$val->slug}}-tab" data-bs-toggle="pill" data-bs-target="#pills-{{$val->slug}}" type="button" role="tab" aria-controls="pills-home" aria-selected="true">{{$val->name}}</button>
                          </li>
                        @endforeach
                      </ul>
                      <div class="tab-content p-3 w-100" id="pills-tabContent">
                        @foreach($header_services as $key => $val)
                          <div class="tab-pane fade {{$key == 0 ? 'show active' : ''}}" id="pills-{{$val->slug}}" role="tabpanel" aria-labelledby="pills-{{$val->slug}}-tab">
                            <a href="{{URL::to('/'.$val->slug)}}" class="m-0 p-0"><h5 class="text-theme"><i class="{{$val->icon}}"></i>&nbsp;{{$val->name}}</h5></a>
                            <br>
                            <div class="row">
                              @foreach($val->subServices as $sub)
                                <div class="col-lg-4 mb-4">
                                  <a href="{{URL::to('/'.$val->slug.'/'.$sub->slug)}}" class="mega-menu-subservice"><span><i class="mega-menu-subservice-icon {{$sub->icon}}"></i>&nbsp; {{$sub->name}}</span></a>
                                  @if(count($sub->subServices) == 0)
                                    <p class="text-black mega-menu-subservice-para">
                                      {{$sub->description}}
                                    </p>
                                  @else
                                    @foreach($sub->subServices as $sub2)
                                      <a href="{{URL::to('/'.$val->slug.'/'.$sub->slug.'/'.$sub2->slug)}}" class="mega-menu-subservice2"><span><i class="bi bi-dot"></i>&nbsp; {{$sub2->name}}</span></a>
                                    @endforeach
                                  @endif
                                </div>
                              @endforeach
                            </div>
                          </div>
                        @endforeach
                      </div>
                    </div>
                </div>
              </li>
            </ul>
          </li>
          <li><a href="{{route('caseStudies')}}" class="{{!empty($nav) && $nav == 'case-studies' ? 'active' : ''}}">Case Studies</a></li>
          <li><a href="{{route('blogs')}}" class="{{!empty($nav) && $nav == 'blogs' ? 'active' : ''}}">Blogs</a></li>
          <li><a href="{{route('about')}}" class="{{!empty($nav) && $nav == 'about' ? 'active' : ''}}">About Us</a></li>
          <li><a href="{{route('faq')}}" class="{{!empty($nav) && $nav == 'faq' ? 'active' : ''}}">FAQ</a></li>
          <li><a href="{{route('contact')}}" class="{{!empty($nav) && $nav == 'contact' ? 'active' : ''}}">Contact Us</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    </div>
  </header>