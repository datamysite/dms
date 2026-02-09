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
                        <h2>Unlock the Power</h2>
                        <h4>of Premium OTT Campaign</h4>
                        <br>
                        <p>
                            At DataMySite, we specialize in crafting impactful OTT advertising strategies that bring your brand directly to where your customers spend their time — on Netflix. Whether you aim to build awareness, boost engagement, or drive conversions, advertising on Netflix allows your message to appear within trusted, binge-worthy content that viewers love.

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
                    <h4>The Rise of Netflix as a Marketing Channel</h4>
                    <p class="mb-2">
                        Netflix, with its 260+ million subscribers globally, including millions across the UAE, Saudi Arabia, and India, has redefined how people consume video content. The platform’s expansion into ad-supported tiers has transformed it into a prime digital advertising ecosystem, blending entertainment with targeted brand experiences.
                        <br><br>
                        Audiences today prefer content that’s immersive, on-demand, and ad-limited — and Netflix provides exactly that. Through its Ad-Supported Plan, Netflix allows advertisers to connect with viewers in an engaging, distraction-free environment. The result? Higher attention rates, better recall, and stronger emotional impact than traditional TV or social ads.
                        <br><br>
                        In short, Netflix advertising isn’t just about visibility — it’s about brand storytelling at scale.
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

        

        <section id="service-cards" class="blog-section section striped-section why-us-section why-out-us-section">

          <div class="container">

            <div class="row gy-4 first-row">
                <div class="col-lg-12 mb-0">
                    
                </div>
                <div class="col-lg-6 mt-0">
                    <h4>Why Advertise on Netflix?</h4>
                    <p>Advertise on Netflix to reach highly engaged, global audiences through premium, brand-safe content.</p>
                    <div class="faq " id="accordion">
                        <div class="card">
                            <div class="card-header" id="faqHeading-20">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-20" data-aria-expanded="true" data-aria-controls="faqCollapse-20">
                                        <span class="badge">&nbsp;</span>Premium Audience Engagement
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-20" class="collapse" aria-labelledby="faqHeading-20" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Netflix users are deeply invested in the platform. They binge-watch shows, re-watch movies, and explore documentaries based on personal interests — creating a high-intent audience that’s attentive and emotionally engaged. Advertising in this environment means your brand reaches users when they’re most receptive.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-21">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-21" data-aria-expanded="false" data-aria-controls="faqCollapse-21">
                                        <span class="badge">&nbsp;</span>Global Reach with Local Relevance
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-21" class="collapse" aria-labelledby="faqHeading-21" data-parent="#accordion">
                                <div class="card-body">
                                    <p>With audiences spanning 190+ countries, Netflix enables both global campaigns and hyper-local targeting. Whether you’re a Dubai-based brand seeking GCC visibility or an international business expanding into the UAE market, Netflix advertising delivers regionally optimized exposure.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-22">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-22" data-aria-expanded="false" data-aria-controls="faqCollapse-22">
                                        <span class="badge">&nbsp;</span>Data-Driven Audience Targeting
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-22" class="collapse" aria-labelledby="faqHeading-22" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Netflix combines viewing behavior, device data, and demographics to help advertisers reach specific audience segments. You can target based on:</p>
                                    <ul>
                                        <li>Age, gender, and location</li>
                                        <li>Viewing interests (genres, series, etc.)</li>
                                        <li>Household data and device usage</li>

                                    </ul>
                                    <p>This precision targeting ensures your ad spend drives measurable engagement, not wasted impressions.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-24">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-24" data-aria-expanded="false" data-aria-controls="faqCollapse-24">
                                        <span class="badge">&nbsp;</span>Brand-Safe and Non-Cluttered Environment
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-24" class="collapse" aria-labelledby="faqHeading-24" data-parent="#accordion">
                                <div class="card-body">
                                    <p>
                                        Unlike social media platforms flooded with competing ads, Netflix maintains a brand-safe, premium environment. Limited ad frequency ensures your brand gets undivided viewer attention, improving ad recall and sentiment.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-25">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-25" data-aria-expanded="false" data-aria-controls="faqCollapse-25">
                                        <span class="badge">&nbsp;</span>Measurable Impact and ROI
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-25" class="collapse" aria-labelledby="faqHeading-25" data-parent="#accordion">
                                <div class="card-body">
                                    <p>
                                        Netflix offers detailed reporting and analytics — including completion rates, impressions, and engagement metrics. This transparency allows advertisers to track performance in real-time, optimize creatives, and maximize ROI.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 mt-0">
                    <h4>Types of Netflix Advertising Formats</h4>
                    <p>Netflix offers multiple ad formats designed for maximum viewer engagement and brand impact:</p>
                    <div class="faq " id="accordion">
                        <div class="card">
                            <div class="card-header" id="faqHeading-30">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-30" data-aria-expanded="true" data-aria-controls="faqCollapse-30">
                                        <span class="badge">&nbsp;</span>Pre-Roll Ads
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-30" class="collapse" aria-labelledby="faqHeading-30" data-parent="#accordion">
                                <div class="card-body">
                                    <p>These short video ads play before a show or movie begins. They’re ideal for brand introductions or product awareness campaigns. With unskippable formats, pre-roll ads ensure complete message delivery.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-31">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-31" data-aria-expanded="false" data-aria-controls="faqCollapse-31">
                                        <span class="badge">&nbsp;</span>Mid-Roll Ads
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-31" class="collapse" aria-labelledby="faqHeading-31" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Mid-roll ads appear during natural breaks in content, similar to TV commercials but shorter and more contextual. These ads achieve higher retention rates as they blend seamlessly within the viewing experience.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-32">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-32" data-aria-expanded="false" data-aria-controls="faqCollapse-32">
                                        <span class="badge">&nbsp;</span>Display Overlay Ads
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-32" class="collapse" aria-labelledby="faqHeading-32" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Display overlays or companion banners appear subtly during playback or within the Netflix interface. These non-intrusive placements enhance brand visibility without interrupting the viewer’s journey.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-34">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-34" data-aria-expanded="false" data-aria-controls="faqCollapse-34">
                                        <span class="badge">&nbsp;</span>Branded Content & Product Integrations
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-34" class="collapse" aria-labelledby="faqHeading-34" data-parent="#accordion">
                                <div class="card-body">
                                    <p>
                                        For a more storytelling-driven approach, brands can collaborate with Netflix content teams to integrate products organically into scenes or sponsor original productions. This creates emotional connections that last longer than traditional ad impressions.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-33">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-33" data-aria-expanded="false" data-aria-controls="faqCollapse-33">
                                        <span class="badge">&nbsp;</span>Programmatic OTT Campaigns
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-33" class="collapse" aria-labelledby="faqHeading-33" data-parent="#accordion">
                                <div class="card-body">
                                    <p>
                                        Through programmatic advertising, Netflix allows brands to automate media buying, ensuring optimized delivery, real-time adjustments, and data-backed decisions for better performance.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

          </div>

        </section>



    
        <section id="service-cards" class="blog-section  section why-us-section why-out-us-section">

          <div class="container">

            <div class="row gy-4 first-row split-block">


                <div class="col-lg-3 vertical-center">
                    <img src="{{URL::to('/public/section-images/image107.png')}}" width="100%" alt="Why choose us">
                </div> 
                <div class="col-lg-1"></div>
                <div class="col-lg-8 vertical-center">
                    <h4>Netflix Advertising in the UAE Market</h4>
                    <p>Netflix’s influence in the UAE and GCC region has grown exponentially in recent years. With a tech-savvy, content-hungry audience that spends hours daily streaming on OTT platforms, brands in the UAE have an incredible opportunity to connect with audiences who are:</p>
                    <ul>
                        <li>Young (18–45 years)</li>
                        <li>Digitally active across multiple devices</li>
                        <li>Interested in global and local entertainment</li>
                        <li>Responsive to premium ad experiences</li>
                    </ul>
                    <p>At DataMySite, we understand the regional nuances of OTT marketing in Dubai, Abu Dhabi, and the wider MENA market. We help your brand design culturally relevant Netflix campaigns that align with your audience’s preferences and local trends.</p>
                    <br>
                    <h4>Advantages of Partnering with DataMySite for Netflix Advertising</h4>
                    <ul>
                        <li><strong>Expert OTT Strategists</strong> – Our team specializes in crafting performance-driven OTT campaigns tailored for the UAE and GCC markets.</li>
                        <li><strong>End-to-End Campaign Management</strong> – From concept creation to launch and optimization, we handle it all.</li>
                        <li><strong>Creative Excellence</strong> – We design high-quality video ads that fit Netflix’s cinematic standards.</li>
                        <li><strong>Real Results, Not Vanity Metrics</strong> – Our focus is on measurable outcomes like brand recall, engagement, and lead quality.</li>
                        <li><strong>Cross-Platform Synergy</strong> – We integrate your Netflix campaign with YouTube, StarzPlay, and digital ads for unified brand storytelling.</li>
                    </ul>
                </div>
            </div>

          </div>

        </section>


        <section id="service-cards" class="blog-section section  striped-section why-us-section why-out-us-section">

          <div class="container">

            <div class="row gy-4 first-row">


                <div class="col-lg-8 vertical-center">
                    <h4>How Netflix Advertising Works</h4>
                    <p>
                        Netflix advertising follows a structured, data-driven approach to ensure that your campaign is strategic, measurable, and impactful. Here’s how we manage it at DataMySite:
                    </p>
                    <ul>
                        <li>
                            <strong>Campaign Planning & Strategy</strong><br>
                            We start by defining your objectives — brand awareness, lead generation, or conversions — and identifying your target audience based on demographics and viewing behavior.
                        </li>
                        <li>
                            <strong>Creative Development</strong><br>
                            Our team helps you craft compelling video creatives that align with Netflix’s high production standards and resonate emotionally with your audience.
                        </li>
                        <li>
                            <strong>Ad Placement & Targeting</strong><br>
                            We leverage Netflix’s audience insights and AI-based data tools to ensure your ads are shown to the most relevant viewers, across multiple devices — from smart TVs to mobile apps.
                        </li>
                        <li>
                            <strong>Performance Tracking & Optimization</strong><br>
                            Using Netflix’s analytics dashboard, we track ad performance in real-time, adjusting targeting, creatives, and budgets to maximize efficiency and ROI.
                        </li>
                    </ul>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-3 vertical-center">
                    <img src="{{URL::to('/public/section-images/image108.png')}}" width="100%" alt="Why choose us">
                </div> 
            </div>

          </div>

        </section>


        <section id="service-cards" class="blog-sectionsection why-us-section why-out-us-section">

          <div class="container">

            <div class="row gy-4 first-row split-block">

                <div class="col-lg-3 vertical-center">
                    <img src="{{URL::to('/public/section-images/image109.png')}}" width="100%" alt="Why choose us">
                </div>

                <div class="col-lg-1"></div>
                <div class="col-lg-8 vertical-center">
                    <h4>Is Netflix Advertising Right for Your Brand?</h4>
                    <p>If your audience values storytelling, entertainment, and premium experiences — Netflix advertising is the perfect fit. It’s ideal for:</p>
                    <ul>
                        <li>Luxury and lifestyle brands</li>
                        <li>Automotive companies</li>
                        <li>Tourism and travel agencies</li>
                        <li>Tech and e-commerce platforms</li>
                        <li>Education and entertainment brands</li>
                        <li>Financial services and real estate firms</li>
                    </ul>
                    <p>By placing your brand within Netflix’s cinematic world, you build trust, emotional connection, and long-term recall — the three pillars of successful digital marketing.</p>
                    <br>
                    <h4>Start Your Netflix Advertising Campaign Today</h4>
                    <p>
                        In the age of streaming, consumers are no longer just watching — they’re connecting emotionally with the stories they love. Advertising on Netflix allows your brand to become part of that emotional journey.
                        <br><br>
                        At DataMySite, we help you harness the power of OTT advertising with tailored Netflix campaigns that engage, inspire, and convert. Whether you want to reach audiences in Dubai, Sharjah, Abu Dhabi, or across the globe — our expert team ensures your brand gets noticed by the right people at the right time.
                        <br>
                        Take your marketing strategy beyond screens — and into the hearts of millions of Netflix viewers.
                        <br><br>
                        Contact DataMySite today to discuss your Netflix Advertising campaign and see how we can turn your brand story into a screen-worthy experience.
                    </p>
                    <ul>
                        
                    </ul>
                </div> 
            </div>

          </div>

        </section>


        <section id="service-cards" class="blog-section section striped-section pr-blogs-section">

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

        <section id="service-cards" class="blog-section section   faq-new-section">

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
                                        <span class="badge">&nbsp;</span>How do I get my brand on Netflix?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-10" class="collapse show" aria-labelledby="faqHeading-10" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Netflix now offers an "Ad-Supported" tier. We help you place your commercials within their most popular series and movies, targeting users subscribed to that specific tier.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-11">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-11" data-aria-expanded="false" data-aria-controls="faqCollapse-11">
                                        <span class="badge">&nbsp;</span>Can I choose which specific Netflix shows my ad appears in?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-11" class="collapse" aria-labelledby="faqHeading-11" data-parent="#accordion">
                                <div class="card-body">
                                    <p>While you can't pick a single show, you can target by "Top 10" lists, specific genres, or time-of-day to align with peak viewing hours.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-12">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-12" data-aria-expanded="false" data-aria-controls="faqCollapse-12">
                                        <span class="badge">&nbsp;</span>What is the audience demographic on Netflix?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-12" class="collapse" aria-labelledby="faqHeading-12" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Netflix attracts a premium, tech-savvy audience. It’s an ideal platform for lifestyle, luxury, and consumer tech brands looking for high-prestige placement.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-13">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-13" data-aria-expanded="false" data-aria-controls="faqCollapse-13">
                                        <span class="badge">&nbsp;</span>Is there a frequency cap so users don't see my ad too often?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-13" class="collapse" aria-labelledby="faqHeading-13" data-parent="#accordion">
                                <div class="card-body">
                                    <p>
                                        Yes, Netflix manages "Ad Fatigue" by limiting how many times a single user sees your ad in a 24-hour period.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-14">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-14" data-aria-expanded="false" data-aria-controls="faqCollapse-14">
                                        <span class="badge">&nbsp;</span>What reporting do I get from a Netflix campaign?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-14" class="collapse" aria-labelledby="faqHeading-14" data-parent="#accordion">
                                <div class="card-body">
                                    <p>You receive data on total impressions, reach, and "completion rates" (how many people watched the full ad), verified by third-party tracking partners.</p>
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