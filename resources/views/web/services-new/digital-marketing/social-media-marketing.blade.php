@extends('web.includes.master')
@section('metaAddition')
    
@endsection
@section('addStyle')
    <link href="{{URL::to('/public')}}/assets/css/service.css" rel="stylesheet">
@endsection
@section('content')

    <main class="main">

        <!-- Page Title -->
          <div class="page-title dark-background" data-aos="fade" style="background-image: url('{{URL::to('public/assets/img/service-new/'.$subservice->slug.'.png')}}');">
            <div class="container head-container-service">
                <div class="row">
                    <div class="col-lg-8 head-para-service">
                        <h1>&#10687; {{$subservice->name}}</h1>
                        <h2>The best social media agencies in Dubai</h2>
                        <h4>focus on data-driven campaigns, local audience behavior, and platform-specific strategies to deliver measurable results.</h4>
                        <br>
                        <p>
                            Social media marketing in Dubai helps businesses grow brand awareness, engage targeted audiences, and drive sales across platforms like Instagram, Facebook, TikTok, LinkedIn, and Snapchat. A professional social media marketing agency in Dubai provides strategy, content creation, paid advertising, influencer marketing, and performance tracking tailored to the UAE market.
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

                <div class="col-lg-7 vertical-center" data-aos="fade-up" data-aos-delay="100">
                    <h4>Grow Your Brand with a Top Social Media Agency in UAE</h4>
                    <p>
                        In today’s digital-first world, social media marketing in Dubai is no longer optional — it is essential. With millions of active users across platforms like Instagram, Facebook, TikTok, LinkedIn, Snapchat, and X, social media has become the most powerful channel for brands to connect, influence, and convert audiences in the UAE.
                        <br><br>
                        At DataMySite, we help businesses grow through data-driven, creative, and performance-focused social media strategies. As one of the best social media agencies in Dubai, we combine creativity, analytics, and local market expertise to deliver measurable results for brands across industries.
                        <br><br>
                        Whether you’re a startup, SME, or enterprise brand, our social media marketing agency in Dubai helps you build visibility, engagement, and revenue — not just followers.
                    </p>
                </div>
                <div class="col-lg-5 vertical-center">
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


          <section id="service-cards" class="blog-section section striped-section pr-icon-section">

          <div class="container">

            <div class="row gy-4 first-row">
                <div class="col-lg-4">
                    <h4>Why Social Media Marketing Is Critical in Dubai & UAE</h4>
                    <p>Dubai is one of the most digitally connected cities in the world. Consumers in the UAE spend multiple hours daily on social platforms, making social media the fastest way to reach, engage, and influence purchasing decisions.
                    <br>
                    Here’s why social media in UAE is a powerful growth engine:</p>

                    <ul>
                        <li>High smartphone and internet penetration</li>
                        <li>Multicultural, multilingual audience base</li>
                        <li>Strong influencer-driven purchasing behavior</li>
                        <li>Rapid adoption of new platforms like TikTok and Reels</li>
                        <li>Direct connection between brands and consumers</li>
                    </ul>

                    <p>Businesses that invest in professional social media management in Dubai consistently outperform competitors that rely only on traditional marketing.</p>
                </div>
                <div class="col-lg-4 vertical-center">
                    <img src="{{URL::to('/public/section-images/image11.png')}}" class="side-image" width="100%" alt="Impact of PR Coverage">
                </div>
                <div class="col-lg-4">
                    <h4>About DataMySite – A Top Social Media Agency in Dubai</h4>
                    <p>
                        DataMySite is a full-service social media marketing company Dubai businesses trust for strategy, execution, and performance. We are not just content creators — we are growth partners.
                        <br>
                        As one of the top social media agencies in Dubai, we focus on:
                    </p>

                    <ul>
                        <li>ROI-driven strategies</li>
                        <li>Platform-specific content</li>
                        <li>Audience-first storytelling</li>
                        <li>Paid and organic growth</li>
                        <li>Influencer-led campaigns</li>
                    </ul>
                    <p>Our team includes social media consultants, strategists, designers, ad specialists, and influencers, making us a complete social media agency in UAE.</p>
                </div>
            </div>

          </div>

        </section>


        <section id="service-cards" class="blog-section section why-us-section why-out-us-section">

          <div class="container">

            <div class="row gy-4 first-row split-block">

                <div class="col-lg-4 vertical-center">
                    <img src="{{URL::to('/public/section-images/image191.webp')}}" width="100%" alt="Why choose us">
                </div> 
                <div class="col-lg-8">
                    <h4>Our Social Media Agency Services</h4>

                    <div class="faq " id="accordion">
                        <div class="card">
                            <div class="card-header" id="faqHeading-710">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-710" data-aria-expanded="true" data-aria-controls="faqCollapse-710">
                                        <span class="badge">&nbsp;</span>Social Media Strategy & Consulting
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-710" class="collapse" aria-labelledby="faqHeading-710" data-parent="#accordion">
                                <div class="card-body">
                                    <p>
                                        Every successful campaign starts with a solid strategy. Our social media consultant Dubai team analyzes your business, audience, competitors, and goals to create a custom roadmap.
                                        <br>
                                        This includes:
                                    </p>
                                    <ul>
                                        <li>Platform selection strategy</li>
                                        <li>Content pillars and tone of voice</li>
                                        <li>Posting frequency and growth plan</li>
                                        <li>Competitor benchmarking</li>
                                        <li>KPI and performance mapping</li>
                                    </ul>
                                    <p>This strategic foundation sets us apart from ordinary social media companies in Dubai.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-711">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-711" data-aria-expanded="false" data-aria-controls="faqCollapse-711">
                                        <span class="badge">&nbsp;</span>Social Media Management Services
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-711" class="collapse" aria-labelledby="faqHeading-711" data-parent="#accordion">
                                <div class="card-body">
                                    <p>
                                        As a trusted social media management company, we handle your brand’s complete social presence — so you can focus on your business.
                                        <br>
                                        Our social media management services include:
                                    </p>
                                    <ul>
                                        <li>Content planning and calendar creation</li>
                                        <li>Post design (static, carousel, reels, stories)</li>
                                        <li>Caption writing with SEO-friendly hashtags</li>
                                        <li>Community management and replies</li>
                                        <li>Brand reputation monitoring</li>

                                    </ul>
                                    <p>We provide social media management in Dubai that is consistent, creative, and results-focused.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-712">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-712" data-aria-expanded="false" data-aria-controls="faqCollapse-712">
                                        <span class="badge">&nbsp;</span>Social Media Advertising Dubai (Paid Campaigns)
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-712" class="collapse" aria-labelledby="faqHeading-712" data-parent="#accordion">
                                <div class="card-body">
                                    <p>
                                        Organic reach alone is not enough. Our social media advertising Dubai services help brands scale faster through targeted paid campaigns.
                                        <br>
                                        We manage ads across:
                                    </p>
                                    <ul>
                                        <li>Facebook & Instagram Ads</li>
                                        <li>TikTok Ads</li>
                                        <li>LinkedIn Ads</li>
                                        <li>Snapchat Ads</li>
                                        <li>X (Twitter) Ads</li>
                                    </ul>
                                    <p>Our paid services include:</p>
                                    <ul>
                                        <li>Audience targeting and retargeting</li>
                                        <li>Funnel-based campaign setup</li>
                                        <li>Creative ad design and copywriting</li>
                                        <li>A/B testing and optimization</li>
                                        <li>Conversion and lead tracking</li>
                                    </ul>
                                    <p>As a performance-driven social media marketing agency Dubai, we focus on leads, sales, installs, and ROI — not vanity metrics.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-713">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-713" data-aria-expanded="false" data-aria-controls="faqCollapse-713">
                                        <span class="badge">&nbsp;</span>Influencer Marketing & Creator Campaigns
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-713" class="collapse" aria-labelledby="faqHeading-713" data-parent="#accordion">
                                <div class="card-body">
                                    <p>
                                        Influencer marketing is one of the strongest drivers of trust in the UAE. As a leading social media influencer agency Dubai, we connect brands with the right creators.
                                        <br>
                                        Our influencer services include:
                                    </p>
                                    <ul>
                                        <li>Influencer sourcing and vetting</li>
                                        <li>Micro and macro influencer campaigns</li>
                                        <li>Instagram, TikTok, YouTube collaborations</li>
                                        <li>Contract and content management</li>
                                        <li>Performance tracking</li>
                                    </ul>
                                    <p>We work with trusted social media influencers in Dubai across lifestyle, fashion, real estate, automotive, F&B, healthcare, and tech.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-714">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-714" data-aria-expanded="false" data-aria-controls="faqCollapse-714">
                                        <span class="badge">&nbsp;</span>Content Creation & Visual Storytelling
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-714" class="collapse" aria-labelledby="faqHeading-714" data-parent="#accordion">
                                <div class="card-body">
                                    <p>
                                        Great content is the heart of social media marketing in Dubai. Our in-house creative team produces platform-native content that stops scrolling and drives engagement.
                                        <br>
                                        Content formats include:
                                    </p>
                                    <ul>
                                        <li>Instagram Reels & TikTok videos</li>
                                        <li>Static and carousel posts</li>
                                        <li>Story creatives</li>
                                        <li>Branded motion graphics</li>
                                        <li>Short-form video ads</li>
                                    </ul>
                                    <p>Unlike basic social media management companies, we focus on storytelling that aligns with brand identity and user behavior.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-715">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-715" data-aria-expanded="false" data-aria-controls="faqCollapse-715">
                                        <span class="badge">&nbsp;</span>Social Media Promotion & Growth Campaigns
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-715" class="collapse" aria-labelledby="faqHeading-715" data-parent="#accordion">
                                <div class="card-body">
                                    <p>
                                        If your goal is faster visibility, we run social media promotion campaigns that boost reach, followers, and engagement organically and through paid support.
                                        <br>
                                        This includes:
                                    </p>
                                    <ul>
                                        <li>Profile optimization</li>
                                        <li>Engagement campaigns</li>
                                        <li>Hashtag and trend strategy</li>
                                        <li>Collaboration-based growth</li>
                                        <li>Geo-targeted promotions</li>
                                    </ul>
                                    <p>Perfect for new brands or businesses entering the UAE market.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>

          </div>

        </section>

        <section id="service-cards" class="blog-section section striped-section pr-icon-section">

          <div class="container">

            <div class="row gy-4 first-row">
                <div class="col-lg-8 vertical-center">
                    <h4>Why We’re One of the Best Social Media Agencies in Dubai</h4>
                    <p>
                        What makes DataMySite stand out among the best social media companies in Dubai?
                    </p>
                    <ul>
                        <li>Local UAE market expertise</li>
                        <li>Platform-specific strategies</li>
                        <li>In-house creative and ads team</li>
                        <li>Transparent reporting and insights</li>
                        <li>Influencer + paid + organic integration</li>
                        <li>Custom social media marketing packages UAE</li>
                    </ul>
                    <p>We don’t sell templates — we build strategies that grow brands.</p>
                    <br>
                    <h4>Industries We Serve</h4>
                    <p>Our experience as a social media marketing company Dubai spans multiple industries:</p>
                    <ul>
                        <li>Real Estate & Developers</li>
                        <li>Healthcare & Clinics</li>
                        <li>Hospitality & Tourism</li>
                        <li>Retail & E-commerce</li>
                        <li>Automotive Brands</li>
                        <li>Education & Training</li>
                        <li>Corporate & B2B</li>
                        <li>Government & Semi-Government</li>
                    </ul>
                    <p>Each industry requires a different approach — and our social media agency services are tailored accordingly.</p>
                </div>
                <div class="col-lg-4 vertical-center">
                    <img src="{{URL::to('/public/section-images/image12.png')}}" class="side-image" width="100%" alt="Impact of PR Coverage">
                </div>
            </div>

          </div>

        </section>

        <section id="service-cards" class="blog-section section pr-icon-section">

          <div class="container">

            <div class="row gy-4 first-row">
                <div class="col-lg-3 vertical-center">
                    <img src="{{URL::to('/public/section-images/image1.png')}}" class="side-image" width="100%" alt="Impact of PR Coverage">
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-8 vertical-center">
                    <h4>Why Businesses Choose Social Media Marketing in Dubai</h4>
                    <ul>
                        <li>Direct access to target audiences</li>
                        <li>High engagement compared to traditional ads</li>
                        <li>Faster brand visibility and recall</li>
                        <li>Measurable performance and ROI</li>
                        <li>Strong influence on buying decisions</li>
                    </ul>
                    <p>That’s why businesses across the UAE are shifting budgets to social media marketing UAE.</p>
                    <br>
                    <h4>Social Media Marketing Packages UAE</h4>
                    <p>
                        We offer flexible social media marketing packages designed for different business sizes and goals.
                        <br>
                        Our social media packages Dubai can include:
                    </p>
                    <ul>
                        <li>Monthly content creation</li>
                        <li>Account management</li>
                        <li>Paid ads management</li>
                        <li>Influencer collaborations</li>
                        <li>Performance reporting</li>
                    </ul>
                    <p>Whether you need basic social media services or a full-scale growth plan, our packages are scalable and cost-effective.</p>
                </div>
            </div>

          </div>

        </section>


        <section id="service-cards" class="blog-section striped-section section pr-icon-section">

          <div class="container">

            <div class="row gy-4 first-row">
                <div class="col-lg-12">
                    <h4>Our Process – How We Deliver Results</h4>
                </div>
                <div class="col-lg-3">
                    <h5>Discovery & Strategy</h5>
                    <p class="mb-0">Understand brand, audience, goals</p>
                </div>
                <div class="col-lg-3">
                    <h5>Planning & Content Creation</h5>
                    <p class="mb-0">Design platform-specific content</p>
                </div>
                <div class="col-lg-3">
                    <h5>Publishing & Promotion</h5>
                    <p class="mb-0">Organic + paid distribution</p>
                </div>
                <div class="col-lg-3">
                    <h5>Community & Engagement</h5>
                    <p class="mb-0">Build brand trust</p>
                </div>
                <div class="col-lg-3">
                    <h5>Analytics & Optimization</h5>
                    <p class="mb-0">Improve performance continuously</p>
                </div>
                <div class="col-lg-12">
                    <p>This structured approach is why clients consider us a top social media agency Dubai.</p>
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

                <div class="col-lg-12 vertical-center">
                    <h4 class="text-center">Frequently Asked Questions</h4>
                    <br>
                    <div class="faq " id="accordion">
                        <div class="card">
                            <div class="card-header" id="faqHeading-1">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-1" data-aria-expanded="true" data-aria-controls="faqCollapse-1">
                                        <span class="badge">&nbsp;</span>Which platforms should my business be on?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-1" class="collapse show" aria-labelledby="faqHeading-1" data-parent="#accordion">
                                <div class="card-body">
                                    <p>We don't believe in being everywhere. We analyze your target demographic’s behavior to determine if you should focus on LinkedIn (B2B), Instagram/TikTok (B2C), or specialized platforms like X or Pinterest.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-2">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-2" data-aria-expanded="false" data-aria-controls="faqCollapse-2">
                                        <span class="badge">&nbsp;</span>How do you handle negative comments or brand crises on social media?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-2" class="collapse" aria-labelledby="faqHeading-2" data-parent="#accordion">
                                <div class="card-body">
                                    <p>We establish a clear "Crisis Management Protocol" with you beforehand, ensuring we respond to concerns within minutes to protect your brand reputation.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-3">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-3" data-aria-expanded="false" data-aria-controls="faqCollapse-3">
                                        <span class="badge">&nbsp;</span>Is organic reach dead? Do I have to pay for ads?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-3" class="collapse" aria-labelledby="faqHeading-3" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Organic reach is challenging but not dead. We use high-engagement "reels" and community-building tactics to maintain organic growth, supplemented by paid boosts for maximum ROI.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-4">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-4" data-aria-expanded="false" data-aria-controls="faqCollapse-4">
                                        <span class="badge">&nbsp;</span>How often will you post on my profiles?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-4" class="collapse" aria-labelledby="faqHeading-4" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Posting frequency is determined by your goals and platform. Generally, we recommend 3–5 high-quality posts per week to maintain consistency without "spamming" your followers.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-5">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-5" data-aria-expanded="false" data-aria-controls="faqCollapse-5">
                                        <span class="badge">&nbsp;</span>Do you provide monthly reports on follower growth and engagement?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-5" class="collapse" aria-labelledby="faqHeading-5" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Yes, we provide detailed monthly reports that break down follower demographics, top-performing content, and direct conversions from social channels.</p>
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