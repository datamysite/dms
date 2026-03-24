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
                        <h2>With a Pan-Arab audience tuning</h2>
                        <h4>in for reliable news, current affairs, and in-depth analysis</h4>
                        <br>
                        <p>
                            DataMySite helps businesses place strategic advertising campaigns on Al Arabiya 99 FM, ensuring your brand is associated with one of the most credible Arabic media names in the region.
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
                    <h4>Why Advertise on Al Arabiya 99 FM?</h4>
                    <br>
                    <p>The combination of Al Arabiya's global news brand and the intimacy of radio creates a uniquely powerful advertising environment:</p>
                    <ul>
                        <li>Reaches a premium Pan-Arab audience that is educated, affluent, and highly informed</li>
                        <li>Associated with breaking news, which creates a sense of urgency and high attention from listeners</li>
                        <li>Business and current affairs programming attracts professionals and decision-makers</li>
                        <li>Broadcast reach extends beyond the UAE to include listeners across the Arab world</li>
                        <li>Brand association with a trusted and authoritative news platform elevates your credibility</li>
                        <li>Effective for B2B advertising, financial services, real estate, and premium consumer brands</li>

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
                    <h4>Who Listens to Al Arabiya 99 FM?</h4>
                    <p>
                        Al Arabiya 99 FM attracts a sophisticated and influential Arabic-speaking audience:
                    </p>
                    <ul>
                        <li>Business executives, investors, and senior professionals</li>
                        <li>Government officials and public sector decision-makers</li>
                        <li>Educated middle and upper-class Arab consumers</li>
                        <li>News-oriented listeners who value reliable, unbiased reporting</li>
                        <li>Pan-Arab expats in the UAE who want to stay connected with regional developments</li>
                        <li>Arabic-speaking opinion leaders and influencers in business and politics</li>

                    </ul>
                    <br>
                    <h4>Advertising Formats on Al Arabiya 99 FM</h4>
                    <p>
                        With DataMySite managing your campaign, you can access a range of advertising formats:
                    </p>
                    <ul>
                        <li>News Bulletin Sponsorships: Your brand accompanies hourly or prime-time news updates</li>
                        <li>Spot Commercials: 15 to 60-second Arabic ads placed within regular programming breaks</li>
                        <li>Programme Sponsorships: Sponsor specific shows or special news features</li>
                        <li>Expert Commentary Segments: Sponsored business or financial analysis segments aligned with your industry</li>
                        <li>Breaking News Adjacencies: Premium placements immediately before or after breaking news segments</li>

                    </ul>
                </div>
            </div>

          </div>

        </section>


        <section id="service-cards" class="blog-section section   why-us-section why-out-us-section">

          <div class="container">

            <div class="row gy-4 first-row split-block">


                <div class="col-lg-8 vertical-center">
                    <h4>How DataMySite Runs Your Al Arabiya 99 FM Campaign</h4>
                    <p>Running an effective campaign on a premium news station requires precision and brand-appropriate messaging. We take care of everything:</p>
                    <ul>
                        <li>Brand Alignment Strategy: We ensure your campaign tone matches Al Arabiya's authoritative, professional environment</li>
                        <li>Arabic Script Development: We craft premium-quality scripts in formal or business-register Arabic</li>
                        <li>Professional Voice Recording: We use experienced Arabic voice artists suited to a news broadcast environment</li>
                        <li>Strategic Time Slot Booking: We target high-news-consumption windows like morning briefings and evening updates</li>
                        <li>Campaign Analytics: We measure reach, frequency, and response to refine ongoing performance</li>

                    </ul>

                    <br>
                    <h4>Best Industries for Al Arabiya 99 FM Advertising</h4>
                    <p>
                        Al Arabiya 99 FM is a particularly strong platform for brands targeting decision-makers and high-net-worth individuals:
                    </p>
                    <ul>
                        <li>Financial services, banking, and investment companies</li>
                        <li>Real estate developers and luxury property brands</li>
                        <li>Automotive brands targeting executives and premium car buyers</li>
                        <li>Business services, consulting, and professional firms</li>
                        <li>Healthcare and premium private hospitals</li>
                        <li>Luxury retail and high-end consumer goods</li>
                        <li>Government and semi-government entities</li>
                        <li>Technology companies and enterprise software brands</li>

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
                  <h2>Make Your Brand a Part of <br>the News Conversation</h2>
                  <p>Al Arabiya 99 FM is where the Arab world tunes in to stay informed. Advertising here positions your brand alongside content that people trust, value, and pay close attention to every day.</p>
                  <div class="cap-list">
                    <div class="cap-item"><span class="cck">✓</span> Contact DataMySite today to explore advertising opportunities on Al Arabiya 99 FM and get a customised campaign proposal.</div>
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
                                        <span class="badge">&nbsp;</span>Is Al Arabiya 99 FM suitable for small businesses?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-10" class="collapse show" aria-labelledby="faqHeading-10" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Al Arabiya 99 FM is best suited for brands targeting premium, educated, and decision-making audiences. It works especially well for businesses where brand authority and trust matter — such as finance, real estate, healthcare, and professional services. We advise on whether this station is the right fit for your specific goals.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-11">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-11" data-aria-expanded="false" data-aria-controls="faqCollapse-11">
                                        <span class="badge">&nbsp;</span>Can I sponsor specific news segments?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-11" class="collapse" aria-labelledby="faqHeading-11" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Yes, news bulletin sponsorships are one of the most prestigious advertising formats available on Al Arabiya 99 FM. Your brand is introduced just before a major news update, creating strong association with reliability and authority. Contact DataMySite for current availability and pricing.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-12">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-12" data-aria-expanded="false" data-aria-controls="faqCollapse-12">
                                        <span class="badge">&nbsp;</span>Do you offer multilingual campaigns covering both Al Arabiya 99 and English stations?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-12" class="collapse" aria-labelledby="faqHeading-12" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Yes. DataMySite can plan and manage simultaneous campaigns across multiple radio stations in different languages. This is ideal for brands that want to reach both Arabic and English-speaking audiences across the UAE at the same time.</p>
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