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
                        <h2>Engage Premium Guests</h2>
                        <h4>in the UAE’s Rising Tourism Destination</h4>
                        <br>
                        <p>
                            At DataMySite, we help brands harness the potential of Ras Al Khaimah hotel advertising — delivering strategic placements inside and around top hotels and resorts to capture guest attention in an elegant and high-trust setting. Whether you aim to build awareness among tourists, business guests, or families, hotel advertising in RAK connects your brand directly to an audience that’s relaxed, engaged, and ready to explore.
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
                    <h4>Where Tourism Growth Meets High-Value <br>Brand Exposure</h4>
                    <br>
                    <p class="mb-2">
                        Known for its natural beauty, luxury resorts, and rapidly growing tourism market, Ras Al Khaimah (RAK) has emerged as one of the UAE’s most promising destinations for hotel-based brand advertising. With stunning beachfront resorts, business hotels, and adventure getaways, RAK offers a unique opportunity to reach diverse, high-spending travelers from around the world.
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
                    <h4>Why Advertise in Ras Al Khaimah Hotels</h4>
                    <br>
                    <ul>
                        <li>
                            <strong>Fast-Growing Tourism Hub</strong><br>
                            Ras Al Khaimah is one of the UAE’s fastest-growing tourism markets, attracting millions of visitors annually for its beaches, mountains, and adventure experiences. With world-class resorts like Waldorf Astoria RAK, Rixos Bab Al Bahr, DoubleTree by Hilton, and Hilton Al Hamra, hotel advertising in RAK provides unparalleled access to both regional and international travelers.
                        </li>
                        <li>
                            <strong>Access to a Premium and Relaxed Audience</strong><br>
                            Unlike busy urban centers, RAK hotels host guests who stay longer and spend more time within hotel facilities. This results in longer dwell times, giving your brand multiple exposure points across their stay — from check-in to checkout.
                        </li>
                        <li>
                            <strong>Perfect Balance of Leisure and Business</strong><br>
                            With an expanding corporate tourism and MICE (Meetings, Incentives, Conferences, and Exhibitions) sector, RAK hotels attract both leisure travelers and business delegates — making it ideal for brands targeting high-income, decision-making audiences.
                        </li>
                        <li>
                            <strong>Brand Safety and Prestige</strong><br>
                            Advertising inside luxury resorts aligns your brand with the qualities of trust, quality, and comfort. Guests perceive ads in these environments as exclusive and credible, reinforcing your brand image.
                        </li>
                        <li>
                            <strong>Cost-Effective Alternative to Major City Advertising</strong><br>
                            Compared to Dubai or Abu Dhabi, hotel advertising in RAK offers premium visibility at competitive rates, allowing brands to reach valuable audiences with better ROI while maintaining luxury brand presence.
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
                    <h4>Top Hotel Zones for Advertising in RAK</h4>
                    <p>
                        Ras Al Khaimah’s hotel network is diverse, offering multiple premium clusters across coastal, business, and leisure zones.
                    </p>
                    <ul>
                        <li>
                            <strong>Al Marjan Island</strong>
                            One of RAK’s most luxurious beachfront areas, home to iconic hotels such as Rixos Bab Al Bahr, DoubleTree by Hilton Resort & Spa, and Marjan Island Resort & Spa. These properties attract family travelers, couples, and high-end tourists — ideal for retail, fashion, real estate, and lifestyle brand advertising.
                        </li>
                        <li>
                            <strong>Al Hamra Village</strong>
                            A luxury residential and leisure zone featuring Waldorf Astoria RAK, Hilton Al Hamra Beach & Golf Resort, and The Ritz-Carlton Al Hamra Beach. Perfect for automotive, jewelry, and luxury lifestyle brands targeting elite guests and golfers.
                        </li>
                        <li>
                            <strong>RAK City Center</strong>
                            Home to business hotels such as Mangrove Hotel, Hilton Garden Inn, and RAK City Stay, this area attracts corporate travelers and professionals — great for finance, technology, telecom, and business service campaigns.
                        </li>
                        <li>
                            <strong>Jebel Jais and Adventure Tourism Area</strong>
                            With Ras Al Khaimah positioning itself as the UAE’s adventure tourism capital, hotels in and around Jebel Jais draw thrill-seekers and international tourists. This provides an excellent platform for sportswear, outdoor gear, and travel brands.
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
                    <h4>Hotel Advertising Opportunities in RAK</h4>
                    <p>Hotel advertising in Ras Al Khaimah combines elegance, exclusivity, and visibility. Brands can select from various advertising formats based on their target audience and brand objectives.</p>
                    <div class="faq " id="accordion">
                        <div class="card">
                            <div class="card-header" id="faqHeading-20">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-20" data-aria-expanded="true" data-aria-controls="faqCollapse-20">
                                        <span class="badge">&nbsp;</span>Lobby Branding & Digital Screens
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-20" class="collapse" aria-labelledby="faqHeading-20" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Hotel lobbies are high-traffic areas where every guest passes multiple times daily. Placing digital screens, posters, or branded installations ensures your message reaches both guests and visitors in a professional and inviting setting.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-21">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-21" data-aria-expanded="false" data-aria-controls="faqCollapse-21">
                                        <span class="badge">&nbsp;</span>Elevator & Corridor Branding
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-21" class="collapse" aria-labelledby="faqHeading-21" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Elevators offer repetitive exposure throughout a guest’s stay. Branded wraps, mirror decals, or mini video screens can create memorable impressions that reinforce brand familiarity.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-22">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-22" data-aria-expanded="false" data-aria-controls="faqCollapse-22">
                                        <span class="badge">&nbsp;</span>Restaurant & Lounge Advertising
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-22" class="collapse" aria-labelledby="faqHeading-22" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Display your brand in hotel restaurants, cafés, and lounges — spaces where guests spend more time relaxing. Great for F&B, fashion, and lifestyle brand promotions.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-23">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-23" data-aria-expanded="false" data-aria-controls="faqCollapse-23">
                                        <span class="badge">&nbsp;</span>In-Room Promotions
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-23" class="collapse" aria-labelledby="faqHeading-23" data-parent="#accordion">
                                <div class="card-body">
                                    <p>
                                        Place branded materials inside guest rooms, including key cards, in-room TV channels, welcome screens, or tent cards. This allows direct communication with guests in a private and receptive environment.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-24">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-24" data-aria-expanded="false" data-aria-controls="faqCollapse-24">
                                        <span class="badge">&nbsp;</span>Spa, Gym & Pool Area Advertising
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-24" class="collapse" aria-labelledby="faqHeading-24" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Target wellness-conscious guests with digital screens or branded displays in spa, fitness, and pool areas. Ideal for health, fitness, and beauty brands.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-25">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-25" data-aria-expanded="false" data-aria-controls="faqCollapse-25">
                                        <span class="badge">&nbsp;</span>Outdoor Hotel Branding
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-25" class="collapse" aria-labelledby="faqHeading-25" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Maximize visibility with building wraps, outdoor banners, and LED signage placed on hotel exteriors or driveways — ensuring exposure to both guests and passing visitors.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
                <div class="col-lg-2 vertical-center">
                    <img src="{{URL::to('/public/section-images/image109.png')}}" width="100%" alt="Why choose us">
                </div>
                <div class="col-lg-5 vertical-center">
                    <h4>Industries That Benefit from RAK Hotel Advertising</h4>
                    <p>Hotel advertising in Ras Al Khaimah is suitable for brands seeking targeted engagement with both domestic and international audiences in a luxurious, lifestyle-oriented environment.</p>
                    <ul>
                        <li><Strong>Luxury Retail & Fashion</Strong><br> – Display your brand to high-end tourists and leisure travelers.</li>


                        <li><Strong>Real Estate Developers</Strong><br> – Promote waterfront properties or villas to affluent investors.</li>


                        <li><Strong>Automotive Brands</Strong><br> – Showcase vehicles through hotel forecourt displays.</li>


                        <li><Strong>Tourism & Hospitality</Strong><br> – Drive bookings for attractions, tours, and experiences.</li>


                        <li><Strong>Health & Wellness</Strong><br> – Promote spas, beauty products, or fitness services.</li>


                        <li><Strong>Financial Institutions & Insurance Firms</Strong><br> – Target business and expatriate travelers.</li>


                        <li><Strong>Technology & Telecom Brands</Strong><br> – Reach mobile-savvy global audiences.</li>
                    </ul>
                </div> 
            </div>

          </div>

        </section>

        <section id="service-cards" class="blog-section section why-us-section why-out-us-section">

          <div class="container">

            <div class="row gy-4 first-row">


                <div class="col-lg-8 vertical-center">
                    <h4>Why Choose DataMySite for Hotel Advertising in RAK</h4>
                    <p>
                        At DataMySite, we understand the nuances of RAK’s growing hospitality market and the strategic value of positioning your brand in its world-class resorts and hotels.
                        <br>
                        <strong>Our Services Include:</strong>
                    </p>
                    <ul>
                        <li>Strategic hotel selection and media planning</li>


                        <li>Creative design and localized content development</li>


                        <li>Coordination with hotel media networks and management</li>


                        <li>Installation, monitoring, and reporting</li>


                        <li>Multi-location campaign rollout across the UAE</li>

                    </ul>
                    <p>
                        Our goal is simple: to deliver premium visibility and measurable results through campaigns that align with your brand’s voice, target audience, and marketing objectives.
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
                    <h4>Benefits of Ras Al Khaimah Hotel Advertising</h4>
                    <p>
                        Access to diverse audiences — leisure, adventure, and corporate guests<br>
                        Association with luxury and trust through 4- and 5-star hotels<br>
                        24/7 exposure and longer dwell times<br>
                        Cost-effective visibility compared to Dubai or Abu Dhabi<br>
                        Seamless integration with other digital and outdoor campaigns<br>
                        Tailored placements for every brand category
                        <br><br>
                        With its combination of natural beauty, luxury, and growing infrastructure, RAK hotel advertising gives your brand presence in one of the UAE’s most vibrant tourism economies.
                    </p>
                    <br>
                    <h4>Showcase Your Brand in the UAE’s Hidden Gem of Hospitality</h4>
                    <p>
                        Ras Al Khaimah combines serenity, adventure, and luxury — a perfect backdrop for brands seeking authentic engagement with travelers and residents alike.
                        <br><br>
                        Let DataMySite elevate your brand visibility through Ras Al Khaimah Hotel Advertising — connecting you with the UAE’s fastest-growing tourism audience in the region’s most elegant settings.
                        <br><br>
                        Contact us today to plan your hotel advertising campaign across Ras Al Khaimah’s leading resorts and business hotels, and make your brand part of the guest experience.
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
                                        <span class="badge">&nbsp;</span>What is RAK Hotels Advertising?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-10" class="collapse show" aria-labelledby="faqHeading-10" data-parent="#accordion">
                                <div class="card-body">
                                    <p>It’s a marketing solution that places your brand’s visuals or messages inside luxury and business hotels in Ras Al Khaimah, targeting guests through digital and static media formats.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-11">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-11" data-aria-expanded="false" data-aria-controls="faqCollapse-11">
                                        <span class="badge">&nbsp;</span>Why advertise in Ras Al Khaimah hotels?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-11" class="collapse" aria-labelledby="faqHeading-11" data-parent="#accordion">
                                <div class="card-body">
                                    <p>RAK hotels attract high-value tourists, adventure travelers, and business guests in a relaxed environment, offering long dwell time and strong brand recall.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-12">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-12" data-aria-expanded="false" data-aria-controls="faqCollapse-12">
                                        <span class="badge">&nbsp;</span>What advertising options are available?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-12" class="collapse" aria-labelledby="faqHeading-12" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Lobby screens, elevator branding, in-room promotions, outdoor signage, and spa or restaurant placements are the most popular.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-13">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-13" data-aria-expanded="false" data-aria-controls="faqCollapse-13">
                                        <span class="badge">&nbsp;</span>Who should advertise in RAK hotels?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-13" class="collapse" aria-labelledby="faqHeading-13" data-parent="#accordion">
                                <div class="card-body">
                                    <p>
                                        Ideal for luxury, lifestyle, automotive, tourism, real estate, and technology brands targeting premium UAE visitors.
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
                                    <p>We manage the entire campaign — from hotel partnerships and creative design to ad placement and performance tracking — ensuring a smooth and effective advertising experience.</p>
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