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
                        <h2>Elevate Your Brand</h2>
                        <h4>with Etihad Airline Advertising in the UAE</h4>
                        <br>
                        <p>
                            At DataMySite, we create and manage high-impact Etihad Airline Advertising campaigns that help your brand engage travelers at every touchpoint — from check-in counters and lounges to inflight entertainment and digital media.
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
                    <h4>What is Etihad Airline Advertising?</h4>
                    <br>
                    <p>
                        Etihad Airline Advertising allows businesses to display brand messages across Etihad Airways’ various customer touchpoints, including inflight videos, seatback screens, airport lounges, magazines, digital booking channels, and aircraft branding.
                        <br><br>
                        With its global hub in Abu Dhabi, Etihad connects passengers to major destinations in the Middle East, Europe, Asia, and North America. Advertising with Etihad enables your brand to engage a diverse international audience while aligning with a symbol of premium service and UAE excellence.
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
                    <h4>Advertising Options with Etihad Airways</h4>
                    <p>At DataMySite, we offer full-service access to Etihad’s advertising inventory, helping brands tailor campaigns that meet specific goals and target demographics.</p>
                </div>
                <div class="col-lg-4">
                    <h5>Inflight Entertainment Advertising</h5>
                    <p>
                        Etihad’s inflight entertainment system — E-BOX — offers passengers hours of movies, shows, and content. Video ads displayed before or during this content deliver powerful visibility with measurable impact.
                    </p>
                </div>
                <div class="col-lg-4">
                    <h5>Inflight Magazine Advertising</h5>
                    <p>Etihad’s magazine, Atlas, reaches a global audience with engaging travel and lifestyle content. Placing your ad in Atlas gives your brand credibility and reach among affluent readers.</p>
                </div>
                <div class="col-lg-4">
                    <h5>Cabin & Seat Branding</h5>
                    <p>
                        Custom branding opportunities like tray tables, headrest covers, seatback displays, and menu cards ensure your brand stays visible for the entire journey..
                    </p>
                </div>
                <div class="col-lg-4">
                    <h5>Airport Lounge Advertising</h5>
                    <p>
                        Target the world’s elite travelers in Etihad’s exclusive lounges at Abu Dhabi International Airport. Lounge advertising connects your brand with VIP travelers in a premium setting.
                    </p>
                </div>  


                <div class="col-lg-4">
                    <h5>Check-In & Boarding Area Displays</h5>
                    <p>
                        Use digital screens, banners, and signage in Etihad’s check-in zones and boarding gates to engage travelers before their flights.
                    </p>
                </div> 


                <div class="col-lg-4">
                    <h5>Baggage Claim & Arrival Zone Advertising</h5>
                    <p>
                        Reach both arriving and departing passengers with ads placed near baggage belts and exit areas — ensuring visibility even after the flight ends.
                    </p>
                </div> 


                <div class="col-lg-12">
                    <h5>Digital Advertising on Etihad.com</h5>
                    <p>
                        Etihad’s digital platforms attract millions of visitors monthly. Online display ads, banners, and targeted campaigns enable you to reach travelers during the booking process.
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
                    <h4>Who Should Use Etihad Airline Advertising?</h4>
                    <p>
                        This platform is ideal for brands aiming to reach an international, high-value audience, including:
                    </p>
                    <ul>
                        <li><strong>Real Estate Developers</strong><br> – Promoting premium properties to global investors.</li>
                        <li><strong>Luxury Brands</strong><br> – Fashion, watches, jewelry, and lifestyle labels.</li>
                        <li><strong>Financial Institutions</strong><br> – Banks, credit cards, and fintech solutions.</li>
                        <li><strong>Tourism Boards & Airlines</strong><br> – Promoting travel destinations and hospitality services.</li>
                        <li><strong>Healthcare & Education Providers</strong><br> – Medical tourism, universities, and international programs.</li>
                        <li><strong>Technology Companies</strong><br> – Reaching professionals and decision-makers globally.</li>
                    </ul>
                </div>
                <div class="col-lg-2 vertical-center">
                    <img src="{{URL::to('/public/section-images/image41.png')}}" width="100%" alt="Why choose us">
                </div> 

                <div class="col-lg-5 vertical-center">
                    <h4>The Etihad Advertising Experience</h4>
                    <p>A typical campaign with Etihad includes:</p>
                    <ul>
                        <li>
                            <strong>Step 1 – Consultation & Planning:</strong><br>
                            We assess your goals, target audience, and routes to create a customized media plan.
                        </li>
                        <li>
                            <strong>Step 2 – Creative Development:</strong><br>
                            Our creative experts design visually engaging, brand-compliant materials that fit Etihad’s luxury aesthetic.
                        </li>
                        <li>
                            <strong>Step 3 – Placement & Launch:</strong><br>
                            Your ads are strategically positioned — inflight, on-ground, or online — to ensure high visibility.
                        </li>
                        <li>
                            <strong>Step 4 – Monitoring & Optimization:</strong><br>
                            We provide campaign performance data, impressions, and audience insights for transparency and optimization.
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
                    <h4>Why Choose Etihad Airline Advertising?</h4>
                    <p>
                        Advertising with Etihad Airways means associating your brand with a global name known for its elegance, reliability, and exceptional service. It’s a marketing opportunity that combines visibility, exclusivity, and prestige.
                        <br>
                        Here’s why businesses in Dubai, Abu Dhabi, and beyond are choosing Etihad as their advertising partner:
                    </p>
                </div>
                <div class="col-lg-6">
                    <h5>Access to a Global Premium Audience</h5>
                    <p>
                        Etihad passengers represent a blend of business professionals, luxury travelers, and international tourists — people with high spending power and decision-making influence.
                    </p>
                </div>
                <div class="col-lg-6">
                    <h5>Strong Middle East & Global Reach</h5>
                    <p>
                        With operations in over 80 destinations worldwide, Etihad connects the UAE to major business and leisure markets, including London, New York, Mumbai, and Sydney.
                    </p>
                </div>
                <div class="col-lg-6">
                    <h5>Powerful Brand Association</h5>
                    <p>
                        Etihad is a brand associated with world-class quality and innovation. Partnering with Etihad through advertising enhances your brand’s reputation and global image.
                    </p>
                </div>
                <div class="col-lg-6">
                    <h5>Engaged & Captive Audience</h5>
                    <p>
                        Inflight environments provide one of the longest and most focused exposure periods — with passengers spending hours interacting with Etihad’s content and onboard entertainment.
                    </p>
                </div> 
                <div class="col-lg-12">
                    <h5>Multi-Channel Opportunities</h5>
                    <p>
                        From physical placements to digital engagement, Etihad offers a wide range of advertising formats to deliver your message effectively.
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
                    <h4>Benefits of Etihad Airline Advertising</h4>
                    <p>
                        Etihad Advertising combines prestige, visibility, and precision targeting — delivering exceptional brand impact.
                    </p>
                    <ul>
                        <li>
                            <strong>Extended Viewer Attention</strong><br>
                            Airline passengers have a longer engagement window compared to traditional or online audiences, ensuring deeper brand recall.
                        </li>


                        <li>
                            <strong>Premium Brand Alignment</strong><br>
                            Your business benefits from the credibility and elegance associated with the Etihad brand.
                        </li>


                        <li>
                            <strong>Global Reach from a UAE Hub</strong><br>
                            Etihad connects East and West through Abu Dhabi — offering unmatched exposure to international markets.
                        </li>


                        <li>
                            <strong>Targeted Campaigns</strong><br>
                            Choose specific routes, traveler segments, or destination markets for maximum relevance and efficiency.
                        </li>


                        <li>
                            <strong>Non-Interruptive Environment</strong><br>
                            Airline advertising is viewed in a distraction-free setting, making messages more memorable and impactful.
                        </li>


                        <li>
                            <strong>High ROI for Premium Brands</strong><br>
                            For luxury, travel, finance, and lifestyle sectors, Etihad advertising offers one of the highest return-on-investment ratios in OOH and travel media.
                        </li>

                    </ul>
                </div>
            </div>

          </div>

        </section>


        <section id="service-cards" class="blog-section section striped-section why-us-section why-out-us-section">

          <div class="container">

            <div class="row gy-4 first-row">


                <div class="col-lg-8 vertical-center">
                    <h4>Etihad Airline Advertising with DataMySite</h4>
                    <p>
                        At DataMySite, we specialize in planning, managing, and optimizing Etihad Airline Advertising campaigns across every available format. From creative strategy to execution, our team ensures your brand achieves maximum reach and impact.
                        <br>
                        <strong>Our Services Include:</strong>
                    </p>
                    <ul>
                        <li>Access to premium Etihad ad placements</li>
                        <li>Media planning and audience targeting</li>
                        <li>Design and creative consultation</li>
                        <li>Campaign execution and reporting</li>
                        <li>Compliance with Etihad and airport regulations</li>
                    </ul>
                    <p>Whether you’re launching a regional campaign or a multi-country awareness strategy, DataMySite helps your brand take flight with the power of Etihad Airways.</p>
                    <br>
                    <h4>Final Thoughts</h4>
                    <p>
                        Etihad Airline Advertising is more than exposure — it’s about connecting with travelers who matter most. From business executives to global explorers, Etihad’s audience is engaged, attentive, and receptive to high-quality brand messaging.
                        <br><br>
                        At DataMySite, we help brands tap into this elite environment, ensuring every impression counts. Whether through inflight screens, premium lounges, or digital campaigns, your brand can fly higher with Etihad’s trusted global network.
                        <br><br>
                        Contact DataMySite today to discuss your Etihad Airline Advertising campaign and explore opportunities to make your brand visible across the skies — from Abu Dhabi to the world.
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
                                        <span class="badge">&nbsp;</span>How much does Etihad Airline Advertising cost?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-10" class="collapse show" aria-labelledby="faqHeading-10" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Pricing depends on ad format, duration, and flight routes. DataMySite provides flexible options for both large-scale and targeted campaigns.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-11">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-11" data-aria-expanded="false" data-aria-controls="faqCollapse-11">
                                        <span class="badge">&nbsp;</span>Can I advertise only on specific Etihad routes?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-11" class="collapse" aria-labelledby="faqHeading-11" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Yes, you can select routes or regions — such as GCC, Europe, or Asia — for targeted exposure.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-12">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-12" data-aria-expanded="false" data-aria-controls="faqCollapse-12">
                                        <span class="badge">&nbsp;</span>How long should a campaign run to be effective?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-12" class="collapse" aria-labelledby="faqHeading-12" data-parent="#accordion">
                                <div class="card-body">
                                    <p>A minimum of one month is recommended for visibility, though long-term campaigns build stronger brand recall.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-13">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-13" data-aria-expanded="false" data-aria-controls="faqCollapse-13">
                                        <span class="badge">&nbsp;</span>Are there advertising options outside the aircraft?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-13" class="collapse" aria-labelledby="faqHeading-13" data-parent="#accordion">
                                <div class="card-body">
                                    <p>
                                        Yes, Etihad offers branding in lounges, check-in areas, and airport spaces — perfect for pre-flight visibility.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-14">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-14" data-aria-expanded="false" data-aria-controls="faqCollapse-14">
                                        <span class="badge">&nbsp;</span>What makes Etihad advertising different from other airlines?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-14" class="collapse" aria-labelledby="faqHeading-14" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Etihad’s premium positioning, global reach, and strong brand reputation make it ideal for brands seeking luxury and international appeal.</p>
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