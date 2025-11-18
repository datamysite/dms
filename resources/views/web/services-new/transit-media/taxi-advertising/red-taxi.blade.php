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
                        <h2>Most Impactful Outdoor Advertising</h2>
                        <h4>solutions that ensures your brand travels across the city</h4>
                        <br>
                        <p>
                            At DataMySite, we specialize in crafting innovative and performance-driven Red Taxi Advertising campaigns that capture attention, deliver strong brand recall, and maximize exposure across the UAE.
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
                    <h4>What is Red Taxi Advertising?</h4>
                    <p class="mb-0">
                        Red Taxi Advertising involves placing your brand’s visuals, logos, and messaging on Dubai’s fleet of red-roof taxis. These taxis operate throughout the emirate, covering all major routes — from Dubai Marina and Business Bay to Deira, Bur Dubai, and Al Barsha — ensuring your brand is seen by both residents and tourists around the clock.
                        <br><br>
                        These taxis act as mobile billboards, constantly moving through high-traffic zones, business districts, residential areas, shopping centers, and tourist attractions. Each taxi provides a unique opportunity to showcase your brand to thousands of commuters every day, creating powerful brand exposure that’s hard to miss.
                        <br><br>
                        With Red Taxi Advertising, your message travels directly to your audience — wherever they are.
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

        

        <section id="service-cards" class="blog-section section striped-section why-us-section why-out-us-section">

          <div class="container">

            <div class="row gy-4 first-row">
                <div class="col-lg-12 mb-0">
                    
                </div>
                <div class="col-lg-6 mt-0">
                    <h4>Why Choose Red Taxi Advertising in Dubai?</h4>
                    <br>
                    <div class="faq " id="accordion">
                        <div class="card">
                            <div class="card-header" id="faqHeading-20">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-20" data-aria-expanded="true" data-aria-controls="faqCollapse-20">
                                        <span class="badge">&nbsp;</span>Massive Citywide Reach
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-20" class="collapse" aria-labelledby="faqHeading-20" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Red taxis operate across every corner of Dubai, ensuring maximum exposure for your campaign. Whether it’s morning commutes, lunch-hour traffic, or evening rides, your ad stays visible all day long.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-21">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-21" data-aria-expanded="false" data-aria-controls="faqCollapse-21">
                                        <span class="badge">&nbsp;</span>High-Impact Mobile Branding
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-21" class="collapse" aria-labelledby="faqHeading-21" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Taxis move continuously through crowded areas, giving your brand the chance to be seen by pedestrians, drivers, and passengers on major highways and city streets. This constant mobility creates multiple touchpoints for your audience.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-22">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-22" data-aria-expanded="false" data-aria-controls="faqCollapse-22">
                                        <span class="badge">&nbsp;</span>Cost-Effective Outdoor Media
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-22" class="collapse" aria-labelledby="faqHeading-22" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Compared to large static billboards, taxi advertising offers a wider reach and longer exposure duration at a fraction of the cost. It’s one of the most efficient ways to build brand awareness in Dubai’s competitive market.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-24">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-24" data-aria-expanded="false" data-aria-controls="faqCollapse-24">
                                        <span class="badge">&nbsp;</span>Engagement Across Demographics
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-24" class="collapse" aria-labelledby="faqHeading-24" data-parent="#accordion">
                                <div class="card-body">
                                    <p>
                                        Taxis cater to diverse audiences — from professionals and tourists to families and residents — allowing your message to connect with various customer segments across different income levels.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-25">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-25" data-aria-expanded="false" data-aria-controls="faqCollapse-25">
                                        <span class="badge">&nbsp;</span>24/7 Exposure
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-25" class="collapse" aria-labelledby="faqHeading-25" data-parent="#accordion">
                                <div class="card-body">
                                    <p>
                                        Red taxis operate throughout the day and night, ensuring your campaign remains visible at all times — even in areas with limited billboard access.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 mt-0">
                    <h4>Benefits of Red Taxi Advertising in Dubai</h4>
                    <br>
                    <div class="faq " id="accordion">
                        <div class="card">
                            <div class="card-header" id="faqHeading-30">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-30" data-aria-expanded="true" data-aria-controls="faqCollapse-30">
                                        <span class="badge">&nbsp;</span>Enhanced Brand Awarenesse
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-30" class="collapse" aria-labelledby="faqHeading-30" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Taxi advertising keeps your brand in constant motion, reaching thousands of potential customers daily. It’s one of the few ad formats that guarantees mobility, visibility, and frequency simultaneously.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-31">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-31" data-aria-expanded="false" data-aria-controls="faqCollapse-31">
                                        <span class="badge">&nbsp;</span>Targeted Urban Exposure
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-31" class="collapse" aria-labelledby="faqHeading-31" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Red taxis operate in urban and densely populated areas, giving your brand consistent exposure in zones that matter most — where your target customers live, work, and travel.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-32">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-32" data-aria-expanded="false" data-aria-controls="faqCollapse-32">
                                        <span class="badge">&nbsp;</span>Affordable Yet Effective
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-32" class="collapse" aria-labelledby="faqHeading-32" data-parent="#accordion">
                                <div class="card-body">
                                    <p>With flexible pricing options, Red Taxi Advertising offers one of the best ROI rates in outdoor advertising. It’s an excellent choice for startups and established brands alike.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-34">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-34" data-aria-expanded="false" data-aria-controls="faqCollapse-34">
                                        <span class="badge">&nbsp;</span>Eco-Friendly Marketing Medium
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-34" class="collapse" aria-labelledby="faqHeading-34" data-parent="#accordion">
                                <div class="card-body">
                                    <p>
                                        Taxi advertising uses existing transport vehicles, minimizing environmental impact while ensuring your campaign reaches a large audience sustainably.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-33">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-33" data-aria-expanded="false" data-aria-controls="faqCollapse-33">
                                        <span class="badge">&nbsp;</span>Versatile for Any Brand
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-33" class="collapse" aria-labelledby="faqHeading-33" data-parent="#accordion">
                                <div class="card-body">
                                    <p>
                                        From real estate developers to restaurants, tech companies to fashion brands, taxi branding fits all industries looking to increase visibility and credibility.
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
                    <img src="{{URL::to('/public/section-images/image107.png')}}" width="100%" alt="Why choose us">
                </div> 
                <div class="col-lg-1"></div>
                <div class="col-lg-8 vertical-center">
                    <h4>Types of Red Taxi Advertising Formats</h4>
                    <ul>
                        <li>
                            <strong>Full Taxi Wrap</strong><br>
                            A Full Wrap transforms the entire taxi into a moving advertisement. This high-impact format covers all sides of the taxi with your brand’s visuals, ensuring complete visibility from every angle. It’s ideal for large-scale campaigns and product launches.
                         </li>
                        <li>
                            <strong>Door Panel Ads</strong><br>
                            Door Panel Ads focus on the side doors of the taxi, allowing your brand to appear on both sides of the vehicle. This option is cost-effective and perfect for long-term campaigns that maintain consistent visibility.
                         </li>
                        <li>
                            <strong>Back Panel Ads</strong><br>
                            Positioned on the rear of the taxi, Back Panel Ads target motorists and pedestrians following the vehicle — a strategic placement for concise messages, slogans, or CTAs (calls to action).
                        </li>
                        <li>
                            <strong>Roof Branding</strong><br>
                            Branding the top or light box of the taxi increases visibility from afar, especially in traffic jams or when taxis are parked near busy spots like metro stations, malls, and airports.
                         </li>
                    </ul>
                    <br>
                    <h4>Designing the Perfect Red Taxi Ad</h4>
                    <p>When creating a taxi advertisement, your message needs to be bold, clear, and visually striking. Here’s what we recommend:</p>
                    <ul>
                        <li><strong>Keep Text Short and Direct</strong>: Use concise messages that are readable even from a distance.</li>
                        <li><strong>Use Bright, Contrasting Colors</strong>: Ensure your ad stands out on Dubai’s bright roads and sunlight conditions.</li>
                        <li><strong>Incorporate Strong Branding Elements</strong>: Logos, colors, and imagery should align with your overall brand identity.</li>
                        <li><strong>Add a Call-to-Action</strong>: Include contact details, website, or QR codes for quick response.</li>
                        <li><strong>Leverage Seasonal Themes</strong>: Align your message with events or holidays like Dubai Shopping Festival or Ramadan for relevance.</li>
                    </ul>
                </div>
            </div>

          </div>

        </section>


        <section id="service-cards" class="blog-section section  striped-section why-us-section why-out-us-section">

          <div class="container">

            <div class="row gy-4 first-row">


                <div class="col-lg-8 vertical-center">
                    <h4>How DataMySite Delivers High-Performance Taxi Campaigns</h4>
                    <p>
                        At DataMySite, we handle every step of the process — from concept to completion. Our outdoor advertising experts design campaigns that combine creativity, compliance, and market insight to ensure the best possible impact.
                        <br>
                        <strong>Our process includes:</strong>
                    </p>
                    <ul>
                        <li>Creative design & strategy development</li>
                        <li>Compliance with RTA advertising regulations</li>
                        <li>Printing and installation using premium materials</li>
                        <li>Campaign management and route optimization</li>
                        <li>Performance tracking and reporting</li>
                    </ul>
                    <p>We ensure every Red Taxi Advertising campaign not only looks exceptional but also performs exceptionally — delivering measurable outcomes that align with your marketing goals.</p>
                    <br>
                    <h4>Strategic Locations Covered by Red Taxis</h4>
                    <p>
                        Red taxis cover a wide network of routes, including:
                        <br>
                        <span class="badge badge-default badge-location"><i class="bi bi-geo-alt"></i> Sheikh Zayed Road</span>
                        <span class="badge badge-default badge-location"><i class="bi bi-geo-alt"></i> Business Bay and Downtown Dubai</span>
                        <span class="badge badge-default badge-location"><i class="bi bi-geo-alt"></i> Dubai Marina and JBR</span>
                        <span class="badge badge-default badge-location"><i class="bi bi-geo-alt"></i> Al Barsha and Jumeirah</span>
                        <span class="badge badge-default badge-location"><i class="bi bi-geo-alt"></i> Deira and Bur Dubai</span>
                        <span class="badge badge-default badge-location"><i class="bi bi-geo-alt"></i> Dubai International Airport routes</span>
                        <span class="badge badge-default badge-location"><i class="bi bi-geo-alt"></i> Major malls like Dubai Mall, Mall of the Emirates, and Ibn Battuta</span>
                        <br>
                        This ensures your brand achieves visibility across high-density commercial and residential areas, maximizing reach and recall.
                    </p>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-3 vertical-center">
                    <img src="{{URL::to('/public/section-images/image108.png')}}" width="100%" alt="Why choose us">
                </div> 
            </div>

          </div>

        </section>


        <section id="service-cards" class="blog-sectionsection why-us-section why-out-us-section">

          <div class="container">

            <div class="row gy-4 first-row split-block">

                <div class="col-lg-3 vertical-center">
                    <img src="{{URL::to('/public/section-images/image109.png')}}" width="100%" alt="Why choose us">
                </div>

                <div class="col-lg-1"></div>
                <div class="col-lg-8 vertical-center">
                    <h4>Why Choose DataMySite for Red Taxi Advertising?</h4>
                    <ul>
                        <li>Expert team with deep knowledge of Dubai’s outdoor media market</li>
                        <li>Proven track record in managing successful taxi ad campaigns</li>
                        <li>High-quality design and printing services</li>
                        <li>Compliance with local advertising standards and permits</li>
                        <li>Transparent reporting and measurable results</li>

                    </ul>
                    <p>At DataMySite, we don’t just place your ads — we build visibility, strengthen your brand identity, and help you connect with audiences on the move.</p>
                    <br>
                    <h4>Final Thoughts</h4>
                    <p>
                        Red Taxi Advertising in Dubai is a proven way to increase your brand’s visibility and engage audiences across one of the fastest-growing cities in the world. Its unmatched mobility, frequency, and reach make it a cornerstone of effective outdoor advertising strategies.
                        <br><br>
                        With DataMySite, you gain a trusted partner that understands Dubai’s advertising landscape inside out — helping your message stand out, move forward, and stay remembered.
                    </p>
                    <ul>
                        
                    </ul>
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
                                        <span class="badge">&nbsp;</span>What makes Red Taxi Advertising different from other taxi types?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-10" class="collapse show" aria-labelledby="faqHeading-10" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Red taxis in Dubai are among the most visible and widely used, offering unmatched coverage across the city’s key areas. They provide excellent exposure to a diverse audience of residents and tourists.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-11">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-11" data-aria-expanded="false" data-aria-controls="faqCollapse-11">
                                        <span class="badge">&nbsp;</span>How much does it cost to advertise on Red Taxis in Dubai?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-11" class="collapse" aria-labelledby="faqHeading-11" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Costs depend on the ad format (full wrap, panel ad, etc.), campaign duration, and number of taxis. DataMySite offers customized packages to match your budget and objectives.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-12">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-12" data-aria-expanded="false" data-aria-controls="faqCollapse-12">
                                        <span class="badge">&nbsp;</span>How long does it take to launch a taxi advertising campaign?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-12" class="collapse" aria-labelledby="faqHeading-12" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Typically, a campaign can go live within 7–10 working days after final design approval and RTA approval.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-13">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-13" data-aria-expanded="false" data-aria-controls="faqCollapse-13">
                                        <span class="badge">&nbsp;</span>Can I target specific areas or routes for my campaign?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-13" class="collapse" aria-labelledby="faqHeading-13" data-parent="#accordion">
                                <div class="card-body">
                                    <p>
                                        Yes, DataMySite can plan taxi routes based on your target demographics or preferred locations, ensuring strategic exposure.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-14">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-14" data-aria-expanded="false" data-aria-controls="faqCollapse-14">
                                        <span class="badge">&nbsp;</span>Are the ads durable under Dubai’s weather conditions?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-14" class="collapse" aria-labelledby="faqHeading-14" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Absolutely. We use high-quality, weather-resistant vinyl materials that maintain color vibrancy and durability even under strong sunlight and heat.</p>
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