@extends('web.includes.master')
@section('metaAddition')
    
@endsection
@section('addStyle')
    <link href="{{URL::to('/public')}}/assets/css/service.css" rel="stylesheet">
    <style>
    </style>
@endsection
@section('content')

    <main class="main">

        <!-- Page Title -->
          <div class="page-title dark-background" data-aos="fade" style="background-image: url('{{URL::to('public/assets/img/service-new/'.$subservice->slug.'.jpg')}}');">
            <div class="container head-container-service">
                <div class="row">
                    <div class="col-lg-8 head-para-service">
                        <h1>&#10687; {{$subservice->name}}</h1>
                        <h2>Light Up the Streets</h2>
                        <h4>with Powerful Lamp Post Advertising</h4>
                        <br>
                        <p>
                            At DataMySite, we specialize in lamp post advertising across Dubai and the UAE, offering static and digital lamp post solutions designed to capture attention, enhance brand recall, and elevate visibility for your campaigns.
                            <br>
                            From strategic placements on Sheikh Zayed Road to city-center streets, our lamp post ads deliver high-impact exposure to drivers, pedestrians, and daily commuters — ensuring your brand becomes part of the city’s visual rhythm.
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
                                
                                <input type="hidden" name="service" value="{{$service->name}}" required>
                                                                
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
                <div class="col-lg-6 vertical-center">
                    <iframe class="service-iframe" src="https://www.youtube.com/embed/Ny7v7w6dtq4?si=oAHAurPi9RcZjBPT" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>  
                <div class="col-lg-6 vertical-center" data-aos="fade-up" data-aos-delay="100">

                    <h4>What is Lamp Post Advertising?</h4>
                    <p>
                        Lamp Post Advertising (also known as streetlight advertising) involves placing promotional banners, flags, or digital screens on lamp posts along roads, walkways, or parking areas.
                        <br><bR>
                        These ads are placed at eye level — making them easily visible to both drivers and pedestrians. Unlike large-scale billboards, lamp post ads offer repetition and proximity, with multiple ads placed in sequence along a route.
                        <br>
                        In Dubai’s vibrant and fast-moving landscape, where every brand competes for attention, Lamp Post Advertising offers a unique way to reach audiences through consistent, high-frequency exposure. Whether along bustling highways, urban streets, or commercial districts, lamp post ads ensure your message shines — day and night.
                        <br><br>
                        This repetition reinforces brand awareness and helps create a strong visual identity across key city zones.
                    </p>

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

            <div class="row gy-4 first-row">

                <div class="col-lg-12" data-aos="fade-up" data-aos-delay="100">
                </div>
                <div class="col-lg-8">
                    
                    <h4>Why Choose Lamp Post Advertising in Dubai?</h4>
                    <p>Dubai’s roads are some of the busiest in the Middle East, connecting commercial, residential, and tourist areas. Lamp post advertising provides an ideal way to consistently expose your brand to a diverse audience traveling through these routes. <br>Here’s why it’s one of the most effective outdoor advertising formats in the UAE:</p>
                    <div class="faq " id="accordion">
                        <div class="card">
                            <div class="card-header" id="faqHeading-30">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-30" data-aria-expanded="true" data-aria-controls="faqCollapse-30">
                                        <span class="badge">&nbsp;</span>High-Frequency Visibility
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-30" class="collapse show" aria-labelledby="faqHeading-30" data-parent="#accordion">
                                <div class="card-body">
                                    <p>
                                        Lamp posts are positioned every few meters along main roads, allowing your ad to be seen multiple times within a single journey — reinforcing brand recall.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="faqHeading-31">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-31" data-aria-expanded="true" data-aria-controls="faqCollapse-31">
                                        <span class="badge">&nbsp;</span>Strategic Urban Coverage
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-31" class="collapse" aria-labelledby="faqHeading-31" data-parent="#accordion">
                                <div class="card-body">
                                    <p>
                                        Perfect for urban areas, business districts, and tourist routes, lamp post advertising ensures coverage across key high-traffic zones.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="faqHeading-32">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-32" data-aria-expanded="true" data-aria-controls="faqCollapse-32">
                                        <span class="badge">&nbsp;</span>Cost-Effective Outdoor Solution
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-32" class="collapse" aria-labelledby="faqHeading-32" data-parent="#accordion">
                                <div class="card-body">
                                    <p>
                                        Compared to large billboards or digital screens, lamp post advertising provides affordable exposure while maintaining impressive visibility.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="faqHeading-33">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-33" data-aria-expanded="true" data-aria-controls="faqCollapse-33">
                                        <span class="badge">&nbsp;</span>Ideal for Event Promotions
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-33" class="collapse" aria-labelledby="faqHeading-33" data-parent="#accordion">
                                <div class="card-body">
                                    <p>
                                        Lamp post ads are widely used for events, exhibitions, and seasonal campaigns, helping create city-wide awareness before the event date.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="faqHeading-34">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-34" data-aria-expanded="true" data-aria-controls="faqCollapse-34">
                                        <span class="badge">&nbsp;</span>24/7 Exposure
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-34" class="collapse" aria-labelledby="faqHeading-34" data-parent="#accordion">
                                <div class="card-body">
                                    <p>
                                        When combined with streetlights, your ad remains visible even at night — ensuring round-the-clock brand exposure.
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div> 
                <div class="col-lg-1"></div>
                <div class="col-lg-3 vertical-center">
                    <img src="{{URL::to('/public/section-images/image54.png')}}" class="flyer-img" width="100%" alt="human billboard">
                </div>
            </div>

          </div>

        </section>


        <section id="service-cards" class="blog-section section pr-icon-section">

          <div class="container">

            <div class="row gy-4 first-row split-block">

                <div class="col-lg-4 vertical-center">
                    <img src="{{URL::to('/public/section-images/image55.png')}}" class="flyer-img" width="100%" alt="human billboard">
                </div>
                <div class="col-lg-8">
                    
                    <h4>Types of Lamp Post Advertising in Dubai</h4>
                    <p>
                       At DataMySite, we offer two main types of lamp post advertising — Static Lamp Posts and Digital Lamp Posts — each designed for different campaign needs.
                    </p>
                    <div class="faq " id="accordion">
                        <div class="card">
                            <div class="card-header" id="faqHeading-40">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-40" data-aria-expanded="true" data-aria-controls="faqCollapse-40">
                                        <span class="badge">&nbsp;</span>Static Lamp Post Advertising
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-40" class="collapse show" aria-labelledby="faqHeading-40" data-parent="#accordion">
                                <div class="card-body">
                                    <p>
                                        Static Lamp Post Ads are traditional printed banners or flags mounted on lamp post poles. They usually display one creative message per banner and are repeated along a stretch of road or within a designated area.
                                        <br>
                                        Key Features:
                                    </p>
                                    <ul>
                                        <li>Made from durable, weather-resistant vinyl or fabric</li>
                                        <li>Perfect for long-term campaigns or city branding</li>
                                        <li>Consistent exposure through repetition</li>
                                        <li>Cost-effective and simple to install</li>

                                    </ul>
                                    <p>
                                        <strong>Best For:</strong><br>
                                    </p>
                                    <ul>
                                        <li>Brand awareness campaigns</li>
                                        <li>Real estate project promotions</li>
                                        <li>Festivals, exhibitions, and event advertising</li>
                                        <li>Retail promotions</li>

                                    </ul>
                                    <p>
                                        <strong>Example:</strong><br>
                                        A real estate company advertising its new development across a stretch of Jumeirah Beach Road, with 20 consecutive lamp post banners for maximum visibility.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="faqHeading-41">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-41" data-aria-expanded="true" data-aria-controls="faqCollapse-41">
                                        <span class="badge">&nbsp;</span>Digital Unipole AdvertisingDigital Lamp Post Advertising
                                </div>
                            </div>
                            <div id="faqCollapse-41" class="collapse" aria-labelledby="faqHeading-41" data-parent="#accordion">
                                <div class="card-body">
                                    <p>
                                        Digital Lamp Post Ads are the modern evolution of street-level media. They feature LED digital screens mounted on lamp posts, allowing for dynamic video content and real-time updates.
                                        <br>
                                        Key Features:
                                    </p>
                                    <ul>
                                        <li>Eye-catching LED display with bright visuals</li>
                                        <li>Supports animation, video, and multiple creatives</li>
                                        <li>Can be updated remotely and instantly</li>
                                        <li>Day and night visibility</li>

                                    </ul>
                                    <p>
                                        <strong>Best For:</strong><br>
                                        Brands that want flexibility, frequent creative updates, or short-term promotional messages — such as events, retail offers, or seasonal campaigns.
                                    </p>
                                    <ul>
                                        <li>Luxury brands</li>
                                        <li>Retail stores and malls</li>
                                        <li>Product launches and short-term promotions</li>
                                        <li>City events or government awareness campaigns</li>

                                    </ul>
                                    <p>
                                        <strong>Example:</strong><br>
                                        A luxury retail brand displaying rotating video ads on digital lamp posts in Downtown Dubai, promoting its latest collection with dynamic visuals and motion effects.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>

          </div>

        </section>

        <section id="service-cards" class="blog-section section striped-section pr-icon-section">

          <div class="container">

            <div class="row gy-4 first-row outdoor-service-col-section">

                <div class="col-lg-12" data-aos="fade-up" data-aos-delay="100">
                    <h4>Our Lamp Post Advertising Services in Dubai</h4>
                    <p>
                        At DataMySite, we provide complete end-to-end lamp post advertising solutions, ensuring every campaign is well-planned, visually stunning, and fully compliant with Dubai Municipality regulations.
                        <br>
                        Our services include:

                    </p>
                </div>
                <div class="col-lg-6">
                    <h5>Location Planning & Strategy</h5>
                    <p>
                        We identify high-traffic routes and key city zones — such as Sheikh Zayed Road, Downtown, Marina, and Business Bay — to position your ads where they’ll have the most impact.
                    </p>
                </div>
                <div class="col-lg-6">
                    <h5>Creative Design</h5>
                    <p>
                       Our design team creates striking visuals that stand out on the move — ensuring brand consistency and clear messaging, even when viewed at a glance.
                    </p>
                </div>
                <div class="col-lg-6">
                    <h5>Printing & Production</h5>
                    <p>
                        We use high-quality, UV-resistant printing materials that withstand Dubai’s heat, sand, and humidity — ensuring your ads remain vibrant throughout the campaign.
                    </p>
                </div>
                <div class="col-lg-6">
                    <h5>Installation & Maintenance</h5>
                    <p>
                        Our skilled technicians handle safe and secure installation, along with regular maintenance checks to ensure banners stay in perfect condition.
                    </p>
                </div>  


                <div class="col-lg-12">
                    <h5>Digital Campaign Management</h5>
                    <p>
                        For digital lamp posts, we handle screen scheduling, creative rotations, and performance tracking to ensure optimal visibility and engagement.
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

                    <h4>Advantages of Choosing DataMySite</h4>
                    <ul>
                        <li><strong>Expertise in UAE Outdoor Media</strong>: We know the best-performing lamp post locations across Dubai.</li>
                        <li><strong>Creative Excellence</strong>: Our in-house designers craft visuals optimized for both day and night exposure.</li>
                        <li><strong>Complete Campaign Support</strong>: From concept to removal — we handle everything.</li>
                        <li><strong>Permit Handling</strong>: We manage all municipal and authority permissions for a smooth process.</li>
                        <li><strong>Cost Transparency</strong>: No hidden costs — you get clear, customized quotes based on campaign needs.</li>
                    </ul>
                    <br>
                    <h4>Top Locations for Lamp Post Advertising in Dubai</h4>
                    <p>
                        We strategically position lamp post campaigns across high-traffic and high-visibility areas, including:
                        <br>
                        <span class="badge badge-default badge-location"><i class="bi bi-geo-alt"></i> Sheikh Zayed Road</span>
                        <span class="badge badge-default badge-location"><i class="bi bi-geo-alt"></i> Downtown Dubai</span>
                        <span class="badge badge-default badge-location"><i class="bi bi-geo-alt"></i> Dubai Marina</span>
                        <span class="badge badge-default badge-location"><i class="bi bi-geo-alt"></i> Jumeirah Beach Road</span>
                        <span class="badge badge-default badge-location"><i class="bi bi-geo-alt"></i> Al Khail Road</span>
                        <span class="badge badge-default badge-location"><i class="bi bi-geo-alt"></i> Business Bay</span>
                        <span class="badge badge-default badge-location"><i class="bi bi-geo-alt"></i> Deira & Bur Dubai</span>
                        <span class="badge badge-default badge-location"><i class="bi bi-geo-alt"></i> Dubai Festival City</span>
                        <span class="badge badge-default badge-location"><i class="bi bi-geo-alt"></i> City Walk</span>
                        <span class="badge badge-default badge-location"><i class="bi bi-geo-alt"></i> Expo City Dubai</span>

                        <br>
                        These prime routes ensure continuous audience exposure from commuters, tourists, and residents.
                    </p>

                </div>
                <div class="col-lg-3 vertical-center">
                    <img src="{{URL::to('/public/section-images/image56.png')}}" width="100%" alt="Why choose us">
                </div> 
            </div>

          </div>

        </section>



        <section id="service-cards" class="blog-section section striped-section why-us-section why-out-us-section">

          <div class="container">

            <div class="row gy-4 first-row split-block">

                <div class="col-lg-3 vertical-center">
                    <img src="{{URL::to('/public/section-images/image57.png')}}" width="100%" alt="Why choose us">
                </div> 
                <div class="col-lg-1"></div>
                <div class="col-lg-8 vertical-center">
                    <h4>Cost of Lamp Post Advertising in Dubai</h4>
                    <p>
                        The cost of lamp post advertising in Dubai depends on several factors:
                    </p>
                    <ul>
                        <li>Number of lamp posts</li>
                        <li>Location and duration</li>
                        <li>Type (static or digital)</li>
                        <li>Creative design and printing requirements</li>

                    </ul>
                    <br>
                    <h4>On average:</h4>
                    <ul>
                        <li><strong>Static Lamp Post Ads</strong> start from AED 500–1,500 per pole per month, depending on the area.</li>
                        <li><strong>Digital Lamp Post Ads</strong> range from AED 2,000–5,000+ per pole per month, depending on screen time and content rotation.</li>
                    </ul>
                    <p>
                        At DataMySite, we offer customized packages to suit your goals, whether you need a short-term event campaign or long-term brand presence.
                    </p>

                </div>
            </div>

          </div>

        </section>


        <section id="service-cards" class="blog-section section why-us-section why-out-us-section">

          <div class="container">

            <div class="row gy-4 first-row">

                <div class="col-lg-8 vertical-center">
                    <h4>Light Up Dubai with Your Brand</h4>
                    <p>
                        Lamp post advertising is more than a display — it’s a city-wide storytelling medium that connects your brand with thousands every day. With their frequency, visibility, and versatility, lamp post ads help brands stay top-of-mind across Dubai’s most vibrant districts.
                        <br><br>
                        At DataMySite, we combine strategic placement, creative excellence, and local expertise to deliver lamp post advertising campaigns that truly shine — both day and night.
                        <br><br>
                        Contact DataMySite today to discuss your lamp post advertising campaign in Dubai or anywhere in the UAE and let your brand light up the skyline.
                    </p>

                </div>

                <div class="col-lg-1"></div>
                <div class="col-lg-3 mob-not-visible">
                    <img src="{{URL::to('/public/section-images/image58.png')}}" width="100%" alt="Why choose us">
                </div> 
            </div>

          </div>

        </section>



        <section id="service-cards" class="blog-section section  striped-section pr-blogs-section">

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

        <section id="service-cards" class="blog-section section faq-new-section">

          <div class="container">

            <div class="row gy-4 first-row">

                <div class="col-lg-1"></div>
                <div class="col-lg-3 vertical-center">
                    <img src="{{URL::to('/public/assets/img/faq-new.png')}}" width="100%" alt="FAQs">
                </div> 
                <div class="col-lg-1"></div>
                <div class="col-lg-7">
                    <h4>FAQs</h4>
                    <div class="faq " id="accordion">
                        <div class="card">
                            <div class="card-header" id="faqHeading-10">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-10" data-aria-expanded="true" data-aria-controls="faqCollapse-10">
                                        <span class="badge">&nbsp;</span>What are lamp post ads made of?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-10" class="collapse show" aria-labelledby="faqHeading-10" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Static lamp post banners are usually printed on vinyl or fabric materials designed to resist heat and UV rays. Digital lamp posts use LED display panels for dynamic advertising.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-11">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-11" data-aria-expanded="false" data-aria-controls="faqCollapse-11">
                                        <span class="badge">&nbsp;</span>Do I need government approval for lamp post advertising in Dubai?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-11" class="collapse" aria-labelledby="faqHeading-11" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Yes. Dubai Municipality and RTA approval are required. DataMySite handles all necessary permits on your behalf.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-12">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-12" data-aria-expanded="false" data-aria-controls="faqCollapse-12">
                                        <span class="badge">&nbsp;</span>How long does it take to install a lamp post campaign?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-12" class="collapse" aria-labelledby="faqHeading-12" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Most static lamp post campaigns are installed within 2–5 days after approval and printing. Digital campaigns can go live within 24–48 hours.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-13">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-13" data-aria-expanded="false" data-aria-controls="faqCollapse-13">
                                        <span class="badge">&nbsp;</span>Can I run a mix of static and digital lamp post ads?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-13" class="collapse" aria-labelledby="faqHeading-13" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Absolutely. Many clients use a hybrid approach, combining static branding across long stretches with digital screens in premium zones.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-14">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-14" data-aria-expanded="false" data-aria-controls="faqCollapse-14">
                                        <span class="badge">&nbsp;</span>Are lamp post ads suitable for short-term promotions?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-14" class="collapse" aria-labelledby="faqHeading-14" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Yes. They are excellent for events, retail sales, exhibitions, or government awareness campaigns lasting from one week to several months.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-15">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-15" data-aria-expanded="false" data-aria-controls="faqCollapse-15">
                                        <span class="badge">&nbsp;</span>What are the best locations for lamp post advertising in Dubai?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-15" class="collapse" aria-labelledby="faqHeading-15" data-parent="#accordion">
                                <div class="card-body">
                                    <p>High-traffic routes like Sheikh Zayed Road, Downtown, Jumeirah, and Dubai Marina deliver the strongest visibility and audience reach.</p>
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