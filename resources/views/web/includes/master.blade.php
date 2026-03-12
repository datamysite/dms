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

  <link rel="alternate" type="text/markdown" href="{{URL::to('/')}}/llms.txt" title="AI-optimized site summary">

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

  @include('web.includes.footer')


  <div class="reviews-sidebar hide">
        
  </div>

  <div class="m-footer-bg"></div>
  
  <a href="https://api.whatsapp.com/send/?phone=971525287259" aria-label="Whatsapp Chat" id="whatsapp-chat" class="whatsapp-chat" target="_blank">
    <div class="whatsapp-icon-position">
      <img src="{{URL::to('/public/whatsapp-icon2.png')}}" alt="Whatsapp Chat">
    </div>
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
                        <img src="{{URL::to('/public/loader-gif.gif')}}" alt="loader image" width="80px" class="help-loading2 seo-loading">
                    </form>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <div class="ov" id="ov">
    <div class="pop" role="dialog" aria-modal="true">

      <button class="xbtn" onclick="closeExitPopup()">✕</button>

      <!-- HEADER -->
      <div class="hd">
        <div class="pill"><span class="dot"></span> Before You Leave</div>
        <h2>Get a <em>Free Strategy</em><br>From Dubai's Top Ad Agency</h2>
        <p>Our experts respond in 60 min — no commitment, no cost.</p>
      </div>

      <!-- FORM BODY -->
      <div class="bd">

        <form action="{{route('enquiry.lite.submit')}}" id="enquiry-form-exit">
            @csrf
            <div class="urg">
              <span class="ui">⚡</span>
              <span class="ut"><strong>Free slots</strong> available today</span>
              <span class="ucd" id="cd">29:59</span>
            </div>

            <div class="fw" id="fw">
              <div style="display:flex;flex-direction:column;gap:8px">
                <div class="row2">
                  <input type="text" name="name" placeholder="Your Name" required>
                  <div>
                      <input type="tel" name="mainphone" id="phone-field7" required="">
                      <input type="hidden" name="phone" id="fullphone-field7" required="">
                  </div>
                </div>
                <div class="row2 row3">
                  <input type="email" class="exit-email" name="email" placeholder="Your Email" required>
                </div>
                <select name="service" required>
                  <option value="" disabled selected>I need help with…</option>
                  <option>Billboard Advertising</option>
                  <option>Transit Media (Metro, Bus, Taxi, Airport)</option>
                  <option>PR Coverage (Gulf News, Forbes, Khaleej Times)</option>
                  <option>Influencer Marketing</option>
                  <option>Digital Marketing</option>
                  <option>SEO &amp; Website</option>
                  <option>Experiential Marketing</option>
                  <option>Lead Generation</option>
                  <option>Radio Advertising</option>
                  <option>CGI / Creative Ads</option>
                  <option>Celebrity Marketing</option>
                  <option>Event Marketing &amp; Sponsorships</option>
                  <option>Global Marketing (Saudi, India, London)</option>
                  <option>Full 360° Strategy</option>
                </select>
                <button class="cta" type="submit">Claim My Free Strategy Call <span class="ar">→</span></button>
              </div>

              <div style="display:flex;flex-direction:column;gap:6px;margin-top:8px">
                <a href="https://api.whatsapp.com/send/?phone=971525287259" class="wa" target="_blank" rel="noopener">
                  <span class="wad"></span> WhatsApp: +971 52 528 7259
                </a>
                <p class="prv">🔒 No spam · 100% free · ⭐ 5.0 Google rated</p>
                <div class="skip"><button onclick="closeExitPopup()">No thanks, I'll figure it out myself</button></div>

                <div class="loading exit-loading"><img src="{{URL::to('/public/loader-gif.gif')}}" width="80px" class="newsletter-loader"></div>
              </div>
            </div>
          </form>
      </div>
    </div>
  </div>

  <div class="service-menu-main">
      <button class="close-menu">< Back</button>
      <br>
      <ul>
        @foreach($header_services as $val)
          @if(in_array($val->id, array(1 , 2, 3, 37, 10, 94, 100)))
            <li class="nested-menu">
              <a href="{{URL::to('/'.$val->slug)}}" class="">
                {{$val->name}}<br>
              </a>
              <button class="open-service-second-menu" data-id="digital-service-menu-{{$val->id}}">►</button>
            </li>
          @endif
        @endforeach
      </ul>

      <div class="service-menu-logo">
        <img src="{{URL::to('/public/assets/img/logo.png')}}" alt="Menu Logo">
      </div>
  </div>

  <div class="service-menu-second">
      <button class="close-menu">< Back</button>

      @foreach($header_services as $val)
        @if(in_array($val->id, array(1 , 2, 3, 37, 10, 94, 100)))
          <ul class="service-sub-menu digital-service-menu-{{$val->id}}">
            <li class="service-menu-heading"><a href="{{URL::to('/'.$val->slug)}}"> {{$val->name}}</a></li>

            @if($val->id == 1)
              @foreach($header_services as $val1)
                @if(in_array($val1->id, array(7)))
                  <li class="nested-menu">
                    <a href="{{URL::to('/'.$val1->slug)}}" class="">
                      {{$val1->name}}
                    </a>
                    @if(count($val1->subServices) == 0)
                      <a href="{{URL::to('/'.$val1->slug)}}" class="service-menu-blank-click">&nbsp;</a>
                    @else
                      <button class="open-service-third-menu" data-id="{{$val1->slug}}">►</button>
                    @endif
                  </li>
                @endif
              @endforeach

            @elseif($val->id == 2)
              @foreach($header_services as $val1)
                @if(in_array($val1->id, array(5, 8, 38)))
                  <li class="nested-menu">
                    <a href="{{URL::to('/'.$val1->slug)}}" class="">
                      {{$val1->name}}
                    </a>
                    @if(count($val1->subServices) == 0)
                      <a href="{{URL::to('/'.$val1->slug)}}" class="service-menu-blank-click">&nbsp;</a>
                    @else
                      <button class="open-service-third-menu" data-id="{{$val1->slug}}">►</button>
                    @endif
                  </li>
                @endif
              @endforeach

            @elseif($val->id == 3)
              @foreach($header_services as $val1)
                @if(in_array($val1->id, array(11)))
                  <li class="nested-menu">
                    <a href="{{URL::to('/'.$val1->slug)}}" class="">
                      {{$val1->name}}
                    </a>
                    @if(count($val1->subServices) == 0)
                      <a href="{{URL::to('/'.$val1->slug)}}" class="service-menu-blank-click">&nbsp;</a>
                    @else
                      <button class="open-service-third-menu" data-id="{{$val1->slug}}">►</button>
                    @endif
                  </li>
                @endif
              @endforeach
            @endif

            @foreach($val->subServices as $sub)
              <li class="nested-menu">
                <a href="{{URL::to('/'.$val->slug.'/'.$sub->slug)}}" class="">
                  {{$sub->name}}
                </a>
                @if(count($sub->subServices) == 0)
                <a href="{{URL::to('/'.$val->slug.'/'.$sub->slug)}}" class="service-menu-blank-click">&nbsp;</a>
                @else
                  <button class="open-service-third-menu" data-id="{{$sub->slug}}">►</button>
                @endif
              </li>
            @endforeach

          </ul>
          @endif
        @endforeach

      <div class="service-menu-logo">
        <img src="{{URL::to('/public/assets/img/logo.png')}}" alt="Menu Logo">
      </div>
  </div>

  <div class="service-menu-third">
      <button class="close-menu">< Back</button>

      @foreach($header_services as $val)
        <ul class="service-sub-menu {{$val->slug}}-third-menu">
            <li class="service-menu-heading"><a href="{{URL::to('/'.$val->slug)}}">{{$val->name}}</a></li>
            @if(count($val->subServices) == 0)
            @else
              @foreach($val->subServices as $sub)
                <li class="nested-menu">
                  <a href="{{URL::to('/'.$val->slug.'/'.$sub->slug)}}" class="">
                    {{$sub->name}}
                  </a>
                  @if(count($sub->subServices) == 0)
                    <a href="{{URL::to('/'.$val->slug.'/'.$sub->slug)}}" class="service-menu-blank-click">&nbsp;</a>
                  @else
                    <button class="open-service-third-menu" data-id="{{$sub->slug}}">►</button>
                  @endif
                </li>
              @endforeach
            @endif
        </ul>
        @if(count($val->subServices) !== 0)
          @foreach($val->subServices as $sub)
            <ul class="service-sub-menu {{$sub->slug}}-third-menu">
                <li class="service-menu-heading"><a href="{{URL::to('/'.$val->slug.'/'.$sub->slug)}}">{{$sub->name}}</a></li>
                @if(count($sub->subServices) == 0)
                @else
                  @foreach($sub->subServices as $sub2)
                    <li class="nested-menu">
                      <a href="{{URL::to('/'.$val->slug.'/'.$sub->slug.'/'.$sub2->slug)}}" class="">
                        {{$sub2->name}}
                      </a>
                      @if(count($sub2->subServices) == 0)
                        <a href="{{URL::to('/'.$val->slug.'/'.$sub->slug.'/'.$sub2->slug)}}" class="service-menu-blank-click">&nbsp;</a>
                      @else
                        <button class="open-service-third-menu" data-id="{{$sub2->slug}}">►</button>
                      @endif
                    </li>
                  @endforeach
                @endif
            </ul>

            @if(count($sub->subServices) !== 0)
              @foreach($sub->subServices as $sub2)
                <ul class="service-sub-menu {{$sub2->slug}}-third-menu">
                  <li class="service-menu-heading"><a href="{{URL::to('/'.$val->slug.'/'.$sub->slug.'/'.$sub2->slug)}}">{{$sub2->name}}</a></li>
                  @if(count($sub2->subServices) == 0)
                  @else
                    @foreach($sub2->subServices as $sub3)
                      <li class="nested-menu">
                        <a href="{{URL::to('/'.$val->slug.'/'.$sub->slug.'/'.$sub2->slug.'/'.$sub3->slug)}}" class="">
                          {{$sub3->name}}
                        </a>
                        @if(count($sub3->subServices) == 0)
                          <a href="{{URL::to('/'.$val->slug.'/'.$sub->slug.'/'.$sub2->slug.'/'.$sub3->slug)}}" class="service-menu-blank-click">&nbsp;</a>
                        @else
                          <button class="open-service-third-menu" data-id="{{$sub3->slug}}">►</button>
                        @endif
                      </li>
                    @endforeach
                  @endif
                </ul>
              @endforeach
            @endif
          @endforeach
        @endif
      @endforeach


      <div class="service-menu-logo">
        <img src="{{URL::to('/public/assets/img/logo.png')}}" alt="Menu Logo">
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
  
  @include('web.includes.scripts')
  @yield('addScript')
</body>

</html>