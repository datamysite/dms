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
                        <h2>Connecting with Chinese Consumers</h2>
                        <h4>requires precision, localization, and strategic execution.</h4>
                        <br>
                        <p>
                            At DataMySite, we help Dubai and UAE-based brands establish a strong presence in China through airport advertising and digital marketing that speak directly to Chinese audiences with cultural and contextual relevance.
                            <br>
                            Our approach blends premium visibility at major airports with localized digital campaigns across China’s unique online ecosystem — ensuring your brand connects effectively, builds credibility, and generates measurable growth.
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
                    <h4>Why China Marketing is Essential for Dubai Brands</h4>
                    <br>
                    <p>
                        China represents more than 1.4 billion consumers, with growing demand for luxury, lifestyle, education, healthcare, tourism, and technology brands. For UAE businesses looking to expand internationally, China offers:
                    </p>
                    <ul>
                        <li>High spending power and global travel trends</li>
                        <li>Strong digital adoption — 1.2 billion active internet users</li>
                        <li>Brand loyalty through local social media ecosystems</li>
                        <li>Massive exposure through airport and city digital screens</li>
                    </ul>
                    <p>
                        However, China’s marketing environment is unique and regulated. Western platforms like Google, Facebook, and Instagram don’t operate there — making local expertise and correct channel selection absolutely vital.
                        <br><br>
                        That’s where DataMySite bridges the gap — helping your Dubai brand enter and succeed in the Chinese market confidently.
                    </p>
                </div>
                <div class="col-lg-6 vertical-center">
                    <iframe class="service-iframe" src="https://www.youtube.com/embed/re2nXszkJcI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
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
                    <h4>Our China Marketing Strategy</h4>
                    <p>We focus on two major marketing channels that deliver high engagement and measurable results:</p>
                    
                </div> 
                <div class="col-lg-6">
                    <h5 class="text-theme">Airport Advertising in China</h5>
                    <p>
                        Airports in China are among the busiest in the world — including Beijing Capital, Shanghai Pudong, Guangzhou Baiyun, and Shenzhen Bao’an. With millions of travelers passing through daily, they are prime locations for luxury and international brand exposure.
                        <br>
                        <strong>Our Airport Advertising Services include:</strong>

                    </p>
                    <ul>
                        <li>Large-format digital screens in terminals and lounges</li>
                        <li>LED video walls and baggage claim area branding</li>
                        <li>Digital banners in VIP lounges and arrival zones</li>
                        <li>Static billboards and lightbox displays</li>
                        <li>Interactive digital kiosks and product showcases</li>
                    </ul>
                    <p>
                        <strong>Why Airport Advertising Works in China:</strong><br>
                        Targets affluent travelers, business professionals, and tourists<br>
                         Delivers high dwell-time visibility<br>
                         Builds international credibility instantly<br>
                         Ideal for Dubai-based tourism, real estate, and luxury brands targeting outbound Chinese travelers
                         <br><br>
                         <strong>Example Applications:</strong>
                    </p>
                    <ul>
                        <li>Promote Dubai’s real estate or tourism in Chinese airports before travelers depart.</li>
                        <li>Showcase UAE luxury brands or property developers through premium terminal screens.</li>
                        <li>Drive Chinese tourists toward UAE destinations using culturally adapted visuals and Mandarin-language creatives.</li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <h5 class="text-theme">Digital Marketing in China</h5>
                    <p>
                        The digital landscape in China is unlike anywhere else in the world. Instead of Google, YouTube, or Instagram, Chinese audiences use local platforms like:
                    </p>
                    <ul>
                        <li><strong>WeChat</strong> – for messaging, mini-programs, and brand content</li>
                        <li><strong>Weibo</strong> – for social influence and news</li>
                        <li><strong>Baidu</strong> – the top Chinese search engine</li>
                        <li><strong>Xiaohongshu (Little Red Book)</strong> – lifestyle, reviews, and influencer marketing</li>
                        <li><strong>Douyin (TikTok China)</strong> – short video marketing and brand storytelling</li>
                    </ul>
                    <p>
                        <strong>Our Digital Marketing Services Include:</strong>
                    </p>
                    <ul>
                        <li>Baidu SEO & PPC advertising</li>
                        <li>WeChat official account setup & content marketing</li>
                       <li> Weibo influencer and campaign management</li>
                        <li>KOL (Key Opinion Leader) collaborations</li>
                        <li>Little Red Book product promotions and brand seeding</li>
                        <li>Douyin short video advertising and creative production</li>
                        <li>Localized website development and translation services</li>

                    </ul>
                    <p>
                        <strong>Why Digital Marketing in China is Critical:</strong><br>
                        Connects with Chinese consumers on platforms they actually use<br>
                         Builds brand authority through verified channels<br>
                         Supports remarketing and audience data collection<br>
                         Enables measurable engagement, traffic, and sales conversions<br>
                         <strong>Example Campaigns:</strong>
                    </p>
                    <ul>
                        <li>A Dubai real estate developer running Baidu PPC ads targeting Chinese investors.</li>
                        <li>A UAE travel agency launching a WeChat campaign promoting “Visit Dubai” experiences.</li>
                        <li>A lifestyle brand partnering with Chinese influencers on Little Red Book to build product awareness.</li>
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


                <div class="col-lg-3 vertical-center">
                    <img src="{{URL::to('/public/section-images/image11.png')}}" width="100%" alt="Why choose us">
                </div> 
                <div class="col-lg-1"></div>
                <div class="col-lg-8 vertical-center">
                    <h4>Industries That Benefit Most from China Marketing</h4>
                    <ul>
                        <li><strong>Tourism & Hospitality</strong> – Attract Chinese travelers to Dubai hotels and experiences.</li>
                        <li><strong>Real Estate & Property</strong> – Target investors and high-net-worth individuals.</li>
                        <li><strong>Luxury Retail & Fashion</strong> – Build brand aspiration through airport and social ads.</li>
                        <li><strong>Education & Healthcare</strong> – Promote UAE universities and clinics to Chinese students and families.</li>
                        <li><strong>Technology & Finance</strong> – Introduce innovative solutions to a fast-evolving market.</li>
                    </ul>
                    <br>
                    <h4>Reach Chinese Audiences with Confidence</h4>
                    <p>
                        At DataMySite, we turn your brand’s global ambitions into reality. Through a mix of premium airport advertising and digital-first strategies, we help UAE businesses tap into China’s vast consumer market — with creativity, compliance, and measurable results.
                        <br><br>
                        <strong>Expand into China — with DataMySite as your global marketing partner.</strong>

                    </p>
                </div>
            </div>

          </div>

        </section>


        <section id="service-cards" class="blog-section striped-section section why-us-section why-out-us-section">

          <div class="container">

            <div class="row gy-4 first-row">

                <div class="col-lg-9">
                    <h4>Why Choose DataMySite for China Marketing</h4>
                    <p>
                        We combine on-ground Chinese market expertise with Dubai’s marketing innovation to deliver campaigns that perform.
                        <br><br>
                        <strong>Our Advantages:</strong>
                    </p>
                    <ul>
                        <li>Partnerships with certified Chinese digital agencies and airport networks</li>
                        <li>Localized content creation with Mandarin-speaking copywriters and designers</li>
                        <li>Regulatory compliance with Chinese advertising laws</li>
                        <li>Data tracking, analytics, and ROI reporting tailored for Chinese channels</li>
                        <li>Seamless coordination from Dubai for creative, execution, and reporting</li>

                    </ul>
                    <p>
                        With our China Airport & Digital Marketing services, your brand reaches both premium travelers and digitally active consumers — maximizing brand exposure and engagement.
                    </p>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-2 mob-not-visible">
                    <img src="{{URL::to('/public/section-images/image100.png')}}" width="100%" alt="Why choose us">
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
                                        <span class="badge">&nbsp;</span>Can UAE companies advertise in Chinese airports?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-10" class="collapse show" aria-labelledby="faqHeading-10" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Yes, through our media partners we provide exclusive airport advertising inventory across major Chinese airports, fully compliant with local guidelines.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-11">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-11" data-aria-expanded="false" data-aria-controls="faqCollapse-11">
                                        <span class="badge">&nbsp;</span>Do you manage campaigns on Chinese digital platforms?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-11" class="collapse" aria-labelledby="faqHeading-11" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Absolutely. We handle everything from WeChat and Baidu ads to influencer collaborations on Douyin and Little Red Book.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-12">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-12" data-aria-expanded="false" data-aria-controls="faqCollapse-12">
                                        <span class="badge">&nbsp;</span>Is translation enough for success in China?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-12" class="collapse" aria-labelledby="faqHeading-12" data-parent="#accordion">
                                <div class="card-body">
                                    <p>No — success requires cultural localization. We adapt visuals, tone, and storytelling to Chinese preferences for better engagement.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-13">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-13" data-aria-expanded="false" data-aria-controls="faqCollapse-13">
                                        <span class="badge">&nbsp;</span>How do you measure results?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-13" class="collapse" aria-labelledby="faqHeading-13" data-parent="#accordion">
                                <div class="card-body">
                                    <p>We track metrics such as impressions, engagement, click-throughs, leads, and conversions, depending on the platform and campaign type.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-14">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-14" data-aria-expanded="false" data-aria-controls="faqCollapse-14">
                                        <span class="badge">&nbsp;</span>Can one campaign target both airport and digital audiences?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-14" class="collapse" aria-labelledby="faqHeading-14" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Yes. We can run synchronized campaigns — airport OOH for awareness and digital campaigns for engagement and conversions.</p>
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