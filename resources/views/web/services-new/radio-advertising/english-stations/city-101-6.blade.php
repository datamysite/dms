@extends('web.includes.master')
@section('metaAddition')
    
@endsection
@section('addStyle')
    <link href="{{URL::to('/public')}}/assets/css/service.css" rel="stylesheet">
@endsection
@section('content')

    <main class="main">

        <!-- Page Title -->
          <div class="page-title dark-background" data-aos="fade" style="background-image: url('{{URL::to('public/assets/img/service-new/'.$service->slug.'.jpg')}}');">
            <div class="container head-container-service">
                <div class="row">
                    <div class="col-lg-8 head-para-service">
                        <h1>&#10687; {{$subservice->name}}</h1>
                        <h2>One of the UAE's most-listened-to English radio stations</h2>
                        <br>
                        <p>
                            At DataMySite, we help businesses of all sizes run strategic, results-driven radio advertising campaigns on TAG 91.1 FM. From writing your script to booking the right time slots and tracking performance, we handle everything end-to-end.
                        </p>
                    </div>
                    <div class="col-lg-4">
                        <div class="aside-form">
                            
                            <form action="{{route('enquiry.submit')}}" id="enquiry-form">
                                @csrf
                                <input type="hidden" name="service" value="{{$service->name}} - {{$subservice->name}}" required>
                                <div class="form1-wrapper">
                                    <div class="form1-bg">
                                      <h2 class="form1-headline">Ready to Get <span>Results?</span></h2>
                                      <p class="form1-sub">Drop us your details — our experts respond within 60 minutes.</p>

                                      <div class="form1-field">
                                        <input type="text" placeholder="Your Full Name" name="name" required>
                                      </div>

                                      <div class="form1-field">
                                          <input type="tel" class="form-control" name="mainphone" id="phone-field2" required="">
                                          <input type="hidden" name="phone" id="fullphone-field2" required="">
                                      </div>

                                      <div class="form1-field">
                                        <input type="email" placeholder="Your Email Address" class="aside-email" name="email" required>
                                      </div>

                                      <div class="form1-field">
                                        <textarea class="form1-textarea" name="description" placeholder="Tell us what you need — the more detail, the better we can help." required></textarea>
                                      </div>

                                      <button class="form1-btn" type="submit">
                                        Get Free Consultation
                                        <span class="form1-btn-arrow">→</span>
                                      </button>

                                      <div class="form1-trust">
                                        <div class="form1-trust-item">
                                          <svg viewBox="0 0 24 24"><path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z"/></svg>
                                          No spam, ever
                                        </div>
                                        <div class="form1-trust-item">
                                          <svg viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
                                          Reply in 60 min
                                        </div>
                                        <div class="form1-trust-item">
                                          <svg viewBox="0 0 24 24"><path d="M18 8h-1V6c0-2.76-2.24-5-5-5S7 3.24 7 6v2H6c-1.1 0-2 .9-2 2v10c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V10c0-1.1-.9-2-2-2zm-6 9c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2zm3.1-9H8.9V6c0-1.71 1.39-3.1 3.1-3.1 1.71 0 3.1 1.39 3.1 3.1v2z"/></svg>
                                          100% Private
                                        </div>
                                      </div>
                                    </div>
                                </div>
                            </form>
                            <div class="loading"><img src="{{URL::to('/public/loader-gif.gif')}}" width="80px" class="newsletter-loader"></div>
                            
                        </div>
                    </div>
                </div>
              
            </div>
          </div><!-- End Page Title -->



        <section id="service-cards" class="blog-section section">

          <div class="container">

            <div class="row gy-4 first-row">

                <div class="col-lg-6 vertical-center" data-aos="fade-up" data-aos-delay="100">
                    <h4>Why Advertise on TAG 91.1 FM?</h4>
                    <br>
                    <p>TAG 91.1 FM has built a loyal listener base over the years. It is known for a mix of chart-topping music, local news, lifestyle segments, and engaging morning shows. Here is why it works so well for advertisers:</p>
                    <ul>
                        <li>Reaches a large, loyal base of English-speaking expats across Dubai and greater UAE</li>
                        <li>Listeners tune in during peak commute hours — morning and evening drive time — when attention is high</li>
                        <li>Strong listenership among mid-to-high income professionals who make purchasing decisions</li>
                        <li>Great brand recall due to consistent music format and trusted on-air personalities</li>
                        <li>Competitive ad rates compared to TV or digital display, with strong ROI</li>
                        <li>Ideal for retail, real estate, hospitality, automotive, healthcare, and finance brands</li>
                    </ul>
                </div>
                <div class="col-lg-6 vertical-center">
                    <iframe class="service-iframe outdoor-iframe" src="https://www.youtube.com/embed/4qP3sAMhMkM?si=Bwuovnsu7mqpSDKs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div> 
            </div>

          </div>

        </section>



        <section id="testimonials" class="testimonials striped-section section">
          @include('web.includes.elements.clients')
        </section>



        <section id="testimonials" class="testimonials case-studies-section section">
           @include('web.includes.elements.case-studies')
        </section>


        <section id="service-cards" class="blog-section section striped-section why-us-section why-out-us-section">

          <div class="container">

            <div class="row gy-4 first-row split-block">


                <div class="col-lg-3 vertical-center">
                    <img src="{{URL::to('/public/section-images/image177.png')}}" width="100%" alt="Why choose us">
                </div> 
                <div class="col-lg-1"></div>
                <div class="col-lg-8 vertical-center">
                    <h4>Who Listens to TAG 91.1 FM?</h4>
                    <p>
                        Understanding the audience is the first step to a successful campaign. TAG 91.1 FM primarily attracts:
                    </p>
                    <ul>
                        <li>English-speaking expatriates from Western countries, South Asia, the Philippines, and beyond</li>
                        <li>Working professionals aged 25 to 50 living in Dubai, Sharjah, and Ajman</li>
                        <li>Families who rely on the station for daily lifestyle, entertainment, and local news</li>
                        <li>Commuters driving to and from business districts such as DIFC, Business Bay, and JLT</li>
                        <li>General Dubai audience tuned in for music and morning shows</li>
                    </ul>
                    <p>This makes TAG 91.1 FM a perfect fit for brands targeting Dubai's mainstream consumer market.</p>
                    <br>
                    <h4>Types of Radio Ads Available on TAG 91.1</h4>
                    <p>
                        When you partner with DataMySite, you get access to multiple advertising formats on TAG 91.1 FM:
                    </p>
                    <ul>
                        <li><strong>Standard Spot Ads</strong>: 15, 30, or 60-second commercials placed during commercial breaks</li>
                        <li><strong>Sponsored Segments</strong>: Have your brand sponsor a weather update, traffic report, or music countdown</li>
                        <li><strong>Live Reads</strong>: On-air presenters personally deliver your brand message for added authenticity</li>
                        <li><strong>Competitions and Giveaways</strong>: Engage listeners directly by sponsoring on-air contests</li>
                        <li><strong>Morning Show Integrations</strong>: Get your brand featured during the highest-traffic listening window</li>

                    </ul>
                </div>
            </div>

          </div>

        </section>


        <section id="service-cards" class="blog-section section   why-us-section why-out-us-section">

          <div class="container">

            <div class="row gy-4 first-row split-block">


                <div class="col-lg-8 vertical-center">
                    <h4>How DataMySite Manages Your TAG 91.1 Campaign</h4>
                    <p>Running a successful radio campaign is not just about buying airtime. It requires the right strategy, creative approach, and precise execution. Here is what we do for you:</p>
                    <ul>
                        <li><strong>Campaign Strategy</strong>: We study your business goals, target audience, and budget to build a custom campaign plan</li>
                        <li><strong>Script Writing</strong>: Our creative team writes punchy, attention-grabbing scripts tailored to the TAG 91.1 audience</li>
                        <li><strong>Voice Production</strong>: We work with professional voice artists who match your brand tone</li>
                        <li><strong>Time Slot Booking</strong>: We secure peak-hour placements to maximise listener exposure</li>
                        <li><strong>Performance Monitoring</strong>: We track call volumes, website visits, and other response indicators</li>
                        <li><strong>Campaign Optimisation</strong>: We refine your ads mid-campaign based on real performance data</li>
                    </ul>

                    <br>
                    <h4>What Types of Businesses Benefit Most?</h4>
                    <p>
                        TAG 91.1 FM advertising works particularly well for businesses targeting Dubai's general English-speaking consumer base, including:
                    </p>
                    <ul>
                        <li>Real estate developers and property agents</li>
                        <li>Retail stores, malls, and e-commerce brands</li>
                        <li>Restaurants, cafes, and food delivery services</li>
                        <li>Healthcare clinics and wellness centres</li>
                        <li>Automotive dealerships and car service centres</li>
                        <li>Banks, financial advisors, and insurance companies</li>
                        <li>Travel agencies, hotels, and tourism brands</li>
                        <li>Education institutions and training centres</li>

                    </ul>
                </div>
                <div class="col-lg-1"></div>

                <div class="col-lg-3 vertical-center">
                    <img src="{{URL::to('/public/section-images/image180.png')}}" width="100%" alt="Why choose us">
                </div> 
            </div>

          </div>

        </section>

        <section class="tm-captive tm-radio">
            <div class="container">
              <div class="in">
                <div>
                  <div class="tag w">Get Started</div>
                  <h2>Start Advertising on<br><em>TAG 91.1 FM</em> Today</h2>
                  <p>Ready to get your brand in front of Dubai's English-speaking audience? DataMySite makes it simple to launch a professional radio advertising campaign on TAG 91.1 FM. Whether you are a startup with a limited budget or an established brand looking to scale visibility, we have the right package for you.</p>
                  <div class="cap-list">
                    <div class="cap-item"><span class="cck">✓</span> Contact DataMySite today for a free consultation and customised radio advertising proposal.</div>
                  </div>
                </div>
                <div class="cap-r">
                  <a href="https://datamysite.com/contact-us" class="bbtn btn-w">Get Transit Media Plan <span class="arr">→</span></a>
                  <a href="https://api.whatsapp.com/send/?phone=971525287259" class="bbtn btn-ow">💬 WhatsApp for Rates</a>
                  <span style="font-size:11px;color:rgba(255,255,255,.3);align-self:center">Free · Rates sent in 60 min</span>
                </div>
              </div>
          </div>
        </section>


        <section id="service-cards" class="blog-section striped-section section pr-blogs-section">

          <div class="container section-title">
            <h2 class="text-theme">Blogs</h2>
            <p class="pr-blog-sub">What’s Going On in the Industry?</p>
            <div class="row gy-4 blog-portrait-card first-row">
                @foreach($blogs as $val)
                    <div class="col-lg-4">
                        <a href="{{route('blogs.detail', [$val->slug])}}">
                          <div class="popular-card blog-card-2 flex-grow-1" bis_skin_checked="1">
                            <div class="card-image" bis_skin_checked="1">
                              <img src="{{URL::to('public/storage/blogs/'.$val->banner)}}" alt="{{$val->banner_alt}}">
                            </div>
                            <div class="popular-text" bis_skin_checked="1">
                              <h6 class="mt-2" title="{{$val->heading}}">{{$val->heading}}</h6>
                              <p class="line-break-3">{{$val->short_description}}</p>
                              <small>by <font class="text-theme2">{{$val->author->name}}</font> - <font class="text-bold">{{date('F d, Y', strtotime($val->created_at))}}</font></small>
                            </div>
                          </div>
                        </a>
                    </div>
                @endforeach
                <div class="col-lg-12">
                    <a href="{{URL::to('/blogs/pr-and-media-relations')}}" class="see-all-btn" target="_blank">See All Blogs</a>
                </div>
            </div>

          </div>

        </section>


        <section id="service-cards" class="blog-section section  faq-new-section">

          <div class="container">

            <div class="row gy-4 first-row">
                <div class="col-lg-12 vertical-center">
                    <h4 class="text-center">Frequently Asked Questions</h4>
                    <br>
                    <div class="faq " id="accordion">
                        <div class="card">
                            <div class="card-header" id="faqHeading-10">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-10" data-aria-expanded="true" data-aria-controls="faqCollapse-10">
                                        <span class="badge">&nbsp;</span>How much does it cost to advertise on TAG 91.1 FM?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-10" class="collapse show" aria-labelledby="faqHeading-10" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Advertising costs on TAG 91.1 depend on the time slot, ad duration, campaign length, and frequency. Morning drive-time slots are premium-priced due to higher listenership. Contact DataMySite for a custom quote tailored to your budget.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-11">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-11" data-aria-expanded="false" data-aria-controls="faqCollapse-11">
                                        <span class="badge">&nbsp;</span>How long should my radio ad be?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-11" class="collapse" aria-labelledby="faqHeading-11" data-parent="#accordion">
                                <div class="card-body">
                                    <p>A 30-second ad is the most common and effective format. It is long enough to deliver a clear message while short enough to hold listener attention. We can also produce 15-second ads for reminders or 60-second storytelling formats for more detailed campaigns.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-12">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-12" data-aria-expanded="false" data-aria-controls="faqCollapse-12">
                                        <span class="badge">&nbsp;</span>Can DataMySite handle everything including production?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-12" class="collapse" aria-labelledby="faqHeading-12" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Yes. DataMySite is a full-service radio advertising agency. We manage strategy, script writing, voice production, airtime booking, and post-campaign reporting. You do not need to work with multiple vendors.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-13">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-13" data-aria-expanded="false" data-aria-controls="faqCollapse-13">
                                        <span class="badge">&nbsp;</span>How quickly can a campaign go live?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-13" class="collapse" aria-labelledby="faqHeading-13" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Once your brief and budget are confirmed, a standard campaign can be live within 5 to 7 business days. Rush options may be available depending on station availability.</p>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>

          </div>

        </section>


    </main>

@endsection

@section('addScript')

@endsection