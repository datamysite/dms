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
                        <h2>Reach Engaged Audiences</h2>
                        <h4>Across the Middle East with Premium OTT Campaigns</h4>
                        <br>
                        <p>
                            In the fast-evolving world of digital entertainment, StarzPlay has become one of the most influential OTT streaming platforms in the Middle East and North Africa (MENA) region. Known for its premium Arabic, Hollywood, Bollywood, and regional content, StarzPlay attracts millions of viewers across UAE, Saudi Arabia, Egypt, and other GCC countries — making it an ideal platform for brands seeking meaningful, localized connections.
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
                    <h4>What is StarzPlay Advertising?</h4>
                    <p class="mb-2">
                        StarzPlay Advertising enables brands to display video ads, display banners, and sponsored placements directly within the platform’s streaming experience. These ads are shown to users watching movies, TV shows, and live sports, offering brands a unique way to reach customers who are highly engaged and attentive.
                        <br><br>
                        Unlike traditional TV ads, OTT (Over-The-Top) advertising on StarzPlay uses advanced data targeting to deliver your message to specific audience groups — by location, language preference, content category, and viewing behavior.
                        <br><br>
                        In the UAE, where digital content consumption is at an all-time high, advertising on StarzPlay is a cost-effective way to boost awareness, engagement, and conversions.
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
                    <img src="{{URL::to('/public/section-images/image147.png')}}" width="100%" alt="Why choose us">
                </div> 
                <div class="col-lg-1"></div>
                <div class="col-lg-9 vertical-center">
                    <h4>Why StarzPlay Advertising Works in the UAE</h4>
                    <p>
                        With over 2 million subscribers in the region, StarzPlay has built strong loyalty among Middle Eastern audiences. It provides both Arabic and English content, appealing to locals and expats alike — making it a diverse advertising ecosystem for brands targeting multiple segments.
                        <br>
                        Here’s why brands in Dubai and across the UAE choose StarzPlay for OTT advertising:
                    </p>
                    <ul>
                        <li><strong>High Engagement</strong>: Viewers on StarzPlay spend long durations watching uninterrupted content, which increases ad recall and emotional connection.</li>
                        <li><strong>Localized Reach</strong>: Perfect for targeting Arabic-speaking users, expats, and niche audiences across the UAE, Saudi Arabia, and GCC markets.</li>
                        <li><strong>Data-Driven Targeting</strong>: Advertisers can reach specific audience segments by age, gender, interests, and content preferences.</li>
                        <li><strong>Premium, Brand-Safe Environment</strong>: Ads are displayed alongside high-quality licensed content, ensuring your brand is associated with trusted entertainment.</li>
                        <li><strong>Cost-Effective Exposure</strong>: Compared to global OTT platforms, StarzPlay offers competitive advertising rates while delivering regional visibility and impact.</li>
                    </ul>
                </div>
            </div>

          </div>

        </section>


        <section id="service-cards" class="blog-section section why-us-section why-out-us-section">

          <div class="container">

            <div class="row gy-4 first-row">


                <div class="col-lg-8 vertical-center">
                    <h4>Popular StarzPlay Ad Formats</h4>
                    <ul>
                        <li>
                            <strong>Pre-Roll Video Ads</strong><br>
                            These ads appear before the user’s selected content begins. Pre-roll ads offer the highest visibility and are perfect for launching new products, offers, or brand awareness campaigns.
                        </li>
                        <li>
                            <strong>Mid-Roll Ads</strong><br>
                            Displayed during natural breaks within longer video content, these ads enjoy strong attention as viewers are already engaged with the content.
                        </li>
                        <li>
                            <strong>Display Banners</strong><br>
                            Strategically placed banners on the StarzPlay interface increase brand visibility while users browse content. These banners are ideal for reinforcing brand identity and driving click-through actions.
                        </li>
                        <li>
                            <strong>Sponsored Content</strong><br>
                            Brands can collaborate with StarzPlay for sponsored segments, branded shows, or co-branded entertainment experiences that resonate deeply with local audiences.
                        </li>
                        <li>
                            <strong>Contextual Targeting</strong><br>
                            With StarzPlay’s advanced data technology, your ads can appear alongside specific genres — from Arabic drama and Hollywood blockbusters to live sports — ensuring contextual alignment and relevance.
                        </li>

                    </ul>
                    <br>
                    <h4>Key Benefits Summary</h4>
                    <ul>
                        <li>Reach highly engaged viewers in a brand-safe environment</li>
                        <li>Target audiences by region, language, and content genre</li>
                        <li>Enjoy flexible campaign budgets and real-time reporting</li>
                        <li>Build brand authority across UAE and wider MENA markets</li>
                        <li>Seamlessly integrate campaigns with other OTT and digital platforms</li>

                    </ul>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-3 vertical-center">
                    <img src="{{URL::to('/public/section-images/image148.png')}}" width="100%" alt="Why choose us">
                </div> 
            </div>

          </div>

        </section>


        <section id="service-cards" class="blog-section striped-section section why-us-section why-out-us-section">

          <div class="container">

            <div class="row gy-4 first-row split-block">

                <div class="col-lg-3 vertical-center">
                    <img src="{{URL::to('/public/section-images/image149.png')}}" width="100%" alt="Why choose us">
                </div>

                <div class="col-lg-1"></div>
                <div class="col-lg-8 vertical-center">
                    <h4>Advantages of Advertising on StarzPlay with DataMySite</h4>
                    <p>
                        Partnering with DataMySite, one of the UAE’s leading digital marketing agencies, ensures your campaign is planned, executed, and optimized for success.
                        <br>
                        Our team specializes in OTT advertising strategies that deliver measurable results. Here’s how we help:
                    </p>
                    <ul>
                        <li><strong>Customized Strategy</strong>: We create campaigns that match your goals, budget, and target audience.</li>
                        <li><strong>Precise Targeting</strong>: Reach specific demographics and regions with advanced analytics and audience segmentation.</li>
                        <li><strong>Creative Development</strong>: From video script to production, we design ads that resonate with StarzPlay viewers.</li>
                        <li><strong>Campaign Optimization</strong>: Monitor and refine performance in real time for better ROI.</li>
                        <li><strong>Cross-Platform Integration</strong>: Combine your StarzPlay campaign with Netflix, YouTube, and social media ads for consistent visibility.</li>
                    </ul>
                    <p>At DataMySite, we understand the UAE audience — their viewing habits, cultural preferences, and digital behavior. Our data-driven OTT campaigns ensure your brand gets noticed by the right people at the right time.</p>
                    <br>
                    <h4>Industries That Benefit from StarzPlay Advertising</h4>
                    <p>
                        StarzPlay’s wide audience base makes it suitable for almost every industry. Some key sectors leveraging OTT ads on StarzPlay in Dubai and the UAE include:
                    </p>
                    <ul>
                        <li><strong>Real Estate</strong>: Promote new developments and property launches to high-income families and investors.</li>
                        <li><strong>Automotive</strong>: Showcase vehicle launches or brand campaigns to urban audiences.</li>
                        <li><strong>E-commerce</strong>: Drive traffic to online stores with compelling video campaigns.</li>
                        <li><strong>Hospitality & Tourism</strong>: Target travelers and expats exploring UAE attractions or staycation offers.</li>
                        <li><strong>Education & Technology</strong>: Reach families and professionals interested in online learning or innovation.</li>
                        <li><strong>Finance & Banking</strong>: Build trust through professional, brand-safe video advertising.</li>
                    </ul>
                </div> 
            </div>

          </div>

        </section>

        <section id="service-cards" class="blog-section section why-us-section why-out-us-section">

          <div class="container">

            <div class="row gy-4 first-row">


                <div class="col-lg-8 vertical-center">
                    <h4>Why StarzPlay Advertising is the Future of Digital Branding in MENA</h4>
                    <p>
                        As audiences continue to shift from cable TV to streaming platforms, StarzPlay has positioned itself as the region’s most accessible OTT platform for advertisers. Its combination of Arabic and international content, affordable pricing, and growing subscriber base gives brands a scalable solution for long-term engagement.
                        <br>
                        For businesses in Dubai, Abu Dhabi, Sharjah, and across GCC, advertising on StarzPlay offers a perfect mix of local impact and digital innovation.
                    </p>
                    <br>
                    <h4>Partner with DataMySite for StarzPlay Advertising in Dubai</h4>
                    <p>
                        Whether you want to launch a short-term video campaign or build a long-term OTT advertising strategy, DataMySite provides end-to-end campaign management tailored to your business goals.
                        <br><br>
                        From creative storytelling to media buying and performance analysis, we ensure every impression counts. With our strategic insights and local expertise, your brand can gain massive exposure on StarzPlay, connecting you with premium audiences across the UAE and beyond.
                        <br><br>
                        Contact our OTT specialists today to start your StarzPlay Advertising campaign and take your digital presence to the next level.
                    </p>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-3 vertical-center">
                    <img src="{{URL::to('/public/section-images/image150.png')}}" width="100%" alt="Why choose us">
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
                                        <span class="badge">&nbsp;</span>What is StarzPlay Advertising?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-10" class="collapse show" aria-labelledby="faqHeading-10" data-parent="#accordion">
                                <div class="card-body">
                                    <p>StarzPlay Advertising allows brands to display video and banner ads within the platform’s streaming experience, targeting regional audiences across the UAE and MENA.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-11">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-11" data-aria-expanded="false" data-aria-controls="faqCollapse-11">
                                        <span class="badge">&nbsp;</span>How effective is advertising on StarzPlay in Dubai?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-11" class="collapse" aria-labelledby="faqHeading-11" data-parent="#accordion">
                                <div class="card-body">
                                    <p>It’s highly effective due to localized reach, premium content, and long watch times. Brands enjoy stronger visibility and engagement compared to traditional TV.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-12">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-12" data-aria-expanded="false" data-aria-controls="faqCollapse-12">
                                        <span class="badge">&nbsp;</span>What are the available ad formats?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-12" class="collapse" aria-labelledby="faqHeading-12" data-parent="#accordion">
                                <div class="card-body">
                                    <p>You can choose pre-roll, mid-roll, and display banner ads, as well as branded or sponsored content integrations.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-13">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-13" data-aria-expanded="false" data-aria-controls="faqCollapse-13">
                                        <span class="badge">&nbsp;</span>Can I target specific audiences on StarzPlay?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-13" class="collapse" aria-labelledby="faqHeading-13" data-parent="#accordion">
                                <div class="card-body">
                                    <p>
                                        Yes. You can target by country, age, gender, language, interests, and content type — ensuring your message reaches the most relevant audience.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-14">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-14" data-aria-expanded="false" data-aria-controls="faqCollapse-14">
                                        <span class="badge">&nbsp;</span>How can DataMySite help with my StarzPlay campaign?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-14" class="collapse" aria-labelledby="faqHeading-14" data-parent="#accordion">
                                <div class="card-body">
                                    <p>DataMySite manages the entire process — from ad design and targeting setup to campaign optimization and performance tracking — helping you get maximum ROI from OTT advertising.</p>
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