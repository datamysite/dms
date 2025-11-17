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
                        <h4>with SpiceJet Airline across India, the Middle East, and other international destinations</h4>
                        <br>
                        <p>
                            At DataMySite, we specialize in creating data-driven and creative SpiceJet advertising campaigns that capture travelers’ attention from takeoff to landing. Whether you’re looking to boost brand awareness, launch a new product, or engage specific demographics, SpiceJet advertising delivers unmatched visibility across a wide audience.
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
                    <h4>Why Choose SpiceJet for Advertising</h4>
                    <p>
                        SpiceJet is among the most recognized names in aviation across India and the UAE, carrying millions of passengers annually across domestic and international routes. The airline’s consistent service, affordable fares, and extensive connectivity make it a preferred choice for business and leisure travelers alike — and an exceptional medium for advertisers.
                        <br>
                        Here’s why SpiceJet Airline Advertising stands out:
                    </p>
                    <ul>
                        <li>
                            <strong>Extensive Reach:</strong>
                            With flights operating across India, the Gulf region, and Southeast Asia, your message travels to multiple high-potential markets simultaneously.
                        </li>


                        <li>
                            <strong>Diverse Audience Mix:</strong>
                            From professionals and families to entrepreneurs and frequent flyers, SpiceJet’s audience offers broad exposure to varied demographics.
                        </li>


                        <li>
                            <strong>High Dwell Time:</strong>
                            Airline advertising benefits from extended exposure, as passengers engage with visuals and branded touchpoints throughout their journey.
                        </li>


                        <li>
                            <strong>Brand Association:</strong>
                            Partnering with a well-known airline like SpiceJet enhances your brand’s reputation, conveying trust, credibility, and reliability.
                        </li>
                    </ul>
                    <p>
                        At DataMySite, we make sure your brand takes off in the right direction — strategically designed and expertly executed to maximize impact.
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
                    <h4>Types of SpiceJet Airline Advertising</h4>
                    <p>
                        SpiceJet offers a wide variety of advertising options, both in-flight and on-ground, to help brands capture attention at multiple points in a passenger’s journey.
                    </p>
                </div>
                <div class="col-lg-6">
                    <h5>In-Flight Magazine Advertising</h5>
                    <p>
                        SpiceJet’s in-flight magazine reaches thousands of passengers every day. It’s the ideal space for brands to tell their story through visually engaging ads or editorial features. Passengers often browse the magazine during takeoff, cruising, or landing — offering uninterrupted attention and deep brand engagement.
                    </p>
                </div>
                <div class="col-lg-6">
                    <h5>Seatback Branding</h5>
                    <p>
                        Seatback advertising ensures your message is always in sight. Whether it’s branding on the tray tables, seat covers, or pockets, this placement keeps your ad directly in front of passengers for hours, making it one of the most effective visibility options.
                    </p>
                </div>
                <div class="col-lg-6">
                    <h5>Overhead Bin & Cabin Panel Advertising</h5>
                    <p>
                        The cabin interior offers a variety of spaces for bold, eye-catching visuals. Branding overhead bins, side walls, or aisle panels ensures maximum exposure and a premium visual experience for travelers throughout the flight.
                    </p>
                </div>
                <div class="col-lg-6">
                    <h5>In-Flight Video & Audio Announcements</h5>
                    <p>
                        Showcase your brand through video commercials or sponsored messages during the in-flight entertainment sequence. With passengers’ undivided attention in a distraction-free environment, this format provides excellent recall and engagement.
                    </p>
                </div>  


                <div class="col-lg-6">
                    <h5>Boarding Pass Advertising</h5>
                    <p>
                        Each passenger handles their boarding pass multiple times — from check-in to boarding and post-flight reference. This makes boarding pass ads a simple yet powerful way to increase brand impressions at a minimal cost.
                    </p>
                </div> 


                <div class="col-lg-6">
                    <h5>Airport Touchpoints</h5>
                    <p>
                        Beyond the aircraft, SpiceJet provides branding options at check-in counters, boarding gates, and baggage claim areas. These pre-flight and post-flight touchpoints allow brands to reinforce their message across the entire travel experience.
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
                    <h4>Advantages of SpiceJet Advertising</h4>
                    <p>
                        Advertising on SpiceJet isn’t just about visibility — it’s about meaningful engagement that drives brand recall and trust.
                        Here’s what makes it so effective:
                    </p>
                    <ul>
                        <li>
                           <strong> Massive Reach at Affordable Rates</strong>
                            SpiceJet connects with millions of passengers monthly, providing advertisers with massive exposure at a lower cost compared to traditional media.
                        </li>


                        <li>
                            <strong>High Engagement Environment</strong>
                            Passengers have extended idle time during flights, increasing their likelihood to engage with ad content.
                        </li>


                        <li>
                            <strong>Uncluttered Ad Space</strong>
                            Unlike social or digital media platforms filled with competing content, airline advertising ensures undivided audience attention.
                        </li>


                        <li>
                            <strong>Premium Brand Association</strong>
                            Being featured on an international airline automatically elevates brand perception, creating a sense of prestige and reliability.
                        </li>


                        <li>
                            <strong>Targeted Market Exposure</strong>
                            Choose routes and flight categories that align with your audience — whether you’re targeting travelers from the UAE, India, or other key markets.
                        </li>
                    </ul>
                </div>
                <div class="col-lg-2 vertical-center">
                    <img src="{{URL::to('/public/section-images/image41.png')}}" width="100%" alt="Why choose us">
                </div> 

                <div class="col-lg-5 vertical-center">
                    <h4>Industries That Benefit from SpiceJet Advertising</h4>
                    <p>SpiceJet airline ads serve as an ideal promotional platform for a wide range of industries, including:</p>
                    <ul>
                        <li><strong>Travel & Tourism</strong>: Hotels, destinations, and travel agencies can connect with passengers already in a travel mindset.</li>

                        <li><strong>Banking & Finance</strong>: Promote financial products, cards, or investment services to professionals and entrepreneurs.</li>

                        <li><strong>Luxury & Retail</strong>: Fashion, jewelry, and lifestyle brands can target affluent travelers.</li>

                        <li><strong>Technology & Apps</strong>: Showcase digital platforms, e-commerce services, or travel-related apps.</li>

                        <li><strong>Real Estate</strong>: Capture investor attention with visually compelling property campaigns.</li>

                        <li><strong>Education & Training</strong>: Highlight study abroad programs or professional courses to aspiring students and professionals.</li>
                    </ul>
                    <p>At DataMySite, we tailor each campaign to ensure your brand message resonates with the right audience, in the right way, at the right time.</p>
                </div>
            </div>

          </div>

        </section>

    
        <section id="service-cards" class="blog-section striped-section section why-us-section why-out-us-section">

          <div class="container">

            <div class="row gy-4 first-row split-block">


                <div class="col-lg-3 vertical-center">
                    <img src="{{URL::to('/public/section-images/image47.png')}}" width="100%" alt="Why choose us">
                </div> 
                <div class="col-lg-1"></div>
                <div class="col-lg-8 vertical-center">
                    <h4>How DataMySite Delivers Impactful SpiceJet Advertising</h4>
                    <p>
                        Our process focuses on creativity, precision, and measurable results. When you choose DataMySite for SpiceJet advertising, you get:
                    </p>
                    <ul>
                        <li>
                            <strong>Strategic Planning:</strong><br>
                            We assess your brand goals, audience, and target routes to build a campaign that delivers maximum visibility.
                        </li>


                        <li>
                            <strong>Creative Excellence:</strong><br>
                            Our team designs striking visuals and ad copy that align perfectly with SpiceJet’s aesthetic and passenger mood.
                        </li>


                        <li>
                            <strong>Seamless Execution:</strong><br>
                            We manage the entire process — from airline coordination and creative approvals to campaign deployment.
                        </li>


                        <li>
                            <strong>Performance Reporting:</strong><br>
                            Transparency is key. We provide detailed analytics on impressions, engagement, and brand lift to evaluate success.
                        </li>
                    </ul>
                    <p>
                        With DataMySite, your brand is not just seen — it’s remembered.
                    </p>
                </div>
            </div>

          </div>

        </section>


        <section id="service-cards" class="blog-section section why-us-section why-out-us-section">

          <div class="container">

            <div class="row gy-4 first-row">


                <div class="col-lg-8 vertical-center">
                    <h4>Why Choose DataMySite for SpiceJet Advertising</h4>
                    <ul>
                        <li>Deep Airline Advertising Expertise — We understand how to leverage every touchpoint in the passenger journey.</li>
                        <li>Creative & Strategic Approach — Every campaign is customized to your objectives and market demographics.</li>
                        <li>Affordable, Scalable Solutions — Whether for short-term promotions or long-term brand building, we offer flexible options.</li>
                        <li>Full Transparency — We keep you informed at every step, with clear timelines, costs, and performance metrics.</li>
                    </ul>
                    <p>Our experience across UAE and Indian airline markets ensures that your advertising investment delivers measurable brand growth and ROI.</p>
                    <br>
                    <h4>Final Thoughts</h4>
                    <p>
                        SpiceJet Airline Advertising transforms every flight into a high-impact brand experience. It offers unparalleled visibility, credibility, and engagement — ensuring your brand connects with passengers during one of the most focused and relaxed periods of their day.
                        <br><br>
                        At DataMySite, we help you design, plan, and execute powerful SpiceJet advertising campaigns that take your brand to new heights — literally and figuratively.
                        <br><br>
                        Whether you’re a global enterprise or a regional startup, we’ll help you make your mark across the skies of India and the UAE.

                    </p>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-3 vertical-center">
                    <img src="{{URL::to('/public/section-images/image47.png')}}" width="100%" alt="Why choose us">
                </div> 
            </div>

          </div>

        </section>


        <section id="service-cards" class="blog-section section striped-section  pr-blogs-section">

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

        <section id="service-cards" class="blog-section section  faq-new-section">

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
                                        <span class="badge">&nbsp;</span>How many passengers does SpiceJet carry annually?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-10" class="collapse show" aria-labelledby="faqHeading-10" data-parent="#accordion">
                                <div class="card-body">
                                    <p>SpiceJet serves over 20 million passengers annually across India, the Middle East, and Asia — offering massive exposure for brands.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-11">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-11" data-aria-expanded="false" data-aria-controls="faqCollapse-11">
                                        <span class="badge">&nbsp;</span>What types of ad formats are available on SpiceJet?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-11" class="collapse" aria-labelledby="faqHeading-11" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Brands can choose from in-flight magazine ads, seatback branding, tray table ads, video commercials, boarding pass placements, and airport touchpoints.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-12">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-12" data-aria-expanded="false" data-aria-controls="faqCollapse-12">
                                        <span class="badge">&nbsp;</span>How long does it take to launch a campaign?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-12" class="collapse" aria-labelledby="faqHeading-12" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Campaigns typically go live within 2–4 weeks, depending on creative approvals and format selection.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-13">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-13" data-aria-expanded="false" data-aria-controls="faqCollapse-13">
                                        <span class="badge">&nbsp;</span>Can small businesses advertise with SpiceJet?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-13" class="collapse" aria-labelledby="faqHeading-13" data-parent="#accordion">
                                <div class="card-body">
                                    <p>
                                        Yes, we offer flexible budget options for small and mid-sized businesses to access high-quality airline advertising opportunities.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-14">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-14" data-aria-expanded="false" data-aria-controls="faqCollapse-14">
                                        <span class="badge">&nbsp;</span>Is international targeting possible through SpiceJet routes?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-14" class="collapse" aria-labelledby="faqHeading-14" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Absolutely. SpiceJet connects Dubai and other Middle Eastern cities to multiple Indian and Asian destinations, allowing for targeted regional campaigns.</p>
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