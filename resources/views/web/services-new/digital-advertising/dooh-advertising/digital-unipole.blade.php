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
                        <h2>Modernize Your Outdoor Presence</h2>
                        <h4>with High-Impact Digital Unipoles</h4>
                        <br>
                        <p>
                            At DataMySite, we help brands across Dubai, Abu Dhabi, and the UAE leverage digital unipole advertising to boost visibility, brand recall, and engagement. Whether you want to launch a nationwide campaign or promote a local event, digital unipoles give your brand the premium exposure it deserves.
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
                    <h4>What Is Digital Unipole Advertising?</h4>
                    <br>
                    <p class="mb-2">
                        Digital unipoles are large, freestanding LED billboards placed along highways, major intersections, and commercial zones. Unlike static unipoles, digital versions feature high-definition displays that can play videos, animations, and scheduled content, offering more flexibility and creativity for advertisers.
                        <br><br>
                        These displays are usually double-sided, ensuring visibility from both traffic directions, and can be programmed to show different ads throughout the day — maximizing impressions and return on investment (ROI).
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


                <div class="col-lg-3 vertical-center">
                    <img src="{{URL::to('/public/section-images/image107.png')}}" width="100%" alt="Why choose us">
                </div> 
                <div class="col-lg-1"></div>
                <div class="col-lg-8 vertical-center">
                    <h4>Why Choose Digital Unipole Advertising in Dubai and UAE</h4>
                    <br>
                    <ul>
                        <li>
                            <strong>Unmatched Visibility on Key Routes</strong><br>
                            Digital unipoles are strategically positioned on high-traffic highways like Sheikh Zayed Road, Al Khail Road, and Abu Dhabi Corniche, ensuring your brand gets seen by thousands of daily commuters and tourists. The sheer size, brightness, and modern appeal make them unmissable.
                            <br><br>
                        </li>
                        <li>
                            <strong>Dynamic and Engaging Content</strong><br>
                            Digital unipoles allow the use of animated visuals, videos, and live updates — helping your brand stand out from traditional static billboards. You can schedule multiple creatives for different times of the day to reach diverse audience segments.
                            <br><br>
                        </li>
                        <li>
                            <strong>Cost-Effective and Flexible</strong><br>
                            Instead of printing and installing physical banners, digital unipoles let you upload and update your ad instantly, saving time and production costs. You can run time-specific or event-based campaigns seamlessly.
                            <br><br>
                        </li>
                        <li>
                            <strong>Real-Time Campaign Control</strong><br>
                            You can adjust content in real time — change messages for promotions, countdowns, or product launches instantly. This flexibility makes digital unipoles a perfect choice for brands seeking agility in outdoor advertising.
                            <br><br>
                        </li>
                        <li>
                            <strong>Eco-Friendly and Sustainable</strong><br>
                            With LED-based technology, digital unipoles consume less energy and eliminate printing waste, aligning with the UAE’s sustainability vision and smart city initiatives.
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
                    <h4>Features of Digital Unipole Advertising</h4>
                    <ul>
                        <li>Full HD LED Display Panels for crisp visuals and vibrant colors</li>


                        <li>Double-sided visibility ensuring maximum exposure</li>


                        <li>Day and night brightness control for optimal clarity</li>


                        <li>Weather-resistant structure suitable for UAE’s climate</li>


                        <li>Remote content management via cloud-based software</li>


                        <li>Integration with live data feeds (weather, countdowns, social media)</li>
                    </ul>
                    <br>

                    <h4>Industries That Benefit from Digital Unipole Advertising</h4>
                    <p>Digital unipoles cater to a wide range of industries, including:</p>
                    <ul>
                        <li><strong>Automotive</strong> – Showcase new car models or dealership offers with cinematic visuals</li>


                        <li><strong>Real Estate</strong> – Highlight luxury developments and upcoming property launches</li>


                        <li><strong>Retail & Fashion</strong> – Drive awareness for sales, collections, and in-store experiences</li>


                        <li><strong>Technology & Telecom</strong> – Announce new devices, data plans, or services</li>


                        <li><strong>Finance & Insurance</strong> – Reinforce credibility and trust among commuters</li>


                        <li><strong>Tourism & Hospitality</strong> – Attract travelers and guests to UAE destinations</li>


                        <li><strong>Events & Entertainment</strong> – Promote concerts, festivals, and exhibitions</li>
                    </ul>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-2 vertical-center">
                    <img src="{{URL::to('/public/section-images/image108.png')}}" width="100%" alt="Why choose us">
                </div> 
            </div>

          </div>

        </section>


        <section id="service-cards" class="blog-section striped-section section why-us-section why-out-us-section">

          <div class="container">

            <div class="row gy-4 first-row split-block">

                <div class="col-lg-3 vertical-center">
                    <img src="{{URL::to('/public/section-images/image109.png')}}" width="100%" alt="Why choose us">
                </div>

                <div class="col-lg-1"></div>
                <div class="col-lg-8 vertical-center">
                    <h4>Why Digital Unipole Advertising Works Better Than Static Billboards</h4>
                    <ul>
                        <li><strong>Higher Engagement</strong> – Motion graphics naturally capture more attention than still images.


                        <li><strong>Multiple Campaigns, One Location</strong> – Run rotating creatives to feature different products or promotions.


                        <li><strong>Instant Updates</strong> – Adjust campaigns anytime without production delay.


                        <li><strong>Smart Scheduling</strong> – Target audiences based on time-of-day relevance (e.g., morning commuters vs. evening shoppers).


                        <li><strong>Premium Brand Image</strong> – Align your brand with modern, tech-driven advertising innovation.
                    </ul>
                    <br>
                    <h4>Why Choose DataMySite for Digital Unipole Advertising in Dubai</h4>
                    <p>
                        At DataMySite, we combine outdoor media expertise with cutting-edge digital technology to deliver impactful, data-driven campaigns. Our team manages every aspect — from location selection and creative design to campaign monitoring and performance optimization.
                        <br>
                        <strong>Our Services Include:</strong>
                    </p>
                    <ul>
                        <li>Media planning and site selection across Dubai & UAE</li>


                        <li>Creative concept and motion design support</li>


                        <li>Real-time content scheduling and updates</li>


                        <li>Compliance management with UAE advertising regulations</li>


                        <li>Monthly performance reporting and audience analytics</li>

                    </ul>
                    <p>We work closely with city authorities, media partners, and digital screen operators to ensure your campaign delivers measurable exposure and engagement.</p>
                </div> 
            </div>

          </div>

        </section>

        <section id="service-cards" class="blog-section section why-us-section why-out-us-section">

          <div class="container">

            <div class="row gy-4 first-row">


                <div class="col-lg-8 vertical-center">
                    <h4>Top Locations for Digital Unipole Advertising in the UAE</h4>
                    <p>Digital unipoles are strategically positioned to capture maximum attention in high-traffic zones. Some key locations include:</p>
                    <ul>
                        <li><strong>Sheikh Zayed Road (Dubai)</strong> – Prime area for premium brands and luxury advertisers</li>


                        <li><strong>E311 Emirates Road</strong> – Reaches long-distance commuters and logistics routes</li>


                        <li><strong>Al Khail Road (Dubai)</strong> – Popular among business travelers and residents</li>


                        <li><strong>Corniche Road (Abu Dhabi)</strong> – Captures affluent audiences and tourists</li>


                        <li><strong>Sharjah-Dubai Highway</strong> – Ideal for retail, automotive, and tech campaigns</li>


                        <li><strong>Downtown Dubai & Business Bay</strong> – Excellent for lifestyle, hospitality, and real estate brands</li>
                    </ul>
                    <br>
                    <h4>Key Benefits of Partnering with DataMySite</h4>
                    <p>
                        <strong>Access to prime digital locations</strong> across UAE highways and urban centers<br>
                        <strong>Flexible campaign durations</strong> — daily, weekly, or monthly<br>
                        <strong>End-to-end campaign management</strong> from design to deployment<br>
                        <strong>Targeted reach for specific demographics and locations</strong><br>
                        <strong>Seamless integration with your overall digital marketing strategy</strong><br>
                        <br>
                        Whether you’re launching a nationwide campaign or targeting high-income audiences in specific districts, our tailored approach ensures your brand’s visibility is maximized 24/7.

                    </p>
                </div>
                <div class="col-lg-2"></div>
                <div class="col-lg-2 vertical-center">
                    <img src="{{URL::to('/public/section-images/image108.png')}}" width="100%" alt="Why choose us">
                </div> 
            </div>

          </div>

        </section>


        <section id="service-cards" class="blog-section striped-section section why-us-section why-out-us-section">

          <div class="container">

            <div class="row gy-4 first-row split-block">

                <div class="col-lg-2 vertical-center">
                    <img src="{{URL::to('/public/section-images/image109.png')}}" width="100%" alt="Why choose us">
                </div>

                <div class="col-lg-2"></div>
                <div class="col-lg-8 vertical-center">
                    <h4>Digital Unipole Advertising in the Future of DOOH</h4>
                    <p>
                        As the UAE continues to evolve into a smart city hub, the shift from static to digital outdoor advertising is accelerating. By 2026, over 65% of all outdoor media in Dubai is expected to be digital — offering brands more measurable, creative, and interactive opportunities.
                        <br><br>
                        With digital unipoles leading the DOOH transformation, businesses that embrace this medium today gain a competitive advantage in tomorrow’s visual landscape.

                    </p>
                    <br>
                    <h4>Take Your Outdoor Campaigns to the Next Level</h4>
                    <p>
                        Digital Unipole Advertising isn’t just about showing your brand — it’s about owning visibility in Dubai’s most prestigious outdoor spaces.
                        <br><br>
                         Let DataMySite help you design a campaign that shines brighter, engages deeper, and drives real results.
                         <br><br>
                        Contact us today to book your Digital Unipole Advertising space across Dubai and the UAE.>
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
                                        <span class="badge">&nbsp;</span>What is Digital Unipole Advertising?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-10" class="collapse show" aria-labelledby="faqHeading-10" data-parent="#accordion">
                                <div class="card-body">
                                    <p>It’s a form of outdoor media that uses LED digital screens mounted on unipoles along major roads to display high-quality, animated advertisements.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-11">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-11" data-aria-expanded="false" data-aria-controls="faqCollapse-11">
                                        <span class="badge">&nbsp;</span>Where are digital unipoles located in Dubai?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-11" class="collapse" aria-labelledby="faqHeading-11" data-parent="#accordion">
                                <div class="card-body">
                                    <p>They’re found on major highways and high-traffic areas such as Sheikh Zayed Road, Al Khail Road, and Business Bay.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-12">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-12" data-aria-expanded="false" data-aria-controls="faqCollapse-12">
                                        <span class="badge">&nbsp;</span>What is the cost of digital unipole advertising in the UAE?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-12" class="collapse" aria-labelledby="faqHeading-12" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Pricing varies based on location, campaign duration, and display frequency. DataMySite provides flexible packages to suit all budgets.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-13">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-13" data-aria-expanded="false" data-aria-controls="faqCollapse-13">
                                        <span class="badge">&nbsp;</span>Can I change my ad content during the campaign?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-13" class="collapse" aria-labelledby="faqHeading-13" data-parent="#accordion">
                                <div class="card-body">
                                    <p>
                                        Yes. Digital unipoles support instant updates, allowing you to modify creatives anytime without physical installation.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-14">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-14" data-aria-expanded="false" data-aria-controls="faqCollapse-14">
                                        <span class="badge">&nbsp;</span>Why should I choose DataMySite for my campaign?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-14" class="collapse" aria-labelledby="faqHeading-14" data-parent="#accordion">
                                <div class="card-body">
                                    <p>We handle the full process — from strategy, design, and media buying to performance tracking — ensuring maximum brand exposure and ROI.</p>
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