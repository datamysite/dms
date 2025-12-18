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
                        <h1>&#10687; {{$service->name}}</h1>
                        <h2>Invest in Professional Digital Marketing</h2>
                        <br>
                        <p>
                            In a competitive digital landscape like Dubai, partnering with the best digital marketing agency in Dubai is essential for business growth. From SEO and PPC to content and social media marketing, our digital marketing services in Dubai are designed to deliver measurable results, increase brand visibility, and drive conversions.
                            <br>
                            Whether you are a startup, SME, or established enterprise, our team of experts ensures your digital marketing campaigns are tailored to your business objectives, audience, and industry trends.
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
                                
                                <input type="hidden" name="service" value="{{$service->name}}" required>
                                                                
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
                    <h4>Elevate Your Business with Expert Strategies</h4>
                    <p>
                        In today’s fast-paced digital world, businesses need more than just a website or social media presence—they need a strategic digital marketing approach that drives results. Whether your goal is to generate leads, increase brand awareness, or boost sales, partnering with the best digital marketing agency in Dubai can transform your business.
                        <br>
                        Dubai and the UAE have become hubs of innovation, attracting global brands and startups alike. To stand out in this competitive market, businesses require high-quality, data-driven digital marketing strategies that reach the right audience at the right time. This is where a top digital marketing agency Dubai comes in.
                    </p>
                    <div class="faq " id="accordion">
                        @foreach($subservices as $key => $val)
                            @php $s = $key; @endphp
                            <div class="card">
                                <div class="card-header" id="faqHeading-{{$s}}">
                                    <div class="mb-0">
                                        <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-{{$s}}" data-aria-expanded="true" data-aria-controls="faqCollapse-{{$s}}">
                                            <i class="{{$val->icon}}"></i> &nbsp; {{$val->name}}
                                        </h5>
                                    </div>
                                </div>
                                <div id="faqCollapse-{{$s}}" class="collapse" aria-labelledby="faqHeading-{{$s}}" data-parent="#accordion">
                                    <div class="card-body">
                                        <p>{{$val->description}}</p>
                                        <a href="{{URL::to('/'.$service->slug.'/'.$val->slug)}}" class="readmore stretched-link"><span>Learn More</span><i class="bi bi-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-5">
                    <iframe class="service-iframe dooh-iframe vertical-center" src="https://www.youtube.com/embed/bfcE9AMwrrM?si=c-GXCMSK669sV8qn" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
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
                    <h4>Our Approach as a Leading Digital Marketing Agency in Dubai</h4>
                    <p>As one of the best digital marketing agencies in Dubai and the UAE, our approach focuses on results, innovation, and personalized strategies. Here’s how we help businesses succeed:</p>
                    
                </div> 
                <div class="col-lg-6">
                    <h5 class="text-theme">Customized Digital Marketing Strategy</h5>
                    <p>
                        Every business is unique, and so should be its digital marketing plan. Our team develops tailored strategies based on:
                    </p>
                    <ul>
                        <li>Business goals and objectives</li>
                        <li>Target audience analysis</li>
                        <li>Competitor benchmarking</li>
                        <li>Industry trends and insights</li>
                    </ul>
                    <p>This ensures that your campaigns deliver maximum impact and measurable results.</p>
                </div>
                <div class="col-lg-6">
                    <h5 class="text-theme">Search Engine Optimization (SEO)</h5>
                    <p>SEO is the backbone of any successful digital marketing campaign. Our digital marketing services in Dubai include:</p>
                    <ul>
                        <li>Keyword research and optimization</li>
                        <li>On-page SEO (meta tags, headings, content structure)</li>
                        <li>Technical SEO (site speed, mobile optimization, indexing)</li>
                        <li>Off-page SEO (backlinks, guest posting, authority building)</li>
                        <li>Local SEO for Dubai and UAE markets</li>

                    </ul>
                    <p>By optimizing for both users and search engines, we help your business rank higher, attract qualified traffic, and increase conversions.</p>
                </div>
                <div class="col-lg-6">
                    <h5 class="text-theme">Pay-Per-Click (PPC) Advertising</h5>
                    <p>Paid campaigns can deliver instant results when managed effectively. Our digital marketing company Dubai specializes in:</p>
                    <ul>
                        <li>Google Ads and Bing Ads campaigns</li>
                        <li>Social media advertising (Facebook, Instagram, LinkedIn, YouTube)</li>
                        <li>Retargeting campaigns to re-engage visitors</li>
                        <li>Budget optimization for maximum ROI</li>
                    </ul>
                    <p>PPC campaigns allow businesses to target specific audiences and achieve measurable growth quickly.</p>
                </div>
                <div class="col-lg-6">
                    <h5 class="text-theme">Social Media Marketing</h5>
                    <p>A strong social media presence is essential for engaging customers and building brand loyalty. Our digital marketing agency Dubai creates compelling campaigns that include:</p>
                    <ul>
                        <li>Social media strategy and planning</li>
                        <li>Content creation and posting schedules</li>
                        <li>Paid social campaigns for lead generation</li>
                        <li>Analytics tracking to measure engagement and growth</li>
                    </ul>
                    <p>We focus on platforms that matter most to your audience, whether it’s Instagram, LinkedIn, Facebook, or TikTok.</p>
                </div>
                <div class="col-lg-6">
                    <h5 class="text-theme">Content Marketing</h5>
                    <p>Content is king in digital marketing. Our digital marketing services in Dubai include:</p>
                    <ul>
                        <li>Blog writing and SEO articles</li>
                        <li>Website copywriting</li>
                        <li>Email newsletters and campaigns</li>
                        <li>Video scripts and multimedia content</li>
                    </ul>
                    <p>By providing valuable content, we attract, engage, and convert potential customers while improving SEO performance.</p>
                </div>
                <div class="col-lg-6">
                    <h5 class="text-theme">Email Marketing</h5>
                    <p>Email marketing remains one of the most effective ways to nurture leads. Our digital marketing company in Dubai designs campaigns that:</p>
                    <ul>
                        <li>Segment audiences for targeted communication</li>
                        <li>Personalize content for higher engagement</li>
                        <li>Automate follow-ups and drip campaigns</li>
                        <li>Track performance and optimize open and click-through rates</li>
                    </ul>
                    <p>This ensures your messages reach the right people at the right time.</p>
                </div>
                <div class="col-lg-12">
                    <h5 class="text-theme">Analytics and Reporting</h5>
                    <p>Our team provides detailed analytics and performance reports to measure the success of your campaigns. We monitor:</p>
                    <ul>
                        <li>Website traffic and visitor behavior</li>
                        <li>Conversion rates and lead generation</li>
                        <li>ROI from paid campaigns</li>
                        <li>Engagement metrics across social media</li>
                    </ul>
                    <p>By analyzing data, we continuously optimize strategies for better results.</p>
                </div>
            </div>
            <div class="uni-strip-see-more">
                <button data-class="outdoor-service-col-section">See More</button>
            </div>

          </div>

        </section>


        <section id="service-cards" class="blog-section section why-us-section why-out-us-section">

          <div class="container">

            <div class="row gy-4 first-row">

                <div class="col-lg-9">
                    <h4>Why Digital Marketing is Essential for Businesses in Dubai</h4>
                    <p>Digital marketing is more than just posting on social media or running ads—it’s a comprehensive strategy that combines creativity, technology, and analytics to achieve measurable results. Working with the best digital marketing company in Dubai offers numerous advantages:</p>
                    <ul>
                        <li><strong>Enhanced Online Visibility</strong>:<br> Appearing at the top of search results increases brand exposure and drives organic traffic.</li>
                        <li><strong>Targeted Audience Engagement</strong>:<br> Reaching potential customers based on demographics, interests, and behavior ensures better engagement.</li>
                        <li><strong>Brand Authority</strong>:<br> Regular, high-quality content and strategic campaigns position your business as a market leader.</li>
                        <li><strong>Measurable Results</strong>:<br> Analytics and reporting allow you to track ROI and optimize campaigns for maximum performance.</li>
                        <li><strong>Cost-Effective Growth</strong>:<br> Digital marketing delivers long-term value with measurable outcomes compared to traditional marketing channels.</li>
                    </ul>
                    
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-2 mob-not-visible">
                    <img src="{{URL::to('/public/assets/img/why-us.png')}}" width="100%" alt="Why choose us">
                </div> 
            </div>

          </div>

        </section>


        <section id="service-cards" class="blog-section section why-us-section striped-section why-out-us-section">

          <div class="container">

            <div class="row gy-4 first-row split-block">

                <div class="col-lg-2 ">
                    <img src="{{URL::to('/public/section-images/image41.png')}}" width="100%" alt="Why choose us">
                </div> 
                <div class="col-lg-2"></div>
                <div class="col-lg-8">
                    <h4>Benefits of Working with the Best Digital Marketing Agency in Dubai</h4>
                    <p>
                        Choosing the best digital marketing agency in UAE offers numerous advantages for your business:
                    </p>
                    <ul>
                        <li>
                            <strong>Expertise Across Multiple Channels</strong><br>
                            We combine SEO, PPC, social media, content, and email marketing to create a cohesive strategy.
                        </li>
                        <li>
                            <strong>Increased Brand Visibility</strong><br>
                            Our campaigns ensure that your brand reaches a wider audience, both locally in Dubai and across the UAE.
                        </li>
                        <li>
                            <strong>Measurable ROI</strong><br>
                            Digital marketing allows you to track performance in real-time, ensuring your investment translates into tangible business growth.
                        </li>
                        <li>
                            <strong>Enhanced Customer Engagement</strong><br>
                            Through personalized campaigns and strategic content, we foster stronger relationships with your audience.
                        </li>
                        <li>
                            <strong>Competitive Advantage</strong><br>
                            By leveraging data-driven insights and innovative strategies, your business stays ahead of competitors in the digital landscape.
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
                    <h4>Our Digital Marketing Services in Dubai</h4>
                    <p>
                        As one of the best digital marketing companies in Dubai, we offer a full suite of services to help businesses grow:
                    </p>
                    <ul>
                        <li><strong>SEO Services</strong>: Keyword research, on-page optimization, link building, and local SEO.</li>
                        <li><strong>PPC Advertising</strong>: Google Ads, social media campaigns, and retargeting for high ROI.</li>
                        <li><strong>Social Media Marketing</strong>: Strategy, content creation, paid campaigns, and analytics.</li>
                        <li><strong>Content Marketing</strong>: Blogs, articles, website copy, email campaigns, and video scripts.</li>
                        <li><strong>Email Marketing</strong>: Automated campaigns, personalized content, and performance tracking.</li>
                        <li><strong>Web Design & Development</strong>: SEO-friendly, responsive websites designed to convert visitors.</li>
                        <li><strong>Analytics & Reporting</strong>: Performance monitoring and continuous optimization for campaigns.</li>
                    </ul>
                    <br>
                    <h4>Why Dubai Businesses Trust Us</h4>
                    <p>We are recognized as one of the best digital marketing services in Dubai because we:</p>
                    <ul>
                        <li>Deliver customized, result-driven campaigns</li>
                        <li>Employ a team of experienced digital marketing specialists</li>
                        <li>Use the latest tools and technology to optimize campaigns</li>
                        <li>Focus on long-term growth and brand building</li>
                        <li>Maintain transparency through detailed reporting and analytics</li>
                    </ul>
                </div>

                <div class="col-lg-1"></div>
                <div class="col-lg-3 ">
                    <img src="{{URL::to('/public/section-images/image41.png')}}" width="100%" alt="Why choose us">
                </div> 
            </div>

          </div>

        </section>


        <section id="service-cards" class="blog-section section why-us-section striped-section why-out-us-section">

          <div class="container">

            <div class="row gy-4 first-row split-block">

                <div class="col-lg-2 ">
                    <img src="{{URL::to('/public/section-images/image41.png')}}" width="100%" alt="Why choose us">
                </div> 
                <div class="col-lg-2"></div>
                <div class="col-lg-8">
                    <h4>Digital Marketing in the UAE: Expanding Your Reach</h4>
                    <p>Dubai and the UAE are rapidly growing digital markets. To succeed, businesses need a digital marketing agency in UAE that understands local trends, culture, and customer behavior. Our strategies are designed to:</p>
                    <ul>
                        <li>Target UAE-specific audiences</li>
                        <li>Optimize for local SEO and search intent</li>
                        <li>Leverage multi-channel campaigns for maximum reach</li>
                        <li>Deliver measurable growth across all digital platforms</li>
                    </ul>
                    <br>
                    <h4>How to Get Started with the Best Digital Marketing Company in Dubai</h4>
                    <p>Partnering with the best digital marketing company in Dubai is simple:</p>
                    <ul>
                        <li><strong>Consultation</strong>: Discuss business goals, challenges, and target audiences.</li>
                        <li><strong>Strategy Development</strong>: Our team creates a customized digital marketing plan.</li>
                        <li><strong>Execution</strong>: Implement campaigns across SEO, social media, PPC, content, and email.</li>
                        <li><strong>Monitoring</strong>: Track performance, analyze data, and optimize strategies.</li>
                        <li><strong>Reporting</strong>: Receive detailed reports on ROI, traffic, engagement, and leads.</li>
                    </ul>
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
                <div class="col-lg-8 vertical-center">
                    <h4>FAQs</h4>
                    <div class="faq " id="accordion">
                        <div class="card">
                            <div class="card-header" id="faqHeading-10">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-10" data-aria-expanded="true" data-aria-controls="faqCollapse-10">
                                        <span class="badge">&nbsp;</span>What services does a digital marketing agency in Dubai provide?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-10" class="collapse show" aria-labelledby="faqHeading-10" data-parent="#accordion">
                                <div class="card-body">
                                    <p>A digital marketing agency in Dubai offers SEO, PPC, social media marketing, content creation, email marketing, web design, and analytics to grow your business online.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-11">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-11" data-aria-expanded="false" data-aria-controls="faqCollapse-11">
                                        <span class="badge">&nbsp;</span>How can digital marketing benefit my business in Dubai?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-11" class="collapse" aria-labelledby="faqHeading-11" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Digital marketing boosts online visibility, engages targeted audiences, generates leads, improves brand authority, and delivers measurable ROI for businesses in Dubai and the UAE.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-12">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-12" data-aria-expanded="false" data-aria-controls="faqCollapse-12">
                                        <span class="badge">&nbsp;</span>What makes a digital marketing company in Dubai the best?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-12" class="collapse" aria-labelledby="faqHeading-12" data-parent="#accordion">
                                <div class="card-body">
                                    <p>The best agencies combine experience, innovative strategies, multi-channel expertise, proven results, and a data-driven approach tailored to your business goals.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-13">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-13" data-aria-expanded="false" data-aria-controls="faqCollapse-13">
                                        <span class="badge">&nbsp;</span>Can digital marketing services help my business rank higher on Google?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-13" class="collapse" aria-labelledby="faqHeading-13" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Yes. SEO and content marketing strategies implemented by a professional digital marketing agency Dubai improve search rankings, attract organic traffic, and increase conversions.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-14">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-14" data-aria-expanded="false" data-aria-controls="faqCollapse-14">
                                        <span class="badge">&nbsp;</span>How long does it take to see results from digital marketing in Dubai?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-14" class="collapse" aria-labelledby="faqHeading-14" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Results vary by campaign type, but businesses typically see measurable improvements in traffic, engagement, and leads within 3–6 months of consistent marketing efforts.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-15">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-15" data-aria-expanded="false" data-aria-controls="faqCollapse-15">
                                        <span class="badge">&nbsp;</span>Do you provide digital marketing services for companies outside Dubai?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-15" class="collapse" aria-labelledby="faqHeading-15" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Yes. Our services cater to businesses across the UAE and internationally, focusing on audience targeting, SEO, and multi-channel campaigns for maximum impact.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-16">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-16" data-aria-expanded="false" data-aria-controls="faqCollapse-16">
                                        <span class="badge">&nbsp;</span>What industries do you serve for digital marketing in the UAE?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-16" class="collapse" aria-labelledby="faqHeading-16" data-parent="#accordion">
                                <div class="card-body">
                                    <p>We serve a wide range of industries including retail, tech, healthcare, hospitality, real estate, and lifestyle brands, providing customized digital marketing solutions for each sector.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-17">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-17" data-aria-expanded="false" data-aria-controls="faqCollapse-17">
                                        <span class="badge">&nbsp;</span>How do I choose the right digital marketing agency in Dubai?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-17" class="collapse" aria-labelledby="faqHeading-17" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Look for proven experience, multi-channel expertise, a data-driven approach, creative campaign strategies, and a transparent reporting process to ensure ROI.</p>
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