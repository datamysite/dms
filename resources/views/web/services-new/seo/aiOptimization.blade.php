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