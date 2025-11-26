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
                        <h2>Engage, Inspire & Convert</h2>
                        <h4>with Experiential Marketing</h4>
                        <br>
                        <p>
                            At DataMySite, we specialize in Mall Activations in Dubai and across the UAE, helping brands turn high-footfall areas into powerful engagement platforms through strategic, creative, and data-driven experiential marketing campaigns.
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
                    <h4>What Are Mall Activations?</h4>
                    <p>
                        Mall activations are experiential marketing campaigns conducted inside shopping malls, designed to engage visitors through interactive experiences.
                        <br>
                        They combine physical engagement, brand storytelling, and digital amplification, turning casual visitors into brand participants and loyal customers.
                        <br><br>
                        <strong>Examples include:</strong>

                    </p>
                    <ul>
                        <li>Branded booths and pop-up stalls</li>


                        <li>Interactive games and contests</li>


                        <li>Product sampling and demonstrations</li>


                        <li>Photo zones and AR experiences</li>


                        <li>Virtual reality displays</li>


                        <li>Giveaways and competitions</li>

                    </ul>
                    <p>Mall activations are ideal for product launches, awareness campaigns, lead generation, and brand experiences.</p>
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
                    <h4>DataMySite’s Mall Activation Process</h4>
                    <p>We provide end-to-end mall activation solutions tailored to your brand’s goals, audience, and budget.</p>
                    
                </div> 
                <div class="col-lg-4">
                    <h5 class="text-theme">Concept Development & Strategy</h5>
                    <p>
                        Our team collaborates with you to define:
                    </p>
                    <ul>
                        <li>Campaign objectives (awareness, lead generation, or product launch)</li>
                        <li>Target audience persona (demographics, interests, location)</li>
                        <li>Key performance metrics (footfall, engagement rate, leads captured)</li>
                    </ul>
                    <p>We then design a creative, interactive concept that aligns with your brand identity and messaging.</p>
                </div>
                <div class="col-lg-4">
                    <h5 class="text-theme">Mall Selection & Permissions</h5>
                    <p>
                        We work with leading malls in Dubai and UAE, helping you choose the ideal venue based on:
                    </p>
                    <ul>
                        <li>Target audience profile</li>
                        <li>Expected traffic</li>
                        <li>Location accessibility</li>
                        <li>Activation space availability</li>
                    </ul>
                    <p>We also handle all necessary approvals and permits, ensuring a smooth execution.</p>
                </div>
                <div class="col-lg-4">
                    <h5 class="text-theme">Design & Production</h5>
                    <p>
                        Our creative team builds custom-designed booths, digital screens, interactive stations, and product displays that reflect your brand’s tone and personality.
                        <br>
                        Elements may include:
                    </p>
                    <ul>
                        <li>Branded pop-up stands</li>
                        <li>Digital touchscreens and gamification</li>
                        <li>Virtual/augmented reality experiences</li>
                        <li>Sampling zones</li>
                        <li>Interactive giveaways</li>
                    </ul>
                </div>
                <div class="col-lg-4">
                    <h5 class="text-theme">Execution & Engagement</h5>
                    <p>
                        During the activation, our on-ground team ensures everything runs seamlessly — from setup and staff coordination to real-time audience interaction.
                        <br>
                        We focus on maximizing participation through engaging activities such as:

                    </p>
                    <ul>
                        <li>Competitions and mini-games</li>
                        <li>Lucky draws and giveaways</li>
                        <li>Social media hashtags and live posts</li>
                        <li>Product demos and tasting sessions</li>
                    </ul>
                </div>
                <div class="col-lg-4">
                    <h5 class="text-theme">Data Capture & Lead Management</h5>
                    <p>
                        Mall activations aren’t just about awareness — they’re also about results.
                        <br>
                        We integrate lead capture systems using:
                    </p>
                    <ul>
                        <li>QR codes for instant sign-ups</li>
                        <li>iPad registration forms</li>
                        <li>Feedback kiosks</li>
                        <li>Digital surveys</li>
                    </ul>
                    <p>This allows you to build a high-quality database of potential customers for future marketing campaigns.</p>
                </div>
                <div class="col-lg-4">
                    <h5 class="text-theme">Reporting & Analytics</h5>
                    <p>
                        After the campaign, we provide detailed reporting on:
                    </p>
                    <ul>
                        <li>Footfall and engagement levels</li>
                        <li>Leads generated</li>
                        <li>Social media reach and mentions</li>
                        <li>Conversion opportunities</li>
                    </ul>
                    <p>We also share actionable insights to optimize future activations.</p>
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
                    <img src="{{URL::to('/public/section-images/image187.png')}}" width="100%" alt="Why choose us">
                </div> 
                <div class="col-lg-1"></div>
                <div class="col-lg-8 vertical-center">
                    <h4>Why Mall Activations Work in Dubai</h4>
                    <p>
                        Dubai is home to some of the world’s most iconic malls — The Dubai Mall, Mall of the Emirates, City Centre Deira, Ibn Battuta Mall, and Dubai Hills Mall, among many others.
                        <br>
                        These venues attract millions of visitors every month, including locals, expats, and international tourists, giving brands access to a diverse and engaged audience.
                        <br>
                        Here’s why mall activations in Dubai deliver unmatched results:
                    </p>
                    <ul>
                        <li>
                            <strong>High Footfall Exposure</strong><br>
                            Dubai malls have some of the highest visitor traffic in the world. A well-placed activation can expose your brand to tens of thousands of people daily.
                        </li>
                        <li>
                            <strong>Premium Audience Demographics</strong><br>
                            Malls in Dubai attract affluent, experience-oriented consumers who are open to discovering and engaging with new brands.
                        </li>
                        <li>
                            <strong>Controlled Environment</strong><br>
                            Mall activations offer a comfortable, safe, and weather-proof environment, ensuring uninterrupted engagement throughout the campaign.
                        </li>
                        <li>
                            <strong>Instant Engagement & Conversion</strong><br>
                            Unlike online ads, mall activations allow for face-to-face interaction with your audience — ideal for sampling, product trials, or lead capture.
                        </li>
                        <li>
                            <strong>Social Media Integration</strong><br>
                            Interactive installations and photo zones encourage visitors to share their experiences online, amplifying your campaign’s reach through user-generated content.
                        </li>
                    </ul>
                </div>
            </div>

          </div>

        </section>

         <section id="service-cards" class="blog-section striped-section section why-us-section why-out-us-section">

          <div class="container">

            <div class="row gy-4 first-row split-block">


                <div class="col-lg-8 vertical-center">
                    <h4>Types of Mall Activations We Offer</h4>
                    <ul>
                        <li><strong>Product Launch Activations</strong> – Introduce new products directly to your audience through demos, giveaways, and samples.</li>
                        <li><strong>Interactive Brand Booths</strong> – Create hands-on experiences using digital screens, VR, or games.</li>
                        <li><strong>Seasonal & Holiday Campaigns</strong> – Engage shoppers during peak seasons (Ramadan, Eid, Christmas, New Year, etc.).</li>
                        <li><strong>Sampling & Trial Activations</strong> – Let consumers try your product before buying.</li>
                        <li><strong>Influencer & PR Collaborations</strong> – Combine mall activations with influencer appearances and live coverage.</li>
                    </ul>
                    <br>
                    <h4>Benefits of Mall Activations for Your Brand</h4>
                    <ul>
                        <li><strong>High Audience Reach</strong>: Reach thousands of mall visitors daily.</li>
                        <li><strong>Stronger Brand Recall</strong>: Interactive experiences create long-term memory retention.</li>
                        <li><strong>Lead Generation</strong>: Capture customer data for remarketing and follow-ups.</li>
                        <li><strong>Immediate Feedback</strong>: Understand customer reactions in real time.</li>
                        <li><strong>Social Buzz</strong>: Encourage participants to share branded hashtags and moments online.</li>
                        <li><strong>Customer Trust</strong>: Face-to-face interactions build authenticity and trust.</li>
                    </ul>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-3 vertical-center">
                    <img src="{{URL::to('/public/section-images/image188.png')}}" width="100%" alt="Why choose us">
                </div> 
            </div>

          </div>

        </section>

        <section id="service-cards" class="blog-section  section why-us-section why-out-us-section">

          <div class="container">

            <div class="row gy-4 first-row">

                <div class="col-lg-2 vertical-center mob-not-visible">
                    <img src="{{URL::to('/public/assets/img/why-us.png')}}" width="100%" alt="Why choose us">
                </div> 
                <div class="col-lg-1"></div>
                <div class="col-lg-9">
                    <h4>Why Choose DataMySite for Mall Activations in Dubai</h4>
                    <p>
                        We’re not just an advertising company — we’re brand experience creators.
                        <br>
                        At DataMySite, we focus on blending strategy, creativity, and technology to deliver experiential campaigns that generate measurable impact.
                        <br>
                        Here’s what sets us apart:

                    </p>
                    <ul>
                        <li>Deep understanding of Dubai’s retail and mall ecosystem</li>
                        <li>Creative design and storytelling expertise</li>
                        <li>Seamless coordination with mall authorities</li>
                        <li>Integration with digital and social media marketing</li>
                        <li>Transparent reporting and analytics</li>
                    </ul>
                    <p>Our activations are designed to convert mall visitors into loyal customers through experiences that people remember, talk about, and share.</p>
                    <br>
                    <h4>Conclusion</h4>
                    <p>
                        Mall activations in Dubai are one of the most effective ways to connect directly with consumers, showcase your brand, and build loyalty.
                        <br><br>
                        With DataMySite, your brand can transform a simple mall visit into a memorable, shareable experience that drives awareness, engagement, and conversions.
                        <br><br>
                        From creative design to on-ground execution and digital amplification, we handle everything — so your brand stands out in Dubai’s fast-paced retail environment.
                        <br><br>
                        Contact DataMySite today to plan your next Mall Activation campaign in Dubai and across the UAE, and watch your brand come alive in the heart of the city!
                    </p>
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

        <section id="service-cards" class="blog-section section faq-new-section">

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
                                        <span class="badge">&nbsp;</span>How long does a mall activation usually run?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-10" class="collapse show" aria-labelledby="faqHeading-10" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Campaigns can range from a single-day pop-up to multi-week activations, depending on your goals and mall availability.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-11">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-11" data-aria-expanded="false" data-aria-controls="faqCollapse-11">
                                        <span class="badge">&nbsp;</span>Can I choose which mall to activate in?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-11" class="collapse" aria-labelledby="faqHeading-11" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Yes. We collaborate with top malls in Dubai, including The Dubai Mall, Mall of the Emirates, City Centre, and Ibn Battuta, and recommend the best fit for your brand.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-12">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-12" data-aria-expanded="false" data-aria-controls="faqCollapse-12">
                                        <span class="badge">&nbsp;</span>What’s included in your mall activation package?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-12" class="collapse" aria-labelledby="faqHeading-12" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Our package includes concept design, setup, staffing, permits, lead collection, and post-event reporting.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-13">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-13" data-aria-expanded="false" data-aria-controls="faqCollapse-13">
                                        <span class="badge">&nbsp;</span>Can mall activations be combined with digital marketing?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-13" class="collapse" aria-labelledby="faqHeading-13" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Absolutely. We integrate activations with social media campaigns, influencer collaborations, and PR for maximum exposure.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-14">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-14" data-aria-expanded="false" data-aria-controls="faqCollapse-14">
                                        <span class="badge">&nbsp;</span>How do you measure campaign success?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-14" class="collapse" aria-labelledby="faqHeading-14" data-parent="#accordion">
                                <div class="card-body">
                                    <p>We track footfall, engagement rate, leads captured, and social reach to assess campaign performance and ROI.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-15">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-15" data-aria-expanded="false" data-aria-controls="faqCollapse-15">
                                        <span class="badge">&nbsp;</span>Is this suitable for small businesses or startups?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-15" class="collapse" aria-labelledby="faqHeading-15" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Yes! We create scalable solutions for all budgets, ensuring even small brands get powerful visibility and engagement.</p>
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