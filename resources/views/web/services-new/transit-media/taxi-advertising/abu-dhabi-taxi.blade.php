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
                        <h2>Drive Brand Visibility Across the Capital</h2>
                        <h4>with Abu Dhabi Taxi Advertising</h4>
                        <br>
                        <p>
                            At DataMySite, we help businesses leverage the reach of Abu Dhabi’s official taxi network by turning taxis into powerful mobile billboards. Our creative and compliant taxi advertising campaigns allow your brand to travel across the city’s busiest roads — maximizing exposure to both residents and tourists in the most natural way possible.
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
                    <h4>What is Abu Dhabi Taxi Advertising?</h4>
                    <p class="mb-0">
                        Taxi advertising in Abu Dhabi involves placing branded visuals or digital displays on taxis operating under the Abu Dhabi Integrated Transport Centre (ITC) network. These taxis travel throughout the city — from commercial zones to residential neighborhoods, malls, airports, and tourist destinations — providing constant brand visibility.
                        <br>
                        <strong>Taxi ads can appear on:</strong>
                    </p>
                    <ul>
                        <li>Taxi doors and side panels</li>
                        <li>Rear windows or full wraps</li>
                        <li>Roof-top digital screens</li>
                        <li>Interior seat-back screens and headrest displays</li>

                    </ul>
                    <p>This form of advertising is a smart, cost-effective, and high-impact way to reach a diverse audience while reinforcing your brand’s presence throughout Abu Dhabi.</p>
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
                    <h4>Types of Abu Dhabi Taxi Advertising</h4>
                    <p>At DataMySite, we offer multiple creative formats for Abu Dhabi Taxi Advertising, ensuring your campaign is impactful and visually appealing.</p>
                    <div class="faq " id="accordion">
                        <div class="card">
                            <div class="card-header" id="faqHeading-20">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-20" data-aria-expanded="true" data-aria-controls="faqCollapse-20">
                                        <span class="badge">&nbsp;</span>Full Taxi Wrap
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-20" class="collapse" aria-labelledby="faqHeading-20" data-parent="#accordion">
                                <div class="card-body">
                                    <p>The entire taxi is wrapped in your brand’s colors, logo, and message, turning the vehicle into a moving billboard. Full wraps ensure maximum visibility from all angles.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-21">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-21" data-aria-expanded="false" data-aria-controls="faqCollapse-21">
                                        <span class="badge">&nbsp;</span>Door and Side Panel Ads
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-21" class="collapse" aria-labelledby="faqHeading-21" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Perfect for concise messages and visuals, door ads highlight your brand every time a passenger enters or exits the vehicle.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-22">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-22" data-aria-expanded="false" data-aria-controls="faqCollapse-22">
                                        <span class="badge">&nbsp;</span>Rear Window Advertising
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-22" class="collapse" aria-labelledby="faqHeading-22" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Rear windows attract attention from vehicles behind, especially during heavy traffic — a great spot for logos, URLs, or promotional offers.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-24">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-24" data-aria-expanded="false" data-aria-controls="faqCollapse-24">
                                        <span class="badge">&nbsp;</span>Roof-Top Digital Screens
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-24" class="collapse" aria-labelledby="faqHeading-24" data-parent="#accordion">
                                <div class="card-body">
                                    <p>
                                        Digital screens display dynamic video or static ad rotations, visible day and night. This modern format offers maximum flexibility and recall.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-25">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-25" data-aria-expanded="false" data-aria-controls="faqCollapse-25">
                                        <span class="badge">&nbsp;</span>Interior Branding
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-25" class="collapse" aria-labelledby="faqHeading-25" data-parent="#accordion">
                                <div class="card-body">
                                    <p>
                                        Display your message inside the taxi — on headrest screens, seat backs, or dashboard displays — directly engaging passengers during their journey.
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
                    <h4>Key Benefits of Taxi Advertising in Abu Dhabi</h4>
                    <br>
                    <div class="faq " id="accordion">
                        <div class="card">
                            <div class="card-header" id="faqHeading-30">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-30" data-aria-expanded="true" data-aria-controls="faqCollapse-30">
                                        <span class="badge">&nbsp;</span>High Daily Visibility
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-30" class="collapse" aria-labelledby="faqHeading-30" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Taxi ads travel across key business and residential areas, including Corniche Road, Yas Island, Saadiyat, Al Reem Island, Al Maryah Island, and Downtown Abu Dhabi — guaranteeing thousands of daily impressions.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-31">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-31" data-aria-expanded="false" data-aria-controls="faqCollapse-31">
                                        <span class="badge">&nbsp;</span>Citywide Coverage
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-31" class="collapse" aria-labelledby="faqHeading-31" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Abu Dhabi taxis operate throughout the emirate, including Mussafah, Khalifa City, Al Ain, and Al Dhafra, ensuring your campaign isn’t limited to one neighborhood.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-32">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-32" data-aria-expanded="false" data-aria-controls="faqCollapse-32">
                                        <span class="badge">&nbsp;</span>Continuous Exposure
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-32" class="collapse" aria-labelledby="faqHeading-32" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Unlike digital ads or TV spots, taxi advertising provides constant visibility day and night, even during traffic jams or at popular pick-up spots like malls, offices, and airports.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-34">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-34" data-aria-expanded="false" data-aria-controls="faqCollapse-34">
                                        <span class="badge">&nbsp;</span>Builds Trust and Familiarity
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-34" class="collapse" aria-labelledby="faqHeading-34" data-parent="#accordion">
                                <div class="card-body">
                                    <p>
                                        Branded taxis convey credibility and consistency. When people see your brand across multiple vehicles daily, it builds recognition and reinforces your identity.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-35">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-35" data-aria-expanded="false" data-aria-controls="faqCollapse-35">
                                        <span class="badge">&nbsp;</span>Perfect for Local and Regional Brands
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-35" class="collapse" aria-labelledby="faqHeading-35" data-parent="#accordion">
                                <div class="card-body">
                                    <p>
                                        Taxi advertising is highly effective for both local businesses targeting specific areas and international brands looking for broad citywide awareness.
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

            <div class="row gy-4 first-row split-block">


                <div class="col-lg-3 vertical-center">
                    <img src="{{URL::to('/public/section-images/image47.png')}}" width="100%" alt="Why choose us">
                </div> 
                <div class="col-lg-1"></div>
                <div class="col-lg-8 vertical-center">
                    <h4>Why Abu Dhabi Taxi Advertising Works</h4>
                    <p>
                        Abu Dhabi’s taxi network is one of the most trusted and widely used transportation systems in the UAE. The city’s taxis operate 24/7, covering thousands of kilometers every day. Advertising on these taxis ensures your brand is visible to:
                    </p>
                    <ul>
                        <li>Daily commuters and professionals</li>
                        <li>Tourists traveling to hotels, malls, and attractions</li>
                        <li>Airport passengers arriving or departing</li>
                        <li>Pedestrians and motorists across key roads and intersections</li>

                    </ul>
                    <p>Each taxi becomes a moving advertisement, reaching both local and international audiences with high frequency and geographic coverage.</p>
                </div>
            </div>

          </div>

        </section>


        <section id="service-cards" class="blog-section section striped-section why-us-section why-out-us-section">

          <div class="container">

            <div class="row gy-4 first-row">


                <div class="col-lg-8 vertical-center">
                    <h4>Why Abu Dhabi Taxi Advertising Is Unique</h4>
                    <p>
                        Abu Dhabi taxis are government-regulated, clean, and well-maintained, providing an ideal platform for brand representation. The fleet includes various color-coded taxis, such as blue, silver, red, and pink, which operate across different segments of the city.
                        <br>
                        This diversity allows advertisers to tailor campaigns by audience type — from airport travelers to city commuters. The visibility, movement, and trust associated with official taxis make this one of the most valuable OOH advertising opportunities in the UAE.

                    </p>
                    <br>
                    <h4>Areas Covered by Abu Dhabi Taxi Advertising</h4>
                    <ul>
                        <li><strong>Corniche Road and City Center</strong> – Prime exposure to office-goers and tourists</li>
                        <li><strong>Yas Island & Saadiyat Island</strong> – Leisure and entertainment visitors</li>
                        <li><strong>Al Reem & Al Maryah Islands</strong> – Business and corporate professionals</li>
                        <li><strong>Abu Dhabi International Airport</strong> – Target arriving and departing travelers</li>
                        <li><strong>Mussafah & Khalifa City</strong> – Residential and industrial zones</li>
                        <li><strong>Al Ain & Al Dhafra Regions</strong> – Wider emirate coverage for brand expansion</li>
                    </ul>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-3 vertical-center">
                    <img src="{{URL::to('/public/section-images/image47.png')}}" width="100%" alt="Why choose us">
                </div> 
            </div>

          </div>

        </section>

        <section id="service-cards" class="blog-section section why-us-section why-out-us-section">

          <div class="container">

            <div class="row gy-4 first-row split-block">

                <div class="col-lg-3 vertical-center">
                    <img src="{{URL::to('/public/section-images/image47.png')}}" width="100%" alt="Why choose us">
                </div> 
                <div class="col-lg-1"></div>

                <div class="col-lg-8 vertical-center">
                    <h4>Industries That Benefit from Taxi Advertising in Abu Dhabi</h4>
                    <p>
                        Taxi advertising is ideal for:
                    </p>
                    <ul>
                        <li>Retail brands and malls</li>
                        <li>Real estate developers</li>
                        <li>Hotels and hospitality brands</li>
                        <li>Banks and financial services</li>
                        <li>Telecom and technology companies</li>
                        <li>Education and training institutions</li>
                        <li>Healthcare providers and clinics</li>
                        <li>FMCG and lifestyle brands</li>
                    </ul>
                    <p>Whether you’re launching a new product or maintaining brand recall, taxi advertising helps you stay top of mind across the emirate.</p>
                </div>
            </div>

          </div>

        </section>


        <section id="service-cards" class="blog-section section striped-section pr-icon-section">

          <div class="container">

            <div class="row gy-4 text-center first-row outdoor-service-col-section">

                <div class="col-lg-12" data-aos="fade-up" data-aos-delay="100">
                    <h4>How DataMySite Executes Taxi Advertising Campaigns</h4>
                    <p>We handle every step of your campaign — from creative to compliance — ensuring smooth and professional execution.</p>
                </div>
                <div class="col-lg-4">
                    <h5>Consultation & Strategy</h5>
                    <p>
                        We begin by understanding your target audience, business goals, and preferred coverage areas.
                    </p>
                </div>
                <div class="col-lg-4">
                    <h5>Creative Design & Approval</h5>
                    <p>
                       Our design team creates visually striking taxi ads aligned with your brand identity and Abu Dhabi’s advertising guidelines.
                    </p>
                </div>
                <div class="col-lg-4">
                    <h5>ITC Approval & Coordination</h5>
                    <p>
                        We work directly with the Integrated Transport Centre (ITC) for ad approvals, ensuring all regulatory requirements are met.
                    </p>
                </div>
                <div class="col-lg-6">
                    <h5>Printing & Installation</h5>
                    <p>
                        High-quality, weather-resistant materials are used for printing, ensuring durability and color accuracy across the campaign duration.
                    </p>
                </div>  


                <div class="col-lg-6">
                    <h5>Monitoring & Reporting</h5>
                    <p>
                        We track vehicle routes, campaign coverage, and exposure metrics, providing transparent reporting to measure performance.
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


                <div class="col-lg-8 vertical-center">
                    <h4>Why Choose DataMySite for Abu Dhabi Taxi Advertising</h4>
                    <ul>
                        <li>Local expertise and knowledge of Abu Dhabi’s transport network</li>
                        <li>Access to official ITC-registered taxis</li>
                        <li>High-quality printing and creative design</li>
                       <li> End-to-end service — from approval to execution</li>
                        <li>Transparent pricing and real-time reporting</li>
                        <li>Proven success across diverse industries</li>
                    </ul>
                    <p>At DataMySite, we combine creativity, technology, and strategy to ensure your taxi advertising campaign makes a lasting impression across the capital.</p>
                    <br>
                    <h4>Drive Your Brand Forward with Abu Dhabi Taxi Advertising</h4>
                    <p>
                        From business districts to leisure destinations, Abu Dhabi Taxi Advertising gives your brand unmatched visibility and credibility across the capital. Whether you’re targeting local commuters or international visitors, every ride becomes an opportunity to connect with potential customers.
                        <br>
                        At DataMySite, we make it easy to design, manage, and optimize your taxi advertising campaign — ensuring your brand stays visible everywhere the road leads.
                        <br><br>
                        Contact us today to discuss your Abu Dhabi taxi advertising campaign and get a customized proposal for your brand.
.
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
                                        <span class="badge">&nbsp;</span>How much does taxi advertising cost in Abu Dhabi?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-10" class="collapse show" aria-labelledby="faqHeading-10" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Costs depend on taxi type, ad size (partial or full wrap), and duration. Campaigns typically start from AED 3,000 per taxi per month, with bulk discounts available.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-11">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-11" data-aria-expanded="false" data-aria-controls="faqCollapse-11">
                                        <span class="badge">&nbsp;</span>Is approval required from Abu Dhabi authorities?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-11" class="collapse" aria-labelledby="faqHeading-11" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Yes, all taxi advertising must be approved by the Integrated Transport Centre (ITC). We manage all paperwork and approvals for you.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-12">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-12" data-aria-expanded="false" data-aria-controls="faqCollapse-12">
                                        <span class="badge">&nbsp;</span>Can I choose specific taxi types or zones?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-12" class="collapse" aria-labelledby="faqHeading-12" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Yes. We can target taxis operating in specific areas like Corniche, Yas Island, or Airport routes, depending on your audience.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-13">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-13" data-aria-expanded="false" data-aria-controls="faqCollapse-13">
                                        <span class="badge">&nbsp;</span>How long can my ad stay on the taxi?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-13" class="collapse" aria-labelledby="faqHeading-13" data-parent="#accordion">
                                <div class="card-body">
                                    <p>
                                        Campaigns can run from one month to a year, depending on your marketing objectives.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-14">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-14" data-aria-expanded="false" data-aria-controls="faqCollapse-14">
                                        <span class="badge">&nbsp;</span>Are digital taxi ads available in Abu Dhabi?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-14" class="collapse" aria-labelledby="faqHeading-14" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Yes. Some taxis are equipped with rooftop digital screens, ideal for dynamic and time-based campaigns.</p>
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