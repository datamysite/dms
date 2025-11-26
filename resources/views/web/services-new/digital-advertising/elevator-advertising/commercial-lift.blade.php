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
                        <h2>Influence Professionals</h2>
                        <h4>and Decision-Makers in Business Environments</h4>
                        <br>
                        <p>
                            At DataMySite, we help brands connect with business professionals, office employees, visitors, and executives through high-impact elevator and lobby advertising in commercial buildings, business centers, and mixed-use towers.
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
                    <h4>What Is Commercial Lift Advertising?</h4>
                    <br>
                    <p class="mb-2">
                        Commercial Lift Advertising involves placing branded visuals or digital ads inside elevators, lift lobbies, or entrance areas within corporate buildings, business towers, malls, and office complexes.
                        <br><br>
                        These ads are typically displayed on digital screens, static frames, or wall-mounted posters that catch the attention of professionals during daily commutes between floors.
                        <br><br>
                        In cities like Dubai, Abu Dhabi, and Sharjah, where high-rise office buildings dominate the skyline, commercial elevator ads provide brands with a premium communication channel to engage working professionals multiple times a day.
                    </p>
                </div>
                <div class="col-lg-6 vertical-center">
                    <iframe class="service-iframe airline-iframe" src="https://www.youtube.com/embed/bfcE9AMwrrM?si=c-GXCMSK669sV8qn" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
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

        

    
        <section id="service-cards" class="blog-section striped-section  section why-us-section why-out-us-section">

          <div class="container">

            <div class="row gy-4 first-row split-block">


                <div class="col-lg-2 vertical-center">
                    <img src="{{URL::to('/public/section-images/image179.png')}}" width="100%" alt="Why choose us">
                </div> 
                <div class="col-lg-2"></div>
                <div class="col-lg-8 vertical-center">
                    <h4>Why Commercial Lift Advertising Works in the UAE</h4>
                    <br>
                    <ul>
                        <li>
                            <strong>Captures High-Value Audiences</strong><br>
                            Commercial lifts are used by CEOs, business owners, corporate employees, and clients every single day. Advertising in this setting connects your brand with individuals who have purchasing power and decision-making influence.
                        </li>
                        <li>
                            <strong>Repeated Daily Exposure</strong><br>
                            Professionals use the same lifts multiple times a day — entering, exiting, and moving between meeting floors. This repetition builds familiarity and recall without additional media costs.
                        </li>
                        <li>
                            <strong>Focused Attention</strong><br>
                            During a short elevator ride, there are few distractions — making it one of the rare moments in a busy professional’s day when your brand gets undivided attention.
                        </li>
                        <li>
                            <strong>Ideal for B2B and B2C Marketing</strong><br>
                            From financial institutions and software companies to luxury brands and lifestyle services, commercial lift advertising suits both business-to-business (B2B) and consumer-focused (B2C) marketing objectives.
                        </li>
                        <li>
                            <strong>Cost-Effective Premium Visibility</strong><br>
                            Compared to large-format outdoor campaigns, commercial lift advertising delivers high-quality reach in premium locations at affordable rates, with excellent ROI.
                        </li>
                    </ul>
                </div>
            </div>

          </div>

        </section>


        <section id="service-cards" class="blog-section section why-us-section why-out-us-section">

          <div class="container">

            <div class="row gy-4 first-row">


                <div class="col-lg-8 vertical-center">
                    <h4>Top Locations for Commercial Lift Advertising in Dubai and UAE</h4>
                    <p>
                        We manage commercial lift campaigns across major business and corporate hubs, including:
                    </p>
                    <ul>
                        <li><strong>Business Bay & Downtown Dubai</strong><br> – Home to high-rise corporate offices and business centers.</li>


                        <li><strong>Dubai International Financial Centre (DIFC)</strong><br> – Premium environment for finance, investment, and luxury brands.</li>


                        <li><strong>Dubai Media City & Internet City</strong><br> – Ideal for tech, media, and digital industry campaigns.</li>


                        <li><strong>Jumeirah Lake Towers (JLT)</strong><br> – High-density commercial and mixed-use buildings.</li>


                        <li><strong>Dubai Silicon Oasis & Al Qouz Industrial Area</strong><br> – Target SMEs, tech startups, and factory-based companies.</li>


                        <li><strong>Abu Dhabi Global Market (ADGM) & Al Maryah Island</strong><br> – Corporate and government office hubs.</li>


                        <li><strong>Sharjah and Ajman Free Zones</strong><br> – Perfect for industrial, logistics, and service-based brand exposure.</li>
                    </ul>
                    <p>Each campaign is tailored to your target audience, budget, and campaign objectives, ensuring maximum efficiency and measurable results.</p>
                </div>
                <div class="col-lg-2"></div>
                <div class="col-lg-2 vertical-center">
                    <img src="{{URL::to('/public/section-images/image180.png')}}" width="100%" alt="Why choose us">
                </div> 
            </div>

          </div>

        </section>


        <section id="service-cards" class="blog-section striped-section section why-us-section why-out-us-section">

          <div class="container">

            <div class="row gy-4 first-row split-block">

                <div class="col-lg-5 vertical-center">
                    <h4>Best Industries for Commercial Lift Advertising</h4>
                    <p>This advertising medium works exceptionally well for industries aiming to reach business professionals, entrepreneurs, and employees within their workspaces.</p>
                    <div class="faq " id="accordion">
                        <div class="card">
                            <div class="card-header" id="faqHeading-20">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-20" data-aria-expanded="true" data-aria-controls="faqCollapse-20">
                                        <span class="badge">&nbsp;</span>Financial & Banking Services
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-20" class="collapse" aria-labelledby="faqHeading-20" data-parent="#accordion">
                                <div class="card-body">
                                    <p>– Promote credit cards, loans, or investment products.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-21">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-21" data-aria-expanded="false" data-aria-controls="faqCollapse-21">
                                        <span class="badge">&nbsp;</span>Technology & Software Brands
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-21" class="collapse" aria-labelledby="faqHeading-21" data-parent="#accordion">
                                <div class="card-body">
                                    <p>– Introduce new apps, SaaS platforms, or enterprise tools.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-22">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-22" data-aria-expanded="false" data-aria-controls="faqCollapse-22">
                                        <span class="badge">&nbsp;</span>Corporate Services & Consulting Firms
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-22" class="collapse" aria-labelledby="faqHeading-22" data-parent="#accordion">
                                <div class="card-body">
                                    <p>– Build trust and recognition among potential clients.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-23">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-23" data-aria-expanded="false" data-aria-controls="faqCollapse-23">
                                        <span class="badge">&nbsp;</span>Automotive Brands
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-23" class="collapse" aria-labelledby="faqHeading-23" data-parent="#accordion">
                                <div class="card-body">
                                    <p>
                                        – Showcase premium cars to professionals and executives.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-24">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-24" data-aria-expanded="false" data-aria-controls="faqCollapse-24">
                                        <span class="badge">&nbsp;</span>Real Estate Developers
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-24" class="collapse" aria-labelledby="faqHeading-24" data-parent="#accordion">
                                <div class="card-body">
                                    <p> – Market commercial offices, co-working spaces, or business districts.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-25">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-25" data-aria-expanded="false" data-aria-controls="faqCollapse-25">
                                        <span class="badge">&nbsp;</span>F&B Brands
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-25" class="collapse" aria-labelledby="faqHeading-25" data-parent="#accordion">
                                <div class="card-body">
                                    <p>– Promote corporate lunch offers, delivery services, or cafés near office clusters.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-26">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-26" data-aria-expanded="false" data-aria-controls="faqCollapse-26">
                                        <span class="badge">&nbsp;</span>Luxury & Lifestyle Brands
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-26" class="collapse" aria-labelledby="faqHeading-26" data-parent="#accordion">
                                <div class="card-body">
                                    <p> – Target high-income professionals with exclusive offers or products.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-27">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-27" data-aria-expanded="false" data-aria-controls="faqCollapse-27">
                                        <span class="badge">&nbsp;</span>Healthcare & Insurance
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-27" class="collapse" aria-labelledby="faqHeading-27" data-parent="#accordion">
                                <div class="card-body">
                                    <p>– Reach employees with wellness or corporate health programs.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
                <div class="col-lg-2 vertical-center">
                    <img src="{{URL::to('/public/section-images/image181.png')}}" width="100%" alt="Why choose us">
                </div>
                <div class="col-lg-5 vertical-center">
                    <h4>Where Can You Advertise?</h4>
                    <p>At DataMySite, we offer access to prime commercial buildings and towers across Dubai and the UAE. Ideal advertising spaces include:</p>
                    <ul>
                        <li><strong>Office Elevators</strong>:<br> Branded posters or digital screens placed inside lifts where professionals travel multiple times daily.</li>


                        <li><strong>Lobby & Reception Areas</strong>:<br> Eye-catching digital displays or LED walls at building entrances and waiting areas.</li>


                        <li><strong>Meeting Floor Corridors</strong>:<br> Branding opportunities near high-traffic meeting rooms or business centers.</li>


                        <li><strong>Parking and Lift Entry Points</strong>:<br> Visibility from the moment employees or visitors enter the premises.</li>
                    </ul>
                    <br>
                    <h4>Advantages of Commercial Lift Advertising</h4>
                    <ul>
                        <li>High engagement and visibility in professional settings</li>


                        <li>Multiple daily impressions per viewer</li>


                        <li>Localized targeting by business district or building type</li>


                        <li>Prestigious environment enhances brand credibility</li>


                        <li>Cost-effective exposure with measurable results</li>


                        <li>Great for reinforcing digital and outdoor campaigns</li>


                        <li>Ideal for long-term brand building and awareness</li>


                    </ul>
                    <p>This medium not only provides visual frequency but also associates your brand with professional environments that reflect credibility and trust.</p>
                </div> 
            </div>

          </div>

        </section>

        <section id="service-cards" class="blog-section section why-us-section why-out-us-section">

          <div class="container">

            <div class="row gy-4 first-row">


                <div class="col-lg-8 vertical-center">
                    <h4>Why Choose DataMySite for Commercial Lift Advertising</h4>
                    <p>
                        At DataMySite, we specialize in connecting brands with the most relevant audiences through premium indoor advertising spaces across the UAE.
                        <br>
                        We handle everything from strategy to execution, ensuring that your message reaches the right people — the right way.
                        <br>
                        <strong>Our Services Include:</strong>
                    </p>
                    <ul>
                        <li>Strategic location selection (by tower, business park, or region)</li>


                        <li>Creative concept and ad design</li>


                        <li>Coordination with property management and facility owners</li>


                        <li>Installation, maintenance, and quality checks</li>


                        <li>Campaign monitoring and performance reporting</li>

                    </ul>
                    <p>
                        Our relationships with building management companies and corporate landlords allow us to secure high-visibility ad spaces in some of the UAE’s most prestigious office towers.
                    </p>
                    <br>
                    <h4>Why Brands Love Elevator Advertising with DataMySite</h4>
                    <p>
                        Access to thousands of commercial towers in Dubai and Abu Dhabi<br>
                        Flexible options — digital, static, or interactive formats<br>
                        Targeted campaigns by industry or location<br>
                        Creative content support for maximum impact<br>
                        Affordable, high-frequency exposure in premium locations<br>
                        Comprehensive campaign reports and visuals
                        <br><br>
                        Whether you’re targeting CEOs in DIFC or office workers in JLT, our team ensures your message appears where it matters most — in front of decision-makers and professionals who can act on it.
                    </p>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-3 vertical-center">
                    <img src="{{URL::to('/public/section-images/image182.png')}}" width="100%" alt="Why choose us">
                </div> 
            </div>

          </div>

        </section>


        <section id="service-cards" class="blog-section striped-section section why-us-section why-out-us-section">

          <div class="container">

            <div class="row gy-4 first-row split-block">

                <div class="col-lg-3 vertical-center">
                    <img src="{{URL::to('/public/section-images/image183.png')}}" width="100%" alt="Why choose us">
                </div>

                <div class="col-lg-1"></div>
                <div class="col-lg-8 vertical-center">
                    <h4>Case Example: How Commercial Lift Advertising Boosts Local Brand Awareness</h4>
                    <p>
                        A leading fintech startup in Dubai launched a 3-month campaign across 20 office towers in Business Bay.
                        <br><br>
                        The ads were displayed inside elevators and lobbies using digital screens. The result?
                    </p>
                    <ul>
                        <li>40% increase in website traffic from corporate IPs</li>


                        <li>25% higher brand recall among surveyed office tenants</li>


                        <li>Measurable rise in sign-ups during the campaign period</li>

                    </ul>
                    <p>This success demonstrates how even a few seconds of exposure in a confined space can drive measurable results when executed strategically.</p>
                    <br>
                    <h4>Turn Office Elevators into Brand Elevators</h4>
                    <p>
                        Every elevator ride in a commercial building is an opportunity — to inspire, inform, and influence professionals.
                        <br><br>
                        With DataMySite, your message travels where the UAE’s top business minds do — up, down, and forward.
                        <br><br>
                        Contact us today to launch your Commercial Lift Advertising campaign across Dubai, Abu Dhabi, and other major UAE business districts.
                        <br><br>
                        Let’s make your brand unmissable in the spaces where decisions are made.
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

        <section id="service-cards" class="blog-section section  striped-section  faq-new-section">

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
                                        <span class="badge">&nbsp;</span>What is Commercial Lift Advertising?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-10" class="collapse show" aria-labelledby="faqHeading-10" data-parent="#accordion">
                                <div class="card-body">
                                    <p>It’s the placement of branded visuals inside elevators and common areas of business buildings, giving your brand consistent visibility among professionals and visitors.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-11">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-11" data-aria-expanded="false" data-aria-controls="faqCollapse-11">
                                        <span class="badge">&nbsp;</span>Where can I place ads in commercial lifts?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-11" class="collapse" aria-labelledby="faqHeading-11" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Ads can be placed inside elevators, lift lobbies, and reception zones of office towers or malls — using static posters or digital screens.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-12">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-12" data-aria-expanded="false" data-aria-controls="faqCollapse-12">
                                        <span class="badge">&nbsp;</span>What types of brands should use commercial elevator advertising?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-12" class="collapse" aria-labelledby="faqHeading-12" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Ideal for corporate, financial, tech, real estate, healthcare, and lifestyle brands targeting professionals, executives, and high-value customers.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-13">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-13" data-aria-expanded="false" data-aria-controls="faqCollapse-13">
                                        <span class="badge">&nbsp;</span>How long does a typical campaign last?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-13" class="collapse" aria-labelledby="faqHeading-13" data-parent="#accordion">
                                <div class="card-body">
                                    <p>
                                        Campaigns usually run from 4 weeks to 3 months, depending on building permissions and campaign goals.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-14">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-14" data-aria-expanded="false" data-aria-controls="faqCollapse-14">
                                        <span class="badge">&nbsp;</span>Why choose DataMySite for elevator advertising?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-14" class="collapse" aria-labelledby="faqHeading-14" data-parent="#accordion">
                                <div class="card-body">
                                    <p>We provide end-to-end service — from creative design and building coordination to placement verification and reporting — ensuring premium delivery and measurable impact.</p>
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