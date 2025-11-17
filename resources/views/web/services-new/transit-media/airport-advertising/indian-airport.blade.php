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
                        <h1>&#10687; {{$subservice->name}}</h1>
                        <h2>Expand Your Brand Reach Across</h2>
                        <h4>South Asia with Indian Airport Advertising</h4>
                        <br>
                        <p>
                            At DataMySite, we help UAE-based and international brands plan, execute, and manage high-impact airport advertising campaigns across major Indian airports. Whether your goal is brand awareness, regional visibility, or audience engagement, airport advertising in India delivers wide coverage, long dwell time, and a strong return on investment.

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
                <div class="col-lg-12">
                    
                    <h4>Why Advertise in Indian Airports?</h4>
                    <p class="mb-0">
                        India’s airports handle over 150 million passengers annually, making them some of the busiest in the world. From luxury travelers to frequent flyers and business professionals, the diversity of the audience makes airport media advertising in India a powerful marketing opportunity for regional and global brands.
                    </p>
                </div>
                <div class="col-lg-6 vertical-center" data-aos="fade-up" data-aos-delay="100">
                    <p>Here are the top reasons to choose Indian Airport Advertising for your next campaign:</p>
                    <div class="faq " id="accordion">
                        <div class="card">
                            <div class="card-header" id="faqHeading-20">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-20" data-aria-expanded="true" data-aria-controls="faqCollapse-20">
                                        <span class="badge">&nbsp;</span>Massive Footfall
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-20" class="collapse" aria-labelledby="faqHeading-20" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Major airports like Delhi (DEL), Mumbai (BOM), Bengaluru (BLR), and Hyderabad (HYD) attract millions of passengers every month, ensuring unmatched brand visibility.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-21">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-21" data-aria-expanded="false" data-aria-controls="faqCollapse-21">
                                        <span class="badge">&nbsp;</span>Growing Aviation Sector
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-21" class="collapse" aria-labelledby="faqHeading-21" data-parent="#accordion">
                                <div class="card-body">
                                    <p>India’s expanding domestic and international flight network means continuous exposure to new audiences.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-22">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-22" data-aria-expanded="false" data-aria-controls="faqCollapse-22">
                                        <span class="badge">&nbsp;</span>Targeted Regional Coverage
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-22" class="collapse" aria-labelledby="faqHeading-22" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Advertising in specific airports (e.g., Kochi, Chennai, Kolkata) helps brands target audiences from certain regions or linguistic markets.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-24">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-24" data-aria-expanded="false" data-aria-controls="faqCollapse-24">
                                        <span class="badge">&nbsp;</span>High Dwell Time
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-24" class="collapse" aria-labelledby="faqHeading-24" data-parent="#accordion">
                                <div class="card-body">
                                    <p>
                                        Travelers spend considerable time at airports during check-in, security, and boarding — increasing ad exposure.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-25">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-25" data-aria-expanded="false" data-aria-controls="faqCollapse-25">
                                        <span class="badge">&nbsp;</span>Cost-Effective Media Rates
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-25" class="collapse" aria-labelledby="faqHeading-25" data-parent="#accordion">
                                <div class="card-body">
                                    <p>
                                        Compared to major hubs like Dubai or London, airport advertising in India offers more affordable pricing with similar or higher reach.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-26">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-26" data-aria-expanded="false" data-aria-controls="faqCollapse-26">
                                        <span class="badge">&nbsp;</span>Strong UAE-India Connection
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-26" class="collapse" aria-labelledby="faqHeading-26" data-parent="#accordion">
                                <div class="card-body">
                                    <p>
                                        With thousands of flights connecting the UAE and India weekly, brands can maintain consistent visibility across both markets.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 vertical-center">
                    <iframe class="service-iframe " src="https://www.youtube.com/embed/Slt71QddNGc?si=Bn768ai2rsCC0YBI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
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
                    <h4>Major Airports for Advertising in India</h4>
                    <p>At DataMySite, we provide advertising access to India’s busiest and most strategic airports, helping you choose the right locations based on your marketing objectives.</p>
                </div>
                <div class="col-lg-4">
                    <h5>Delhi Indira Gandhi International Airport (DEL)</h5>
                    <p>
                        As India’s largest and busiest airport, DEL handles over 65 million passengers annually. Advertising here offers exposure to international travelers, business professionals, and tourists heading to or from the UAE, Europe, and Asia.
                    </p>
                </div>
                <div class="col-lg-4">
                    <h5>Mumbai Chhatrapati Shivaji Maharaj International Airport (BOM)</h5>
                    <p>Known as India’s financial capital, Mumbai Airport is ideal for brands targeting premium business travelers and high-income audiences.</p>
                </div>
                <div class="col-lg-4">
                    <h5>Bengaluru Kempegowda International Airport (BLR)</h5>
                    <p>
                        A major tech and innovation hub, Bengaluru Airport attracts young professionals, entrepreneurs, and business executives. Perfect for technology, fintech, and lifestyle brands.
                    </p>
                </div>
                <div class="col-lg-6">
                    <h5>Hyderabad Rajiv Gandhi International Airport (HYD)</h5>
                    <p>
                        Strategically located in southern India, HYD Airport offers strong connectivity to the UAE and GCC region, making it ideal for brands targeting cross-border audiences.
                    </p>
                </div>  


                <div class="col-lg-6">
                    <h5>Kochi and Chennai Airports</h5>
                    <p>
                        These airports serve as major gateways for South Indian travelers to the UAE. Advertising here ensures visibility among frequent Gulf passengers, tourists, and expatriates.
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
                    <h4>Why Indian Airport Advertising Works for UAE Brands</h4>
                    <p>
                        With thousands of daily travelers commuting between India and the UAE, airport advertising in India allows Dubai- and Abu Dhabi-based brands to expand their reach into a high-value market.
                        <br>
                        Here’s why this connection is particularly powerful:
                    </p>
                    <ul>
                        <li><strong>High UAE Traveler Volume</strong>: Many passengers flying from India are headed to Dubai, Sharjah, or Abu Dhabi.</li>
                        <li><strong>Brand Familiarity</strong>: UAE-based brands already have strong recognition among Indian audiences, enhancing ad recall.</li>
                        <li><strong>Cross-Border Consistency</strong>: Consistent campaigns across UAE and Indian airports build trust and brand continuity.</li>
                        <li><strong>Cost-Effective Regional Expansion</strong>: Brands can reach millions of potential customers across multiple cities at a fraction of international advertising costs.</li>
                    </ul>
                </div>
                <div class="col-lg-2 vertical-center">
                    <img src="{{URL::to('/public/section-images/image41.png')}}" width="100%" alt="Why choose us">
                </div> 

                <div class="col-lg-5 vertical-center">
                    <h4>Industries That Benefit Most from Indian Airport Advertising</h4>
                    <ul>
                        <li>Travel and tourism – airlines, hotels, and travel agencies</li>
                        <li>Education and overseas training institutes</li>
                        <li>Finance, fintech, and banking services</li>
                        <li>Real estate developers targeting NRI investors</li>
                        <li>Luxury and retail brands</li>
                        <li>Healthcare and wellness brands</li>
                        <li>Technology and telecom companies</li>

                    </ul>
                </div>
            </div>

          </div>

        </section>



        
        <section id="service-cards" class="blog-section section striped-section pr-icon-section">

          <div class="container">

            <div class="row gy-4 first-row outdoor-service-col-section">

                <div class="col-lg-12" data-aos="fade-up" data-aos-delay="100">
                    <h4>Types of Airport Advertising in India</h4>
                    <p>Our Indian Airport Advertising solutions are designed to fit different goals, budgets, and creative requirements.</p>
                </div>
                <div class="col-lg-4">
                    <h5>Digital LED Screens and Video Walls</h5>
                    <p>
                        High-resolution digital screens located in arrival halls, terminals, and departure areas ensure your brand captures attention through motion and light.
                    </p>
                </div>
                <div class="col-lg-4">
                    <h5>Static Billboards and Backlit Panels</h5>
                    <p>Ideal for large-format visibility, static displays near check-in counters, lounges, and gates offer continuous, high-impact exposure.</p>
                </div>
                <div class="col-lg-4">
                    <h5>Luggage Trolley Branding</h5>
                    <p>
                        Trolleys move throughout terminals and parking areas, providing consistent exposure to every traveler using airport facilities.
                    </p>
                </div>
                <div class="col-lg-4">
                    <h5>Baggage Claim and Arrival Area Ads</h5>
                    <p>
                        Reach passengers during waiting periods with impactful visuals placed near baggage belts and customs exits.
                    </p>
                </div> 
                <div class="col-lg-4">
                    <h5>Check-In Zone Advertising</h5>
                    <p>
                        Strategic placements near counters and queues ensure that travelers see your message multiple times before boarding.
                    </p>
                </div> 
                <div class="col-lg-4">
                    <h5>Airport Lounge and VIP Area Branding</h5>
                    <p>
                        Premium visibility in business and first-class lounges—ideal for luxury, finance, and hospitality brands.
                    </p>
                </div>  


                <div class="col-lg-12">
                    <h5>Outdoor Billboards and Airport Approach Roads</h5>
                    <p>
                        Capture both arriving and departing passengers with striking visuals placed along key access roads leading to airport terminals.
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


                <div class="col-lg-3 vertical-center">
                    <img src="{{URL::to('/public/section-images/image47.png')}}" width="100%" alt="Why choose us">
                </div> 
                <div class="col-lg-1"></div>
                <div class="col-lg-8 vertical-center">
                    <h4>Why Choose DataMySite for Indian Airport Advertising</h4>
                    <p>
                        At DataMySite, we bring together deep regional expertise, strategic partnerships, and creative excellence to deliver campaigns that perform. We work closely with airport media owners across India to secure premium locations, manage approvals, and ensure smooth campaign execution.
                        <br>
                        <strong>Our Capabilities Include:</strong>

                    </p>
                    <ul>
                       <li> Direct access to advertising spaces in all major Indian airports</li>
                        <li>Expertise in digital and static airport advertising formats</li>
                        <li>Customized campaigns for UAE and global brands targeting India</li>
                        <li>End-to-end service: from concept to installation and reporting</li>
                        <li>Data-driven insights and measurable campaign performance</li>

                    </ul>
                    <p>We understand cultural nuances, audience preferences, and regional variations that help your message resonate with Indian travelers.</p>
                </div>
            </div>

          </div>

        </section>


        <section id="service-cards" class="blog-section section striped-section why-us-section why-out-us-section">

          <div class="container">

            <div class="row gy-4 first-row">


                <div class="col-lg-8 vertical-center">
                    <h4>Key Advantages of Airport Advertising in India</h4>
                    <ul>
                        <li><strong>Uninterrupted Exposure</strong>: 24/7 visibility in an environment where people are receptive and attentive.</li>
                        <li><strong>High Brand Recall</strong>: Large-format media ensures strong memory retention.</li>
                        <li><strong>Multi-City Reach</strong>: Run synchronized campaigns across several airports for consistent branding.</li>
                        <li><strong>Premium Brand Association</strong>: Airports enhance credibility and brand trust.</li>
                        <li><strong>Localized Targeting</strong>: Choose airports and media types that align with your target demographic.</li>
                    </ul>
                    <br>
                    <h4>Final Thoughts</h4>
                    <p>
                        Indian Airport Advertising provides an incredible opportunity for brands in Dubai and across the UAE to reach a massive and diverse audience across South Asia. With high dwell times, affordable media rates, and international traveler exposure, it’s one of the most strategic forms of out-of-home (OOH) marketing.
                        <br><br>
                        At DataMySite, we help you plan, execute, and monitor your Indian airport advertising campaigns seamlessly — ensuring your brand achieves maximum visibility and impact across key airports in India. Whether it’s digital innovation, luxury branding, or cross-border marketing, we make your campaign stand out in front of millions of travelers every day.
                        <br><br>
                        Partner with DataMySite today to expand your brand presence from the UAE to India and beyond.
                    </p>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-3 vertical-center">
                    <img src="{{URL::to('/public/section-images/image47.png')}}" width="100%" alt="Why choose us">
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
                                        <span class="badge">&nbsp;</span>Which are the best airports in India for advertising?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-10" class="collapse show" aria-labelledby="faqHeading-10" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Delhi, Mumbai, Bengaluru, Hyderabad, Chennai, and Kochi are among the most effective due to high traffic and strategic connectivity with the UAE.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-11">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-11" data-aria-expanded="false" data-aria-controls="faqCollapse-11">
                                        <span class="badge">&nbsp;</span>How much does Indian airport advertising cost?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-11" class="collapse" aria-labelledby="faqHeading-11" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Pricing varies by airport, format, and duration. However, India offers some of the most cost-efficient airport advertising rates in Asia.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-12">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-12" data-aria-expanded="false" data-aria-controls="faqCollapse-12">
                                        <span class="badge">&nbsp;</span>Can UAE-based businesses advertise directly in Indian airports?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-12" class="collapse" aria-labelledby="faqHeading-12" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Yes. DataMySite facilitates cross-border advertising partnerships and manages the process from Dubai or remotely.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-13">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-13" data-aria-expanded="false" data-aria-controls="faqCollapse-13">
                                        <span class="badge">&nbsp;</span>What formats work best in Indian airports?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-13" class="collapse" aria-labelledby="faqHeading-13" data-parent="#accordion">
                                <div class="card-body">
                                    <p>
                                        Digital LED screens, static wall wraps, and baggage claim ads are most effective due to high visibility and dwell time.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-14">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-14" data-aria-expanded="false" data-aria-controls="faqCollapse-14">
                                        <span class="badge">&nbsp;</span>How long should a campaign run for best results?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-14" class="collapse" aria-labelledby="faqHeading-14" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Most successful campaigns run for at least one to three months to maximize exposure and audience recall.</p>
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