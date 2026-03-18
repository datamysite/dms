@extends('web.includes.master')
@section('metaAddition')
    
@endsection
@section('addStyle')
    <link href="{{URL::to('/public')}}/assets/css/service.css" rel="stylesheet">
@endsection
@section('content')

    <main class="main">

        <!-- Page Title -->
          <div class="page-title dark-background" data-aos="fade" style="background-image: url('{{URL::to('public/assets/img/service-new/'.$subservice->slug.'.jpg')}}');">
            <div class="container head-container-service">
                <div class="row">
                    <div class="col-lg-8 head-para-service">
                        <h1>&#10687; {{$subservice->name}}</h1>
                        <h2>Transform Your Brand Presence</h2>
                        <h4>with Billboards Advertising Dubai</h4>
                        <br>
                        <p>
                            At DataMySite, we help brands — from startups to Fortune 500 companies — own Dubai's most premium outdoor advertising spaces. Our end-to-end billboard advertising solutions cover strategy, creative design, location booking, permit handling, installation, and campaign performance reporting.

                        </p>
                    </div>
                    <div class="col-lg-4">
                        <div class="aside-form">
                            
                            <form action="{{route('enquiry.submit')}}" id="enquiry-form">
                                @csrf
                                <input type="hidden" name="service" value="{{$subservice->name}}" required>
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
                    <h4>Why Billboard Advertising in Dubai Delivers Unmatched ROI</h4>
                    <p>
                        Unlike digital ads that get skipped or blocked, a billboard works 24/7. It cannot be muted, closed, or scrolled past. In Dubai's car-centric culture — where the average commuter spends 54 minutes daily on the road — billboards on Sheikh Zayed Road alone generate over 2 million daily impressions.
                        <br>
                        Here's what makes outdoor billboard advertising in Dubai uniquely powerful:
                    </p>
                    <ul>
                        <li><strong>Zero ad fatigue</strong> — your creative runs continuously without audience burnout</li>
                        <li><strong>Massive reach</strong> — one placement reaches both residents and 16+ million annual tourists</li>
                        <li><strong>Premium brand perception</strong> — association with Dubai's iconic skyline elevates brand status</li>
                        <li><strong>Non-skippable</strong> — 100% share-of-voice on static boards; no competition for attention</li>
                        <li><strong>Complements digital</strong> — OOH + digital campaigns generate up to 80% higher recall</li>

                    </ul>
                </div>
                <div class="col-lg-6 vertical-center">
                    <iframe class="service-iframe outdoor-iframe" src="https://www.youtube.com/embed/Ny7v7w6dtq4?si=oAHAurPi9RcZjBPT" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
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

        <section id="service-cards" class="blog-section section striped-section pr-icon-section">

          <div class="container">

            <div class="row gy-4 first-row outdoor-service-col-section">

                <div class="col-lg-12" data-aos="fade-up" data-aos-delay="100">
                    <h4>Our Billboard Advertising Services in Dubai</h4>
                    <p>We provide a complete suite of outdoor advertising formats, strategically selected to match your campaign goals, budget, and target audience:</p>
                </div>
                <div class="col-lg-6">
                    <h5>Static Billboard Advertising</h5>
                    <p>
                        The classic — and still the most powerful format for brand recall. Our static billboards offer 100% share of voice: when your creative is live, it's all anyone sees. Available in standard (6m x 3m) and super-site formats. Ideal for: product launches, brand awareness, real estate, automotive, and FMCG.
                    </p>
                </div>
                <div class="col-lg-6">
                    <h5>Digital Billboard Advertising (DOOH)</h5>
                    <p>
                       High-definition LED digital billboards let you run video content, rotate creatives throughout the day, and update messaging in real time. Perfect for time-sensitive campaigns such as promotions, events, or Ramadan specials. Multiple brands can share a digital screen, reducing cost-per-campaign significantly.
                    </p>
                </div>
                <div class="col-lg-6">
                    <h5>Building Wraps</h5>
                    <p>
                        Turn an entire building façade into your brand's canvas. Building wraps in Dubai create an unmissable, high-impact presence — particularly during construction periods in Business Bay, DIFC, and Downtown Dubai. They offer extraordinary size, making them visible from hundreds of metres away.
                    </p>
                </div>
                <div class="col-lg-6">
                    <h5>Hoardings</h5>
                    <p>
                        Site hoardings surrounding construction projects represent long-duration, high-visibility advertising in premium locations across Dubai. Campaigns run for months, delivering continuous brand exposure in key growth corridors like Dubai Hills, Emaar South, and the Expo City district.
                    </p>
                </div>  


                <div class="col-lg-12">
                    <h5>Wallscapes</h5>
                    <p>
                        Large-scale murals and wallscapes on building exteriors command attention in high-footfall urban areas. They combine creative storytelling with outdoor media — making your brand feel like an authentic part of the city.
                    </p>
                </div>  
            </div>
            <div class="uni-strip-see-more">
                <button data-class="outdoor-service-col-section">See More</button>
            </div>

          </div>

        </section>


        <section class="bb-locs section testimonials">
            <div class="container">
              <div class="in">
                <div class="top">
                  <div>
                    <div class="tag">Prime Billboard Locations in Dubai</div>
                    <h2>Dubai's Highest-Traffic<br><em>Billboard Spots</em></h2>
                  </div>
                  <a href="https://datamysite.com/contact-us" class="bbtn btn-r">Check Location Availability <span class="arr">→</span></a>
                </div>
                <div class="row">
                    <div class="col-lg-7">
                        <p>
                            Location is everything. Our media planning team identifies and secures the highest-impact spots based on your target audience, daily impressions data, and competitor placements. Key corridors we operate in:
                        </p>
                        <ul>
                            <li><strong>Sheikh Zayed Road (SZR)</strong><br> — Dubai's main artery. 2M+ daily impressions. Premium for B2C and B2B.<br><br></li>
                            <li><strong>Downtown Dubai & Burj Khalifa Boulevard</strong><br> — luxury, tourism, and lifestyle brands.<br><br></li>
                            <li><strong>Business Bay</strong><br> — corporate decision-makers, finance, real estate, and professional services.<br><br></li>
                            <li><strong>JBR & Dubai Marina</strong><br> — expat lifestyle, F&B, retail, entertainment, and hospitality.<br><br></li>
                            <li><strong>Al Maktoum International Airport Road</strong><br> — global travellers, logistics, and aviation sector.<br><br></li>
                            <li><strong>Jumeirah Beach Road</strong><br> — premium residential, luxury fashion, and automotive brands.<br><br></li>
                            <li><strong>Dubai Investment Park & Al Quoz</strong><br> — industrial, B2B, and logistics campaigns.<br><br></li>

                        </ul>
                    </div>
                    <div class="col-lg-5 align-content-center">
                        <div class="loc-grid">
                          <div class="loc-card">
                            <div class="icon">🛣️</div>
                            <div class="loc">Sheikh Zayed Rd</div>
                            <div class="imp">2M+ daily impressions</div>
                            <div class="tag-pill">Premium</div>
                          </div>
                          <div class="loc-card">
                            <div class="icon">🏙️</div>
                            <div class="loc">Downtown Dubai</div>
                            <div class="imp">Tourist & business hub</div>
                            <div class="tag-pill">High Footfall</div>
                          </div>
                          <div class="loc-card">
                            <div class="icon">🌊</div>
                            <div class="loc">JBR / Marina</div>
                            <div class="imp">Lifestyle & F&B audience</div>
                            <div class="tag-pill">Expat Reach</div>
                          </div>
                          <div class="loc-card">
                            <div class="icon">✈️</div>
                            <div class="loc">DXB Airport Rd</div>
                            <div class="imp">Global traveller exposure</div>
                            <div class="tag-pill">Int'l Audience</div>
                          </div>
                          <div class="loc-card">
                            <div class="icon">🏗️</div>
                            <div class="loc">Business Bay</div>
                            <div class="imp">Corporate decision-makers</div>
                            <div class="tag-pill">B2B</div>
                          </div>
                          <div class="loc-card">
                            <div class="icon">🏙️</div>
                            <div class="loc">Dubai Investment Park</div>
                            <div class="imp">logistics campaigns</div>
                            <div class="tag-pill">B2B</div>
                          </div>
                        </div>
                    </div>
                </div>
              </div>
          </div>
        </section>

        <section id="service-cards" class="blog-section section striped-section why-us-section why-out-us-section">

          <div class="container">

            <div class="row gy-4 first-row">

                <div class="col-lg-9">
                    <h4>Who Should Advertise on Billboards in Dubai?</h4>
                    <p>
                        Billboard advertising in Dubai works for virtually every industry. Our clients include:
                    </p>
                    <ul>
                        <li>Real estate developers launching off-plan or ready projects</li>
                        <li>Automotive brands — showroom launches, test drive CTAs</li>
                        <li>F&B and hospitality — restaurant openings, hotel promotions</li>
                        <li>Retail and fashion — seasonal sales, new store openings</li>
                        <li>Finance and banking — product launches, brand credibility</li>
                        <li>Healthcare and wellness — clinic openings, health campaigns</li>
                        <li>Technology and SaaS — awareness campaigns in business hubs</li>
                        <li>Events — concerts, exhibitions, Expo, and GITEX</li>

                    </ul>
                    <br>
                    <h4>Our Billboard Advertising Process: From Brief to Launch in 5 Steps</h4>
                    <ul>
                        <li><strong>Step 1</strong> — Strategy & Briefing: We understand your campaign goals, budget, target audience, and KPIs.</li>
                        <li><strong>Step 2</strong> — Location Scouting & Recommendation: We shortlist premium sites with daily traffic data and availability windows.</li>
                        <li><strong>Step 3</strong> — Creative Design: Our design team produces billboard artwork optimised for distance, contrast, and message retention (following the Rule of 7 — max 7 words, one bold visual, one CTA).</li>
                        <li><strong>Step 4</strong> — Permit Management & Installation: We handle all RTA and municipality approvals and manage professional printing and installation.</li>
                        <li><strong>Step 5</strong> — Reporting & Performance: You receive a post-campaign report covering verified impressions, audience data, and recommendations for optimisation.</li>

                    </ul>
                    
                </div>
                <div class="col-lg-3 mob-not-visible">
                    <img src="{{URL::to('/public/section-images/image1.png')}}" width="100%" alt="Why choose us">
                </div> 
            </div>

          </div>

        </section>
        <section id="service-cards" class="blog-section section why-us-section why-out-us-section">

          <div class="container">

            <div class="row gy-4 first-row">

                <div class="col-lg-3 vertical-center">
                    <img src="{{URL::to('/public/section-images/image48.png')}}" width="100%" alt="Why choose us">
                </div> 
                <div class="col-lg-1"></div>
                <div class="col-lg-8">
                    <h4>Billboard Advertising Formats Comparison</h4>
                    <p>
                        Not sure which format suits your campaign? Here's a quick guide:
                    </p>
                    <ul>
                        <li><strong>Static Billboard</strong> — Best for:<br> Brand awareness, long-duration campaigns | Duration: 2–12 weeks<br><br></li>
                        <li><strong>Digital LED Board</strong> — Best for:<br> Promotions, time-sensitive content, dynamic creative | Duration: 1–4 weeks<br><br></li>
                        <li><strong>Building Wrap</strong> — Best for:<br> Large-scale brand statements, real estate launches | Duration: 3–24 months<br><br></li>
                        <li><strong>Hoarding</strong> — Best for:<br> Long-duration campaigns near high-footfall construction zones | Duration: 3–12 months<br><br></li>
                        <li><strong>Wallscape</strong> — Best for:<br> Cultural, lifestyle, and luxury brands in pedestrian zones | Duration: Custom<br><br></li>

                    </ul>
                    
                </div>
            </div>

          </div>

        </section>

        <section id="service-cards" class="blog-section section striped-section why-us-section why-out-us-section">

          <div class="container">

            <div class="row gy-4 first-row">

                <div class="col-lg-9">
                    <h4>Your Path to Marketing Success</h4>
                    <p>
                        Billboard advertising Dubai puts your brand message where it matters most. From busy highways to premium retail locations, your advertisements command attention and drive results.
                        <br>
                        Let our team show you how digital billboards can transform your marketing impact. Book your consultation today and discover the perfect locations for your campaign.
                    </p>
                    <br>
                    <h4>Start Your Success Story with us at DataMySite</h4>
                    <p>
                        Launch your billboards advertising Dubai campaign today. Consult our team to explore premium locations and custom solutions that match your marketing goals.
                        <br><br>
                        Contact us at <a href="tel:971525287259"><Strong>+971 525 287 259</Strong></a>, or<br>
                        You may mail us at <a href="mailto:contact@datamysite.com"><Strong>contact@datamysite.com</Strong></a>.<br>
                        We are located at <strong>Al Bayan Building, Dubai Investment Park, Dubai – UAE</strong>. So, you can plan for a visit to seek a consultation in a personalised manner.
                    </p>
                    
                </div>
                <div class="col-lg-3 mob-not-visible">
                    <img src="{{URL::to('/public/section-images/image1.png')}}" width="100%" alt="Why choose us">
                </div> 
            </div>

          </div>

        </section>


        <section class="bb-roi">
            <div class="container">
              <div class="in">
                <div>
                  <div class="tag white">Why Billboards Work in Dubai</div>
                  <h2>2 Million Eyes on Your<br>Brand <em>Every Single Day</em></h2>
                  <p>Dubai's commuter culture means billboards on Sheikh Zayed Road alone reach 2M+ daily impressions. Combined with our strategic placement expertise, your brand becomes impossible to ignore.</p>
                  <div class="roi-stats">
                    <div class="roi-stat"><div class="v">2M+</div><div class="l">Daily impressions SZR</div></div>
                    <div class="roi-stat"><div class="v">96%</div><div class="l">OOH buying expertise</div></div>
                    <div class="roi-stat"><div class="v">48hrs</div><div class="l">Availability confirmed</div></div>
                  </div>
                </div>
                <div class="r">
                  <a href="https://datamysite.com/contact-us" class="bbtn btn-w">Get My Billboard Quote <span class="arr">→</span></a>
                  <a href="https://api.whatsapp.com/send/?phone=971525287259" class="bbtn btn-ow">💬 Check Availability Now</a>
                  <span style="font-size:11px;color:rgba(255,255,255,.35);align-self:center">Free quote · No commitment</span>
                </div>
              </div>
          </div>
        </section>




        <section id="service-cards" class="blog-section section pr-blogs-section">

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

        <section id="service-cards" class="blog-section section striped-section faq-new-section">

          <div class="container">

            <div class="row gy-4 first-row">

                <div class="col-lg-12">
                    <h4 class="text-center">Frequently Asked Questions</h4>
                    <br>
                    <div class="faq " id="accordion">
                        <div class="card">
                            <div class="card-header" id="faqHeading-10">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-10" data-aria-expanded="true" data-aria-controls="faqCollapse-10">
                                        <span class="badge">&nbsp;</span>How much does billboard advertising cost in Dubai?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-10" class="collapse show" aria-labelledby="faqHeading-10" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Costs vary based on location, format, and duration. Sheikh Zayed Road super-sites represent the premium end; roadside boards in emerging areas are more affordable. Contact DataMySite for a custom quote with multiple location options across your target budget.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-11">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-11" data-aria-expanded="false" data-aria-controls="faqCollapse-11">
                                        <span class="badge">&nbsp;</span>How do I measure billboard advertising ROI?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-11" class="collapse" aria-labelledby="faqHeading-11" data-parent="#accordion">
                                <div class="card-body">
                                    <p>We provide Audience Impression data based on traffic counts, GPS data, and transit patterns. Combined with concurrent digital campaign data, we track brand search lift, enquiry volume, and footfall attribution where applicable.</p>
                                </div>
                            </div>
                        </div>


                        <div class="card">
                            <div class="card-header" id="faqHeading-12">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-12" data-aria-expanded="false" data-aria-controls="faqCollapse-12">
                                        <span class="badge">&nbsp;</span>What is the lead time to book a billboard in Dubai?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-12" class="collapse" aria-labelledby="faqHeading-12" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Most bookings require 5–10 working days for processing and permits. For prime locations like SZR and Downtown, we recommend 2–4 weeks advance booking as premium spots fill quickly — especially during Ramadan, DSF, and the December season.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-13">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-13" data-aria-expanded="false" data-aria-controls="faqCollapse-13">
                                        <span class="badge">&nbsp;</span>Can I run a billboard campaign during Ramadan?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-13" class="collapse" aria-labelledby="faqHeading-13" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Absolutely. Ramadan is one of the highest-spending periods in the UAE. However, creative must comply with UAE advertising guidelines regarding imagery and messaging. Our team handles all compliance review as part of the campaign service.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-14">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-14" data-aria-expanded="false" data-aria-controls="faqCollapse-14">
                                        <span class="badge">&nbsp;</span>Do billboards work for B2B companies?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-14" class="collapse" aria-labelledby="faqHeading-14" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Yes. Placing billboards near business hubs, airports, or major trade centers is a highly effective way to build "Top-of-Mind" awareness among executive decision-makers.</p>
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