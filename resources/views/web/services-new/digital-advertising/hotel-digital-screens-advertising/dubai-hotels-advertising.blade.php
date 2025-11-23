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
                        <h2>Promote Your Brand</h2>
                        <h4>in the Heart of Dubai’s Hospitality Sector</h4>
                        <br>
                        <p>
                            At DataMySite, we specialize in helping businesses promote their brand through strategic hotel advertising across Dubai’s top hospitality venues, including five-star hotels, resorts, business hotels, and lifestyle destinations. From lobby placements and elevator ads to outdoor hotel signage, room branding, and digital displays, we ensure your message reaches the right audience in the most premium spaces.
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
                    <h4>Where Luxury, Visibility, and Opportunity Meet</h4>
                    <br>
                    <p class="mb-2">
                        Dubai’s hotel industry stands as one of the most powerful advertising platforms in the Middle East — a place where luxury meets global exposure. With over 150,000 hotel rooms and occupancy rates among the highest worldwide, Dubai Hotels Advertising gives brands direct access to millions of international travelers, business executives, and high-spending tourists every year.

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
                    <h4>Why Advertise in Dubai Hotels?</h4>
                    <br>
                    <ul>
                        <li>
                            <strong>High-Spending Audience</strong><br>
                            Hotels in Dubai attract elite visitors from around the world — business leaders, high-net-worth individuals, luxury shoppers, and affluent tourists. These are decision-makers and premium consumers who are highly responsive to brand messaging presented in a sophisticated environment.
                        </li>
                        <li>
                            <strong>Global Reach with Local Relevance</strong><br>
                            Dubai hotels welcome millions of guests annually from Europe, Asia, and the Middle East. Advertising in these hotels means your brand gains international exposure while targeting audiences currently in-market within the UAE.
                        </li>
                        <li>
                            <strong>Long Dwell Time and Repeated Exposure</strong><br>
                            Hotel guests spend several days within the property — visiting the lobby, elevators, restaurants, gyms, and lounges multiple times. This creates repeated impressions and longer engagement compared to most outdoor or digital ads.
                        </li>
                        <li>
                            <strong>Premium and Brand-Safe Environment</strong><br>
                            Advertising inside Dubai’s luxury hotels elevates your brand image by associating it with quality, elegance, and trust. It’s a clutter-free, controlled setting where every display enhances prestige rather than competes for attention.
                        </li>
                        <li>
                            <strong>24/7 Visibility</strong><br>
                            Unlike traditional outdoor billboards that only attract fleeting glances, hotel advertisements stay active day and night — reaching guests during check-in, dining, meetings, and relaxation hours.
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
                    <h4>Prime Advertising Opportunities in Dubai Hotels</h4>
                    <p>Dubai’s hotels offer multiple touchpoints where your brand can engage travelers in meaningful ways. Each space can be customized based on your campaign goals, creative style, and target audience.</p>
                    <div class="row">
                        <div class="col-lg-12">
                            <p>
                                <strong>1. Lobby Advertising</strong><br>
                                The hotel lobby is one of the busiest and most visible areas — a perfect spot for digital screens, branded displays, brochures, or product showcases. Whether it’s a luxury car on display, a travel promotion, or a fashion campaign, the lobby ensures constant visibility among guests and visitors.
                            </p>
                        </div>
                        <div class="col-lg-6">
                            <p>
                                <strong>2. Elevator and Corridor Branding</strong><br>
                                Guests interact with elevators several times a day. Placing elevator wraps, mirror decals, or mini digital screens ensures your message stays top of mind through consistent repetition.
                            </p>
                        </div>
                        <div class="col-lg-6">
                            <p>
                                <strong>3. Restaurant, Lounge & Café Promotions</strong><br>
                                Advertising in hotel restaurants, cafés, and bars lets your brand connect with an audience in a relaxed, social setting. Perfect for lifestyle, F&B, fashion, and luxury brands looking to influence purchase decisions.
                            </p>
                        </div>
                        <div class="col-lg-6">
                            <p>
                                <strong>4. In-Room Collateral & TV Advertising</strong><br>
                                Reach guests directly inside their rooms with branded amenities, tent cards, key cards, or in-room TV commercials. This is one of the most personal and targeted ways to advertise within hotels.
                            </p>
                        </div>
                        <div class="col-lg-6">
                            <p>
                                <strong>5. Gym, Spa, and Pool Area Ads</strong><br>
                                Dubai’s luxury hotels feature world-class wellness areas — prime locations for beauty, fitness, health, and luxury lifestyle brands to display subtle yet powerful brand messages.
                            </p>
                        </div>
                        <div class="col-lg-12">
                            <p>
                                <strong>6. Outdoor Hotel Signage</strong><br>
                                For large-scale visibility, hotels on Sheikh Zayed Road, Jumeirah Beach, and Downtown Dubai offer premium outdoor branding spaces. Building wraps, façade banners, and digital screens attract not only hotel guests but also passing motorists and pedestrians.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 vertical-center">
                    <img src="{{URL::to('/public/section-images/image108.png')}}" width="100%" alt="Why choose us">
                </div> 
            </div>

          </div>

        </section>


        <section id="service-cards" class="blog-section striped-section section why-us-section why-out-us-section">

          <div class="container">

            <div class="row gy-4 first-row split-block">

                <div class="col-lg-5 vertical-center">
                    <h4>Top Hotel Zones for Advertising in Dubai</h4>
                    <p>Dubai’s hospitality sector is segmented into zones catering to different traveler demographics — allowing brands to target by purpose, budget, and lifestyle.</p>
                    <ul>
                        <li>
                            <strong>Downtown Dubai & Business Bay</strong><br>
                            Home to iconic hotels like Address Downtown, Taj Dubai, and Sofitel, this area attracts executives, business travelers, and luxury tourists — ideal for real estate, finance, and high-end retail campaigns.
                        </li>
                        <li>
                            <strong>Palm Jumeirah & Dubai Marina</strong><br>
                            Known for resorts like Atlantis, Waldorf Astoria, and Rixos, these properties attract affluent tourists and families. Perfect for hospitality, automotive, jewelry, and leisure brand advertising.
                        </li>
                        <li>
                            <strong>Jumeirah & Al Wasl</strong><br>
                            Dubai’s coastal belt is filled with boutique hotels and luxury stays, frequented by international visitors. Great for fashion, wellness, and experiential brands.
                        </li>
                        <li>
                            <strong>Sheikh Zayed Road</strong><br>
                            One of the busiest urban corridors in the UAE, lined with 4- and 5-star business hotels. A hotspot for corporate, B2B, and lifestyle advertising.
                        </li>
                        <li>
                            <strong>Dubai International Airport Hotels</strong><br>
                            Strategically located for maximum exposure to transit passengers and VIP travelers, ideal for airline, travel, and technology brand promotions.
                        </li>
                    </ul>
                </div> 
                <div class="col-lg-2 vertical-center">
                    <img src="{{URL::to('/public/section-images/image109.png')}}" width="100%" alt="Why choose us">
                </div>
                <div class="col-lg-5 vertical-center">
                    <h4>Industries That Benefit from Dubai Hotel Advertising</h4>
                    <p>Hotel advertising in Dubai provides unmatched visibility for brands across various sectors:</p>
                    <ul>
                        <li><strong>Luxury Retail & Fashion</strong><br> – Showcase collections to elite guests.<br><br></li>


                        <li><strong>Real Estate & Property Developers</strong><br> – Promote high-end residences and off-plan projects.<br><br></li>


                        <li><strong>Automotive & Supercar Brands</strong><br> – Display premium vehicles in hotel lobbies.<br><br></li>


                        <li><strong>Travel & Hospitality</strong><br> – Inspire further exploration through visual storytelling.<br><br></li>


                        <li><strong>Technology & Electronics</strong><br> – Highlight innovation to tech-savvy audiences.<br><br></li>


                        <li><strong>Beauty, Wellness & Fitness Brands</strong><br> – Influence lifestyle-conscious travelers.<br><br></li>


                        <li><strong>Finance & Investment Firms</strong><br> – Build trust and awareness among global business travelers.<br><br></li>
                    </ul>
                </div> 
            </div>

          </div>

        </section>

        <section id="service-cards" class="blog-section section why-us-section why-out-us-section">

          <div class="container">

            <div class="row gy-4 first-row">


                <div class="col-lg-8 vertical-center">
                    <h4>Why Choose DataMySite for Hotel Advertising in Dubai</h4>
                    <p>
                        At DataMySite, we provide comprehensive hotel advertising services that combine creativity, strategy, and placement precision. We work with Dubai’s leading hotel chains and property groups to secure exclusive media spaces tailored to your brand objectives.
                        <br>
                        <strong>Our Expertise Includes:</strong>
                    </p>
                    <ul>
                        <li>Strategic hotel selection based on audience and location</li>


                        <li>Creative design, production, and content localization</li>


                        <li>Ad placements across digital, print, and experiential formats</li>


                        <li>Negotiation and coordination with hotel management</li>


                        <li>Monthly performance and visibility reports</li>

                    </ul>
                    <p>
                        Whether you want to showcase a product, host a brand display, or build long-term brand awareness, we ensure your campaign integrates seamlessly with Dubai’s world-class hospitality environment.
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

                <div class="col-lg-2 vertical-center">
                    <img src="{{URL::to('/public/section-images/image109.png')}}" width="100%" alt="Why choose us">
                </div>

                <div class="col-lg-2"></div>
                <div class="col-lg-8 vertical-center">
                    <h4>Key Benefits of Dubai Hotels Advertising</h4>
                    <p>
                        Target high-spending local and international travelers<br>
                        Gain 24/7 visibility in premium locations<br>
                        Build brand credibility in trusted hospitality environments<br>
                         Customize placements for your audience and message<br>
                         Combine indoor and outdoor hotel visibility for wider reach<br>
                         Align your brand with Dubai’s luxury image
                    </p>
                    <br>
                    <h4>Showcase Your Brand Where the World Stays — Dubai Hotels</h4>
                    <p>
                        Every traveler arriving in Dubai experiences world-class hospitality — and your brand can be part of that experience.
                        <br><br>
                         Let DataMySite help your business stand out with Dubai Hotel Advertising, where visibility meets influence.
                         <br><br>
                        Contact us today to book hotel advertising spaces across Dubai’s most prestigious properties and connect with audiences that define luxury, travel, and lifestyle.
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
                                        <span class="badge">&nbsp;</span>What is Dubai Hotels Advertising?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-10" class="collapse show" aria-labelledby="faqHeading-10" data-parent="#accordion">
                                <div class="card-body">
                                    <p>It refers to brand promotion inside or around hotel properties through digital screens, lobby displays, in-room marketing, and other formats targeting hotel guests.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-11">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-11" data-aria-expanded="false" data-aria-controls="faqCollapse-11">
                                        <span class="badge">&nbsp;</span>Which hotels in Dubai offer advertising opportunities?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-11" class="collapse" aria-labelledby="faqHeading-11" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Many luxury and business hotels such as Address, Marriott, Sofitel, Atlantis, Jumeirah Group, and Rotana allow strategic ad placements through authorized partners like DataMySite.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-12">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-12" data-aria-expanded="false" data-aria-controls="faqCollapse-12">
                                        <span class="badge">&nbsp;</span>Who should advertise in Dubai hotels?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-12" class="collapse" aria-labelledby="faqHeading-12" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Luxury brands, real estate developers, tourism boards, automotive, and retail companies benefit most from high-profile hotel advertising.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-13">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-13" data-aria-expanded="false" data-aria-controls="faqCollapse-13">
                                        <span class="badge">&nbsp;</span>What are the available formats?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-13" class="collapse" aria-labelledby="faqHeading-13" data-parent="#accordion">
                                <div class="card-body">
                                    <p>
                                        Lobby branding, digital screens, in-room ads, elevator wraps, key cards, restaurant displays, and outdoor hotel signage.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-14">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-14" data-aria-expanded="false" data-aria-controls="faqCollapse-14">
                                        <span class="badge">&nbsp;</span>Why partner with DataMySite?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-14" class="collapse" aria-labelledby="faqHeading-14" data-parent="#accordion">
                                <div class="card-body">
                                    <p>We have local expertise, partnerships with hotel media providers, and a proven record of delivering high-impact campaigns across Dubai’s hospitality network.</p>
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