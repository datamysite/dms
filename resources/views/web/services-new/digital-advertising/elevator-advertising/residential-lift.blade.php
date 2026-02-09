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
                        <h2>Reach Residents Where They Live</h2>
                        <h4>Every Day Engage Daily Audiences in Dubai’s Apartments, Towers & Residential Complexes</h4>
                        <br>
                        <p>
                            At DataMySite, we help brands connect with thousands of residents across Dubai, Abu Dhabi, and the UAE through creative and strategically placed advertisements inside apartment elevators, lift lobbies, and corridors. This medium ensures that your message is seen multiple times a day by a targeted, local audience — all within a clutter-free environment.

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
                    <h4>What Is Residential Lift Advertising?</h4>
                    <br>
                    <p class="mb-2">
                        Residential lift advertising involves placing posters, digital screens, or static panels inside apartment elevators and lift areas. These ads are displayed at eye level and viewed multiple times each day as residents travel to and from their apartments.
                        <br><br>
                        It’s part of indoor OOH (Out-of-Home) advertising, designed to target a fixed and repetitive audience — people who live, work, and socialize in specific communities.
                        <br><br>
                        This form of advertising is especially effective in high-rise apartments, gated communities, and residential towers in areas like Downtown Dubai, Jumeirah Village Circle, Dubai Marina, Business Bay, Sharjah, and Abu Dhabi Corniche.
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
                    <img src="{{URL::to('/public/section-images/image174.png')}}" width="100%" alt="Why choose us">
                </div> 
                <div class="col-lg-1"></div>
                <div class="col-lg-8 vertical-center">
                    <h4>Why Choose Residential Lift Advertising in the UAE</h4>
                    <br>
                    <ul>
                        <li>
                            <strong>High Daily Visibility</strong><br>
                            Residents use elevators multiple times a day — when leaving for work, returning home, or going out for errands. This repetitive exposure creates consistent brand recall without overwhelming the viewer.
                        </li>
                        <li>
                            <strong>Targeted and Localized Audience Reach</strong><br>
                            With lift advertising, you can choose specific buildings or communities that align with your audience profile — whether you want to reach families, professionals, or luxury residents. This makes it a hyper-local marketing solution with measurable results.
                        </li>
                        <li>
                            <strong>Long Dwell Time</strong><br>
                            Elevator rides last between 15 to 60 seconds — long enough for residents to read or view your ad in full. Unlike mobile ads or billboards, this environment offers undivided attention.
                        </li>
                        <li>
                            <strong>Cost-Effective with High ROI</strong><br>
                            Compared to outdoor billboards or digital media, residential lift advertising is affordable and long-lasting, offering weeks or months of continuous visibility for a fraction of the cost.
                        </li>
                        <li>
                            <strong>Non-Intrusive and Trusted</strong><br>
                            Placed in safe, familiar environments, elevator ads feel natural and community-friendly. They become part of residents’ daily routine, which enhances brand trust and acceptance.
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
                    <h4>Best Locations for Residential Lift Advertising in Dubai & UAE</h4>
                    <p>
                        Residential lift advertising is available across major housing communities and high-density neighborhoods:
                    </p>
                    <ul>
                        <li><strong>Dubai Marina & Jumeirah Beach Residence (JBR)</strong><br> – Target upscale residents and professionals.</li>


                        <li><strong>Downtown Dubai & Business Bay</strong><br> – Reach executives, entrepreneurs, and luxury tenants.</li>


                        <li><strong>Jumeirah Village Circle (JVC) & Arjan</strong><br> – Great for lifestyle, grocery, and real estate promotions.</li>


                        <li><strong>Dubai Silicon Oasis & International City</strong><br> – Perfect for budget-friendly, high-frequency campaigns.</li>


                        <li><strong>Sharjah & Ajman Residential Towers</strong><br> – Reach families and middle-income audiences effectively.</li>


                        <li><strong>Abu Dhabi Corniche & Reem Island</strong><br> – Target affluent residents and professionals.</li>
                    </ul>
                    <p>Our team at DataMySite works with building management and property developers to secure premium ad placements in elevators across thousands of apartments and gated communities.</p>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-2 vertical-center">
                    <img src="{{URL::to('/public/section-images/image175.png')}}" width="100%" alt="Why choose us">
                </div> 
            </div>

          </div>

        </section>


        <section id="service-cards" class="blog-section striped-section section why-us-section why-out-us-section">

          <div class="container">

            <div class="row gy-4 first-row split-block">

                <div class="col-lg-5 vertical-center">
                    <h4>Who Should Advertise in Residential Lifts?</h4>
                    <p>Residential lift advertising benefits a wide range of industries looking to target daily consumers directly where they live:</p>
                    <div class="faq " id="accordion">
                        <div class="card">
                            <div class="card-header" id="faqHeading-20">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-20" data-aria-expanded="true" data-aria-controls="faqCollapse-20">
                                        <span class="badge">&nbsp;</span>Real Estate & Property Developers
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-20" class="collapse" aria-labelledby="faqHeading-20" data-parent="#accordion">
                                <div class="card-body">
                                    <p>– Promote apartments, communities, and new launches.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-21">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-21" data-aria-expanded="false" data-aria-controls="faqCollapse-21">
                                        <span class="badge">&nbsp;</span>Retail & Grocery Brands
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-21" class="collapse" aria-labelledby="faqHeading-21" data-parent="#accordion">
                                <div class="card-body">
                                    <p>– Highlight nearby supermarkets, stores, or promotions.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-22">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-22" data-aria-expanded="false" data-aria-controls="faqCollapse-22">
                                        <span class="badge">&nbsp;</span>Banks & Financial Services
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-22" class="collapse" aria-labelledby="faqHeading-22" data-parent="#accordion">
                                <div class="card-body">
                                    <p>– Introduce new credit cards, offers, or insurance plans.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-23">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-23" data-aria-expanded="false" data-aria-controls="faqCollapse-23">
                                        <span class="badge">&nbsp;</span>Automotive & Ride-Sharing Apps
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-23" class="collapse" aria-labelledby="faqHeading-23" data-parent="#accordion">
                                <div class="card-body">
                                    <p>
                                        – Increase awareness among daily commuters.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-24">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-24" data-aria-expanded="false" data-aria-controls="faqCollapse-24">
                                        <span class="badge">&nbsp;</span>Food & Beverage Brands
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-24" class="collapse" aria-labelledby="faqHeading-24" data-parent="#accordion">
                                <div class="card-body">
                                    <p>– Promote restaurants, cafés, or delivery services.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-25">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-25" data-aria-expanded="false" data-aria-controls="faqCollapse-25">
                                        <span class="badge">&nbsp;</span>Health & Beauty Brands
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-25" class="collapse" aria-labelledby="faqHeading-25" data-parent="#accordion">
                                <div class="card-body">
                                    <p>– Showcase spas, salons, and wellness centers near communities.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-26">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-26" data-aria-expanded="false" data-aria-controls="faqCollapse-26">
                                        <span class="badge">&nbsp;</span>Technology & E-commerce Apps
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-26" class="collapse" aria-labelledby="faqHeading-26" data-parent="#accordion">
                                <div class="card-body">
                                    <p>– Encourage app downloads and local service bookings.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <p>Essentially, if your target audience lives in residential buildings — this platform puts your message right in front of them, every day.</p>
                </div> 
                <div class="col-lg-2 vertical-center">
                    <img src="{{URL::to('/public/section-images/image176.png')}}" width="100%" alt="Why choose us">
                </div>
                <div class="col-lg-5 vertical-center">
                    <h4>Where Can You Advertise?</h4>
                    <p>Residential lift advertising can be deployed across a variety of spaces within a building to maximize impact:</p>
                    <ul>
                        <li>
                            <strong>Inside Elevators:</strong> Posters, stickers, or digital screens placed at eye level ensure visibility during each ride.
                            <br><br>
                        </li>


                        <li>
                            <strong>Lift Lobbies:</strong> Branding near entrance doors and waiting areas catches attention before residents enter.
                            <br><br>
                        </li>


                        <li>
                            <strong>Corridors & Notice Boards:</strong> Additional placements in common areas reinforce brand awareness.
                            <br><br>
                        </li>


                        <li>
                            <strong>Reception Areas:</strong> Screens or stands near concierge desks provide first impressions to visitors and tenants.
                            <br><br>
                        </li>
                    </ul>
                    <br>
                    <h4>Advantages of Residential Lift Advertising</h4>
                    <ul>
                        <li>High-frequency exposure with multiple daily impressions</li>


                        <li>Guaranteed visibility in a confined, eye-level environment</li>


                        <li>Localized targeting by building, area, or city</li>


                        <li>24/7 exposure — residents see your ad day and night</li>


                        <li>Low cost per impression (CPI) and long campaign durations</li>


                        <li>Perfect for brand awareness and lead generation</li>


                        <li>Builds trust through community-based marketing</li>

                    </ul>
                </div> 
            </div>

          </div>

        </section>

        <section id="service-cards" class="blog-section section why-us-section why-out-us-section">

          <div class="container">

            <div class="row gy-4 first-row">


                <div class="col-lg-8 vertical-center">
                    <h4>Why Choose DataMySite for Elevator Advertising in Residential Buildings</h4>
                    <p>
                        At DataMySite, we specialize in strategic indoor media solutions across residential and commercial towers in Dubai, Abu Dhabi, Sharjah, and beyond.
                        <br>
                        Our team manages the entire campaign process — from location scouting and creative design to installation, reporting, and maintenance.
                        <br>
                        <strong>Our Services Include:</strong>
                    </p>
                    <ul>
                        <li>Strategic building and community selection</li>


                        <li>Creative concept development and ad design</li>


                        <li>Coordination with property and facility management teams</li>


                        <li>Digital screen programming and scheduling</li>


                        <li>Regular maintenance and visibility assurance</li>


                        <li>Monthly performance tracking and reports</li>

                    </ul>
                    <p>
                        We ensure every ad placement is professionally executed, visually appealing, and compliant with community regulations — giving your campaign maximum reach and credibility.
                    </p>
                </div>
                <div class="col-lg-2"></div>
                <div class="col-lg-2 vertical-center">
                    <img src="{{URL::to('/public/section-images/image177.png')}}" width="100%" alt="Why choose us">
                </div> 
            </div>

          </div>

        </section>


        <section id="service-cards" class="blog-section striped-section section why-us-section why-out-us-section">

          <div class="container">

            <div class="row gy-4 first-row split-block">

                <div class="col-lg-3 vertical-center">
                    <img src="{{URL::to('/public/section-images/image178.png')}}" width="100%" alt="Why choose us">
                </div>

                <div class="col-lg-1"></div>
                <div class="col-lg-8 vertical-center">
                    <h4>Key Benefits of Partnering with DataMySite</h4>
                    <p>
                        Access to thousands of residential buildings across UAE cities<br>
                        Flexible advertising options — static, digital, or interactive<br>
                        Cost-effective campaigns with long-term exposure<br>
                        Creative support for design and message optimization<br>
                        Transparent reporting with photo verification and reach metrics
                        <br><br>
                        Whether your goal is brand awareness, community engagement, or local sales, residential lift advertising through DataMySite ensures you stay closer to your customers — every single day.
                    </p>
                    <br>
                    <h4>Be Seen Where Your Audience Lives — Every Day</h4>
                    <p>
                        In a city where people spend more time in high-rise buildings than on the streets, residential lift advertising offers unmatched reach and frequency.
                        <br><br>
                        Let DataMySite help you design a campaign that delivers daily engagement, long-term visibility, and strong brand recall — right inside the homes of your target audience.
                        <br><br>
                        Contact us today to launch your Residential Lift Advertising campaign across leading apartment buildings and residential communities in Dubai and the UAE.
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

                <div class="col-lg-12">
                    <h4 class="text-center">Frequently Asked Questions</h4>
                    <br>
                    <div class="faq " id="accordion">
                        <div class="card">
                            <div class="card-header" id="faqHeading-10">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-10" data-aria-expanded="true" data-aria-controls="faqCollapse-10">
                                        <span class="badge">&nbsp;</span>How do I know if my target audience lives in these buildings?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-10" class="collapse show" aria-labelledby="faqHeading-10" data-parent="#accordion">
                                <div class="card-body">
                                    <p>We provide detailed "Building Profiles" including the neighborhood's average household income and demographic data.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-11">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-11" data-aria-expanded="false" data-aria-controls="faqCollapse-11">
                                        <span class="badge">&nbsp;</span>Is this a good channel for local services (like laundries or clinics)?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-11" class="collapse" aria-labelledby="faqHeading-11" data-parent="#accordion">
                                <div class="card-body">
                                    <p>It is one of the best. Advertising in the lift of a building where your shop is located creates immediate, high-trust local awareness.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-12">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-12" data-aria-expanded="false" data-aria-controls="faqCollapse-12">
                                        <span class="badge">&nbsp;</span>Can I use QR codes on residential lift ads?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-12" class="collapse" aria-labelledby="faqHeading-12" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Yes! Residents often have their phones in hand, making them highly likely to scan a QR code for a "Home Delivery" app or a local discount.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-13">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-13" data-aria-expanded="false" data-aria-controls="faqCollapse-13">
                                        <span class="badge">&nbsp;</span>What is the lead time for installation?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-13" class="collapse" aria-labelledby="faqHeading-13" data-parent="#accordion">
                                <div class="card-body">
                                    <p>
                                        Once the design is approved, we can have your brand inside the elevators of your chosen towers within 5 to 7 business days.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-14">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-14" data-aria-expanded="false" data-aria-controls="faqCollapse-14">
                                        <span class="badge">&nbsp;</span>Are the ads safe from vandalism?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-14" class="collapse" aria-labelledby="faqHeading-14" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Our frames are made of tempered glass or high-grade acrylic and are securely mounted to ensure they remain in perfect condition.</p>
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