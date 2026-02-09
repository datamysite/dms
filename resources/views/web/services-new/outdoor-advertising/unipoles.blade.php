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
          <div class="page-title dark-background" data-aos="fade" style="background-image: url('{{URL::to('public/assets/img/service-new/'.$service->slug.'.jpg')}}');">
            <div class="container head-container-service">
                <div class="row">
                    <div class="col-lg-8 head-para-service">
                        <h1>&#10687; {{$subservice->name}}</h1>
                        <h2>Command Attention</h2>
                        <h4>with Unipole Advertising Across Dubai</h4>
                        <br>
                        <p>
                            At DataMySite, we help businesses leverage static and digital unipole advertising across Dubai and the UAE, ensuring your brand message reaches thousands of potential customers daily. Whether you’re launching a new product, strengthening brand recognition, or promoting an event, our unipole advertising solutions are strategically designed for maximum impact.
                            
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

                    <h4>What is Unipole Advertising?</h4>
                    <p>
                        Unipole advertising is a large-format outdoor advertising structure mounted on a single steel pole (hence the name “uni-pole”). Positioned strategically along highways, main roads, and high-traffic areas, these ads provide uninterrupted visibility to both motorists and pedestrians.
                        <br>
                        Unlike smaller billboard types, unipoles are elevated and double-sided, offering 360-degree exposure to a massive audience throughout the day and night.
                        <br><br>
                        In Dubai, unipole ads are commonly placed along:
                        <br>
                        <span class="badge badge-default badge-location"><i class="bi bi-geo-alt"></i> Sheikh Zayed Road</span>
                        <span class="badge badge-default badge-location"><i class="bi bi-geo-alt"></i> Al Khail Road</span>
                        <span class="badge badge-default badge-location"><i class="bi bi-geo-alt"></i> Dubai–Abu Dhabi Highway (E11)</span>
                        <span class="badge badge-default badge-location"><i class="bi bi-geo-alt"></i> Business Bay</span>
                        <span class="badge badge-default badge-location"><i class="bi bi-geo-alt"></i> Downtown Dubai</span>
                        <span class="badge badge-default badge-location"><i class="bi bi-geo-alt"></i> Dubai Marina</span>
                        <br>
                        Each of these locations guarantees strong exposure and engagement from both local and international audiences.
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
                    
                    <h4>Why Choose Unipole Advertising in Dubai?</h4>
                    <p>Dubai’s city infrastructure is built for high visibility and global appeal. Unipole advertising is a preferred outdoor format because it combines prestige, visibility, and creative freedom. <br>Here are key reasons why businesses across the UAE choose this medium:</p>
                    <div class="faq " id="accordion">
                        <div class="card">
                            <div class="card-header" id="faqHeading-30">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-30" data-aria-expanded="true" data-aria-controls="faqCollapse-30">
                                        <span class="badge">&nbsp;</span>Unmatched Visibility
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-30" class="collapse show" aria-labelledby="faqHeading-30" data-parent="#accordion">
                                <div class="card-body">
                                    <p>
                                        Unipoles are tall, often 20–50 feet high, positioned along key roads and intersections, ensuring your brand is visible from long distances — even in traffic or at night.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="faqHeading-31">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-31" data-aria-expanded="true" data-aria-controls="faqCollapse-31">
                                        <span class="badge">&nbsp;</span>High Traffic Exposure
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-31" class="collapse" aria-labelledby="faqHeading-31" data-parent="#accordion">
                                <div class="card-body">
                                    <p>
                                        Dubai’s major roads see millions of vehicles monthly. A well-placed unipole advertisement can generate consistent impressions from commuters, tourists, and professionals alike.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="faqHeading-32">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-32" data-aria-expanded="true" data-aria-controls="faqCollapse-32">
                                        <span class="badge">&nbsp;</span>Prestigious Brand Image
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-32" class="collapse" aria-labelledby="faqHeading-32" data-parent="#accordion">
                                <div class="card-body">
                                    <p>
                                        Because of their scale and prime locations, unipoles are associated with leading brands — creating a premium perception and reinforcing brand authority.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="faqHeading-33">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-33" data-aria-expanded="true" data-aria-controls="faqCollapse-33">
                                        <span class="badge">&nbsp;</span>Flexible Creative Options
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-33" class="collapse" aria-labelledby="faqHeading-33" data-parent="#accordion">
                                <div class="card-body">
                                    <p>
                                        Unipoles can feature static vinyl designs, digital LED displays, or double-sided panels, giving brands flexibility to adapt campaigns according to goals and budgets.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="faqHeading-34">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-34" data-aria-expanded="true" data-aria-controls="faqCollapse-34">
                                        <span class="badge">&nbsp;</span>Cost-Effective Long-Term Advertising
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-34" class="collapse" aria-labelledby="faqHeading-34" data-parent="#accordion">
                                <div class="card-body">
                                    <p>
                                        With their durability and long display duration, unipoles provide high ROI and long-term brand reinforcement compared to short-term ad formats.
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div> 
                <div class="col-lg-4">
                    <img src="{{URL::to('/public/section-images/image38.png')}}" class="flyer-img" width="100%" alt="human billboard">
                </div>
            </div>

          </div>

        </section>


        <section id="service-cards" class="blog-section section pr-icon-section">

          <div class="container">

            <div class="row gy-4 first-row">

                <div class="col-lg-4 vertical-center">
                    <img src="{{URL::to('/public/section-images/image38.png')}}" class="flyer-img" width="100%" alt="human billboard">
                </div>
                <div class="col-lg-8">
                    
                    <h4>Types of Unipole Advertising in Dubai</h4>
                    <p>
                        At DataMySite, we offer three main types of unipoles to suit different campaign objectives and budgets.
                        <br>
                        Let’s explore each in detail:
                    </p>
                    <div class="faq " id="accordion">
                        <div class="card">
                            <div class="card-header" id="faqHeading-40">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-40" data-aria-expanded="true" data-aria-controls="faqCollapse-40">
                                        <span class="badge">&nbsp;</span>Static Unipole Advertising
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-40" class="collapse show" aria-labelledby="faqHeading-40" data-parent="#accordion">
                                <div class="card-body">
                                    <p>
                                        Static unipoles are the traditional and most commonly used format in outdoor advertising. They feature printed vinyl or flex-face material mounted on a sturdy steel structure.
                                        <br>
                                        Key Features:
                                    </p>
                                    <ul>
                                        <li>Displays a single creative message continuously</li>
                                        <li>Perfect for long-term campaigns (1–12 months)</li>
                                        <li>Cost-effective and easy to maintain</li>
                                        <li>Ideal for brand awareness or product promotions</li>
                                    </ul>
                                    <p>
                                        <strong>Best For:</strong><br>
                                        Brands that want consistent visibility without frequent creative changes — such as real estate developers, automotive companies, retail chains, and construction firms.

                                        <strong>Example:</strong><br>
                                        A luxury real estate developer using a static unipole on Sheikh Zayed Road to display a project launch message visible to tens of thousands daily.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="faqHeading-41">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-41" data-aria-expanded="true" data-aria-controls="faqCollapse-41">
                                        <span class="badge">&nbsp;</span>Digital Unipole Advertising
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-41" class="collapse" aria-labelledby="faqHeading-41" data-parent="#accordion">
                                <div class="card-body">
                                    <p>
                                        Digital unipoles represent the modern evolution of outdoor media in Dubai. These use high-resolution LED screens instead of printed materials, allowing for dynamic content and video-based advertising.
                                        <br>
                                        Key Features:
                                    </p>
                                    <ul>
                                        <li>Capable of showing multiple ads in rotation</li>
                                        <li>Supports animations, motion graphics, and videos</li>
                                        <li>Easy content updates via remote control</li>
                                        <li>Highly engaging for tech-savvy audiences</li>

                                    </ul>
                                    <p>
                                        <strong>Best For:</strong><br>
                                        Brands that want flexibility, frequent creative updates, or short-term promotional messages — such as events, retail offers, or seasonal campaigns.

                                        <strong>Example:</strong><br>
                                        A fashion brand using a digital unipole in Downtown Dubai to promote new collections every week with vibrant video content.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="faqHeading-42">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-42" data-aria-expanded="true" data-aria-controls="faqCollapse-42">
                                        <span class="badge">&nbsp;</span>Double-Sided Unipole Advertising
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-42" class="collapse" aria-labelledby="faqHeading-42" data-parent="#accordion">
                                <div class="card-body">
                                    <p>
                                        Double-sided unipoles offer maximum exposure by displaying advertisements on both sides of the structure, targeting traffic flowing in both directions.
                                        <br>
                                        Key Features:
                                    </p>
                                    <ul>
                                        <li>Twice the visibility compared to single-sided unipoles</li>
                                        <li>Ideal for major highways and central intersections</li>
                                        <li>Great for multi-message campaigns or brand storytelling</li>

                                    </ul>
                                    <p>
                                        <strong>Best For:</strong><br>
                                        Businesses seeking total visibility — such as telecom brands, luxury cars, real estate, and government campaigns.

                                        <strong>Example:</strong><br>
                                        A telecom company promoting a new network offer using a double-sided unipole on Al Khail Road, ensuring reach to both inbound and outbound commuters.
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
                    <h4>Our Unipole Advertising Services in Dubai</h4>
                    <p>
                        At DataMySite, we provide end-to-end unipole advertising solutions that include everything from location planning to creative execution.
                        <br>
                        Our process includes:
                    </p>
                </div>
                <div class="col-lg-6">
                    <h5>Strategic Planning</h5>
                    <p>
                        We identify premium unipole locations across Dubai and the UAE based on audience demographics, visibility, and traffic data.
                    </p>
                </div>
                <div class="col-lg-6">
                    <h5>Creative Design & Branding</h5>
                    <p>
                       Our team designs attention-grabbing creatives optimized for large-format visibility and high readability from a distance.
                    </p>
                </div>
                <div class="col-lg-6">
                    <h5>Printing or Digital Display Setup</h5>
                    <p>
                        For static campaigns, we use high-quality UV-resistant materials. For digital ones, we ensure sharp, color-accurate LED screens with top brightness levels.
                    </p>
                </div>
                <div class="col-lg-6">
                    <h5>Installation & Maintenance</h5>
                    <p>
                        Our professional team ensures safe, secure installation following UAE’s outdoor advertising regulations. Regular inspections ensure your ad remains flawless.
                    </p>
                </div>  


                <div class="col-lg-12">
                    <h5>Campaign Reporting</h5>
                    <p>
                        We provide performance insights such as traffic estimates, location reach, and campaign exposure metrics.
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
                    <h4>Advantages of Partnering with DataMySite</h4>
                    <ul>
                        <li><strong>Expertise in Dubai Outdoor Advertising</strong>: We understand the best-performing unipole spots in each area.</li>
                        <li><strong>Comprehensive Solutions</strong>: From concept to execution, everything is handled in-house.</li>
                        <li><strong>Compliance & Safety</strong>: We ensure all campaigns meet Dubai Municipality regulations.</li>
                        <li><strong>Creative Excellence</strong>: Our designers craft messages that capture attention in seconds.</li>
                        <li><strong>Transparency & ROI</strong>: Every campaign is planned with clear objectives and measurable results.</li>
                    </ul>
                    <br>
                    <h4>Cost of Unipole Advertising in Dubai</h4>
                    <p>Pricing varies depending on factors such as:</p>
                    <ul>
                        <li>Type of unipole (static, digital, or double-sided)</li>
                        <li>Location and visibility</li>
                        <li>Campaign duration</li>
                        <li>Material and creative complexity</li>
                    </ul>
                    <p>
                        On average, static unipole advertising in Dubai ranges from AED 15,000 to AED 50,000 per month, while digital unipoles may range from AED 25,000 to AED 100,000+ based on screen time and rotation frequency.
                        <br>
                        At DataMySite, we provide transparent pricing tailored to your campaign needs and budget.
                    </p>
                </div>
                <div class="col-lg-3 mob-not-visible">
                    <img src="{{URL::to('/public/section-images/image39.png')}}" width="100%" alt="Why choose us">
                </div> 
            </div>

          </div>

        </section>



        <section id="service-cards" class="blog-section section striped-section why-us-section why-out-us-section">

          <div class="container">

            <div class="row gy-4 first-row">

                <div class="col-lg-3 mob-not-visible">
                    <img src="{{URL::to('/public/section-images/image39.png')}}" width="100%" alt="Why choose us">
                </div> 
                <div class="col-lg-1"></div>
                <div class="col-lg-8 vertical-center">
                    <h4>Make Your Brand Tower Above the Rest</h4>
                    <p>
                        Unipole advertising combines scale, visibility, and prestige — making it one of the most powerful outdoor media options in Dubai. Whether you choose static, digital, or double-sided unipoles, your brand gains continuous exposure to a vast, diverse audience.
                        <br>
                        At DataMySite, we specialize in designing and managing unipole advertising campaigns across Dubai and the UAE that deliver lasting impact and measurable results.
                        <br><br>
                        Contact us today to explore unipole advertising opportunities and take your brand visibility to the next level.
                    </p>
                    <br>
                    <h4>Prime Unipole Advertising Locations in Dubai</h4>
                    <p>
                        Some of the most in-demand unipole locations include:
                        <br>
                        <span class="badge badge-default badge-location"><i class="bi bi-geo-alt"></i> Sheikh Zayed Road</span>
                        <span class="badge badge-default badge-location"><i class="bi bi-geo-alt"></i> Al Khail Road</span>
                        <span class="badge badge-default badge-location"><i class="bi bi-geo-alt"></i> Dubai–Abu Dhabi Highway</span>
                        <span class="badge badge-default badge-location"><i class="bi bi-geo-alt"></i> Business Bay</span>
                        <span class="badge badge-default badge-location"><i class="bi bi-geo-alt"></i> Downtown Dubai</span>
                        <span class="badge badge-default badge-location"><i class="bi bi-geo-alt"></i> Jumeirah Beach Road</span>
                        <span class="badge badge-default badge-location"><i class="bi bi-geo-alt"></i> Dubai Marina</span>
                        <span class="badge badge-default badge-location"><i class="bi bi-geo-alt"></i> Deira & Bur Dubai</span>
                        <br>
                        These areas offer optimal visibility and traffic, making them perfect for long-term brand exposure.
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

        <section id="service-cards" class="blog-section striped-section section faq-new-section">

          <div class="container">

            <div class="row gy-4 first-row">

                <div class="col-lg-12">
                    <h4 class="text-center">Frequently Asked Questions</h4>
                    <br>
                    <div class="faq " id="accordion">
                        <div class="card">
                            <div class="card-header" id="faqHeading-10">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-10" data-aria-expanded="true" data-aria-controls="faqCollapse-10">
                                        <span class="badge">&nbsp;</span>What is the primary advantage of a Unipole over a standard billboard?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-10" class="collapse show" aria-labelledby="faqHeading-10" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Unipoles are mounted on a single high pillar, giving them significant height. This ensures your ad is visible from a great distance and stays above the line of sight of other roadside distractions.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-11">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-11" data-aria-expanded="false" data-aria-controls="faqCollapse-11">
                                        <span class="badge">&nbsp;</span>Are your Unipoles located on major highways?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-11" class="collapse" aria-labelledby="faqHeading-11" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Yes, we have a network of Unipoles positioned along high-traffic arteries and expressways, ensuring maximum "dwell time" for commuters in traffic.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-12">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-12" data-aria-expanded="false" data-aria-controls="faqCollapse-12">
                                        <span class="badge">&nbsp;</span>Can a Unipole be double-sided?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-12" class="collapse" aria-labelledby="faqHeading-12" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Absolutely. We offer V-shaped or double-sided Unipoles so your brand message can be seen by traffic moving in both directions.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-13">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-13" data-aria-expanded="false" data-aria-controls="faqCollapse-13">
                                        <span class="badge">&nbsp;</span>How do you ensure the lighting is consistent at night?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-13" class="collapse" aria-labelledby="faqHeading-13" data-parent="#accordion">
                                <div class="card-body">
                                    <p>We use high-intensity, uniform LED floodlighting systems that prevent "hot spots" or shadows, ensuring your creative is perfectly legible 24/7.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="faqHeading-14">
                                <div class="mb-0">
                                    <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-14" data-aria-expanded="false" data-aria-controls="faqCollapse-14">
                                        <span class="badge">&nbsp;</span>What wind speeds can your Unipole structures withstand?
                                    </h5>
                                </div>
                            </div>
                            <div id="faqCollapse-14" class="collapse" aria-labelledby="faqHeading-14" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Our structures are engineered to meet strict municipal safety standards, capable of withstanding extreme weather conditions and high wind loads common in the region.</p>
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