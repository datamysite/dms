@extends('web.includes.master')
@section('metaAddition')
    
@endsection
@section('addStyle')
    <link href="{{URL::to('/public')}}/assets/css/service.css" rel="stylesheet">
@endsection
@section('content')

    <main class="main">

        <!-- Page Title -->
          <div class="page-title dark-background" data-aos="fade" style="background-image: url('{{URL::to('public/assets/img/service-new/'.$mainservice->slug.'.jpg')}}');">
            <div class="container head-container-service">
                <div class="row">
                    <div class="col-lg-8 head-para-service">
                        <h1>&#10687; {{$subservice->name}}</h1>
                        <h2>Revolutionize Brand Visibility</h2>
                        <h4>with DOOH in Dubai Metro</h4>
                        <br>
                        <p>
                            With its sleek digital displays, dynamic video content, and precise targeting capabilities, DOOH in Dubai Metro provides an unmatched opportunity to showcase your brand in front of a diverse and engaged audience. It combines creativity, data, and technology to deliver advertising that truly moves with the city.
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
                    <h4>What is DOOH in Dubai Metro?</h4>
                    <p>
                        DOOH (Digital Out-of-Home) refers to digital advertising screens and displays installed in public spaces — in this case, throughout Dubai’s extensive metro network. These include high-definition LED screens, digital pillars, video walls, and platform displays located across major metro stations and inside trains.
                        <br><br>
                        Unlike traditional billboards, DOOH allows for dynamic content delivery, meaning advertisers can display videos, animations, and time-sensitive campaigns that change based on schedules, audience patterns, or even live data.
                        <br><br>
                        For brands looking to stay ahead of the curve, DOOH advertising in Dubai Metro offers a futuristic, engaging, and measurable way to reach millions on the move.
                    </p>
                </div>
                <div class="col-lg-6 vertical-center">
                    <iframe class="service-iframe airline-iframe" src="https://www.youtube.com/embed/Slt71QddNGc?si=Bn768ai2rsCC0YBI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
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
                <div class="col-lg-5 mt-0">
                    <h4>Why Choose DOOH Advertising in Dubai Metro</h4>
                    <br>
                    <div class="faq " id="accordion">
                        <div class="card">
                            <div class="card-header" id="faqHeading-20">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-20" data-aria-expanded="true" data-aria-controls="faqCollapse-20">
                                        <span class="badge">&nbsp;</span>Premium Digital Display Quality
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-20" class="collapse" aria-labelledby="faqHeading-20" data-parent="#accordion">
                                <div class="card-body">
                                    <p>The screens used for metro DOOH advertising are high-resolution LED displays, strategically positioned in high-traffic areas such as ticket halls, escalator zones, platforms, and concourses. These displays offer bright visuals and motion graphics that easily attract attention even in busy environments.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-21">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-21" data-aria-expanded="false" data-aria-controls="faqCollapse-21">
                                        <span class="badge">&nbsp;</span>Real-Time Campaign Flexibility
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-21" class="collapse" aria-labelledby="faqHeading-21" data-parent="#accordion">
                                <div class="card-body">
                                    <p>One of the biggest advantages of DOOH is flexibility. Brands can update or replace their creatives in real time, adapt messaging to different times of the day, or even synchronize campaigns with current events, weather updates, or holidays.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-22">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-22" data-aria-expanded="false" data-aria-controls="faqCollapse-22">
                                        <span class="badge">&nbsp;</span>Cost-Effective High Impact
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-22" class="collapse" aria-labelledby="faqHeading-22" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Compared to traditional static advertising, DOOH allows you to run multiple campaigns across various locations without additional printing or setup costs. You get maximum brand visibility at a competitive investment.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-23">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-23" data-aria-expanded="false" data-aria-controls="faqCollapse-23">
                                        <span class="badge">&nbsp;</span>Eco-Friendly Advertising
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-23" class="collapse" aria-labelledby="faqHeading-23" data-parent="#accordion">
                                <div class="card-body">
                                    <p>
                                        Digital displays reduce the use of printing materials, adhesives, and physical waste. For sustainability-focused brands, DOOH aligns perfectly with environmentally responsible marketing practices.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 vertical-center">
                    <img src="{{URL::to('/public/section-images/image41.png')}}" width="100%" alt="Why choose us">
                </div> 

                <div class="col-lg-5 mt-0">
                    <h4>Types of DOOH Advertising in Dubai Metro</h4>
                    <br>
                    <div class="faq " id="accordion">
                        <div class="card">
                            <div class="card-header" id="faqHeading-30">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-30" data-aria-expanded="true" data-aria-controls="faqCollapse-30">
                                        <span class="badge">&nbsp;</span>Digital Screens in Metro Stations
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-30" class="collapse" aria-labelledby="faqHeading-30" data-parent="#accordion">
                                <div class="card-body">
                                    <p>These are strategically installed in high footfall areas like entrances, ticketing areas, escalators, and platforms. They display short video ads or animated visuals that run on rotation, ensuring constant exposure to thousands of passengers daily.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-31">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-31" data-aria-expanded="false" data-aria-controls="faqCollapse-31">
                                        <span class="badge">&nbsp;</span>Video Walls
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-31" class="collapse" aria-labelledby="faqHeading-31" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Large video walls located inside key stations like Business Bay, Burj Khalifa/Dubai Mall, and Union Station allow full-motion advertisements that create powerful visual experiences. Ideal for major product launches or brand campaigns.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-32">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-32" data-aria-expanded="false" data-aria-controls="faqCollapse-32">
                                        <span class="badge">&nbsp;</span>Digital Pillars
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-32" class="collapse" aria-labelledby="faqHeading-32" data-parent="#accordion">
                                <div class="card-body">
                                    <p>These free-standing digital panels are placed near escalators and corridors, providing dynamic visibility as commuters move through the station. They are ideal for short, impactful messages and promotional videos.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-33">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-33" data-aria-expanded="false" data-aria-controls="faqCollapse-33">
                                        <span class="badge">&nbsp;</span>Inside Metro Train Screens
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-33" class="collapse" aria-labelledby="faqHeading-33" data-parent="#accordion">
                                <div class="card-body">
                                    <p>
                                        Screens located inside the trains play advertisements during travel. These captive audiences are exposed to your message multiple times throughout their journey, ensuring strong brand recall.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-34">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-34" data-aria-expanded="false" data-aria-controls="faqCollapse-34">
                                        <span class="badge">&nbsp;</span>Interactive and Programmatic Displays
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-34" class="collapse" aria-labelledby="faqHeading-34" data-parent="#accordion">
                                <div class="card-body">
                                    <p>
                                        Advanced metro DOOH systems in Dubai now support interactive content and programmatic advertising, where campaigns can automatically adjust based on audience data, time of day, or campaign performance metrics.
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

            <div class="row gy-4 first-row">


                <div class="col-lg-3 mob-not-visible">
                    <img src="{{URL::to('/public/section-images/image47.png')}}" width="100%" alt="Why choose us">
                </div> 
                <div class="col-lg-1"></div>
                <div class="col-lg-8 vertical-center">
                    <h4>Advantages of DOOH Advertising in Dubai Metro</h4>
                    <br>
                    <div class="row">
                        <div class="col-lg-6">
                            <h4>High Engagement and Retention</h4>
                            <p> 
                                Moving visuals naturally draw attention and improve message retention. Studies show that commuters are more likely to remember brands seen on digital metro displays compared to traditional print posters.
                            </p>
                        </div>
                        <div class="col-lg-6">
                            <h4>Time-Specific Messaging</h4>
                            <p> 
                                Run breakfast promotions in the morning, shopping ads in the afternoon, or event campaigns in the evening — all automated within the DOOH scheduling system.
                            </p>
                        </div>
                        <div class="col-lg-6">
                            <h4>Ideal for Multilingual Audiences</h4>
                            <p> 
                                Dubai’s metro commuters include people from more than 100 nationalities. DOOH makes it easy to run multilingual campaigns that appeal to diverse demographics.
                            </p>
                        </div>
                        <div class="col-lg-6">
                            <h4>Boosts Brand Prestige</h4>
                            <p> 
                                Advertising on the Dubai Metro’s digital network places your brand alongside other premium international names, establishing strong credibility and modern brand appeal.
                            </p>
                        </div>
                        <div class="col-lg-12">
                            <h4>Seamless Integration with Digital Campaigns</h4>
                            <p> 
                                DOOH can complement your online marketing efforts. For example, QR codes, hashtags, or real-time social media integrations can drive audiences from physical screens to your digital platforms.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

          </div>

        </section>


        <section id="service-cards" class="blog-section section striped-section why-us-section why-out-us-section">

          <div class="container">

            <div class="row gy-4 first-row">


                <div class="col-lg-3 mob-not-visible">
                    <img src="{{URL::to('/public/section-images/image47.png')}}" width="100%" alt="Why choose us">
                </div> 
                <div class="col-lg-1"></div>
                <div class="col-lg-8 vertical-center">
                    <h4>Strategic Locations for DOOH in Dubai Metro</h4>
                    <p>
                        Dubai Metro’s Red and Green Lines cover the city’s most vibrant commercial and residential areas. Some of the most impactful DOOH advertising spots include:
                    </p>
                    <ul>
                        <li><strong>Business Bay Station</strong> – Ideal for corporate and B2B advertising.</li>
                        <li><strong>Dubai Mall/Burj Khalifa Station</strong> – Perfect for luxury, fashion, and retail brands.</li>
                        <li><strong>Dubai Internet City Station</strong> – Great for technology and digital businesses.</li>
                        <li><strong>Mall of the Emirates Station</strong> – High foot traffic from shoppers and tourists.</li>
                        <li><strong>Union and BurJuman Stations</strong> – Reaching diverse demographics and heavy daily commuters.</li>
                    </ul>
                    <p>By selecting the right stations, brands can achieve highly targeted exposure and maximize campaign effectiveness.</p>
                    <br>
                    <h4>Industries That Benefit from Metro DOOH Advertising</h4>
                    <p>DOOH in Dubai Metro is ideal for a wide range of industries, including:</p>
                    <ul>
                        <li>Real estate and property developers</li>
                        <li>Automotive and luxury brands</li>
                        <li>Retail and shopping malls</li>
                        <li>Telecommunications and technology companies</li>
                        <li>Banking and financial services</li>
                        <li>Tourism and hospitality sectors</li>
                        <li>Government and public awareness campaigns</li>

                    </ul>
                </div>
            </div>

          </div>

        </section>

        <section id="service-cards" class="blog-section section why-us-section why-out-us-section">

          <div class="container">

            <div class="row gy-4 first-row">


                <div class="col-lg-8 vertical-center">
                    <h4>How DataMySite Delivers DOOH Advertising Success</h4>
                    <p>
                        At DataMySite, we specialize in creating powerful DOOH campaigns across Dubai’s metro network. Our approach combines creativity, strategy, and technology to deliver campaigns that capture attention and drive measurable impact.
                        <br><br>
                        Our process includes:
                    </p>
                    <ul>
                        <li><strong>Strategic Planning</strong> – We identify the best metro stations and screen placements to match your audience and objectives.</li>
                        <li><strong>Creative Design</strong> – Our creative team develops high-quality motion graphics and engaging content tailored for DOOH screens.</li>
                        <li><strong>RTA Coordination and Compliance</strong> – We handle all approvals and ensure your campaign follows Dubai’s advertising regulations.</li>
                        <li><strong>Scheduling and Optimization</strong> – We plan campaign timings to maximize exposure during peak hours.</li>
                        <li><strong>Reporting and Insights</strong> – Using advanced analytics, we track impressions, dwell time, and performance metrics to optimize ROI.</li>

                    </ul>
                    <p>We focus on delivering visibility, creativity, and measurable outcomes that help brands stand out in one of the world’s most dynamic cities.</p>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-3 vertical-center">
                    <img src="{{URL::to('/public/section-images/image47.png')}}" width="100%" alt="Why choose us">
                </div> 
            </div>

          </div>

        </section>

        <section id="service-cards" class="blog-section section striped-section why-us-section why-out-us-section">

          <div class="container">

            <div class="row gy-4 first-row">


                <div class="col-lg-3 mob-not-visible">
                    <img src="{{URL::to('/public/section-images/image47.png')}}" width="100%" alt="Why choose us">
                </div> 
                <div class="col-lg-1"></div>
                <div class="col-lg-8 vertical-center">
                    <h4>Why DOOH in Dubai Metro is the Future of Advertising</h4>
                    <p>
                        As Dubai continues to grow as a global hub for business and tourism, digital advertising within public transit spaces is becoming increasingly powerful. Metro DOOH offers an innovative way to blend storytelling with technology, allowing brands to engage audiences in real time and at scale.
                        <br><br>
                        With flexible scheduling, dynamic visuals, and location-based targeting, it’s clear that DOOH is shaping the future of out-of-home marketing in Dubai.
                    </p>
                    <br>
                    <h4>Partner with DataMySite for Impactful Metro DOOH Advertising</h4>
                    <p>
                        When it comes to DOOH in Dubai Metro, DataMySite delivers complete advertising solutions that combine creativity, innovation, and measurable results. Whether you’re launching a campaign for a local brand or a global enterprise, our team ensures your message stands out in one of the world’s most advanced metro systems.
                        <br><br>
                        Contact DataMySite today to plan your next Digital Out-of-Home campaign in Dubai’s metro network and take your brand visibility to new heights.
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
                                        <span class="badge">&nbsp;</span>What does DOOH mean in advertising?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-10" class="collapse show" aria-labelledby="faqHeading-10" data-parent="#accordion">
                                <div class="card-body">
                                    <p>DOOH stands for Digital Out-of-Home advertising — digital screens and displays used in public areas to show brand messages dynamically.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-11">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-11" data-aria-expanded="false" data-aria-controls="faqCollapse-11">
                                        <span class="badge">&nbsp;</span>How many people can DOOH in Dubai Metro reach?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-11" class="collapse" aria-labelledby="faqHeading-11" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Dubai Metro serves millions of commuters each month, providing consistent visibility across a diverse audience base.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-12">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-12" data-aria-expanded="false" data-aria-controls="faqCollapse-12">
                                        <span class="badge">&nbsp;</span>What file format is needed for DOOH creatives?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-12" class="collapse" aria-labelledby="faqHeading-12" data-parent="#accordion">
                                <div class="card-body">
                                    <p>High-resolution MP4 videos or static images (JPEG, PNG) in specified dimensions are commonly used, depending on the screen type.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-13">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-13" data-aria-expanded="false" data-aria-controls="faqCollapse-13">
                                        <span class="badge">&nbsp;</span>Can DOOH campaigns be changed after launch?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-13" class="collapse" aria-labelledby="faqHeading-13" data-parent="#accordion">
                                <div class="card-body">
                                    <p>
                                        Yes, one of the biggest advantages of DOOH is real-time content management. You can update visuals instantly.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-14">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-14" data-aria-expanded="false" data-aria-controls="faqCollapse-14">
                                        <span class="badge">&nbsp;</span>Is DOOH in Dubai Metro suitable for small businesses?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-14" class="collapse" aria-labelledby="faqHeading-14" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Absolutely. While major brands often dominate metro DOOH, smaller businesses can also advertise cost-effectively by targeting specific stations or running time-based campaigns.</p>
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