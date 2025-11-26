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
                        <h2>Fastest-Growing Consumer Markets</h2>
                        <h4>offering limitless opportunities for brands looking to scale beyond borders.</h4>
                        <br>
                        <p>
                            At DataMySite, we help UAE and international brands gain visibility and trust across India through a strategic mix of Taxi Advertising, Metro Branding, PVR Cinema Advertising, and Mall Marketing — ensuring your message reaches millions of urban consumers every day.
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
                                
                                <input type="hidden" name="service" value="{{$subservice->name}}" required>
                                                                
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
                    <h4>Why India Is the Perfect Market for UAE Brands</h4>
                    <br>
                    <p>
                        India’s economy and digital landscape make it an unmatched expansion opportunity for Dubai-based businesses:
                    </p>
                    <ul>
                        <li>1.4 billion consumers with diverse income groups and aspirations.</li>
                        <li>40+ million daily commuters in metros and taxis across major cities.</li>
                        <li>High cinema culture with massive captive audiences.</li>
                        <li>Explosive retail growth across malls and high-street zones.</li>
                        <li>Strong cultural and business links between India and the UAE, easing collaboration.</li>
                    </ul>
                    <p>
                        Whether you’re in real estate, hospitality, luxury, tech, or retail, India offers your brand a massive and receptive audience when marketed strategically.
                    </p>
                </div>
                <div class="col-lg-6 vertical-center">
                    <iframe class="service-iframe airline-iframe" src="https://www.youtube.com/embed/re2nXszkJcI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
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


        <section id="service-cards" class="blog-section striped-section section pr-impact-section">

          <div class="container">

            <div class="row gy-4 first-row outdoor-service-col-section">

                <div class="col-lg-12">
                    <h4>Our India Marketing Channels</h4>
                    <p>DataMySite provides access to India’s top-performing advertising formats that deliver both high visibility and measurable ROI.</p>
                    
                </div> 
                <div class="col-lg-6">
                    <h5 class="text-theme">Taxi Advertising in India</h5>
                    <p>
                        Taxis are the most mobile advertising medium in India’s urban landscapes. With tens of thousands of taxis operating across cities like Mumbai, Delhi, Bangalore, and Hyderabad, they provide unmatched exposure on roads, business hubs, and residential routes.
                        <br>
                        <strong>Taxi Advertising Options:</strong>
                    </p>
                    <ul>
                        <li><strong>Full Wraps & Door Panels</strong>: Custom branding with high visual impact.</li>
                        <li><strong>Back Panels & Roof Tops</strong>: Affordable exposure for local reach.</li>
                        <li><strong>Digital Screens Inside Taxis</strong>: Run video or static creatives.</li>
                    </ul>
                    <p>
                        <strong>Advantages:</strong><br>
                        24/7 mobility across prime city zones.<br>
                        Continuous brand recall among commuters and pedestrians.<br>
                        Excellent for real estate, fintech, travel, telecom, and retail campaigns.<br>
                        <strong>Example Campaigns:</strong>

                    </p>
                    <ul>
                        <li>A Dubai real estate brand promoting property investments to Indian NRIs.</li>
                        <li>A UAE travel company advertising flight offers and tourism packages.</li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <h5 class="text-theme">Metro Advertising in India</h5>
                    <p>
                        With over 12 major metro networks in India, metro advertising delivers mass daily exposure to an educated and urban audience.
                        <br>
                        <strong>Metro Advertising Formats:</strong>
                    </p>
                    <ul>
                        <li>Inside Train Panels & Digital Screens</li>
                        <li>Station Domination Branding (entry gates, escalators, pillars)</li>
                        <li>Platform Billboards & Audio Announcements</li>
                        <li>Train Wraps for full-motion branding impact</li>
                    </ul>
                    <p>
                        <strong>Why Metro Works:</strong><br>
                        Millions of daily commuters ensure mass visibility.<br>
                        Ideal for awareness, product launches, and lead generation.<br>
                        Long dwell time — your message is seen repeatedly during every ride.<br>
                        <strong>Example Campaigns:</strong>

                    </p>
                    <ul>
                        <li>A UAE education brand promoting courses for Indian students.</li>
                        <li>A Dubai e-commerce platform launching localized mobile app promotions.</li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <h5 class="text-theme">PVR Cinema Advertising</h5>
                    <p>
                        India has one of the largest cinema-going populations in the world, and PVR Cinemas are the country’s most premium and high-traffic theaters.
                        <br>
                         Advertising in cinemas lets your brand engage audiences in a captive, distraction-free environment before blockbuster films.
                         <br>
                        <strong>PVR Cinema Advertising Options:</strong>
                    </p>
                    <ul>
                        <li>On-Screen Commercials (10–60 seconds) before and during intermissions.</li>
                        <li>Lobby Branding & Digital Screens for product displays.</li>
                        <li>Seatback & Ticket Branding for lasting brand recall.</li>
                    </ul>
                    <p>
                        <strong>Why Cinema Advertising Works:</strong><br>
                        Emotional engagement — audiences are more receptive in a leisure environment.<br>
                        Perfect for lifestyle, entertainment, luxury, and F&B brands.<br>
                        Nationwide coverage across 800+ screens in major Indian cities.<br>
                        <strong>Example Campaigns:</strong>
                    </p>
                    <ul>
                        <li>A Dubai-based fashion retailer promoting new collections during Bollywood releases.</li>
                        <li>A tourism board running cinematic ads showcasing Dubai attractions.</li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <h5 class="text-theme">Mall Marketing in India</h5>
                    <p>
                        Malls are India’s most vibrant retail destinations, attracting high footfall and offering perfect spaces for brand activations, product sampling, and digital advertising.
                        <br>
                        <strong>Mall Advertising Opportunities:</strong>
                    </p>
                    <ul>
                        <li>Digital Screens & LED Walls in entrances, food courts, and walkways.</li>
                        <li>Pop-Up Booths & Product Demos for experiential interaction.</li>
                        <li>Event Sponsorships during weekends and festivals.</li>
                        <li>Escalator & Lift Branding for maximum visual reach.</li>
                    </ul>
                    <p>
                        <strong>Benefits of Mall Marketing:</strong><br>
                        Direct engagement with consumers in a shopping mindset.<br>
                        Ideal for FMCG, fashion, beauty, and tech brands.<br>
                        Highly customizable activations with measurable footfall and leads.<br>
                        <strong>Example Campaigns:</strong>

                    </p>
                    <ul>
                        <li>A UAE electronics brand showcasing new products through live demos.</li>
                        <li>A Dubai skincare company offering free samples in Indian malls.</li>
                    </ul>
                </div>
            </div>
            <div class="uni-strip-see-more">
                <button data-class="outdoor-service-col-section">See More</button>
            </div>

          </div>

        </section>


        <section id="service-cards" class="blog-section section why-us-section why-out-us-section">

          <div class="container">

            <div class="row gy-4 first-row split-block">


                <div class="col-lg-2 vertical-center">
                    <img src="{{URL::to('/public/section-images/image179.png')}}" width="100%" alt="Why choose us">
                </div> 
                <div class="col-lg-2"></div>
                <div class="col-lg-8 vertical-center">
                    <h4>Industries That Benefit Most</h4>
                    <ul>
                        <li>E-commerce & Technology</li>
                        <li>Luxury Retail & Fashion</li>
                        <li>Real Estate & Property</li>
                        <li>Education & Training</li>
                        <li>Tourism & Hospitality</li>
                        <li>Consumer Electronics & FMCG</li>

                    </ul>
                    <br>
                    <h4>Connect with India’s Fastest-Growing Consumer Market</h4>
                    <p>
                        At DataMySite, we make India accessible, visible, and profitable for your brand. Whether it’s a nationwide taxi campaign, a metro station takeover, or cinema and mall activations, we deliver marketing that moves with purpose.
                        <br><br>
                        Go beyond borders. Go India with DataMySite.
                    </p>
                </div>
            </div>

          </div>

        </section>


        <section id="service-cards" class="blog-section striped-section section why-us-section why-out-us-section">

          <div class="container">

            <div class="row gy-4 first-row">

                <div class="col-lg-8">
                    <h4>Why Choose DataMySite for India Marketing</h4>
                    <p>
                        We combine India’s local market intelligence with Dubai’s strategic marketing expertise to deliver flawless, ROI-focused campaigns.
                        <br><br>
                        <strong>Our Strengths:</strong>
                    </p>
                    <ul>
                        <li>Access to national advertising networks (Taxi, Metro, PVR, Malls).</li>
                        <li>End-to-end management — from creative localization to campaign execution.</li>
                        <li>Multilingual campaigns across Hindi, English, Tamil, Telugu, and regional dialects.</li>
                        <li>Performance tracking and on-ground reporting for every media channel.</li>
                        <li>Local partnerships for faster deployment and cost-effective buying.</li>
                    </ul>
                    <p>
                        <strong>Our Promise:</strong>
                    </p>
                    <ul>
                        <li>Consistency in brand voice across all touchpoints.</li>
                        <li>Culturally aligned creatives that connect emotionally with Indian audiences.</li>
                        <li>Comprehensive coverage from metros to mid-tier cities.</li>
                    </ul>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-3 vertical-center">
                    <img src="{{URL::to('/public/section-images/image163.png')}}" width="100%" alt="Why choose us">
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

        <section id="service-cards" class="blog-section section  striped-section faq-new-section">

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
                                        <span class="badge">&nbsp;</span>Which cities in India offer the best advertising reach?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-10" class="collapse show" aria-labelledby="faqHeading-10" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Major metros like Mumbai, Delhi NCR, Bangalore, Chennai, Hyderabad, and Pune offer high visibility and premium media inventory.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-11">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-11" data-aria-expanded="false" data-aria-controls="faqCollapse-11">
                                        <span class="badge">&nbsp;</span>Can campaigns target specific regions or languages?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-11" class="collapse" aria-labelledby="faqHeading-11" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Yes. We localize ads in regional languages and deploy media in specific states or cities based on your target demographics</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-12">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-12" data-aria-expanded="false" data-aria-controls="faqCollapse-12">
                                        <span class="badge">&nbsp;</span>How long does it take to launch a campaign in India?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-12" class="collapse" aria-labelledby="faqHeading-12" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Taxi, cinema, and mall campaigns can go live within 7–10 days, while metro and station branding require a 2–3 week setup.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-13">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-13" data-aria-expanded="false" data-aria-controls="faqCollapse-13">
                                        <span class="badge">&nbsp;</span>Are performance reports available?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-13" class="collapse" aria-labelledby="faqHeading-13" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Absolutely. We provide detailed reports with location proof, impressions, footfall metrics, and campaign visuals.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-14">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-14" data-aria-expanded="false" data-aria-controls="faqCollapse-14">
                                        <span class="badge">&nbsp;</span>Can DataMySite manage multi-format campaigns in India?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-14" class="collapse" aria-labelledby="faqHeading-14" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Yes. We specialize in integrated campaigns that combine taxis, metro, malls, and cinema to maximize exposure and results.</p>
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