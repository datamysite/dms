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
                        <h2>Connect Your Brand with Millions</h2>
                        <h4>of Travelers Through Airport Advertising</h4>
                        <br>
                        <p>
                            At DataMySite, we help businesses unlock the potential of airport media advertising by creating innovative, visually compelling, and location-specific campaigns that deliver measurable results.
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
                    <h4>Why Choose Airport Advertising?</h4>
                    <p>
                        Airport environments are designed for attention. Passengers spend considerable time waiting — during check-in, security checks, and boarding — which makes airports one of the few places where consumers are receptive and attentive to advertising messages.
                        <br>
                        Here are some reasons why airport advertising in the UAE is highly effective:
                    </p>
                    <ul>
                        <li><strong>High Dwell Time</strong>: Passengers typically spend 2–3 hours in airports before boarding, giving your brand multiple exposure opportunities.</li>
                        <li><strong>Affluent Audience</strong>: Airport travelers generally have higher disposable income, making them ideal for luxury, lifestyle, tech, and finance brands.</li>
                        <li><strong>Premium Brand Image</strong>: Being displayed in world-class airports like Dubai International instantly elevates your brand’s perception.</li>
                        <li><strong>Global Reach</strong>: Airports are international hubs — your message reaches people from different countries and cultures.</li>
                        <li><strong>Multiple Touchpoints</strong>: From digital screens to baggage claim areas and duty-free zones, airports offer numerous advertising locations for brand engagement.</li>
                    </ul>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-5 vertical-center">
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


        <section id="service-cards" class="blog-section striped-section section pr-impact-section">

          <div class="container">

            <div class="row gy-4 first-row split-block">

                <div class="col-lg-4 vertical-center">
                    <img src="{{URL::to('/public/section-images/image24.png')}}" width="100%" alt="Impact of PR Coverage">
                </div>
                <div class="col-lg-8">
                    <h4>Airport Advertising Options</h4>
                    <p>
                        Airport advertising includes a variety of formats that can be customized based on budget, audience, and campaign goals.
                        <br>
                        Some popular options include:
                    </p>
                    <ul>
                        <li><strong>Digital Screens and LED Panels</strong>: High-definition displays in arrival and departure areas ensure your message is noticed.</li>
                        <li><strong>Static Billboards and Wall Wraps</strong>: Large-scale placements on walls, corridors, and check-in zones maximize exposure.</li>
                        <li><strong>Backlit Displays and Lightboxes</strong>: Eye-catching and premium in appearance, perfect for branding.</li>
                        <li><strong>Luggage Trolley Ads</strong>: Perfect for prolonged exposure as travelers move through terminals.</li>
                        <li><strong>Baggage Claim Area Ads</strong>: Reach passengers while they wait for their luggage — one of the most effective dwell zones.</li>
                        <li><strong>Airport Lounge Branding</strong>: Exclusive brand exposure in VIP lounges, ideal for luxury or corporate brands.</li>
                        <li><strong>Outdoor Airport Road Advertising</strong>: Target incoming and outgoing travelers on roads leading to or from the airport.</li>
                    </ul>
                    <br>
                    <h4>Airport Advertising in Dubai, Sharjah, and Indian Airports</h4>
                    <p>Each airport in the UAE and India offers distinct advertising advantages.</p>
                    <ul>
                        <li><strong>Dubai International Airport (DXB)</strong>: The world’s busiest international airport and the ultimate hub for global exposure.</li>
                        <li><strong>Sharjah International Airport (SHJ)</strong>: A rapidly growing hub catering to both regional and international travelers.</li>
                        <li><strong>Indian Airports</strong>: Ideal for reaching travelers heading to and from the UAE, especially from key business cities like Mumbai, Delhi, and Kochi.</li>
                    </ul>
                </div> 
            </div>

          </div>

        </section>


        <section id="service-cards" class="blog-section section why-us-section why-out-us-section">

          <div class="container">

            <div class="row gy-4 first-row">

                <div class="col-lg-9">
                    <h4>Why Choose DataMySite for Airport Advertising?</h4>
                    <p>
                       At DataMySite, we specialize in delivering high-impact airport advertising campaigns that blend creativity with strategic placement. Our team works closely with airport authorities and media owners to ensure smooth execution and maximum visibility.
                       <br>
                        We handle everything from design and placement to monitoring and reporting — ensuring your campaign runs seamlessly from start to finish.
                        <br>
                        <strong>Our strengths include:</strong>

                    </p>
                    <ul>
                        <li>Access to premium airport media spaces across the UAE and India.</li>
                        <li>Expertise in both static and digital airport advertising formats.</li>
                        <li>In-house creative team for campaign design and localization.</li>
                        <li>Data-driven performance tracking and ROI analysis.</li>
                        <li>Transparent pricing and flexible media planning options.</li>

                    </ul>
                    <br>
                    <h4>Best Industries for Airport Advertising</h4>
                    <p>Airport advertising works exceptionally well for:</p>
                    <ul>
                        <li>Airlines and travel agencies</li>
                        <li>Luxury and fashion brands</li>
                        <li>Financial services and banks</li>
                        <li>Automotive and technology companies</li>
                        <li>Hospitality and tourism businesses</li>
                        <li>Real estate and property developers</li>

                    </ul>
                    
                </div>
                <div class="col-lg-3 vertical-center">
                    <img src="{{URL::to('/public/section-images/image110.png')}}" width="100%" alt="Why choose us">
                </div> 
            </div>

          </div>

        </section>



        <section id="service-cards" class="blog-section  striped-section  section pr-impact-section">

          <div class="container">

            <div class="row gy-4 first-row split-block">


                <div class="col-lg-3 vertical-center">
                    <img src="{{URL::to('/public/section-images/image108.png')}}" width="90%" alt="Impact of PR Coverage">
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-8 vertical-center">
                    <h4>Benefits of Partnering with DataMySite</h4>
                    <ul>
                        <li><strong>Nationwide Coverage</strong>: Access to Dubai, Sharjah, Abu Dhabi, and Indian airports.</li>
                        <li><strong>Customized Campaigns</strong>: Tailored strategies for brand goals and budget.</li>
                        <li><strong>End-to-End Service</strong>: From creative concept to post-campaign analytics.</li>
                        <li><strong>Guaranteed Visibility</strong>: Placement in high-traffic areas for maximum exposure.</li>
                        <li><strong>Targeted Messaging</strong>: Reach specific demographics — business, tourists, or families.</li>
                    </ul>
                    <br>
                    <h4>Final Thoughts</h4>
                    <p>
                        Airport advertising in Dubai, Sharjah, and India gives brands access to one of the most exclusive, global, and high-value audiences. Whether you want to build awareness, reinforce brand image, or launch a new product, DataMySite provides the expertise and access to make it happen effectively.
                        <br><br>
                        With unmatched visibility, premium audience targeting, and creative flexibility, airport advertising in the UAE is a must-have strategy for brands looking to stand out in a competitive market.
                    </p>
                    <ul>
                        <li><strong>Dubai International Airport (DXB)</strong>: The world’s busiest international airport and the ultimate hub for global exposure.</li>
                        <li><strong>Sharjah International Airport (SHJ)</strong>: A rapidly growing hub catering to both regional and international travelers.</li>
                        <li><strong>Indian Airports</strong>: Ideal for reaching travelers heading to and from the UAE, especially from key business cities like Mumbai, Delhi, and Kochi.</li>
                    </ul>
                </div> 
            </div>

          </div>

        </section>



        <section id="service-cards" class="blog-section  section pr-blogs-section">

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

        <section id="service-cards" class="blog-section striped-section section faq-new-section">

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
                                        <span class="badge">&nbsp;</span>How much does airport advertising cost in Dubai or Sharjah?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-10" class="collapse show" aria-labelledby="faqHeading-10" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Costs vary based on format, location, and duration. For example, digital screens in Dubai Airport are priced higher due to higher passenger volume. DataMySite provides competitive and customized pricing options.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-11">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-11" data-aria-expanded="false" data-aria-controls="faqCollapse-11">
                                        <span class="badge">&nbsp;</span>What is the minimum campaign duration?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-11" class="collapse" aria-labelledby="faqHeading-11" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Typically, campaigns run for one month, but shorter or long-term options are available depending on media format and objectives.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-12">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-12" data-aria-expanded="false" data-aria-controls="faqCollapse-12">
                                        <span class="badge">&nbsp;</span>Is airport advertising suitable for small businesses?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-12" class="collapse" aria-labelledby="faqHeading-12" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Yes. With the right format (e.g., lightboxes, digital screens), even small and mid-sized businesses can achieve strong brand visibility.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-13">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-13" data-aria-expanded="false" data-aria-controls="faqCollapse-13">
                                        <span class="badge">&nbsp;</span>Can I target only arrival or departure zones?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-13" class="collapse" aria-labelledby="faqHeading-13" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Yes. You can choose specific zones such as arrivals, departures, or transit areas based on your audience targeting needs.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-14">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-14" data-aria-expanded="false" data-aria-controls="faqCollapse-14">
                                        <span class="badge">&nbsp;</span>Does DataMySite handle creative design and approvals?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-14" class="collapse" aria-labelledby="faqHeading-14" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Absolutely. We manage the full process — concept, design, airport media approval, installation, and campaign monitoring.</p>
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