@extends('web.includes.master')
@section('metaAddition')
    
@endsection
@section('addStyle')
    <link href="{{URL::to('/public')}}/assets/css/service.css" rel="stylesheet">
@endsection
@section('content')

    <main class="main">

        <!-- Page Title -->
          <div class="page-title dark-background" data-aos="fade" style="background-image: url('{{URL::to('public/assets/img/service-new/'.$mainservice->slug.'.jpg')}}');">
            <div class="container head-container-service">
                <div class="row">
                    <div class="col-lg-8 head-para-service">
                        <h1>&#10687; {{$subservice->name}}</h1>
                        <h2>Transform an Entire</h2>
                        <h4>Metro Station into Your Brand’s World</h4>
                        <br>
                        <p>
                            At DataMySite, we help brands create immersive experiences through full metro station takeovers in Dubai, turning high-traffic transit spaces into powerful storytelling environments that reach thousands of commuters daily.
                        </p>
                    </div>
                    <div class="col-lg-4">
                        <div class="aside-form">
                            <h3>Want to know more?</h3>
                            <form action="{{route('enquiry.submit')}}" id="enquiry-form" >
                                @csrf
                                <input type="text" name="name" placeholder="Name" class="form-control" required>
                                
                                <input type="tel" name="mailphone" id="phone-field2" placeholder="Phone" class="form-control" required>
                                <input type="hidden" name="phone" id="fullphone-field2" required="">
                                <br>
                                <input type="email" name="email" placeholder="Email" class="form-control aside-email" required>
                                
                                <input type="hidden" name="service" value="{{$mainservice->name}}" required>
                                                                
                                <textarea class="form-control" name="description" rows="4" placeholder="Describe Your Requirement" required></textarea>
                                
                                <button class="btn btn-theme">Submit Your Enquiry</button>
                                <div class="loading"><img src="{{URL::to('/public/loader-gif.gif')}}" width="80px" class="newsletter-loader"></div>
                            </form>
                        </div>
                    </div>
                </div>
              
            </div>
          </div><!-- End Page Title -->



        <section id="service-cards" class="blog-section section">

          <div class="container">

            <div class="row gy-4 first-row">

                <div class="col-lg-6 vertical-center" data-aos="fade-up" data-aos-delay="100">
                    <h4>What Is a Metro Station Takeover?</h4>
                    <p>
                        A metro station takeover is a form of large-scale out-of-home advertising (OOH) where a single advertiser exclusively brands an entire station. Instead of sharing space with other ads, your brand takes complete control — ensuring maximum attention and zero competition.
                        <br><br>
                        These campaigns are ideal for product launches, rebranding initiatives, seasonal promotions, or high-impact awareness campaigns that demand strong visibility across Dubai’s bustling metro network.
                    </p>
                </div>
                <div class="col-lg-6 vertical-center">
                    <iframe class="service-iframe airline-iframe" src="https://www.youtube.com/embed/Slt71QddNGc?si=Bn768ai2rsCC0YBI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
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

            <div class="row gy-4 first-row">

                <div class="col-lg-8 vertical-center">
                    <h4>Why Metro Station Takeovers Are So Powerful in Dubai</h4>
                    <p>
                        Dubai’s metro system connects all major residential and commercial areas, making it one of the busiest transportation networks in the region. Advertising here ensures your message is seen by a diverse audience — including daily commuters, tourists, professionals, and international visitors.
                        <br><br>
                        <strong>Here’s why brands love metro station takeovers:</strong>

                    </p>
                    <ul>
                        <li>
                            <strong>Unmatched Exposure</strong><br>
                            Stations like Dubai Mall/Burj Khalifa, Union, Mall of the Emirates, and Business Bay receive thousands of visitors daily. A takeover here means round-the-clock brand visibility.
                        </li>
                        <li>
                            <strong>Exclusive Space Ownership</strong><br>
                            Your brand stands alone — no competitor ads nearby — ensuring your visuals dominate the entire station.
                        </li>
                        <li>
                            <strong>Memorable Brand Experience</strong><br>
                            Full-station branding immerses audiences in your story, driving emotional connection and long-term recall.
                        </li>
                        <li>
                            <strong>Premium Impression Quality</strong><br>
                            Metro stations are clean, modern, and visually sophisticated — ideal for presenting a premium brand image.
                        </li>
                        <li>
                            <strong>Strategic Marketing Impact</strong><br>
                            Takeovers create massive buzz both offline and online, often shared on social media for their creativity and scale.
                        </li>
                    </ul>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-3 mob-not-visible">
                    <img src="{{URL::to('/public/section-images/image41.png')}}" width="100%" alt="Why choose us">
                </div> 
            </div>

          </div>

        </section>



        
        <section id="service-cards" class="blog-section section pr-icon-section">

          <div class="container">

            <div class="row gy-4 first-row">

                <div class="col-lg-12" data-aos="fade-up" data-aos-delay="100">
                </div>
                <div class="col-lg-4 vertical-center">
                    <img src="{{URL::to('/public/section-images/image40.png')}}" class="flyer-img" width="100%" alt="Flyers that find the right hands">
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-7">
                    <h4>What Areas Can Be Branded in a Metro Station?</h4>
                    <p>
                        A full station takeover includes a variety of branding opportunities, allowing total creative coverage. At DataMySite, we offer customized layouts that align with your campaign goals.
                        <br>
                        <strong>Brandable Spaces Include:</strong>
                    </p>
                    <ul>
                        <li><strong>Station Entrances & Exits</strong>: Create a striking first impression for all visitors.</li>
                        <li><strong>Ticket Counters & Gates</strong>: Perfect for direct engagement during entry.</li>
                        <li><strong>Escalators & Stairways</strong>: Capture attention as people move between levels.</li>
                        <li><strong>Wall Wraps & Panels</strong>: Ideal for storytelling and visual impact.</li>
                        <li><strong>Ceilings & Floors</strong>: Creative placements that surprise and engage commuters.</li>
                        <li><strong>Station Pillars & Beams</strong>: Great for repetitive logo or tagline reinforcement.</li>
                        <li><strong>Digital Screens</strong>: Add motion and interactivity for modern appeal.</li>
                    </ul>
                    <p>Every inch can be transformed into your brand’s visual identity — from colors and fonts to creative messages — ensuring your campaign leaves a lasting impression.</p>
                </div>
            </div>

          </div>

        </section>



        <section id="service-cards" class="blog-section striped-section section why-us-section why-out-us-section">

          <div class="container">

            <div class="row gy-4 first-row">

                <div class="col-lg-8 vertical-center">
                    <h4>Why Brands Choose DataMySite for Metro Station Takeovers</h4>
                    <p>
                        With years of experience in outdoor and metro advertising in Dubai, DataMySite has the expertise, creative team, and local regulatory knowledge to manage large-scale campaigns efficiently.
                        <br>
                        We handle every aspect — from design and approvals to production, installation, and maintenance — so your campaign runs smoothly and delivers measurable impact.
                        <br><br>
                        <strong>What We Offer:</strong>

                    </p>
                    <ul>
                        <li>Complete creative design and visualization.</li>
                        <li>Compliance with RTA (Roads and Transport Authority) advertising standards.</li>
                        <li>Access to premium metro stations across Dubai.</li>
                        <li>Transparent pricing and campaign reports.</li>
                        <li>Quick setup and turnaround for seasonal promotions.</li>

                    </ul>
                    <br>
                    <h4>Benefits of Metro Station Takeover Advertising</h4>
                    <ul>
                        <li><strong>Maximum Reach</strong> – Connect with thousands of daily commuters in a high-traffic, premium environment.</li>
                        <li><strong>High Recall Value</strong> – Immersive brand visuals ensure longer viewer retention.</li>
                        <li><strong>Exclusivity</strong> – Your brand owns the entire space, eliminating visual competition.</li>
                        <li><strong>Custom Design Flexibility</strong> – Adapt your takeover to fit your creative campaign style.</li>
                        <li><strong>Versatility</strong> – Ideal for brands in sectors like real estate, finance, fashion, government, and tech.</li>
                    </ul>
                </div>
                <div class="col-lg-1"></div>

                <div class="col-lg-3 mob-not-visible">
                    <img src="{{URL::to('/public/section-images/image47.png')}}" width="100%" alt="Why choose us">
                </div> 
            </div>

          </div>

        </section>

        <section id="service-cards" class="blog-section  section why-us-section why-out-us-section">

          <div class="container">

            <div class="row gy-4 first-row">


                <div class="col-lg-3 mob-not-visible">
                    <img src="{{URL::to('/public/section-images/image47.png')}}" width="100%" alt="Why choose us">
                </div> 
                <div class="col-lg-1"></div>
                <div class="col-lg-8 vertical-center">
                    <h4>How We Execute a Successful Takeover Campaign</h4>
                    <p>
                        At DataMySite, we believe successful metro advertising comes down to smart strategy and flawless execution.
                        <br>
                        <strong>Our process includes:</strong>
                    </p>
                    <ul>
                        <li><strong>Strategic Planning</strong>: We identify the best station based on your audience, goals, and budget.</li>
                        <li><strong>Creative Concept</strong>: Our design team develops unique, eye-catching visuals for every space.</li>
                        <li><strong>Approvals & Permits</strong>: We manage RTA approvals and ensure compliance with Dubai’s outdoor advertising regulations.</li>
                        <li><strong>Production & Installation</strong>: We use premium materials to ensure long-lasting, high-quality visuals.</li>
                        <li><strong>Monitoring & Reporting</strong>: Our team tracks campaign performance and provides detailed reports.</li>
                    </ul>
                    <br>
                    <h4>Best Locations for Metro Station Takeovers in Dubai</h4>
                    <p>
                        Some of the most effective and high-traffic metro stations for full takeovers include:
                        <br>
                        <span class="badge badge-default badge-location"><i class="bi bi-geo-alt"></i> Dubai Mall / Burj Khalifa</span>
                        <span class="badge badge-default badge-location"><i class="bi bi-geo-alt"></i> Union Station</span>
                        <span class="badge badge-default badge-location"><i class="bi bi-geo-alt"></i> Mall of the Emirates</span>
                        <span class="badge badge-default badge-location"><i class="bi bi-geo-alt"></i> Business Bay</span>
                        <span class="badge badge-default badge-location"><i class="bi bi-geo-alt"></i> BurJuman</span>
                        <span class="badge badge-default badge-location"><i class="bi bi-geo-alt"></i> Jumeirah Lakes Towers (JLT)</span>
                        <span class="badge badge-default badge-location"><i class="bi bi-geo-alt"></i> Internet City</span>
                        <br>
                        Each of these stations attracts thousands of daily passengers, making them perfect for impactful brand exposure.
                    </p>
                </div>
            </div>

          </div>

        </section>


        <section id="service-cards" class="blog-section section striped-section why-us-section why-out-us-section">

          <div class="container">

            <div class="row gy-4 first-row">


                <div class="col-lg-3 mob-not-visible">
                    <img src="{{URL::to('/public/section-images/image47.png')}}" width="100%" alt="Why choose us">
                </div> 
                <div class="col-lg-1"></div>
                <div class="col-lg-8 vertical-center">
                    <h4>Industries That Benefit from Metro Station Advertising</h4>
                    <p>
                        Metro station takeovers are effective for both B2C and B2B brands looking to maximize reach and awareness.
                        <br>
                        <strong>Ideal sectors include:</strong>
                    </p>
                    <ul>
                        <li>Real estate and property developers</li>
                        <li>Government and public awareness campaigns</li>
                        <li>Telecom and technology companies</li>
                        <li>Retail and fashion brands</li>
                        <li>Automotive and financial institutions</li>
                        <li>Tourism and hospitality</li>
                    </ul>
                    <br>
                    <h4>Elevate Your Brand with Metro Station Takeover Advertising in Dubai</h4>
                    <p>
                        Whether you’re a global brand or a local business, DataMySite helps you own Dubai’s metro spaces with creative, high-impact, and results-driven advertising campaigns.
                        <br>
                        Let your brand be the first — and last — thing commuters see each day.
                        <br><br>
                        Contact us today to discuss your metro station takeover strategy and dominate Dubai’s most traveled locations.
                    </p>
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

                <div class="col-lg-3 vertical-center">
                    <img src="{{URL::to('/public/assets/img/faq-new.png')}}" width="100%" alt="FAQs">
                </div> 
                <div class="col-lg-1"></div>
                <div class="col-lg-8">
                    <h4>FAQs</h4>
                    <div class="faq " id="accordion">
                        <div class="card">
                            <div class="card-header" id="faqHeading-10">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-10" data-aria-expanded="true" data-aria-controls="faqCollapse-10">
                                        <span class="badge">&nbsp;</span>How long does a metro station takeover campaign run?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-10" class="collapse show" aria-labelledby="faqHeading-10" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Campaigns typically range from 4 weeks to 12 weeks, depending on your goals and budget. Long-term branding options are also available for sustained exposure.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-11">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-11" data-aria-expanded="false" data-aria-controls="faqCollapse-11">
                                        <span class="badge">&nbsp;</span>What are the costs involved in metro station takeover advertising?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-11" class="collapse" aria-labelledby="faqHeading-11" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Costs vary based on station size, location, and creative coverage. High-footfall stations like Dubai Mall are premium. DataMySite provides custom quotes upon consultation.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-12">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-12" data-aria-expanded="false" data-aria-controls="faqCollapse-12">
                                        <span class="badge">&nbsp;</span>Can I include digital screens as part of my station takeover?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-12" class="collapse" aria-labelledby="faqHeading-12" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Yes! We integrate DOOH (Digital Out-of-Home) screens into your campaign for interactive and motion-based brand exposure.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-13">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-13" data-aria-expanded="false" data-aria-controls="faqCollapse-13">
                                        <span class="badge">&nbsp;</span>Do I need approval from RTA for metro advertising?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-13" class="collapse" aria-labelledby="faqHeading-13" data-parent="#accordion">
                                <div class="card-body">
                                    <p>
                                        Yes. All metro advertisements in Dubai must be approved by RTA, and DataMySite handles this entire process for you..
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-14">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-14" data-aria-expanded="false" data-aria-controls="faqCollapse-14">
                                        <span class="badge">&nbsp;</span>Can small businesses afford a station takeover?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-14" class="collapse" aria-labelledby="faqHeading-14" data-parent="#accordion">
                                <div class="card-body">
                                    <p>While full takeovers are premium campaigns, DataMySite offers partial branding and shared-space solutions for smaller budgets.</p>
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