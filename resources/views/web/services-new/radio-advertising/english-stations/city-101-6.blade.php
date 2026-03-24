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
                        <h2>One of Dubai's leading English radio stations</h2>
                        <br>
                        <p>
                            DataMySite helps businesses build and execute strategic City 101.6 FM advertising campaigns that connect with Dubai's working professional community — the people who drive the city's economy and hold significant purchasing power.
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
                    <h4>Why Advertise on City 101.6 FM?</h4>
                    <br>
                    <p>City 101.6 FM has established itself as a trusted companion for Dubai's professional community. Here is what makes it a strong advertising platform:</p>
                    <ul>
                        <li>Reaches urban professionals across key Dubai business districts — DIFC, Business Bay, Downtown, and JLT</li>
                        <li>Strong engagement during morning and evening commutes when professional listeners are highly attentive</li>
                        <li>Mix of music, news, and professional lifestyle content that keeps listeners tuned in longer</li>
                        <li>Affluent audience with significant spending power across real estate, automotive, travel, and luxury categories</li>
                        <li>Credible and sophisticated brand environment that elevates advertiser perception</li>
                        <li>Effective for B2B and premium B2C campaigns alike</li>

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
                    <h4>Who Listens to City 101.6 FM?</h4>
                    <p>
                        City 101.6 FM attracts Dubai's career-driven, lifestyle-conscious population:
                    </p>
                    <ul>
                        <li>Corporate professionals and managers working in finance, technology, marketing, and consulting</li>
                        <li>Business owners and entrepreneurs based in Dubai's business districts</li>
                        <li>High-income English-speaking expats and long-term UAE residents</li>
                        <li>Professionals aged 28 to 50 with active purchasing habits in property, travel, automotive, and lifestyle</li>
                        <li>Decision-makers in both consumer and business purchasing contexts</li>

                    </ul>
                    <br>
                    <h4>Ad Formats on City 101.6 FM</h4>
                    <p>
                        DataMySite gives you flexible options to reach City 101.6 FM's professional audience:
                    </p>
                    <ul>
                        <li>Spot Ads: 30 or 60-second commercials running during commercial breaks throughout the day</li>
                        <li>Drive Time Sponsorships: Premium placements in the morning and evening commute programming</li>
                        <li>Presenter Live Reads: Professional, credible host endorsements that lend authority to your message</li>
                        <li>Business News Sponsorships: Align your brand with business updates and market news segments</li>
                        <li>Lifestyle and Entertainment Show Integrations: Reach professionals during after-work listening hours</li>

                    </ul>
                </div>
            </div>

          </div>

        </section>


        <section id="service-cards" class="blog-section section   why-us-section why-out-us-section">

          <div class="container">

            <div class="row gy-4 first-row split-block">


                <div class="col-lg-8 vertical-center">
                    <h4>How DataMySite Plans and Executes Your City 101.6 Campaign</h4>
                    <p>We handle every aspect of your radio campaign to ensure it lands with the right impact on City 101.6 FM:</p>
                    <ul>
                        <li>Strategic Planning: We align your campaign message with the professional values and lifestyle of the City 101.6 audience</li>
                        <li>Script Writing: We create polished, sophisticated scripts that feel appropriate for a professional audience</li>
                        <li>Voice Production: We select professional voice artists who sound credible, clear, and authoritative</li>
                        <li>Optimal Scheduling: We book time slots that maximise exposure during professional commute and working hours</li>
                        <li>Campaign Measurement: We track and report on key performance indicators throughout and after your campaign</li>

                    </ul>

                    <br>
                    <h4>Industries That Thrive on City 101.6 FM Advertising</h4>
                    <p>
                        City 101.6 FM is especially effective for brands that need to reach Dubai's professional and business community:
                    </p>
                    <ul>
                        <li>Real estate and property investments</li>
                        <li>Banking, wealth management, and insurance</li>
                        <li>Professional services including legal, accounting, and HR</li>
                        <li>Business travel, airlines, and premium hotels</li>
                        <li>Automotive brands targeting professional buyers</li>
                        <li>Technology and SaaS solutions for professionals</li>
                        <li>Executive education, MBA programmes, and professional certifications</li>
                        <li>Premium lifestyle and luxury brands</li>

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
                  <h2>Put Your Brand in Front of <br>Dubai's Professionals</h2>
                  <p>City 101.6 FM is the station of choice for Dubai's driven, educated, and high-earning professional class. Advertising here positions your brand in a smart, sophisticated environment and puts your message in front of the people most likely to act on it.</p>
                  <div class="cap-list">
                    <div class="cap-item"><span class="cck">✓</span> Contact DataMySite today for a free consultation and a tailored City 101.6 FM advertising strategy.</div>
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
                                        <span class="badge">&nbsp;</span>Is City 101.6 FM better for B2B or B2C advertising?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-10" class="collapse show" aria-labelledby="faqHeading-10" data-parent="#accordion">
                                <div class="card-body">
                                    <p>City 101.6 FM is strong for both. Its professional listener base makes it excellent for B2B campaigns reaching decision-makers and business owners. At the same time, the high-income consumer profile of its audience makes it highly effective for premium B2C brands in property, automotive, travel, and luxury retail.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-11">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-11" data-aria-expanded="false" data-aria-controls="faqCollapse-11">
                                        <span class="badge">&nbsp;</span>How long should a professional-focused radio ad be?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-11" class="collapse" aria-labelledby="faqHeading-11" data-parent="#accordion">
                                <div class="card-body">
                                    <p>For professional audiences, 30 seconds is usually optimal — long enough to communicate a clear and credible message without overstaying your welcome. For more complex messages, such as event invitations or product launches, 60-second spots can work well when the script is well-structured and engaging.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-12">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-12" data-aria-expanded="false" data-aria-controls="faqCollapse-12">
                                        <span class="badge">&nbsp;</span>Do you handle repeat campaigns and seasonal refreshes?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-12" class="collapse" aria-labelledby="faqHeading-12" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Yes. Many DataMySite clients run ongoing campaigns on City 101.6 FM with periodic creative refreshes. We recommend updating your ad creatives every 6 to 8 weeks to maintain listener freshness and avoid message fatigue.</p>
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