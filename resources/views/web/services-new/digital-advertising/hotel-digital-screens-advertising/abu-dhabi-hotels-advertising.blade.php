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
                        <h2>Connect with Elite Guests</h2>
                        <h4>in the Capital’s Luxury Hospitality Network</h4>
                        <br>
                        <p>
                            At DataMySite, we help businesses gain exposure through strategic hotel advertising placements across Abu Dhabi’s top luxury and business hotels — including Emirates Palace Mandarin Oriental, The St. Regis Saadiyat Island Resort, Conrad Etihad Towers, and Rosewood Abu Dhabi.
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
                    <h4>Elevate Your Brand in the Heart of the UAE’s Prestigious Hotel Scene</h4>
                    <br>
                    <p class="mb-2">
                        Abu Dhabi, the capital of the United Arab Emirates, is known for its elegance, innovation, and refined hospitality. With a thriving mix of business travelers, high-net-worth guests, tourists, and VIP delegates, Abu Dhabi’s hotels serve as one of the most powerful environments for targeted brand advertising.
                        <br><br>
                        Hotel advertising in Abu Dhabi enables brands to engage audiences in premium spaces — where attention is focused, distractions are minimal, and the overall environment enhances brand perception.
                        <br><br>
                        Whether you aim to boost brand awareness, promote a luxury product, or reach global decision-makers, Abu Dhabi Hotel Advertising gives your brand access to one of the UAE’s most influential and high-value audiences.
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
                    <img src="{{URL::to('/public/section-images/image107.png')}}" width="100%" alt="Why choose us">
                </div> 
                <div class="col-lg-1"></div>
                <div class="col-lg-8 vertical-center">
                    <h4>Why Advertise in Abu Dhabi Hotels?</h4>
                    <br>
                    <ul>
                        <li>
                            <strong>Access to High-Value Travelers</strong><br>
                            Abu Dhabi hotels host CEOs, diplomats, investors, royal family guests, and international business travelers who represent some of the world’s highest spending power. Advertising within these hotel properties ensures your brand message is viewed by premium audiences in an environment that reflects exclusivity and class.
                        </li>
                        <li>
                            <strong>Long Guest Stays and Higher Exposure</strong><br>
                            Compared to transient visitors, hotel guests in Abu Dhabi often stay 3–5 nights, providing extended visibility and repeated ad impressions. From check-in to check-out, they interact with branded displays several times, building strong recognition.
                        </li>
                        <li>
                            <strong>Premium, Brand-Safe Environment</strong><br>
                            Luxury hotels in Abu Dhabi create a sophisticated setting where advertising is naturally integrated — through elegant digital screens, lobby installations, or in-room media — without overwhelming the guest experience.
                        </li>
                        <li>
                            <strong>Ideal for Business and Event Targeting</strong><br>
                            The capital is home to major global conferences, exhibitions, and diplomatic events such as ADIPEC, the Formula 1 Grand Prix, and World Future Energy Summit. Hotel advertising during these periods can place your brand in front of thousands of influential international attendees.
                        </li>
                        <li>
                            <strong>24/7 Brand Visibility</strong><br>
                            Hotel environments never switch off. With guests moving through lobbies, restaurants, and elevators day and night, your brand remains continuously visible, ensuring maximum exposure throughout each guest’s stay.
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
                    <h4>Top Hotel Locations for Advertising in Abu Dhabi</h4>
                    <p>
                        Abu Dhabi offers a diverse hospitality landscape, from ultra-luxury resorts to corporate hotels in business districts. DataMySite helps brands choose the right locations to align with their audience and marketing goals.
                    </p>
                    <ul>
                        <li>
                            <strong>Saadiyat Island</strong><br>
                            Home to cultural landmarks like the Louvre Abu Dhabi and 5-star resorts such as St. Regis Saadiyat Island and Park Hyatt Saadiyat, this area attracts high-income travelers, art lovers, and international tourists — ideal for luxury, real estate, and lifestyle brand campaigns.
                        </li>
                        <li>
                            <strong>Corniche & Downtown Abu Dhabi</strong><br>
                            With premium business hotels such as Conrad Etihad Towers and Jumeirah at Etihad Towers, this area captures executives and government officials. Perfect for finance, technology, and corporate brand advertising.
                        </li>
                        <li>
                            <strong>Yas Island</strong><br>
                            A major entertainment hub featuring W Abu Dhabi – Yas Island, Hilton Abu Dhabi Yas Island, and Crowne Plaza. With events like Formula 1, concerts, and sports championships, it’s a hotspot for automotive, sportswear, and event sponsorship advertising.
                        </li>
                        <li>
                            <strong>Al Maryah Island</strong><br>
                            Known as Abu Dhabi’s luxury financial district, featuring Rosewood Abu Dhabi and Four Seasons Hotel. Ideal for financial, jewelry, investment, and luxury brand advertising.
                        </li>
                        <li>
                            <strong>Airport and Business Hotels</strong><br>
                            Target frequent flyers, business travelers, and transit guests through properties near Abu Dhabi International Airport — excellent for travel, telecom, and technology brands.
                        </li>
                    </ul>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-2 vertical-center">
                    <img src="{{URL::to('/public/section-images/image108.png')}}" width="100%" alt="Why choose us">
                </div> 
            </div>

          </div>

        </section>


        <section id="service-cards" class="blog-section striped-section section why-us-section why-out-us-section">

          <div class="container">

            <div class="row gy-4 first-row split-block">

                <div class="col-lg-5 vertical-center">
                    <h4>Effective Advertising Formats in Abu Dhabi Hotels</h4>
                    <p>Hotel advertising can be customized across multiple indoor and outdoor media formats. At DataMySite, we recommend strategic combinations of these placements to maximize impact:</p>
                    <ul>
                        <li>
                            <strong>Lobby Digital Displays</strong><br>
                            Lobby areas are high-traffic zones where every guest passes multiple times a day. Large digital screens, branded kiosks, or product stands deliver immediate brand visibility.
                        </li>
                        <li>
                            <strong>Elevator and Hallway Branding</strong><br>
                            Guests use elevators several times daily — an ideal placement for short-form visuals, digital posters, and motion ads that leave a lasting impression.
                        </li>
                        <li>
                            <strong>Restaurant, Lounge & Café Advertising</strong><br>
                            Display your brand near dining areas, bars, and cafés where guests spend leisure time. Excellent for food, beverage, fashion, and lifestyle promotions.
                        </li>
                        <li>
                            <strong>In-Room Advertising</strong><br>
                            Engage guests directly in their private space through TV ads, room cards, branded amenities, or welcome booklets. This form of personalized branding builds trust and exclusivity.
                        </li>
                        <li>
                            <strong>Wellness & Spa Areas</strong><br>
                            Perfect for beauty, fitness, and health brands, these areas offer natural engagement with relaxed guests who have longer dwell times.
                        </li>
                        <li>
                            <strong>Outdoor Hotel Branding</strong><br>
                            High-visibility options like façade wraps, LED signs, and entrance banners target both hotel guests and passing traffic — combining indoor engagement with outdoor impact.
                        </li>
                    </ul>
                </div> 
                <div class="col-lg-2 vertical-center">
                    <img src="{{URL::to('/public/section-images/image109.png')}}" width="100%" alt="Why choose us">
                </div>
                <div class="col-lg-5 vertical-center">
                    <h4>Industries That Benefit from Abu Dhabi Hotel Advertising</h4>
                    <p>Hotel advertising in Abu Dhabi is suitable for brands across multiple industries looking to influence affluent, globally connected audiences:</p>
                    <ul>
                        <li><strong>Luxury Fashion & Jewelry Brands</strong><br> – Showcase exclusivity and craftsmanship.<br><br></li>


                        <li><strong>Automotive Companies</strong><br> – Display vehicles in hotel lobbies or outdoor forecourts.<br><br></li>


                        <li><strong>Real Estate Developers</strong><br> – Promote luxury developments and off-plan properties.<br><br></li>


                        <li><strong>Banks & Financial Institutions</strong><br> – Reinforce trust and prestige through strategic branding.<br><br></li>


                        <li><strong>Technology & Telecom</strong><br> – Introduce innovation-driven products to professionals.<br><br></li>


                        <li><strong>Travel & Hospitality</strong><br> – Promote destinations, resorts, and airlines.<br><br></li>


                        <li><strong>Beauty & Wellness Brands</strong><br> – Target spa-goers and health-conscious travelers.<br><br></li>
                    </ul>
                </div> 
            </div>

          </div>

        </section>

        <section id="service-cards" class="blog-section section why-us-section why-out-us-section">

          <div class="container">

            <div class="row gy-4 first-row">


                <div class="col-lg-8 vertical-center">
                    <h4>Why Choose DataMySite for Abu Dhabi Hotel Advertising</h4>
                    <p>
                        At DataMySite, we combine deep local insight with extensive media expertise to deliver results-driven hotel advertising campaigns that align perfectly with your brand goals.
                        <br>
                        <strong>Our Expertise Includes:</strong>
                    </p>
                    <ul>
                        <li>Hotel selection based on audience demographics and footfall</li>


                        <li>Creative concept development and digital content design</li>


                        <li>Coordination with hotel media networks and property managers</li>


                        <li>End-to-end campaign setup, management, and monitoring</li>


                        <li>Performance analytics and audience impression reports</li>


                    </ul>
                    <p>
                        Our partnerships with leading hotels in Abu Dhabi ensure your campaign enjoys premium placements, maximum visibility, and brand-safe delivery.
                    </p>
                </div>
                <div class="col-lg-2"></div>
                <div class="col-lg-2 vertical-center">
                    <img src="{{URL::to('/public/section-images/image108.png')}}" width="100%" alt="Why choose us">
                </div> 
            </div>

          </div>

        </section>


        <section id="service-cards" class="blog-section striped-section section why-us-section why-out-us-section">

          <div class="container">

            <div class="row gy-4 first-row split-block">

                <div class="col-lg-3 vertical-center">
                    <img src="{{URL::to('/public/section-images/image109.png')}}" width="100%" alt="Why choose us">
                </div>

                <div class="col-lg-1"></div>
                <div class="col-lg-8 vertical-center">
                    <h4>Key Benefits of Advertising in Abu Dhabi Hotels</h4>
                    <p>
                        Direct access to affluent and influential guests<br>
                        Association with prestige and trust through luxury venues<br>
                        24/7 exposure with multiple daily touchpoints<br>
                        Ideal environment for B2B and B2C campaigns<br>
                        Enhanced brand recall and credibility<br>
                        Option to combine indoor and outdoor hotel placements
                        <br><br>
                        Whether you’re launching a product, hosting an event, or enhancing your brand image, hotel advertising in Abu Dhabi provides a powerful and elegant platform for growth.
                    </p>
                    <br>
                    <h4>Showcase Your Brand Where Prestige Meets Influence</h4>
                    <p>
                        In Abu Dhabi’s world-class hotels, every guest represents opportunity — and every space can tell your brand’s story.
                        <br><br>
                         Let DataMySite help you position your brand in the UAE’s most elegant hospitality environments through Abu Dhabi Hotels Advertising.
                         <br><br>
                        Contact us today to plan your campaign across Abu Dhabi’s most prestigious hotel properties and make your brand visible where the world’s elite stay, meet, and relax.
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
                                        <span class="badge">&nbsp;</span>What is Abu Dhabi Hotel Advertising?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-10" class="collapse show" aria-labelledby="faqHeading-10" data-parent="#accordion">
                                <div class="card-body">
                                    <p>It’s the promotion of brands and services within or around hotel properties — through digital screens, lobby branding, in-room placements, and more — targeting high-value hotel guests.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-11">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-11" data-aria-expanded="false" data-aria-controls="faqCollapse-11">
                                        <span class="badge">&nbsp;</span>Which hotels offer advertising opportunities in Abu Dhabi?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-11" class="collapse" aria-labelledby="faqHeading-11" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Luxury and business hotels such as Emirates Palace, St. Regis, Rosewood, and Etihad Towers regularly host advertising placements through authorized partners like DataMySite.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-12">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-12" data-aria-expanded="false" data-aria-controls="faqCollapse-12">
                                        <span class="badge">&nbsp;</span>Who should advertise in Abu Dhabi hotels?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-12" class="collapse" aria-labelledby="faqHeading-12" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Brands targeting premium, international, and corporate travelers — such as luxury, automotive, finance, or tourism businesses — benefit most.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-13">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-13" data-aria-expanded="false" data-aria-controls="faqCollapse-13">
                                        <span class="badge">&nbsp;</span>What advertising formats are available?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-13" class="collapse" aria-labelledby="faqHeading-13" data-parent="#accordion">
                                <div class="card-body">
                                    <p>
                                        Lobby screens, elevator branding, in-room displays, spa and restaurant screens, and outdoor hotel billboards are the most popular.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-14">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-14" data-aria-expanded="false" data-aria-controls="faqCollapse-14">
                                        <span class="badge">&nbsp;</span>Why choose DataMySite?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-14" class="collapse" aria-labelledby="faqHeading-14" data-parent="#accordion">
                                <div class="card-body">
                                    <p>We manage every step of your campaign — from hotel partnerships and creative production to on-site placement and performance tracking — ensuring top-tier exposure and results.</p>
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