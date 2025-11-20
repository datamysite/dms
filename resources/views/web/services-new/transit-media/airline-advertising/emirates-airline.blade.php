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
                        <h2>Reach Global Audiences</h2>
                        <h4>with Emirates Airline Advertising in Dubai</h4>
                        <br>
                        <p>
                            At DataMySite, we help businesses leverage the unmatched reach of Emirates Airline Advertising — from inflight branding and digital displays to airport lounges and seat-back promotions — connecting your message with premium travelers across the UAE and beyond.
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
                    <h4>What is Emirates Airline Advertising?</h4>
                    <br>
                    <p>
                        Emirates Airline Advertising refers to marketing and brand placements across Emirates’ various touchpoints — including aircraft interiors, inflight entertainment screens, digital content, airport lounges, boarding passes, and check-in areas.
                        <br><br>
                        As one of the world’s most recognized and respected airlines, Emirates carries millions of passengers every month through its global hub at Dubai International Airport (DXB). This makes it an incredibly powerful platform for brands that want to reach business travelers, high-net-worth individuals, tourists, and decision-makers from around the world.
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

        
        <section id="service-cards" class="blog-section section striped-section pr-icon-section">

          <div class="container">

            <div class="row gy-4 first-row outdoor-service-col-section">

                <div class="col-lg-12" data-aos="fade-up" data-aos-delay="100">
                    <h4>Emirates Airline Advertising Opportunities</h4>
                    <p>Emirates offers diverse and high-impact ad options, allowing you to tailor your campaign for maximum effectiveness. At DataMySite, we design and manage campaigns across all Emirates advertising channels:</p>
                </div>
                <div class="col-lg-4">
                    <h5>Inflight Video & Digital Advertising</h5>
                    <p>
                        Showcase your brand with ads on Emirates’ award-winning inflight entertainment system, ICE. Your ad plays directly on seatback screens — engaging passengers in a distraction-free environment.
                    </p>
                </div>
                <div class="col-lg-4">
                    <h5>Inflight Magazine Advertising</h5>
                    <p>Advertise in Open Skies, Emirates’ premium inflight magazine, featuring lifestyle, luxury, and travel content. It’s read by millions of passengers monthly — an ideal format for upscale and lifestyle brands.</p>
                </div>
                <div class="col-lg-4">
                    <h5>Airport Lounge Advertising</h5>
                    <p>
                        Place your brand in Emirates’ exclusive business and first-class lounges at Dubai International Airport. These lounges host some of the most affluent travelers globally — providing elite exposure.
                    </p>
                </div>
                <div class="col-lg-4">
                    <h5>Cabin Branding & Seatback Ads</h5>
                    <p>
                        Engage travelers with headrest covers, tray table branding, and seatback promotions. These formats keep your brand front and center throughout the flight.
                    </p>
                </div>  


                <div class="col-lg-4">
                    <h5>Boarding Pass & Ticket Advertising</h5>
                    <p>
                        Digital and printed boarding passes offer an additional layer of visibility — connecting with passengers even before takeoff.
                    </p>
                </div> 


                <div class="col-lg-4">
                    <h5>Baggage Claim & Arrival Area Ads</h5>
                    <p>
                        Create lasting impact as passengers disembark. Ads at arrival zones and baggage claims reach travelers when they’re most alert and ready to act.
                    </p>
                </div> 


                <div class="col-lg-12">
                    <h5>Digital Advertising with Emirates.com</h5>
                    <p>
                        Target online travelers booking flights on emirates.com with display banners and remarketing campaigns. This enables precision targeting based on demographics, destinations, and travel class.
                    </p>
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
                <div class="col-lg-12 mb-0">
                    
                </div>
                <div class="col-lg-5 vertical-center">
                    <h4>Emirates Advertising Across the Passenger Journey</h4>
                    <p>
                        DataMySite helps you craft a strategy that reaches travelers at every touchpoint:
                    </p>
                    <ul>
                        <li><strong>Pre-Flight</strong>: Online booking ads, ticket confirmations, and email marketing placements.</li>
                        <li><strong>During Check-In</strong>: Digital screens, banners, and counter displays at Emirates terminals.</li>
                        <li><strong>In-Flight</strong>: Video ads, seat branding, and magazine features.</li>
                        <li><strong>Post-Flight</strong>: Arrival area displays and baggage claim exposure.</li>
                    </ul>
                    <p>This full-journey strategy ensures that your brand connects with audiences multiple times during their travel experience — boosting recognition and recall.</p>
                </div>
                <div class="col-lg-2 vertical-center">
                    <img src="{{URL::to('/public/section-images/image123.png')}}" width="100%" alt="Why choose us">
                </div> 

                <div class="col-lg-5 vertical-center">
                    <h4>Benefits of Emirates Airline Advertising</h4>
                    <ul>
                        <li>
                            <strong>Global Exposure from Dubai’s Gateway</strong><br>
                            Emirates connects Dubai to the world, giving your brand exposure to travelers from over 100 countries.
                        </li>
                        <li>
                            <strong>High Engagement & Attention Span</strong><br>
                            Passengers spend an average of 6–8 hours on long-haul flights — providing uninterrupted attention for your brand.
                        </li>
                        <li>
                            <strong>Luxury Brand Positioning</strong><br>
                            Emirates’ premium brand reputation enhances your credibility and image.
                        </li>
                        <li>
                            <strong>Targeted Marketing</strong><br>
                            Choose specific flight routes, audience demographics, and regions to ensure precise targeting.
                        </li>
                        <li>
                            <strong>Cross-Platform Integration</strong><br>
                            Combine offline airline ads with digital remarketing to build a 360° campaign.
                        </li>
                    </ul>
                </div>
            </div>

          </div>

        </section>



        
        <section id="service-cards" class="blog-section section striped-section pr-icon-section">

          <div class="container">

            <div class="row gy-4 first-row outdoor-service-col-section">

                <div class="col-lg-12" data-aos="fade-up" data-aos-delay="100">
                    <h4>Why Choose Emirates Airline Advertising?</h4>
                    <p>
                        Emirates is not just an airline — it’s a luxury travel brand that represents quality, innovation, and global prestige. Advertising with Emirates positions your brand alongside these same values.
                        <br>
                        Here’s why leading brands choose this platform:
                    </p>
                </div>
                <div class="col-lg-6">
                    <h5>Premium Audience Reach</h5>
                    <p>
                        Emirates passengers include high-income professionals, frequent business travelers, and international tourists. Advertising with Emirates means reaching a global audience that spends, influences, and connects.
                    </p>
                </div>
                <div class="col-lg-6">
                    <h5>Unmatched Global Network</h5>
                    <p>With flights to over 150 destinations across six continents, Emirates gives brands access to a worldwide audience — from Dubai to London, New York, Mumbai, and Sydney.</p>
                </div>
                <div class="col-lg-6">
                    <h5>Brand Association with Excellence</h5>
                    <p>
                        Align your business with one of the world’s most trusted airline brands. Emirates stands for luxury and reliability, and your message benefits from that association.
                    </p>
                </div>
                <div class="col-lg-6">
                    <h5>Multiple Touchpoints for Engagement</h5>
                    <p>
                        Whether onboard, in lounges, at the airport, or online, Emirates offers a range of innovative ad formats to keep your brand visible throughout the passenger journey.
                    </p>
                </div> 
                <div class="col-lg-12">
                    <h5>Extended Exposure Time</h5>
                    <p>
                        Travelers engage with Emirates’ inflight entertainment and magazines for hours — far longer than most digital ads or billboards.
                    </p>
                </div> 
 
            </div>
            <div class="uni-strip-see-more">
                <button data-class="outdoor-service-col-section">See More</button>
            </div>

          </div>

        </section>


    
        <section id="service-cards" class="blog-section  section why-us-section why-out-us-section">

          <div class="container">

            <div class="row gy-4 first-row split-block">


                <div class="col-lg-2 vertical-center">
                    <img src="{{URL::to('/public/section-images/image124.png')}}" width="100%" alt="Why choose us">
                </div> 
                <div class="col-lg-1"></div>
                <div class="col-lg-9 vertical-center">
                    <h4>Why Choose DataMySite for Emirates Airline Advertising?</h4>
                    <p>
                        As a leading advertising agency in Dubai, DataMySite has direct partnerships with key airline media networks and airport authorities, ensuring smooth campaign execution.
                        <br>
                        <strong>We offer:</strong>

                    </p>
                    <ul>
                        <li>Access to exclusive Emirates ad placements</li>
                        <li>Strategic planning & creative design support</li>
                        <li>Transparent pricing and reporting</li>
                        <li>End-to-end campaign management</li>
                        <li>Personalized media consultation for global reach</li>

                    </ul>
                    <p>Our goal is to make your brand visible, memorable, and relevant in front of millions of Emirates travelers worldwide.</p>
                </div>
            </div>

          </div>

        </section>


        <section id="service-cards" class="blog-section section striped-section why-us-section why-out-us-section">

          <div class="container">

            <div class="row gy-4 first-row">


                <div class="col-lg-8 vertical-center">
                    <h4>Who Should Advertise on Emirates?</h4>
                    <p>Emirates Airline Advertising works for businesses that want to reach a high-value, international audience, including:</p>
                    <ul>
                        <li><strong>Luxury & Lifestyle Brands</strong> – Fashion, watches, jewelry, and perfumes.</li>
                        <li><strong>Real Estate Developers</strong> – Promoting global investment opportunities.</li>
                        <li><strong>Financial Institutions</strong> – Banks, credit cards, and insurance brands.</li>
                        <li><strong>Tourism Boards</strong> – Promoting destinations and experiences.</li>
                        <li><strong>Technology Companies</strong> – Reaching professionals and business travelers.</li>
                        <li><strong>Education Providers</strong> – International universities and online programs.</li>
                        <li><strong>Healthcare & Wellness Brands</strong> – Medical tourism and premium healthcare services.</li>
                    </ul>
                    <br>
                    <h4>Final Thoughts</h4>
                    <p>
                        Advertising with Emirates Airline is more than just visibility — it’s an opportunity to align your brand with excellence, prestige, and global connectivity. With passengers from every corner of the world, your message travels farther, lasts longer, and resonates stronger.
                        <br><br>
                        Partner with DataMySite to plan your next Emirates Airline Advertising campaign and take your brand to new heights — quite literally.
                        <br><br>
                        Contact us today to explore Emirates ad placements and start reaching premium global audiences from the heart of Dubai.
                    </p>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-3 vertical-center">
                    <img src="{{URL::to('/public/section-images/image125.png')}}" width="100%" alt="Why choose us">
                </div> 
            </div>

          </div>

        </section>


        <section id="service-cards" class="blog-section section  pr-blogs-section">

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

        <section id="service-cards" class="blog-section section striped-section  faq-new-section">

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
                                        <span class="badge">&nbsp;</span>How much does Emirates Airline Advertising cost?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-10" class="collapse show" aria-labelledby="faqHeading-10" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Advertising costs vary depending on the format (inflight, digital, or lounge), duration, and target routes. DataMySite provides flexible packages suited to your goals and budget.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-11">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-11" data-aria-expanded="false" data-aria-controls="faqCollapse-11">
                                        <span class="badge">&nbsp;</span>Can I target specific routes or destinations?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-11" class="collapse" aria-labelledby="faqHeading-11" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Yes. Campaigns can be customized based on regions, such as GCC, Asia, or Europe routes, to ensure maximum relevance.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-12">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-12" data-aria-expanded="false" data-aria-controls="faqCollapse-12">
                                        <span class="badge">&nbsp;</span>How long should a campaign run?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-12" class="collapse" aria-labelledby="faqHeading-12" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Most brands choose a 1–3 month duration for brand awareness campaigns, but longer placements build stronger recall and engagement.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-13">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-13" data-aria-expanded="false" data-aria-controls="faqCollapse-13">
                                        <span class="badge">&nbsp;</span>Is Emirates Airline Advertising suitable for small businesses?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-13" class="collapse" aria-labelledby="faqHeading-13" data-parent="#accordion">
                                <div class="card-body">
                                    <p>
                                        Absolutely. DataMySite offers scalable options so both global corporations and local brands can advertise with Emirates.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-14">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-14" data-aria-expanded="false" data-aria-controls="faqCollapse-14">
                                        <span class="badge">&nbsp;</span>How can I measure performance?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-14" class="collapse" aria-labelledby="faqHeading-14" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Depending on your ad type, metrics like impressions, engagement, and reach are tracked and shared in post-campaign reports.</p>
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