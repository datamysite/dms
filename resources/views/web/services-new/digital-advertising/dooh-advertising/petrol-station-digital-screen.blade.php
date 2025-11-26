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
                        <h2>Engage Drivers at Every Stop</h2>
                        <h4>with Smart Digital Advertising</h4>
                        <br>
                        <p>
                            At DataMySite, we help businesses leverage digital screens at fuel stations to deliver high-impact advertising campaigns that combine location-based targeting, frequency, and visibility — creating the perfect formula for brand recall.
                            <br>
                            Whether you’re promoting a product launch, special offer, or awareness campaign, petrol station digital screens place your brand directly in front of motorists, commuters, and neighborhood shoppers — all day, every day.
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
                    <h4>What Is Petrol Station Digital Screen Advertising?</h4>
                    <br>
                    <p class="mb-2">
                        Petrol Station Digital Screen Advertising involves placing LED and LCD display screens across key touchpoints within fuel stations — at pump tops, convenience store entrances, forecourts, and waiting areas. These screens display short video ads, animations, or brand messages in a looped format, ensuring constant visibility to all visitors.
                        <br><br>
                        It’s a part of the DOOH (Digital Out-of-Home) ecosystem — a smart, data-driven way to reach consumers outdoors with measurable impact and flexible ad scheduling.
                        <br><br>
                        Unlike traditional billboards, these digital screens offer dynamic content, real-time updates, and audience targeting by location and time of day.
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
                    <img src="{{URL::to('/public/section-images/image156.png')}}" width="100%" alt="Why choose us">
                </div> 
                <div class="col-lg-1"></div>
                <div class="col-lg-8 vertical-center">
                    <h4>Why Petrol Station Advertising Works in Dubai and the UAE</h4>
                    <p>
                        Dubai and the UAE have one of the highest vehicle ownership rates in the region, with thousands of drivers visiting fuel stations daily. This makes petrol stations a high-frequency, high-dwell-time environment — ideal for brand exposure and recall.
                        <br>
                        Here’s why it works so effectively:
                    </p>
                    <ul>
                        <li>
                            <strong>Guaranteed Audience Reach</strong><br>
                            Every day, thousands of motorists refuel their cars or visit convenience stores attached to petrol stations. Each visit lasts 3–7 minutes, providing enough time for your message to make a lasting impression.
                        </li>
                        <li>
                            <strong>Captive Attention</strong><br>
                            At the pump or inside the store, customers are stationary and attentive. This environment offers 100% viewability — unlike scrolling feeds or skippable digital ads.
                        </li>
                        <li>
                            <strong>High-Frequency Exposure</strong><br>
                            Regular commuters visit the same petrol stations multiple times per week, meaning your campaign benefits from repeated exposure and stronger message retention.
                        </li>
                        <li>
                            <strong>Location Targeting</strong><br>
                            Petrol station networks span across premium urban areas, highways, and residential zones — allowing precise targeting based on demographics, location, and traffic flow.
                        </li>
                        <li>
                            <strong>Dynamic and Flexible</strong><br>
                            Digital screens can display multiple creatives throughout the day, making it easy to run time-based promotions (morning coffee deals, evening product launches, or weekend campaigns).
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
                    <h4>Where Are Digital Screens Located at Petrol Stations?</h4>
                    <p>Digital advertising screens are strategically placed across high-visibility touchpoints to ensure maximum audience engagement:</p>
                    <ul>
                        <li><strong>Pump-Top Screens</strong>: Directly in front of drivers while refueling — excellent for short 10–20 second video spots.


                        <li><strong>Forecourt LED Screens</strong>: Large outdoor digital displays visible from multiple directions.</li>


                        <li><strong>Convenience Store Screens</strong>: Positioned near entrances, payment counters, and product aisles.</li>


                        <li><strong>Canopy Screens</strong>: Overhead displays capturing attention before or after refueling.</li>


                        <li><strong>Exit Area Screens</strong>: Perfect for brand reminders and last-moment messaging.</li>
                    </ul>
                    <p>These placements create a 360° brand experience from the moment a customer drives in until they leave the station.</p>
                    <br>

                    <h4>Industries That Benefit from Petrol Station Digital Screen Advertising</h4>
                    <p>Petrol station advertising is one of the most versatile and cost-effective DOOH mediums available. It benefits nearly every business category, including:</p>
                    <ul>
                        <li><strong>Automotive</strong>: Car launches, service centers, or lubricant promotions.</li>


                        <li><strong>FMCG & Beverages</strong>: Promote quick-purchase items like snacks and energy drinks.</li>


                        <li><strong>Telecom</strong>: Highlight new plans or mobile offers to daily commuters.</li>


                        <li><strong>Retail & E-commerce</strong>: Drive online traffic with QR codes or flash sale announcements.</li>


                        <li><strong>Financial Services</strong>: Promote bank offers, insurance plans, or credit cards.</li>


                        <li><strong>Travel & Hospitality</strong>: Encourage road trips, staycations, and holiday packages.</li>


                        <li><strong>Technology & Apps</strong>: Perfect for app downloads or digital product awareness.</li>
                    </ul>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-3 vertical-center">
                    <img src="{{URL::to('/public/section-images/image157.png')}}" width="100%" alt="Why choose us">
                </div> 
            </div>

          </div>

        </section>


        <section id="service-cards" class="blog-section striped-section section why-us-section why-out-us-section">

          <div class="container">

            <div class="row gy-4 first-row split-block">

                <div class="col-lg-3 vertical-center">
                    <img src="{{URL::to('/public/section-images/image158.png')}}" width="100%" alt="Why choose us">
                </div>

                <div class="col-lg-1"></div>
                <div class="col-lg-8 vertical-center">
                    <h4>Why Choose DataMySite for Petrol Station Advertising in Dubai</h4>
                    <p>
                        At DataMySite, we specialize in location-based DOOH campaigns designed to reach the right audience at the right time. Our team combines strategic planning, data analytics, and creative execution to help your brand stand out across the UAE’s most frequented petrol stations.
                        <br>
                        <strong>Our Services Include:</strong>
                    </p>
                    <ul>
                        <li><strong>Strategic Planning & Site Selection</strong>: Identify the best stations and screen placements for your audience.</li>


                        <li><strong>Creative Design & Content Development</strong>: Eye-catching videos, animations, and motion graphics for digital displays.</li>


                        <li><strong>Campaign Scheduling</strong>: Set dayparting schedules for morning, afternoon, or evening audiences.</li>


                        <li><strong>Performance Tracking & Reporting</strong>: Monitor impressions, dwell time, and engagement metrics.</li>


                        <li><strong>Multi-Location Deployment</strong>: Run synchronized campaigns across multiple cities or regions.</li>
                    </ul>
                    <p>We coordinate directly with ENOC, ADNOC, Emarat, and other partners to ensure seamless campaign execution from setup to delivery.</p>
                    <br>
                    <h4>Advantages of Petrol Station Digital Advertising</h4>
                    <ul>
                       <li><strong> 100% Visibility</strong> – Viewers can’t skip, scroll, or mute the ad.</li>


                        <li><strong>Longer Engagement </strong>– Average dwell time of 3–7 minutes.</li>


                        <li><strong>Geo-Targeted Campaigns</strong> – Choose specific stations or routes.</li>


                        <li><strong>Dynamic Content Scheduling </strong>– Update creatives in real time.</li>


                        <li><strong>High ROI</strong> – Repeated exposure to a targeted audience.</li>


                        <li><strong>Eco-Friendly Medium</strong> – Paperless, digital, and sustainable.</li>
                    </ul>
                </div> 
            </div>

          </div>

        </section>

        <section id="service-cards" class="blog-section section why-us-section why-out-us-section">

          <div class="container">

            <div class="row gy-4 first-row">


                <div class="col-lg-8 vertical-center">
                    <h4>How Petrol Station DOOH Fits into an Integrated Marketing Strategy</h4>
                    <p>
                        Petrol station digital screens are not standalone — they can amplify your overall media strategy by reinforcing your online campaigns. When paired with Google Ads, social media, or influencer marketing, they create consistent visibility both online and offline.
                        <br><br>
                        This multi-channel synergy strengthens brand awareness, trust, and recall across the consumer journey — from seeing your ad at the petrol station to clicking your website later that day.
                    </p>

                    <br>
                    <h4>The Future of Petrol Station Digital Advertising in the UAE</h4>
                    <p>
                        As Digital Out-of-Home (DOOH) technology advances, petrol station screens are becoming smarter, more interactive, and data-driven. With AI-powered targeting, real-time weather or traffic triggers, and programmatic ad buying, the UAE’s DOOH ecosystem is evolving rapidly.
                        <br>
                        Brands that embrace petrol station digital advertising today are positioning themselves for the next generation of outdoor communication — one that’s measurable, responsive, and always in motion.
                    </p>
                    <br>
                    <h4>Connect with Customers Where They Pause — At Every Stop</h4>
                    <p>
                        With Petrol Station Digital Screen Advertising, your brand becomes part of people’s daily journeys.
                        <br><br>
                         From Dubai’s busiest roads to Abu Dhabi’s executive neighborhoods, your message travels with your audience — building awareness and trust with every refuel.
                         <br><br>
                        Contact DataMySite today to book your Petrol Station DOOH Advertising campaign and take your brand visibility to the next level.
                    </p>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-3 vertical-center">
                    <img src="{{URL::to('/public/section-images/image159.png')}}" width="100%" alt="Why choose us">
                </div> 
            </div>

          </div>

        </section>


        <section id="service-cards" class="blog-section striped-section section pr-blogs-section">

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

        <section id="service-cards" class="blog-section section    faq-new-section">

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
                                        <span class="badge">&nbsp;</span>What is Petrol Station Digital Screen Advertising?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-10" class="collapse show" aria-labelledby="faqHeading-10" data-parent="#accordion">
                                <div class="card-body">
                                    <p>It’s a form of outdoor advertising that displays video or image content on digital screens at fuel stations — targeting drivers and customers during refueling or shopping.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-11">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-11" data-aria-expanded="false" data-aria-controls="faqCollapse-11">
                                        <span class="badge">&nbsp;</span>Where can these digital screens be found?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-11" class="collapse" aria-labelledby="faqHeading-11" data-parent="#accordion">
                                <div class="card-body">
                                    <p>They’re installed at pump tops, inside convenience stores, forecourts, and entrance/exit points of major petrol stations like ENOC and ADNOC.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-12">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-12" data-aria-expanded="false" data-aria-controls="faqCollapse-12">
                                        <span class="badge">&nbsp;</span>What is the duration of ads shown on these screens?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-12" class="collapse" aria-labelledby="faqHeading-12" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Typically, each ad lasts between 10 to 20 seconds, playing multiple times per hour depending on campaign scheduling.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-13">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-13" data-aria-expanded="false" data-aria-controls="faqCollapse-13">
                                        <span class="badge">&nbsp;</span>What are the benefits of this advertising format?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-13" class="collapse" aria-labelledby="faqHeading-13" data-parent="#accordion">
                                <div class="card-body">
                                    <p>
                                        High dwell time, guaranteed attention, location targeting, and real-time creative flexibility make it one of the most effective DOOH channels.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-14">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-14" data-aria-expanded="false" data-aria-controls="faqCollapse-14">
                                        <span class="badge">&nbsp;</span>How can DataMySite help?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-14" class="collapse" aria-labelledby="faqHeading-14" data-parent="#accordion">
                                <div class="card-body">
                                    <p>We manage the entire campaign — from creative design and site selection to ad placement, monitoring, and performance reporting — ensuring maximum visibility and ROI.</p>
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