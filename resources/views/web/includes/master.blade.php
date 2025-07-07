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

  @include('web.includes.footer')

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
                    <h3>Want to know more?</h3>
                    <h4>Ask us anything</h4>
                    <form action="{{route('enquiry.submit')}}" id="seo-ads-form" >
                        @csrf
                        <input type="text" name="name" placeholder="Name" class="form-control" required>
                        
                        <input type="tel" name="mailphone" id="phone-fieldseo" class="form-control" required>
                        <input type="hidden" name="phone" id="fullphone-fieldseo" required="">
                        <input type="email" name="email" placeholder="Email" class="form-control seo-ads-email" required>
                        
                        <input type="hidden" name="service" value="SEO Services">
                        
                        <textarea class="form-control" name="description" rows="4" placeholder="Describe Your Requirement" required></textarea>
                        
                        <button class="btn btn-theme">Submit Your Enquiry</button>
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
      <!-- {{$val->name}} // Start -->
          {!! $val->snippet_code !!}
      <!-- {{$val->name}} // End -->
    @endif
  @endforeach
  
  @include('web.includes.scripts')
  @yield('addScript')
</body>

</html>