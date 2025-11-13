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
                        <h2>Reach the World’s Most Elite Travelers</h2>
                        <h4>Engage High-Net-Worth Audiences Where Luxury Meets Exclusivity</h4>
                        <br>
                        <p>
                            At DataMySite, we specialize in helping premium brands connect with this influential audience through high-impact advertising in Private Jet Terminals across Dubai, Abu Dhabi, and global luxury destinations.
                            <br>
                            From Dubai’s DWC Private Jet Terminal to Al Bateen Executive Airport and international hubs like London Biggin Hill, Paris Le Bourget, and Geneva Dassault FBO, private airport advertising offers unmatched brand visibility in the most exclusive environments on Earth.
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
                    <h4>Why Private Airport Advertising?</h4>
                    <p class="mb-0">
                        Private airports are where business, luxury, and lifestyle intersect. Every individual who walks through a private jet terminal is a decision-maker — a person with significant purchasing power and global influence.
                    </p>
                    <div class="faq " id="accordion">
                        <div class="card">
                            <div class="card-header" id="faqHeading-20">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-20" data-aria-expanded="true" data-aria-controls="faqCollapse-20">
                                        <span class="badge">&nbsp;</span>Target the World’s Wealthiest Travelers
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-20" class="collapse" aria-labelledby="faqHeading-20" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Private jet passengers represent the top 1% of global consumers — investors, celebrities, entrepreneurs, diplomats, and royal families. Advertising in these terminals allows your brand to connect directly with high-spending audiences who value exclusivity and excellence.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-21">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-21" data-aria-expanded="false" data-aria-controls="faqCollapse-21">
                                        <span class="badge">&nbsp;</span>Unmatched Visibility in Premium Locations
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-21" class="collapse" aria-labelledby="faqHeading-21" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Private airport lounges, executive terminals, and FBOs (Fixed Base Operators) are designed with elegance and comfort in mind. Placing your ads across digital screens, totems, wall wraps, or product displays ensures that your message stands out in a clutter-free, luxury setting.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-22">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-22" data-aria-expanded="false" data-aria-controls="faqCollapse-22">
                                        <span class="badge">&nbsp;</span>Hyper-Targeted Marketing Environment
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-22" class="collapse" aria-labelledby="faqHeading-22" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Unlike mass media, private airport advertising reaches a highly specific demographic:</p>
                                    <ul>
                                        <li>Average age: 40–45 years</li>
                                        <li>70% travel for business, 30% for leisure</li>
                                        <li>Average charter cost per flight: $50,000+</li>
                                       <li> 20% are aircraft owners</li>
                                    </ul>
                                    <p>This means every impression counts — your ad reaches those with both influence and intent.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-24">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-24" data-aria-expanded="false" data-aria-controls="faqCollapse-24">
                                        <span class="badge">&nbsp;</span>Align Your Brand with Luxury and Prestige
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-24" class="collapse" aria-labelledby="faqHeading-24" data-parent="#accordion">
                                <div class="card-body">
                                    <p>
                                        Whether you represent a luxury brand, real estate developer, automotive company, or investment firm, private airport advertising reinforces your brand’s image as exclusive, refined, and aspirational.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-25">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-25" data-aria-expanded="false" data-aria-controls="faqCollapse-25">
                                        <span class="badge">&nbsp;</span>Global Reach with Elite Local Presence
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-25" class="collapse" aria-labelledby="faqHeading-25" data-parent="#accordion">
                                <div class="card-body">
                                    <p>
                                        Through partnerships with global FBOs like Jetex, Jet Aviation, and Falcon, your campaign can extend from Dubai and Abu Dhabi to London, Paris, Geneva, Marrakech, and Muscat, reaching luxury travelers wherever they fly.
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
                    <h4>Featured Locations</h4>
                </div>
                <div class="col-lg-6">
                    <h5>Dubai – DWC Private Jet Terminal</h5>
                    <p>
                        <strong>Monthly Footfall</strong>: 4,500+ elite passengers
                        <br>
                         <strong>Demographics</strong>: 60% male, 40% female | Average age: 41
                         <br>
                         <strong>Purpose of travel</strong>: 70% business, 30% leisure
                         <br>
                        Dubai’s DWC Private Jet Terminal is a major gateway for millionaires and corporate executives. With Dubai attracting over 6,700 new millionaires in 2024, it’s the perfect environment for luxury branding.
                        <br>
                        Advertising Options Include:

                    </p>
                    <ul>
                        <li>Indoor digital screens (main hall & lounge)</li>
                        <li>Outdoor totems and digital lampposts</li>
                        <li>Building banners and cube screens</li>
                        <li>Product and car displays</li>
                        <li>Pop-up experiential zones</li>

                    </ul>
                    <p>Position your brand in front of the world’s most influential travelers as they arrive or depart from Dubai — the capital of global wealth migration.</p>
                </div>
                <div class="col-lg-6">
                    <h5>Abu Dhabi – Al Bateen Executive Airport</h5>
                    <p>
                        <strong>Monthly Footfall</strong>: 2,700+ elite passengers
                        <br>
                        <strong>Operators</strong>: Jetex | Average Charter Cost: $52,000
                         <br>
                        Al Bateen Executive Airport caters to top-tier private travelers, business magnates, and government officials. Its refined environment and limited footfall make it perfect for exclusive brand activations where personal impact is key.
                        <br>
                        Media Formats Include:
                    </p>
                    <ul>
                        <li>Main digital screens in central hall</li>
                        <li>Curved LED wall displays</li>
                        <li>Outdoor lamppost advertising</li>
                        <li>VIP lounge placements</li>
                    </ul>
                    <p>This terminal offers the ideal atmosphere for corporate brands, investment firms, private banks, and luxury services looking to connect with decision-makers.</p>
                </div>
                <div class="col-lg-12">
                    <h4>International Private Terminals</h4>
                </div>
                <div class="col-lg-6">
                    <h5>Paris – Le Bourget Airport (France)</h5>
                    <p>
                        Europe’s most prestigious private airport, serving VIPs, celebrities, and executives attending events like Cannes Film Festival, Paris Fashion Week, and Monaco F1 Grand Prix.
                        <br>
                        Advertising here aligns your brand with global luxury, culture, and prestige.
                        <br>
                        Media Options:
                    </p>
                    <ul>
                        <li>Royal Lounge and Main Hall digital screens</li>
                        <li>Branded experiential installations</li>
                        <li>Event-specific sponsorships</li>

                    </ul>
                </div>
                <div class="col-lg-6">
                    <h5>London – Biggin Hill Airport (UK)</h5>
                    <p>
                        Located just 12 miles from Canary Wharf and 15 miles from Central London, Biggin Hill offers quick helicopter transfers for VIPs and business leaders.
                        <br>
                        Your brand can reach high-level corporate travelers, investors, and London’s ultra-affluent audience through digital indoor screens and product showcases.
                    </p>
                </div>  


                <div class="col-lg-6">
                    <h5>Geneva Dassault Business Aviation FBO (Switzerland)</h5>
                    <p>
                        Home to The Geneva International Motor Show, Art Genève, and Charity Galas, this FBO connects brands with global elites and luxury event attendees.
                        <br>
                        Advertising here puts your brand at the center of international influence and wealth — from art collectors to CEOs.
                    </p>
                </div> 


                <div class="col-lg-6">
                    <h5>Marrakech Airport (Morocco)</h5>
                    <p>
                        This VIP terminal caters to government officials, royal families, and luxury tourists. With a rising influx of high-spending travelers, Marrakech offers a prime platform for brands seeking visibility in emerging luxury markets.
                    </p>
                </div> 


                <div class="col-lg-12">
                    <h5>Muscat International Airport (Oman)</h5>
                    <p>
                        Oman’s only FBO service provider, offering premium exposure to elite travelers across the GCC. Ideal for hospitality, real estate, and automotive brands targeting wealthy Middle Eastern audiences.
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
                <div class="col-lg-5 mt-0">
                    <h4>Advertising Opportunities at Private Airports</h4>
                    <p>
                        At DataMySite, we design and manage premium ad placements that fit naturally within the luxury experience of private aviation terminals.
                        <br>
                        Available Formats Include:
                    </p>
                    <ul>
                        <li><strong>Digital Screens</strong>: Main lounge, corridors, and check-in zones</li>
                        <li><strong>Outdoor Totems & Lampposts</strong>: Driveway and boulevard branding</li>
                        <li><strong>Building Wraps & Banners</strong>: Exterior large-scale visuals</li>
                        <li><strong>Car Showcases</strong>: Display premium vehicles near lounges</li>
                        <li><strong>Pop-Up Installations</strong>: On-site experiential brand activations</li>
                        <li><strong>Product Displays</strong>: Luxury retail, watches, perfumes, and tech products</li>
                        <li><strong>Sponsorships & Events</strong>: Exclusive branding during VIP occasions</li>
                    </ul>
                    <p>Our team handles strategy, creative design, and placement coordination with FBO operators to ensure your brand receives optimal exposure in each location.</p>
                </div>
                <div class="col-lg-2 vertical-center">
                    <img src="{{URL::to('/public/section-images/image41.png')}}" width="100%" alt="Why choose us">
                </div> 

                <div class="col-lg-5 mt-0">
                    <h4>Who Should Advertise in Private Airports?</h4>
                    <p>Private airport advertising is ideal for:</p>
                    <ul>
                        <li>Luxury brands (fashion, jewelry, watches)</li>
                        <li>Automotive companies (supercars, EVs, luxury vehicles)</li>
                        <li>Real estate developers (premium and waterfront projects)</li>
                        <li>Financial institutions & private banks</li>
                        <li>Travel, tourism, and hospitality brands</li>
                       <li> High-end tech and lifestyle companies</li>

                    </ul>
                    <p>By targeting ultra-affluent travelers, your campaign drives not just awareness — but aspirational desire and brand trust.</p>
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
                    <h4>Why Choose DataMySite for Private Airport Advertising</h4>
                    <p>
                        As a strategic advertising and media partner, DataMySite ensures your brand captures the essence of luxury marketing with precision and creativity.
                        <br>
                        Our Expertise Includes:
                    </p>
                    <ul>
                        <li>Partnerships with global FBO networks such as Jetex and Jet Aviation</li>
                        <li>Localized campaign management across the UAE and GCC</li>
                        <li>Creative design and production support for luxury brands</li>
                        <li>Data-driven audience targeting and performance reporting</li>
                        <li>Seamless coordination with airport authorities and operators</li>


                    </ul>
                    <p>We manage the full process — from media planning and creative execution to campaign monitoring and performance tracking — ensuring your brand achieves maximum visibility and prestige.</p>
                </div>
            </div>

          </div>

        </section>


        <section id="service-cards" class="blog-section section why-us-section why-out-us-section">

          <div class="container">

            <div class="row gy-4 first-row">


                <div class="col-lg-8 vertical-center">
                    <h4>Benefits of Private Airport Advertising</h4>
                    <ul>
                        <li>Exclusive audience access to the world’s wealthiest travelers</li>
                        <li>Low clutter and high recall environment</li>
                        <li>Premium placement in luxury spaces</li>
                        <li>Global exposure with regional flexibility</li>
                       <li> Long-term branding and measurable impact</li>

                    </ul>
                    <p>Private airport advertising isn’t just about visibility — it’s about positioning your brand where influence meets aspiration.</p>
                    <br>
                    <h4>Take Your Brand to New Heights with Private Airport Advertising</h4>
                    <p>
                        Your customers don’t wait in queues — they fly private.
                        <br>
                         Make sure your brand flies with them.
                         <br><br>
                        Partner with DataMySite to design your Private Airport Advertising campaign across Dubai, Abu Dhabi, and global luxury terminals.
                        <br><br>
                        Contact us today to elevate your brand visibility among the world’s most powerful travelers.
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
                                        <span class="badge">&nbsp;</span>What is Private Airport Advertising?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-10" class="collapse show" aria-labelledby="faqHeading-10" data-parent="#accordion">
                                <div class="card-body">
                                    <p>It’s the promotion of brands through digital and static media in private jet terminals, targeting ultra-wealthy travelers and decision-makers.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-11">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-11" data-aria-expanded="false" data-aria-controls="faqCollapse-11">
                                        <span class="badge">&nbsp;</span>Who can advertise in private airports?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-11" class="collapse" aria-labelledby="faqHeading-11" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Luxury, automotive, real estate, hospitality, and financial brands benefit most from these premium advertising spaces.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-12">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-12" data-aria-expanded="false" data-aria-controls="faqCollapse-12">
                                        <span class="badge">&nbsp;</span>Where are the key locations for Private Airport Advertising?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-12" class="collapse" aria-labelledby="faqHeading-12" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Dubai (DWC), Abu Dhabi (Al Bateen), London, Paris, Geneva, and Muscat are among the top-performing FBOs globally.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-13">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-13" data-aria-expanded="false" data-aria-controls="faqCollapse-13">
                                        <span class="badge">&nbsp;</span>What types of ads can I run?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-13" class="collapse" aria-labelledby="faqHeading-13" data-parent="#accordion">
                                <div class="card-body">
                                    <p>
                                        Digital screens, outdoor totems, banners, product displays, and luxury car showcases.
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
                                    <p>We handle everything — from strategy and design to airport coordination and campaign execution — ensuring seamless delivery and measurable results.</p>
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