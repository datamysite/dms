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
                        <h2>Maximum Visibility with High-Impact</h2>
                        <h4>Bridge Panel Advertising in the UAE</h4>
                        <br>
                        <p>
                            At DataMySite, we specialize in Bridge Panel Advertising across Dubai, Sharjah, Abu Dhabi, and other major UAE cities, helping brands achieve unmatched outdoor visibility through premium bridge panel placements.
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
                    <h4>What is Bridge Panel Advertising?</h4>
                    <p>
                        Bridge Panel Advertising refers to large-format outdoor advertisements displayed on pedestrian or vehicular bridges that span over roads and highways. These panels are positioned at eye level for drivers and passengers, ensuring high-impact visibility throughout the day.
                        <br><br>
                        Bridge panels are one of the most effective ways to build brand recall, drive awareness, and deliver a strong marketing presence across high-traffic locations.

                    </p>
                </div>
                <div class="col-lg-6 vertical-center">
                    <iframe class="service-iframe outdoor-iframe" src="https://www.youtube.com/embed/Ny7v7w6dtq4?si=oAHAurPi9RcZjBPT" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
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
                    <h4>Why Bridge Panels Are Powerful for Brand Visibility</h4>
                    <p>
                        Bridge panels combine large visual formats with prime locations, making them ideal for brands seeking mass exposure. Here’s why they work so well:
                    </p>
                </div>
                <div class="col-lg-6">
                    <h5>Unmissable Presence:</h5>
                    <p>
                        Positioned directly above major roads, bridge panels dominate the viewer’s line of sight, ensuring strong message retention.
                    </p>
                </div>
                <div class="col-lg-6">
                    <h5>High Daily Traffic:</h5>
                    <p>
                       Each bridge panel can reach tens of thousands of commuters daily — maximizing impressions and visibility.
                    </p>
                </div>
                <div class="col-lg-6">
                    <h5>Extended Viewing Time:</h5>
                    <p>
                        Slow-moving traffic and signal stops give audiences more time to absorb the message.
                    </p>
                </div>
                <div class="col-lg-6">
                    <h5>24/7 Exposure:</h5>
                    <p>
                        With backlit and illuminated options, bridge panels remain visible both day and night.
                    </p>
                </div>  


                <div class="col-lg-6">
                    <h5>Premium City Coverage:</h5>
                    <p>
                        Ideal for targeting specific districts, highways, and commercial hubs
                    </p>
                </div>
                <div class="col-lg-6">
                    <h5>Cost-Effective Impact:</h5>
                    <p>
                        Compared to TV or digital media, bridge panel advertising offers continuous brand presence at a lower cost per impression.
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

                <div class="col-lg-9">
                    <h4>Bridge Panel Advertising in Dubai, Sharjah & Across the UAE</h4>
                    <p>
                        At DataMySite, we offer nationwide coverage for bridge panel advertising with prime placements across:
                    </p>
                    <ul>
                        <li><strong>Dubai</strong>: Sheikh Zayed Road, Al Khail Road, Business Bay, Deira, Jumeirah, and Downtown Dubai</li>
                        <li><strong>Sharjah</strong>: King Faisal Street, Al Wahda Road, and key commercial zones</li>
                        <li><strong>Abu Dhabi</strong>: Airport Road, Corniche, Khalifa City, and main highways</li>
                        <li><strong>Ajman, Ras Al Khaimah, and Fujairah</strong>: Targeted placements for local and regional reach</li>
                    </ul>
                    <p>Each location is carefully selected based on audience flow, visibility, and strategic value to ensure your message reaches the right audience at the right time.</p>
                </div>
                <div class="col-lg-3 vertical-center">
                    <img src="{{URL::to('/public/section-images/image50.png')}}" width="100%" alt="Why choose us">
                </div> 
            </div>

          </div>

        </section>

        <section id="service-cards" class="blog-section section striped-section why-us-section why-out-us-section">

          <div class="container">

            <div class="row gy-4 first-row">

                <div class="col-lg-3 vertical-center">
                    <img src="{{URL::to('/public/section-images/image51.png')}}" width="100%" alt="Why choose us">
                </div> 
                <div class="col-lg-1"></div>
                <div class="col-lg-8 vertical-center">
                    <h4>Types of Bridge Panel Advertising</h4>
                    <p>We provide various bridge panel formats to fit your campaign objectives and creative requirements:</p>
                    <ul>
                        <li><strong>Single-Side Bridge Panels</strong><br> Visible from one direction — ideal for targeting a specific traffic flow or direction.</li>
                        <li><strong>Double-Side Bridge Panels</strong><br> Visible from both directions — perfect for maximum exposure and citywide campaigns.</li>
                        <li><strong>Illuminated Bridge Panels</strong><br> LED-lit or backlit for 24/7 visibility and superior nighttime impact.</li>
                        <li><strong>Custom-Wrap Bridge Panels</strong><br> Full-bridge wraps that transform an entire structure into a powerful brand statement.</li>
                    </ul>
                </div>
            </div>

          </div>

        </section>



        <section id="service-cards" class="blog-section section why-us-section why-out-us-section">

          <div class="container">

            <div class="row gy-4 first-row">

                <div class="col-lg-8 vertical-center">
                    <h4>Best Locations for Bridge Panel Advertising</h4>
                    <p>Bridge panel effectiveness depends largely on placement. We help you choose strategic bridge locations based on:</p>
                    <ul>
                        <li>Traffic volume and visibility</li>
                        <li>Target audience demographics</li>
                        <li>Nearby commercial or residential zones</li>
                        <li>Proximity to landmarks, malls, or business districts</li>
                    </ul>
                    <p>With DataMySite’s location intelligence and OOH media network, you get access to high-performing bridge locations that align with your campaign goals.</p>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-3 vertical-center">
                    <img src="{{URL::to('/public/section-images/image46.png')}}" width="100%" alt="Why choose us">
                </div> 
            </div>

          </div>

        </section>


        <section id="service-cards" class="blog-section section why-us-section striped-section  why-out-us-section">

          <div class="container">

            <div class="row gy-4 first-row">

                <div class="col-lg-5">
                    <h4>Benefits of Bridge Panel Advertising</h4>
                    <ul>
                        <li><strong>Mass Reach</strong>:<br> Bridge panels deliver citywide coverage, ideal for product launches and brand awareness campaigns.</li>
                        <li><strong>Long-Term Exposure</strong>:<br> Unlike digital ads that disappear instantly, bridge panels stay visible for weeks or months — ensuring lasting brand recall.</li>
                        <li><strong>Prestigious Placement</strong>:<br> Positioned on premium roadways and highways, bridge panels associate your brand with credibility and scale.</li>
                        <li><strong>Targeted Area Marketing</strong>:<br> Perfect for localized campaigns — focus on specific districts or regions with multiple bridge placements.</li>
                        <li><strong>Complementary with Digital Campaigns</strong>:<br> Bridge panels amplify online marketing by providing offline visibility that drives digital search and engagement.</li>
                    </ul>
                </div>
                <div class="col-lg-2 vertical-center">
                    <img src="{{URL::to('/public/section-images/image1.png')}}" width="80%" alt="Why choose us">
                </div> 
                <div class="col-lg-5">
                    <h4>Industries That Benefit from Bridge Panel Advertisingg</h4>
                    <p>Bridge panels work for a wide range of industries — from corporate to retail:</p>
                    <ul>
                        <li><strong>Real Estate Developers</strong> – Launching residential or commercial projects</li>
                        <li><strong>Automotive Brands</strong> – Showcasing new car models</li>
                        <li><strong>Telecom Companies</strong> – Promoting new data plans or offers</li>
                        <li><strong>Banks & Financial Institutions</strong> – Advertising new services or branches</li>
                        <li><strong>Retail & FMCG Brands</strong> – Driving awareness for sales and promotions</li>
                        <li><strong>Tourism Boards & Airlines</strong> – Promoting destinations or travel deals</li>
                        <li><strong>Healthcare & Education</strong> – Promoting hospitals, clinics, and universities</li>
                    </ul>
                    <p>With DataMySite’s location intelligence and OOH media network, you get access to high-performing bridge locations that align with your campaign goals.</p>
                </div>
            </div>

          </div>

        </section>


        <section id="service-cards" class="blog-section section why-us-section  why-out-us-section">

          <div class="container">

            <div class="row gy-4 first-row">

                <div class="col-lg-8 vertical-center">
                    <h4>Why Choose DataMySite for Bridge Panel Advertising</h4>
                    <p>
                        At DataMySite, we understand that outdoor advertising success depends on location, design, and timing. That’s why we provide end-to-end Bridge Panel Advertising solutions — from site selection to creative execution and campaign management.
                        <br><br>
                        Our Expertise Includes:

                    </p>
                    <ul>
                        <li>Access to premium bridge panel locations across all UAE emirates</li>
                        <li>Expert media planning and placement strategy</li>
                        <li>Creative design and production support</li>
                        <li>Campaign setup, maintenance, and monitoring</li>
                        <li>Transparent reporting with performance insights</li>
                    </ul>
                    <p>We ensure that every campaign delivers maximum impact, visibility, and ROI.</p>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-3 vertical-center">
                    <img src="{{URL::to('/public/section-images/image22.png')}}" width="100%" alt="Why choose us">
                </div> 
            </div>

          </div>

        </section>


        <section id="service-cards" class="blog-section section why-us-section  striped-section why-out-us-section">

          <div class="container">

            <div class="row gy-4 first-row">

                <div class="col-lg-3 vertical-center">
                    <img src="{{URL::to('/public/section-images/image7.png')}}" width="100%" alt="Why choose us">
                </div> 
                <div class="col-lg-1"></div>
                <div class="col-lg-8 vertical-center">
                    <h4>Bridge Panel Advertising Process</h4>
                    <ul>
                        <li>
                            <strong>Step 1</strong> – <strong>Consultation & Strategy</strong>:<br>
                            We start by understanding your campaign objectives, target audience, and preferred cities.
                        </li>
                        <li>
                            <strong>Step 2</strong> – <strong>Site Selection</strong>:<br>
                            Our experts identify the most strategic bridge panels based on visibility, traffic data, and audience relevance.
                        </li>
                        <li>
                            <strong>Step 3</strong> – <strong>Design & Approval</strong>:<br>
                            We assist with creative design, ensuring it complies with local advertising regulations and maximizes visual impact.
                        </li>
                        <li>
                            <strong>Step 4</strong> – <strong>Installation & Execution</strong>:<br>
                            Your campaign is installed professionally, maintained throughout its duration, and illuminated for full-time exposure.
                        </li>
                        <li>
                            <strong>Step 5</strong> – <strong>Reporting & Optimization</strong>:<br>
                            You receive detailed reports on visibility, duration, and campaign coverage.
                        </li>
                    </ul>
                    <p>We ensure that every campaign delivers maximum impact, visibility, and ROI.</p>
                    <br>
                    <h4>Final Thoughts</h4>
                    <p>
                        Bridge Panel Advertising offers unparalleled outdoor exposure across high-traffic UAE routes. With bold visuals and constant visibility, it’s a proven way to build awareness, establish authority, and drive brand engagement.
                        <br>
                        At DataMySite, we help you transform bridges into powerful brand platforms — reaching your audience where they travel, commute, and connect daily. Whether you’re launching a new product, building recognition, or expanding into new markets, bridge panel advertising ensures your brand stays on top — literally.
                        <br><br>
                        Contact DataMySite today to plan your Bridge Panel Advertising campaign in Dubai, Sharjah, Abu Dhabi, or anywhere across the UAE and watch your brand dominate the skyline.
                    </p>
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

        <section id="service-cards" class="blog-section section striped-section faq-new-section">

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
                                        <span class="badge">&nbsp;</span>What is the cost of bridge panel advertising in Dubai or Sharjah?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-10" class="collapse show" aria-labelledby="faqHeading-10" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Costs vary depending on bridge location, size, and duration, but bridge panels offer one of the most cost-effective OOH advertising formats in the UAE.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-11">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-11" data-aria-expanded="false" data-aria-controls="faqCollapse-11">
                                        <span class="badge">&nbsp;</span>How long should a bridge panel campaign run?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-11" class="collapse" aria-labelledby="faqHeading-11" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Most campaigns run for a minimum of one month to achieve sustained visibility and impact.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-12">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-12" data-aria-expanded="false" data-aria-controls="faqCollapse-12">
                                        <span class="badge">&nbsp;</span>Are bridge panels illuminated at night?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-12" class="collapse" aria-labelledby="faqHeading-12" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Yes, most bridge panels are backlit or LED-illuminated for 24-hour exposure.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-13">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-13" data-aria-expanded="false" data-aria-controls="faqCollapse-13">
                                        <span class="badge">&nbsp;</span>Can I advertise on multiple bridges simultaneously?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-13" class="collapse" aria-labelledby="faqHeading-13" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Absolutely. We can plan a multi-city bridge panel campaign for broader coverage and consistent branding.</p>
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