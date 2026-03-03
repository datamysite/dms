@extends('web.includes.master')

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
                        <h2>Elevate Your Digital Presence </h2>
                        <h4>with Intelligent Optimization</h4>
                        <br>
                        <p>
                            AI SEO integrates artificial intelligence technologies into traditional search engine optimization practices to enhance website visibility, user engagement, and content relevance. By leveraging machine learning algorithms, natural language processing, and data analytics, AI SEO enables businesses to stay ahead in the competitive digital landscape.
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

                <div class="col-lg-6">
                    <iframe class="service-iframe inf-iframe" src="https://www.youtube.com/embed/Kbxm_z_ScYU?si=589eks2setWiGTUc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>

                <div class="col-lg-6 vertical-center" data-aos="fade-up" data-aos-delay="100">
                    <h4>Why Choose AI SEO?</h4>
                    <ul>
                        <li><strong>Enhanced Content Creation</strong>: Utilize AI tools to generate high-quality, SEO-optimized content that resonates with your target audience.</li>
                        <li><strong>Advanced Keyword Analysis</strong>: Employ AI-driven keyword research to identify high-traffic, low-competition keywords that boost search rankings.</li>
                        <li><strong>Improved User Experience</strong>: AI algorithms analyze user behavior to suggest website improvements that enhance user engagement and reduce bounce rates.</li>
                        <li><strong>Predictive Analytics</strong>: Anticipate market trends and adjust SEO strategies proactively using AI-powered analytics.</li>
                    </ul>
                    <br>
                    <h5>Book Your Free SEO Audit — <a href="javascript:void(0)" class="scroll-up">Get Started Now</a></h5>
                </div>
            </div>

          </div>

        </section>


        <div class="section-striped">
                @include('web.includes.elements.clients')
        </div>



        <section id="testimonials" class="testimonials case-studies-section section">
           @include('web.includes.elements.case-studies')
        </section>


         <section id="service-cards" class="blog-section section-striped section">

          <div class="container">

            <div class="row gy-4">

                <div class="col-lg-4 vertical-center">
                    <img src="{{URL::to('/public/section-images/image44.png')}}" width="100%" alt="Our AI SEO Services">
                </div> 
                <div class="col-lg-1"></div>
                <div class="col-lg-7">
                    <h4>Our AI SEO Services</h4>
                    <div class="faq " id="accordion">
                        <div class="card">
                            <div class="card-header" id="faqHeading-21">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-21" data-aria-expanded="true" data-aria-controls="faqCollapse-21">
                                        <span class="badge">&nbsp;</span>AI-Driven Content Strategy
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-21" class="collapse show" aria-labelledby="faqHeading-21" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Develop a comprehensive content plan that aligns with your business goals and audience interests, powered by AI insights.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-22">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-22" data-aria-expanded="false" data-aria-controls="faqCollapse-22">
                                        <span class="badge">&nbsp;</span>Automated On-Page Optimization
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-22" class="collapse" aria-labelledby="faqHeading-22" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Implement AI tools to optimize meta tags, headers, and images, ensuring your website meets SEO best practices.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-23">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-23" data-aria-expanded="false" data-aria-controls="faqCollapse-23">
                                        <span class="badge">&nbsp;</span>AI-Powered Link Building
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-23" class="collapse" aria-labelledby="faqHeading-23" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Identify authoritative websites for backlink opportunities using AI algorithms, enhancing your site's domain authority.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-24">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-24" data-aria-expanded="false" data-aria-controls="faqCollapse-24">
                                        <span class="badge">&nbsp;</span>Voice Search Optimization
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-24" class="collapse" aria-labelledby="faqHeading-24" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Optimize your content for voice search queries, catering to the growing number of voice-activated device users.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-25">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-25" data-aria-expanded="false" data-aria-controls="faqCollapse-25">
                                        <span class="badge">&nbsp;</span>AI-Based Performance Tracking
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-25" class="collapse" aria-labelledby="faqHeading-25" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Monitor SEO performance using AI analytics platforms, providing real-time insights and actionable recommendations.</p>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>

          </div>

        </section>


        <section id="service-cards" class="blog-section section why-us-section">

          <div class="container">

            <div class="row gy-4 first-row">

                <div class="col-lg-8 vertical-center">
                    <h4>How AI SEO Works</h4>
                    <br>
                    <ul>
                        <li><strong>Data Collection</strong>: Gather data from various sources, including website analytics, user behavior, and market trends.</li>
                        <li><strong>AI Analysis</strong>: Utilize AI algorithms to analyze the collected data, identifying patterns and insights.</li>
                        <li><strong>Strategy Development</strong>: Develop an SEO strategy based on AI insights, focusing on areas with the highest potential for improvement.</li>
                        <li><strong>Implementation</strong>: Apply the AI-driven SEO strategy across your website, ensuring all elements are optimized.</li>
                        <li><strong>Continuous Monitoring</strong>: Regularly monitor SEO performance using AI tools, making adjustments as needed to maintain optimal results.</li>                    
                    </ul>
                    
                    <br>
                    <p>We don’t just claim to be the best — we back it up with data and results.</p>
                </div>
                <div class="col-lg-2"></div>
                <div class="col-lg-2 mob-not-visible">
                    <img src="{{URL::to('/public/assets/img/why-us.png')}}" width="100%" alt="Why choose us">
                </div> 
            </div>

          </div>

        </section>


        <section id="service-cards" class="blog-section section-striped section why-us-section">

          <div class="container">

            <div class="row gy-4 first-row">

                <div class="col-lg-3">
                    <img src="{{URL::to('/public/section-images/image45.png')}}" width="100%" alt="Why choose us">
                </div> 
                <div class="col-lg-2"></div>
                <div class="col-lg-7 vertical-center">
                    <h4>Benefits of AI SEO</h4>
                    <br>

                    <ul>
                        <li><strong>Scalability</strong>: Efficiently manage large-scale SEO campaigns with AI automation.</li>
                        <li><strong>Accuracy</strong>: Reduce human error in SEO tasks through precise AI algorithms.</li>
                        <li><strong>Cost-Effectiveness</strong>: Lower operational costs by automating routine SEO tasks.</li>
                        <li><strong>Competitive Advantage</strong>: Stay ahead of competitors by adopting cutting-edge AI technologies in your SEO strategy.</li>
                  
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
                    <a href="{{URL::to('/blogs/ai-powered-seo')}}" class="see-all-btn" target="_blank">See All Blogs</a>
                </div>
            </div>

          </div>

        </section>


        <section id="service-cards" class="blog-section section faq-new-section">

          <div class="container">

            <div class="row gy-4 first-row">

                <div class="col-lg-12 vertical-center">
                    <h4 class="text-center">Frequently Asked Questions</h4>
                    <br>
                    <div class="faq " id="accordion">
                        <div class="card">
                            <div class="card-header" id="faqHeading-10">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-10" data-aria-expanded="true" data-aria-controls="faqCollapse-10">
                                        <span class="badge">&nbsp;</span>What is "AI SEO" and how is it different from traditional SEO?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-10" class="collapse show" aria-labelledby="faqHeading-10" data-parent="#accordion">
                                <div class="card-body">
                                    <p>AI SEO uses machine learning tools to predict algorithm shifts, analyze competitor content at scale, and optimize "User Intent" much faster than manual methods.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-11">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-11" data-aria-expanded="false" data-aria-controls="faqCollapse-11">
                                        <span class="badge">&nbsp;</span>Will AI-generated content hurt my Google rankings?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-11" class="collapse" aria-labelledby="faqHeading-11" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Not if it's done correctly. We use AI to generate data-driven drafts which are then refined by human editors to ensure high "E-E-A-T" (Experience, Expertise, Authoritativeness, and Trustworthiness).</p>
                                </div>
                            </div>
                        </div>


                        <div class="card">
                            <div class="card-header" id="faqHeading-12">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-12" data-aria-expanded="false" data-aria-controls="faqCollapse-12">
                                        <span class="badge">&nbsp;</span>How does AI help with keyword research?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-12" class="collapse" aria-labelledby="faqHeading-12" data-parent="#accordion">
                                <div class="card-body">
                                    <p>AI can identify "Semantic Clusters"—groups of related topics that humans might miss—allowing us to build total "Topical Authority" in your niche.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-13">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-13" data-aria-expanded="false" data-aria-controls="faqCollapse-13">
                                        <span class="badge">&nbsp;</span>Can AI help optimize my site's technical structure?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-13" class="collapse" aria-labelledby="faqHeading-13" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Yes, we use AI-driven crawlers that find technical errors, broken links, and site-speed bottlenecks that traditional tools often overlook.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-14">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-14" data-aria-expanded="false" data-aria-controls="faqCollapse-14">
                                        <span class="badge">&nbsp;</span>Is AI SEO more expensive?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-14" class="collapse" aria-labelledby="faqHeading-14" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Actually, it can be more cost-effective. AI allows us to perform massive amounts of data analysis in seconds, focusing our human experts on the high-level strategy that wins rankings.</p>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>

          </div>

        </section>




        <section id="service-cards" class="blog-section section">

          <div class="container">

            <div class="row gy-4 first-row">

                <div class="col-lg-12">
                    <h3>Ready to Transform Your SEO Strategy?</h3>
                    <br>

                    <div class="row services gy-4">
                        <div class="col-lg-7">
                            <p>Embrace the future of digital marketing with AI SEO. Contact us today to learn how our AI-powered SEO services can drive traffic, enhance user engagement, and increase conversions for your business.</p>

                            <p><strong>Your journey starts with free consultation.</strong></p>

                            @include('web.includes.elements.contact')
                        </div>

                        <div class="col-lg-5">

                            <div class="web-form-div">
                                <h4>What You Get with Our Local SEO Packages</h4>
                                <ul>
                                    <li>GMB setup & optimization</li>
                                    <li>Keyword research & targeting</li>
                                    <li>Citation building & management</li>
                                    <li>Local content writing</li>
                                    <li>Review building & monitoring</li>
                                    <li>Monthly reports with ranking updates</li>

                                </ul>

                                <h5>Want a website that actually drives business? <br><a href="javascript:void(0)" class="scroll-up">Let’s Talk</a>!</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

          </div>

        </section>
    </main>


@endsection