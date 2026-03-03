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
                        <h2>Reach Millions on the Move</h2>
                        <h4>with Dubai Metro Advertising</h4>
                        <br>
                        <p>
                            At DataMySite, we specialize in metro advertising in Dubai, offering a full suite of creative and high-impact solutions across stations, trains, and digital screens. Whether you’re launching a new product, enhancing brand visibility, or targeting a specific commuter demographic, our metro advertising services deliver unmatched exposure across the city’s busiest routes.
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
                <div class="col-lg-12">
                    
                    <h4>Why Metro Advertising in Dubai Works</h4>
                    <p class="mb-0">
                        The Dubai Metro is more than just transportation — it’s an urban lifestyle experience. Advertising here means tapping into a premium, captive audience that interacts with brand messages while commuting, waiting, or walking through stations.
                        <br><br>
                        <strong>Key reasons why metro advertising is effective:</strong>

                    </p>
                </div>
                <div class="col-lg-6 vertical-center" data-aos="fade-up" data-aos-delay="100">
                    <ul>
                        <li>
                            <strong>High Footfall & Daily Visibility</strong><br>
                            With millions of monthly passengers, Dubai Metro offers constant, repetitive exposure, helping brands stay top-of-mind.
                        </li>
                        <li>
                            <strong>Audience Diversity</strong><br>
                            The metro reaches all demographics — from professionals and students to tourists and business travelers — providing a broad marketing reach.
                        </li>
                        <li>
                            <strong>Premium Locations</strong><br>
                            Ads appear in high-traffic areas like BurJuman, Union, Mall of the Emirates, and Dubai Mall stations, ensuring maximum visibility.
                        </li>
                        <li>
                            <strong>Cost-Effective Brand Awareness</strong><br>
                            Compared to digital or TV campaigns, metro advertising provides long-term visibility at competitive costs.
                        </li>
                        <li>
                            <strong>Creative Freedom</strong><br>
                            From digital screens to full train wraps and station takeovers, the metro offers multiple innovative formats to bring your message to life.
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <iframe class="service-iframe" src="https://www.youtube.com/embed/Slt71QddNGc?si=Bn768ai2rsCC0YBI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
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

                <div class="col-lg-6">
                    <h5>Metro Station Takeover</h5>
                    <p>
                        A station takeover transforms an entire metro station into your brand’s world. From wall wraps to escalator panels, turnstiles, and entry gates, your message appears everywhere commuters look.
                        <br>
                        <strong>Benefits:</strong>
                    </p>
                    <ul>
                        <li>Complete control of visibility in high-traffic stations.</li>
                        <li>Immersive brand experience that drives recall.</li>
                        <li>Ideal for major product launches or rebranding campaigns.</li>

                    </ul>
                </div>
                <div class="col-lg-6">
                    <h5>Metro Pillars Advertising</h5>
                    <p>
                       Metro pillars offer a perfect blend of consistency and visibility. Strategically placed across walkways and platforms, pillar wraps ensure repetitive exposure throughout the commuter journey.
                       <br>
                       <strong>Advantages:</strong>
                    </p>
                    <ul>
                        <li>High visibility at eye level.</li>
                        <li>Cost-effective and scalable across multiple stations.</li>
                        <li>Great for reinforcing brand recognition and awareness.</li>

                    </ul>
                </div>
                <div class="col-lg-6">
                    <h5>Digital Screens (DOOH in Dubai Metro)</h5>
                    <p>
                        Digital Out-of-Home (DOOH) advertising inside metro stations captures attention with motion graphics, videos, and dynamic visuals.
                        <br>
                        <strong>Why Choose DOOH Advertising in Dubai Metro:</strong>
                    </p>
                    <ul>
                        <li>Modern, interactive, and engaging.</li>
                        <li>Real-time updates and creative flexibility.</li>
                        <li>Ideal for time-sensitive campaigns and events.</li>
                        <li>Delivers measurable impact with audience analytics.</li>

                    </ul>
                </div>
                <div class="col-lg-6">
                    <h5>Station Wall Branding</h5>
                    <p>
                        Metro station walls serve as a canvas for large-format advertising that creates strong visual impact. These placements transform ordinary spaces into immersive brand experiences.
                        <br>
                        <strong>Key Features:</strong>
                    </p>
                    <ul>
                        <li>Perfect for storytelling and brand awareness.</li>
                        <li>Large creative space for impactful visuals.</li>
                        <li>Visible to both passengers and passersby.</li>

                    </ul>
                </div>  


                <div class="col-lg-12">
                    <h5>Inside Train Advertising</h5>
                    <p>
                        Inside train advertising targets passengers during their commute — when they are relaxed, engaged, and more likely to absorb messaging.
                    </p>
                    <div class="row">
                        <div class="col-lg-4">
                            <p><strong>Options Include:</strong></p>
                            <ul>
                                <li>Panel ads inside train cabins.</li>
                                <li>Window stickers and door graphics.</li>
                                <li>Ceiling or floor branding.</li>

                            </ul>
                        </div>
                        <div class="col-lg-4">
                            <p><strong>Benefits:</strong></p>
                            <ul>
                                <li>High engagement rate.</li>
                                <li>Repetitive exposure over multiple journeys.</li>
                                <li>Ideal for lifestyle, retail, and service-based brands.</li>

                            </ul>
                        </div>
                    </div>
                </div>  
            </div>
            <div class="uni-strip-see-more">
                <button data-class="outdoor-service-col-section">See More</button>
            </div>

          </div>

        </section>

        <section id="service-cards" class="blog-section section pr-impact-section">

          <div class="container">

            <div class="row gy-4 first-row">

                <div class="col-lg-12">
                </div>
                <div class="col-lg-8">
                    
                    <h4>Comprehensive Metro Advertising Services by DataMySite</h4>
                    <p>
                        As one of Dubai’s leading outdoor advertising agencies, DataMySite offers complete metro branding solutions tailored to your campaign objectives. We manage everything from creative design to regulatory approvals, installation, and campaign monitoring.
                        <br>
                        Our metro advertising services include:
                    </p>
                    <ul>
                        <li>Metro Station Takeover</li>
                        <li>Metro Pillar Branding</li>
                        <li>DOOH (Digital Out-of-Home) Screens in Dubai Metro</li>
                        <li>Station Wall Branding</li>
                        <li>Inside Train Advertising</li>

                    </ul>
                    <p>
                        Each format serves a unique purpose — combining brand dominance, engagement, and visual appeal.
                    </p>

                </div> 
                <div class="col-lg-1"></div>
                <div class="col-lg-3 vertical-center">
                    <img src="{{URL::to('/public/section-images/image65.png')}}" width="100%" alt="Impact of PR Coverage">
                </div>
            </div>

          </div>

        </section>



        <section id="service-cards" class="blog-section section striped-section why-us-section why-out-us-section">

          <div class="container">

            <div class="row gy-4 first-row split-block">

                <div class="col-lg-4 vertical-center">
                    <img src="{{URL::to('/public/section-images/image66.png')}}" width="100%" alt="Impact of PR Coverage">
                </div>
                <div class="col-lg-8">
                    <h4>The Power of Metro Advertising for Brand Growth</h4>
                    <p>
                        Metro advertising in Dubai is not just about visibility — it’s about strategic storytelling. Whether your goal is to build awareness, drive engagement, or launch a new product, the metro provides unmatched opportunities to reach your target audience efficiently.
                        <br>
                        Ideal for:
                    </p>
                    <ul>
                        <li>Government and public campaigns</li>
                        <li>Retail and real estate marketing</li>
                        <li>Lifestyle, tech, and fashion brands</li>
                        <li>Tourism and events promotion</li>

                    </ul>
                    <br>
                    <h4>Let’s Elevate Your Brand Visibility Across Dubai Metro</h4>
                    <p>
                        Whether you want to dominate an entire station or captivate audiences inside the trains, DataMySite delivers creative, data-driven, and result-oriented metro advertising campaigns in Dubai.
                        <br><br>
                        Reach out today to discuss your metro branding strategy and discover how we can help you connect with millions of daily commuters across Dubai.
                    </p>
                </div> 
            </div>

          </div>

        </section>

        <section id="service-cards" class="blog-section section why-us-section why-out-us-section">

          <div class="container">

            <div class="row gy-4 first-row">

                <div class="col-lg-9">
                    <h4>Why Choose DataMySite for Metro Advertising in Dubai</h4>
                    <p>
                        DataMySite stands out as one of the most trusted outdoor advertising agencies in Dubai, with a strong portfolio across the metro, billboards, buses, and digital media.
                        <br>
                        Here’s what sets us apart:
                    </p>
                    <ul>
                        <li>End-to-end campaign management (design to execution).</li>
                        <li>Access to premium metro stations across Dubai.</li>
                        <li>Compliance with RTA and Dubai Municipality regulations.</li>
                        <li>Custom packages for all budgets.</li>
                        <li>Transparent reporting and performance tracking.</li>
                    </ul>
                    <p>
                        We don’t just place ads — we create experiences that connect brands with commuters in meaningful ways.
                    </p>
                    
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-2 mob-not-visible">
                    <img src="{{URL::to('/public/assets/img/why-us.png')}}" width="100%" alt="Why choose us">
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

        <section id="service-cards" class="blog-section section faq-new-section">

          <div class="container">

            <div class="row gy-4 first-row">

                <div class="col-lg-4">
                    <img src="{{URL::to('/public/assets/img/faq-new.png')}}" width="100%" alt="FAQs">
                </div> 
                <div class="col-lg-1"></div>
                <div class="col-lg-7 vertical-center">
                    <h4>FAQs</h4>
                    <div class="faq " id="accordion">
                        <div class="card">
                            <div class="card-header" id="faqHeading-10">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-10" data-aria-expanded="true" data-aria-controls="faqCollapse-10">
                                        <span class="badge">&nbsp;</span>How much does metro advertising in Dubai cost?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-10" class="collapse show" aria-labelledby="faqHeading-10" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Costs vary depending on station location, ad type, and duration. High-traffic stations like Dubai Mall or Union cost more due to higher visibility. Contact DataMySite for a customized quote.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-11">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-11" data-aria-expanded="false" data-aria-controls="faqCollapse-11">
                                        <span class="badge">&nbsp;</span>What approvals are needed for metro advertising?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-11" class="collapse" aria-labelledby="faqHeading-11" data-parent="#accordion">
                                <div class="card-body">
                                    <p>All metro campaigns must comply with RTA guidelines. DataMySite manages all necessary permits and documentation on your behalf.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-13">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-13" data-aria-expanded="false" data-aria-controls="faqCollapse-13">
                                        <span class="badge">&nbsp;</span>Can I advertise inside the trains?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-13" class="collapse" aria-labelledby="faqHeading-13" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Yes. Inside train advertising is highly effective and available in various formats like panel ads, stickers, and digital screens.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-12">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-12" data-aria-expanded="false" data-aria-controls="faqCollapse-12">
                                        <span class="badge">&nbsp;</span>What’s the minimum campaign duration?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-12" class="collapse" aria-labelledby="faqHeading-12" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Typically, metro campaigns run for at least 4 to 8 weeks to achieve consistent exposure, though short-term options are also available.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-14">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-14" data-aria-expanded="false" data-aria-controls="faqCollapse-14">
                                        <span class="badge">&nbsp;</span>Why choose metro advertising over billboards?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-14" class="collapse" aria-labelledby="faqHeading-14" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Unlike billboards, metro advertising provides an immersive environment where audiences spend more time engaging with your message — ideal for awareness and recall.</p>
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