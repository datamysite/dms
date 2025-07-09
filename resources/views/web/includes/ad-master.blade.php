<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>{{@$metaTags->title}}{{@$ametaTags['title']}}{{empty($metaTags->title) && empty($ametaTags['title']) ? env('APP_NAME') : ''}}</title>
  <meta name="description" content="{{@$metaTags->description}}{{@$ametaTags['description']}}">
  <meta name="keywords" content="{{@$metaTags->keywords}}{{@$ametaTags['keywords']}}">
  @yield('metaAddition')
  <!-- Basic OG Tags -->
  <meta property="og:title" content="{{@$metaTags->title}}{{@$ametaTags['title']}}{{empty($metaTags->title) && empty($ametaTags['title']) ? env('APP_NAME') : ''}}" />
  <meta property="og:description" content="{{@$metaTags->description}}{{@$ametaTags['description']}}" />
  <meta property="og:url" content="{{@URL::current()}}" />
  <meta property="og:type" content="website" />
  <meta property="og:site_name" content="DataMySite" />

  <!-- Image OG Tag -->
  <meta property="og:image" content="{{empty($og_img) ? URL::to('/public/og-logo.jpeg') : $og_img}}" />
  <meta property="og:image:alt" content="Image - {{@$metaTags->title}}{{@$ametaTags['title']}}{{empty($metaTags->title) && empty($ametaTags['title']) ? env('APP_NAME') : ''}}" />
  <meta property="og:image:type" content="image/*" />
  <meta property="og:image:width" content="620" />
  <meta property="og:image:height" content="340" />

  <!-- Additional Tags for Social Platforms -->
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:title" content="{{@$metaTags->title}}{{@$ametaTags['title']}}{{empty($metaTags->title) && empty($ametaTags['title']) ? env('APP_NAME') : ''}}" />
  <meta name="twitter:description" content="{{@$metaTags->description}}{{@$ametaTags['description']}}" />
  <meta name="twitter:image" content="{{empty($og_img) ? URL::to('/public/og-logo.jpeg') : $og_img}}" />
  <meta name="twitter:site" content="@DataMySite" />

  <meta property="fb:app_id" content="1234567890" />
  
  <link rel="canonical" href="{{@URL::current()}}" />

  <meta name="home_url" content="{{@URL::to('/')}}">

  @include('web.includes.style')
  @yield('addStyle')
  
  @foreach($headSnippet as $val)
    @if($val->position == 'Head')
      <!-- {{$val->name}} // Start -->
          {!! $val->snippet_code !!}
      <!-- {{$val->name}} // End -->
    @endif
  @endforeach
</head>

<body class="index-page">

  @include('web.includes.header')

  @yield('content')

  <footer id="footer" class="footer light-background">
    @if(!empty($sub_footer))
    <div class="sub-footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <h3>Our Services</h3>
          </div>
        </div>
        <div class="row gy-1">
          @foreach($header_services as $val)
            <div class="col-lg-3">
              <a href="{{URL::to('/'.$val->slug)}}"><i class="{{$val->icon}}"></i> {{$val->name}}</a>
            </div>
            @foreach($val->subServices as $sub)
              <div class="col-lg-3 hide-mobile">
                <a href="{{URL::to('/'.$val->slug.'/'.$sub->slug)}}"><i class="{{$sub->icon}}"></i> {{$sub->name}}</a>
              </div>
            @endforeach
          @endforeach
        </div>
      </div>
      <br>
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <h3>Blog Categories</h3>
          </div>
        </div>
        <div class="row gy-1">
          @foreach($blog_categories as $val)
            <div class="col-lg-3">
              <a href="{{URL::to('/blogs/'.$val->slug)}}">{{$val->name}} &nbsp;<font class="text-theme"><small><small>({{count($val->blogs)}})</small></small></font></a>
            </div>
          @endforeach
        </div>
      </div>
    </div>
    @endif
    <div class="footer-top">
      <div class="container">
        <div class="row gy-4">

          <div class="col-lg-2 col-6 footer-links">
            <h4>Quick Links</h4>
            <ul>
              <li><a href="{{route('blogs')}}">Blogs</a></li>
              <li><a href="{{route('services')}}">Services</a></li>
              <li><a href="{{route('about')}}">About Us</a></li>
              <li><a href="{{route('contact')}}">Contact Us</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-6 footer-links">
            <h4>Support</h4>
            <ul>
              <li><a href="{{route('faq')}}">FAQ</a></li>
              <li><a href="{{route('caseStudies')}}">Case Studies</a></li>
              <li><a href="{{route('privacy')}}">Privacy Policy</a></li>
              <li><a href="{{route('terms')}}">Terms & Conditions</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-12 footer-about">
            <a href="{{URL::to('/')}}" class="logo d-flex align-items-center" aria-label="Home">
              <img src="{{URL::to('/public/assets/img/mini-logo-white.png')}}" alt="Footer Logo" loading="lazy">
            </a>
            <p>Smarter Marketing, Better Outcomes.<br><br>Boost your brand’s visibility, enhance campaign performance</p>
            <div class="social-links d-flex mt-4">
              <a href="https://www.linkedin.com/company/datamysite/" aria-label="Linkedin"><i class="bi bi-linkedin"></i></a>
              <a href="https://www.instagram.com/datamysite/" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-12 footer-contact text-center text-md-start" style="padding: 30px 20px;">
            <h4>Subscribe Our Newsletter</h4>
            <p>Sign up now and get the edge!</p>
            <form id="newsletterForm" action="{{route('newsletter.subscribe')}}">
              @csrf
              <div class="row footer-subscribe">
                <div class="col-lg-9">
                  <input type="email" name="email" class="form-control form-control-lg" placeholder="Your Email" required>
                </div>
                <div class="col-lg-3">
                  <button class="btn btn-lg btn-primary subscribe-btn">SUBSCRIBE</button>
                </div>
              </div>
            </form>

            <div class="footer-contact-block">
              <p>
                <i class="bi bi-telephone"></i> 
                <a href="tel:0525287259" class="webCellPhone">+971 52 528 7259</a>
              </p>
              <p>
                <i class="bi bi-envelope-at"></i>
                <strong class="email-slot">contact@datamysite.com</strong> 
                <a href="javascript:void(0)" onclick="copyEmail('contact@datamysite.com', this);" class="copy-email">
                  <span class="bi bi-copy"></span>&nbsp;&nbsp;Copy
                </a>
              </p>
              <p>
                <i class="bi bi-pin-map"></i> 
                Office - 205, Al Bayan Building, Dubai Investment Park, Dubai - UAE
              </p>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="copyright text-center">
      <div class="container ">
        <p><span>Copyright ©</span> <strong class="px-1 sitename">DataMySite</strong> {{date('Y')}}. <span>All Rights Reserved. Powered By <a href="https://daralafkarmarketing.ae/" target="_blank"><strong>Dar Alafkar Marketing LLC.</strong></a></span></p>
      </div>
    </div>

  </footer>

  <div class="m-footer-bg"></div>
  <a href="https://api.whatsapp.com/send/?phone=971525287259" aria-label="Whatsapp Chat" id="whatsapp-chat" class="whatsapp-chat" target="_blank">
    <img src="{{URL::to('/public/whatsapp-new.gif')}}" alt="Whatsapp Chat">
  </a>

  <div class="modal fade" id="newsletter-modal-u" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header"> 
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"> 
                  <span aria-hidden="true">&times;</span> 
                </button> 
              </div>
              <div class="modal-body p-0 row">
                  <div class="col-12 col-lg-5 ad p-0"> 
                    <img src="{{URL::to('/public/popup-min.png')}}" class="popup-des" alt="Need a Help?"  loading="lazy" /> 
                    <img src="{{URL::to('/public/popup-m.jpg')}}" class="popup-mob" width="100%" alt="Need a Help?" loading="lazy" /> 
                  </div>
                  <div class="details col-12 col-lg-7">
                    <form action="{{route('enquiry.help.submit')}}" id="enquiry-help-form">
                      @csrf
                      <h2>Need a Help?</h2>
                      <p>
                        <small class="para">
                          Looking for a Custom <strong>Marketing Plan</strong>? 
                        <br>
                          Get expert guidance tailored to your brand’s success!</small>
                      </p>
                      <div class="form-group">
                        <input type="text" class="form-control" name="name" placeholder="Name" required>
                      </div>
                      <div class="form-group">
                        <input type="tel" name="mailphone" id="phone-field3" class="form-control" required>
                        <input type="hidden" name="phone" id="fullphone-field3" required="">
                      </div>
                      <div class="form-group">
                        <input type="email" class="form-control help-email" name="email" placeholder="Email" required>
                      </div>
                      <br>
                      <div class="form-group">
                        <button type="reset" class="btn btn-sm btn-default cancel">&nbsp;&nbsp;Cancel&nbsp;&nbsp;</button>&nbsp;&nbsp;
                        <input type="submit" class="btn btn-sm btn-theme" value="Proceed">
                      </div>
                      <img src="{{URL::to('/public/loader-gif-m.gif')}}"  alt="Loader gif" class="help-loading">
                    </form>
                  </div>
              </div>
          </div>
      </div>
  </div>


  <div class="modal fade" id="seo-cta-modal-u" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header"> 
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"> 
                  <span aria-hidden="true">&times;</span> 
                </button> 
              </div>
              <div class="modal-body p-0 row">
                  <div class="col-12 col-lg-5 ad p-0"> 
                    <img src="{{URL::to('/public/popup-min.png')}}" class="popup-des" alt="Need a Help?"  loading="lazy" /> 
                    <img src="{{URL::to('/public/popup-m.jpg')}}" class="popup-mob" width="100%" alt="Need a Help?" loading="lazy" /> 
                  </div>
                  <div class="details col-12 col-lg-7">
                    <form action="{{route('enquiry.help.submit')}}" id="seo-help-form">
                      @csrf
                      <h2>Need a Help?</h2>
                      <p>
                        <small class="para">
                          We’re here to rank your <strong>website higher</strong>! 
                          </small>
                      </p>
                      <p class="seo-prompt-para">
                        Get a FREE SEO Audit Report for your website. Just fill out the form and our experts will send you a detailed audit and help you fix the issues that stop you from ranking on your desired keywords.
                      </p>
                      <div class="form-group">
                        <input type="text" class="form-control" name="name" placeholder="Name" required>
                      </div>
                      <div class="form-group">
                        <input type="tel" name="mailphone" id="phone-field4" class="form-control" required>
                        <input type="hidden" name="phone" id="fullphone-field4" required="">
                      </div>
                      <div class="form-group">
                        <input type="email" class="form-control help-email2" name="email" placeholder="Email" required>
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control" name="website_link" placeholder="Website" required>
                      </div>

                      <div class="form-group">
                        <button type="reset" class="btn btn-sm btn-default cancel">&nbsp;&nbsp;Cancel&nbsp;&nbsp;</button>&nbsp;&nbsp;
                        <input type="submit" class="btn btn-sm btn-theme" value="Proceed">
                      </div>
                      <img src="{{URL::to('/public/loader-gif-m.gif')}}"  alt="Loader gif" class="help-loading2">
                    </form>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <div class="modal fade" id="seo-ads-cta-modal-u" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-body p-0 row">
                  <div class="aside-form">
                  <h3>Zero-Cost SEO Audit</h3>
                  <h4><small><small>Know Your Rank. Improve.</small></small></h4>
                    <form action="{{route('enquiry.help.submit')}}" id="seo-ads-form" >
                        @csrf
                        <input type="text" name="name" placeholder="Name" class="form-control" required>
                        
                        <input type="tel" name="mailphone" id="phone-fieldseo" class="form-control" required>
                        <input type="hidden" name="phone" id="fullphone-fieldseo" required="">
                        <input type="email" name="email" placeholder="Email" class="form-control seo-ads-email" required>
                      
                        <input type="text" class="form-control" name="website_link" placeholder="Website" required>
                        
                        <input type="hidden" name="service" value="SEO Services">
                                                
                        <button class="btn btn-theme">Submit</button>
                        <button type="button" class="btn btn-default close">Close</button>
                        <img src="{{URL::to('/public/loader-gif.gif')}}" width="80px" class="help-loading2 seo-loading">
                    </form>
                  </div>
              </div>
          </div>
      </div>
  </div>

  @foreach($bodySnippet as $val)
    @if($val->position == 'Body')
      @if(!empty($noPopup) && ($val->name == 'Klaviyo Basecode' || $val->name == 'Tawk.to Live Chat' || $val->name == 'Tawk.to BaseCode'))

      @else
      <!-- {{$val->name}} // Start -->
          {!! $val->snippet_code !!}
      <!-- {{$val->name}} // End -->
      @endif
    @endif
  @endforeach
  
  
  <!-- Vendor JS Files -->
  <script src="{{URL::to('/public')}}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

  <script src="{{URL::to('/public')}}/assets/input-master/js/intlTelInputWithUtils.js"></script>

  

  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.9/jquery.inputmask.min.js"></script> -->
  <script src="{{URL::to('/public')}}/assets/js/main.js"></script>
 <!--  <script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.3.11/slick.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  
  <script src="{{URL::to('/public')}}/assets/js/newsletter.js" defer></script>
  
  <script>
    
    const inputh = document.querySelector("#phone-field3");
    const hiddenInputh = document.querySelector("#fullphone-field3");
    const itih = window.intlTelInput(inputh, {
      initialCountry: "ae",
      separateDialCode: true,
    });

    inputh.addEventListener('keyup', () => {
      const fullNumber = itih.getNumber();
      hiddenInputh.value = fullNumber;
    });

    const inputh4 = document.querySelector("#phone-field4");
    const hiddenInputh4 = document.querySelector("#fullphone-field4");
    const itih4 = window.intlTelInput(inputh4, {
      initialCountry: "ae",
      separateDialCode: true,
    });

    inputh4.addEventListener('keyup', () => {
      const fullNumber = itih4.getNumber();
      hiddenInputh4.value = fullNumber;
    });
  </script>

  <script src="{{URL::to('/public')}}/assets/js/enquiry.js" defer></script>
  @yield('addScript')
</body>

</html>