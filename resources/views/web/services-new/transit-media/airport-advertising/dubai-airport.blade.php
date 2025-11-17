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
                        <h2>Reach Millions of Travelers</h2>
                        <h4>with Premium Dubai Airport Advertising</h4>
                        <br>
                        <p>
                            At DataMySite, we specialize in creating impactful airport advertising campaigns in Dubai that allow brands to engage high-value audiences through visually stunning and strategically placed media. Whether you want to promote a luxury brand, introduce a new product, or strengthen your global image, advertising at Dubai International Airport ensures unmatched visibility and brand recall.
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
                    
                    <h4>Why Choose Dubai Airport for Advertising?</h4>
                    <p class="mb-0">
                        Dubai Airport is more than just a transportation hub — it’s a lifestyle experience. Travelers spend a significant amount of time navigating through its terminals, duty-free areas, lounges, and check-in counters. This gives advertisers a perfect opportunity to communicate their message repeatedly and effectively.
                        <br>
                        Here are some of the main reasons why advertising at Dubai Airport is an invaluable investment:
                    </p>
                </div>
                <div class="col-lg-6 vertical-center" data-aos="fade-up" data-aos-delay="100">
                    <div class="faq " id="accordion">
                        <div class="card">
                            <div class="card-header" id="faqHeading-20">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-20" data-aria-expanded="true" data-aria-controls="faqCollapse-20">
                                        <span class="badge">&nbsp;</span>Massive Passenger Traffic
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-20" class="collapse" aria-labelledby="faqHeading-20" data-parent="#accordion">
                                <div class="card-body">
                                    <p>With over 80 million passengers annually, DXB provides one of the largest captive audiences in the world.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-21">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-21" data-aria-expanded="false" data-aria-controls="faqCollapse-21">
                                        <span class="badge">&nbsp;</span>High Dwell Time
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-21" class="collapse" aria-labelledby="faqHeading-21" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Passengers spend an average of 2–3 hours inside terminals, which translates to multiple exposure opportunities.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-22">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-22" data-aria-expanded="false" data-aria-controls="faqCollapse-22">
                                        <span class="badge">&nbsp;</span>Diverse Global Audience
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-22" class="collapse" aria-labelledby="faqHeading-22" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Reach travelers from more than 100 nationalities—tourists, business travelers, families, and expatriates.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-24">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-24" data-aria-expanded="false" data-aria-controls="faqCollapse-24">
                                        <span class="badge">&nbsp;</span>Premium Brand Image
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-24" class="collapse" aria-labelledby="faqHeading-24" data-parent="#accordion">
                                <div class="card-body">
                                    <p>
                                        Being showcased in a world-class airport like DXB enhances your brand’s prestige and trust.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-25">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-25" data-aria-expanded="false" data-aria-controls="faqCollapse-25">
                                        <span class="badge">&nbsp;</span>Strategic Locations
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-25" class="collapse" aria-labelledby="faqHeading-25" data-parent="#accordion">
                                <div class="card-body">
                                    <p>
                                        Ads can be placed in high-traffic areas such as baggage claims, check-in zones, corridors, lounges, and arrival gates for maximum visibility.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
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
                    <h4>Types of Advertising at Dubai Airport</h4>
                    <p>DataMySite offers a comprehensive range of Dubai Airport Advertising options tailored to different campaign goals and budgets. Whether you’re looking for large-scale visibility or digital innovation, we have the perfect format for your brand.</p>
                </div>
                <div class="col-lg-4">
                    <h5>Digital Screens and LED Displays</h5>
                    <p>
                        Dynamic and eye-catching, digital airport screens offer maximum engagement. Located in key areas like terminals, waiting zones, and departure lounges, they attract both local and international travelers.
                    </p>
                </div>
                <div class="col-lg-4">
                    <h5>Static Billboards and Wall Wraps</h5>
                    <p>For brands that want a lasting impression, static advertising formats like billboards, wall wraps, and backlit posters are ideal. Their grand size and strategic positioning make them unmissable.</p>
                </div>
                <div class="col-lg-4">
                    <h5>Baggage Claim Area Ads</h5>
                    <p>
                        Passengers often spend several minutes waiting at baggage belts, providing a perfect opportunity to showcase your brand in an uncluttered environment.
                    </p>
                </div>
                <div class="col-lg-4">
                    <h5>Check-in Area and Departure Halls</h5>
                    <p>
                        High-traffic zones where every traveler passes through, ideal for brand visibility. These placements work well for travel, finance, luxury, and lifestyle brands.
                    </p>
                </div>  


                <div class="col-lg-4">
                    <h5>Duty-Free Area Advertising</h5>
                    <p>
                        Dubai Duty-Free is one of the busiest shopping areas in the world. Advertising here gives brands exposure to millions of travelers looking for premium products.
                    </p>
                </div> 


                <div class="col-lg-4">
                    <h5>Airport Lounge Branding</h5>
                    <p>
                        Exclusive access to premium travelers through business and first-class lounges. Perfect for high-end brands looking to reach elite audiences.
                    </p>
                </div> 


                <div class="col-lg-12">
                    <h5>Outdoor Airport Roads and Parking Zones</h5>
                    <p>
                        From airport entrances to taxi stands and parking lots, these outdoor locations give your brand visibility even before travelers enter the terminal.
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
                    <h4>Advantages of Dubai Airport Advertising</h4>
                    <p>
                        Advertising at Dubai International Airport provides brands with both prestige and performance. Here’s why:
                    </p>
                    <ul>
                        <li><strong>Global Reach</strong>: Engage audiences from all corners of the world.</li>
                        <li><strong>24/7 Visibility</strong>: Airports never sleep—your ad is always on display.</li>
                        <li><strong>Targeted Exposure</strong>: Ideal for luxury, travel, tech, and lifestyle sectors.</li>
                        <li><strong>High Conversion Potential</strong>: Airport audiences are typically more responsive and open to brand messaging.</li>
                       <li> <strong>Enhanced Credibility</strong>: Being visible in a world-renowned airport adds authority and recognition to your brand.</li>
                    </ul>
                </div>
                <div class="col-lg-2 vertical-center">
                    <img src="{{URL::to('/public/section-images/image41.png')}}" width="100%" alt="Why choose us">
                </div> 

                <div class="col-lg-5 vertical-center">
                    <h4>Ideal Industries for Dubai Airport Advertising</h4>
                    <p>Airport advertising in Dubai suits a wide variety of industries:</p>
                    <ul>
                        <li>Airlines and travel agencies</li>
                        <li>Luxury and fashion brands</li>
                        <li>Financial institutions and real estate developers</li>
                        <li>Automotive and technology companies</li>
                        <li>Hotels, resorts, and tourism boards</li>
                        <li>Retail and FMCG brands targeting global exposure</li>


                    </ul>
                </div>
            </div>

          </div>

        </section>



    
        <section id="service-cards" class="blog-section striped-section  section why-us-section why-out-us-section">

          <div class="container">

            <div class="row gy-4 first-row split-block">


                <div class="col-lg-3 vertical-center">
                    <img src="{{URL::to('/public/section-images/image47.png')}}" width="100%" alt="Why choose us">
                </div> 
                <div class="col-lg-1"></div>
                <div class="col-lg-8 vertical-center">
                    <h4>Why Choose DataMySite for Dubai Airport Advertising?</h4>
                    <p>
                        At DataMySite, we combine local expertise with global standards to create airport advertising campaigns that deliver results. We partner directly with airport media owners in Dubai to secure the most strategic ad placements at competitive rates.
                        <br>
                        Our team manages the complete process — from concept development to final reporting — ensuring seamless execution.
                        <br>
                        <strong>Our Services Include:</strong>

                    </p>
                    <ul>
                        <li>Media planning and strategy</li>
                        <li>Creative design and adaptation for airport formats</li>
                        <li>Coordination with airport authorities</li>
                        <li>Installation and monitoring</li>
                        <li>Post-campaign performance analytics</li>

                    </ul>
                    <p>We focus on making your brand message memorable and relevant, ensuring your campaign stands out in one of the world’s most competitive advertising environments.</p>
                    <br>
                    <h4>Benefits of Partnering with DataMySite</h4>
                    <ul>
                        <li>Access to prime locations across Dubai International Airport</li>
                        <li>High-quality creative and printing support</li>
                        <li>Transparent pricing and flexible campaign durations</li>
                        <li>Expertise in both digital and static formats</li>
                        <li>Proven experience in running successful airport ad campaigns</li>

                    </ul>
                </div>
            </div>

          </div>

        </section>


        <section id="service-cards" class="blog-section section why-us-section why-out-us-section">

          <div class="container">

            <div class="row gy-4 first-row">


                <div class="col-lg-8 vertical-center">
                    <h4>Campaign Planning and Execution</h4>
                    <p>Our process for Dubai Airport advertising includes:</p>
                    <ul>
                        <li><strong>Consultation & Strategy</strong>: Understanding your brand objectives, target audience, and campaign duration.</li>
                        <li><strong>Media Selection</strong>: Choosing the right locations — digital, static, or mixed — based on traffic and visibility.</li>
                        <li><strong>Creative Design</strong>: Developing visuals that align with airport aesthetics and brand tone.</li>
                        <li><strong>Execution & Monitoring</strong>: Managing installation, compliance, and regular performance checks.</li>
                        <li><strong>Reporting & Optimization</strong>: Delivering post-campaign analytics to measure visibility and ROI.</li>
                    </ul>
                    <br>
                    <h4>Final Thoughts</h4>
                    <p>
                        Dubai Airport Advertising is a premium opportunity for brands to showcase their message to millions of travelers in one of the world’s busiest and most influential airports. With the right creative strategy and placement, your campaign can achieve unmatched exposure, global recognition, and brand prestige.
                        <br><br>
                        Partner with DataMySite, and let us craft an airport advertising strategy that puts your brand on the global stage.
                    </p>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-3 vertical-center">
                    <img src="{{URL::to('/public/section-images/image47.png')}}" width="100%" alt="Why choose us">
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

        <section id="service-cards" class="blog-section section   faq-new-section">

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
                                        <span class="badge">&nbsp;</span>How much does it cost to advertise at Dubai Airport?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-10" class="collapse show" aria-labelledby="faqHeading-10" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Pricing depends on the format, size, and location. Digital screens and large wall wraps near terminals or duty-free areas tend to have premium rates.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-11">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-11" data-aria-expanded="false" data-aria-controls="faqCollapse-11">
                                        <span class="badge">&nbsp;</span>What types of businesses benefit most from Dubai Airport advertising?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-11" class="collapse" aria-labelledby="faqHeading-11" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Luxury, travel, technology, and financial brands perform best, though any company targeting high-income travelers can benefit.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-12">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-12" data-aria-expanded="false" data-aria-controls="faqCollapse-12">
                                        <span class="badge">&nbsp;</span>Can I run a short-term campaign?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-12" class="collapse" aria-labelledby="faqHeading-12" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Yes. Campaigns can run from a few weeks to several months, depending on your marketing objectives.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-13">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-13" data-aria-expanded="false" data-aria-controls="faqCollapse-13">
                                        <span class="badge">&nbsp;</span>Does DataMySite manage airport advertising approvals?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-13" class="collapse" aria-labelledby="faqHeading-13" data-parent="#accordion">
                                <div class="card-body">
                                    <p>
                                        Yes, we handle all approvals, media coordination, and compliance with airport guidelines.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-14">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-14" data-aria-expanded="false" data-aria-controls="faqCollapse-14">
                                        <span class="badge">&nbsp;</span>Are digital ads more effective than static ads?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-14" class="collapse" aria-labelledby="faqHeading-14" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Both formats are powerful. Digital offers motion and interactivity, while static formats provide long-lasting visibility. A combination of both often yields the best results.</p>
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