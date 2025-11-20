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
                        <h2>Reach a Growing Audience</h2>
                        <h4>with Sharjah Airport Advertising</h4>
                        <br>
                        <p>
                            At DataMySite, we specialize in creating and executing Sharjah Airport Advertising campaigns that deliver strong brand visibility and measurable results. Whether you want to promote a new product, build brand awareness, or capture a specific audience, advertising at Sharjah International Airport provides unmatched access to travelers in a receptive environment.

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
                    
                    <h4>Why Choose Sharjah Airport for Advertising?</h4>
                    <p class="mb-0">
                        Sharjah Airport has transformed into a major gateway for travelers flying across the Middle East, Asia, and Africa. With a growing number of budget airlines and increasing international flights, SHJ has become a prime location for advertisers seeking broad exposure and strong ROI.
                    </p>
                </div>
                <div class="col-lg-6 vertical-center" data-aos="fade-up" data-aos-delay="100">
                    <p>Here are the top reasons why advertising at Sharjah Airport is highly effective:</p>
                    <div class="faq " id="accordion">
                        <div class="card">
                            <div class="card-header" id="faqHeading-20">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-20" data-aria-expanded="true" data-aria-controls="faqCollapse-20">
                                        <span class="badge">&nbsp;</span>Steady Passenger Growth
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-20" class="collapse" aria-labelledby="faqHeading-20" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Sharjah International Airport serves millions of travelers annually, with passenger numbers increasing year over year.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-21">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-21" data-aria-expanded="false" data-aria-controls="faqCollapse-21">
                                        <span class="badge">&nbsp;</span>Regional and Global Connectivity
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-21" class="collapse" aria-labelledby="faqHeading-21" data-parent="#accordion">
                                <div class="card-body">
                                    <p>The airport connects passengers to over 70 destinations across Asia, Europe, and Africa — giving brands global reach.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-22">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-22" data-aria-expanded="false" data-aria-controls="faqCollapse-22">
                                        <span class="badge">&nbsp;</span>Extended Dwell Time
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-22" class="collapse" aria-labelledby="faqHeading-22" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Travelers spend significant time in check-in lines, lounges, and waiting areas, increasing ad exposure and retention.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-24">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-24" data-aria-expanded="false" data-aria-controls="faqCollapse-24">
                                        <span class="badge">&nbsp;</span>Cost-Effective Marketing
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-24" class="collapse" aria-labelledby="faqHeading-24" data-parent="#accordion">
                                <div class="card-body">
                                    <p>
                                        Compared to larger hubs like Dubai International, Sharjah Airport advertising rates are more affordable, offering higher ROI for small and medium businesses.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-25">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-25" data-aria-expanded="false" data-aria-controls="faqCollapse-25">
                                        <span class="badge">&nbsp;</span>Diverse Audience Mix
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-25" class="collapse" aria-labelledby="faqHeading-25" data-parent="#accordion">
                                <div class="card-body">
                                    <p>
                                        The airport attracts tourists, expatriates, business travelers, and families — allowing advertisers to target varied audience segments effectively.
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
                    <h4>Types of Sharjah Airport Advertising</h4>
                    <p>At DataMySite, we provide a full suite of Sharjah Airport media options that cater to different marketing goals, creative preferences, and budgets.</p>
                </div>
                <div class="col-lg-4">
                    <h5>Digital Airport Screens</h5>
                    <p>
                        Modern LED and LCD screens placed throughout the terminal areas deliver dynamic and high-resolution brand messages. Ideal for campaigns that require movement, animation, and brand storytelling.
                    </p>
                </div>
                <div class="col-lg-4">
                    <h5>Static Billboards and Wall Wraps</h5>
                    <p>Large, high-impact displays positioned in high-traffic areas such as corridors, arrival gates, and check-in zones. Perfect for strong visual branding.</p>
                </div>
                <div class="col-lg-4">
                    <h5>Backlit Panels and Lightboxes</h5>
                    <p>
                        Elegant and bright backlit displays that stand out in indoor environments, offering continuous visibility day and night.
                    </p>
                </div>
                <div class="col-lg-4">
                    <h5>Baggage Claim and Arrival Area Advertising</h5>
                    <p>
                        Baggage claim zones are one of the most attention-rich environments in airports. Travelers waiting for their luggage have prolonged exposure to branded visuals.
                    </p>
                </div>  


                <div class="col-lg-4">
                    <h5>Luggage Trolley Branding</h5>
                    <p>
                        Trolleys are in constant motion across terminals and parking areas, giving your brand consistent, mobile visibility throughout the airport.
                    </p>
                </div> 


                <div class="col-lg-4">
                    <h5>Airport Lounge Advertising</h5>
                    <p>
                        Exclusive branding in VIP and business lounges targets premium passengers, decision-makers, and corporate travelers.
                    </p>
                </div> 


                <div class="col-lg-12">
                    <h5>Outdoor Airport Road Billboards</h5>
                    <p>
                        Capture passengers entering or exiting the airport with large outdoor displays on approach roads and parking areas.
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
                    <h4>Key Benefits of Sharjah Airport Advertising</h4>
                    <p>
                        Advertising at Dubai International Airport provides brands with both prestige and performance. Here’s why:
                    </p>
                    <ul>
                        <li>
                            <strong>Targeted Brand Exposure:</strong><br>
                             Reach millions of engaged travelers in a controlled, distraction-free environment.
                        </li>
                        <li>
                            <strong>Continuous Visibility:</strong><br>
                             Airport media operates 24/7, ensuring your brand remains visible round-the-clock.
                        </li>
                        <li>
                            <strong>Cost Efficiency:</strong><br>
                             Sharjah Airport offers more economical advertising rates compared to Dubai or Abu Dhabi, making it ideal for both emerging and established brands.
                        </li>
                        <li>
                            <strong>Brand Credibility and Prestige:</strong><br>
                             Featuring your brand in an international airport enhances trust, reputation, and brand recall.
                        </li>
                        <li>
                            <strong>Strong Return on Investment:</strong><br>
                             Due to extended exposure time and strategic ad placement, airport advertising delivers high engagement rates.
                        </li>
                    </ul>
                </div>
                <div class="col-lg-2 vertical-center">
                    <img src="{{URL::to('/public/section-images/image117.png')}}" width="100%" alt="Why choose us">
                </div> 

                <div class="col-lg-5 vertical-center">
                    <h4>Ideal Businesses for Sharjah Airport Advertising</h4>
                    <p>Airport advertising in Sharjah works effectively across industries, including:</p>
                    <ul>
                        <li>Travel and tourism agencies</li>
                        <li>Airlines and hospitality groups</li>
                        <li>Real estate and property developers</li>
                        <li>Financial institutions and investment firms</li>
                        <li>Educational institutions targeting international students</li>
                        <li>Automotive and technology companies</li>
                        <li>Retail and FMCG brands</li>

                    </ul>
                </div>
            </div>

          </div>

        </section>



    
        <section id="service-cards" class="blog-section striped-section  section why-us-section why-out-us-section">

          <div class="container">

            <div class="row gy-4 first-row split-block">


                <div class="col-lg-3 vertical-center">
                    <img src="{{URL::to('/public/section-images/image118.png')}}" width="100%" alt="Why choose us">
                </div> 
                <div class="col-lg-1"></div>
                <div class="col-lg-8 vertical-center">
                    <h4>Why Choose DataMySite for Sharjah Airport Advertising</h4>
                    <p>
                        At DataMySite, we bring deep market expertise, creative excellence, and strategic planning to every campaign. Our goal is to make your Sharjah Airport Advertising campaign not just visible but memorable.
                        <br>
                        <strong>What Makes Us Different:</strong>

                    </p>
                    <ul>
                        <li>Direct partnerships with airport media owners for prime ad placement.</li>
                        <li>Expertise in both digital and static airport media.</li>
                        <li>Tailored campaign strategies that match your objectives and budget.</li>
                        <li>End-to-end management — from creative concept to campaign reporting.</li>
                        <li>Transparent pricing with no hidden costs.</li>


                    </ul>
                    <p>We understand the importance of message timing, visual impact, and audience psychology — helping your brand capture the attention of travelers at the right moment.</p>
                    <br>
                    <h4>Campaign Process</h4>
                    <ul>
                        <li>
                            <strong>Consultation and Planning:</strong><br>
                             Our experts analyze your target audience, marketing goals, and preferred ad duration.
                        </li>
                        <li>
                            <strong>Media Selection:</strong><br>
                             We identify the most impactful spaces — digital, static, or interactive — for your campaign within the airport.
                        </li>
                        <li>
                            <strong>Creative Development:</strong><br>
                             Our in-house design team creates high-quality visuals that align with your brand message and meet airport standards.
                        </li>
                        <li>
                            <strong>Installation and Monitoring:</strong><br>
                             We handle every aspect of setup, ensuring all approvals and logistics are managed seamlessly.
                        </li>
                        <li>
                            <strong>Reporting and Analysis:</strong><br>
                             After your campaign goes live, we provide detailed reports on visibility, impressions, and performance.
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
                    <h4>Why Brands Love Airport Advertising in Sharjah</h4>
                    <ul>
                        <li><strong>Wide Reach, Lower Cost</strong>:<br> Perfect for advertisers looking to target large audiences without premium Dubai pricing.</li>
                        <li><strong>Business and Leisure Travelers</strong>:<br> Engage a balanced audience mix of tourists, residents, and professionals.</li>
                        <li><strong>Strategic Location</strong>:<br> Ideal for brands that want regional exposure across UAE’s Northern Emirates.</li>
                        <li><strong>Continuous Impact</strong>:<br> Unlike other forms of OOH, airport advertising has extended dwell time and repeated exposure.</li>
                    </ul>
                    <br>
                    <h4>Final Thoughts</h4>
                    <p>
                        Sharjah Airport Advertising offers brands a strategic and cost-effective way to connect with millions of travelers in a dynamic, expanding airport environment. With its mix of international passengers, strong regional connectivity, and high dwell times, SHJ delivers excellent visibility and engagement.
                        <br><br>
                        Partner with DataMySite, your trusted outdoor advertising agency in the UAE, to design and execute airport campaigns that elevate your brand presence and drive measurable results. From digital LED screens to premium wall wraps, we’ll help your brand dominate Sharjah Airport with creative, impactful advertising that leaves a lasting impression.
                    </p>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-3 vertical-center">
                    <img src="{{URL::to('/public/section-images/image119.png')}}" width="100%" alt="Why choose us">
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
                                        <span class="badge">&nbsp;</span>How much does it cost to advertise at Sharjah Airport?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-10" class="collapse show" aria-labelledby="faqHeading-10" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Costs depend on the media format, size, and duration of your campaign. Sharjah generally offers lower rates than Dubai Airport, making it a great choice for businesses with moderate budgets.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-11">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-11" data-aria-expanded="false" data-aria-controls="faqCollapse-11">
                                        <span class="badge">&nbsp;</span>Can small businesses advertise at Sharjah Airport?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-11" class="collapse" aria-labelledby="faqHeading-11" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Yes, absolutely. There are flexible ad options like lightboxes and digital screens suitable for small to medium-sized businesses.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-12">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-12" data-aria-expanded="false" data-aria-controls="faqCollapse-12">
                                        <span class="badge">&nbsp;</span>What is the minimum duration for a campaign?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-12" class="collapse" aria-labelledby="faqHeading-12" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Most campaigns run for at least one month, but shorter durations can be arranged depending on media availability.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-13">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-13" data-aria-expanded="false" data-aria-controls="faqCollapse-13">
                                        <span class="badge">&nbsp;</span>Does DataMySite manage the full process?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-13" class="collapse" aria-labelledby="faqHeading-13" data-parent="#accordion">
                                <div class="card-body">
                                    <p>
                                        Yes, we handle everything from creative design, airport media approvals, installation, to performance tracking.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-14">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-14" data-aria-expanded="false" data-aria-controls="faqCollapse-14">
                                        <span class="badge">&nbsp;</span>Can I advertise on both Sharjah and Dubai airports together?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-14" class="collapse" aria-labelledby="faqHeading-14" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Definitely. Many clients choose multi-airport campaigns for wider coverage, and DataMySite can coordinate that seamlessly.</p>
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